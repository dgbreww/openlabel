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

use App\Models\UserModel;
use App\Models\BadgeModel;

class Users extends Controller {

	private $status = array();

	public function index() {		

		$data = array(
			'title' => 'Users',
			'pageTitle' => 'Users',			
			'adminData' => adminInfo(),			
			'siteSettings' => siteSettings(),
		);

		return view('admin/users/vwManageUsers', $data);
		
	}

	public function add() {

		$badgeList = BadgeModel::where('is_active', 1)->get();

		$data = array(
			'title' => 'User',
			'pageTitle' => 'User',
			'adminData' => adminInfo(),			
			'siteSettings' => siteSettings(),
			'badgeList' => $badgeList
		);

		return view('admin/users/vwAddUser', $data);
	}

	public function get(Request $request) {

		if ($request->ajax()) {

			$allColumns = \Schema::getColumnListing('users');

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
		    $totalRecords = UserModel::select('count(*) as allcount')->count();
		    $totalRecordswithFilter = UserModel::select('count(*) as allcount');

		    if (!empty($searchValue)) {
		    	//$totalRecordswithFilter->where('first_name', 'like', '%' .$searchValue . '%');
		    	
		    	foreach($allColumns as $column){
				    $totalRecordswithFilter->orWhere($column, 'like', '%' .$searchValue . '%');
				}

		    }

		    $totalRecordswithFilter = $totalRecordswithFilter->count();

		     // Fetch records
		    $records = UserModel::orderBy('id','desc')->select('users.*')->skip($start)->take($rowperpage);

		    if (!empty($searchValue)) {
		    	//$records->where('users.first_name', 'like', '%' .$searchValue . '%');

		    	foreach($allColumns as $column){
				    $records->orWhere($column, 'like', '%' .$searchValue . '%');
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
			        $userType = $record->user_type;
			        $provider = $record->provider_type;
			        $isVerified = $record->verified;
			        $accountStatus = $record->account_status;

			        if ($userType == 'artist') {
			        	$userTypeDiv = '<div class="badge badge-light-primary">'.ucwords($userType).'</div>';
			        } else {
			        	$userTypeDiv = '<div class="badge badge-light-warning">'.ucwords($userType).'</div>';
			        }

			        if ($accountStatus == 'active') {
			        	$accountStatusDiv = '<div class="badge badge-light-success">'.ucwords($accountStatus).'</div>';
			        } else {
			        	$accountStatusDiv = '<div class="badge badge-light-danger">'.ucwords($accountStatus).'</div>';
			        }

			        $registeredAt = $record->created_at;
			       
			        $data_arr[] = array(
			        	"checkbox" => '<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="'.$id.'" />
						</div>',
			          	"name" => '<div class="d-flex align-items-center">
	                        <div class="ms-5">	                            
	                            <a href="#" class="text-gray-800 text-hover-primary fs-5 fw-bold" data-kt-ecommerce-product-filter="product_name">'.$name.'</a>
	                        </div>
	                    </div>',
	                    "email" => $email,
	                    "userType" => $userTypeDiv,
	                    "provider" => ucwords($provider),
	                    "isVerified" => ucwords($isVerified),
	                    "accountStatus" => $accountStatusDiv,
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
										<a href="'.url('/admin/users/edit/'.$id).'" class="menu-link px-3">Edit</a>
									</div>
									
									<div class="menu-item px-3">
										<a href="javascript:void(0)" data-id="'.$id.'" class="menu-link text-danger px-3" data-kt-filemanager-table-filter="delete_row">Delete</a>
									</div>

									<div class="menu-item px-3">
										<a target="_blank" href="'.url('/admin/users/login/'.$id).'" class="menu-link text-success px-3">Login</a>
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

	public function login($userId, Request $request) {

		//get user data from user id
		$getUser = UserModel::where('id', $userId)->first();

		if (!empty($getUser)) {
			
			$request->session()->put('userSess', array(
    			'userId' => $getUser->id,
    			'name' => $getUser->first_name,
    			'userType' => $getUser->user_type,
    		));

    		return redirect('user/dashboard');

		} else {
			return redirect('/admin/users');
		}

	}

	public function edit($id) {

		//check if id exist
		$getUser = UserModel::where('id', $id)->first();
		$badgeList = BadgeModel::where('is_active', 1)->get();

		if (empty($getUser)) {
			return redirect('/admin/users');
		}

		$data = array(
			'title' => 'Users',
			'pageTitle' => 'Users',
			'adminData' => adminInfo(),			
			'siteSettings' => siteSettings(),
			'badgeList' => $badgeList,
			'userData' => $getUser
		);

		return view('admin/users/vwEditUser', $data);
	}

	public function doAdd(Request $request) {
		
		if ($request->ajax()) {

			$validator = Validator::make($request->post(), [
				'firstName' => 'required',
				'lastName' => 'required',
	            'email' => 'required|email|unique:users,email',
	            'password' => 'required',
	            'userType' => 'required|in:artist,creator',
	            'badge' => 'sometimes|nullable|numeric',
	            'accountStatus' => 'required|in:active,inactive',
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

	        	$obj = array(
	        		'first_name' => $request->post('firstName'),
	        		'last_name' => $request->post('lastName'),
	        		'email' => $request->post('email'),
	        		'password' => Hash::make($request->post('password')),
	        		'user_type' => $request->post('userType'),
	        		'provider_type' => 'website',
	        		'verified' => 'yes',
	        		'account_status' => $request->post('accountStatus'),
	        	);

	        	if (!empty($request->post('badge'))) {
	        		$obj['badge_id'] = $request->post('badge');
	        	}

	        	//insert data
	        	$isCreated = UserModel::create($obj);

	        	if ($isCreated) {

	        		$this->status = array(
						'error' => false,
						'msg' => 'User has been added successfully.',
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

			$id = $request->post('id');

	        $validator = Validator::make($request->post(), [
				'firstName' => 'required',
				'lastName' => 'required',
	            'email' => 'required|email|unique:users,email,'.$id,
	            'password' => 'sometimes|nullable',
	            'userType' => 'required|in:artist,creator',
	            'accountStatus' => 'required|in:active,inactive',
	            'badge' => 'sometimes|nullable|numeric',
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

	        	$getUser = UserModel::where('id', $id)->first();

	        	$obj = array(
	        		'first_name' => $request->post('firstName'),
	        		'last_name' => $request->post('lastName'),
	        		'email' => $request->post('email'),
	        		'user_type' => $request->post('userType'),
	        		'account_status' => $request->post('accountStatus'),       		
	        	);

	        	if (!empty($request->post('password'))) {
	        		$obj['password'] = Hash::make($request->post('password'));
	        	}

	        	if (!empty($request->post('badge'))) {
	        		$obj['badge_id'] = $request->post('badge');
	        	}

	        	//update data
	        	$isUpdated = UserModel::where('id', $id)->update($obj);

	        	if ($isUpdated) {

	        		//send email
		        	if ($getUser->account_status != $request->post('accountStatus')) {
		        		
		        		if ($request->post('accountStatus') == 'active') {
		        			
		        			//send active email
		        			$msg = "Congratulations! Your account has been activated.";

		        		} else {

		        			//send inactive email
		        			$msg = "Your account has been deactivated by Admin. Please contact your Administrator";

		        		}

		        		$emailData = array(
		        			'name' => $getUser->first_name,
	        				'email' => $getUser->email,
	        				'subject' => 'Account Status Change',
	        				'msg' => $msg
	        			);

		        		EmailSending::userAccountStatusNotify($emailData);

		        	}

	        		$this->status = array(
						'error' => false,
						'msg' => 'User has been updated successfully.',
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

	        	$getData = UserModel::where('id', '=', $id)->first();
	        	
	        	if (!empty($getData)) {
	        		
	        		$isDeleted = UserModel::where('id', $id)->delete();

        			if ($isDeleted) {
        				$this->status = array(
							'error' => false,								
							'msg' => 'User has been deleted successfully.'
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
	        	$getData = UserModel::whereIn('id', $ids)->get();	        	
	        	
	        	if (!empty($getData)) {

	        		$isDeleted = UserModel::whereIn('id', $ids)->delete();
	        		
	        		if ($isDeleted) {
        				$this->status = array(
							'error' => false,								
							'msg' => 'Category has been deleted successfully.'
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