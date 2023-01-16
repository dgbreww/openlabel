<?php

namespace App\Http\Controllers\admin;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\EmailSending;
use Illuminate\Support\Facades\Route;

use App\Models\AdminModel;


class Auth extends Controller {

	private $status = array();

	public function index() {

		//remove two factor session
		Session::forget('adminTwoFactorSess');

		$adminSess = Session::get('adminSess');
		
		if (empty($adminSess)) {
			return view('admin/vwAdminLogin');
		} else {
			return redirect('admin/dashboard');
		}
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
	        		['is_active', 1]
	        	];

	        	$isAdminExist = DB::table('admin')->where($cond)->first();

	        	if (!empty($isAdminExist)) {

	        		//check if password match

	        		if (Hash::check($request->post('password'), $isAdminExist->password)) {
	        			
	        			//check if two factor authentication enabled

	        			if ($isAdminExist->enable_two_factor) {
	        				
	        				//send otp and redirect custom to two step screen

	        				$otp = random_int(100000, 999999);
	        				$otp = 123456;
	        				$expiredAt = date('H:i', strtotime('+5 Min'));

	        				$twoFactorAuthObj = array(
	        					'adminId' => $isAdminExist->id,
	        					'name' => $isAdminExist->name,
	        					'email' => $isAdminExist->email,
	        					'otp' => $otp,
	        					'expiredAt' => $expiredAt,
	        					'resend' => 0,
	        				);

	        				//$isMailSent = EmailSending::adminTwoFactorAuth($twoFactorAuthObj);
	        				$isMailSent = true;

	        				if ($isMailSent) {
	        					
	        					$request->session()->put('adminTwoFactorSess', $twoFactorAuthObj);

				        		$this->status = array(
									'error' => false,
									'redirect' => url('admin/two-factor')
								);

	        				} else {

	        					$this->status = array(
									'error' => true,
									'eType' => 'final',
									'msg' => 'Unable to send two factor authentication code.'
								);

	        				}

	        			} else {

	        				$request->session()->put('adminSess', array(
			        			'adminId' => $isAdminExist->id,
			        			'name' => $isAdminExist->name
			        		));

			        		$this->status = array(
								'error' => false,
								'redirect' => url('admin/dashboard')
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

	public function twoFactorAuth(Request $request) {
		//check if two factor session exist

		$adminTwoFactor = Session::get('adminTwoFactorSess');
		
		if (!empty($adminTwoFactor)) {

			$adminTwoFactor = (object) $adminTwoFactor;

			//check if OTP time expired

			$currentTime = date('H:i');
			$expiredAt = $adminTwoFactor->expiredAt;

			if ($expiredAt > $currentTime) {
				
				$data = array(
					'admin' => $adminTwoFactor, 
					'hiddenEmail' => $this->hideEmailAddress($adminTwoFactor->email)
				);
				
				return view('admin/vwAdminTwoFactor', $data);

			} else {
				
				return redirect('admin');

			}

		} else {
			return redirect('admin');
		}

	}

	public function doTwoFactorAuth(Request $request) {
		
		if ($request->ajax()) {

			/*
				Check the following
					1. Check adminTwoFactorSess session exist
					2. Validate expiry
					3. Validate form field
					4. Validate OTP
					5. If validated create new adminSess and remove the current session
			*/

			$adminTwoFactorSess = Session::get('adminTwoFactorSess');

			if (!empty($adminTwoFactorSess)) {

				$adminTwoFactorSess = (object) $adminTwoFactorSess;
				
				//validate expiry

				$currentTime = date('H:i');
				$expiredAt = $adminTwoFactorSess->expiredAt;

				if ($expiredAt > $currentTime) {
					
					$validator = Validator::make($request->post(), [
			            'code_1' => 'required|numeric',
			            'code_2' => 'required|numeric',
			            'code_3' => 'required|numeric',
			            'code_4' => 'required|numeric',
			            'code_5' => 'required|numeric',
			            'code_6' => 'required|numeric',
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

			        	$inputOtp = $request->post('code_1').$request->post('code_2').$request->post('code_3').$request->post('code_4').$request->post('code_5').$request->post('code_6');

			        	$sessOtp = $adminTwoFactorSess->otp;

			        	if ($inputOtp == $sessOtp) {
			        	
			        		$request->session()->put('adminSess', array(
			        			'adminId' => $adminTwoFactorSess->adminId,
			        			'name' => $adminTwoFactorSess->name
			        		));

			        		$this->status = array(
								'error' => false,
								'redirect' => url('admin/dashboard')
							);

							//drop current session
			        		Session::forget('adminTwoFactorSess');

			        	} else {
			        		$this->status = array(
								'error' => true,
								'eType' => 'final',
								'msg' => 'The entered security code is incorrect.'
							);
			        	}

			        }

				} else {
					
					$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'Two-Factor Authentication session expired. Please referesh the page.'
					);

				}

			} else {
				$this->status = array(
					'error' => true,
					'eType' => 'final',
					'msg' => 'Two-Factor Authentication session expired. Please referesh the page.'
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

	public function resendTwoFactorPasscode(Request $request) {
		if ($request->ajax()) {

			/*
				Check the following
					1. Check adminTwoFactorSess session exist
					2. Validate expiry
					3. Validate resend count
					4. If resend limit exist generate and send otp again
			*/

			$adminTwoFactorSess = Session::get('adminTwoFactorSess');

			if (!empty($adminTwoFactorSess)) {

				$adminTwoFactorSess = (object) $adminTwoFactorSess;
				
				//validate expiry

				$currentTime = date('H:i');
				$expiredAt = $adminTwoFactorSess->expiredAt;

				if ($expiredAt > $currentTime) {

					//check resend count

					if ($adminTwoFactorSess->resend < 3) {
						
						$otp = random_int(100000, 999999);
        				$otp = 123456;
        				$expiredAt = date('H:i', strtotime('+5 Min'));

        				$newResendLimit = $adminTwoFactorSess->resend+1;

        				$twoFactorAuthObj = array(
        					'adminId' => $adminTwoFactorSess->adminId,
        					'name' => $adminTwoFactorSess->name,
        					'email' => $adminTwoFactorSess->email,
        					'otp' => $otp,
        					'expiredAt' => $expiredAt,
        					'resend' => $newResendLimit,
        				);

        				//$isMailSent = EmailSending::adminTwoFactorAuth($twoFactorAuthObj);
        				$isMailSent = true;

        				if ($isMailSent) {
        					
        					$request->session()->put('adminTwoFactorSess', $twoFactorAuthObj);

			        		$this->status = array(
								'error' => false,
								'msg' => 'The two factor authentication code has been resend successfully.'
							);

        				} else {

        					$this->status = array(
								'error' => true,
								'eType' => 'final',
								'msg' => 'Unable to resend two factor authentication code.'
							);

        				}


					} else {
						$this->status = array(
							'error' => true,
							'eType' => 'final',
							'msg' => 'You have exceeded the resend OTP limit.'
						);
					}

				} else {
					
					$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'Two-Factor Authentication session expired. Please referesh the page.'
					);

				}

			} else {
				$this->status = array(
					'error' => true,
					'eType' => 'final',
					'msg' => 'Two-Factor Authentication session expired. Please referesh the page.'
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

	public function resetPassword() {
		//remove two factor session
		Session::forget('adminTwoFactorSess');

		$adminSess = Session::get('adminSess');
		
		if (empty($adminSess)) {
			return view('admin/vwResetPassword');
		} else {
			return redirect('admin/dashboard');
		}
	}

	public function doResetPassword(Request $request) {
		
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
	        	
	        	$cond = [
	        		['email', $request->post('email')],
	        		['is_active', 1]
	        	];

	        	$isAdminExist = DB::table('admin')->where($cond)->first();

	        	if (!empty($isAdminExist)) {

	        		//generate token

	        		$token = hash('sha256', md5(microtime()));

	        		$isTokenUpdated = DB::table('admin')->where([['id', $isAdminExist->id]])->update(['token' => $token]);

	        		if ($isTokenUpdated) {

	        			$mailObj = array(
	        				'name' => $isAdminExist->name,
	        				'email' => $isAdminExist->email,
	        				'resetPasswordLink' => url('admin/new-password/'.$token)
	        			);
	        			
	        			$isMailSent = EmailSending::adminResetPassword($mailObj);
    					//$isMailSent = true;

    					if ($isMailSent) {
    						
    						$this->status = array(
								'error' => false,
								'msg' => 'A resent password link has been sent to your email.',
								'redirect' => url('admin')
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
						'msg' => 'Sorry! The email is not registered with us.'
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

	public function newPassword($newToken) {
		//check if this token exist in admin

		$adminData = DB::table('admin')->where('token', $newToken)->first();

		if (!empty($adminData)) {
			
			//show change password page

			$data = array('data' => $adminData);

			return view('admin/vwAdminNewPassword', $data);

		} else {
			return redirect('admin');
		}
	}

	public function doUpdateNewPassword(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
	            'password' => 'min:8|required_with:confirm-password|same:confirm-password',
	            'confirm-password' => 'min:8',
	            'token' => 'required',
	        ], ['confirm-password.min' => 'The repeat password must be at least 8 characters.']);

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
	        		['is_active', 1]
	        	];

	        	$isAdminExist = DB::table('admin')->where($cond)->first();

	        	if (!empty($isAdminExist)) {

	        		$newPassword = Hash::make($request->post('password'));

	        		$updateObj = array(
	        			'password' => $newPassword,
	        			'token' => null,
	        		);

	        		$isUpdated = DB::table('admin')->where([['id', $isAdminExist->id]])->update($updateObj);

	        		if ($isUpdated) {

	        			//notify admin that your password has been changed

	        			$mailObj = array(
	        				'name' => $isAdminExist->name,
	        				'email' => $isAdminExist->email,
	        			);
	        			
	        			$isMailSent = EmailSending::adminPassChangeNotify($mailObj);
	        			
	        			$this->status = array(
							'error' => false,
							'msg' => 'A password has been changed successfully.',
							'redirect' => url('admin')
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

	public function dashboard() {

		$data = array(
			'title' => 'Admin Dashboard',
			'pageTitle' => 'Dashboard',
			'route' => request()->segment(2),
		);

		return view('admin/vwAdminDashboard', $data);
	}

	public function accountSettings() {

		if (adminInfo()->profile_picture) {
			$profileImage = asset('public/'.adminInfo()->path);
		} else {
			$profileImage = asset('public/admin/media/avatars/300-1.jpg');
		}
		
		$data = array(
			'title' => 'Account Settings',
			'pageTitle' => 'Account Settings',
			'route' => request()->segment(2),
			'adminData' => adminInfo(),
			'profileImage' => $profileImage
		);

		return view('admin/vwAdminAccountSettings', $data);

	}

	public function doUpdateProfile(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
	            'name' => 'required',
	            'phone' => 'sometimes|nullable|numeric',
	            'address' => 'sometimes|nullable',
	            'profile_image' => 'sometimes|nullable|numeric',
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

	        	if ($request->post('profile_image')) {
	        		$profileImage = $request->post('profile_image');
	        	} else {
	        		$profileImage = null;
	        	}
	        	
	        	$updateObj = [
	        		'name' => $request->post('name'),
	        		'phone' => $request->post('phone'),
	        		'address' => $request->post('address'),
	        		'profile_picture' => $profileImage
	        	];

	        	$adminInfo = adminInfo();

	        	//check if is admin active
	        	if ($adminInfo->is_active) {
	        		
	        		$isUpdated = AdminModel::where('id', $adminInfo->id)->update($updateObj);

	        		if ($isUpdated) {

	        			$this->status = array(
							'error' => false,
							'msg' => 'Your profile has been successfully updated.',
							'redirect' => url('admin')
						);

	        		} else {
	        			
	        			$this->status = array(
							'error' => true,
							'eType' => 'final',
							'msg' => 'Sorry! Unable to update the profile.'
						);

	        		}

	        	} else {
	        		$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'Your accout is no more active.'
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

	public function doUpdateTwoFactorAuth(Request $request) {
		if ($request->ajax()) {

			$enableTwoFactor = $request->post('enableTwoFactor');

			$updateObj = [
        		'enable_two_factor' => ($enableTwoFactor == 'true'? 1:0),
        	];

        	$adminInfo = adminInfo();

        	//check if is admin active
        	if ($adminInfo->is_active) {
        		
        		$isUpdated = AdminModel::where('id', $adminInfo->id)->update($updateObj);

        		if ($isUpdated) {

        			$this->status = array(
						'error' => false,
						'msg' => 'Two-factor authentication has been enabled successfully.',
					);

        		} else {
        			
        			$this->status = array(
						'error' => true,
						'eType' => 'final',
						'msg' => 'Sorry! Unable to update Two-factor authentication.'
					);

        		}

        	} else {
        		$this->status = array(
					'error' => true,
					'eType' => 'final',
					'msg' => 'Your accout is no more active.'
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

	public function doChangeEmail(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
	            'emailAddress' => 'required|email|unique:admin,email',
	            'confirmemailpassword' => 'required|min:8',
	        ], ['confirmemailpassword.required' => 'The confirm password is required.', 'confirmemailpassword.min' => 'The confirm password should be of minimum 8 characters.']);

	        if ($validator->fails()) {
	            
	            $errors = $validator->errors()->getMessages();

	            $this->status = array(
					'error' => true,
					'eType' => 'field',
					'errors' => $errors,
					'msg' => 'Validation failed'
				);

	        } else {

	        	$adminData = adminInfo();

	        	//check if user entered the correct password
	        	if (Hash::check($request->post('confirmemailpassword'), $adminData->password)) {

	        		$updateObj = array(
	        			'email' => $request->emailAddress,
	        		);

	        		$isUpdated = AdminModel::where('id', $adminData->id)->update($updateObj);

	        		if ($isUpdated) {

	        			//notify admin that your password has been changed

	        			$mailObj = array(
	        				'name' => $adminData->name,
	        				'email' => $adminData->email,
	        			);
	        			
	        			$isMailSent = EmailSending::adminEmailChangeNotify($mailObj);
	        			
	        			$this->status = array(
							'error' => false,
							'email' => $request->emailAddress,
							'msg' => 'Your email has been changed successfully.',
						);

	        		} else {
	        			
	        			$this->status = array(
							'error' => true,
							'eType' => 'final',
							'msg' => 'Sorry! Unable to update the email.'
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

	public function doChangePassword(Request $request) {

		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
				'currentpassword' => 'required|min:8',
	            'newpassword' => 'required|min:8|required_with:confirmpassword|same:confirmpassword',
	            'confirmpassword' => 'required|min:8',
	        ], [
	        	'currentpassword.required' => 'The current password must be required.', 
	        	'newpassword.required' => 'The new password must be required.',
	        	'confirmpassword.required' => 'The confirm password must be required.',
	        	
	        	'newpassword.required_with' => 'The new password and confirm password must match.', 
	        	'newpassword.same' => 'The new password and confirm password must match.', 

	        	'currentpassword.min' => 'The current password must be at least 8 characters.', 
	        	'newpassword.min' => 'The new password must be at least 8 characters.',
	        	'confirmpassword.min' => 'The confirm password must be at least 8 characters.',
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

	        	$adminData = adminInfo();

	        	//check if user entered the correct password
	        	if (Hash::check($request->post('currentpassword'), $adminData->password)) {

	        		$updateObj = array(
	        			'password' => Hash::make($request->post('newpassword')),
	        		);

	        		$isUpdated = AdminModel::where('id', $adminData->id)->update($updateObj);

	        		if ($isUpdated) {

	        			//notify admin that your password has been changed

	        			$mailObj = array(
	        				'name' => $adminData->name,
	        				'email' => $adminData->email,
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

	public function logout() {
		Session::forget('adminSess');
		return redirect('admin');
	}

	public function hideEmailAddress($email) {
	    if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
	        list($first, $last) = explode('@', $email);
	        $first = str_replace(substr($first, '3'), str_repeat('*', strlen($first)-3), $first);
	        $last = explode('.', $last);
	        $last_domain = str_replace(substr($last['0'], '1'), str_repeat('*', strlen($last['0'])-1), $last['0']);
	        $hideEmailAddress = $first.'@'.$last_domain.'.'.$last['1'];
	        return $hideEmailAddress;
	    }
	}
	
}