@include('admin.partials.vwAdminHeader')

<!--begin::Main-->
<!--begin::Root-->
<div class="d-flex flex-column flex-root">
	<!--begin::Page-->
	<div class="page d-flex flex-row flex-column-fluid">
		
		<!--begin::Aside-->
		@include('admin.partials.vwAdminSidebar')
		<!--end::Aside-->
		
		<!--begin::Wrapper-->
		<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
			
			@include('admin.partials.vwAdminTopbar')

			<!--begin::Content-->
			<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
				<!--begin::Container-->
				<div class="container-fluid" id="kt_content_container">
					<!--begin::Basic info-->
					<div class="card mb-5 mb-xl-10">
						<!--begin::Card header-->
						<div class="card-header border-0 cursor-pointer">
							<!--begin::Card title-->
							<div class="card-title m-0">
								<h3 class="fw-bold m-0">Withdrawal Request Update</h3>
							</div>
							<!--end::Card title-->

							<div class="card-toolbar">
								<!--begin::Toolbar-->
								<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
									<!--begin::Add customer-->
									<a href="{{ url('/admin/withdrawal-request'); }}" class="btn btn-primary">Back</a>
									<!--end::Add customer-->
								</div>
								<!--end::Toolbar-->
							</div>

						</div>
						<!--begin::Card header-->
						<!--begin::Content-->
						<div id="kt_account_settings_profile_details" class="collapse show">
							<!--begin::Form-->
							<form action="{{ url('admin/withdrawal-request/doUpdate') }}" id="kt_update_packages_form" class="form" enctype="multipart/form-data" method="post">
								<!--begin::Card body-->
								<div class="card-body border-top p-9">

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">User Name</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input disabled type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Category" value="{{ $withdrawalReqData->first_name.' '.$withdrawalReqData->last_name }}" />
													<span id="nameErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input disabled type="text" name="email" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Email" value="{{ $withdrawalReqData->email }}" />
													<span id="emailErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Payment Method</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input disabled type="text" name="paymentMethod" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Payment Method" value="{{ $withdrawalReqData->payment_method }}" />
													<span id="paymentMethodErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>

									@if($withdrawalReqData->payment_method == 'Paypal')
									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Paypal</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input disabled type="text" name="paypal" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Paypal" value="{{ $withdrawalReqData->paypal_id }}" />
													<span id="paypalErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>
									@elseif($withdrawalReqData->payment_method == 'Stripe')
									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Stripe</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input disabled type="text" name="stripe" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Stripe" value="{{ $withdrawalReqData->stripe_id }}" />
													<span id="stripeErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>
									@elseif($withdrawalReqData->payment_method == 'Bank Transfer')
									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Account Holder Name</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input disabled type="text" name="accountHolderName" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Account Holder Name" value="{{ $withdrawalReqData->account_holder_name }}" />
													<span id="accountHolderNameErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Bank Name</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input disabled type="text" name="bankName" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Bank Name" value="{{ $withdrawalReqData->bank_name }}" />
													<span id="bankNameErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Account Number</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input disabled type="text" name="accountNumber" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Account Number" value="{{ $withdrawalReqData->account_number }}" />
													<span id="accountNumberErr" class="error"></span>
												</div>
											</div>
										</div>								
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">IBAN</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input disabled type="text" name="iban" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="IBAN" value="{{ $withdrawalReqData->iban }}" />
													<span id="ibanErr" class="error"></span>
												</div>
											</div>
										</div>								
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">IFSC Code</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input disabled type="text" name="ifscCode" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="IFSC Code" value="{{ $withdrawalReqData->ifsc_code }}" />
													<span id="ifscCodeErr" class="error"></span>
												</div>
											</div>
										</div>								
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Remark</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<textarea disabled class="form-control form-control-lg form-control-solid mb-3 mb-lg-0">{{ $withdrawalReqData->remark }}</textarea>
													<span id="remarkErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>

									@endif
									
									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Withdrawal Amount ($)</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input type="text" disabled name="withdrawalAmount" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Withdrawal Amount" value="{{ $withdrawalReqData->amount }}" />
													<span id="withdrawalAmountErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>

									

									
									
								</div>
								<!--end::Card body-->
								
								@if($withdrawalReqData->status == 'pending')
								<!--begin::Actions-->
								<div class="card-footer d-flex justify-content-end py-6 px-9">
									<input type="hidden" name="id" value="{{ $withdrawalReqData->id }}">
									@csrf
									<button type="submit" class="btn btn-success" id="kt_update_packages_form_submit">
										<!--begin::Indicator label-->
										<span class="indicator-label">Transfer Amount</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait... 
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::Actions-->
								@endif

							</form>
							<!--end::Form-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Basic info-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Content-->

			<!--begin::Footer-->
			@include('admin.partials.vwAdminPartialFooter')
			<!--end::Footer-->
		</div>
		<!--end::Wrapper-->

	</div>
	<!--end::Page-->
</div>
<!--end::Root-->
<!--end::Main-->

@include('admin.partials.vwAdminFooter')