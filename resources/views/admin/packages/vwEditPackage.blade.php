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
								<h3 class="fw-bold m-0">Edit Package</h3>
							</div>
							<!--end::Card title-->

							<div class="card-toolbar">
								<!--begin::Toolbar-->
								<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
									<!--begin::Add customer-->
									<a href="{{ url('/admin/packages'); }}" class="btn btn-primary">Back</a>
									<!--end::Add customer-->
								</div>
								<!--end::Toolbar-->
							</div>

						</div>
						<!--begin::Card header-->
						<!--begin::Content-->
						<div id="kt_account_settings_profile_details" class="collapse show">
							<!--begin::Form-->
							<form action="{{ url('admin/packages/doUpdate') }}" id="kt_update_packages_form" class="form" enctype="multipart/form-data" method="post">
								<!--begin::Card body-->
								<div class="card-body border-top p-9">

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Category</label>
										<div class="col-lg-8">													
											<div class="row">
												<div class="col-lg-12 fv-row">
													<select name="category" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Category" name="category">
														@if(!empty($categoryList))
															@foreach($categoryList as $category)
																<option {{ ($category->id == $pacakgeData->category_id)? 'selected':'' }} value="{{ $category->id }}">{{ $category->category_name }}</option>
															@endforeach
														@endif
													</select>
													<span id="categoryErr" class="error"></span>
												</div>
											</div>
										</div>
									</div>
									
									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Package Name</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input type="text" name="packageName" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Package Name" value="{{ $pacakgeData->package_name }}" />
													<span id="packageNameErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">No of Videos Accepted</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input min="1" type="number" name="noOfVideos" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="No of Videos" value="{{ $pacakgeData->no_of_videos }}" />
													<span id="noOfVideosErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">No of Videos Received</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input min="1" type="number" name="noOfVideosReceived" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="No of Videos" value="{{ $pacakgeData->no_of_videos_received }}" />
													<span id="noOfVideosReceivedErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Timeline</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input min="1" type="number" name="timeline" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Timeline" value="{{ $pacakgeData->timeline }}" />
													<span id="timelineErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Price</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input min="1" type="number" name="price" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Price" value="{{ $pacakgeData->price*1 }}" />
													<span id="priceErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Payout</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input min="1" type="number" name="payout" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Payout" value="{{ $pacakgeData->payout*1 }}" />
													<span id="payoutErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Status</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<select name="status" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a status" name="status">
														<option {{ ($pacakgeData->is_active == 'active')? 'selected':'' }} value="active">Active</option>
														<option {{ ($pacakgeData->is_active == 'inactive')? 'selected':'' }} value="inactive">Inactive</option>
													</select>
													<span id="statusErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>
									
								</div>
								<!--end::Card body-->
								<!--begin::Actions-->
								<div class="card-footer d-flex justify-content-end py-6 px-9">
									<input type="hidden" name="id" value="{{ $pacakgeData->id }}">
									@csrf
									<button type="submit" class="btn btn-primary" id="kt_update_packages_form_submit">
										<!--begin::Indicator label-->
										<span class="indicator-label">Save Changes</span>
										<!--end::Indicator label-->
										<!--begin::Indicator progress-->
										<span class="indicator-progress">Please wait... 
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
										<!--end::Indicator progress-->
									</button>
								</div>
								<!--end::Actions-->
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