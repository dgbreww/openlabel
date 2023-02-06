<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

use App\Rules\CheckCardDate;

use App\Http\Controllers\EmailSending;
use App\Models\UserModel;
use App\Models\PackageModel;
use App\Models\CategoryModel;
use App\Models\OrderModel;
use App\Models\JobsModel;

use Stripe;

class Home extends Controller {

	private $status = array();

	public function index() {

		$getCategory = JobsModel::select('category.*', 'media.path')
		->join('category', 'jobs.category_id', '=', 'category.id')
		->leftJoin('media', 'category.category_img', '=', 'media.id')
		->groupBy('jobs.category_id')
		->where('job_status', 'published')->get();

		$getJobs = JobsModel::select('jobs.*', 'orders.package_name', 'orders.no_of_videos', 'orders.timeline', 'category.category_name')
		->join('orders', 'jobs.order_id', '=', 'orders.id')
		->leftJoin('category', 'jobs.category_id', '=', 'category.id')
		->leftJoin('platform', 'jobs.platform_id', '=', 'platform.id')
		->leftJoin('genre', 'jobs.genre_id', '=', 'genre.id')
		->leftJoin('video_size', 'jobs.video_size', '=', 'video_size.id')
		->where('jobs.job_status', 'published')->limit(10)->get();

		$getCategory = CategoryModel::select('category.*', 'media.path')->leftJoin('media', 'category.category_img', '=', 'media.id')->get();

		$getCreators = UserModel::where('users.user_type', 'creator')
		->where('users.verified', 'yes')
		->where('users.account_status', 'active')
		->leftJoin('badges', 'users.badge_id', '=', 'badges.id')
		->select('users.*', 'badges.badge_name', 'badges.badge_img')
		->limit(10)->get();

		$data = array(
			'siteSettings' => siteSettings(),
			'title' => 'Home',
			'categoryData' => $getCategory,
			'creatorsData' => $getCreators,
			'jobsData' => $getJobs,
		);

		return view('vwHome', $data);
	}

	public function aboutUs() {

		$data = array(
			'siteSettings' => siteSettings(),
			'title' => 'About Us'
		);

		return view('vwAboutUs', $data);
	}

	public function login() {

		//check if user is already login then redirect to dashboard
		$userSess = Session::get('userSess');
		
		if (!empty($userSess)) {
			return redirect('/user/dashboard');	
		}

		$data = array(
			'siteSettings' => siteSettings(),
			'title' => 'Login',
			'verifyStatus' => Session::get('verifyStatus'),
		);

		return view('vwLogin', $data);
	}

	public function signUp() {

		//check if user is already login then redirect to dashboard
		$userSess = Session::get('userSess');
		
		if (!empty($userSess)) {
			return redirect('/user/dashboard');	
		}

		$data = array(
			'siteSettings' => siteSettings(),
			'route' => request()->segment(1),
			'title' => 'Sign Up'
		);

		return view('vwSignUp', $data);
	}

	public function forgotPassword() {

		//check if user is already login then redirect to dashboard
		$userSess = Session::get('userSess');
		
		if (!empty($userSess)) {
			return redirect('/user/dashboard');	
		}

		$data = array(
			'siteSettings' => siteSettings(),
			'route' => request()->segment(1),
			'title' => 'Forgot Password'
		);

		return view('vwForgotPassword', $data);
	}

	public function termsCondition() {

		$data = array(
			'siteSettings' => siteSettings(),
			'title' => 'Terms & Condition'
		);

		return view('vwTermsAndCondition', $data);
	}

	public function privacyPolicy() {

		$data = array(
			'siteSettings' => siteSettings(),
			'title' => 'Privacy Policy'
		);

		return view('vwPrivacyPolicy', $data);
	}

	public function packages() {

		//remove checkout session
		Session::forget('checkout');

		//packages will only display to artist
		$userInfo = userInfo();

		if ($userInfo->user_type == 'creator') {
			return redirect('/');
		}

		$getCategoryList = CategoryModel::select('category.*')->join('packages', 'category.id', '=', 'packages.category_id')->where('packages.is_active', 'active')->where('category.is_active', 1)->groupBy('packages.category_id')->get();

		$allCategoryList = CategoryModel::where('is_active', 1)->get();

		$data = array(
			'siteSettings' => siteSettings(),
			'title' => 'Packages',
			'categoryList' => $getCategoryList,
			'allCategoryList' => $allCategoryList,
		);

		return view('vwPackages', $data);
	}

	public function thankyou() {

		$data = array(
			'siteSettings' => siteSettings(),
			'title' => 'Thank You'
		);

		return view('vwThankYou', $data);
	}

	public function faq() {

		$data = array(
			'siteSettings' => siteSettings(),
			'title' => 'FAQ'
		);

		return view('vwFAQ', $data);
	}

	public function validatePackage(Request $request) {
		
		if ($request->ajax()) {

			$userInfo = userInfo();

			//check user type
			if ($userInfo->user_type != 'creator') {
				
				$packageId = $request->post('packageId');

				//get the package from id
				$getPackage = PackageModel::where('id', $packageId)->where('is_active', 'active')->first();

				if (!empty($getPackage)) {

					//check if it is custom package then validate with user id
					if (!empty($getPackage->user_id)) {
						
						if ($getPackage->user_id != $userInfo->id) {
							
							$this->status = array(
								'error' => true,
								'eType' => 'final',
								'msg' => 'Something went wrong.'
							);

							echo json_encode($this->status);
							die();

						}

						//check if it is free then add data into order
						if (!$getPackage->price) {

							//check if free package is already purchased by artist
							$isPackageAlreadyPurchased = OrderModel::where('package_id', $getPackage->id)->where('user_id', $userInfo->id)->count();
							
							if (!$isPackageAlreadyPurchased) {
								
								$orderObj = array(
									'user_id' => $userInfo->id,
									'package_id' => $getPackage->id,
									'package_name' => $getPackage->package_name,
									'category_id' => $getPackage->category_id,
									'no_of_videos' => $getPackage->no_of_videos,
									'no_of_videos_received' => $getPackage->no_of_videos_received,
									'timeline' => $getPackage->timeline,
									'price' => $getPackage->price,
									'payout' => $getPackage->payout,
									'is_package_used' => 'no'
								);

								//insert into database and redirect user to thank you page
								$isAdded = OrderModel::create($orderObj);

					        	if ($isAdded) {

					        		$this->status = array(
										'error' => false,
										'redirect' => url('thank-you')
									);

					        	} else {
					        		$this->status = array(
										'error' => true,
										'eType' => 'final',
										'msg' => 'Something went wrong.'
									);
					        	}

							} else {

								$this->status = array(
									'error' => true,
									'eType' => 'final',
									'msg' => 'You have already purchased this package.'
								);

								echo json_encode($this->status);
								die();

							}

						} else {

							$request->session()->put('checkout', array(
			        			'userId' => $userInfo->id,
			        			'packageId' => $getPackage->id,
			        			'price' => $getPackage->price
			        		));

			        		$this->status = array(
								'error' => false,						
								'redirect' => url('/checkout')
							);

						}

					} else {

						$request->session()->put('checkout', array(
		        			'userId' => $userInfo->id,
		        			'packageId' => $getPackage->id,
		        			'price' => $getPackage->price
		        		));

		        		$this->status = array(
							'error' => false,						
							'redirect' => url('/checkout')
						);

					}

				} else {
					$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'Something went wrong.'
					);
				}

			} else {
				$this->status = array(
					'error' => true,
					'eType' => 'final',
					'msg' => 'Something went wrong.'
				);
			}

		} else {

			$this->status = array(
				'error' => true,
				'eType' => 'final',
				'msg' => 'Something went wrong'
			);

		}

		echo json_encode($this->status);

	}

	public function checkout(Request $request) {
		
		//check if checkout session exist
		$checkoutSess = Session::get('checkout');

		if (!empty($checkoutSess)) {
			
			$userId = $checkoutSess['userId'];
			$packageId = $checkoutSess['packageId'];
			$getPackageDetail = PackageModel::join('category', 'packages.category_id', '=', 'category.id')->where('packages.id', $packageId)->where('packages.is_active', 'active')->first();

			$data = array(
				'siteSettings' => siteSettings(),
				'userId' => $userId,
				'packageData' => $getPackageDetail,
				'title' => 'Checkout',
			);

			return view('vwCheckout', $data);

		} else {
			return redirect('/');
		}

	}

	public function doCheckout(Request $request) {

		if ($request->ajax()) {

			$checkoutSess = Session::get('checkout');

			if (!empty($checkoutSess)) {

				$validator = Validator::make($request->post(), [
					'cardNumber' => 'required|numeric',
					'date' => ['required', new CheckCardDate()],
		            'cvv' => 'required|numeric|digits:3',
		            'nameOnCard' => 'required',
		        ]);

		        if ($validator->fails()) {
	            
		            $errors = $validator->errors()->getMessages();

		            $this->status = array(
						'error' => true,
						'eType' => 'field',
						'errors' => $errors,
						'msg' => 'Validation failed'
					);

		        } else {

		        	$date = $request->post('date');
					$breakDate = explode('/', $date);
					$month = isset($breakDate[0])? $breakDate[0]:'';
					$month = str_replace(' ', '', $month);

					$year = isset($breakDate[1])? $breakDate[1]:'';
					$year = str_replace(' ', '', $year);

					$userId = $checkoutSess['userId'];
					$packageId = $checkoutSess['packageId'];
					$getPackageDetail = PackageModel::where('id', $packageId)->where('is_active', 'active')->first();
					$amount = $getPackageDetail->price;

					$stripe = Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

					try {

			            $response = \Stripe\Token::create(array(
			                "card" => array(
			                    "number"    => $request->post('cardNumber'),
			                    "exp_month" => $month,
			                    "exp_year"  => $year,
			                    "cvc"       => $request->post('cvv')
			            )));

			            if (isset($response->id) && !empty($response->id)) {
			            	
			            	//do charging

			            	$charge = \Stripe\Charge::create([
				                'card' => $response->id,
				                'currency' => 'USD',
				                'amount' =>  $amount * 100,
				                'description' => 'Buy Package',
				            ]);				            

				            //if amount has been deducted then save the detail into the table and redirect customer to the thank you page

				            if (isset($charge->status) && $charge->status == 'succeeded') {

				            	$obj = [
				            		'user_id' => $userId,
				            		'package_id' => $packageId,
				            		'package_name' => $getPackageDetail->package_name,
				            		'category_id' => $getPackageDetail->category_id,
				            		'no_of_videos' => $getPackageDetail->no_of_videos,
				            		'no_of_videos_received' => $getPackageDetail->no_of_videos_received,
				            		'timeline' => $getPackageDetail->timeline,
				            		'price' => $getPackageDetail->price,
				            		'payout' => $getPackageDetail->payout,
				            		'stripe_id' => $charge->id,
				            		'balance_transaction_id' => $charge->balance_transaction,
				            	];

				            	$isAdded = OrderModel::create($obj);

					        	if ($isAdded) {

					        		//remove session
					        		Session::forget('checkout');

					        		$this->status = array(
										'error' => false,
										'redirect' => url('thank-you')
									);

					        	} else {
					        		$this->status = array(
										'error' => true,
										'eType' => 'final',
										'msg' => 'Something went wrong.'
									);
					        	}
				            	
				            } else {
				            	$this->status = array(
									'error' => true,
									'eType' => 'final',
									'msg' => 'Something went wrong'
								);
				            }

			            } else {
			            	$this->status = array(
								'error' => true,
								'eType' => 'final',
								'msg' => 'Something went wrong'
							);
			            }
			 
			        } catch (Exception $e) {

			        	$this->status = array(
							'error' => true,
							'eType' => 'final',
							'msg' => $e->getMessage()
						);

			        }

		        }
				
			} else {

				$this->status = array(
					'error' => true,
					'eType' => 'final',
					'msg' => 'Something went wrong'
				);

			}

		} else {

			$this->status = array(
				'error' => true,
				'eType' => 'final',
				'msg' => 'Something went wrong'
			);

		}

		echo json_encode($this->status);
	}

	public function mail($debug=false, $level=0) {

		$data = array(
			'name' => 'Alfaiz',
			'email' => 'alfaizm19@gmail.com',
			'debug' => $debug,
			'level' => $level,
		);

		$isMailSend = EmailSending::test($data);

		if ($isMailSend) {
			echo "Send";
		} else {
			echo "<pre>";
			print_r($isMailSend);
		}
	}

}