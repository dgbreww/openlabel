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

class Home extends Controller {

	private $status = array();

	public function index() {

		$data = array(
			'siteSettings' => siteSettings(),
			'title' => 'Home'
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

		return view('vwTermsAndCondition', $data);
	}

}