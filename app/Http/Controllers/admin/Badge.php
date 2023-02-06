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

use App\Models\BadgeModel;


class Badge extends Controller {

	private $status = array();

	public function index() {		

		$data = array(
			'title' => 'Badge',
			'pageTitle' => 'Badge',			
			'adminData' => adminInfo(),			
			'siteSettings' => siteSettings(),
		);

		return view('admin/badge/vwBadge', $data);
		
	}

	public function add() {
		
		$defaultImg = asset('public/admin/media/svg/files/blank-image.svg');

		$data = array(
			'title' => 'Badge',
			'pageTitle' => 'Badge',
			'adminData' => adminInfo(),			
			'siteSettings' => siteSettings(),
			'defaultImg' => $defaultImg
		);

		return view('admin/badge/vwAddBadge', $data);
	}

	public function edit($id) {

		//check if id exist
		$getBadge = BadgeModel::select('badges.*', 'media.path')
		->leftJoin('media', 'badges.badge_img', '=', 'media.id')
		->where('badges.id', $id)->first();

		if (empty($getBadge)) {
			return redirect('/admin/badge');
		}
		
		$defaultImg = asset('public/admin/media/svg/files/blank-image.svg');

		if (!empty($getBadge->path)) {
			$defaultImg = url('public').'/'.$getBadge->path;
		}

		$data = array(
			'title' => 'Edit Badge',
			'pageTitle' => 'Edit Badge',
			'adminData' => adminInfo(),			
			'siteSettings' => siteSettings(),
			'defaultImg' => $defaultImg,
			'badgeData' => $getBadge
		);

		return view('admin/badge/vwEditBadge', $data);
	}

	public function getBadge(Request $request) {
		if ($request->ajax()) {

			$draw = $request->get('draw');
		    $start = $request->get("start");
		    $rowperpage = $request->get("length"); // Rows display per page

		    $columnIndex_arr = $request->get('order');
		    $columnName_arr = $request->get('columns');
		    $order_arr = $request->get('order');
		    $search_arr = $request->get('search');

		    $columnIndex = isset($columnIndex_arr[0]['column'])? $columnIndex_arr[0]['column']:''; // Column index
		    $columnName = !empty($columnIndex)? $columnName_arr[$columnIndex]['data']:''; // Column name
		    $columnSortOrder = !empty($order_arr)? $order_arr[0]['dir']:''; // asc or desc
		    $searchValue = $search_arr['value']; // Search value

		     // Total records
		    $totalRecords = BadgeModel::select('count(*) as allcount')->count();
		    $totalRecordswithFilter = BadgeModel::select('count(*) as allcount');

		    if (!empty($searchValue)) {
		    	$totalRecordswithFilter->where('badge_name', 'like', '%' .$searchValue . '%');
		    }

		    $totalRecordswithFilter = $totalRecordswithFilter->count();

		     // Fetch records
		    $records = BadgeModel::leftJoin('media', 'badges.badge_img', '=', 'media.id')->orderBy('id','desc')->select('badges.*', 'media.path')->skip($start)->take($rowperpage);

		    if (!empty($searchValue)) {
		    	$records->where('badges.badge_name', 'like', '%' .$searchValue . '%');
		    }

		    if (!empty($columnName)) {
		    	$records->orderBy($columnName, 'desc');
		    } elseif (!empty($columnName) && !empty($columnSortOrder)) {
		    	$records->orderBy($columnName, $columnSortOrder);
		    }

		    $records = $records->get();

		    $data_arr = array();
		     
		    if (!empty($records)) {
		    	foreach($records as $record){
			        $id = $record->id;
			        $imagePath = url('public/'.$record->path);
			        $badgeName = $record->badge_name;
			        $status = $record->is_active;
			        $displayOrder = $record->display_order;
			       
			        $data_arr[] = array(
			        	"checkbox" => '<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="'.$id.'" />
						</div>',
			          	"name" => '<div class="d-flex align-items-center">
	                        <a href="#" class="symbol symbol-50px">
	                            <span class="symbol-label" style="background-image:url('.$imagePath.');"></span>
	                        </a>	                        

	                        <div class="ms-5">	                            
	                            <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">'.$badgeName.'</a>
	                        </div>
	                    </div>',
			          	"order" => '<input style="width:100px" class="form-control" type="number" value="'.$displayOrder.'">',
			          	"action" => '<td class="text-end" data-kt-filemanager-table="action_dropdown">
						<div class="d-flex justify-content-end">							
							<div class="ms-2">
								<button type="button" class="btn btn-sm btn-light btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
									
									<span class="svg-icon svg-icon-5 m-0">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
										</svg>
									</span>
									
								</button>
								
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-150px py-4" data-kt-menu="true">
									
									<div class="menu-item px-3">
										<a href="'.url('/admin/badge/edit/'.$id).'" class="menu-link px-3">Edit</a>
									</div>
									
									<div class="menu-item px-3">
										<a href="javascript:void(0)" data-id="'.$id.'" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">Delete</a>
									</div>
								</div>

							</div>
						</div>
					</td>'
			        );
			    }
		    }

		    $response = array(
		        "draw" => intval($draw),
		        "iTotalRecords" => $totalRecords,
		        "iTotalDisplayRecords" => $totalRecordswithFilter,
		        "aaData" => $data_arr
		    );

		    echo json_encode($response);
		    exit;

		} else {
			$this->status = array(
				'error' => true,
				'eType' => 'final',
				'msg' => 'Something went wrong'
			);
		}

		echo json_encode($this->status);
	}

	public function doAdd(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
	            'image' => 'required|numeric',
	            'name' => 'required',
	            'displayOrder' => 'required|numeric|min:1',
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

	        	$slug = Str::slug($request->post('name'));
	        	$slug = validateSlug('badges', 'badge_slug', $slug);

	        	$obj = [
	        		'badge_name' => $request->post('name'),
	        		'badge_slug' => $slug,
	        		'badge_img' => $request->post('image'),
	        		'is_active' => 1,
	        		'display_order' => $request->post('displayOrder'),
	        	];

	        	//insert data
	        	$isAdded = BadgeModel::create($obj);

	        	if ($isAdded) {

	        		$this->status = array(
						'error' => false,
						'msg' => 'Badge has been added successfully.',
						'redirect' => url('admin')
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

	public function doUpdate(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
	            'image' => 'required|numeric',
	            'name' => 'required',
	            'displayOrder' => 'required|numeric|min:1',
	            'id' => 'required|numeric',
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

	        	//check if id exist
	        	$badgeId = $request->post('id');
	        	$getBadge = BadgeModel::where('id', $badgeId)->first();

	        	if (!empty($getBadge)) {

	        		$slug = Str::slug($request->post('name'));
		        	$slug = validateSlug('badges', 'badge_slug', $slug, $badgeId);

		        	$obj = [
		        		'badge_name' => $request->post('name'),
		        		'badge_slug' => $slug,
		        		'badge_img' => $request->post('image'),
		        		'display_order' => $request->post('displayOrder'),
		        	];

		        	//update data
		        	$isUpdated = BadgeModel::where('id', $badgeId)->update($obj);

		        	if ($isUpdated) {

		        		$this->status = array(
							'error' => false,
							'msg' => 'Badge has been updated successfully.',
							'redirect' => url('admin')
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

	public function delete(Request $request) {
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
	            'id' => 'required|numeric',
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

	        	$id = $request->post('id');

	        	//check if data exist

	        	$getData = BadgeModel::where('id', '=', $id)->first();
	        	
	        	if (!empty($getData)) {
	        		
	        		$isDeleted = BadgeModel::where('id', $id)->delete();

        			if ($isDeleted) {
        				$this->status = array(
							'error' => false,								
							'msg' => 'Badge has been deleted successfully.'
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

	public function bulkDelete(Request $request) {
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
	            'ids' => 'required|array',
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

	        	$ids = $request->post('ids');

	        	//check if media data exist
	        	$getData = BadgeModel::whereIn('id', $ids)->get();	        	
	        	
	        	if (!empty($getData)) {

	        		$isDeleted = BadgeModel::whereIn('id', $ids)->delete();
	        		
	        		if ($isDeleted) {
        				$this->status = array(
							'error' => false,								
							'msg' => 'Badge has been deleted successfully.'
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
	
}