<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Route;

use App\Models\UserModel;
use App\Models\PackageModel;
use App\Models\CategoryModel;
use App\Models\OrderModel;
use App\Models\JobsModel;

class Creators extends Controller {

	private $status = array();

	public function index() {

		//get creators
		$getCreators = UserModel::where('user_type', 'creator')->where('verified', 'yes')
		->where('account_status', 'active')
		->leftJoin('badges', 'users.badge_id', '=', 'badges.id')
		->select('users.*', 'badges.badge_name', 'badges.badge_img')
		->get();

		$data = array(
			'siteSettings' => siteSettings(),
			'title' => 'Creators',
			'creatorsData' => $getCreators
		);

		return view('vwCreators', $data);

	}

	public function detail($id) {
		//check if session exist

		if (Session::has('userSess')) {
			
			//check if creator exist
			$getCreator = UserModel::where('users.user_type', 'creator')
			->where('users.verified', 'yes')
			->where('users.account_status', 'active')
			->where('users.id', $id)
			->leftJoin('badges', 'users.badge_id', '=', 'badges.id')
			->select('users.*', 'badges.badge_name', 'badges.badge_img')
			->first();

			if (!empty($getCreator)) {

				$coverImg = url('public/frontend//img/cover-bg.png');
				$profileImg = url('public/frontend/img/profile-img.png');

				if (!empty($getCreator->cover_image)) {
					$coverImg = url('public/'.$getCreator->cover_image);
				}

				if (!empty($getCreator->profile_picture)) {
					$profileImg = url('public/'.$getCreator->profile_picture);
				}
				
				$data = array(
					'siteSettings' => siteSettings(),
					'title' => 'Creators Profile',
					'creatorData' => $getCreator,
					'profileImg' => $profileImg,
					'coverImg' => $coverImg,
					'name' => $getCreator->first_name.' '.$getCreator->last_name,
				);

				return view('vwCreatorsProfilePage', $data);

			} else {
				return redirect('/creators');
			}

		} else {
			return redirect('/login?redirect=creators');
		}
	}

}