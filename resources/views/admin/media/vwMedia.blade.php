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
					<!--begin::Card-->
					<div class="card card-flush pb-0 bgi-position-y-center bgi-no-repeat mb-10" style="background-size: auto calc(100% + 10rem); background-position-x: 100%; background-image: url('{{ asset('public/admin/') }}/media/illustrations/dozzy-1/4.png')">
						<!--begin::Card header-->
						<div class="card-header pt-10">
							<div class="d-flex align-items-center">
								<!--begin::Icon-->
								<div class="symbol symbol-circle me-5">
									<div class="symbol-label bg-transparent text-primary border border-secondary border-dashed">
										<!--begin::Svg Icon | path: icons/duotune/abstract/abs020.svg-->
										<span class="svg-icon svg-icon-2x svg-icon-primary">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M17.302 11.35L12.002 20.55H21.202C21.802 20.55 22.202 19.85 21.902 19.35L17.302 11.35Z" fill="currentColor" />
												<path opacity="0.3" d="M12.002 20.55H2.802C2.202 20.55 1.80202 19.85 2.10202 19.35L6.70203 11.45L12.002 20.55ZM11.302 3.45L6.70203 11.35H17.302L12.702 3.45C12.402 2.85 11.602 2.85 11.302 3.45Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
								</div>
								<!--end::Icon-->
								<!--begin::Title-->
								<div class="d-flex flex-column">
									<h2 class="mb-1">File Manager</h2>
									<div class="text-muted fw-bold">
										<a href="javascript:void(0)">Stats</a>
										<span class="mx-3">|</span>{{ formatSize(folderSize(public_path('media'))) }} 
										<span class="mx-3">|</span>{{ $totalMedia }} items
									</div>
								</div>
								<!--end::Title-->
							</div>
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body pb-0"></div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
					
					<!--begin::Card-->
					<div class="card card-flush">
						<!--begin::Card header-->
						<div class="card-header pt-8">
							<div class="card-title">
								<!--begin::Search-->
								<div class="d-flex align-items-center position-relative my-1">
									<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
									<span class="svg-icon svg-icon-1 position-absolute ms-6">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
											<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<input type="text" data-kt-filemanager-table-filter="search" class="form-control form-control-solid w-250px ps-15" placeholder="Search Media" />
								</div>
								<!--end::Search-->
							</div>
							<!--begin::Card toolbar-->
							<div class="card-toolbar">
								<!--begin::Toolbar-->
								<div class="d-flex justify-content-end" data-kt-filemanager-table-toolbar="base">
									<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_upload">
									<!--begin::Svg Icon | path: icons/duotune/files/fil018.svg-->
									<span class="svg-icon svg-icon-2">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="currentColor" />
											<path d="M10.4 3.60001L12 6H21C21.6 6 22 6.4 22 7V19C22 19.6 21.6 20 21 20H3C2.4 20 2 19.6 2 19V4C2 3.4 2.4 3 3 3H9.20001C9.70001 3 10.2 3.20001 10.4 3.60001ZM16 11.6L12.7 8.29999C12.3 7.89999 11.7 7.89999 11.3 8.29999L8 11.6H11V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V11.6H16Z" fill="currentColor" />
											<path opacity="0.3" d="M11 11.6V17C11 17.6 11.4 18 12 18C12.6 18 13 17.6 13 17V11.6H11Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->Upload Files</button>
									<!--end::Add customer-->
								</div>
								<!--end::Toolbar-->
								<!--begin::Group actions-->
								<div class="d-flex justify-content-end align-items-center d-none" data-kt-filemanager-table-toolbar="selected">
									<div class="fw-bold me-5">
									<span class="me-2" data-kt-filemanager-table-select="selected_count"></span>Selected</div>
									<button type="button" class="btn btn-danger" data-kt-filemanager-table-select="delete_selected">Delete Selected</button>
								</div>
								<!--end::Group actions-->
							</div>
							<!--end::Card toolbar-->
						</div>
						<!--end::Card header-->
						<!--begin::Card body-->
						<div class="card-body">
							<!--begin::Table header-->
							<div class="d-flex flex-stack">
								<!--begin::Folder path-->
								<div class="badge badge-lg badge-light-primary">
								</div>
								<!--end::Folder path-->
								<!--begin::Folder Stats-->
								<div class="badge badge-lg badge-primary">
									<span id="kt_file_manager_items_counter">0 items</span>
								</div>
								<!--end::Folder Stats-->
							</div>
							<!--end::Table header-->
							<!--begin::Table-->
							<table id="kt_file_manager_list" data-kt-filemanager-table="folders" class="table align-middle table-row-dashed fs-6 gy-5">
								<!--begin::Table head-->
								<thead>
									<!--begin::Table row-->
									<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
										<th class="w-10px pe-2">
											<div class="form-check form-check-sm form-check-custom form-check-solid me-3">
												<input class="form-check-input" type="checkbox" data-kt-check="true" data-kt-check-target="#kt_file_manager_list .form-check-input" value="1" />
											</div>
										</th>
										<th class="min-w-250px">Media</th>
										<th class="min-w-125px">Alt</th>
										<th class="min-w-10px">Size</th>
										<th class="w-125px"></th>
									</tr>
									<!--end::Table row-->
								</thead>
								<!--end::Table head-->
								<!--begin::Table body-->
								<tbody class="fw-semibold text-gray-600">
								</tbody>
								<!--end::Table body-->
							</table>
							<!--end::Table-->
						</div>
						<!--end::Card body-->
					</div>
					<!--end::Card-->
					<!--begin::Upload template-->
					<table class="d-none">
						<tr id="kt_file_manager_new_folder_row" data-kt-filemanager-template="upload">
							<td></td>
							<td id="kt_file_manager_add_folder_form" class="fv-row">
								<div class="d-flex align-items-center">
									<!--begin::Folder icon-->
									<!--begin::Svg Icon | path: icons/duotune/files/fil012.svg-->
									<span class="svg-icon svg-icon-2x svg-icon-primary me-4">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M10 4H21C21.6 4 22 4.4 22 5V7H10V4Z" fill="currentColor" />
											<path d="M9.2 3H3C2.4 3 2 3.4 2 4V19C2 19.6 2.4 20 3 20H21C21.6 20 22 19.6 22 19V7C22 6.4 21.6 6 21 6H12L10.4 3.60001C10.2 3.20001 9.7 3 9.2 3Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
									<!--end::Folder icon-->
									<!--begin:Input-->
									<input type="text" name="new_folder_name" placeholder="Enter the folder name" class="form-control mw-250px me-3" />
									<!--end:Input-->
									<!--begin:Submit button-->
									<button class="btn btn-icon btn-light-primary me-3" id="kt_file_manager_add_folder">
										<span class="indicator-label">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr085.svg-->
											<span class="svg-icon svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M9.89557 13.4982L7.79487 11.2651C7.26967 10.7068 6.38251 10.7068 5.85731 11.2651C5.37559 11.7772 5.37559 12.5757 5.85731 13.0878L9.74989 17.2257C10.1448 17.6455 10.8118 17.6455 11.2066 17.2257L18.1427 9.85252C18.6244 9.34044 18.6244 8.54191 18.1427 8.02984C17.6175 7.47154 16.7303 7.47154 16.2051 8.02984L11.061 13.4982C10.7451 13.834 10.2115 13.834 9.89557 13.4982Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="indicator-progress">
											<span class="spinner-border spinner-border-sm align-middle"></span>
										</span>
									</button>
									<!--end:Submit button-->
									<!--begin:Cancel button-->
									<button class="btn btn-icon btn-light-danger" id="kt_file_manager_cancel_folder">
										<span class="indicator-label">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr088.svg-->
											<span class="svg-icon svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="7.05025" y="15.5356" width="12" height="2" rx="1" transform="rotate(-45 7.05025 15.5356)" fill="currentColor" />
													<rect x="8.46447" y="7.05029" width="12" height="2" rx="1" transform="rotate(45 8.46447 7.05029)" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="indicator-progress">
											<span class="spinner-border spinner-border-sm align-middle"></span>
										</span>
									</button>
									<!--end:Cancel button-->
								</div>
							</td>
							<td></td>
							<td></td>
							<td></td>
						</tr>
					</table>
					<!--end::Upload template-->

					<!--begin::Checkbox template-->
					<div class="d-none" data-kt-filemanager-template="checkbox">
						<div class="form-check form-check-sm form-check-custom form-check-solid">
							<input class="form-check-input" type="checkbox" value="1" />
						</div>
					</div>
					<!--end::Checkbox template-->
					<!--begin::Modals-->
					
					<!--begin::Modal - Upload File-->
					<div class="modal fade" id="kt_modal_upload" tabindex="-1" aria-hidden="true">
						<!--begin::Modal dialog-->
						<div class="modal-dialog modal-dialog-centered mw-650px">
							<!--begin::Modal content-->
							<div class="modal-content">
								<!--begin::Form-->
								<form class="form" action="https://preview.keenthemes.com/metronic8/demo15/apps/file-manager/none" id="kt_modal_upload_form">
									<!--begin::Modal header-->
									<div class="modal-header">
										<!--begin::Modal title-->
										<h2 class="fw-bold">Upload files</h2>
										<!--end::Modal title-->
										<!--begin::Close-->
										<div class="btn btn-icon btn-sm btn-active-icon-primary" data-bs-dismiss="modal">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
											<span class="svg-icon svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
													<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
										<!--end::Close-->
									</div>
									<!--end::Modal header-->
									<!--begin::Modal body-->
									<div class="modal-body pt-10 pb-15 px-lg-17">
										<!--begin::Input group-->
										<div class="form-group">
											<!--begin::Dropzone-->
											<div class="dropzone dropzone-queue mb-2" id="kt_modal_upload_dropzone">
												<!--begin::Controls-->
												<div class="dropzone-panel mb-4">
													<a class="dropzone-select btn btn-sm btn-primary me-2">Attach files</a>
													<a class="dropzone-upload btn btn-sm btn-light-primary me-2">Upload All</a>
													<a class="dropzone-remove-all btn btn-sm btn-light-primary">Remove All</a>
												</div>
												<!--end::Controls-->
												<!--begin::Items-->
												<div class="dropzone-items wm-200px">
													<div class="dropzone-item p-5" style="display:none">
														<!--begin::File-->
														<div class="dropzone-file">
															<div class="dropzone-filename text-dark" title="some_image_file_name.jpg">
																<span data-dz-name="">some_image_file_name.jpg</span>
																<strong>(
																<span data-dz-size="">340kb</span>)</strong>
															</div>
															<div class="dropzone-error mt-0" data-dz-errormessage=""></div>
														</div>
														<!--end::File-->
														<!--begin::Progress-->
														<div class="dropzone-progress">
															<div class="progress bg-light-primary">
																<div class="progress-bar bg-primary" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0" data-dz-uploadprogress=""></div>
															</div>
														</div>
														<!--end::Progress-->
														<!--begin::Toolbar-->
														<div class="dropzone-toolbar">
															<span class="dropzone-start">
																<i class="bi bi-play-fill fs-3"></i>
															</span>
															<span class="dropzone-cancel" data-dz-remove="" style="display: none;">
																<i class="bi bi-x fs-3"></i>
															</span>
															<span class="dropzone-delete" data-dz-remove="">
																<i class="bi bi-x fs-1"></i>
															</span>
														</div>
														<!--end::Toolbar-->
													</div>
												</div>
												<!--end::Items-->
											</div>
											<!--end::Dropzone-->
											<!--begin::Hint-->
											<span class="form-text fs-6 text-muted">Max file size is 1MB per file.</span>
											<!--end::Hint-->
										</div>
										<!--end::Input group-->
									</div>
									<!--end::Modal body-->
								</form>
								<!--end::Form-->
							</div>
						</div>
					</div>
					<!--end::Modal - Upload File-->
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