<?php

use Illuminate\Support\Facades\Session;
use App\Models\AdminModel;
use App\Models\SettingModel;

use DB;
use File;

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