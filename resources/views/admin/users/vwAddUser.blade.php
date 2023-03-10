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
								<h3 class="fw-bold m-0">Add User</h3>
							</div>
							<!--end::Card title-->

							<div class="card-toolbar">
								<!--begin::Toolbar-->
								<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
									<!--begin::Add customer-->
									<a href="{{ url('/admin/users'); }}" class="btn btn-primary">Back</a>
									<!--end::Add customer-->
								</div>
								<!--end::Toolbar-->
							</div>

						</div>
						<!--begin::Card header-->
						<!--begin::Content-->
						<div id="kt_account_settings_profile_details" class="collapse show">
							<!--begin::Form-->
							<form action="{{ url('admin/users/doAdd') }}" id="kt_add_user_form" class="form" enctype="multipart/form-data" method="post">
								<!--begin::Card body-->
								<div class="card-body border-top p-9">
									
									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">First Name</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input type="text" name="firstName" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="First Name" value="" />
													<span id="firstNameErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Last Name</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input type="text" name="lastName" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Last Name" value="" />
													<span id="lastNameErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input type="text" name="email" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Email" value="" />
													<span id="emailErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Password</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input type="text" name="password" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Password" value="" />
													<span id="passwordErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">User Type</label>
										<div class="col-lg-8">													
											<div class="row">
												<div class="col-lg-12 fv-row">
													<select name="userType" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
														<option value="creator">Creator</option>
														<option value="artist">Artist</option>
													</select>
													<span id="userTypeErr" class="error"></span>
												</div>
											</div>
										</div>
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label fw-semibold fs-6">Badge</label>
										<div class="col-lg-8">													
											<div class="row">
												<div class="col-lg-12 fv-row">
													<select name="badge" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Badge" name="badge">
														<option value="">Select Badge</option>
														@if(!empty($badgeList))
															@foreach($badgeList as $badge)
																<option value="{{ $badge->id }}">{{ $badge->badge_name }}</option>
															@endforeach
														@endif
													</select>
													<span id="badgeErr" class="error"></span>
												</div>
											</div>
										</div>
									</div>

									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Account Status</label>
										<div class="col-lg-8">													
											<div class="row">
												<div class="col-lg-12 fv-row">
													<select name="accountStatus" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
														<option value="active">Active</option>
														<option value="inactive">Inactive</option>
													</select>
													<span id="accountStatusErr" class="error"></span>
												</div>
											</div>
										</div>
									</div>
									
								</div>
								<!--end::Card body-->
								<!--begin::Actions-->
								<div class="card-footer d-flex justify-content-end py-6 px-9">
									@csrf
									<button type="submit" class="btn btn-primary" id="kt_add_user_form_submit">
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