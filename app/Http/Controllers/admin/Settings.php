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
use Illuminate\Support\Str;
use File;

use App\Models\SettingModel;


class Settings extends Controller {

	private $status = array();

	public function index() {

		$defaultImgUrl = asset('public/admin/media/svg/avatars/blank.svg');

		$siteSettingData = siteSettings();

		$adminLogoUrl = !empty($siteSettingData->adminLogoUrl)? asset('public/'.$siteSettingData->adminLogoUrl):$defaultImgUrl;
		$loginBgImgUrl = !empty($siteSettingData->loginBgImgUrl)? asset('public/'.$siteSettingData->loginBgImgUrl):$defaultImgUrl;
		$websiteLogoUrl = !empty($siteSettingData->websiteLogoUrl)? asset('public/'.$siteSettingData->websiteLogoUrl):$defaultImgUrl;
		$faviconUrl = !empty($siteSettingData->faviconUrl)? asset('public/'.$siteSettingData->faviconUrl):$defaultImgUrl;
		
		$data = array(
			'title' => 'Settings',
			'pageTitle' => 'Settings',
			'route' => request()->segment(2),
			'adminData' => adminInfo(),
			'adminLogoUrl' => $adminLogoUrl,
			'loginBgImgUrl' => $loginBgImgUrl,
			'websiteLogoUrl' => $websiteLogoUrl,
			'faviconUrl' => $faviconUrl,
			'siteSettings' => $siteSettingData,
		);

		return view('admin/vwAdminSettings', $data);
		
	}

	public function doUpdateSiteSettings(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
	            'adminLogo' => 'required|numeric',
	            'websiteLogo' => 'required|numeric',
	            'adminLoginBackground' => 'required|numeric',
	            'favicon' => 'required|numeric',
	            'websiteName' => 'required',
	            'websiteEmail' => 'required|email',
	            'websitePhoneNumber' => 'sometimes|nullable|numeric|digits_between:10,11',
	            'websiteAddress' => 'sometimes|nullable',
	            'copyright' => 'required',
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
	        	
	        	$obj = [
	        		'admin_id' => $adminData->id,
	        		'website_name' => $request->post('websiteName'),
	        		'website_email' => $request->post('websiteEmail'),
	        		'website_phone' => $request->post('websitePhoneNumber'),
	        		'website_address' => $request->post('websiteAddress'),
	        		'admin_logo' => $request->post('adminLogo'),
	        		'login_background_img' => $request->post('adminLoginBackground'),
	        		'website_logo' => $request->post('websiteLogo'),
	        		'favicon' => $request->post('favicon'),
	        		'copyright' => $request->post('copyright'),
	        	];

	        	$isUpdated = SettingModel::updateOrCreate(['id' => 1], $obj);

	        	if ($isUpdated) {
	        		
	        		$this->status = array(
						'error' => false,
						'msg' => 'Site Settings has been updated successfully.',
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

	public function doUpdateCustomCssJs(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
	            'headerScripts' => 'sometimes|nullable',
	            'footerScripts' => 'sometimes|nullable',
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
	        	
	        	$obj = [
	        		'header_scrips' => $request->post('headerScripts'),
	        		'footer_scripts' => $request->post('footerScripts'),
	        	];

	        	$isUpdated = SettingModel::updateOrCreate(['id' => 1], $obj);

	        	if ($isUpdated) {
	        		
	        		$this->status = array(
						'error' => false,
						'msg' => 'Custom CSS/JS has been updated successfully.',
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

	public function doUpdateSocialLinks(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
	            'facebook' => 'sometimes|nullable|url',
	            'twitter' => 'sometimes|nullable|url',
	            'instagram' => 'sometimes|nullable|url',
	            'youtube' => 'sometimes|nullable|url',
	            'linkedin' => 'sometimes|nullable|url',
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
	        	
	        	$obj = [
	        		'facebook_url' => $request->post('facebook'),
	        		'twitter_url' => $request->post('twitter'),
	        		'instagram_url' => $request->post('instagram'),
	        		'youtube_url' => $request->post('youtube'),
	        		'linkedin_url' => $request->post('linkedin'),
	        	];

	        	$isUpdated = SettingModel::updateOrCreate(['id' => 1], $obj);

	        	if ($isUpdated) {
	        		
	        		$this->status = array(
						'error' => false,
						'msg' => 'Social Links has been updated successfully.',
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

	public function doUpdateMailConfig(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
	            'fromAddress' => 'required|email',
	            'fromName' => 'required',
	            'host' => 'required',
	            'port' => 'required|numeric',
	            'username' => 'required',
	            'password' => 'required',
	            'encryption' => 'required|in:ssl,tls',
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
	        	
	        	$obj = [
	        		'mail_from_address' => $request->post('fromAddress'),
	        		'mail_from_name' => $request->post('fromName'),
	        		'mail_host' => $request->post('host'),
	        		'mail_port' => $request->post('port'),
	        		'mail_username' => $request->post('username'),
	        		'mail_password' => $request->post('password'),
	        		'mail_encryption' => $request->post('encryption'),
	        	];

	        	$isUpdated = SettingModel::updateOrCreate(['id' => 1], $obj);

	        	if ($isUpdated) {
	        		
	        		$this->status = array(
						'error' => false,
						'msg' => 'Mail configuration has been updated successfully.',
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
	
}