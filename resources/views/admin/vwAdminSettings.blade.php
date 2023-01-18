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
							<!-- <div class="card-title m-0">
								<h3 class="fw-bold m-0">Profile Details</h3>
							</div> -->
							<!--end::Card title-->

							<ul class="nav nav-custom nav-tabs nav-line-tabs nav-line-tabs-2x border-0 fs-4 fw-semibold mb-8">
								<li class="nav-item">
									<a class="nav-link text-active-primary pb-4 active" data-bs-toggle="tab" href="#kt_site_settings">Site Settings</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-active-primary pb-4" data-bs-toggle="tab" href="#kt_custom_css_js">Custom CSS/JS</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_social_links">Social Links</a>
								</li>
								<li class="nav-item">
									<a class="nav-link text-active-primary pb-4" data-kt-countup-tabs="true" data-bs-toggle="tab" href="#kt_mail_config">Mail</a>
								</li>
							</ul>

						</div>
						<!--begin::Card header-->
						<!--begin::Content-->
						<div id="kt_account_settings_profile_details" class="collapse show">
							<div class="tab-content" id="myTabContent">
								<!--begin:::Tab pane-->
								<div class="tab-pane fade show active" id="kt_site_settings" role="tabpanel">
									
									<form action="{{ url('admin/settings/doUpdateSiteSettings') }}" id="kt_site_settings_form" class="form" enctype="multipart/form-data" method="post">
										<!--begin::Card body-->
										<div class="card-body border-top p-9">
											<!--begin::Input group-->
											
											<!-- Admin Logo -->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Admin Logo</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Image input-->
													<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset('public/admin/') }}/media/svg/avatars/blank.svg')">

														<!--begin::Preview existing avatar-->
														<div id="preview_adminLogo" class="image-input-wrapper w-125px h-125px" style="background-image: url({{ $adminLogoUrl  }})"></div>
														<!--end::Preview existing avatar-->
														
														<label class="image-picker btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-input-name="adminLogo" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Admin Logo">
															<i class="bi bi-pencil-fill fs-7"></i>
															<input id="input_adminLogo" type="hidden" name="adminLogo" value="{{ $siteSettings->admin_logo }}">
														</label>

														<!--begin::Cancel-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Admin Logo">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Cancel-->

														<!--begin::Remove-->
														<span id="remove_adminLogo" class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-input-name="adminLogo" data-kt-image-input-action="remove" data-input-name="adminLogo" data-bs-toggle="tooltip" title="Remove Admin Logo">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Remove-->
													</div>
													<!--end::Image input-->

													<!--begin::Hint-->
													<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
													<!--end::Hint-->

													<span id="adminLogoErr" class="error"></span>
												</div>
												<!--end::Col-->
											</div>
											<!-- Admin Logo End -->

											<!-- Website Logo -->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Website Logo</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Image input-->
													<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset('public/admin/') }}/media/svg/avatars/blank.svg')">

														<!--begin::Preview existing avatar-->
														<div id="preview_websiteLogo" class="image-input-wrapper w-125px h-125px" style="background-image: url({{ $websiteLogoUrl  }})"></div>
														<!--end::Preview existing avatar-->
														
														<label class="image-picker btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-input-name="websiteLogo" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Website Logo">
															<i class="bi bi-pencil-fill fs-7"></i>
															<input id="input_websiteLogo" type="hidden" name="websiteLogo" value="{{ $siteSettings->website_logo }}">
														</label>

														<!--begin::Cancel-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Admin Logo">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Cancel-->

														<!--begin::Remove-->
														<span id="remove_websiteLogo" class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-input-name="websiteLogo" data-kt-image-input-action="remove" data-input-name="websiteLogo" data-bs-toggle="tooltip" title="Remove Website Logo">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Remove-->
													</div>
													<!--end::Image input-->

													<!--begin::Hint-->
													<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
													<!--end::Hint-->

													<span id="websiteLogoErr" class="error"></span>
												</div>
												<!--end::Col-->
											</div>
											<!-- Website Logo End -->

											<!-- Website Logo -->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Admin Login Background</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Image input-->
													<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset('public/admin/') }}/media/svg/avatars/blank.svg')">

														<!--begin::Preview existing avatar-->
														<div id="preview_adminLoginBackground" class="image-input-wrapper w-125px h-125px" style="background-image: url({{ $loginBgImgUrl  }})"></div>
														<!--end::Preview existing avatar-->
														
														<label class="image-picker btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-input-name="adminLoginBackground" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Admin Login Background">
															<i class="bi bi-pencil-fill fs-7"></i>
															<input id="input_adminLoginBackground" type="hidden" name="adminLoginBackground" value="{{ $siteSettings->login_background_img }}">
														</label>

														<!--begin::Cancel-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Admin Logo">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Cancel-->

														<!--begin::Remove-->
														<span id="remove_adminLoginBackground" class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-input-name="adminLoginBackground" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="Remove Admin Login Background">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Remove-->
													</div>
													<!--end::Image input-->

													<!--begin::Hint-->
													<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
													<!--end::Hint-->

													<span id="adminLoginBackgroundErr" class="error"></span>
												</div>
												<!--end::Col-->
											</div>
											<!-- Website Logo End -->

											<!-- Favicon -->
											<div class="row mb-6">
												<!--begin::Label-->
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Favicon</label>
												<!--end::Label-->
												<!--begin::Col-->
												<div class="col-lg-8">
													<!--begin::Image input-->
													<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset('public/admin/') }}/media/svg/avatars/blank.svg')">

														<!--begin::Preview existing avatar-->
														<div id="preview_favicon" class="image-input-wrapper w-125px h-125px" style="background-image: url({{ $faviconUrl  }})"></div>
														<!--end::Preview existing avatar-->
														
														<label class="image-picker btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-input-name="favicon" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change Favicon">
															<i class="bi bi-pencil-fill fs-7"></i>
															<input id="input_favicon" type="hidden" name="favicon" value="{{ $siteSettings->favicon }}">
														</label>

														<!--begin::Cancel-->
														<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel Favicon">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Cancel-->

														<!--begin::Remove-->
														<span id="remove_favicon" class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-input-name="favicon" data-kt-image-input-action="remove" data-input-name="favicon" data-bs-toggle="tooltip" title="Remove Favicon">
															<i class="bi bi-x fs-2"></i>
														</span>
														<!--end::Remove-->
													</div>
													<!--end::Image input-->

													<!--begin::Hint-->
													<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
													<!--end::Hint-->

													<span id="faviconErr" class="error"></span>
												</div>
												<!--end::Col-->
											</div>
											<!-- Favicon End -->

											<div class="row mb-6">
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Website Name</label>
												<div class="col-lg-8">													
													<div class="row">
														<div class="col-lg-12 fv-row">
															<input type="text" name="websiteName" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Website Name" value="{{ $siteSettings->website_name }}" />
															<span id="websiteNameErr" class="error"></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row mb-6">
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Website Email</label>
												<div class="col-lg-8">													
													<div class="row">
														<div class="col-lg-12 fv-row">
															<input type="text" name="websiteEmail" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Website Email" value="{{ $siteSettings->website_email }}" />
															<span id="websiteEmailErr" class="error"></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row mb-6">
												<label class="col-lg-4 col-form-label fw-semibold fs-6">
													<span>Website Phone Number</span>
													<i class="fas fa-exclamation-circle ms-1 fs-7" data-bs-toggle="tooltip" title="Phone number must be active"></i>
												</label>
												<div class="col-lg-8 fv-row">
													<input type="tel" name="websitePhoneNumber" class="form-control form-control-lg form-control-solid" placeholder="Website Phone Number" value="{{ $siteSettings->website_phone }}" />
													<span id="websitePhoneNumberErr" class="error"></span>
												</div>
											</div>
											<div class="row mb-6">
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Website Address</label>
												<div class="col-lg-8 fv-row">
													<input type="text" name="websiteAddress" class="form-control form-control-lg form-control-solid" placeholder="Website Address" value="{{ $siteSettings->website_address }}" />
													<span id="websiteAddressErr" class="error"></span>
												</div>
											</div>
											<div class="row mb-6">
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Copyright</label>
												<div class="col-lg-8">													
													<div class="row">
														<div class="col-lg-12 fv-row">
															<input type="text" name="copyright" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Copyright" value="{{ $siteSettings->copyright }}" />
															<span id="copyrightErr" class="error"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											@csrf
											<button type="submit" class="btn btn-primary" id="kt_site_settings_form_submit">
												<span class="indicator-label">Save Changes</span>
												<span class="indicator-progress">Please wait... 
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
									</form>

								</div>
								<!--end:::Tab pane-->

								<!--begin:::Tab pane-->
								<div class="tab-pane fade" id="kt_custom_css_js" role="tabpanel">
									
									<form action="{{ url('admin/settings/doUpdateCustomCssJs') }}" id="kt_custom_css_js_form" class="form" enctype="multipart/form-data" method="post">
										<!--begin::Card body-->
										<div class="card-body border-top p-9">
											<!--begin::Input group-->

											<div class="row mb-6">
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Header Scripts</label>
												<div class="col-lg-8">													
													<div class="row">
														<div class="col-lg-12 fv-row">
															<textarea rows="15" name="headerScripts" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Header Scripts">{{ $siteSettings->header_scrips }}</textarea>
															<span id="headerScriptsErr" class="error"></span>
														</div>
													</div>
												</div>
											</div>
											<div class="row mb-6">
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Footer Scripts</label>
												<div class="col-lg-8">													
													<div class="row">
														<div class="col-lg-12 fv-row">
															<textarea rows="15" name="footerScripts" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Footer Scripts">{{ $siteSettings->footer_scripts }}</textarea>
															<span id="footerScriptsErr" class="error"></span>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											@csrf
											<button type="submit" class="btn btn-primary" id="kt_custom_css_js_form_submit">
												<span class="indicator-label">Save Changes</span>
												<span class="indicator-progress">Please wait... 
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
									</form>

								</div>
								<!--end:::Tab pane-->

								<!--begin:::Tab pane-->
								<div class="tab-pane fade" id="kt_social_links" role="tabpanel">
									<form action="{{ url('admin/settings/doUpdateSocialLinks') }}" id="kt_social_links_form" class="form" enctype="multipart/form-data" method="post">
										<!--begin::Card body-->
										<div class="card-body border-top p-9">
											<!--begin::Input group-->

											<div class="row mb-6">
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Facebook</label>
												<div class="col-lg-8">													
													<div class="row">
														<div class="col-lg-12 fv-row">
															<input rows="15" name="facebook" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{ $siteSettings->facebook_url }}" placeholder="Facebook">
															<span id="facebookErr" class="error"></span>
														</div>
													</div>
												</div>
											</div>

											<div class="row mb-6">
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Twitter</label>
												<div class="col-lg-8">													
													<div class="row">
														<div class="col-lg-12 fv-row">
															<input rows="15" name="twitter" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{ $siteSettings->twitter_url }}" placeholder="Twitter">
															<span id="twitterErr" class="error"></span>
														</div>
													</div>
												</div>
											</div>

											<div class="row mb-6">
												<label class="col-lg-4 col-form-label fw-semibold fs-6">Instagram</label>
												<div class="col-lg-8">													
													<div class="row">
														<div class="col-lg-12 fv-row">
															<input rows="15" name="instagram" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{ $siteSettings->instagram_url }}" placeholder="Instagram">
															<span id="instagramErr" class="error"></span>
														</div>
													</div>
												</div>
											</div>

											<div class="row mb-6">
												<label class="col-lg-4 col-form-label fw-semibold fs-6">YouTube</label>
												<div class="col-lg-8">													
													<div class="row">
														<div class="col-lg-12 fv-row">
															<input rows="15" name="youtube" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{ $siteSettings->youtube_url }}" placeholder="Youtube">
															<span id="youtubeErr" class="error"></span>
														</div>
													</div>
												</div>
											</div>

											<div class="row mb-6">
												<label class="col-lg-4 col-form-label fw-semibold fs-6">LinkedIn</label>
												<div class="col-lg-8">													
													<div class="row">
														<div class="col-lg-12 fv-row">
															<input rows="15" name="linkedin" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{ $siteSettings->linkedin_url }}" placeholder="LinkedIn">
															<span id="linkedinErr" class="error"></span>
														</div>
													</div>
												</div>
											</div>

										</div>
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											@csrf
											<button type="submit" class="btn btn-primary" id="kt_social_links_form_submit">
												<span class="indicator-label">Save Changes</span>
												<span class="indicator-progress">Please wait... 
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
									</form>
								</div>
								<!--end:::Tab pane-->

								<!--begin:::Tab pane-->
								<div class="tab-pane fade" id="kt_mail_config" role="tabpanel">
									<form action="{{ url('admin/settings/doUpdateMailConfig') }}" id="kt_mail_config_form" class="form" enctype="multipart/form-data" method="post">
										<!--begin::Card body-->
										<div class="card-body border-top p-9">
											<!--begin::Input group-->

											<div class="row mb-6">
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">From Address</label>
												<div class="col-lg-8">													
													<div class="row">
														<div class="col-lg-12 fv-row">
															<input type="email" rows="15" name="fromAddress" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{ $siteSettings->mail_from_address }}" placeholder="From Address">
															<span id="fromAddressErr" class="error"></span>
														</div>
													</div>
												</div>
											</div>

											<div class="row mb-6">
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">From Name</label>
												<div class="col-lg-8">													
													<div class="row">
														<div class="col-lg-12 fv-row">
															<input rows="15" name="fromName" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{ $siteSettings->mail_from_name }}" placeholder="From Name">
															<span id="fromNameErr" class="error"></span>
														</div>
													</div>
												</div>
											</div>

											<div class="row mb-6">
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Host</label>
												<div class="col-lg-8">													
													<div class="row">
														<div class="col-lg-12 fv-row">
															<input rows="15" name="host" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{ $siteSettings->mail_host }}" placeholder="Host">
															<span id="hostErr" class="error"></span>
														</div>
													</div>
												</div>
											</div>

											<div class="row mb-6">
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Port</label>
												<div class="col-lg-8">													
													<div class="row">
														<div class="col-lg-12 fv-row">
															<input type="number" name="port" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{ $siteSettings->mail_port }}" placeholder="Port">
															<span id="portErr" class="error"></span>
														</div>
													</div>
												</div>
											</div>

											<div class="row mb-6">
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Username</label>
												<div class="col-lg-8">													
													<div class="row">
														<div class="col-lg-12 fv-row">
															<input name="username" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{ $siteSettings->mail_username }}" placeholder="Username">
															<span id="usernameErr" class="error"></span>
														</div>
													</div>
												</div>
											</div>

											<div class="row mb-6">
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Password</label>
												<div class="col-lg-8">													
													<div class="row">
														<div class="col-lg-12 fv-row">
															<input name="password" type="password" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" value="{{ $siteSettings->mail_password }}" placeholder="Password">
															<span id="passwordErr" class="error"></span>
														</div>
													</div>
												</div>
											</div>

											<div class="row mb-6">
												<label class="col-lg-4 col-form-label required fw-semibold fs-6">Encryption (SSL/TLS)</label>
												<div class="col-lg-8">													
													<div class="row">
														<div class="col-lg-12 fv-row">
															<select name="encryption" class="form-select form-select-solid" data-control="select2" data-hide-search="true" data-placeholder="Select a Team Member" name="target_assign">
																<option {{ $siteSettings->mail_encryption == 'ssl'? 'selected':'' }} value="ssl">SSL</option>
																<option {{ $siteSettings->mail_encryption == 'tls'? 'selected':'' }} value="tls">TLS</option>
															</select>
															<span id="encryptionErr" class="error"></span>
														</div>
													</div>
												</div>
											</div>

										</div>
										<div class="card-footer d-flex justify-content-end py-6 px-9">
											@csrf
											<button type="submit" class="btn btn-primary" id="kt_mail_config_form_submit">
												<span class="indicator-label">Save Changes</span>
												<span class="indicator-progress">Please wait... 
												<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
											</button>
										</div>
									</form>
								</div>
								<!--end:::Tab pane-->
							</div>
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