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
								<h3 class="fw-bold m-0">Add Genre</h3>
							</div>
							<!--end::Card title-->

							<div class="card-toolbar">
								<!--begin::Toolbar-->
								<div class="d-flex justify-content-end" data-kt-customer-table-toolbar="base">
									<!--begin::Add customer-->
									<a href="{{ url('/admin/genre'); }}" class="btn btn-primary">Back</a>
									<!--end::Add customer-->
								</div>
								<!--end::Toolbar-->
							</div>

						</div>
						<!--begin::Card header-->
						<!--begin::Content-->
						<div id="kt_account_settings_profile_details" class="collapse show">
							<!--begin::Form-->
							<form action="{{ url('admin/genre/doUpdate') }}" id="kt_update_genre_form" class="form" enctype="multipart/form-data" method="post">
								<!--begin::Card body-->
								<div class="card-body border-top p-9">
									
									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Genre Name</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input type="text" name="genreName" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Genre Name" value="{{ $genreData->genre_name }}" />
													<span id="genreNameErr" class="error"></span>
												</div>
											</div>
										</div>										
									</div>
									
									<div class="row mb-6">
										<label class="col-lg-4 col-form-label required fw-semibold fs-6">Display Order</label>
										<div class="col-lg-8">
											<div class="row">
												<div class="col-lg-12 fv-row">
													<input min="1" type="number" name="displayOrder" class="form-control form-control-lg form-control-solid mb-3 mb-lg-0" placeholder="Display Order" value="{{ $genreData->display_order }}" />
													<span id="displayOrderErr" class="error"></span>
												</div>
											</div>
										</div>
									</div>

									
								</div>
								<!--end::Card body-->
								<!--begin::Actions-->
								<div class="card-footer d-flex justify-content-end py-6 px-9">
									<input type="hidden" name="id" value="{{ $genreData->id }}">
									@csrf
									<button type="submit" class="btn btn-primary" id="kt_update_genre_form_submit">
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