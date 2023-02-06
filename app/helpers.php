<?php

use Illuminate\Support\Facades\Session;

use App\Models\AdminModel;
use App\Models\UserModel;
use App\Models\SettingModel;
use App\Models\PackageModel;
use App\Models\JobsModel;
use App\Models\SaveJobsModel;
use App\Models\ApplyJobsModel;
use App\Models\MediaModel;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\File;

// Project Related Function Start

function isJobSaved($jobId) {
	$userData = userInfo();

	if (!empty($userData)) {
		
		$isJobSaved = SaveJobsModel::where('user_id', $userData->id)->where('job_id', $jobId)->first();

		if (!empty($isJobSaved)) {
			return true;		
		} else {
			return false;
		}

	} else {
		return false;
	}
}

function isJobApplied($jobId) {
	$userData = userInfo();

	if (!empty($userData)) {
		
		$isJobApplied = ApplyJobsModel::where('user_id', $userData->id)->where('job_id', $jobId)->first();

		if (!empty($isJobApplied)) {
			return true;		
		} else {
			return false;
		}

	} else {
		return false;
	}

}

function jobStats($jobId) {
	$getJobData = JobsModel::join('orders', 'jobs.order_id', '=', 'orders.id')
	->where('jobs.id', $jobId)
	->first();

	$stats = array();

	if (!empty($getJobData)) {

		$totalApplied = ApplyJobsModel::where('job_id', $jobId)->count();
		$totalApproved = ApplyJobsModel::where('job_id', $jobId)->where('job_status', 'approved')->count();

		$stats = array(
			'totalVideos' => $getJobData->no_of_videos,
			'totalVideosReceived' => $getJobData->no_of_videos_received,
			'totalApplied' => $totalApplied,
			'totalApproved' => $totalApproved,
		);		
	}

	return $stats;

}

function canJobApplied($jobId) {
	
	$getJobData = JobsModel::join('orders', 'jobs.order_id', '=', 'orders.id')
	->where('jobs.id', $jobId)
	->first();

	if (!empty($getJobData)) {

		$totalVideosReceived = $getJobData->no_of_videos_received;
		$totalApplied = ApplyJobsModel::where('job_id', $jobId)->count();

		if ($totalVideosReceived > $totalApplied) {
			return true;
		} else {
			return false;
		}

	} else {
		return false;
	}
	
}

function canJobApproved($jobId) {
	
	$getJobData = JobsModel::join('orders', 'jobs.order_id', '=', 'orders.id')
	->where('jobs.id', $jobId)
	->first();

	if (!empty($getJobData)) {

		$totalVideos = $getJobData->no_of_videos;
		$totalApproved = ApplyJobsModel::where('job_id', $jobId)->where('job_status', 'approved')->count();

		if ($totalVideos > $totalApproved) {
			return true;
		} else {
			return false;
		}

	} else {
		return false;
	}
	
}

function getImg($imageId) {
	$mediaData = MediaModel::where('id', $imageId)->first();
	if (!empty($mediaData)) {
		return url('public/').'/'.$mediaData->path;
	} else {
		return '';
	}
}

// Project Related Function End

function adminInfo($col='') {
	
	$adminSess = Session::get('adminSess');

	if (!empty($adminSess)) {
		
		$getAdminDetail = AdminModel::select('admin.*', 'media.path', 'media.alt')
		->leftJoin('media', 'admin.profile_picture', '=', 'media.id')
		->where('admin.id', $adminSess['adminId'])
		->first();

		if ($adminSess) {
			if (!empty($col)) {
				return $getAdminDetail->{$col};
			} else {
				return $getAdminDetail;
			}
		}

	} else {
		return false;
	}
	
}

function userInfo($col='') {
	
	$userSess = Session::get('userSess');

	if (!empty($userSess)) {
		
		$getUserDetail = UserModel::select('users.*', 'media.path', 'media.alt', 'badges.badge_img')
		->leftJoin('media', 'users.profile_picture', '=', 'media.id')
		->leftJoin('badges', 'users.badge_id', '=', 'badges.id')
		->where('users.id', $userSess['userId'])
		->first();

		if ($userSess) {
			if (!empty($col)) {
				return $getUserDetail->{$col};
			} else {
				return $getUserDetail;
			}
		}

	} else {
		return false;
	}
	
}

function userInfoById($id) {
	
	return UserModel::select('users.*', 'media.path', 'media.alt')
	->leftJoin('media', 'users.profile_picture', '=', 'media.id')
	->where('users.id', $id)
	->first();
}

if (!function_exists('validateSlug')) {
	function validateSlug($tbl, $col, $slug, $id=null) {

		if (empty($id)) {
			$isSlugExist = DB::table($tbl)->where($col, 'like', $slug.'%')->select($col);
		} else {
			$isSlugExist = DB::table($tbl)->where($col, 'like', $slug.'%')->where('id', '!=', $id)->select($col);
		}

		$totalRow = $isSlugExist->count();
		$result = $isSlugExist->get();

		$data = array();

		if ($totalRow) {
			foreach ($result as $row) {
				$data[] = $row->{$col};
			}
		}

		if(in_array($slug, $data)) {
	    	$count = 0;
	    	while( in_array( ($slug . '-' . ++$count ), $data) );
	    	$slug = $slug . '-' . $count;
	   	}

	   	return $slug;
	}
}

if (!function_exists('validateMediaSlug')) {
	function validateMediaSlug($tbl, $col, $slug, $id=null) {

		if (empty($id)) {
			$isSlugExist = DB::table($tbl)
			->where($col, 'like', $slug.'%')
			->where('year', '=', date('Y'))
			->where('month', '=', date('m'))
			->where('date', '=', date('d'))
			->select($col);
		} else {
			$isSlugExist = DB::table($tbl)
			->where($col, 'like', $slug.'%')
			->where('year', '=', date('Y'))
			->where('month', '=', date('m'))
			->where('date', '=', date('d'))
			->where('id', '!=', $id)
			->select($col);
		}

		$totalRow = $isSlugExist->count();
		$result = $isSlugExist->get();

		$data = array();

		if ($totalRow) {
			foreach ($result as $row) {
				$data[] = $row->{$col};
			}
		}

		if(in_array($slug, $data)) {
	    	$count = 0;
	    	while( in_array( ($slug . '-' . ++$count ), $data) );
	    	$slug = $slug . '-' . $count;
	   	}

	   	return $slug;
	}
}

function formatSize($bytes){ 
	$kb = 1024;
	$mb = $kb * 1024;
	$gb = $mb * 1024;
	$tb = $gb * 1024;

	if (($bytes >= 0) && ($bytes < $kb)) {
		return $bytes . ' B';
	} elseif (($bytes >= $kb) && ($bytes < $mb)) {
		return ceil($bytes / $kb) . ' KB';
	} elseif (($bytes >= $mb) && ($bytes < $gb)) {
		return ceil($bytes / $mb) . ' MB';
	} elseif (($bytes >= $gb) && ($bytes < $tb)) {
		return ceil($bytes / $gb) . ' GB';
	} elseif ($bytes >= $tb) {
		return ceil($bytes / $tb) . ' TB';
	} else {
		return $bytes . ' B';
	}
}

function folderSize($dir){
	$total_size = 0;
	$count = 0;
	$dir_array = scandir($dir);
  	foreach($dir_array as $key=>$filename){
    	if($filename!=".." && $filename!="."){
       		if(is_dir($dir."/".$filename)){
          		$new_foldersize = foldersize($dir."/".$filename);
          		$total_size = $total_size+ $new_foldersize;
	        }else if(is_file($dir."/".$filename)){
	          	$total_size = $total_size + filesize($dir."/".$filename);
	         	$count++;
	        }
   		}
   	}
	return $total_size;
}

function siteSettings() {
	return SettingModel::select('settings.*', 'a.path as adminLogoUrl', 'a.alt as adminLogoAlt', 'b.path as loginBgImgUrl', 'c.path as websiteLogoUrl', 'c.alt as websiteLogoAlt', 'd.path as faviconUrl')
		->leftJoin('media as a', 'settings.admin_logo', 'a.id')
		->leftJoin('media as b', 'settings.login_background_img', 'b.id')
		->leftJoin('media as c', 'settings.website_logo', 'c.id')
		->leftJoin('media as d', 'settings.favicon', 'd.id')
		->first();
}

function getPackageListByCategory($categoryId) {
	return PackageModel::where('category_id', $categoryId)->where('user_id', null)->where('is_active', 'active')->get();
}

function getHoursDays($date) {
	$currentDate = date('Y-m-d');
	$jobDate = date('Y-m-d', strtotime($date));

	$time1 = new DateTime(date('Y-m-d H:i:s'));
    $time2 = new DateTime(date('Y-m-d H:i:s', strtotime($date)));
    $time_diff = $time1->diff($time2);

	if ($currentDate == $jobDate) {
		if ($time_diff->h) {
			return $time_diff->h . ' hours before';
		} else {
			return $time_diff->i . ' minutes before';
		}
	} else {
		
		if ($time_diff->d) {
			return $time_diff->d . ' days before';
		} else {
			return $time_diff->h . ' hours before';
		}

	}
}