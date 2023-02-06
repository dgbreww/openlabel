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

class Creations extends Controller {

	private $status = array();

	public function index(Request $request) {

		$getJobs = JobsModel::select('jobs.*', 'orders.package_name', 'orders.no_of_videos', 'orders.timeline', 'category.category_name')
		->join('orders', 'jobs.order_id', '=', 'orders.id')
		->leftJoin('category', 'jobs.category_id', '=', 'category.id')
		->leftJoin('platform', 'jobs.platform_id', '=', 'platform.id')
		->leftJoin('genre', 'jobs.genre_id', '=', 'genre.id')
		->leftJoin('video_size', 'jobs.video_size', '=', 'video_size.id')
		->where('jobs.job_status', 'published');

		$getCategoryFilter = $request->get('category');

		if (!empty($getCategoryFilter)) {
			$getJobs = $getJobs->whereIn('category_slug', $getCategoryFilter);
		}

		$getPlatformFilter = $request->get('platform');

		if (!empty($getPlatformFilter)) {
			$getJobs = $getJobs->whereIn('platform_slug', $getPlatformFilter);
		}

		$getGenreFilter = $request->get('genre');

		if (!empty($getGenreFilter)) {
			$getJobs = $getJobs->whereIn('genre_slug', $getGenreFilter);
		}

		$getVideoSizeFilter = $request->get('videosize');

		if (!empty($getVideoSizeFilter)) {
			$getJobs = $getJobs->whereIn('video_slug', $getVideoSizeFilter);
		}

		//check sort
		$getSortingFilter = $request->get('sort');
		if (!empty($getSortingFilter)) {
			if ($getSortingFilter == 'latest') {
				$getJobs = $getJobs->orderBy('id','desc');
			} elseif ($getSortingFilter == 'old') {		
				$getJobs = $getJobs->orderBy('id','asc');
			}
		}

		//searching
		$getSearchValue = $request->get('search');
		if (!empty($getSearchValue)) {
			$getJobs = $getJobs->where('title', 'LIKE', "%{$getSearchValue}%");
		}


		$getJobs = $getJobs->get();

		$filterCategoryList = JobsModel::select('category.*')->join('category', 'jobs.category_id', '=', 'category.id')->groupBy('jobs.category_id')->get();

		$filterPlatformList = JobsModel::select('platform.*')->join('platform', 'jobs.platform_id', '=', 'platform.id')->groupBy('jobs.platform_id')->get();

		$filterGenreList = JobsModel::select('genre.*')->join('genre', 'jobs.genre_id', '=', 'genre.id')->groupBy('jobs.genre_id')->get();

		$filterVideoSizeList = JobsModel::select('video_size.*')->join('video_size', 'jobs.video_size', '=', 'video_size.id')->groupBy('jobs.video_size')->get();

		$userData = userInfo();

		$data = array(
			'siteSettings' => siteSettings(),
			'title' => 'Creations',
			'filterCategoryList' => $filterCategoryList,
			'filterPlatformList' => $filterPlatformList,
			'filterGenreList' => $filterGenreList,
			'filterVideoSizeList' => $filterVideoSizeList,
			'jobsData' => $getJobs,
		);

		return view('vwCreations', $data);

	}

	public function detail($slug) {
		//check if session exist

		if (Session::has('userSess')) {
			
			$getJob = JobsModel::select('jobs.*', 'orders.package_name', 'orders.no_of_videos', 'orders.timeline', 'category.category_name', 'platform.platform_name', 'genre.genre_name', 'video_size.video_slug')
			->join('orders', 'jobs.order_id', '=', 'orders.id')
			->leftJoin('category', 'jobs.category_id', '=', 'category.id')
			->leftJoin('platform', 'jobs.platform_id', '=', 'platform.id')
			->leftJoin('genre', 'jobs.genre_id', '=', 'genre.id')
			->leftJoin('video_size', 'jobs.video_size', '=', 'video_size.id')
			->where('slug', $slug)
			->where('jobs.job_status', 'published')->first();

			if (!empty($getJob)) {

				$userId = $getJob->user_id;

				$getUserData = UserModel::where('id', $userId)->first();
				$totalJobPosted = JobsModel::where('user_id', $userId)->count();
				$openJobs = JobsModel::where('user_id', $userId)->where('job_status', 'published')->count();
				
				$data = array(
					'siteSettings' => siteSettings(),
					'title' => 'Creations',
					'jobData' => $getJob,
					'userData' => $getUserData,
					'totalJobPosted' => $totalJobPosted,
					'openJobs' => $openJobs,
				);

				return view('vwCreationsDetail', $data);

			} else {
				return redirect('creations','refresh');
			}


		} else {
			return redirect('/login?redirect=creations');
		}
	}

}