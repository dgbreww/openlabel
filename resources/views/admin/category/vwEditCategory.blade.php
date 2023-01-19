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
								<h3 class="fw-bold m-0">Edit Category</h3>
							</div>
							<!--end::Card title-->

							<div class="card-toolbar">
								<!--begin::Toolbar-->
								<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
									<!--begin::Add customer-->
									<a href="{{ url('/admin/category'); }}" class="btn btn-primary">Back</a>
									<!--end::Add customer-->
								</div>
								<!--end::Toolbar-->
							</div>

						</div>
						<!--begin::Card header-->
						<!--begin::Content-->
						<div id="kt_account_settings_profile_details" class="collapse show">
							<!--begin::Form-->
							<form action="{{ url('admin/category/doUpdate') }}" id="kt_update_category_form" class="form" enctype="multipart/form-data" method="post">
								<!--begin::Card body-->
								<div class="card-body border-top p-9">
									<!--begin::Input group-->
									<div class="row mb-6">
										<!--begin::Label-->
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Image</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<!--begin::Image input-->
											<div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url('{{ asset('public/admin/') }}/media/svg/avatars/blank.svg')">
												<!--begin::Preview existing avatar-->
												<div id="preview_image" class="image-input-wrapper w-125px h-125px" style="background-image: url({{ $defaultImg  }})"></div>
												<!--end::Preview existing avatar-->
												
												<!--begin::Label-->
												<label class="image-picker btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-input-name="image" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="Change avatar">
													<i class="bi bi-pencil-fill fs-7"></i>
													<!--begin::Inputs-->
													<!-- <input type="file" name="avatar" accept=".png, .jpg, .jpeg" />
													<input type="hidden" name="avatar_remove" /> -->
													<input id="input_image" type="hidden" name="image" value="{{ $categoryData->category_img }}">
													<!--end::Inputs-->
												</label>
												<!--end::Label-->

												<!--begin::Cancel-->
												<span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="Cancel avatar">
													<i class="bi bi-x fs-2"></i>
												</span>
												<!--end::Cancel-->
												<!--begin::Remove-->
												<span id="remove_image" class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-input-name="image" data-kt-image-input-action="remove" data-input-name="image" data-bs-toggle="tooltip" title="Remove avatar">
													<i class="bi bi-x fs-2"></i>
												</span>
												<!--end::Remove-->
											</div>
											<!--end::Image input-->
											<!--begin::Hint-->
											<div class="form-text">Allowed file types: png, jpg, jpeg.</div>
											<span id="imageErr" class="error"></span>
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
													<input type="text" name="name" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Name" value="{{ $categoryData->category_name }}" />
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
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Display Order</label>
										<!--end::Label-->
										<!--begin::Col-->
										<div class="col-lg-8">
											<!--begin::Row-->
											<div class="row">
												<!--begin::Col-->
												<div class="col-lg-12 fv-row">
													<input min="1" type="number" name="displayOrder" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Display Order" value="{{ $categoryData->display_order }}" />
													<span id="displayOrderErr" class="error"></span>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Row-->
										</div>
										<!--end::Col-->
									</div>
									<!--end::Input group-->
								</div>
								<!--end::Card body-->
								<!--begin::Actions-->
								<div class="card-footer d-flex justify-content-end py-6 px-9">
									<input type="hidden" name="id" value="{{ $categoryData->id }}">
									@csrf
									<button type="submit" class="btn btn-primary" id="kt_update_category_form_submit">
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