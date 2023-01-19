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
						<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
							<!--begin::Card title-->
							<div class="card-title m-0">
								<h3 class="fw-bold m-0">Profile Details</h3>
							</div>
							<!--end::Card title-->
						</div>
						<!--begin::Card header-->
						<!--begin::Content-->
						<div id="kt_account_settings_profile_details" class="collapse show">
							<!--begin::Form-->
							<form action="{{ url('admin/doUpdateProfile') }}" id="kt_account_profile_details_form" class="form" enctype="multipart/form-data" method="post">
								<!--begin::Card body-->
								<div class="card-body border-top p-9">
									<!--begin::Input group-->
									<div class="row mb-6">
										<!--begin::Label-->
										<label class="col-lg-4 col-form-label fw-semibold fs-6">Profile Picture</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<!--begin::Image input-->
											<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset('public/admin/') }}/media/svg/avatars/blank.svg')">
												<!--begin::Preview existing avatar-->
												<div id="preview_profile_image" class="image-input-wrapper w-125px h-125px" style="background-image: url({{ $profileImage  }})"></div>
												<!--end::Preview existing avatar-->
												
												<!--begin::Label-->
												<label class="image-picker btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-input-name="profile_image" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
													<i class="bi bi-pencil-fill fs-7"></i>
													<!--begin::Inputs-->
													<!-- <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
													<input type="hidden" name="avatar_remove" /> -->
													<input id="input_profile_image" type="hidden" name="profile_image" value="{{ $adminData->profile_picture }}">
													<!--end::Inputs-->
												</label>
												<!--end::Label-->

												<!--begin::Cancel-->
												<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
													<i class="bi bi-x fs-2"></i>
												</span>
												<!--end::Cancel-->
												<!--begin::Remove-->
												<span id="remove_profile_image" class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-input-name="profile_image" data-kt-image-input-action="remove" data-input-name="profile_image" data-bs-toggle="tooltip" title="Remove avatar">
													<i class="bi bi-x fs-2"></i>
												</span>
												<!--end::Remove-->
											</div>
											<!--end::Image input-->
											<!--begin::Hint-->
											<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
											<!--end::Hint-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-6">
										<!--begin::Label-->
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Name</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<!--begin::Row-->
											<div class="row">
												<!--begin::Col-->
												<div class="col-lg-12 fv-row">
													<input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Name" value="{{ $adminData->name }}" />
													<span id="nameErr" class="error"></span>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-6">
										<!--begin::Label-->
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Email</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<input disabled type="text" name="email" class="form-control form-control-lg form-control-solid" placeholder="Email" value="{{ $adminData->email }}" />
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-6">
										<!--begin::Label-->
										<label class="col-lg-4 col-form-label fw-semibold fs-6">
											<span>Phone</span>
											<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
										</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<input type="tel" name="phone" class="form-control form-control-lg form-control-solid" placeholder="Phone number" value="{{ $adminData->phone }}" />
											<span id="phoneErr" class="error"></span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
									<!--begin::Input group-->
									<div class="row mb-6">
										<!--begin::Label-->
										<label class="col-lg-4 col-form-label fw-semibold fs-6">Address</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8 fv-row">
											<input type="text" name="address" class="form-control form-control-lg form-control-solid" placeholder="Address" value="{{ $adminData->address }}" />
											<span id="addressErr" class="error"></span>
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Card body-->
								<!--begin::Actions-->
								<div class="card-footer d-flex justify-content-end py-6 px-9">
									@csrf
									<button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
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
					<!--begin::Sign-in Method-->
					<div class="card mb-5 mb-xl-10">
						<!--begin::Card header-->
						<div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_signin_method">
							<div class="card-title m-0">
								<h3 class="fw-bold m-0">Sign-in Method</h3>
							</div>
						</div>
						<!--end::Card header-->
						<!--begin::Content-->
						<div id="kt_account_settings_signin_method" class="collapse show">
							<!--begin::Card body-->
							<div class="card-body border-top p-9">
								<!--begin::Email Address-->
								<div class="d-flex flex-wrap align-items-center">
									<!--begin::Label-->
									<div id="kt_signin_email">
										<div class="fs-6 fw-bold mb-1">Email Address</div>
										<div class="fw-semibold text-gray-600">{{ $adminData->email }}</div>
									</div>
									<!--end::Label-->
									<!--begin::Edit-->
									<div id="kt_signin_email_edit" class="flex-row-fluid d-none">
										<!--begin::Form-->
										<form id="kt_signin_change_email" class="form" action="{{ url('/admin/doChangeEmail') }}">
											<div class="row mb-6">
												<div class="col-lg-6 mb-4 mb-lg-0">
													<div class="fv-row mb-0">
														<label for="emailAddress" class="form-label fs-6 fw-bold mb-3">Enter New Email Address</label>
														<input type="email" class="form-control form-control-lg form-control-solid" id="emailAddress" placeholder="Email Address" name="emailAddress" value="{{ $adminData->email }}" />
														<span id="emailAddressErr" class="error"></span>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="fv-row mb-0">
														<label for="confirmemailpassword" class="form-label fs-6 fw-bold mb-3">Confirm Password</label>
														<input type="password" class="form-control form-control-lg form-control-solid" name="confirmemailpassword" id="confirmemailpassword" />
														<span id="confirmemailpasswordErr" class="error"></span>
													</div>
												</div>
											</div>
											<div class="d-flex">
												@csrf
												<button id="kt_signin_submit" type="submit" class="btn btn-primary me-2 px-6">
													<!--begin::Indicator label-->
													<span class="indicator-label">Update Email</span>
													<!--end::Indicator label-->
													<!--begin::Indicator progress-->
													<span class="indicator-progress">Please wait... 
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													<!--end::Indicator progress-->
												</button>
												<button id="kt_signin_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
											</div>
										</form>
										<!--end::Form-->
									</div>
									<!--end::Edit-->
									<!--begin::Action-->
									<div id="kt_signin_email_button" class="ms-auto">
										<button class="btn btn-light btn-active-light-primary">Change Email</button>
									</div>
									<!--end::Action-->
								</div>
								<!--end::Email Address-->
								<!--begin::Separator-->
								<div class="separator separator-dashed my-6"></div>
								<!--end::Separator-->
								<!--begin::Password-->
								<div class="d-flex flex-wrap align-items-center mb-10">
									<!--begin::Label-->
									<div id="kt_signin_password">
										<div class="fs-6 fw-bold mb-1">Password</div>
										<div class="fw-semibold text-gray-600">************</div>
									</div>
									<!--end::Label-->
									<!--begin::Edit-->
									<div id="kt_signin_password_edit" class="flex-row-fluid d-none">
										<!--begin::Form-->
										<form id="kt_signin_change_password" class="form" action="{{ url('/admin/doChangePassword') }}">
											<div class="row mb-1">
												<div class="col-lg-4">
													<div class="fv-row mb-0">
														<label for="currentpassword" class="form-label fs-6 fw-bold mb-3">Current Password</label>
														<input type="password" class="form-control form-control-lg form-control-solid" name="currentpassword" id="currentpassword" />
														<span id="currentpasswordErr" class="error"></span>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="fv-row mb-0">
														<label for="newpassword" class="form-label fs-6 fw-bold mb-3">New Password</label>
														<input type="password" class="form-control form-control-lg form-control-solid" name="newpassword" id="newpassword" />
														<span id="newpasswordErr" class="error"></span>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="fv-row mb-0">
														<label for="confirmpassword" class="form-label fs-6 fw-bold mb-3">Confirm New Password</label>
														<input type="password" class="form-control form-control-lg form-control-solid" name="confirmpassword" id="confirmpassword" />
														<span id="confirmpasswordErr" class="error"></span>
													</div>
												</div>
											</div>
											<div class="form-text mb-5">Password must be at least 8 character and contain symbols</div>
											<div class="d-flex">
												@csrf
												<button id="kt_password_submit" type="submit" class="btn btn-primary me-2 px-6">
													<!--begin::Indicator label-->
													<span class="indicator-label">Update Password</span>
													<!--end::Indicator label-->
													<!--begin::Indicator progress-->
													<span class="indicator-progress">Please wait... 
													<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
													<!--end::Indicator progress-->
												</button>
												<button id="kt_password_cancel" type="button" class="btn btn-color-gray-400 btn-active-light-primary px-6">Cancel</button>
											</div>
										</form>
										<!--end::Form-->
									</div>
									<!--end::Edit-->
									<!--begin::Action-->
									<div id="kt_signin_password_button" class="ms-auto">
										<button class="btn btn-light btn-active-light-primary">Reset Password</button>
									</div>
									<!--end::Action-->
								</div>
								<!--end::Password-->
								<!--begin::Notice-->
								<div class="notice d-flex bg-light-primary rounded border-primary border border-dashed p-6">
									<!--begin::Icon-->
									<!--begin::Svg Icon | path: icons/duotune/general/gen048.svg-->
									<span class="svg-icon svg-icon-2tx svg-icon-primary me-4">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M20.5543 4.37824L12.1798 2.02473C12.0626 1.99176 11.9376 1.99176 11.8203 2.02473L3.44572 4.37824C3.18118 4.45258 3 4.6807 3 4.93945V13.569C3 14.6914 3.48509 15.8404 4.4417 16.984C5.17231 17.8575 6.18314 18.7345 7.446 19.5909C9.56752 21.0295 11.6566 21.912 11.7445 21.9488C11.8258 21.9829 11.9129 22 12.0001 22C12.0872 22 12.1744 21.983 12.2557 21.9488C12.3435 21.912 14.4326 21.0295 16.5541 19.5909C17.8169 18.7345 18.8277 17.8575 19.5584 16.984C20.515 15.8404 21 14.6914 21 13.569V4.93945C21 4.6807 20.8189 4.45258 20.5543 4.37824Z" fill="currentColor" />
											<path d="M10.5606 11.3042L9.57283 10.3018C9.28174 10.0065 8.80522 10.0065 8.51412 10.3018C8.22897 10.5912 8.22897 11.0559 8.51412 11.3452L10.4182 13.2773C10.8099 13.6747 11.451 13.6747 11.8427 13.2773L15.4859 9.58051C15.771 9.29117 15.771 8.82648 15.4859 8.53714C15.1948 8.24176 14.7183 8.24176 14.4272 8.53714L11.7002 11.3042C11.3869 11.6221 10.874 11.6221 10.5606 11.3042Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--end::Icon-->
									<!--begin::Wrapper-->
									<div class="d-flex flex-stack flex-grow-1 flex-wrap flex-md-nowrap">
										<!--begin::Content-->
										<div class="mb-3 mb-md-0 fw-semibold">
											<h4 class="text-gray-900 fw-bold">Secure Your Account</h4>
											<div class="fs-6 text-gray-700 pe-7">Two-factor authentication adds an extra layer of security to your account. To log in, in addition you'll need to provide a 6 digit code</div>
										</div>
										<!--end::Content-->
										<!--begin::Action-->
										<div class="form-check form-check-solid form-switch form-check-custom fv-row">
											<input data-action="{{ url('admin/doUpdateTwoFactorAuth') }}" data-token="{{ csrf_token() }}" class="form-check-input w-45px h-30px" type="checkbox" id="twoFactor" value="1" @if($adminData->enable_two_factor) checked @endif
											/>
											<label class="form-check-label" for="twoFactor"></label>
										</div>
										<!--end::Action-->
									</div>
									<!--end::Wrapper-->
								</div>
								<!--end::Notice-->
							</div>
							<!--end::Card body-->
						</div>
						<!--end::Content-->
					</div>
					<!--end::Sign-in Method-->
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