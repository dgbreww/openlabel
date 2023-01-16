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
		
		$data = array(
			'title' => 'Settings',
			'pageTitle' => 'Settings',
			'route' => request()->segment(2),
			'adminData' => adminInfo(),
			'siteSettingData' => SettingModel::first(),
			'profileImage' => '',
		);

		return view('admin/vwAdminSettings', $data);
		
	}

	public function doUpdateSiteSettings(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
	            'adminLogo' => 'required|numeric',
	            'websiteLogo' => 'required|numeric',
	            'adminLoginBackground' => 'required|numeric',
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
	        		'login_background_img' => $request->post('websiteLogo'),
	        		'website_logo' => $request->post('adminLoginBackground'),
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
	
}