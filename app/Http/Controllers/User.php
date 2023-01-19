<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\EmailSending;
use App\Models\UserModel;

class User extends Controller {

	private $status = array();

	public function dashboard() {
		
		//check user type
		$userInfo = userInfo();

		if ($userInfo->user_type == 'artist') {
			// show artist dashboard
			$templateName = 'vwArtistDashboard';
		} else {
			// show creator dashboard
			$templateName = 'vwCreatorDashboard';
		}

		$data = array(
			'siteSettings' => siteSettings(),
			'userInfo' => userInfo(),
			'title' => 'Dashboard',
			'name' => $userInfo->first_name.' '.$userInfo->last_name
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
						'msg' => 'Please check your inbox to verify your email.',
						'redirect' => url('login')
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
	        			if ($isUserExist->verified == 'yes') {
	        			
	        				$request->session()->put('userSess', array(
			        			'userId' => $isUserExist->id,
			        			'name' => $isUserExist->first_name,
			        			'userType' => $isUserExist->user_type,
			        		));

			        		$this->status = array(
								'error' => false,
								'redirect' => url('user/dashboard')
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
			
			//if verified remove token and verified will be yes
			$isUpdated = UserModel::where('id', $getUserDetail->id)->update(['token' => null, 'verified' => 'yes']);

			if ($isUpdated) {
				
				return redirect('/login')->with('verifyStatus', array(
					'isVerified' => true,
					'msg' => 'You account has been verified.'
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

	public function logout() {
		Session::forget('userSess');
		return redirect('/');
	}

}