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
use App\Models\WalletHistoryModel;
use App\Models\WithdrawalRequestModel;

class WithdrawalRequest extends Controller {

	private $status = array();

	public function index() {		

		$data = array(
			'title' => 'Withdrawal Request',
			'pageTitle' => 'Withdrawal Request',			
			'adminData' => adminInfo(),			
			'siteSettings' => siteSettings(),
		);

		return view('admin/withdrawal/vwManageWithdrawalRequest', $data);
		
	}

	public function get(Request $request) {

		if ($request->ajax()) {

			$allColumns = \Schema::getColumnListing('withdrawal_request');

			$userColumns = \Schema::getColumnListing('users');

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
		    $totalRecords = WithdrawalRequestModel::join('users', 'withdrawal_request.user_id', '=', 'users.id')
		    ->select('count(*) as allcount')->count();

		    $totalRecordswithFilter = WithdrawalRequestModel::join('users', 'withdrawal_request.user_id', '=', 'users.id')
		    ->select('count(*) as allcount');

		    if (!empty($searchValue)) {
		    	//$totalRecordswithFilter->where('first_name', 'like', '%' .$searchValue . '%');
		    	
		    	foreach($allColumns as $column){
				    $totalRecordswithFilter->orWhere('withdrawal_request.'.$column, 'like', '%' .$searchValue . '%');
				}

				foreach($userColumns as $userColums){
				    $totalRecordswithFilter->orWhere('users.'.$userColums, 'like', '%' .$searchValue . '%');
				}

		    }

		    $totalRecordswithFilter = $totalRecordswithFilter->count();

		     // Fetch records
		    $records = WithdrawalRequestModel::join('users', 'withdrawal_request.user_id', '=', 'users.id')
		    ->orderBy('withdrawal_request.id','desc')->select('withdrawal_request.*', 'users.first_name', 'users.last_name', 'users.email')->skip($start)->take($rowperpage);

		    if (!empty($searchValue)) {
		    	//$records->where('users.first_name', 'like', '%' .$searchValue . '%');

		    	foreach($allColumns as $column){
				    $records->orWhere('withdrawal_request.'.$column, 'like', '%' .$searchValue . '%');
				}

				foreach($userColumns as $userColums){
				    $records->orWhere('users.'.$userColums, 'like', '%' .$searchValue . '%');
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
			        $paymentMethod = $record->payment_method;

			        $status = $record->status;
			        
			         if ($status == 'pending') {
			        	$statusDiv = '<div class="badge badge-light-danger">'.ucwords($status).'</div>';
			        } else {
			        	$statusDiv = '<div class="badge badge-light-success">'.ucwords($status).'</div>';
			        }

			        $amount = $record->amount;
			        $createdAt = $record->created_at;
			       
			        $data_arr[] = array(
			        	"checkbox" => '<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="'.$id.'" />
						</div>',
						"name" => $name,
	                    "email" => $email,
	                    "paymentMethod" => $paymentMethod,
	                    "status" => $statusDiv,
	                    "amount" => '$'.$amount,
			          	"createdAt" => date('d-m-Y', strtotime($createdAt)),
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
										<a href="'.url('/admin/withdrawal-request/edit/'.$id).'" class="menu-link text-primary px-3">Update</a>
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
		$getData = WithdrawalRequestModel::join('users', 'withdrawal_request.user_id', '=', 'users.id')
		    ->select('users.*', 'withdrawal_request.*')->first();

		if (empty($getData)) {
			return redirect('/admin/withdrawal-request');
		}

		$data = array(
			'title' => 'Withdrawal Request ',
			'pageTitle' => 'Withdrawal Request ',
			'adminData' => adminInfo(),			
			'siteSettings' => siteSettings(),
			'withdrawalReqData' => $getData,
		);

		return view('admin/withdrawal/vwEditWithdrawalRequest', $data);
	}

	public function doUpdate(Request $request) {
		
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
	        	$isWithdrawalReqExist = WithdrawalRequestModel::where('id', $id)->first();

	        	if (!empty($isWithdrawalReqExist) && !empty($isWithdrawalReqExist->toArray())) {

	        		//check withdrawl request status

	        		if ($isWithdrawalReqExist->status == 'pending') {

	        			$userId = $isWithdrawalReqExist->user_id;
		        		$getUserData = UserModel::where('id', $userId)->first();

		        		$newWalletAmount = $getUserData->wallet_amount - $isWithdrawalReqExist->amount;

		        		$isDeducted = UserModel::where('id', $userId)->update(array(
		        			'wallet_amount' => $newWalletAmount
		        		));

		        		if ($isDeducted) {
		        			
		        			//update status and create wallet history
		        			WithdrawalRequestModel::where('id', $id)->update(['status' => 'approved']);

		        			WalletHistoryModel::create(array(
			        			'user_id' => $userId,
			        			'transaction_type' => 'DR',
			        			'amount' => $isWithdrawalReqExist->amount,
			        			'comment' => 'Amount has been transffered'
			        		));

			        		//send notification to the user
			        		$msg = 'The amount has been transffered to your '.$isWithdrawalReqExist->payment_method;

		        			//send notification to the creator and admin

		        			$mailObj = array(
		        				'name' => $getUserData->first_name,
		        				'email' => $getUserData->email,
		        				'subject' => 'Notification | Amount Transffered',
		        				'msg' => $msg
		        			);

							EmailSending::userNotification($mailObj);

			        		$this->status = array(
								'error' => false,
								'redirect' => url('admin/withdrawal-request'),
								'msg' => 'User amount has been transffered successfully.',
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

	        	$getData = WithdrawalRequestModel::where('id', '=', $id)->first();
	        	
	        	if (!empty($getData)) {
	        		
	        		$isDeleted = WithdrawalRequestModel::where('id', $id)->delete();

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
	        	$getData = WithdrawalRequestModel::whereIn('id', $ids)->get();	        	
	        	
	        	if (!empty($getData)) {

	        		$isDeleted = WithdrawalRequestModel::whereIn('id', $ids)->delete();
	        		
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