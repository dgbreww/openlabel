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
					
					<!--begin::Row-->
					<div class="row g-5 g-xl-10 mb-5 mb-xl-10">
						<!--begin::Col-->
						<div class="col-xxl-12">
							<!--begin::Row-->
							<div class="row g-5 g-xl-10">
								
								<!--begin::Col-->
								<div class="col-md-3">
									<!--begin::Card widget 11-->
									<div class="card card-flush h-xl-100" style="background-color: #F6E5CA">
										<!--begin::Header-->
										<div class="card-header flex-nowrap pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-4 text-gray-800">Media</span>
												<span class="mt-1 fw-semibold fs-7" style="color:">
													Size {{ formatSize(folderSize(public_path('media'))) }}
												</span>
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
													<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
															<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{ url('/admin/media') }}" class="menu-link px-3">Manage Media</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body text-center pt-5">
											<!--begin::Image-->
											<img src="{{ url('public/admin/') }}/media/svg/shapes/bitcoin.svg" class="h-125px mb-5" alt="" />
											<!--end::Image-->
											<!--begin::Section-->
											<div class="text-start">
												<span class="d-block fw-bold fs-1 text-gray-800">Total</span>
												<span class="mt-1 fw-semibold fs-3" style="color:">{{ App\Models\MediaModel::count() }}</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card widget 11-->
								</div>
								<!--end::Col-->
								
								<!--begin::Col-->
								<div class="col-md-3">
									<!--begin::Card widget 11-->
									<div class="card card-flush h-xl-100" style="background-color: #F3D6EF">
										<!--begin::Header-->
										<div class="card-header flex-nowrap pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-4 text-gray-800">Category</span>
												<!-- <span class="mt-1 fw-semibold fs-7" style="color:">325,035 USD for 1 ETH</span> -->
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
													<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
															<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{ url('admin/category') }}" class="menu-link px-3">Manage Category</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{ url('admin/category/add') }}" class="menu-link px-3">Add Category</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body text-center pt-5">
											<!--begin::Image-->
											<img src="{{ url('public/admin/') }}/media/svg/shapes/ethereum.svg" class="h-125px mb-5" alt="" />
											<!--end::Image-->
											<!--begin::Section-->
											<div class="text-start">
												<span class="d-block fw-bold fs-1 text-gray-800">Total</span>
												<span class="mt-1 fw-semibold fs-3" style="color:">{{ App\Models\CategoryModel::count() }}</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card widget 11-->
								</div>
								<!--end::Col-->
								
								<!--begin::Col-->
								<div class="col-md-3">
									<!--begin::Card widget 11-->
									<div class="card card-flush h-xl-100" style="background-color: #BFDDE3">
										<!--begin::Header-->
										<div class="card-header flex-nowrap pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-4 text-gray-800">Genre</span>
												<!-- <span class="mt-1 fw-semibold fs-7" style="color:">0.12,045 USD for 1 DOGE</span> -->
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
													<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
															<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{ url('admin/genre') }}" class="menu-link px-3">Manage Genre</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{ url('admin/genre/add') }}" class="menu-link px-3">Add Genre</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body text-center pt-5">
											<!--begin::Image-->
											<img src="{{ url('public/admin/') }}/media/svg/shapes/dogecoin.svg" class="h-125px mb-5" alt="" />
											<!--end::Image-->
											<!--begin::Section-->
											<div class="text-start">
												<span class="d-block fw-bold fs-1 text-gray-800">Total</span>
												<span class="mt-1 fw-semibold fs-3" style="color:">{{ App\Models\GenreModel::count() }}</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card widget 11-->
								</div>
								<!--end::Col-->

								<!--begin::Col-->
								<div class="col-md-3">
									<!--begin::Card widget 11-->
									<div class="card card-flush h-xl-100" style="background-color: #BFDDE3">
										<!--begin::Header-->
										<div class="card-header flex-nowrap pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-4 text-gray-800">Published Creations</span>
												<!-- <span class="mt-1 fw-semibold fs-7" style="color:">0.12,045 USD for 1 DOGE</span> -->
											</h3>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body text-center pt-5">
											<!--begin::Image-->
											<img src="{{ url('public/admin/') }}/media/svg/shapes/dogecoin.svg" class="h-125px mb-5" alt="" />
											<!--end::Image-->
											<!--begin::Section-->
											<div class="text-start">
												<span class="d-block fw-bold fs-1 text-gray-800">Total</span>
												<span class="mt-1 fw-semibold fs-3" style="color:">{{ App\Models\JobsModel::where('job_status', 'published')->count() }}</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card widget 11-->
								</div>
								<!--end::Col-->

								<!--begin::Col-->
								<div class="col-md-3">
									<!--begin::Card widget 11-->
									<div class="card card-flush h-xl-100" style="background-color: #BFDDE3">
										<!--begin::Header-->
										<div class="card-header flex-nowrap pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-4 text-gray-800">Completed Creations</span>
												<!-- <span class="mt-1 fw-semibold fs-7" style="color:">0.12,045 USD for 1 DOGE</span> -->
											</h3>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body text-center pt-5">
											<!--begin::Image-->
											<img src="{{ url('public/admin/') }}/media/svg/shapes/dogecoin.svg" class="h-125px mb-5" alt="" />
											<!--end::Image-->
											<!--begin::Section-->
											<div class="text-start">
												<span class="d-block fw-bold fs-1 text-gray-800">Total</span>
												<span class="mt-1 fw-semibold fs-3" style="color:">{{ App\Models\JobsModel::where('job_status', 'completed')->count() }}</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card widget 11-->
								</div>
								<!--end::Col-->

								<!--begin::Col-->
								<div class="col-md-3">
									<!--begin::Card widget 11-->
									<div class="card card-flush h-xl-100" style="background-color: #BFDDE3">
										<!--begin::Header-->
										<div class="card-header flex-nowrap pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-4 text-gray-800">Newsletter</span>
												<!-- <span class="mt-1 fw-semibold fs-7" style="color:">0.12,045 USD for 1 DOGE</span> -->
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
													<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
															<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{ url('admin/newsletter') }}" class="menu-link px-3">Manage Newsletter</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body text-center pt-5">
											<!--begin::Image-->
											<img src="{{ url('public/admin/') }}/media/svg/shapes/dogecoin.svg" class="h-125px mb-5" alt="" />
											<!--end::Image-->
											<!--begin::Section-->
											<div class="text-start">
												<span class="d-block fw-bold fs-1 text-gray-800">Total</span>
												<span class="mt-1 fw-semibold fs-3" style="color:">{{ App\Models\NewsletterModel::count() }}</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card widget 11-->
								</div>
								<!--end::Col-->

								<!--begin::Col-->
								<div class="col-md-3">
									<!--begin::Card widget 11-->
									<div class="card card-flush h-xl-100" style="background-color: #BFDDE3">
										<!--begin::Header-->
										<div class="card-header flex-nowrap pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-4 text-gray-800">Package Orders</span>
												<!-- <span class="mt-1 fw-semibold fs-7" style="color:">0.12,045 USD for 1 DOGE</span> -->
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
													<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
															<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{ url('admin/orders') }}" class="menu-link px-3">Manage Orders</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body text-center pt-5">
											<!--begin::Image-->
											<img src="{{ url('public/admin/') }}/media/svg/shapes/dogecoin.svg" class="h-125px mb-5" alt="" />
											<!--end::Image-->
											<!--begin::Section-->
											<div class="text-start">
												<span class="d-block fw-bold fs-1 text-gray-800">Total</span>
												<span class="mt-1 fw-semibold fs-3" style="color:">{{ App\Models\OrderModel::count() }}</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card widget 11-->
								</div>
								<!--end::Col-->

								<!--begin::Col-->
								<div class="col-md-3">
									<!--begin::Card widget 11-->
									<div class="card card-flush h-xl-100" style="background-color: #BFDDE3">
										<!--begin::Header-->
										<div class="card-header flex-nowrap pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-4 text-gray-800">Packages</span>
												<!-- <span class="mt-1 fw-semibold fs-7" style="color:">0.12,045 USD for 1 DOGE</span> -->
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
													<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
															<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{ url('admin/packages') }}" class="menu-link px-3">Manage Packages</a>
													</div>
													<div class="menu-item px-3">
														<a href="{{ url('admin/packages/add') }}" class="menu-link px-3">Add Package</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body text-center pt-5">
											<!--begin::Image-->
											<img src="{{ url('public/admin/') }}/media/svg/shapes/dogecoin.svg" class="h-125px mb-5" alt="" />
											<!--end::Image-->
											<!--begin::Section-->
											<div class="text-start">
												<span class="d-block fw-bold fs-1 text-gray-800">Total</span>
												<span class="mt-1 fw-semibold fs-3" style="color:">{{ App\Models\PackageModel::count() }}</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card widget 11-->
								</div>
								<!--end::Col-->

								<!--begin::Col-->
								<div class="col-md-3">
									<!--begin::Card widget 11-->
									<div class="card card-flush h-xl-100" style="background-color: #BFDDE3">
										<!--begin::Header-->
										<div class="card-header flex-nowrap pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-4 text-gray-800">Platform</span>
												<!-- <span class="mt-1 fw-semibold fs-7" style="color:">0.12,045 USD for 1 DOGE</span> -->
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
													<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
															<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{ url('admin/platform') }}" class="menu-link px-3">Manage Platform</a>
													</div>
													<div class="menu-item px-3">
														<a href="{{ url('admin/platform/add') }}" class="menu-link px-3">Add Platform</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body text-center pt-5">
											<!--begin::Image-->
											<img src="{{ url('public/admin/') }}/media/svg/shapes/dogecoin.svg" class="h-125px mb-5" alt="" />
											<!--end::Image-->
											<!--begin::Section-->
											<div class="text-start">
												<span class="d-block fw-bold fs-1 text-gray-800">Total</span>
												<span class="mt-1 fw-semibold fs-3" style="color:">{{ App\Models\PlatformModel::count() }}</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card widget 11-->
								</div>
								<!--end::Col-->

								<!--begin::Col-->
								<div class="col-md-3">
									<!--begin::Card widget 11-->
									<div class="card card-flush h-xl-100" style="background-color: #BFDDE3">
										<!--begin::Header-->
										<div class="card-header flex-nowrap pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-4 text-gray-800">Users</span>
												<!-- <span class="mt-1 fw-semibold fs-7" style="color:">0.12,045 USD for 1 DOGE</span> -->
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
													<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
															<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{ url('admin/users') }}" class="menu-link px-3">Manage Users</a>
													</div>
													<div class="menu-item px-3">
														<a href="{{ url('admin/users/add') }}" class="menu-link px-3">Add User</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body text-center pt-5">
											<!--begin::Image-->
											<img src="{{ url('public/admin/') }}/media/svg/shapes/dogecoin.svg" class="h-125px mb-5" alt="" />
											<!--end::Image-->
											<!--begin::Section-->
											<div class="text-start">
												<span class="d-block fw-bold fs-1 text-gray-800">Total</span>
												<span class="mt-1 fw-semibold fs-3" style="color:">{{ App\Models\UserModel::count() }}</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card widget 11-->
								</div>
								<!--end::Col-->

								<!--begin::Col-->
								<div class="col-md-3">
									<!--begin::Card widget 11-->
									<div class="card card-flush h-xl-100" style="background-color: #BFDDE3">
										<!--begin::Header-->
										<div class="card-header flex-nowrap pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-4 text-gray-800">Artist</span>
												<!-- <span class="mt-1 fw-semibold fs-7" style="color:">0.12,045 USD for 1 DOGE</span> -->
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
													<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
															<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{ url('admin/users') }}" class="menu-link px-3">Manage Users</a>
													</div>
													<div class="menu-item px-3">
														<a href="{{ url('admin/users/add') }}" class="menu-link px-3">Add User</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body text-center pt-5">
											<!--begin::Image-->
											<img src="{{ url('public/admin/') }}/media/svg/shapes/dogecoin.svg" class="h-125px mb-5" alt="" />
											<!--end::Image-->
											<!--begin::Section-->
											<div class="text-start">
												<span class="d-block fw-bold fs-1 text-gray-800">Total</span>
												<span class="mt-1 fw-semibold fs-3" style="color:">{{ App\Models\UserModel::where('user_type', 'artist')->count() }}</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card widget 11-->
								</div>
								<!--end::Col-->

								<!--begin::Col-->
								<div class="col-md-3">
									<!--begin::Card widget 11-->
									<div class="card card-flush h-xl-100" style="background-color: #BFDDE3">
										<!--begin::Header-->
										<div class="card-header flex-nowrap pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-4 text-gray-800">Creator</span>
												<!-- <span class="mt-1 fw-semibold fs-7" style="color:">0.12,045 USD for 1 DOGE</span> -->
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
													<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
															<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{ url('admin/users') }}" class="menu-link px-3">Manage Users</a>
													</div>
													<div class="menu-item px-3">
														<a href="{{ url('admin/users/add') }}" class="menu-link px-3">Add User</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body text-center pt-5">
											<!--begin::Image-->
											<img src="{{ url('public/admin/') }}/media/svg/shapes/dogecoin.svg" class="h-125px mb-5" alt="" />
											<!--end::Image-->
											<!--begin::Section-->
											<div class="text-start">
												<span class="d-block fw-bold fs-1 text-gray-800">Total</span>
												<span class="mt-1 fw-semibold fs-3" style="color:">{{ App\Models\UserModel::where('user_type', 'creator')->count() }}</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card widget 11-->
								</div>
								<!--end::Col-->

								<!--begin::Col-->
								<div class="col-md-3">
									<!--begin::Card widget 11-->
									<div class="card card-flush h-xl-100" style="background-color: #BFDDE3">
										<!--begin::Header-->
										<div class="card-header flex-nowrap pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-4 text-gray-800">Video Size</span>
												<!-- <span class="mt-1 fw-semibold fs-7" style="color:">0.12,045 USD for 1 DOGE</span> -->
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
													<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
															<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{ url('admin/video-size') }}" class="menu-link px-3">Manage Video Size</a>
													</div>
													<div class="menu-item px-3">
														<a href="{{ url('admin/video-size/add') }}" class="menu-link px-3">Add Video Size</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body text-center pt-5">
											<!--begin::Image-->
											<img src="{{ url('public/admin/') }}/media/svg/shapes/dogecoin.svg" class="h-125px mb-5" alt="" />
											<!--end::Image-->
											<!--begin::Section-->
											<div class="text-start">
												<span class="d-block fw-bold fs-1 text-gray-800">Total</span>
												<span class="mt-1 fw-semibold fs-3" style="color:">{{ App\Models\VideoSizeModel::count() }}</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card widget 11-->
								</div>
								<!--end::Col-->

								<!--begin::Col-->
								<div class="col-md-3">
									<!--begin::Card widget 11-->
									<div class="card card-flush h-xl-100" style="background-color: #BFDDE3">
										<!--begin::Header-->
										<div class="card-header flex-nowrap pt-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold fs-4 text-gray-800">Custom Package Enquiry</span>
												<!-- <span class="mt-1 fw-semibold fs-7" style="color:">0.12,045 USD for 1 DOGE</span> -->
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button class="btn btn-icon justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true" style="color:">
													<!--begin::Svg Icon | path: icons/duotune/general/gen023.svg-->
													<span class="svg-icon svg-icon-1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="4" fill="currentColor" />
															<rect x="11" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="15" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
															<rect x="7" y="11" width="2.6" height="2.6" rx="1.3" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</button>
												<!--begin::Menu 2-->
												<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg-light-primary fw-semibold w-200px" data-kt-menu="true">
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content fs-6 text-dark fw-bold px-3 py-4">Quick Actions</div>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mb-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="{{ url('admin/package-enquiry') }}" class="menu-link px-3">Manage Custom Package</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body text-center pt-5">
											<!--begin::Image-->
											<img src="{{ url('public/admin/') }}/media/svg/shapes/dogecoin.svg" class="h-125px mb-5" alt="" />
											<!--end::Image-->
											<!--begin::Section-->
											<div class="text-start">
												<span class="d-block fw-bold fs-1 text-gray-800">Total</span>
												<span class="mt-1 fw-semibold fs-3" style="color:">{{ App\Models\CustomPackageModel::count() }}</span>
											</div>
											<!--end::Section-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Card widget 11-->
								</div>
								<!--end::Col-->

							</div>
							<!--end::Row-->
						</div>
						<!--end::Col-->
					</div>
					<!--end::Row-->

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

