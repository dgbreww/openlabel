<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use File;

use App\Http\Controllers\EmailSending;
use App\Models\UserModel;
use App\Models\OrderModel;

use App\Models\CategoryModel;
use App\Models\PlatformModel;
use App\Models\GenreModel;
use App\Models\VideoSizeModel;
use App\Models\JobsModel;
use App\Models\NewsletterModel;
use App\Models\CustomPackageModel;
use App\Models\SaveJobsModel;
use App\Models\ApplyJobsModel;
use App\Models\WalletHistoryModel;
use App\Models\PackageModel;
use App\Models\WithdrawalRequestModel;

class User extends Controller {

	private $status = array();

	public function dashboard(Request $request) {
		
		//check user type
		$userInfo = userInfo();

		$userId = $userInfo->id;

		$packageOrderData = array();
		$myJobsList = array();

		$singleJob = array();
		$appliedJobs = array();
		$customPackage = array();

		if ($userInfo->user_type == 'artist') {
			// show artist dashboard
			//$templateName = 'vwArtistDashboard';

			$packageOrderData = OrderModel::select('orders.*', 'category.category_name')->join('category', 'orders.category_id', '=', 'category.id')->where('orders.user_id', $userId)->get();

			$myJobsList = JobsModel::select('jobs.*', 'category.category_name', 'platform.platform_name', 'genre.genre_name', 'video_size.video_slug', 'orders.no_of_videos', 'orders.timeline', 'orders.price', 'orders.payout')
			->leftJoin('category', 'jobs.category_id', '=', 'category.id')
			->leftJoin('platform', 'jobs.platform_id', '=', 'platform.id')
			->leftJoin('genre', 'jobs.genre_id', '=', 'genre.id')
			->leftJoin('video_size', 'jobs.video_size', '=', 'video_size.id')
			->join('orders', 'jobs.order_id', '=', 'orders.id')
			->where('jobs.user_id', $userId)
			->get();

			$getJobId = $request->get('job');

			if (!empty($getJobId)) {

				$singleJob = JobsModel::select('jobs.*', 'category.category_name', 'platform.platform_name', 'genre.genre_name', 'video_size.video_slug', 'orders.no_of_videos', 'orders.timeline', 'orders.price', 'orders.payout')
				->leftJoin('category', 'jobs.category_id', '=', 'category.id')
				->leftJoin('platform', 'jobs.platform_id', '=', 'platform.id')
				->leftJoin('genre', 'jobs.genre_id', '=', 'genre.id')
				->leftJoin('video_size', 'jobs.video_size', '=', 'video_size.id')
				->join('orders', 'jobs.order_id', '=', 'orders.id')
				->where('jobs.id', $getJobId)->where('jobs.user_id', $userId)
				->first();

				$appliedJobs = ApplyJobsModel::where('job_id', $getJobId)->get();

			}

			$myTransactions = OrderModel::where('user_id', $userId)->get();
			$customPackage = PackageModel::where('user_id', $userId)->get();

			$templateName = 'vwArtistProfile';

		} else {
			// show creator dashboard
			//$templateName = 'vwCreatorDashboard';

			$myJobsList = ApplyJobsModel::select('apply_jobs.*', 'jobs.title', 'orders.no_of_videos', 'orders.timeline', 'orders.price', 'orders.payout', 'category.category_name')
			->join('jobs', 'apply_jobs.job_id', '=', 'jobs.id')
			->join('orders', 'jobs.order_id', '=', 'orders.id')
			->join('category', 'orders.category_id', '=', 'category.id')
			->where('apply_jobs.user_id', $userId)->get();

			$myTransactions = WalletHistoryModel::where('user_id', $userId)->get();

			$templateName = 'vwCreatorProfile';
		}

		$coverImg = url('public/frontend//img/cover-bg.png');
		$profileImg = url('public/frontend/img/profile-img.png');

		if (!empty($userInfo->cover_image)) {
			$coverImg = url('public/'.$userInfo->cover_image);
		}

		if (!empty($userInfo->profile_picture)) {
			$profileImg = url('public/'.$userInfo->profile_picture);
		}

		$categoryList = CategoryModel::where('is_active', 1)->get();

		$data = array(
			'siteSettings' => siteSettings(),
			'userInfo' => $userInfo,
			'title' => 'Dashboard',
			'name' => $userInfo->first_name.' '.$userInfo->last_name,
			'coverImg' => $coverImg,
			'profileImg' => $profileImg,
			'packageOrderData' => $packageOrderData,
			'jobListData' => $myJobsList,
			'categoryList' => $categoryList,
			'singleJob' => $singleJob,
			'appliedJobsList' => $appliedJobs,
			'myTransactions' => $myTransactions,
			'customPackage' => $customPackage
		);

		return view($templateName, $data);
	}

	public function newPassword($token) {

		//check if token exist
		$getUser = UserModel::where('token', $token)
	        	->where('provider_type', 'website')->where('verified', 'yes')
	        	->first();

	    if (!empty($getUser)) {
	    	
	    	$userSess = Session::get('userSess');
		
			if (!empty($userSess)) {
				return redirect('/user/dashboard');	
			}

			$data = array(
				'siteSettings' => siteSettings(),
				'title' => 'Reset Password',
				'verifyStatus' => Session::get('verifyStatus'),
				'token' => $token
			);

			return view('vwResetPassword', $data);

	    } else {
	    	return redirect('/');
	    }
	}

	public function myProfile() {
		//check user type
		$userInfo = userInfo();

		$userId = $userInfo->id;

		$packageOrderData = array();
		$myJobsList = array();

		if ($userInfo->user_type == 'artist') {
			
			// show artist dashboard
			$packageOrderData = OrderModel::select('orders.*', 'category.category_name')->join('category', 'orders.category_id', '=', 'category.id')->where('orders.user_id', $userId)->get();

			$myJobsList = JobsModel::select('jobs.*', 'category.category_name', 'platform.platform_name', 'genre.genre_name', 'video_size.video_slug')
			->leftJoin('category', 'jobs.category_id', '=', 'category.id')
			->leftJoin('platform', 'jobs.platform_id', '=', 'platform.id')
			->leftJoin('genre', 'jobs.genre_id', '=', 'genre.id')
			->leftJoin('video_size', 'jobs.video_size', '=', 'video_size.id')
			->where('jobs.user_id', $userId)
			->get();
			
			$templateName = 'vwArtistProfile';

		} else {
			
			// show creator dashboard
			$templateName = 'vwCreatorProfile';
		}

		$countryList = DB::table('country')->where('phonecode', '!=', '0')->groupBy('phonecode')->get();
		$userInfo = userInfo();

		$coverImg = url('public/frontend//img/cover-bg.png');
		$profileImg = url('public/frontend/img/profile-img.png');

		if (!empty($userInfo->cover_image)) {
			$coverImg = url('public/'.$userInfo->cover_image);
		}

		if (!empty($userInfo->profile_picture)) {
			$profileImg = url('public/'.$userInfo->profile_picture);
		}

		$data = array(
			'title' => 'My Profile',
			'siteSettings' => siteSettings(),
			'countryList' => $countryList,
			'userInfo' => $userInfo,
			'name' => $userInfo->first_name.' '.$userInfo->last_name,
			'coverImg' => $coverImg,
			'profileImg' => $profileImg,
			'packageOrderData' => $packageOrderData,
			'jobListData' => $myJobsList
		);

		return view($templateName, $data);

	}

	public function postJob($orderId) {
		$userInfo = userInfo();
		$userId = $userInfo->id;

		//check if user is artist then user can able to post the job

		if ($userInfo->user_type == 'artist') {

			//check if order id exist and job is not posted against this order id

			$getOrderData = OrderModel::where('id', $orderId)->where('user_id', $userId)->where('is_package_used', 'no')->first();

			if (!empty($getOrderData)) {
				
				//show post job interface

				$categoryData = CategoryModel::where('is_active', 1)->get();
				$platformData = PlatformModel::where('is_active', 1)->get();
				$genreData = GenreModel::where('is_active', 1)->get();
				$videoSizeData = VideoSizeModel::where('is_active', 1)->get();

				$data = array(
					'title' => 'Post Job',
					'siteSettings' => siteSettings(),
					'userInfo' => $userInfo,
					'orderData' => $getOrderData,
					'categoryData' => $categoryData,
					'platformData' => $platformData,
					'genreData' => $genreData,
					'videoSizeData' => $videoSizeData,
				);

				return view('vwArtistPostJob', $data);

			} else {
				return redirect('/user/my-profile');
			}

		} else {
			return redirect('/user/my-profile');
		}
	}

	public function editJob($jobId) {
		$userInfo = userInfo();
		$userId = $userInfo->id;

		//check if user is artist then user can able to post the job

		if ($userInfo->user_type == 'artist') {

			//check if job id and user id exist
			$getJobData = JobsModel::select('jobs.*', 'orders.package_name', 'orders.no_of_videos', 'orders.timeline')
			->join('orders', 'jobs.order_id', '=', 'orders.id')
			->where('jobs.id', $jobId)->where('jobs.user_id', $userId)->first();

			if (!empty($getJobData)) {
				
				//show post job interface

				$categoryData = CategoryModel::where('is_active', 1)->get();
				$platformData = PlatformModel::where('is_active', 1)->get();
				$genreData = GenreModel::where('is_active', 1)->get();
				$videoSizeData = VideoSizeModel::where('is_active', 1)->get();

				$data = array(
					'title' => 'Post Job',
					'siteSettings' => siteSettings(),
					'userInfo' => $userInfo,
					'jobData' => $getJobData,
					'categoryData' => $categoryData,
					'platformData' => $platformData,
					'genreData' => $genreData,
					'videoSizeData' => $videoSizeData,
				);

				return view('vwArtistEditPostJob', $data);

			} else {
				return redirect('/user/my-profile');
			}

		} else {
			return redirect('/user/my-profile');
		}
	}

	public function doPostJob(Request $request) {
		if ($request->ajax()) {

			$validator = Validator::make($request->all(), [
				'projectTitle' => 'required',
				'platform' => 'required|numeric',
	            'genre' => 'required|numeric',
	            'videoSize' => 'required|numeric',
	            'jobBrief' => 'required',
	            'orderId' => 'required|numeric',
	            'documents.*' => 'max:10024|mimes:png,jpg,jpeg,mp4,mp3,pdf,doc,xlsx,xls,docx'
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

	        	//check file count
	        	$countTotalFiles = 0;
	        	if ($request->hasfile('documents')) {
	        		$countTotalFiles = count($request->file('documents'));
	        	}

	        	if ($countTotalFiles > 5) {
	        		$this->status = array(
						'error' => true,
						'eType' => 'field',
						'errors' => array(
							'documents.0' => 'You cannot upload more than 5 documents.'
						),
						'msg' => 'Validation failed'
					);
					echo json_encode($this->status);
					die();
	        	}

	        	$userInfo = userInfo();
	        	$userId = $userInfo->id;
	        	$orderId = $request->post('orderId');

	        	//check user id and order id

	        	$getOrderData = OrderModel::where('id', $orderId)->where('user_id', $userId)->where('is_package_used', 'no')->first();

	        	if (!empty($getOrderData)) {

	        		$title = $request->post('projectTitle');
	        		
	        		$slug = Str::slug($request->post('projectTitle'));
	        		$slug = validateSlug('jobs', 'slug', $slug);
	        		
	        		$obj = array(
		        		'user_id' => $userId,
		        		'title' => $title,
		        		'slug' => $slug,
		        		'order_id' => $orderId,
		        		'category_id' => $getOrderData->category_id,
		        		'platform_id' => $request->post('platform'),
		        		'genre_id' => $request->post('genre'),
		        		'video_size' => $request->post('videoSize'),
		        		'job_brief' => $request->post('jobBrief'),
		        		'job_status' => 'published',
		        	);

		        	$destinationPath = 'uploads/documents/';

		        	//check if request for new file then remove the old one and upload new one
		        	if ($request->hasfile('documents')) {

		        		$i=1;
		        		foreach($request->file('documents') as $key => $file) {
			                
			                $fileOriginalName = $file->getClientOriginalName();
			                $fileOriginalNameWithoutExt = pathinfo($fileOriginalName, PATHINFO_FILENAME);
			 				$fileExt = $file->extension();

			 				$fileNameWithoutExtSlugify = Str::slug($fileOriginalNameWithoutExt);
			 				$finalFileName = $fileNameWithoutExtSlugify.'-'.uniqid().'.'.$fileExt;

			 				$isUploaded = $file->move(public_path($destinationPath), $finalFileName);

			 				if ($isUploaded) {
				        		$obj['job_media_'.$i] = $destinationPath.'/'.$finalFileName;
			        		}

			        		$i++;

			            }

		        	}

		        	$isJobPosted = JobsModel::create($obj);

		        	if ($isJobPosted) {

		        		//once job posted then marked order package used will be yes
		        		OrderModel::where('user_id', $userId)->where('id', $orderId)->update(['is_package_used'=>'yes']);		        		
		        		
		        		$this->status = array(
							'error' => false,
							'msg' => 'Your job has been successfully posted',
							'redirect' => url('/user/my-profile?tab=creation')
						);

		        	} else {
		        		$this->status = array(
							'error' => true,
							'eType' => 'final',
							'msg' => 'Unable to send an email.'
						);
		        	}

	        	} else {
	        		$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'This package is already used.'
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

		echo json_encode($this->status);
	}

	public function doUpdateJob(Request $request) {
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
				'projectTitle' => 'required',
				'platform' => 'required|numeric',
	            'genre' => 'required|numeric',
	            'videoSize' => 'required|numeric',
	            'jobBrief' => 'required',
	            'jobId' => 'required|numeric'
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

	        	$userInfo = userInfo();
	        	$userId = $userInfo->id;
	        	$jobId = $request->post('jobId');

	        	//check user id and job id
	        	$getJobData = JobsModel::where('id', $jobId)->where('user_id', $userId)->where('job_status', 'published')->first();

	        	if (!empty($getJobData)) {

	        		$title = $request->post('projectTitle');
	        		
	        		$slug = Str::slug($request->post('projectTitle'));
	        		$slug = validateSlug('jobs', 'slug', $slug);
	        		
	        		$obj = array(
		        		'title' => $title,
		        		'slug' => $slug,		        		
		        		'platform_id' => $request->post('platform'),
		        		'genre_id' => $request->post('genre'),
		        		'video_size' => $request->post('videoSize'),
		        		'job_brief' => $request->post('jobBrief'),		        		
		        	);

		        	$isJobUpdated = JobsModel::where('id', $jobId)->update($obj);

		        	if ($isJobUpdated) {
		        		
		        		$this->status = array(
							'error' => false,
							'msg' => 'Your job has been updated successfully',
							'redirect' => url('/user/my-profile')
						);

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
						'msg' => 'This package is already used.'
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

		echo json_encode($this->status);
	}

	public function doSignUp(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
				'firstName' => 'required',
				'lastName' => 'required',
	            'email' => 'required|email|unique:users,email',
	            'password' => 'required',
	            'userType' => 'required|in:artist,creator',
	            'agreeTermsCondition' => 'required|in:yes,no',
	        ], ['agreeTermsCondition.required' => 'Please accept terms and conditions']);

	        if ($validator->fails()) {
	            
	            $errors = $validator->errors()->getMessages();

	            $this->status = array(
					'error' => true,
					'eType' => 'field',
					'errors' => $errors,
					'msg' => 'Validation failed'
				);

	        } else {
	        	
	        	$obj = array(
	        		'first_name' => $request->post('firstName'),
	        		'last_name' => $request->post('lastName'),
	        		'email' => $request->post('email'),
	        		'password' => Hash::make($request->post('password')),
	        		'user_type' => $request->post('userType'),
	        		'provider_type' => 'website',
	        		'verified' => 'no',
	        		'token' => hash('SHA256', uniqid())
	        	);

	        	//email template
	        	$isMailSent = EmailSending::verifyUserEmail($obj);

	        	if ($isMailSent) {

	        		UserModel::create($obj);
	        		
	        		$this->status = array(
						'error' => false,
						'mail' => $isMailSent,
						'msg' => 'Please check your inbox to verify your email.',
						'redirect' => url('login')
					);

	        	} else {
	        		$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'Unable to send an email.'
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

		echo json_encode($this->status);

	}

	public function doLogin(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
	            'email' => 'required|email',
	            'password' => 'required',
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

	        	$cond = [
	        		['email', $request->post('email')],
	        		['provider_type', 'website']
	        	];

	        	$isUserExist = UserModel::where($cond)->first();

	        	if (!empty($isUserExist)) {
	        		
	        		//check password
	        		if (Hash::check($request->post('password'), $isUserExist->password)) {

	        			//check if email verified
	        			if ($isUserExist->verified == 'yes' && $isUserExist->account_status == 'active') {
	        			
	        				$request->session()->put('userSess', array(
			        			'userId' => $isUserExist->id,
			        			'name' => $isUserExist->first_name,
			        			'userType' => $isUserExist->user_type,
			        		));

			        		$redirect = $request->post('redirect');

			        		$url = url('user/dashboard');

			        		if ($redirect == 'creations') {
			        			$url = url('creations');
			        		} elseif ($redirect == 'creators') {
			        			$url = url('creators');
			        		}

			        		$this->status = array(
								'error' => false,
								'redirect' => $url
							);

		        		} elseif ($isUserExist->account_status == 'inactive') {
		        			
		        			$this->status = array(
								'error' => true,
								'eType' => 'final',
								'msg' => 'Your account is not approved by Admin.'
							);

		        		} else {
		        			$this->status = array(
								'error' => true,
								'eType' => 'final',
								'msg' => 'Your account is not verified. Please check your email'
							);
		        		}

	        		} else {
	        			$this->status = array(
							'error' => true,
							'eType' => 'final',
							'msg' => 'Email or password may be incorrect'
						);
	        		}

	        	} else {
	        		$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'Email or password may be incorrect'
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

		echo json_encode($this->status);

	}

	public function doVerify($token, Request $request) {
		//verify token
		$getUserDetail = UserModel::where('token', $token)->where('verified', 'no')->first();
		
		if (!empty($getUserDetail)) {

			//check if user type is creator then account will be automatically verified and don't need for admin approval but for artist admin will verify

			if ($getUserDetail->user_type == 'creator') {
				
				//if verified remove token and verified will be yes
				$isUpdated = UserModel::where('id', $getUserDetail->id)->update(['token' => null, 'verified' => 'yes', 'account_status' => 'active']);

				$msg = "Your account has been verified.";

			} else {

				$isUpdated = UserModel::where('id', $getUserDetail->id)->update(['token' => null, 'verified' => 'yes', 'account_status' => 'inactive']);

				$msg = "Your account has been verified but has not been approved by Admin.";

			}

			if ($isUpdated) {
				
				return redirect('/login')->with('verifyStatus', array(
					'isVerified' => true,
					'msg' => $msg
				));

			} else {

				return redirect('/login')->with('verifyStatus', array(
					'isVerified' => false,
					'msg' => 'Something went wrong'
				));

			}

		} else {
			return redirect('/');
		}

	}

	public function doForgotPassword(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
	            'email' => 'required|email',
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

	        	//check if email exist and provider_type should be website

	        	$getUser = UserModel::where('email', $request->post('email'))
	        	->where('provider_type', 'website')->where('verified', 'yes')
	        	->first();

	        	if (!empty($getUser)) {
	        		
	        		//create token
	        		$token = hash('SHA256', uniqid());

	        		$isTokenUpdated = UserModel::where([['id', $getUser->id]])->update(['token' => $token]);

	        		if ($isTokenUpdated) {

	        			$mailObj = array(
	        				'name' => $getUser->first_name,
	        				'email' => $getUser->email,
	        				'resetPasswordLink' => url('user/new-password/'.$token)
	        			);
	        			
	        			$isMailSent = EmailSending::adminResetPassword($mailObj);
    					//$isMailSent = true;

    					if ($isMailSent) {
    						
    						$this->status = array(
								'error' => false,
								'msg' => 'A resent password link has been sent to your email.',
								'redirect' => url('/')
							);

    					} else {
    						$this->status = array(
								'error' => true,
								'eType' => 'final',
								'msg' => 'Sorry! Unable to send an email.'
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
						'msg' => 'Your account is not registered with us.'
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

		echo json_encode($this->status);

	}

	public function doUpdateNewPassword(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
	            'password' => 'min:6|required_with:confirmPassword|same:confirmPassword',
	            'confirmPassword' => 'min:6',
	            'token' => 'required',
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
	        	
	        	$cond = [
	        		['token', $request->post('token')],
	        		['verified', 'yes'],
	        		['provider_type', 'website']
	        	];

	        	$isUserExist = UserModel::where($cond)->first();

	        	if (!empty($isUserExist)) {

	        		$newPassword = Hash::make($request->post('password'));

	        		$updateObj = array(
	        			'password' => $newPassword,
	        			'token' => null,
	        		);

	        		$isUpdated = UserModel::where([['id', $isUserExist->id]])->update($updateObj);

	        		if ($isUpdated) {

	        			//notify admin that your password has been changed

	        			$mailObj = array(
	        				'name' => $isUserExist->first_name,
	        				'email' => $isUserExist->email,
	        			);
	        			
	        			$isMailSent = EmailSending::userPassChangeNotify($mailObj);
	        			
	        			$this->status = array(
							'error' => false,
							'msg' => 'A password has been changed successfully.',
							'redirect' => url('/login')
						);

	        		} else {
	        			
	        			$this->status = array(
							'error' => true,
							'eType' => 'final',
							'msg' => 'Sorry! Unable to update the password.'
						);

	        		}

	        	} else {
	        		$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'Something went wrong.'
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

		echo json_encode($this->status);

	}

	public function doUpdateProfile(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->all(), [
				'firstName' => 'required',
				'lastName' => 'required',
				'countryCode' => 'required|numeric',
	            'mobile' => 'required|numeric|digits:10',
	            'address' => 'sometimes|nullable',
	            'tagLine' => 'sometimes|nullable',
	            'about' => 'sometimes|nullable',
	            'coverImage' => 'max:1024|mimes:png,jpg,jpeg',
	            'profileImage' => 'max:1024|mimes:png,jpg,jpeg',
	            'expertise' => 'sometimes|nullable'
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

	        	$userData = userInfo();
	        	$userId = $userData->id;
	        		        	
	        	$obj = array(
	        		'first_name' => $request->post('firstName'),
	        		'last_name' => $request->post('lastName'),
	        		'country_code' => $request->post('countryCode'),
	        		'phone_number' => $request->post('mobile'),
	        		'address' => $request->post('address'),
	        		'tag_line' => $request->post('tagLine'),
	        		'about' => $request->post('about'),
	        	);

	        	if (!empty($request->post('expertise'))) {
	        		$obj['expertise'] = implode(',', $request->post('expertise'));
	        	}

	        	$destinationPath = 'uploads/profiles/';

	        	//check if request for new file then remove the old one and upload new one
	        	if ($request->file('profileImage')) {

	        		$profileOriginalName = $request->file('profileImage')->getClientOriginalName();
	        		$profileOriginalNameWithoutExt = pathinfo($profileOriginalName, PATHINFO_FILENAME);
	        		$profileExt = $request->file('profileImage')->extension();

	        		$profileNameWithoutExtSlugify = Str::slug($profileOriginalNameWithoutExt);
	        		$finalProfileName = $profileNameWithoutExtSlugify.'-'.$userId.'.'.$profileExt;

	        		$isUploaded = $request->file('profileImage')->move(public_path($destinationPath), $finalProfileName);

	        		if ($isUploaded) {
	        			
	        			if ($userData->profile_picture) {
		        			File::delete(public_path($userData->profile_picture));
		        		}

		        		$obj['profile_picture'] = $destinationPath.'/'.$finalProfileName;

	        		}

	        	}

	        	if ($request->file('coverImage')) {

	        		$coverOriginalName = $request->file('coverImage')->getClientOriginalName();
	        		$coverOriginalNameWithoutExt = pathinfo($coverOriginalName, PATHINFO_FILENAME);
	        		$coverExt = $request->file('coverImage')->extension();

	        		$coverNameWithoutExtSlugify = Str::slug($coverOriginalNameWithoutExt);
	        		$finalCoverName = $coverNameWithoutExtSlugify.'-'.$userId.'.'.$coverExt;

	        		$isUploaded = $request->file('coverImage')->move(public_path($destinationPath), $finalCoverName);

	        		if ($isUploaded) {
	        			
	        			if ($userData->cover_picture) {
		        			File::delete(public_path($userData->cover_picture));
		        		}

		        		$obj['cover_image'] = $destinationPath.'/'.$finalCoverName;

	        		}

	        	}

	        	$isUpdated = UserModel::where('id', $userId)->update($obj);

	        	if ($isUpdated) {	        		
	        		
	        		$this->status = array(
						'error' => false,						
						'msg' => 'Profle has been updated successfully.',
					);

	        	} else {
	        		$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'Something went wrong.'
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

		echo json_encode($this->status);

	}

	public function doUpdatePaymentMethod(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->all(), [
				'stripeId' => 'required',
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

	        	$userData = userInfo();
	        	$userId = $userData->id;
	        	echo $stripeId = $request->post('stripeId');

	        	die();
	        		        	
	        	$obj = array(
	        		'first_name' => $request->post('firstName'),
	        		'last_name' => $request->post('lastName'),
	        		'country_code' => $request->post('countryCode'),
	        		'phone_number' => $request->post('mobile'),
	        		'address' => $request->post('address'),
	        		'tag_line' => $request->post('tagLine'),
	        		'about' => $request->post('about'),
	        	);

	        	if (!empty($request->post('expertise'))) {
	        		$obj['expertise'] = implode(',', $request->post('expertise'));
	        	}

	        	$destinationPath = 'uploads/profiles/';

	        	//check if request for new file then remove the old one and upload new one
	        	if ($request->file('profileImage')) {

	        		$profileOriginalName = $request->file('profileImage')->getClientOriginalName();
	        		$profileOriginalNameWithoutExt = pathinfo($profileOriginalName, PATHINFO_FILENAME);
	        		$profileExt = $request->file('profileImage')->extension();

	        		$profileNameWithoutExtSlugify = Str::slug($profileOriginalNameWithoutExt);
	        		$finalProfileName = $profileNameWithoutExtSlugify.'-'.$userId.'.'.$profileExt;

	        		$isUploaded = $request->file('profileImage')->move(public_path($destinationPath), $finalProfileName);

	        		if ($isUploaded) {
	        			
	        			if ($userData->profile_picture) {
		        			File::delete(public_path($userData->profile_picture));
		        		}

		        		$obj['profile_picture'] = $destinationPath.'/'.$finalProfileName;

	        		}

	        	}

	        	if ($request->file('coverImage')) {

	        		$coverOriginalName = $request->file('coverImage')->getClientOriginalName();
	        		$coverOriginalNameWithoutExt = pathinfo($coverOriginalName, PATHINFO_FILENAME);
	        		$coverExt = $request->file('coverImage')->extension();

	        		$coverNameWithoutExtSlugify = Str::slug($coverOriginalNameWithoutExt);
	        		$finalCoverName = $coverNameWithoutExtSlugify.'-'.$userId.'.'.$coverExt;

	        		$isUploaded = $request->file('coverImage')->move(public_path($destinationPath), $finalCoverName);

	        		if ($isUploaded) {
	        			
	        			if ($userData->cover_picture) {
		        			File::delete(public_path($userData->cover_picture));
		        		}

		        		$obj['cover_image'] = $destinationPath.'/'.$finalCoverName;

	        		}

	        	}

	        	$isUpdated = UserModel::where('id', $userId)->update($obj);

	        	if ($isUpdated) {	        		
	        		
	        		$this->status = array(
						'error' => false,						
						'msg' => 'Profle has been updated successfully.',
					);

	        	} else {
	        		$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'Something went wrong.'
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

		echo json_encode($this->status);

	}

	public function doChangePassword(Request $request) {

		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
				'currentPassword' => 'required|min:8',
	            'newPassword' => 'required|min:8|required_with:confirmPassword|same:confirmPassword',
	            'confirmPassword' => 'required|min:8',
	        ], [
	        	'currentPassword.required' => 'The current password must be required.', 
	        	'newPassword.required' => 'The new password must be required.',
	        	'confirmPassword.required' => 'The confirm password must be required.',
	        	
	        	'newPassword.required_with' => 'The new password and confirm password must match.', 
	        	'newPassword.same' => 'The new password and confirm password must match.', 

	        	'currentPassword.min' => 'The current password must be at least 8 characters.', 
	        	'newPassword.min' => 'The new password must be at least 8 characters.',
	        	'confirmPassword.min' => 'The confirm password must be at least 8 characters.',
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

	        	$userData = userInfo();

	        	//check if user entered the correct password
	        	if (Hash::check($request->post('currentPassword'), $userData->password)) {

	        		$updateObj = array(
	        			'password' => Hash::make($request->post('newPassword')),
	        		);

	        		$isUpdated = UserModel::where('id', $userData->id)->update($updateObj);

	        		if ($isUpdated) {

	        			//notify user that your password has been changed

	        			$mailObj = array(
	        				'name' => $userData->name,
	        				'email' => $userData->email,
	        			);
	        			
	        			$isMailSent = EmailSending::adminPassChangeNotify($mailObj);
	        			
	        			$this->status = array(
							'error' => false,
							'msg' => 'Your password has been changed successfully.',
						);

	        		} else {
	        			
	        			$this->status = array(
							'error' => true,
							'eType' => 'final',
							'msg' => 'Sorry! Unable to update the password.'
						);

	        		}

	        	} else {
	        		$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'Sorry! You have entered a wrong password.'
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

		echo json_encode($this->status);

	}

	public function doSubscribe(Request $request) {

		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
				'email' => 'required|email|unique:newsletter,email',
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

	        	$isCreated = NewsletterModel::create(['email' => $request->post('email')]);

	        	if ($isCreated) {
        			
        			$this->status = array(
						'error' => false,
						'msg' => 'Thank you for subscribing our newsletter.',
					);

        		} else {
        			
        			$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'Sorry! Something went wrong.'
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

		echo json_encode($this->status);
	}

	public function doCustomPackageMsg(Request $request) {
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
				'category' => 'required|numeric',
				'videos' => 'required|numeric|min:1',
				'videoReceived' => 'required|numeric|min:1',
				'timeline' => 'required|numeric|min:1',
	            'requirement' => 'required',
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

	        	$userData = userInfo();

	        	$obj = array(
	        		'user_id' => $userData->id,
	        		'category_id' => $request->post('category'),
	        		'no_of_videos' => $request->post('videos'),
	        		'no_of_videos_received' => $request->post('videoReceived'),
	        		'timeline' => $request->post('timeline'),
	        		'requirements' => $request->post('requirement'),
	        	);

	        	$isAdded = CustomPackageModel::create($obj);

	        	if ($isAdded) {
        			
        			$this->status = array(
						'error' => false,
						'msg' => 'Thank you for your interest. We will contact you soon',
					);

        		} else {
        			
        			$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'Sorry! Something went wrong.'
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

		echo json_encode($this->status);
	}

	public function doSaveJob(Request $request) {
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
				'jobId' => 'required|numeric',
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

	        	/*
	        		1. Check if user is logged in
	        		2. Only creator can save the job
	        		3. Check if job exist 
	        		4. If job is already saved then removed the job
	        	*/

	        	//check if user is logged in

	        	if ($request->session()->has('userSess')) {
	        		
	        		//check user type
	        		$userData = userInfo();
	        		$jobId = $request->post('jobId');

	        		if ($userData->user_type == 'creator') {

	        			//check if job exist
	        			$isExistJob = JobsModel::where('id', $jobId)->first();

	        			if (!empty($isExistJob)) {

	        				$userId = $userData->id;
	        				
	        				//check if job is already saved then remove the job else save the job
	        				$isAlreadySaved = SaveJobsModel::where('user_id', $userId)->where('job_id', $jobId)->first();

	        				if ($isAlreadySaved) {
	        					
	        					//remove the job
	        					$isUpdated = SaveJobsModel::where('user_id', $userId)->where('job_id', $jobId)->delete();
	        					$status = 'remove';
	        					$msg = "The Creation has been removed";

	        				} else {
	        					
	        					$isUpdated = SaveJobsModel::create(array(
	        						'user_id' => $userId,
	        						'job_id' => $jobId
	        					));

	        					$status = 'add';
	        					$msg = "The Creation has been saved";
	        				}


	        				if ($isUpdated) {
        							
    							$this->status = array(
									'error' => false,
									'status' => $status,
									'msg' => $msg,
								);

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
	        			
	        		} else {
	        			$this->status = array(
							'error' => true,
							'eType' => 'final',
							'msg' => 'Only creator can save the creations'
						);
	        		}

	        	} else {
	        		$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'Please login to save the creations'
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

		echo json_encode($this->status);
	}

	public function doApplyJob(Request $request) {
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
				'jobId' => 'required|numeric',
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

	        	/*
	        		1. Check if user is logged in
	        		2. Only creator can apply the job
	        		3. Check if job exist with the job id
	        		4. Check if job already applied
	        		5. Check the job limit
	        		6. Apply the job
	        		7. Sent notification to the admin and artist
	        	*/

	        	//check if user is logged in

	        	if ($request->session()->has('userSess')) {
	        		
	        		//check user type
	        		$userData = userInfo();
	        		$jobId = $request->post('jobId');

	        		if ($userData->user_type == 'creator') {

	        			//check if job exist
	        			$isExistJob = JobsModel::select('jobs.*', 'orders.no_of_videos', 'orders.no_of_videos_received', 'orders.timeline')->join('orders', 'jobs.order_id', '=', 'orders.id')->where('jobs.id', $jobId)->first();

	        			if (!empty($isExistJob)) {

	        				$userId = $userData->id;

	        				//check if job is already applied
	        				$isAlreadyApplied = ApplyJobsModel::where('user_id', $userId)->where('job_id', $jobId)->first();

	        				if ($isAlreadyApplied) {
	        					
	        					$this->status = array(
									'error' => true,
									'eType' => 'final',
									'msg' => 'You already applied for this creation.'
								);

	        				} else {
	        					
	        					//check job limit
	        					$totalVideos = $isExistJob->no_of_videos;
	        					$totalVideosReceived = $isExistJob->no_of_videos_received;

	        					$totalApplied = ApplyJobsModel::where('job_id', $jobId)->count();

	        					if ($totalVideosReceived > $totalApplied) {
	        						
	        						$isApplied = ApplyJobsModel::create(array(
	        							'user_id' => $userId,
	        							'job_id' => $jobId,
	        							'job_status' => 'pending',
	        						));

	        						if ($isApplied) {
	        							
	        							$artistDetail = userInfoById($isExistJob->user_id);

	        							//send notification to the artist and admin
	        							$msg = 'A creator has applied for the creation. <br> <strong>Name: </strong>'.$isExistJob->title.'<br> <strong>Link: </strong><a href="'.url('/creations/'.$isExistJob->slug).'">Link</a>';

	        							$mailObj = array(
					        				'name' => $artistDetail->first_name,
					        				'email' => $artistDetail->email,
					        				'subject' => 'Creation Applied Notification',
					        				'msg' => $msg
					        			);

	        							EmailSending::applyJobNotification($mailObj);

	        							$this->status = array(
											'error' => false,
											'msg' => 'The Creation has been applied successfully.'
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
										'msg' => 'Sorry! Cannot applied for the creation. Limit exceeded.'
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
							'msg' => 'Only creator can apply the creation.'
						);
	        		}

	        	} else {
	        		$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'Please login to apply the creation.'
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

		echo json_encode($this->status);
	}

	public function doSendVideo(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
				'videoUrl' => 'required',
				'jobId' => 'required|numeric',
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

	        	$videoUrl = $request->post('videoUrl');
	        	$jobId = $request->post('jobId');

	        	//check if job id exist
    			$isExistJob = JobsModel::select('jobs.*', 'orders.no_of_videos', 'orders.timeline')->join('orders', 'jobs.order_id', '=', 'orders.id')->where('jobs.id', $jobId)->first();

    			if (!empty($isExistJob)) {

    				$userInfo = userInfo();
    				$userId = $userInfo->id;

    				//check if video is already submmited
    				$isVideoSubmitted = ApplyJobsModel::where('user_id', $userId)->where('job_id', $jobId)->first();

    				if (!empty($isVideoSubmitted)) {
    					
    					//re-submit job
	    				$jobStatus = 're-submitted';

    				} else {

    					//submit job
	    				$jobStatus = 'submitted';

    				}

    				$isVideoSent = ApplyJobsModel::where('user_id', $userId)->where('job_id', $jobId)->update(array(
    					'job_status' => $jobStatus,
    					'video_link' => $videoUrl,
    					'last_action_taken' => date('Y-m-d h:i:s')
    				));

    				// $isVideoSent = 1;

    				if ($isVideoSent) {
    					
    					//send notification to the artist and admin

    		// 			$artistDetail = userInfoById($isExistJob->user_id);

						//$msg = 'A creator has '.$jobStatus.' a video for the creation. <br> <strong>Name: </strong>'.$isExistJob->title.'<br> <strong>Link: </strong><a href="'.url('/creations/'.$isExistJob->slug).'">Link</a>';

						// $mailObj = array(
	     //    				'name' => $artistDetail->first_name,
	     //    				'email' => $artistDetail->email,
	     //    				'subject' => 'Creation Received Notification',
	     //    				'msg' => $msg
	     //    			);

						// EmailSending::applyJobNotification($mailObj);

						$this->status = array(
							'error' => false,
							'msg' => 'The video link has been sent.'
						);

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

	public function doChangeCreationStatus(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
				'id' => 'required|numeric',
				'jobId' => 'required|numeric',
				'newStatus' => 'required|in:approved,rejected',
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

	        	$jobId = $request->post('jobId');
	        	$appliedJobId = $request->post('id');

	        	//check if applied job exist
	        	$isAppliedJobExist = ApplyJobsModel::where('id', $appliedJobId)->where('job_id', $jobId)->first();

	        	if (!empty($isAppliedJobExist)) {

	        		$jobData = JobsModel::select('jobs.*', 'orders.no_of_videos', 'orders.no_of_videos_received', 'orders.timeline', 'orders.payout')->join('orders', 'jobs.order_id', '=', 'orders.id')->where('jobs.id', $jobId)->first();

	        		//validate can job approved or status change
	        		
	        		$totalVideos = $jobData->no_of_videos;
					$totalApproved = ApplyJobsModel::where('job_id', $jobId)->where('job_status', 'approved')->count();

					if ($totalVideos > $totalApproved) {
						
						$status = 'rejected';

		        		if ($request->post('newStatus') == 'approved') {
		        			$status = 'approved';
		        		}

		        		$obj = array(
		        			'job_status' => $status,
		        			'last_action_taken' => date('Y-m-d h:i:s')
		        		);

		        		$isUpdated = ApplyJobsModel::where('id', $appliedJobId)->where('job_id', $jobId)->update($obj);

		        		if ($isUpdated) {
		        			
		        			if ($status == 'approved') {
		        				
		        				//transfer amount to the creator wallet
		        				$creatorId = $isAppliedJobExist->user_id;
				        		$creatorUserData = userInfoById($creatorId);
				        		$currentWalletAmount = $creatorUserData->wallet_amount;
				        		$newWalletAmount = $currentWalletAmount+$jobData->payout;

				        		//update user table with wallet amount
				        		UserModel::where('id', $creatorId)->update(array(
				        			'wallet_amount' => $newWalletAmount
				        		));

				        		//create history
				        		WalletHistoryModel::create(array(
				        			'user_id' => $creatorId,
				        			'transaction_type' => 'CR',
				        			'amount' => $jobData->payout,
				        			'comment' => 'Your creation "'.$jobData->title.'" has been approved'
				        		));

		        			}

		        			$creatorDetail = userInfoById($isAppliedJobExist->user_id);

		        			$msg = 'A creation "'.$jobData->title.'" has been '.$status.' by the Artist';

		        			//send notification to the creator and admin

		        			$mailObj = array(
		        				'name' => $creatorDetail->first_name,
		        				'email' => $creatorDetail->email,
		        				'subject' => 'Notification',
		        				'msg' => $msg
		        			);

							EmailSending::applyJobNotification($mailObj);

		        			$this->status = array(
								'error' => false,
								'msg' => 'The Creation status has been updated.'
							);

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
							'msg' => 'Limit Exceeded. You cannot change status more than '.$totalVideos.' creations.'
						);

					}		
	        		
	        	} else {
	        		$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'Something went wrong'
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

		echo json_encode($this->status);

	}

	public function doPaymentRequest(Request $request) {
		
		if ($request->ajax()) {

			$paymentMethod = $request->post('paymentMethod');
			$paymentMethodName = 'Bank Transfer';

			$rules = [
				'paymentMethod' => 'required|in:bank_transfer,paypal,stripe',
	        ];

	        if ($paymentMethod == 'bank_transfer') {
	        	$rules['accountHolderName'] = 'required';
	        	$rules['bankName'] = 'required';
	        	$rules['accountNumber'] = 'required';
	        	$rules['iban'] = 'required';
	        	$rules['ifscCode'] = 'required';
	        	$rules['remark'] = 'sometimes|nullable';
	        } elseif ($paymentMethod == 'stripe') {
	        	$paymentMethodName = 'Stripe';
	        	$rules['stripeId'] = 'required';
	        } elseif ($paymentMethod == 'paypal') {
	        	$paymentMethodName = 'Paypal';
	        	$rules['paypalEmail'] = 'required|email';
	        }

			$validator = Validator::make($request->post(), $rules);

	        if ($validator->fails()) {
	            
	            $errors = $validator->errors()->getMessages();

	            $this->status = array(
					'error' => true,
					'eType' => 'field',
					'errors' => $errors,
					'msg' => 'Validation failed'
				);

	        } else {

	        	$userInfo = userInfo();

	        	//if withdrawal request exist, validate the status
	        	$isWithdrawalReqExist = WithdrawalRequestModel::where('user_id', $userInfo->id)->where('status', 'pending')->count();

	        	if ($isWithdrawalReqExist) {
	        		
	        		$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'Sorry! You cannot raise multiple request.'
					);

	        	} else {

	        		$userUpdateObj = [];

	        		$withdrawalReqObj = [
	        			'user_id' => $userInfo->id,
	        			'payment_method' => $paymentMethodName,
	        			'status' => 'pending',
	        			'amount' => $userInfo->wallet_amount,
	        			'remark' => $request->post('remark')
	        		];
	        		
	        		if ($paymentMethod == 'bank_transfer') {

	        			$userUpdateObj = array(
	        				'account_holder_name' => $request->post('accountHolderName'),
	        				'bank_name' => $request->post('bankName'),
	        				'account_number' => $request->post('accountNumber'),
	        				'iban' => $request->post('iban'),
	        				'ifsc_code' => $request->post('ifscCode'),
	        			);

			        } elseif ($paymentMethod == 'stripe') {
			        	
			        	$userUpdateObj = array(
	        				'stripe_id' => $request->post('stripeId')	        				
	        			);

			        } elseif ($paymentMethod == 'paypal') {
			        	$userUpdateObj = array(
	        				'paypal_id' => $request->post('paypalEmail')	        				
	        			);
			        }

			        //update user fields
			        UserModel::where('id', $userInfo->id)->update($userUpdateObj);

			        //save withdrawl request
			        $isUpdated = WithdrawalRequestModel::create($withdrawalReqObj);

			        if ($isUpdated) {

	        			$this->status = array(
							'error' => false,
							'msg' => 'The withdrawal request has been sent successfully.'
						);

	        		} else {
	        			$this->status = array(
							'error' => true,
							'eType' => 'final',
							'msg' => 'Something went wrong'
						);
	        		}

	        	}

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

	public function logout() {
		Session::forget('userSess');
		return redirect('/login');
	}

}