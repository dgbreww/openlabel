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
use Illuminate\Http\File;

use App\Models\CustomPackageModel;
use App\Models\PackageModel;

class PackageEnquiry extends Controller {

	private $status = array();

	public function index() {		

		$data = array(
			'title' => 'Custom Package Enquiry',
			'pageTitle' => 'Custom Package Enquiry',			
			'adminData' => adminInfo(),			
			'siteSettings' => siteSettings(),
		);

		return view('admin/packages/vwManageCustomPackageEnquiry', $data);
		
	}

	public function get(Request $request) {

		if ($request->ajax()) {

			$allColumns = \Schema::getColumnListing('custom_package');

			$userColumns = \Schema::getColumnListing('users');
			$categoryColumns = \Schema::getColumnListing('category');

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
		    $totalRecords = CustomPackageModel::join('users', 'custom_package.user_id', '=', 'users.id')
		    ->join('category', 'custom_package.category_id', '=', 'category.id')
		    ->select('count(*) as allcount')->count();

		    $totalRecordswithFilter = CustomPackageModel::join('users', 'custom_package.user_id', '=', 'users.id')
		    ->join('category', 'custom_package.category_id', '=', 'category.id')->select('count(*) as allcount');

		    if (!empty($searchValue)) {
		    	//$totalRecordswithFilter->where('first_name', 'like', '%' .$searchValue . '%');
		    	
		    	foreach($allColumns as $column){
				    $totalRecordswithFilter->orWhere('custom_package.'.$column, 'like', '%' .$searchValue . '%');
				}

				foreach($userColumns as $userColums){
				    $totalRecordswithFilter->orWhere('users.'.$userColums, 'like', '%' .$searchValue . '%');
				}

				foreach($categoryColumns as $catColumns){
				    $totalRecordswithFilter->orWhere('category.'.$catColumns, 'like', '%' .$searchValue . '%');
				}

		    }

		    $totalRecordswithFilter = $totalRecordswithFilter->count();

		     // Fetch records
		    $records = CustomPackageModel::join('users', 'custom_package.user_id', '=', 'users.id')
		    ->join('category', 'custom_package.category_id', '=', 'category.id')
		    ->orderBy('custom_package.id','desc')->select('custom_package.*', 'users.first_name', 'users.last_name', 'users.email', 'category.category_name')->skip($start)->take($rowperpage);

		    if (!empty($searchValue)) {
		    	//$records->where('users.first_name', 'like', '%' .$searchValue . '%');

		    	foreach($allColumns as $column){
				    $records->orWhere('custom_package.'.$column, 'like', '%' .$searchValue . '%');
				}

				foreach($userColumns as $userColums){
				    $records->orWhere('users.'.$userColums, 'like', '%' .$searchValue . '%');
				}

				foreach($categoryColumns as $catColumns){
				    $records->orWhere('category.'.$catColumns, 'like', '%' .$searchValue . '%');
				}

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
			        $name = $record->first_name.' '.$record->last_name;
			        $email = $record->email;
			        $category = $record->category_name;
			        $noOfVideos = $record->no_of_videos;
			        $timeline = $record->timeline;
			        $requirements = $record->requirements;

			        $registeredAt = $record->created_at;
			       
			        $data_arr[] = array(
			        	"checkbox" => '<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="'.$id.'" />
						</div>',
						"name" => $name,
	                    "email" => $email,
	                    "category" => $category,
	                    "noOfVideos" => $noOfVideos,
	                    "timeline" => $timeline,
	                    "requirements" => $requirements,
			          	"registeredAt" => date('d-m-Y', strtotime($registeredAt)),
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
										<a href="'.url('/admin/package-enquiry/edit/'.$id).'" class="menu-link text-primary px-3">Update</a>
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

	public function edit($id) {

		//check if id exist
		//$getPackage = CustomPackageModel::where('id', $id)->first();

		$getPackage = CustomPackageModel::join('users', 'custom_package.user_id', '=', 'users.id')
		    ->join('category', 'custom_package.category_id', '=', 'category.id')
		    ->select('users.first_name', 'users.last_name',  'users.email', 'custom_package.*', 'category.category_name')->first();

		if (empty($getPackage)) {
			return redirect('/admin/package-enquiry');
		}

		$data = array(
			'title' => 'Packages',
			'pageTitle' => 'Packages',
			'adminData' => adminInfo(),			
			'siteSettings' => siteSettings(),
			'packageData' => $getPackage,
		);

		return view('admin/packages/vwEditCustomPackage', $data);
	}

	public function doUpdate(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
				'categoryId' => 'required|numeric',
				'userId' => 'required|numeric',
				'id' => 'required|numeric',
				'packageName' => 'required',
	            'noOfVideos' => 'required|numeric|min:1',
	            'noOfVideosReceived' => 'required|numeric|min:1',
	            'timeline' => 'required|numeric|min:1',
	            'price' => 'required|numeric|min:0',
	            'payout' => 'required|numeric',
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

	        	$slug = Str::slug($request->post('packageName'));
	        	$slug = validateSlug('packages', 'package_slug', $slug);

	        	$obj = array(
	        		'user_id' => $request->post('userId'),
	        		'category_id' => $request->post('categoryId'),
	        		'package_name' => $request->post('packageName'),
	        		'package_slug' => $slug,
	        		'no_of_videos' => $request->post('noOfVideos'),
	        		'no_of_videos_received' => $request->post('noOfVideosReceived'),
	        		'timeline' => $request->post('timeline'),
	        		'price' => $request->post('price'),
	        		'payout' => $request->post('payout'),
	        		'is_active' => 'active',
	        		'display_order' => 1        		
	        	);

	        	//get user info

	        	$userData = userInfoById($request->post('userId'));	        	

	        	//send notification to the artist
				$msg = 'Your custom package has been approved and created by the Admin. <br> <strong>Package Name: </strong>'.$request->post('packageName').'. Please login your accout and checkout the package';

				$mailObj = array(
    				'name' => $userData->first_name,
    				'email' => $userData->email,
    				'subject' => 'Notification | Custom Package Approved',
    				'msg' => $msg
    			);

				$isMailSent = EmailSending::customPackageApproved($mailObj);

	        	//insert data
	        	$isCreated = PackageModel::create($obj);

	        	if ($isCreated) {

	        		//remove the custom package
	        		CustomPackageModel::where('id', $request->post('id'))->delete();

	        		$this->status = array(
						'error' => false,
						'redirect' => url('admin/package-enquiry/'),
						'msg' => 'Custom Package has been approved successfully.',
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

	        	$getData = CustomPackageModel::where('id', '=', $id)->first();
	        	
	        	if (!empty($getData)) {
	        		
	        		$isDeleted = CustomPackageModel::where('id', $id)->delete();

        			if ($isDeleted) {
        				$this->status = array(
							'error' => false,								
							'msg' => 'Package Enquiry has been deleted successfully.'
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
	        	$getData = CustomPackageModel::whereIn('id', $ids)->get();	        	
	        	
	        	if (!empty($getData)) {

	        		$isDeleted = CustomPackageModel::whereIn('id', $ids)->delete();
	        		
	        		if ($isDeleted) {
        				$this->status = array(
							'error' => false,								
							'msg' => 'Package Enquiry has been deleted successfully.'
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