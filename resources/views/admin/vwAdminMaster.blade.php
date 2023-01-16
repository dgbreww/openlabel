<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>{{ $title }}</title>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="{{ asset('public/admin/') }}/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Vendor Stylesheets(used for this page only)-->
		<link href="{{ asset('public/admin/') }}/plugins/custom/datatables/datatables.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('public/admin/') }}/plugins/custom/vis-timeline/vis-timeline.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Vendor Stylesheets-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset('public/admin/') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('public/admin/') }}/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('public/admin/') }}/css/master.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{ asset('public/admin/') }}/css/toastr.min.css">
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<div id="kt_aside" class="aside pt-7 pb-4 pb-lg-7 pt-lg-17" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
					<!--begin::Brand-->
					<div class="aside-logo flex-column-auto px-9 mb-9 mb-lg-17 mx-auto" id="kt_aside_logo">
						<!--begin::Logo-->
						<a href="../index.html">
							<img alt="Logo" src="{{ asset('public/admin/') }}/media/logos/default.svg" class="h-30px logo theme-light-show" />
							<img alt="Logo" src="{{ asset('public/admin/') }}/media/logos/default-dark.svg" class="h-30px logo theme-dark-show" />
						</a>
						<!--end::Logo-->
					</div>
					<!--end::Brand-->
					<!--begin::Aside user-->
					<div class="aside-user mb-5 mb-lg-10" id="kt_aside_user">
						<!--begin::User-->
						<div class="d-flex align-items-center flex-column">
							<!--begin::Symbol-->
							<div class="symbol symbol-75px mb-4">
								<img src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-1.jpg" alt="" />
							</div>
							<!--end::Symbol-->
							<!--begin::Info-->
							<div class="text-center">
								<!--begin::Username-->
								<a href="../pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-4 fw-bolder">Paul Melone</a>
								<!--end::Username-->
								<!--begin::Description-->
								<span class="text-gray-600 fw-semibold d-block fs-7 mb-1">Python Dev</span>
								<!--end::Description-->
							</div>
							<!--end::Info-->
						</div>
						<!--end::User-->
					</div>
					<!--end::Aside user-->
					<!--begin::Aside menu-->
					<div class="aside-menu flex-column-fluid ps-3 ps-lg-5 pe-1 mb-9" id="kt_aside_menu">
						<!--begin::Aside Menu-->
						<div class="w-100 hover-scroll-overlay-y pe-2 me-2" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_user, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper" data-kt-scroll-offset="0">
							<!--begin::Menu-->
							<div class="menu menu-column menu-rounded menu-sub-indention menu-active-bg fw-semibold" id="#kt_aside_menu" data-kt-menu="true">
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Dashboards</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../index.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Default</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link active" href="ecommerce.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">eCommerce</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="projects.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Projects</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="online-courses.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Online Courses</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="marketing.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Marketing</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_dashboards_collapse">
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="bidding.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Bidding</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="pos.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">POS System</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="call-center.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Call Center</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="logistics.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Logistics</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="website-analytics.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Website Analytics</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="finance-performance.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Finance Performance</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="store-analytics.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Store Analytics</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="social.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Social</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="delivery.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Delivery</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="crypto.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Crypto</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="school.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">School</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="podcast.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Podcast</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
											<!--begin:Menu item-->
											<div class="menu-item">
												<!--begin:Menu link-->
												<a class="menu-link" href="../landing.html">
													<span class="menu-bullet">
														<span class="bullet bullet-dot"></span>
													</span>
													<span class="menu-title">Landing</span>
												</a>
												<!--end:Menu link-->
											</div>
											<!--end:Menu item-->
										</div>
										<div class="menu-item">
											<div class="menu-content">
												<a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed" data-bs-toggle="collapse" href="ecommerce.html#kt_app_sidebar_menu_dashboards_collapse" data-kt-toggle-text="Show Less">
													<span data-kt-toggle-text-target="true">Show 12 More</span>
													<!--begin::Svg Icon | path: icons/duotune/general/gen036.svg-->
													<span class="svg-icon toggle-on svg-icon-2 me-0">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
															<rect x="6.0104" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
													<!--begin::Svg Icon | path: icons/duotune/general/gen035.svg-->
													<span class="svg-icon toggle-off svg-icon-2 me-0">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.3" x="2" y="2" width="20" height="20" rx="5" fill="currentColor" />
															<rect x="10.8891" y="17.8033" width="12" height="2" rx="1" transform="rotate(-90 10.8891 17.8033)" fill="currentColor" />
															<rect x="6.01041" y="10.9247" width="12" height="2" rx="1" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</a>
											</div>
										</div>
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Pages</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">User Profile</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/user-profile/overview.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Overview</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/user-profile/projects.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Projects</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/user-profile/campaigns.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Campaigns</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/user-profile/documents.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Documents</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/user-profile/followers.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Followers</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/user-profile/activity.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Activity</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Account</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../account/overview.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Overview</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../account/settings.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Settings</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../account/security.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Security</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../account/activity.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Activity</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../account/billing.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Billing</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../account/statements.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Statements</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../account/referrals.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Referrals</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../account/api-keys.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">API Keys</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../account/logs.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Logs</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Authentication</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Corporate Layout</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/corporate/sign-in.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Sign-in</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/corporate/sign-up.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Sign-up</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/corporate/two-steps.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Two-steps</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/corporate/reset-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Reset Password</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/corporate/new-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">New Password</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Overlay Layout</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/overlay/sign-in.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Sign-in</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/overlay/sign-up.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Sign-up</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/overlay/two-steps.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Two-steps</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/overlay/reset-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Reset Password</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/overlay/new-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">New Password</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Creative Layout</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/creative/sign-in.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Sign-in</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/creative/sign-up.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Sign-up</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/creative/two-steps.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Two-steps</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/creative/reset-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Reset Password</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/creative/new-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">New Password</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Fancy Layout</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/fancy/sign-in.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Sign-in</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/fancy/sign-up.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Sign-up</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/fancy/two-steps.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Two-steps</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/fancy/reset-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Reset Password</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/layouts/fancy/new-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">New Password</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Email Templates</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/email/welcome-message.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Welcome Message</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/email/reset-password.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Reset Password</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/email/subscription-confirmed.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Subscription Confirmed</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/email/card-declined.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Credit Card Declined</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/email/promo-1.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Promo 1</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/email/promo-2.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Promo 2</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../authentication/email/promo-3.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Promo 3</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../authentication/extended/multi-steps-sign-up.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Multi-steps Sign-up</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../authentication/extended/two-factor-auth.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Two Factor Auth</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../authentication/general/welcome.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Welcome Message</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../authentication/general/verify-email.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Verify Email</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../authentication/general/coming-soon.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Coming Soon</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../authentication/general/password-confirmation.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Password Confirmation</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../authentication/general/account-deactivated.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Account Deactivation</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../authentication/general/error-404.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Error 404</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../authentication/general/error-500.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Error 500</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Corporate</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/about.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">About</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/team.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Our Team</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/contact.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Contact Us</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/licenses.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Licenses</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/sitemap.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Sitemap</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Social</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/social/feeds.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Feeds</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/social/activity.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Activty</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/social/followers.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Followers</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/social/settings.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Settings</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Blog</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/blog/home.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Blog Home</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/blog/post.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Blog Post</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">FAQ</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/faq/classic.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">FAQ Classic</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/faq/extended.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">FAQ Extended</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Pricing</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/pricing/column.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Column Pricing</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/pricing/table.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Table Pricing</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Careers</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/careers/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Careers List</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../pages/careers/apply.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Careers Apply</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Widgets</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../widgets/lists.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Lists</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../widgets/statistics.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Statistics</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../widgets/charts.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Charts</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../widgets/mixed.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Mixed</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../widgets/tables.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Tables</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../widgets/feeds.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Feeds</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Apps</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Projects</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/projects/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">My Projects</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/projects/project.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View Project</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/projects/targets.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Targets</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/projects/budget.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Budget</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/projects/users.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Users</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/projects/files.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Files</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/projects/activity.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Activity</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/projects/settings.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Settings</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">eCommerce</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Catalog</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/ecommerce/catalog/products.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Products</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/ecommerce/catalog/categories.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Categories</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/ecommerce/catalog/add-product.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Add Product</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/ecommerce/catalog/edit-product.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Edit Product</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/ecommerce/catalog/add-category.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Add Category</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/ecommerce/catalog/edit-category.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Edit Category</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Sales</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/ecommerce/sales/listing.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Orders Listing</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/ecommerce/sales/details.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Order Details</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/ecommerce/sales/add-order.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Add Order</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/ecommerce/sales/edit-order.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Edit Order</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Customers</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/ecommerce/customers/listing.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Customer Listing</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/ecommerce/customers/details.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Customer Details</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Reports</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/ecommerce/reports/view.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Products Viewed</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/ecommerce/reports/sales.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Sales</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/ecommerce/reports/returns.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Returns</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/ecommerce/reports/customer-orders.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Customer Orders</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/ecommerce/reports/shipping.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Shipping</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/ecommerce/settings.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Settings</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Contacts</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/contacts/getting-started.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Getting Started</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/contacts/add-contact.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Add Contact</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/contacts/edit-contact.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Edit Contact</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/contacts/view-contact.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View Contact</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Support Center</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/support-center/overview.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Overview</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Tickets</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/support-center/tickets/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Tickets List</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/support-center/tickets/view.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">View Ticket</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Tutorials</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/support-center/tutorials/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Tutorials List</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/support-center/tutorials/post.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Tutorial Post</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/support-center/faq.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">FAQ</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/support-center/licenses.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Licenses</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/support-center/contact.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Contact Us</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">User Management</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion mb-1">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Users</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/user-management/users/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Users List</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/user-management/users/view.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">View User</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Roles</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/user-management/roles/list.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Roles List</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/user-management/roles/view.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">View Role</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/user-management/permissions.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Permissions</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Customers</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/customers/getting-started.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Getting Started</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/customers/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Customer Listing</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/customers/view.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Customer Details</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Subscription</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/subscriptions/getting-started.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Getting Started</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/subscriptions/list.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Subscription List</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/subscriptions/add.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Add Subscription</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/subscriptions/view.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View Subscription</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Invoice Manager</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View Invoices</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/invoices/view/invoice-1.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Invoice 1</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/invoices/view/invoice-2.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Invoice 2</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../apps/invoices/view/invoice-3.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Invoice 3</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/invoices/create.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Create Invoice</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">File Manager</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/file-manager/folders.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Folders</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/file-manager/files.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Files</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/file-manager/blank.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Blank Directory</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/file-manager/settings.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Settings</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Inbox</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/inbox/listing.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Messages</span>
														<span class="menu-badge">
															<span class="badge badge-success">3</span>
														</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/inbox/compose.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Compose</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/inbox/reply.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">View & Reply</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Chat</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/chat/private.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Private Chat</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/chat/group.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Group Chat</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../apps/chat/drawer.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Drawer Chat</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../apps/calendar.html">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Calendar</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Utilities</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Modals</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">General</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/general/invite-friends.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Invite Friends</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/general/view-users.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">View Users</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/general/select-users.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Select Users</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/general/upgrade-plan.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Upgrade Plan</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/general/share-earn.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Share & Earn</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Forms</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/forms/new-target.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">New Target</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/forms/new-card.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">New Card</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/forms/new-address.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">New Address</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/forms/create-api-key.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Create API Key</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/forms/bidding.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Bidding</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Wizards</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/wizards/create-app.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Create App</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/wizards/create-campaign.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Create Campaign</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/wizards/create-account.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Create Business Acc</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/wizards/create-project.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Create Project</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/wizards/top-up-wallet.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Top Up Wallet</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/wizards/offer-a-deal.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Offer a Deal</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/wizards/two-factor-authentication.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Two Factor Auth</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
													<!--begin:Menu link-->
													<span class="menu-link">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Search</span>
														<span class="menu-arrow"></span>
													</span>
													<!--end:Menu link-->
													<!--begin:Menu sub-->
													<div class="menu-sub menu-sub-accordion menu-active-bg">
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/search/users.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Users</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
														<!--begin:Menu item-->
														<div class="menu-item">
															<!--begin:Menu link-->
															<a class="menu-link" href="../utilities/modals/search/select-location.html">
																<span class="menu-bullet">
																	<span class="bullet bullet-dot"></span>
																</span>
																<span class="menu-title">Select Location</span>
															</a>
															<!--end:Menu link-->
														</div>
														<!--end:Menu item-->
													</div>
													<!--end:Menu sub-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Wizards</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../utilities/wizards/horizontal.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Horizontal</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../utilities/wizards/vertical.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Vertical</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../utilities/wizards/two-factor-authentication.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Two Factor Auth</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../utilities/wizards/create-app.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Create App</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../utilities/wizards/create-campaign.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Create Campaign</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../utilities/wizards/create-account.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Create Account</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../utilities/wizards/create-project.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Create Project</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../utilities/modals/wizards/top-up-wallet.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Top Up Wallet</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../utilities/wizards/offer-a-deal.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Offer a Deal</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
											<!--begin:Menu link-->
											<span class="menu-link">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Search</span>
												<span class="menu-arrow"></span>
											</span>
											<!--end:Menu link-->
											<!--begin:Menu sub-->
											<div class="menu-sub menu-sub-accordion menu-active-bg">
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../utilities/search/horizontal.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Horizontal</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../utilities/search/vertical.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Vertical</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../utilities/search/users.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Users</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
												<!--begin:Menu item-->
												<div class="menu-item">
													<!--begin:Menu link-->
													<a class="menu-link" href="../utilities/search/select-location.html">
														<span class="menu-bullet">
															<span class="bullet bullet-dot"></span>
														</span>
														<span class="menu-title">Location</span>
													</a>
													<!--end:Menu link-->
												</div>
												<!--end:Menu item-->
											</div>
											<!--end:Menu sub-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
								<!--begin:Menu item-->
								<div data-kt-menu-trigger="click" class="menu-item menu-accordion">
									<!--begin:Menu link-->
									<span class="menu-link">
										<span class="menu-icon">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr001.svg-->
											<span class="svg-icon svg-icon-5">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="currentColor" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-title">Help</span>
										<span class="menu-arrow"></span>
									</span>
									<!--end:Menu link-->
									<!--begin:Menu sub-->
									<div class="menu-sub menu-sub-accordion">
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank" title="Check out over 200 in-house components" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Components</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank" title="Check out the complete documentation" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Documentation</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="../layout-builder.html" title="Build your layout and export HTML for server side integration" data-bs-toggle="tooltip" data-bs-trigger="hover" data-bs-dismiss="click" data-bs-placement="right">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Layout Builder</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
										<!--begin:Menu item-->
										<div class="menu-item">
											<!--begin:Menu link-->
											<a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank">
												<span class="menu-bullet">
													<span class="bullet bullet-dot"></span>
												</span>
												<span class="menu-title">Changelog v8.1.6</span>
											</a>
											<!--end:Menu link-->
										</div>
										<!--end:Menu item-->
									</div>
									<!--end:Menu sub-->
								</div>
								<!--end:Menu item-->
							</div>
							<!--end::Menu-->
						</div>
						<!--end::Aside Menu-->
					</div>
					<!--end::Aside menu-->
					<!--begin::Footer-->
					<div class="aside-footer flex-column-auto px-6 px-lg-9" id="kt_aside_footer">
						<!--begin::User panel-->
						<div class="d-flex flex-stack ms-7">
							<!--begin::Link-->
							<a href="{{ url('admin/logout') }}" class="btn btn-sm btn-icon btn-active-color-primary btn-icon-gray-600 btn-text-gray-600">
								<!--begin::Svg Icon | path: icons/duotune/arrows/arr076.svg-->
								<span class="svg-icon svg-icon-1 me-2">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.3" width="12" height="2" rx="1" transform="matrix(-1 0 0 1 15.5 11)" fill="currentColor" />
										<path d="M13.6313 11.6927L11.8756 10.2297C11.4054 9.83785 11.3732 9.12683 11.806 8.69401C12.1957 8.3043 12.8216 8.28591 13.2336 8.65206L16.1592 11.2526C16.6067 11.6504 16.6067 12.3496 16.1592 12.7474L13.2336 15.3479C12.8216 15.7141 12.1957 15.6957 11.806 15.306C11.3732 14.8732 11.4054 14.1621 11.8756 13.7703L13.6313 12.3073C13.8232 12.1474 13.8232 11.8526 13.6313 11.6927Z" fill="currentColor" />
										<path d="M8 5V6C8 6.55228 8.44772 7 9 7C9.55228 7 10 6.55228 10 6C10 5.44772 10.4477 5 11 5H18C18.5523 5 19 5.44772 19 6V18C19 18.5523 18.5523 19 18 19H11C10.4477 19 10 18.5523 10 18C10 17.4477 9.55228 17 9 17C8.44772 17 8 17.4477 8 18V19C8 20.1046 8.89543 21 10 21H19C20.1046 21 21 20.1046 21 19V5C21 3.89543 20.1046 3 19 3H10C8.89543 3 8 3.89543 8 5Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--begin::Major-->
								<span class="d-flex flex-shrink-0 fw-bold">Log Out</span>
								<!--end::Major-->
							</a>
							<!--end::Link-->
							<!--begin::User menu-->
							<div class="ms-1">
								<div class="btn btn-sm btn-icon btn-icon-gray-600 btn-active-color-primary position-relative me-n1" data-kt-menu-trigger="click" data-kt-menu-overflow="true" data-kt-menu-placement="top-start">
									<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
									<span class="svg-icon svg-icon-1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="currentColor" />
											<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--begin::User account menu-->
								<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-800 menu-state-bg menu-state-color fw-semibold py-4 fs-6 w-275px" data-kt-menu="true">
									<!--begin::Menu item-->
									<div class="menu-item px-3">
										<div class="menu-content d-flex align-items-center px-3">
											<!--begin::Avatar-->
											<div class="symbol symbol-50px me-5">
												<img alt="Logo" src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Username-->
											<div class="d-flex flex-column">
												<div class="fw-bold d-flex align-items-center fs-5">Max Smith 
												<span class="badge badge-light-success fw-bold fs-8 px-2 py-1 ms-2">Pro</span></div>
												<a href="ecommerce.html#" class="fw-semibold text-muted text-hover-primary fs-7">max@kt.com</a>
											</div>
											<!--end::Username-->
										</div>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../account/overview.html" class="menu-link px-5">My Profile</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../apps/projects/list.html" class="menu-link px-5">
											<span class="menu-text">My Projects</span>
											<span class="menu-badge">
												<span class="badge badge-light-danger badge-circle fw-bold fs-7">3</span>
											</span>
										</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" data-kt-menu-offset="-15px, 0">
										<a href="ecommerce.html#" class="menu-link px-5">
											<span class="menu-title">My Subscription</span>
											<span class="menu-arrow"></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../account/referrals.html" class="menu-link px-5">Referrals</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../account/billing.html" class="menu-link px-5">Billing</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../account/statements.html" class="menu-link px-5">Payments</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../account/statements.html" class="menu-link d-flex flex-stack px-5">Statements 
												<i class="fas fa-exclamation-circle ms-2 fs-7" data-bs-toggle="tooltip" title="View your statements"></i></a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu separator-->
											<div class="separator my-2"></div>
											<!--end::Menu separator-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<div class="menu-content px-3">
													<label class="form-check form-switch form-check-custom form-check-solid">
														<input class="form-check-input w-30px h-20px" type="checkbox" value="1" checked="checked" name="notifications" />
														<span class="form-check-label text-muted fs-7">Notifications</span>
													</label>
												</div>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../account/statements.html" class="menu-link px-5">My Statements</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu separator-->
									<div class="separator my-2"></div>
									<!--end::Menu separator-->
									<!--begin::Menu item-->
									<div class="menu-item px-5" data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-placement="right-start" data-kt-menu-offset="-15px, 0">
										<a href="ecommerce.html#" class="menu-link px-5">
											<span class="menu-title position-relative">Language 
											<span class="fs-8 rounded bg-light px-3 py-2 position-absolute translate-middle-y top-50 end-0">English 
											<img class="w-15px h-15px rounded-1 ms-2" src="{{ asset('public/admin/') }}/media/flags/united-states.svg" alt="" /></span></span>
										</a>
										<!--begin::Menu sub-->
										<div class="menu-sub menu-sub-dropdown w-175px py-4">
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../account/settings.html" class="menu-link d-flex px-5 active">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="{{ asset('public/admin/') }}/media/flags/united-states.svg" alt="" />
												</span>English</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="{{ asset('public/admin/') }}/media/flags/spain.svg" alt="" />
												</span>Spanish</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="{{ asset('public/admin/') }}/media/flags/germany.svg" alt="" />
												</span>German</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="{{ asset('public/admin/') }}/media/flags/japan.svg" alt="" />
												</span>Japanese</a>
											</div>
											<!--end::Menu item-->
											<!--begin::Menu item-->
											<div class="menu-item px-3">
												<a href="../account/settings.html" class="menu-link d-flex px-5">
												<span class="symbol symbol-20px me-4">
													<img class="rounded-1" src="{{ asset('public/admin/') }}/media/flags/france.svg" alt="" />
												</span>French</a>
											</div>
											<!--end::Menu item-->
										</div>
										<!--end::Menu sub-->
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5 my-1">
										<a href="../account/settings.html" class="menu-link px-5">Account Settings</a>
									</div>
									<!--end::Menu item-->
									<!--begin::Menu item-->
									<div class="menu-item px-5">
										<a href="../authentication/layouts/corporate/sign-in.html" class="menu-link px-5">Sign Out</a>
									</div>
									<!--end::Menu item-->
								</div>
								<!--end::User account menu-->
							</div>
							<!--end::User menu-->
						</div>
						<!--end::User panel-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Aside-->
				
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
					<div id="kt_header" class="header">
						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-center flex-wrap justify-content-between" id="kt_header_container">
							<!--begin::Page title-->
							<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-2 pb-5 pb-lg-0 pt-7 pt-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
								<!--begin::Heading-->
								<h1 class="d-flex flex-column text-dark fw-bold my-0 fs-1">{{ $pageTitle }}</h1>
								<!--end::Heading-->
							</div>
							<!--end::Page title=-->
							<!--begin::Wrapper-->
							<div class="d-flex d-lg-none align-items-center ms-n3 me-2">
								<!--begin::Aside mobile toggle-->
								<div class="btn btn-icon btn-active-icon-primary" id="kt_aside_toggle">
									<!--begin::Svg Icon | path: icons/duotune/abstract/abs015.svg-->
									<span class="svg-icon svg-icon-1 mt-1">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21 7H3C2.4 7 2 6.6 2 6V4C2 3.4 2.4 3 3 3H21C21.6 3 22 3.4 22 4V6C22 6.6 21.6 7 21 7Z" fill="currentColor" />
											<path opacity="0.3" d="M21 14H3C2.4 14 2 13.6 2 13V11C2 10.4 2.4 10 3 10H21C21.6 10 22 10.4 22 11V13C22 13.6 21.6 14 21 14ZM22 20V18C22 17.4 21.6 17 21 17H3C2.4 17 2 17.4 2 18V20C2 20.6 2.4 21 3 21H21C21.6 21 22 20.6 22 20Z" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</div>
								<!--end::Aside mobile toggle-->
								<!--begin::Logo-->
								<a href="../index.html" class="d-flex align-items-center">
									<img alt="Logo" src="{{ asset('public/admin/') }}/media/logos/default-small.svg" class="h-30px" />
								</a>
								<!--end::Logo-->
							</div>
							<!--end::Wrapper-->
							<!--begin::Topbar-->
							<div class="d-flex align-items-center flex-shrink-0">
								<!--begin::Search-->
								<div id="kt_header_search" class="header-search d-flex align-items-center w-lg-250px" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="lg" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-end">
									<!--begin::Tablet and mobile search toggle-->
									<div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
										<div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px">
											<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
											<span class="svg-icon svg-icon-1">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
													<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</div>
									</div>
									<!--end::Tablet and mobile search toggle-->
									<!--begin::Form(use d-none d-lg-flex classes for responsive search)-->
									<form data-kt-search-element="form" class="d-none align-items-center d-lg-flex w-100 mb-5 mb-lg-0 position-relative" autocomplete="off">
										<!--begin::Hidden input(Added to disable form autocomplete)-->
										<input type="hidden" />
										<!--end::Hidden input-->
										<!--begin::Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen004.svg-->
										<span class="svg-icon svg-icon-2 svg-icon-gray-700 position-absolute top-50 translate-middle-y ms-4">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M21.7 18.9L18.6 15.8C17.9 16.9 16.9 17.9 15.8 18.6L18.9 21.7C19.3 22.1 19.9 22.1 20.3 21.7L21.7 20.3C22.1 19.9 22.1 19.3 21.7 18.9Z" fill="currentColor" />
												<path opacity="0.3" d="M11 20C6 20 2 16 2 11C2 6 6 2 11 2C16 2 20 6 20 11C20 16 16 20 11 20ZM11 4C7.1 4 4 7.1 4 11C4 14.9 7.1 18 11 18C14.9 18 18 14.9 18 11C18 7.1 14.9 4 11 4ZM8 11C8 9.3 9.3 8 11 8C11.6 8 12 7.6 12 7C12 6.4 11.6 6 11 6C8.2 6 6 8.2 6 11C6 11.6 6.4 12 7 12C7.6 12 8 11.6 8 11Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--end::Icon-->
										<!--begin::Input-->
										<input type="text" class="form-control bg-transparent ps-13 fs-7 h-40px" name="search" value="" placeholder="Quick Search" data-kt-search-element="input" />
										<!--end::Input-->
										<!--begin::Spinner-->
										<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
											<span class="spinner-border h-15px w-15px align-middle text-gray-400"></span>
										</span>
										<!--end::Spinner-->
										<!--begin::Reset-->
										<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
											<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
											<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
												<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
													<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
													<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
												</svg>
											</span>
											<!--end::Svg Icon-->
										</span>
										<!--end::Reset-->
									</form>
									<!--end::Form-->
									<!--begin::Menu-->
									<div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown w-300px w-md-350px py-7 px-7 overflow-hidden">
										<!--begin::Wrapper-->
										<div data-kt-search-element="wrapper">
											<!--begin::Recently viewed-->
											<div data-kt-search-element="results" class="d-none">
												<!--begin::Items-->
												<div class="scroll-y mh-200px mh-lg-350px">
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="ecommerce.html#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-6.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Karina Clark</span>
															<span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="ecommerce.html#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-2.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Olivia Bold</span>
															<span class="fs-7 fw-semibold text-muted">Software Engineer</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="ecommerce.html#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="{{ asset('public/admin/') }}/media/avatars/300-9.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Ana Clark</span>
															<span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="ecommerce.html#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-14.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Nick Pitola</span>
															<span class="fs-7 fw-semibold text-muted">Art Director</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="ecommerce.html#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<img src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-11.jpg" alt="" />
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Edward Kulnic</span>
															<span class="fs-7 fw-semibold text-muted">System Administrator</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="ecommerce.html#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="{{ asset('public/admin/') }}/media/svg/brand-logos/volicity-9.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Company Rbranding</span>
															<span class="fs-7 fw-semibold text-muted">UI Design</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="ecommerce.html#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="{{ asset('public/admin/') }}/media/svg/brand-logos/tvit.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Company Re-branding</span>
															<span class="fs-7 fw-semibold text-muted">Web Development</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="ecommerce.html#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="{{ asset('public/admin/') }}/media/svg/misc/infography.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Business Analytics App</span>
															<span class="fs-7 fw-semibold text-muted">Administration</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="ecommerce.html#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="{{ asset('public/admin/') }}/media/svg/brand-logos/leaf.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
															<span class="fs-7 fw-semibold text-muted">Marketing</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="ecommerce.html#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<img class="w-20px h-20px" src="{{ asset('public/admin/') }}/media/svg/brand-logos/tower.svg" alt="" />
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column justify-content-start fw-semibold">
															<span class="fs-6 fw-semibold">Tower Group Website</span>
															<span class="fs-7 fw-semibold text-muted">Google Adwords</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Category title-->
													<h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
													<!--end::Category title-->
													<!--begin::Item-->
													<a href="ecommerce.html#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/general/gen005.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M19 22H5C4.4 22 4 21.6 4 21V3C4 2.4 4.4 2 5 2H14L20 8V21C20 21.6 19.6 22 19 22ZM12.5 18C12.5 17.4 12.6 17.5 12 17.5H8.5C7.9 17.5 8 17.4 8 18C8 18.6 7.9 18.5 8.5 18.5L12 18C12.6 18 12.5 18.6 12.5 18ZM16.5 13C16.5 12.4 16.6 12.5 16 12.5H8.5C7.9 12.5 8 12.4 8 13C8 13.6 7.9 13.5 8.5 13.5H15.5C16.1 13.5 16.5 13.6 16.5 13ZM12.5 8C12.5 7.4 12.6 7.5 12 7.5H8C7.4 7.5 7.5 7.4 7.5 8C7.5 8.6 7.4 8.5 8 8.5H12C12.6 8.5 12.5 8.6 12.5 8Z" fill="currentColor" />
																		<rect x="7" y="17" width="6" height="2" rx="1" fill="currentColor" />
																		<rect x="7" y="12" width="10" height="2" rx="1" fill="currentColor" />
																		<rect x="7" y="7" width="6" height="2" rx="1" fill="currentColor" />
																		<path d="M15 8H20L14 2V7C14 7.6 14.4 8 15 8Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
															<span class="fs-7 fw-semibold text-muted">#45670</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="ecommerce.html#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/general/gen032.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect x="8" y="9" width="3" height="10" rx="1.5" fill="currentColor" />
																		<rect opacity="0.5" x="13" y="5" width="3" height="14" rx="1.5" fill="currentColor" />
																		<rect x="18" y="11" width="3" height="8" rx="1.5" fill="currentColor" />
																		<rect x="3" y="13" width="3" height="6" rx="1.5" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
															<span class="fs-7 fw-semibold text-muted">#45690</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="ecommerce.html#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/communication/com012.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M20 3H4C2.89543 3 2 3.89543 2 5V16C2 17.1046 2.89543 18 4 18H4.5C5.05228 18 5.5 18.4477 5.5 19V21.5052C5.5 22.1441 6.21212 22.5253 6.74376 22.1708L11.4885 19.0077C12.4741 18.3506 13.6321 18 14.8167 18H20C21.1046 18 22 17.1046 22 16V5C22 3.89543 21.1046 3 20 3Z" fill="currentColor" />
																		<rect x="6" y="12" width="7" height="2" rx="1" fill="currentColor" />
																		<rect x="6" y="7" width="12" height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
															<span class="fs-7 fw-semibold text-muted">#21090</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
													<!--begin::Item-->
													<a href="ecommerce.html#" class="d-flex text-dark text-hover-primary align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/communication/com006.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M16.5 9C16.5 13.125 13.125 16.5 9 16.5C4.875 16.5 1.5 13.125 1.5 9C1.5 4.875 4.875 1.5 9 1.5C13.125 1.5 16.5 4.875 16.5 9Z" fill="currentColor" />
																		<path d="M9 16.5C10.95 16.5 12.75 15.75 14.025 14.55C13.425 12.675 11.4 11.25 9 11.25C6.6 11.25 4.57499 12.675 3.97499 14.55C5.24999 15.75 7.05 16.5 9 16.5Z" fill="currentColor" />
																		<rect x="7" y="6" width="4" height="4" rx="2" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
															<span class="fs-7 fw-semibold text-muted">#34560</span>
														</div>
														<!--end::Title-->
													</a>
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end::Recently viewed-->
											<!--begin::Recently viewed-->
											<div class="" data-kt-search-element="main">
												<!--begin::Heading-->
												<div class="d-flex flex-stack fw-semibold mb-4">
													<!--begin::Label-->
													<span class="text-muted fs-6 me-2">Recently Searched:</span>
													<!--end::Label-->
													<!--begin::Toolbar-->
													<div class="d-flex" data-kt-search-element="toolbar">
														<!--begin::Preferences toggle-->
														<div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
															<!--begin::Svg Icon | path: icons/duotune/coding/cod001.svg-->
															<span class="svg-icon svg-icon-1">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path opacity="0.3" d="M22.1 11.5V12.6C22.1 13.2 21.7 13.6 21.2 13.7L19.9 13.9C19.7 14.7 19.4 15.5 18.9 16.2L19.7 17.2999C20 17.6999 20 18.3999 19.6 18.7999L18.8 19.6C18.4 20 17.8 20 17.3 19.7L16.2 18.9C15.5 19.3 14.7 19.7 13.9 19.9L13.7 21.2C13.6 21.7 13.1 22.1 12.6 22.1H11.5C10.9 22.1 10.5 21.7 10.4 21.2L10.2 19.9C9.4 19.7 8.6 19.4 7.9 18.9L6.8 19.7C6.4 20 5.7 20 5.3 19.6L4.5 18.7999C4.1 18.3999 4.1 17.7999 4.4 17.2999L5.2 16.2C4.8 15.5 4.4 14.7 4.2 13.9L2.9 13.7C2.4 13.6 2 13.1 2 12.6V11.5C2 10.9 2.4 10.5 2.9 10.4L4.2 10.2C4.4 9.39995 4.7 8.60002 5.2 7.90002L4.4 6.79993C4.1 6.39993 4.1 5.69993 4.5 5.29993L5.3 4.5C5.7 4.1 6.3 4.10002 6.8 4.40002L7.9 5.19995C8.6 4.79995 9.4 4.39995 10.2 4.19995L10.4 2.90002C10.5 2.40002 11 2 11.5 2H12.6C13.2 2 13.6 2.40002 13.7 2.90002L13.9 4.19995C14.7 4.39995 15.5 4.69995 16.2 5.19995L17.3 4.40002C17.7 4.10002 18.4 4.1 18.8 4.5L19.6 5.29993C20 5.69993 20 6.29993 19.7 6.79993L18.9 7.90002C19.3 8.60002 19.7 9.39995 19.9 10.2L21.2 10.4C21.7 10.5 22.1 11 22.1 11.5ZM12.1 8.59998C10.2 8.59998 8.6 10.2 8.6 12.1C8.6 14 10.2 15.6 12.1 15.6C14 15.6 15.6 14 15.6 12.1C15.6 10.2 14 8.59998 12.1 8.59998Z" fill="currentColor" />
																	<path d="M17.1 12.1C17.1 14.9 14.9 17.1 12.1 17.1C9.30001 17.1 7.10001 14.9 7.10001 12.1C7.10001 9.29998 9.30001 7.09998 12.1 7.09998C14.9 7.09998 17.1 9.29998 17.1 12.1ZM12.1 10.1C11 10.1 10.1 11 10.1 12.1C10.1 13.2 11 14.1 12.1 14.1C13.2 14.1 14.1 13.2 14.1 12.1C14.1 11 13.2 10.1 12.1 10.1Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Preferences toggle-->
														<!--begin::Advanced search toggle-->
														<div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
															<!--begin::Svg Icon | path: icons/duotune/arrows/arr072.svg-->
															<span class="svg-icon svg-icon-2">
																<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																	<path d="M11.4343 12.7344L7.25 8.55005C6.83579 8.13583 6.16421 8.13584 5.75 8.55005C5.33579 8.96426 5.33579 9.63583 5.75 10.05L11.2929 15.5929C11.6834 15.9835 12.3166 15.9835 12.7071 15.5929L18.25 10.05C18.6642 9.63584 18.6642 8.96426 18.25 8.55005C17.8358 8.13584 17.1642 8.13584 16.75 8.55005L12.5657 12.7344C12.2533 13.0468 11.7467 13.0468 11.4343 12.7344Z" fill="currentColor" />
																</svg>
															</span>
															<!--end::Svg Icon-->
														</div>
														<!--end::Advanced search toggle-->
													</div>
													<!--end::Toolbar-->
												</div>
												<!--end::Heading-->
												<!--begin::Items-->
												<div class="scroll-y mh-200px mh-lg-325px">
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/electronics/elc004.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M2 16C2 16.6 2.4 17 3 17H21C21.6 17 22 16.6 22 16V15H2V16Z" fill="currentColor" />
																		<path opacity="0.3" d="M21 3H3C2.4 3 2 3.4 2 4V15H22V4C22 3.4 21.6 3 21 3Z" fill="currentColor" />
																		<path opacity="0.3" d="M15 17H9V20H15V17Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="ecommerce.html#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
															<span class="fs-7 text-muted fw-semibold">#45789</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra001.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M14 3V21H10V3C10 2.4 10.4 2 11 2H13C13.6 2 14 2.4 14 3ZM7 14H5C4.4 14 4 14.4 4 15V21H8V15C8 14.4 7.6 14 7 14Z" fill="currentColor" />
																		<path d="M21 20H20V8C20 7.4 19.6 7 19 7H17C16.4 7 16 7.4 16 8V20H3C2.4 20 2 20.4 2 21C2 21.6 2.4 22 3 22H21C21.6 22 22 21.6 22 21C22 20.4 21.6 20 21 20Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="ecommerce.html#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
															<span class="fs-7 text-muted fw-semibold">#84050</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra006.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M13 5.91517C15.8 6.41517 18 8.81519 18 11.8152C18 12.5152 17.9 13.2152 17.6 13.9152L20.1 15.3152C20.6 15.6152 21.4 15.4152 21.6 14.8152C21.9 13.9152 22.1 12.9152 22.1 11.8152C22.1 7.01519 18.8 3.11521 14.3 2.01521C13.7 1.91521 13.1 2.31521 13.1 3.01521V5.91517H13Z" fill="currentColor" />
																		<path opacity="0.3" d="M19.1 17.0152C19.7 17.3152 19.8 18.1152 19.3 18.5152C17.5 20.5152 14.9 21.7152 12 21.7152C9.1 21.7152 6.50001 20.5152 4.70001 18.5152C4.30001 18.0152 4.39999 17.3152 4.89999 17.0152L7.39999 15.6152C8.49999 16.9152 10.2 17.8152 12 17.8152C13.8 17.8152 15.5 17.0152 16.6 15.6152L19.1 17.0152ZM6.39999 13.9151C6.19999 13.2151 6 12.5152 6 11.8152C6 8.81517 8.2 6.41515 11 5.91515V3.01519C11 2.41519 10.4 1.91519 9.79999 2.01519C5.29999 3.01519 2 7.01517 2 11.8152C2 12.8152 2.2 13.8152 2.5 14.8152C2.7 15.4152 3.4 15.7152 4 15.3152L6.39999 13.9151Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="ecommerce.html#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
															<span class="fs-7 text-muted fw-semibold">#84250</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z" fill="currentColor" />
																		<path d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="ecommerce.html#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
															<span class="fs-7 text-muted fw-semibold">#67945</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/communication/com010.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M6 8.725C6 8.125 6.4 7.725 7 7.725H14L18 11.725V12.925L22 9.725L12.6 2.225C12.2 1.925 11.7 1.925 11.4 2.225L2 9.725L6 12.925V8.725Z" fill="currentColor" />
																		<path opacity="0.3" d="M22 9.72498V20.725C22 21.325 21.6 21.725 21 21.725H3C2.4 21.725 2 21.325 2 20.725V9.72498L11.4 17.225C11.8 17.525 12.3 17.525 12.6 17.225L22 9.72498ZM15 11.725H18L14 7.72498V10.725C14 11.325 14.4 11.725 15 11.725Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="ecommerce.html#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
															<span class="fs-7 text-muted fw-semibold">#84250</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/finance/fin001.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path d="M20 19.725V18.725C20 18.125 19.6 17.725 19 17.725H5C4.4 17.725 4 18.125 4 18.725V19.725H3C2.4 19.725 2 20.125 2 20.725V21.725H22V20.725C22 20.125 21.6 19.725 21 19.725H20Z" fill="currentColor" />
																		<path opacity="0.3" d="M22 6.725V7.725C22 8.325 21.6 8.725 21 8.725H18C18.6 8.725 19 9.125 19 9.725C19 10.325 18.6 10.725 18 10.725V15.725C18.6 15.725 19 16.125 19 16.725V17.725H15V16.725C15 16.125 15.4 15.725 16 15.725V10.725C15.4 10.725 15 10.325 15 9.725C15 9.125 15.4 8.725 16 8.725H13C13.6 8.725 14 9.125 14 9.725C14 10.325 13.6 10.725 13 10.725V15.725C13.6 15.725 14 16.125 14 16.725V17.725H10V16.725C10 16.125 10.4 15.725 11 15.725V10.725C10.4 10.725 10 10.325 10 9.725C10 9.125 10.4 8.725 11 8.725H8C8.6 8.725 9 9.125 9 9.725C9 10.325 8.6 10.725 8 10.725V15.725C8.6 15.725 9 16.125 9 16.725V17.725H5V16.725C5 16.125 5.4 15.725 6 15.725V10.725C5.4 10.725 5 10.325 5 9.725C5 9.125 5.4 8.725 6 8.725H3C2.4 8.725 2 8.325 2 7.725V6.725L11 2.225C11.6 1.925 12.4 1.925 13.1 2.225L22 6.725ZM12 3.725C11.2 3.725 10.5 4.425 10.5 5.225C10.5 6.025 11.2 6.725 12 6.725C12.8 6.725 13.5 6.025 13.5 5.225C13.5 4.425 12.8 3.725 12 3.725Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="ecommerce.html#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
															<span class="fs-7 text-muted fw-semibold">#45690</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
													<!--begin::Item-->
													<div class="d-flex align-items-center mb-5">
														<!--begin::Symbol-->
														<div class="symbol symbol-40px me-4">
															<span class="symbol-label bg-light">
																<!--begin::Svg Icon | path: icons/duotune/graphs/gra002.svg-->
																<span class="svg-icon svg-icon-2 svg-icon-primary">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<path opacity="0.3" d="M20 8L12.5 5L5 14V19H20V8Z" fill="currentColor" />
																		<path d="M21 18H6V3C6 2.4 5.6 2 5 2C4.4 2 4 2.4 4 3V18H3C2.4 18 2 18.4 2 19C2 19.6 2.4 20 3 20H4V21C4 21.6 4.4 22 5 22C5.6 22 6 21.6 6 21V20H21C21.6 20 22 19.6 22 19C22 18.4 21.6 18 21 18Z" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</span>
														</div>
														<!--end::Symbol-->
														<!--begin::Title-->
														<div class="d-flex flex-column">
															<a href="ecommerce.html#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
															<span class="fs-7 text-muted fw-semibold">#24005</span>
														</div>
														<!--end::Title-->
													</div>
													<!--end::Item-->
												</div>
												<!--end::Items-->
											</div>
											<!--end::Recently viewed-->
											<!--begin::Empty-->
											<div data-kt-search-element="empty" class="text-center d-none">
												<!--begin::Icon-->
												<div class="pt-10 pb-10">
													<!--begin::Svg Icon | path: icons/duotune/files/fil024.svg-->
													<span class="svg-icon svg-icon-4x opacity-50">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path opacity="0.3" d="M14 2H6C4.89543 2 4 2.89543 4 4V20C4 21.1046 4.89543 22 6 22H18C19.1046 22 20 21.1046 20 20V8L14 2Z" fill="currentColor" />
															<path d="M20 8L14 2V6C14 7.10457 14.8954 8 16 8H20Z" fill="currentColor" />
															<rect x="13.6993" y="13.6656" width="4.42828" height="1.73089" rx="0.865447" transform="rotate(45 13.6993 13.6656)" fill="currentColor" />
															<path d="M15 12C15 14.2 13.2 16 11 16C8.8 16 7 14.2 7 12C7 9.8 8.8 8 11 8C13.2 8 15 9.8 15 12ZM11 9.6C9.68 9.6 8.6 10.68 8.6 12C8.6 13.32 9.68 14.4 11 14.4C12.32 14.4 13.4 13.32 13.4 12C13.4 10.68 12.32 9.6 11 9.6Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</div>
												<!--end::Icon-->
												<!--begin::Message-->
												<div class="pb-15 fw-semibold">
													<h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
													<div class="text-muted fs-7">Please try again with a different query</div>
												</div>
												<!--end::Message-->
											</div>
											<!--end::Empty-->
										</div>
										<!--end::Wrapper-->
										<!--begin::Preferences-->
										<form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
											<!--begin::Heading-->
											<h3 class="fw-semibold text-dark mb-7">Advanced Search</h3>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<!--begin::Radio group-->
												<div class="nav-group nav-group-fluid">
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="has" checked="checked" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="users" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="orders" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="type" value="projects" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Radio group-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<!--begin::Radio group-->
												<div class="nav-group nav-group-fluid">
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
													</label>
													<!--end::Option-->
													<!--begin::Option-->
													<label>
														<input type="radio" class="btn-check" name="attachment" value="any" />
														<span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
													</label>
													<!--end::Option-->
												</div>
												<!--end::Radio group-->
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="mb-5">
												<select name="timezone" aria-label="Select a Timezone" data-control="select2" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
													<option value="next">Within the next</option>
													<option value="last">Within the last</option>
													<option value="between">Between</option>
													<option value="on">On</option>
												</select>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="row mb-8">
												<!--begin::Col-->
												<div class="col-6">
													<input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
												</div>
												<!--end::Col-->
												<!--begin::Col-->
												<div class="col-6">
													<select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
														<option value="days">Days</option>
														<option value="weeks">Weeks</option>
														<option value="months">Months</option>
														<option value="years">Years</option>
													</select>
												</div>
												<!--end::Col-->
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end">
												<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
												<a href="../pages/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Preferences-->
										<!--begin::Preferences-->
										<form data-kt-search-element="preferences" class="pt-1 d-none">
											<!--begin::Heading-->
											<h3 class="fw-semibold text-dark mb-7">Search Preferences</h3>
											<!--end::Heading-->
											<!--begin::Input group-->
											<div class="pb-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
													<input class="form-check-input" type="checkbox" value="1" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
													<input class="form-check-input" type="checkbox" value="1" checked="checked" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Input group-->
											<div class="py-4 border-bottom">
												<label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
													<span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
													<input class="form-check-input" type="checkbox" value="1" />
												</label>
											</div>
											<!--end::Input group-->
											<!--begin::Actions-->
											<div class="d-flex justify-content-end pt-7">
												<button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
												<button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
											</div>
											<!--end::Actions-->
										</form>
										<!--end::Preferences-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Search-->
								<!--begin::Activities-->
								<div class="d-flex align-items-center ms-3 ms-lg-4">
									<!--begin::Drawer toggle-->
									<div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px" id="kt_activities_toggle">
										<!--begin::Svg Icon | path: icons/duotune/general/gen007.svg-->
										<span class="svg-icon svg-icon-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M12 22C13.6569 22 15 20.6569 15 19C15 17.3431 13.6569 16 12 16C10.3431 16 9 17.3431 9 19C9 20.6569 10.3431 22 12 22Z" fill="currentColor" />
												<path d="M19 15V18C19 18.6 18.6 19 18 19H6C5.4 19 5 18.6 5 18V15C6.1 15 7 14.1 7 13V10C7 7.6 8.7 5.6 11 5.1V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V5.1C15.3 5.6 17 7.6 17 10V13C17 14.1 17.9 15 19 15ZM11 10C11 9.4 11.4 9 12 9C12.6 9 13 8.6 13 8C13 7.4 12.6 7 12 7C10.3 7 9 8.3 9 10C9 10.6 9.4 11 10 11C10.6 11 11 10.6 11 10Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</div>
									<!--end::Drawer toggle-->
								</div>
								<!--end::Activities-->
								<!--begin::Chat-->
								<div class="d-flex d-none align-items-center ms-3 ms-lg-4">
									<!--begin::Drawer wrapper-->
									<div class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px position-relative" id="kt_drawer_chat_toggle">
										<!--begin::Svg Icon | path: icons/duotune/communication/com003.svg-->
										<span class="svg-icon svg-icon-1">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path opacity="0.3" d="M2 4V16C2 16.6 2.4 17 3 17H13L16.6 20.6C17.1 21.1 18 20.8 18 20V17H21C21.6 17 22 16.6 22 16V4C22 3.4 21.6 3 21 3H3C2.4 3 2 3.4 2 4Z" fill="currentColor" />
												<path d="M18 9H6C5.4 9 5 8.6 5 8C5 7.4 5.4 7 6 7H18C18.6 7 19 7.4 19 8C19 8.6 18.6 9 18 9ZM16 12C16 11.4 15.6 11 15 11H6C5.4 11 5 11.4 5 12C5 12.6 5.4 13 6 13H15C15.6 13 16 12.6 16 12Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Bullet-->
										<span class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink"></span>
										<!--end::Bullet-->
									</div>
									<!--end::Drawer wrapper-->
								</div>
								<!--end::Chat-->
								<!--begin::Theme mode-->
								<div class="d-flex align-items-center ms-3 ms-lg-4">
									<!--begin::Menu toggle-->
									<a href="ecommerce.html#" class="btn btn-icon btn-color-gray-700 btn-active-color-primary btn-outline w-40px h-40px" data-kt-menu-trigger="{default:'click', lg: 'hover'}" data-kt-menu-attach="parent" data-kt-menu-placement="bottom-end">
										<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
										<span class="svg-icon theme-light-show svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor" />
												<path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor" />
												<path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor" />
												<path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor" />
												<path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor" />
												<path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor" />
												<path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor" />
												<path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor" />
												<path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
										<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
										<span class="svg-icon theme-dark-show svg-icon-2">
											<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
												<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor" />
												<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor" />
												<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor" />
												<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor" />
											</svg>
										</span>
										<!--end::Svg Icon-->
									</a>
									<!--begin::Menu toggle-->
									<!--begin::Menu-->
									<div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-title-gray-700 menu-icon-muted menu-active-bg menu-state-color fw-semibold py-4 fs-base w-150px" data-kt-menu="true" data-kt-element="theme-mode-menu">
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="ecommerce.html#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="light">
												<span class="menu-icon" data-kt-element="icon">
													<!--begin::Svg Icon | path: icons/duotune/general/gen060.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M11.9905 5.62598C10.7293 5.62574 9.49646 5.9995 8.44775 6.69997C7.39903 7.40045 6.58159 8.39619 6.09881 9.56126C5.61603 10.7263 5.48958 12.0084 5.73547 13.2453C5.98135 14.4823 6.58852 15.6185 7.48019 16.5104C8.37186 17.4022 9.50798 18.0096 10.7449 18.2557C11.9818 18.5019 13.2639 18.3757 14.429 17.8931C15.5942 17.4106 16.5901 16.5933 17.2908 15.5448C17.9915 14.4962 18.3655 13.2634 18.3655 12.0023C18.3637 10.3119 17.6916 8.69129 16.4964 7.49593C15.3013 6.30056 13.6808 5.62806 11.9905 5.62598Z" fill="currentColor" />
															<path d="M22.1258 10.8771H20.627C20.3286 10.8771 20.0424 10.9956 19.8314 11.2066C19.6204 11.4176 19.5018 11.7038 19.5018 12.0023C19.5018 12.3007 19.6204 12.5869 19.8314 12.7979C20.0424 13.0089 20.3286 13.1274 20.627 13.1274H22.1258C22.4242 13.1274 22.7104 13.0089 22.9214 12.7979C23.1324 12.5869 23.2509 12.3007 23.2509 12.0023C23.2509 11.7038 23.1324 11.4176 22.9214 11.2066C22.7104 10.9956 22.4242 10.8771 22.1258 10.8771Z" fill="currentColor" />
															<path d="M11.9905 19.4995C11.6923 19.5 11.4064 19.6187 11.1956 19.8296C10.9848 20.0405 10.8663 20.3265 10.866 20.6247V22.1249C10.866 22.4231 10.9845 22.7091 11.1953 22.9199C11.4062 23.1308 11.6922 23.2492 11.9904 23.2492C12.2886 23.2492 12.5746 23.1308 12.7854 22.9199C12.9963 22.7091 13.1147 22.4231 13.1147 22.1249V20.6247C13.1145 20.3265 12.996 20.0406 12.7853 19.8296C12.5745 19.6187 12.2887 19.5 11.9905 19.4995Z" fill="currentColor" />
															<path d="M4.49743 12.0023C4.49718 11.704 4.37865 11.4181 4.16785 11.2072C3.95705 10.9962 3.67119 10.8775 3.37298 10.8771H1.87445C1.57603 10.8771 1.28984 10.9956 1.07883 11.2066C0.867812 11.4176 0.749266 11.7038 0.749266 12.0023C0.749266 12.3007 0.867812 12.5869 1.07883 12.7979C1.28984 13.0089 1.57603 13.1274 1.87445 13.1274H3.37299C3.6712 13.127 3.95706 13.0083 4.16785 12.7973C4.37865 12.5864 4.49718 12.3005 4.49743 12.0023Z" fill="currentColor" />
															<path d="M11.9905 4.50058C12.2887 4.50012 12.5745 4.38141 12.7853 4.17048C12.9961 3.95954 13.1147 3.67361 13.1149 3.3754V1.87521C13.1149 1.57701 12.9965 1.29103 12.7856 1.08017C12.5748 0.869313 12.2888 0.750854 11.9906 0.750854C11.6924 0.750854 11.4064 0.869313 11.1955 1.08017C10.9847 1.29103 10.8662 1.57701 10.8662 1.87521V3.3754C10.8664 3.67359 10.9849 3.95952 11.1957 4.17046C11.4065 4.3814 11.6923 4.50012 11.9905 4.50058Z" fill="currentColor" />
															<path d="M18.8857 6.6972L19.9465 5.63642C20.0512 5.53209 20.1343 5.40813 20.1911 5.27163C20.2479 5.13513 20.2772 4.98877 20.2774 4.84093C20.2775 4.69309 20.2485 4.54667 20.192 4.41006C20.1355 4.27344 20.0526 4.14932 19.948 4.04478C19.8435 3.94024 19.7194 3.85734 19.5828 3.80083C19.4462 3.74432 19.2997 3.71531 19.1519 3.71545C19.0041 3.7156 18.8577 3.7449 18.7212 3.80167C18.5847 3.85845 18.4607 3.94159 18.3564 4.04633L17.2956 5.10714C17.1909 5.21147 17.1077 5.33543 17.0509 5.47194C16.9942 5.60844 16.9649 5.7548 16.9647 5.90264C16.9646 6.05048 16.9936 6.19689 17.0501 6.33351C17.1066 6.47012 17.1895 6.59425 17.294 6.69878C17.3986 6.80332 17.5227 6.88621 17.6593 6.94272C17.7959 6.99923 17.9424 7.02824 18.0902 7.02809C18.238 7.02795 18.3844 6.99865 18.5209 6.94187C18.6574 6.88509 18.7814 6.80195 18.8857 6.6972Z" fill="currentColor" />
															<path d="M18.8855 17.3073C18.7812 17.2026 18.6572 17.1195 18.5207 17.0627C18.3843 17.006 18.2379 16.9767 18.0901 16.9766C17.9423 16.9764 17.7959 17.0055 17.6593 17.062C17.5227 17.1185 17.3986 17.2014 17.2941 17.3059C17.1895 17.4104 17.1067 17.5345 17.0501 17.6711C16.9936 17.8077 16.9646 17.9541 16.9648 18.1019C16.9649 18.2497 16.9942 18.3961 17.0509 18.5326C17.1077 18.6691 17.1908 18.793 17.2955 18.8974L18.3563 19.9582C18.4606 20.0629 18.5846 20.146 18.721 20.2027C18.8575 20.2595 19.0039 20.2887 19.1517 20.2889C19.2995 20.289 19.4459 20.26 19.5825 20.2035C19.7191 20.147 19.8432 20.0641 19.9477 19.9595C20.0523 19.855 20.1351 19.7309 20.1916 19.5943C20.2482 19.4577 20.2772 19.3113 20.277 19.1635C20.2769 19.0157 20.2476 18.8694 20.1909 18.7329C20.1341 18.5964 20.051 18.4724 19.9463 18.3681L18.8855 17.3073Z" fill="currentColor" />
															<path d="M5.09528 17.3072L4.0345 18.368C3.92972 18.4723 3.84655 18.5963 3.78974 18.7328C3.73294 18.8693 3.70362 19.0156 3.70346 19.1635C3.7033 19.3114 3.7323 19.4578 3.78881 19.5944C3.84532 19.7311 3.92822 19.8552 4.03277 19.9598C4.13732 20.0643 4.26147 20.1472 4.3981 20.2037C4.53473 20.2602 4.68117 20.2892 4.82902 20.2891C4.97688 20.2889 5.12325 20.2596 5.25976 20.2028C5.39627 20.146 5.52024 20.0628 5.62456 19.958L6.68536 18.8973C6.79007 18.7929 6.87318 18.6689 6.92993 18.5325C6.98667 18.396 7.01595 18.2496 7.01608 18.1018C7.01621 17.954 6.98719 17.8076 6.93068 17.671C6.87417 17.5344 6.79129 17.4103 6.68676 17.3058C6.58224 17.2012 6.45813 17.1183 6.32153 17.0618C6.18494 17.0053 6.03855 16.9763 5.89073 16.9764C5.74291 16.9766 5.59657 17.0058 5.46007 17.0626C5.32358 17.1193 5.19962 17.2024 5.09528 17.3072Z" fill="currentColor" />
															<path d="M5.09541 6.69715C5.19979 6.8017 5.32374 6.88466 5.4602 6.94128C5.59665 6.9979 5.74292 7.02708 5.89065 7.02714C6.03839 7.0272 6.18469 6.99815 6.32119 6.94164C6.45769 6.88514 6.58171 6.80228 6.68618 6.69782C6.79064 6.59336 6.87349 6.46933 6.93 6.33283C6.9865 6.19633 7.01556 6.05003 7.01549 5.9023C7.01543 5.75457 6.98625 5.60829 6.92963 5.47184C6.87301 5.33539 6.79005 5.21143 6.6855 5.10706L5.6247 4.04626C5.5204 3.94137 5.39643 3.8581 5.25989 3.80121C5.12335 3.74432 4.97692 3.71493 4.82901 3.71472C4.68109 3.71452 4.53458 3.7435 4.39789 3.80001C4.26119 3.85652 4.13699 3.93945 4.03239 4.04404C3.9278 4.14864 3.84487 4.27284 3.78836 4.40954C3.73185 4.54624 3.70287 4.69274 3.70308 4.84066C3.70329 4.98858 3.73268 5.135 3.78957 5.27154C3.84646 5.40808 3.92974 5.53205 4.03462 5.63635L5.09541 6.69715Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<span class="menu-title">Light</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="ecommerce.html#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="dark">
												<span class="menu-icon" data-kt-element="icon">
													<!--begin::Svg Icon | path: icons/duotune/general/gen061.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M19.0647 5.43757C19.3421 5.43757 19.567 5.21271 19.567 4.93534C19.567 4.65796 19.3421 4.43311 19.0647 4.43311C18.7874 4.43311 18.5625 4.65796 18.5625 4.93534C18.5625 5.21271 18.7874 5.43757 19.0647 5.43757Z" fill="currentColor" />
															<path d="M20.0692 9.48884C20.3466 9.48884 20.5714 9.26398 20.5714 8.98661C20.5714 8.70923 20.3466 8.48438 20.0692 8.48438C19.7918 8.48438 19.567 8.70923 19.567 8.98661C19.567 9.26398 19.7918 9.48884 20.0692 9.48884Z" fill="currentColor" />
															<path d="M12.0335 20.5714C15.6943 20.5714 18.9426 18.2053 20.1168 14.7338C20.1884 14.5225 20.1114 14.289 19.9284 14.161C19.746 14.034 19.5003 14.0418 19.3257 14.1821C18.2432 15.0546 16.9371 15.5156 15.5491 15.5156C12.2257 15.5156 9.48884 12.8122 9.48884 9.48886C9.48884 7.41079 10.5773 5.47137 12.3449 4.35752C12.5342 4.23832 12.6 4.00733 12.5377 3.79251C12.4759 3.57768 12.2571 3.42859 12.0335 3.42859C7.32556 3.42859 3.42857 7.29209 3.42857 12C3.42857 16.7079 7.32556 20.5714 12.0335 20.5714Z" fill="currentColor" />
															<path d="M13.0379 7.47998C13.8688 7.47998 14.5446 8.15585 14.5446 8.98668C14.5446 9.26428 14.7693 9.48891 15.0469 9.48891C15.3245 9.48891 15.5491 9.26428 15.5491 8.98668C15.5491 8.15585 16.225 7.47998 17.0558 7.47998C17.3334 7.47998 17.558 7.25535 17.558 6.97775C17.558 6.70015 17.3334 6.47552 17.0558 6.47552C16.225 6.47552 15.5491 5.76616 15.5491 4.93534C15.5491 4.65774 15.3245 4.43311 15.0469 4.43311C14.7693 4.43311 14.5446 4.65774 14.5446 4.93534C14.5446 5.76616 13.8688 6.47552 13.0379 6.47552C12.7603 6.47552 12.5357 6.70015 12.5357 6.97775C12.5357 7.25535 12.7603 7.47998 13.0379 7.47998Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<span class="menu-title">Dark</span>
											</a>
										</div>
										<!--end::Menu item-->
										<!--begin::Menu item-->
										<div class="menu-item px-3 my-0">
											<a href="ecommerce.html#" class="menu-link px-3 py-2" data-kt-element="mode" data-kt-value="system">
												<span class="menu-icon" data-kt-element="icon">
													<!--begin::Svg Icon | path: icons/duotune/general/gen062.svg-->
													<span class="svg-icon svg-icon-3">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path fill-rule="evenodd" clip-rule="evenodd" d="M1.34375 3.9463V15.2178C1.34375 16.119 2.08105 16.8563 2.98219 16.8563H8.65093V19.4594H6.15702C5.38853 19.4594 4.75981 19.9617 4.75981 20.5757V21.6921H19.2403V20.5757C19.2403 19.9617 18.6116 19.4594 17.8431 19.4594H15.3492V16.8563H21.0179C21.919 16.8563 22.6562 16.119 22.6562 15.2178V3.9463C22.6562 3.04516 21.9189 2.30786 21.0179 2.30786H2.98219C2.08105 2.30786 1.34375 3.04516 1.34375 3.9463ZM12.9034 9.9016C13.241 9.98792 13.5597 10.1216 13.852 10.2949L15.0393 9.4353L15.9893 10.3853L15.1297 11.5727C15.303 11.865 15.4366 12.1837 15.523 12.5212L16.97 12.7528V13.4089H13.9851C13.9766 12.3198 13.0912 11.4394 12 11.4394C10.9089 11.4394 10.0235 12.3198 10.015 13.4089H7.03006V12.7528L8.47712 12.5211C8.56345 12.1836 8.69703 11.8649 8.87037 11.5727L8.0107 10.3853L8.96078 9.4353L10.148 10.2949C10.4404 10.1215 10.759 9.98788 11.0966 9.9016L11.3282 8.45467H12.6718L12.9034 9.9016ZM16.1353 7.93758C15.6779 7.93758 15.3071 7.56681 15.3071 7.1094C15.3071 6.652 15.6779 6.28122 16.1353 6.28122C16.5926 6.28122 16.9634 6.652 16.9634 7.1094C16.9634 7.56681 16.5926 7.93758 16.1353 7.93758ZM2.71385 14.0964V3.90518C2.71385 3.78023 2.81612 3.67796 2.94107 3.67796H21.0589C21.1839 3.67796 21.2861 3.78023 21.2861 3.90518V14.0964C15.0954 14.0964 8.90462 14.0964 2.71385 14.0964Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->
												</span>
												<span class="menu-title">System</span>
											</a>
										</div>
										<!--end::Menu item-->
									</div>
									<!--end::Menu-->
								</div>
								<!--end::Theme mode-->
								<!--begin::Sidebar Toggler-->
								<!--end::Sidebar Toggler-->
							</div>
							<!--end::Topbar-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<div class="container-fluid" id="kt_content_container">
							<!--begin::Row-->
							<div class="row g-5 g-xl-10 mb-xl-10">
								<!--begin::Col-->
								<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
									<!--begin::Card widget 4-->
									<div class="card card-flush h-md-50 mb-5 mb-xl-10">
										<!--begin::Header-->
										<div class="card-header pt-5">
											<!--begin::Title-->
											<div class="card-title d-flex flex-column">
												<!--begin::Info-->
												<div class="d-flex align-items-center">
													<!--begin::Currency-->
													<span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
													<!--end::Currency-->
													<!--begin::Amount-->
													<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">69,700</span>
													<!--end::Amount-->
													<!--begin::Badge-->
													<span class="badge badge-light-success fs-base">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
													<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
															<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->2.2%</span>
													<!--end::Badge-->
												</div>
												<!--end::Info-->
												<!--begin::Subtitle-->
												<span class="text-gray-400 pt-1 fw-semibold fs-6">Expected Earnings</span>
												<!--end::Subtitle-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Card body-->
										<div class="card-body pt-2 pb-4 d-flex align-items-center">
											<!--begin::Chart-->
											<div class="d-flex flex-center me-5 pt-2">
												<div id="kt_card_widget_4_chart" style="min-width: 70px; min-height: 70px" data-kt-size="70" data-kt-line="11"></div>
											</div>
											<!--end::Chart-->
											<!--begin::Labels-->
											<div class="d-flex flex-column content-justify-center w-100">
												<!--begin::Label-->
												<div class="d-flex fs-6 fw-semibold align-items-center">
													<!--begin::Bullet-->
													<div class="bullet w-8px h-6px rounded-2 bg-danger me-3"></div>
													<!--end::Bullet-->
													<!--begin::Label-->
													<div class="text-gray-500 flex-grow-1 me-4">Shoes</div>
													<!--end::Label-->
													<!--begin::Stats-->
													<div class="fw-bolder text-gray-700 text-xxl-end">$7,660</div>
													<!--end::Stats-->
												</div>
												<!--end::Label-->
												<!--begin::Label-->
												<div class="d-flex fs-6 fw-semibold align-items-center my-3">
													<!--begin::Bullet-->
													<div class="bullet w-8px h-6px rounded-2 bg-primary me-3"></div>
													<!--end::Bullet-->
													<!--begin::Label-->
													<div class="text-gray-500 flex-grow-1 me-4">Gaming</div>
													<!--end::Label-->
													<!--begin::Stats-->
													<div class="fw-bolder text-gray-700 text-xxl-end">$2,820</div>
													<!--end::Stats-->
												</div>
												<!--end::Label-->
												<!--begin::Label-->
												<div class="d-flex fs-6 fw-semibold align-items-center">
													<!--begin::Bullet-->
													<div class="bullet w-8px h-6px rounded-2 me-3" style="background-color: #E4E6EF"></div>
													<!--end::Bullet-->
													<!--begin::Label-->
													<div class="text-gray-500 flex-grow-1 me-4">Others</div>
													<!--end::Label-->
													<!--begin::Stats-->
													<div class="fw-bolder text-gray-700 text-xxl-end">$45,257</div>
													<!--end::Stats-->
												</div>
												<!--end::Label-->
											</div>
											<!--end::Labels-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card widget 4-->
									<!--begin::Card widget 5-->
									<div class="card card-flush h-md-50 mb-xl-10">
										<!--begin::Header-->
										<div class="card-header pt-5">
											<!--begin::Title-->
											<div class="card-title d-flex flex-column">
												<!--begin::Info-->
												<div class="d-flex align-items-center">
													<!--begin::Amount-->
													<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">1,836</span>
													<!--end::Amount-->
													<!--begin::Badge-->
													<span class="badge badge-light-danger fs-base">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
													<span class="svg-icon svg-icon-5 svg-icon-danger ms-n1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
															<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->2.2%</span>
													<!--end::Badge-->
												</div>
												<!--end::Info-->
												<!--begin::Subtitle-->
												<span class="text-gray-400 pt-1 fw-semibold fs-6">Orders This Month</span>
												<!--end::Subtitle-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Card body-->
										<div class="card-body d-flex align-items-end pt-0">
											<!--begin::Progress-->
											<div class="d-flex align-items-center flex-column mt-3 w-100">
												<div class="d-flex justify-content-between w-100 mt-auto mb-2">
													<span class="fw-bolder fs-6 text-dark">1,048 to Goal</span>
													<span class="fw-bold fs-6 text-gray-400">62%</span>
												</div>
												<div class="h-8px mx-3 w-100 bg-light-success rounded">
													<div class="bg-success rounded h-8px" role="progressbar" style="width: 62%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
												</div>
											</div>
											<!--end::Progress-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card widget 5-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-md-6 col-lg-6 col-xl-6 col-xxl-3 mb-md-5 mb-xl-10">
									<!--begin::Card widget 6-->
									<div class="card card-flush h-md-50 mb-5 mb-xl-10">
										<!--begin::Header-->
										<div class="card-header pt-5">
											<!--begin::Title-->
											<div class="card-title d-flex flex-column">
												<!--begin::Info-->
												<div class="d-flex align-items-center">
													<!--begin::Currency-->
													<span class="fs-4 fw-semibold text-gray-400 me-1 align-self-start">$</span>
													<!--end::Currency-->
													<!--begin::Amount-->
													<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">2,420</span>
													<!--end::Amount-->
													<!--begin::Badge-->
													<span class="badge badge-light-success fs-base">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
													<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
															<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->2.6%</span>
													<!--end::Badge-->
												</div>
												<!--end::Info-->
												<!--begin::Subtitle-->
												<span class="text-gray-400 pt-1 fw-semibold fs-6">Average Daily Sales</span>
												<!--end::Subtitle-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Card body-->
										<div class="card-body d-flex align-items-end px-0 pb-0">
											<!--begin::Chart-->
											<div id="kt_card_widget_6_chart" class="w-100" style="height: 80px"></div>
											<!--end::Chart-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card widget 6-->
									<!--begin::Card widget 7-->
									<div class="card card-flush h-md-50 mb-xl-10">
										<!--begin::Header-->
										<div class="card-header pt-5">
											<!--begin::Title-->
											<div class="card-title d-flex flex-column">
												<!--begin::Amount-->
												<span class="fs-2hx fw-bold text-dark me-2 lh-1 ls-n2">6.3k</span>
												<!--end::Amount-->
												<!--begin::Subtitle-->
												<span class="text-gray-400 pt-1 fw-semibold fs-6">New Customers This Month</span>
												<!--end::Subtitle-->
											</div>
											<!--end::Title-->
										</div>
										<!--end::Header-->
										<!--begin::Card body-->
										<div class="card-body d-flex flex-column justify-content-end pe-0">
											<!--begin::Title-->
											<span class="fs-6 fw-bolder text-gray-800 d-block mb-2">Today’s Heroes</span>
											<!--end::Title-->
											<!--begin::Users group-->
											<div class="symbol-group symbol-hover flex-nowrap">
												<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Alan Warden">
													<span class="symbol-label bg-warning text-inverse-warning fw-bold">A</span>
												</div>
												<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Michael Eberon">
													<img alt="Pic" src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-11.jpg" />
												</div>
												<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Susan Redwood">
													<span class="symbol-label bg-primary text-inverse-primary fw-bold">S</span>
												</div>
												<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Melody Macy">
													<img alt="Pic" src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-2.jpg" />
												</div>
												<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Perry Matthew">
													<span class="symbol-label bg-danger text-inverse-danger fw-bold">P</span>
												</div>
												<div class="symbol symbol-35px symbol-circle" data-bs-toggle="tooltip" title="Barry Walter">
													<img alt="Pic" src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-12.jpg" />
												</div>
												<a href="ecommerce.html#" class="symbol symbol-35px symbol-circle" data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
													<span class="symbol-label bg-light text-gray-400 fs-8 fw-bold">+42</span>
												</a>
											</div>
											<!--end::Users group-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Card widget 7-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-lg-12 col-xl-12 col-xxl-6 mb-5 mb-xl-0">
									<!--begin::Chart widget 3-->
									<div class="card card-flush overflow-hidden h-md-100">
										<!--begin::Header-->
										<div class="card-header py-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-dark">Sales This Months</span>
												<span class="text-gray-400 mt-1 fw-semibold fs-6">Users from all channels</span>
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
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
														<a href="ecommerce.html#" class="menu-link px-3">New Ticket</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="ecommerce.html#" class="menu-link px-3">New Customer</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
														<!--begin::Menu item-->
														<a href="ecommerce.html#" class="menu-link px-3">
															<span class="menu-title">New Group</span>
															<span class="menu-arrow"></span>
														</a>
														<!--end::Menu item-->
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="ecommerce.html#" class="menu-link px-3">Admin Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="ecommerce.html#" class="menu-link px-3">Staff Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="ecommerce.html#" class="menu-link px-3">Member Group</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="ecommerce.html#" class="menu-link px-3">New Contact</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3 py-3">
															<a class="btn btn-primary btn-sm px-4" href="ecommerce.html#">Generate Reports</a>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Card body-->
										<div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
											<!--begin::Statistics-->
											<div class="px-9 mb-5">
												<!--begin::Statistics-->
												<div class="d-flex mb-2">
													<span class="fs-4 fw-semibold text-gray-400 me-1">$</span>
													<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">14,094</span>
												</div>
												<!--end::Statistics-->
												<!--begin::Description-->
												<span class="fs-6 fw-semibold text-gray-400">Another $48,346 to Goal</span>
												<!--end::Description-->
											</div>
											<!--end::Statistics-->
											<!--begin::Chart-->
											<div id="kt_charts_widget_3" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
											<!--end::Chart-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Chart widget 3-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row gy-5 g-xl-10">
								<!--begin::Col-->
								<div class="col-xl-6 mb-xl-10">
									<!--begin::Table widget 2-->
									<div class="card h-md-100">
										<!--begin::Header-->
										<div class="card-header align-items-center border-0">
											<!--begin::Title-->
											<h3 class="fw-bold text-gray-900 m-0">Recent Orders</h3>
											<!--end::Title-->
											<!--begin::Menu-->
											<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
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
													<a href="ecommerce.html#" class="menu-link px-3">New Ticket</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="ecommerce.html#" class="menu-link px-3">New Customer</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
													<!--begin::Menu item-->
													<a href="ecommerce.html#" class="menu-link px-3">
														<span class="menu-title">New Group</span>
														<span class="menu-arrow"></span>
													</a>
													<!--end::Menu item-->
													<!--begin::Menu sub-->
													<div class="menu-sub menu-sub-dropdown w-175px py-4">
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="ecommerce.html#" class="menu-link px-3">Admin Group</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="ecommerce.html#" class="menu-link px-3">Staff Group</a>
														</div>
														<!--end::Menu item-->
														<!--begin::Menu item-->
														<div class="menu-item px-3">
															<a href="ecommerce.html#" class="menu-link px-3">Member Group</a>
														</div>
														<!--end::Menu item-->
													</div>
													<!--end::Menu sub-->
												</div>
												<!--end::Menu item-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<a href="ecommerce.html#" class="menu-link px-3">New Contact</a>
												</div>
												<!--end::Menu item-->
												<!--begin::Menu separator-->
												<div class="separator mt-3 opacity-75"></div>
												<!--end::Menu separator-->
												<!--begin::Menu item-->
												<div class="menu-item px-3">
													<div class="menu-content px-3 py-3">
														<a class="btn btn-primary btn-sm px-4" href="ecommerce.html#">Generate Reports</a>
													</div>
												</div>
												<!--end::Menu item-->
											</div>
											<!--end::Menu 2-->
											<!--end::Menu-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body pt-2">
											<!--begin::Nav-->
											<ul class="nav nav-pills nav-pills-custom mb-3">
												<!--begin::Item-->
												<li class="nav-item mb-3 me-3 me-lg-6">
													<!--begin::Link-->
													<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden active w-80px h-85px py-4" data-bs-toggle="pill" href="ecommerce.html#kt_stats_widget_2_tab_1">
														<!--begin::Icon-->
														<div class="nav-icon">
															<img alt="" src="{{ asset('public/admin/') }}/media/svg/products-categories/t-shirt.svg" class="" />
														</div>
														<!--end::Icon-->
														<!--begin::Subtitle-->
														<span class="nav-text text-gray-700 fw-bold fs-6 lh-1">T-shirt</span>
														<!--end::Subtitle-->
														<!--begin::Bullet-->
														<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
														<!--end::Bullet-->
													</a>
													<!--end::Link-->
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="nav-item mb-3 me-3 me-lg-6">
													<!--begin::Link-->
													<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="ecommerce.html#kt_stats_widget_2_tab_2">
														<!--begin::Icon-->
														<div class="nav-icon">
															<img alt="" src="{{ asset('public/admin/') }}/media/svg/products-categories/gaming.svg" class="" />
														</div>
														<!--end::Icon-->
														<!--begin::Subtitle-->
														<span class="nav-text text-gray-700 fw-bold fs-6 lh-1">Gaming</span>
														<!--end::Subtitle-->
														<!--begin::Bullet-->
														<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
														<!--end::Bullet-->
													</a>
													<!--end::Link-->
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="nav-item mb-3 me-3 me-lg-6">
													<!--begin::Link-->
													<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="ecommerce.html#kt_stats_widget_2_tab_3">
														<!--begin::Icon-->
														<div class="nav-icon">
															<img alt="" src="{{ asset('public/admin/') }}/media/svg/products-categories/watch.svg" class="" />
														</div>
														<!--end::Icon-->
														<!--begin::Subtitle-->
														<span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Watch</span>
														<!--end::Subtitle-->
														<!--begin::Bullet-->
														<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
														<!--end::Bullet-->
													</a>
													<!--end::Link-->
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="nav-item mb-3 me-3 me-lg-6">
													<!--begin::Link-->
													<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="ecommerce.html#kt_stats_widget_2_tab_4">
														<!--begin::Icon-->
														<div class="nav-icon">
															<img alt="" src="{{ asset('public/admin/') }}/media/svg/products-categories/gloves.svg" class="nav-icon" />
														</div>
														<!--end::Icon-->
														<!--begin::Subtitle-->
														<span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Gloves</span>
														<!--end::Subtitle-->
														<!--begin::Bullet-->
														<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
														<!--end::Bullet-->
													</a>
													<!--end::Link-->
												</li>
												<!--end::Item-->
												<!--begin::Item-->
												<li class="nav-item mb-3">
													<!--begin::Link-->
													<a class="nav-link d-flex justify-content-between flex-column flex-center overflow-hidden w-80px h-85px py-4" data-bs-toggle="pill" href="ecommerce.html#kt_stats_widget_2_tab_5">
														<!--begin::Icon-->
														<div class="nav-icon">
															<img alt="" src="{{ asset('public/admin/') }}/media/svg/products-categories/shoes.svg" class="nav-icon" />
														</div>
														<!--end::Icon-->
														<!--begin::Subtitle-->
														<span class="nav-text text-gray-600 fw-bold fs-6 lh-1">Shoes</span>
														<!--end::Subtitle-->
														<!--begin::Bullet-->
														<span class="bullet-custom position-absolute bottom-0 w-100 h-4px bg-primary"></span>
														<!--end::Bullet-->
													</a>
													<!--end::Link-->
												</li>
												<!--end::Item-->
											</ul>
											<!--end::Nav-->
											<!--begin::Tab Content-->
											<div class="tab-content">
												<!--begin::Tap pane-->
												<div class="tab-pane fade show active" id="kt_stats_widget_2_tab_1">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																	<th class="ps-0 w-50px">ITEM</th>
																	<th class="min-w-125px"></th>
																	<th class="text-end min-w-100px">QTY</th>
																	<th class="pe-0 text-end min-w-100px">PRICE</th>
																	<th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<img src="{{ asset('public/admin/') }}/media/stock/ecommerce/210.gif" class="w-50px ms-n1" alt="" />
																	</td>
																	<td class="ps-0">
																		<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1802</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2347</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$72.00</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$126.00</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="{{ asset('public/admin/') }}/media/stock/ecommerce/215.gif" class="w-50px ms-n1" alt="" />
																	</td>
																	<td class="ps-0">
																		<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1321</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$45.00</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$76.00</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="{{ asset('public/admin/') }}/media/stock/ecommerce/209.gif" class="w-50px ms-n1" alt="" />
																	</td>
																	<td class="ps-0">
																		<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-4312</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$84.00</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$168.00</span>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Table container-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_stats_widget_2_tab_2">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																	<th class="ps-0 w-50px">ITEM</th>
																	<th class="min-w-125px"></th>
																	<th class="text-end min-w-100px">QTY</th>
																	<th class="pe-0 text-end min-w-100px">PRICE</th>
																	<th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<img src="{{ asset('public/admin/') }}/media/stock/ecommerce/197.gif" class="w-50px ms-n1" alt="" />
																	</td>
																	<td class="ps-0">
																		<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1802</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-4312</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$32.00</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$312.00</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="{{ asset('public/admin/') }}/media/stock/ecommerce/178.gif" class="w-50px ms-n1" alt="" />
																	</td>
																	<td class="ps-0">
																		<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-3122</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$53.00</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$62.00</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="https://preview.keenthemes.com/metronic8/demo15/assets/media/stock/ecommerce/22.gif" class="w-50px ms-n1" alt="" />
																	</td>
																	<td class="ps-0">
																		<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1142</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$74.00</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$139.00</span>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Table container-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_stats_widget_2_tab_3">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																	<th class="ps-0 w-50px">ITEM</th>
																	<th class="min-w-125px"></th>
																	<th class="text-end min-w-100px">QTY</th>
																	<th class="pe-0 text-end min-w-100px">PRICE</th>
																	<th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<img src="https://preview.keenthemes.com/metronic8/demo15/assets/media/stock/ecommerce/1.gif" class="w-50px ms-n1" alt="" />
																	</td>
																	<td class="ps-0">
																		<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 1324</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1523</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$43.00</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$231.00</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="https://preview.keenthemes.com/metronic8/demo15/assets/media/stock/ecommerce/24.gif" class="w-50px ms-n1" alt="" />
																	</td>
																	<td class="ps-0">
																		<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-5314</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$71.00</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$53.00</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="https://preview.keenthemes.com/metronic8/demo15/assets/media/stock/ecommerce/71.gif" class="w-50px ms-n1" alt="" />
																	</td>
																	<td class="ps-0">
																		<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-4222</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$23.00</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$213.00</span>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Table container-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_stats_widget_2_tab_4">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																	<th class="ps-0 w-50px">ITEM</th>
																	<th class="min-w-125px"></th>
																	<th class="text-end min-w-100px">QTY</th>
																	<th class="pe-0 text-end min-w-100px">PRICE</th>
																	<th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<img src="https://preview.keenthemes.com/metronic8/demo15/assets/media/stock/ecommerce/41.gif" class="w-50px ms-n1" alt="" />
																	</td>
																	<td class="ps-0">
																		<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Elephant 2635</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1523</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$65.00</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$163.00</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="{{ asset('public/admin/') }}/media/stock/ecommerce/63.gif" class="w-50px ms-n1" alt="" />
																	</td>
																	<td class="ps-0">
																		<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Red Laga</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2745</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$64.00</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$73.00</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="{{ asset('public/admin/') }}/media/stock/ecommerce/59.gif" class="w-50px ms-n1" alt="" />
																	</td>
																	<td class="ps-0">
																		<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">RiseUP</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-5173</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$54.00</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$173.00</span>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Table container-->
												</div>
												<!--end::Tap pane-->
												<!--begin::Tap pane-->
												<div class="tab-pane fade" id="kt_stats_widget_2_tab_5">
													<!--begin::Table container-->
													<div class="table-responsive">
														<!--begin::Table-->
														<table class="table table-row-dashed align-middle gs-0 gy-4 my-0">
															<!--begin::Table head-->
															<thead>
																<tr class="fs-7 fw-bold text-gray-500 border-bottom-0">
																	<th class="ps-0 w-50px">ITEM</th>
																	<th class="min-w-125px"></th>
																	<th class="text-end min-w-100px">QTY</th>
																	<th class="pe-0 text-end min-w-100px">PRICE</th>
																	<th class="pe-0 text-end min-w-100px">TOTAL PRICE</th>
																</tr>
															</thead>
															<!--end::Table head-->
															<!--begin::Table body-->
															<tbody>
																<tr>
																	<td>
																		<img src="https://preview.keenthemes.com/metronic8/demo15/assets/media/stock/ecommerce/10.gif" class="w-50px ms-n1" alt="" />
																	</td>
																	<td class="ps-0">
																		<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Nike</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2163</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x1</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$64.00</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$287.00</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="{{ asset('public/admin/') }}/media/stock/ecommerce/96.gif" class="w-50px ms-n1" alt="" />
																	</td>
																	<td class="ps-0">
																		<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Adidas</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-2162</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x2</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$76.00</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$51.00</span>
																	</td>
																</tr>
																<tr>
																	<td>
																		<img src="https://preview.keenthemes.com/metronic8/demo15/assets/media/stock/ecommerce/13.gif" class="w-50px ms-n1" alt="" />
																	</td>
																	<td class="ps-0">
																		<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 fw-bold text-hover-primary mb-1 fs-6 text-start pe-0">Puma</a>
																		<span class="text-gray-400 fw-semibold fs-7 d-block text-start ps-0">Item: #XDG-1537</span>
																	</td>
																	<td>
																		<span class="text-gray-800 fw-bold d-block fs-6 ps-0 text-end">x3</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$27.00</span>
																	</td>
																	<td class="text-end pe-0">
																		<span class="text-gray-800 fw-bold d-block fs-6">$167.00</span>
																	</td>
																</tr>
															</tbody>
															<!--end::Table body-->
														</table>
														<!--end::Table-->
													</div>
													<!--end::Table container-->
												</div>
												<!--end::Tap pane-->
											</div>
											<!--end::Tab Content-->
										</div>
										<!--end: Card Body-->
									</div>
									<!--end::Table widget 2-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-6 mb-5 mb-xl-10">
									<!--begin::Chart widget 4-->
									<div class="card card-flush overflow-hidden h-md-100">
										<!--begin::Header-->
										<div class="card-header py-5">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-dark">Discounted Product Sales</span>
												<span class="text-gray-400 mt-1 fw-semibold fs-6">Users from all channels</span>
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<!--begin::Menu-->
												<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
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
														<a href="ecommerce.html#" class="menu-link px-3">New Ticket</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="ecommerce.html#" class="menu-link px-3">New Customer</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
														<!--begin::Menu item-->
														<a href="ecommerce.html#" class="menu-link px-3">
															<span class="menu-title">New Group</span>
															<span class="menu-arrow"></span>
														</a>
														<!--end::Menu item-->
														<!--begin::Menu sub-->
														<div class="menu-sub menu-sub-dropdown w-175px py-4">
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="ecommerce.html#" class="menu-link px-3">Admin Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="ecommerce.html#" class="menu-link px-3">Staff Group</a>
															</div>
															<!--end::Menu item-->
															<!--begin::Menu item-->
															<div class="menu-item px-3">
																<a href="ecommerce.html#" class="menu-link px-3">Member Group</a>
															</div>
															<!--end::Menu item-->
														</div>
														<!--end::Menu sub-->
													</div>
													<!--end::Menu item-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<a href="ecommerce.html#" class="menu-link px-3">New Contact</a>
													</div>
													<!--end::Menu item-->
													<!--begin::Menu separator-->
													<div class="separator mt-3 opacity-75"></div>
													<!--end::Menu separator-->
													<!--begin::Menu item-->
													<div class="menu-item px-3">
														<div class="menu-content px-3 py-3">
															<a class="btn btn-primary btn-sm px-4" href="ecommerce.html#">Generate Reports</a>
														</div>
													</div>
													<!--end::Menu item-->
												</div>
												<!--end::Menu 2-->
												<!--end::Menu-->
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Card body-->
										<div class="card-body d-flex justify-content-between flex-column pb-1 px-0">
											<!--begin::Info-->
											<div class="px-9 mb-5">
												<!--begin::Statistics-->
												<div class="d-flex align-items-center mb-2">
													<!--begin::Currency-->
													<span class="fs-4 fw-semibold text-gray-400 align-self-start me-1">$</span>
													<!--end::Currency-->
													<!--begin::Value-->
													<span class="fs-2hx fw-bold text-gray-800 me-2 lh-1 ls-n2">3,706</span>
													<!--end::Value-->
													<!--begin::Label-->
													<span class="badge badge-light-success fs-base">
													<!--begin::Svg Icon | path: icons/duotune/arrows/arr065.svg-->
													<span class="svg-icon svg-icon-5 svg-icon-success ms-n1">
														<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
															<rect opacity="0.5" x="11" y="18" width="13" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
															<path d="M11.4343 15.4343L7.25 11.25C6.83579 10.8358 6.16421 10.8358 5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75L11.2929 18.2929C11.6834 18.6834 12.3166 18.6834 12.7071 18.2929L18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25C17.8358 10.8358 17.1642 10.8358 16.75 11.25L12.5657 15.4343C12.2533 15.7467 11.7467 15.7467 11.4343 15.4343Z" fill="currentColor" />
														</svg>
													</span>
													<!--end::Svg Icon-->4.5%</span>
													<!--end::Label-->
												</div>
												<!--end::Statistics-->
												<!--begin::Description-->
												<span class="fs-6 fw-semibold text-gray-400">Total Discounted Sales This Month</span>
												<!--end::Description-->
											</div>
											<!--end::Info-->
											<!--begin::Chart-->
											<div id="kt_charts_widget_4" class="min-h-auto ps-4 pe-6" style="height: 300px"></div>
											<!--end::Chart-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Chart widget 4-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row gy-5 g-xl-10">
								<!--begin::Col-->
								<div class="col-xl-4 mb-xl-10">
									<!--begin::Engage widget 1-->
									<div class="card h-md-100" dir="ltr">
										<!--begin::Body-->
										<div class="card-body d-flex flex-column flex-center">
											<!--begin::Heading-->
											<div class="mb-2">
												<!--begin::Title-->
												<h1 class="fw-semibold text-gray-800 text-center lh-lg">Have you tried 
												<br />new 
												<span class="fw-bolder">eCommerce App ?</span></h1>
												<!--end::Title-->
												<!--begin::Illustration-->
												<div class="py-10 text-center">
													<img src="{{ asset('public/admin/') }}/media/svg/illustrations/easy/2.svg" class="theme-light-show w-200px" alt="" />
													<img src="{{ asset('public/admin/') }}/media/svg/illustrations/easy/2-dark.svg" class="theme-dark-show w-200px" alt="" />
												</div>
												<!--end::Illustration-->
											</div>
											<!--end::Heading-->
											<!--begin::Links-->
											<div class="text-center mb-1">
												<!--begin::Link-->
												<a class="btn btn-sm btn-primary me-2" href="../apps/ecommerce/sales/listing.html">View App</a>
												<!--end::Link-->
												<!--begin::Link-->
												<a class="btn btn-sm btn-light" href="../apps/ecommerce/catalog/add-product.html">New Product</a>
												<!--end::Link-->
											</div>
											<!--end::Links-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::Engage widget 1-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-8 mb-5 mb-xl-10">
									<!--begin::Table Widget 4-->
									<div class="card card-flush h-xl-100">
										<!--begin::Card header-->
										<div class="card-header pt-7">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-gray-800">Product Orders</span>
												<span class="text-gray-400 mt-1 fw-semibold fs-6">Avg. 57 orders per day</span>
											</h3>
											<!--end::Title-->
											<!--begin::Actions-->
											<div class="card-toolbar">
												<!--begin::Filters-->
												<div class="d-flex flex-stack flex-wrap gap-4">
													<!--begin::Destination-->
													<div class="d-flex align-items-center fw-bold">
														<!--begin::Label-->
														<div class="text-gray-400 fs-7 me-2">Cateogry</div>
														<!--end::Label-->
														<!--begin::Select-->
														<select class="form-select form-select-transparent text-graY-800 fs-base lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
															<option></option>
															<option value="Show All" selected="selected">Show All</option>
															<option value="a">Category A</option>
															<option value="b">Category A</option>
														</select>
														<!--end::Select-->
													</div>
													<!--end::Destination-->
													<!--begin::Status-->
													<div class="d-flex align-items-center fw-bold">
														<!--begin::Label-->
														<div class="text-gray-400 fs-7 me-2">Status</div>
														<!--end::Label-->
														<!--begin::Select-->
														<select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-4="filter_status">
															<option></option>
															<option value="Show All" selected="selected">Show All</option>
															<option value="Shipped">Shipped</option>
															<option value="Confirmed">Confirmed</option>
															<option value="Rejected">Rejected</option>
															<option value="Pending">Pending</option>
														</select>
														<!--end::Select-->
													</div>
													<!--end::Status-->
													<!--begin::Search-->
													<div class="position-relative my-1">
														<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
														<span class="svg-icon svg-icon-2 position-absolute top-50 translate-middle-y ms-4">
															<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
																<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
															</svg>
														</span>
														<!--end::Svg Icon-->
														<input type="text" data-kt-table-widget-4="search" class="form-control w-150px fs-7 ps-12" placeholder="Search" />
													</div>
													<!--end::Search-->
												</div>
												<!--begin::Filters-->
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body pt-2">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_4_table">
												<!--begin::Table head-->
												<thead>
													<!--begin::Table row-->
													<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
														<th class="min-w-100px">Order ID</th>
														<th class="text-end min-w-100px">Created</th>
														<th class="text-end min-w-125px">Customer</th>
														<th class="text-end min-w-100px">Total</th>
														<th class="text-end min-w-100px">Profit</th>
														<th class="text-end min-w-50px">Status</th>
														<th class="text-end"></th>
													</tr>
													<!--end::Table row-->
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody class="fw-bold text-gray-600">
													<tr data-kt-table-widget-4="subtable_template" class="d-none">
														<td colspan="2">
															<div class="d-flex align-items-center gap-3">
																<a href="ecommerce.html#" class="symbol symbol-50px bg-secondary bg-opacity-25 rounded">
																	<img src="ecommerce.html" data-kt-src-path="/metronic8/demo15/assets/media/stock/ecommerce/" alt="" data-kt-table-widget-4="template_image" />
																</a>
																<div class="d-flex flex-column text-muted">
																	<a href="ecommerce.html#" class="text-gray-800 text-hover-primary fw-bold" data-kt-table-widget-4="template_name">Product name</a>
																	<div class="fs-7" data-kt-table-widget-4="template_description">Product description</div>
																</div>
															</div>
														</td>
														<td class="text-end">
															<div class="text-gray-800 fs-7">Cost</div>
															<div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_cost">1</div>
														</td>
														<td class="text-end">
															<div class="text-gray-800 fs-7">Qty</div>
															<div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_qty">1</div>
														</td>
														<td class="text-end">
															<div class="text-gray-800 fs-7">Total</div>
															<div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_total">name</div>
														</td>
														<td class="text-end">
															<div class="text-gray-800 fs-7 me-3">On hand</div>
															<div class="text-muted fs-7 fw-bold" data-kt-table-widget-4="template_stock">32</div>
														</td>
														<td></td>
													</tr>
													<tr>
														<td>
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGY-346</a>
														</td>
														<td class="text-end">7 min ago</td>
														<td class="text-end">
															<a href="ecommerce.html#" class="text-gray-600 text-hover-primary">Albert Flores</a>
														</td>
														<td class="text-end">$630.00</td>
														<td class="text-end">
															<span class="text-gray-800 fw-bolder">$86.70</span>
														</td>
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
														</td>
														<td class="text-end">
															<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
																<span class="svg-icon svg-icon-3 m-0 toggle-off">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																		<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
																<span class="svg-icon svg-icon-3 m-0 toggle-on">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#YHD-047</a>
														</td>
														<td class="text-end">52 min ago</td>
														<td class="text-end">
															<a href="ecommerce.html#" class="text-gray-600 text-hover-primary">Jenny Wilson</a>
														</td>
														<td class="text-end">$25.00</td>
														<td class="text-end">
															<span class="text-gray-800 fw-bolder">$4.20</span>
														</td>
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-primary">Confirmed</span>
														</td>
														<td class="text-end">
															<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
																<span class="svg-icon svg-icon-3 m-0 toggle-off">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																		<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
																<span class="svg-icon svg-icon-3 m-0 toggle-on">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SRR-678</a>
														</td>
														<td class="text-end">1 hour ago</td>
														<td class="text-end">
															<a href="ecommerce.html#" class="text-gray-600 text-hover-primary">Robert Fox</a>
														</td>
														<td class="text-end">$1,630.00</td>
														<td class="text-end">
															<span class="text-gray-800 fw-bolder">$203.90</span>
														</td>
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-warning">Pending</span>
														</td>
														<td class="text-end">
															<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
																<span class="svg-icon svg-icon-3 m-0 toggle-off">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																		<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
																<span class="svg-icon svg-icon-3 m-0 toggle-on">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#PXF-534</a>
														</td>
														<td class="text-end">3 hour ago</td>
														<td class="text-end">
															<a href="ecommerce.html#" class="text-gray-600 text-hover-primary">Cody Fisher</a>
														</td>
														<td class="text-end">$119.00</td>
														<td class="text-end">
															<span class="text-gray-800 fw-bolder">$12.00</span>
														</td>
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
														</td>
														<td class="text-end">
															<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
																<span class="svg-icon svg-icon-3 m-0 toggle-off">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																		<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
																<span class="svg-icon svg-icon-3 m-0 toggle-on">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#XGD-249</a>
														</td>
														<td class="text-end">2 day ago</td>
														<td class="text-end">
															<a href="ecommerce.html#" class="text-gray-600 text-hover-primary">Arlene McCoy</a>
														</td>
														<td class="text-end">$660.00</td>
														<td class="text-end">
															<span class="text-gray-800 fw-bolder">$52.26</span>
														</td>
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
														</td>
														<td class="text-end">
															<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
																<span class="svg-icon svg-icon-3 m-0 toggle-off">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																		<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
																<span class="svg-icon svg-icon-3 m-0 toggle-on">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-035</a>
														</td>
														<td class="text-end">2 day ago</td>
														<td class="text-end">
															<a href="ecommerce.html#" class="text-gray-600 text-hover-primary">Eleanor Pena</a>
														</td>
														<td class="text-end">$290.00</td>
														<td class="text-end">
															<span class="text-gray-800 fw-bolder">$29.00</span>
														</td>
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-danger">Rejected</span>
														</td>
														<td class="text-end">
															<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
																<span class="svg-icon svg-icon-3 m-0 toggle-off">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																		<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
																<span class="svg-icon svg-icon-3 m-0 toggle-on">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</button>
														</td>
													</tr>
													<tr>
														<td>
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary">#SKP-567</a>
														</td>
														<td class="text-end">7 min ago</td>
														<td class="text-end">
															<a href="ecommerce.html#" class="text-gray-600 text-hover-primary">Dan Wilson</a>
														</td>
														<td class="text-end">$590.00</td>
														<td class="text-end">
															<span class="text-gray-800 fw-bolder">$50.00</span>
														</td>
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-success">Shipped</span>
														</td>
														<td class="text-end">
															<button type="button" class="btn btn-sm btn-icon btn-light btn-active-light-primary toggle h-25px w-25px" data-kt-table-widget-4="expand_row">
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr087.svg-->
																<span class="svg-icon svg-icon-3 m-0 toggle-off">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect opacity="0.5" x="11" y="18" width="12" height="2" rx="1" transform="rotate(-90 11 18)" fill="currentColor" />
																		<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
																<!--begin::Svg Icon | path: icons/duotune/arrows/arr089.svg-->
																<span class="svg-icon svg-icon-3 m-0 toggle-on">
																	<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
																		<rect x="6" y="11" width="12" height="2" rx="1" fill="currentColor" />
																	</svg>
																</span>
																<!--end::Svg Icon-->
															</button>
														</td>
													</tr>
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Table Widget 4-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
							<!--begin::Row-->
							<div class="row gy-5 g-xl-10">
								<!--begin::Col-->
								<div class="col-xl-4">
									<!--begin::List widget 5-->
									<div class="card card-flush h-xl-100">
										<!--begin::Header-->
										<div class="card-header pt-7">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-dark">Product Delivery</span>
												<span class="text-gray-400 mt-1 fw-semibold fs-6">1M Products Shipped so far</span>
											</h3>
											<!--end::Title-->
											<!--begin::Toolbar-->
											<div class="card-toolbar">
												<a href="../apps/ecommerce/sales/details.html" class="btn btn-sm btn-light">Order Details</a>
											</div>
											<!--end::Toolbar-->
										</div>
										<!--end::Header-->
										<!--begin::Body-->
										<div class="card-body">
											<!--begin::Scroll-->
											<div class="hover-scroll-overlay-y pe-6 me-n6" style="height: 415px">
												<!--begin::Item-->
												<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
													<!--begin::Info-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Wrapper-->
														<div class="me-3">
															<!--begin::Icon-->
															<img src="{{ asset('public/admin/') }}/media/stock/ecommerce/210.gif" class="w-50px ms-n1 me-1" alt="" />
															<!--end::Icon-->
															<!--begin::Title-->
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">Elephant 1802</a>
															<!--end::Title-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Action-->
														<div class="m-0">
															<!--begin::Menu-->
															<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
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
																	<a href="ecommerce.html#" class="menu-link px-3">New Ticket</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="ecommerce.html#" class="menu-link px-3">New Customer</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																	<!--begin::Menu item-->
																	<a href="ecommerce.html#" class="menu-link px-3">
																		<span class="menu-title">New Group</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--end::Menu item-->
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Admin Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Staff Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Member Group</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="ecommerce.html#" class="menu-link px-3">New Contact</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mt-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3 py-3">
																		<a class="btn btn-primary btn-sm px-4" href="ecommerce.html#">Generate Reports</a>
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 2-->
															<!--end::Menu-->
														</div>
														<!--end::Action-->
													</div>
													<!--end::Info-->
													<!--begin::Customer-->
													<div class="d-flex flex-stack">
														<!--begin::Name-->
														<span class="text-gray-400 fw-bold">To: 
														<a href="../apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Jason Bourne</a></span>
														<!--end::Name-->
														<!--begin::Label-->
														<span class="badge badge-light-success">Delivered</span>
														<!--end::Label-->
													</div>
													<!--end::Customer-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
													<!--begin::Info-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Wrapper-->
														<div class="me-3">
															<!--begin::Icon-->
															<img src="{{ asset('public/admin/') }}/media/stock/ecommerce/209.gif" class="w-50px ms-n1 me-1" alt="" />
															<!--end::Icon-->
															<!--begin::Title-->
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
															<!--end::Title-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Action-->
														<div class="m-0">
															<!--begin::Menu-->
															<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
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
																	<a href="ecommerce.html#" class="menu-link px-3">New Ticket</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="ecommerce.html#" class="menu-link px-3">New Customer</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																	<!--begin::Menu item-->
																	<a href="ecommerce.html#" class="menu-link px-3">
																		<span class="menu-title">New Group</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--end::Menu item-->
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Admin Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Staff Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Member Group</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="ecommerce.html#" class="menu-link px-3">New Contact</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mt-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3 py-3">
																		<a class="btn btn-primary btn-sm px-4" href="ecommerce.html#">Generate Reports</a>
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 2-->
															<!--end::Menu-->
														</div>
														<!--end::Action-->
													</div>
													<!--end::Info-->
													<!--begin::Customer-->
													<div class="d-flex flex-stack">
														<!--begin::Name-->
														<span class="text-gray-400 fw-bold">To: 
														<a href="../apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Marie Durant</a></span>
														<!--end::Name-->
														<!--begin::Label-->
														<span class="badge badge-light-primary">Shipping</span>
														<!--end::Label-->
													</div>
													<!--end::Customer-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
													<!--begin::Info-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Wrapper-->
														<div class="me-3">
															<!--begin::Icon-->
															<img src="{{ asset('public/admin/') }}/media/stock/ecommerce/214.gif" class="w-50px ms-n1 me-1" alt="" />
															<!--end::Icon-->
															<!--begin::Title-->
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">Yellow Stone</a>
															<!--end::Title-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Action-->
														<div class="m-0">
															<!--begin::Menu-->
															<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
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
																	<a href="ecommerce.html#" class="menu-link px-3">New Ticket</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="ecommerce.html#" class="menu-link px-3">New Customer</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																	<!--begin::Menu item-->
																	<a href="ecommerce.html#" class="menu-link px-3">
																		<span class="menu-title">New Group</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--end::Menu item-->
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Admin Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Staff Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Member Group</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="ecommerce.html#" class="menu-link px-3">New Contact</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mt-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3 py-3">
																		<a class="btn btn-primary btn-sm px-4" href="ecommerce.html#">Generate Reports</a>
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 2-->
															<!--end::Menu-->
														</div>
														<!--end::Action-->
													</div>
													<!--end::Info-->
													<!--begin::Customer-->
													<div class="d-flex flex-stack">
														<!--begin::Name-->
														<span class="text-gray-400 fw-bold">To: 
														<a href="../apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Dan Wilson</a></span>
														<!--end::Name-->
														<!--begin::Label-->
														<span class="badge badge-light-danger">Confirmed</span>
														<!--end::Label-->
													</div>
													<!--end::Customer-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
													<!--begin::Info-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Wrapper-->
														<div class="me-3">
															<!--begin::Icon-->
															<img src="{{ asset('public/admin/') }}/media/stock/ecommerce/211.gif" class="w-50px ms-n1 me-1" alt="" />
															<!--end::Icon-->
															<!--begin::Title-->
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">Elephant 1802</a>
															<!--end::Title-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Action-->
														<div class="m-0">
															<!--begin::Menu-->
															<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
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
																	<a href="ecommerce.html#" class="menu-link px-3">New Ticket</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="ecommerce.html#" class="menu-link px-3">New Customer</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																	<!--begin::Menu item-->
																	<a href="ecommerce.html#" class="menu-link px-3">
																		<span class="menu-title">New Group</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--end::Menu item-->
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Admin Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Staff Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Member Group</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="ecommerce.html#" class="menu-link px-3">New Contact</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mt-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3 py-3">
																		<a class="btn btn-primary btn-sm px-4" href="ecommerce.html#">Generate Reports</a>
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 2-->
															<!--end::Menu-->
														</div>
														<!--end::Action-->
													</div>
													<!--end::Info-->
													<!--begin::Customer-->
													<div class="d-flex flex-stack">
														<!--begin::Name-->
														<span class="text-gray-400 fw-bold">To: 
														<a href="../apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Lebron Wayde</a></span>
														<!--end::Name-->
														<!--begin::Label-->
														<span class="badge badge-light-success">Delivered</span>
														<!--end::Label-->
													</div>
													<!--end::Customer-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="border border-dashed border-gray-300 rounded px-7 py-3 mb-6">
													<!--begin::Info-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Wrapper-->
														<div class="me-3">
															<!--begin::Icon-->
															<img src="{{ asset('public/admin/') }}/media/stock/ecommerce/215.gif" class="w-50px ms-n1 me-1" alt="" />
															<!--end::Icon-->
															<!--begin::Title-->
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">RiseUP</a>
															<!--end::Title-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Action-->
														<div class="m-0">
															<!--begin::Menu-->
															<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
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
																	<a href="ecommerce.html#" class="menu-link px-3">New Ticket</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="ecommerce.html#" class="menu-link px-3">New Customer</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																	<!--begin::Menu item-->
																	<a href="ecommerce.html#" class="menu-link px-3">
																		<span class="menu-title">New Group</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--end::Menu item-->
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Admin Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Staff Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Member Group</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="ecommerce.html#" class="menu-link px-3">New Contact</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mt-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3 py-3">
																		<a class="btn btn-primary btn-sm px-4" href="ecommerce.html#">Generate Reports</a>
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 2-->
															<!--end::Menu-->
														</div>
														<!--end::Action-->
													</div>
													<!--end::Info-->
													<!--begin::Customer-->
													<div class="d-flex flex-stack">
														<!--begin::Name-->
														<span class="text-gray-400 fw-bold">To: 
														<a href="../apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Ana Simmons</a></span>
														<!--end::Name-->
														<!--begin::Label-->
														<span class="badge badge-light-primary">Shipping</span>
														<!--end::Label-->
													</div>
													<!--end::Customer-->
												</div>
												<!--end::Item-->
												<!--begin::Item-->
												<div class="border border-dashed border-gray-300 rounded px-7 py-3">
													<!--begin::Info-->
													<div class="d-flex flex-stack mb-3">
														<!--begin::Wrapper-->
														<div class="me-3">
															<!--begin::Icon-->
															<img src="{{ asset('public/admin/') }}/media/stock/ecommerce/192.gif" class="w-50px ms-n1 me-1" alt="" />
															<!--end::Icon-->
															<!--begin::Title-->
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-gray-800 text-hover-primary fw-bold">Yellow Stone</a>
															<!--end::Title-->
														</div>
														<!--end::Wrapper-->
														<!--begin::Action-->
														<div class="m-0">
															<!--begin::Menu-->
															<button class="btn btn-icon btn-color-gray-400 btn-active-color-primary justify-content-end" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
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
																	<a href="ecommerce.html#" class="menu-link px-3">New Ticket</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="ecommerce.html#" class="menu-link px-3">New Customer</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3" data-kt-menu-trigger="hover" data-kt-menu-placement="right-start">
																	<!--begin::Menu item-->
																	<a href="ecommerce.html#" class="menu-link px-3">
																		<span class="menu-title">New Group</span>
																		<span class="menu-arrow"></span>
																	</a>
																	<!--end::Menu item-->
																	<!--begin::Menu sub-->
																	<div class="menu-sub menu-sub-dropdown w-175px py-4">
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Admin Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Staff Group</a>
																		</div>
																		<!--end::Menu item-->
																		<!--begin::Menu item-->
																		<div class="menu-item px-3">
																			<a href="ecommerce.html#" class="menu-link px-3">Member Group</a>
																		</div>
																		<!--end::Menu item-->
																	</div>
																	<!--end::Menu sub-->
																</div>
																<!--end::Menu item-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<a href="ecommerce.html#" class="menu-link px-3">New Contact</a>
																</div>
																<!--end::Menu item-->
																<!--begin::Menu separator-->
																<div class="separator mt-3 opacity-75"></div>
																<!--end::Menu separator-->
																<!--begin::Menu item-->
																<div class="menu-item px-3">
																	<div class="menu-content px-3 py-3">
																		<a class="btn btn-primary btn-sm px-4" href="ecommerce.html#">Generate Reports</a>
																	</div>
																</div>
																<!--end::Menu item-->
															</div>
															<!--end::Menu 2-->
															<!--end::Menu-->
														</div>
														<!--end::Action-->
													</div>
													<!--end::Info-->
													<!--begin::Customer-->
													<div class="d-flex flex-stack">
														<!--begin::Name-->
														<span class="text-gray-400 fw-bold">To: 
														<a href="../apps/ecommerce/sales/details.html" class="text-gray-800 text-hover-primary fw-bold">Kevin Leonard</a></span>
														<!--end::Name-->
														<!--begin::Label-->
														<span class="badge badge-light-danger">Confirmed</span>
														<!--end::Label-->
													</div>
													<!--end::Customer-->
												</div>
												<!--end::Item-->
											</div>
											<!--end::Scroll-->
										</div>
										<!--end::Body-->
									</div>
									<!--end::List widget 5-->
								</div>
								<!--end::Col-->
								<!--begin::Col-->
								<div class="col-xl-8">
									<!--begin::Table Widget 5-->
									<div class="card card-flush h-xl-100">
										<!--begin::Card header-->
										<div class="card-header pt-7">
											<!--begin::Title-->
											<h3 class="card-title align-items-start flex-column">
												<span class="card-label fw-bold text-dark">Stock Report</span>
												<span class="text-gray-400 mt-1 fw-semibold fs-6">Total 2,356 Items in the Stock</span>
											</h3>
											<!--end::Title-->
											<!--begin::Actions-->
											<div class="card-toolbar">
												<!--begin::Filters-->
												<div class="d-flex flex-stack flex-wrap gap-4">
													<!--begin::Destination-->
													<div class="d-flex align-items-center fw-bold">
														<!--begin::Label-->
														<div class="text-muted fs-7 me-2">Cateogry</div>
														<!--end::Label-->
														<!--begin::Select-->
														<select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option">
															<option></option>
															<option value="Show All" selected="selected">Show All</option>
															<option value="a">Category A</option>
															<option value="b">Category B</option>
														</select>
														<!--end::Select-->
													</div>
													<!--end::Destination-->
													<!--begin::Status-->
													<div class="d-flex align-items-center fw-bold">
														<!--begin::Label-->
														<div class="text-muted fs-7 me-2">Status</div>
														<!--end::Label-->
														<!--begin::Select-->
														<select class="form-select form-select-transparent text-dark fs-7 lh-1 fw-bold py-0 ps-3 w-auto" data-control="select2" data-hide-search="true" data-dropdown-css-class="w-150px" data-placeholder="Select an option" data-kt-table-widget-5="filter_status">
															<option></option>
															<option value="Show All" selected="selected">Show All</option>
															<option value="In Stock">In Stock</option>
															<option value="Out of Stock">Out of Stock</option>
															<option value="Low Stock">Low Stock</option>
														</select>
														<!--end::Select-->
													</div>
													<!--end::Status-->
													<!--begin::Search-->
													<a href="../apps/ecommerce/catalog/products.html" class="btn btn-light btn-sm">View Stock</a>
													<!--end::Search-->
												</div>
												<!--begin::Filters-->
											</div>
											<!--end::Actions-->
										</div>
										<!--end::Card header-->
										<!--begin::Card body-->
										<div class="card-body">
											<!--begin::Table-->
											<table class="table align-middle table-row-dashed fs-6 gy-3" id="kt_table_widget_5_table">
												<!--begin::Table head-->
												<thead>
													<!--begin::Table row-->
													<tr class="text-start text-gray-400 fw-bold fs-7 text-uppercase gs-0">
														<th class="min-w-100px">Item</th>
														<th class="text-end pe-3 min-w-100px">Product ID</th>
														<th class="text-end pe-3 min-w-150px">Date Added</th>
														<th class="text-end pe-3 min-w-100px">Price</th>
														<th class="text-end pe-3 min-w-50px">Status</th>
														<th class="text-end pe-0 min-w-25px">Qty</th>
													</tr>
													<!--end::Table row-->
												</thead>
												<!--end::Table head-->
												<!--begin::Table body-->
												<tbody class="fw-bold text-gray-600">
													<tr>
														<!--begin::Item-->
														<td>
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Macbook Air M1</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#XGY-356</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end">02 Apr, 2023</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$1,230</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="58">
															<span class="text-dark fw-bold">58 PCS</span>
														</td>
														<!--end::Qty-->
													</tr>
													<tr>
														<!--begin::Item-->
														<td>
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Surface Laptop 4</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#YHD-047</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end">01 Apr, 2023</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$1,060</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="0">
															<span class="text-dark fw-bold">0 PCS</span>
														</td>
														<!--end::Qty-->
													</tr>
													<tr>
														<!--begin::Item-->
														<td>
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Logitech MX 250</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#SRR-678</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end">24 Mar, 2023</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$64</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="290">
															<span class="text-dark fw-bold">290 PCS</span>
														</td>
														<!--end::Qty-->
													</tr>
													<tr>
														<!--begin::Item-->
														<td>
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">AudioEngine HD3</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#PXF-578</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end">24 Mar, 2023</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$1,060</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-danger">Out of Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="46">
															<span class="text-dark fw-bold">46 PCS</span>
														</td>
														<!--end::Qty-->
													</tr>
													<tr>
														<!--begin::Item-->
														<td>
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">HP Hyper LTR</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#PXF-778</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end">16 Jan, 2023</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$4500</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="78">
															<span class="text-dark fw-bold">78 PCS</span>
														</td>
														<!--end::Qty-->
													</tr>
													<tr>
														<!--begin::Item-->
														<td>
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Dell 32 UltraSharp</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#XGY-356</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end">22 Dec, 2023</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$1,060</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-warning">Low Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="8">
															<span class="text-dark fw-bold">8 PCS</span>
														</td>
														<!--end::Qty-->
													</tr>
													<tr>
														<!--begin::Item-->
														<td>
															<a href="../apps/ecommerce/catalog/edit-product.html" class="text-dark text-hover-primary">Google Pixel 6 Pro</a>
														</td>
														<!--end::Item-->
														<!--begin::Product ID-->
														<td class="text-end">#XVR-425</td>
														<!--end::Product ID-->
														<!--begin::Date added-->
														<td class="text-end">27 Dec, 2023</td>
														<!--end::Date added-->
														<!--begin::Price-->
														<td class="text-end">$1,060</td>
														<!--end::Price-->
														<!--begin::Status-->
														<td class="text-end">
															<span class="badge py-3 px-4 fs-7 badge-light-primary">In Stock</span>
														</td>
														<!--end::Status-->
														<!--begin::Qty-->
														<td class="text-end" data-order="124">
															<span class="text-dark fw-bold">124 PCS</span>
														</td>
														<!--end::Qty-->
													</tr>
												</tbody>
												<!--end::Table body-->
											</table>
											<!--end::Table-->
										</div>
										<!--end::Card body-->
									</div>
									<!--end::Table Widget 5-->
								</div>
								<!--end::Col-->
							</div>
							<!--end::Row-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
					<div class="footer py-4 d-flex flex-lg-column" id="kt_footer">
						<!--begin::Container-->
						<div class="container-fluid d-flex flex-column flex-md-row flex-stack">
							<!--begin::Copyright-->
							<div class="text-dark order-2 order-md-1">
								<span class="text-gray-400 fw-semibold me-1">Created by</span>
								<a href="#" class="text-muted text-hover-primary fw-semibold me-2 fs-6">Codzio</a>
							</div>
							<!--end::Copyright-->
							<!--begin::Menu-->
							<ul class="menu menu-gray-600 menu-hover-primary fw-semibold order-1">
								<li class="menu-item">
									<a href="{{ url('/') }}" target="_blank" class="menu-link px-2">Home</a>
								</li>
								<li class="menu-item">
									<a href="{{ url('/about-us') }}" target="_blank" class="menu-link px-2">About Us</a>
								</li>
								<li class="menu-item">
									<a href="{{ url('/about-us') }}" target="_blank" class="menu-link px-2">Contact Us</a>
								</li>
							</ul>
							<!--end::Menu-->
						</div>
						<!--end::Container-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->

			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotune/arrows/arr066.svg-->
			<span class="svg-icon">
				<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="currentColor" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="currentColor" />
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--begin::Modals-->
		<!--begin::Modal - View Users-->
		<div class="modal fade" id="kt_modal_view_users" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Heading-->
						<div class="text-center mb-13">
							<!--begin::Title-->
							<h1 class="mb-3">Browse Users</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="text-muted fw-semibold fs-5">If you need more info, please check out our 
							<a href="ecommerce.html#" class="link-primary fw-bold">Users Directory</a>.</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Users-->
						<div class="mb-15">
							<!--begin::List-->
							<div class="mh-375px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="ecommerce.html#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Smith 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Art Director</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$23,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="ecommerce.html#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Melody Macy 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Analytic</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">melody@altbox.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$50,500</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="ecommerce.html#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Max Smith 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Software Enginer</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">max@kt.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$75,900</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="ecommerce.html#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Sean Bean 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Web Developer</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">sean@dellito.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$10,500</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="ecommerce.html#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Brian Cox 
											<span class="badge badge-light fs-8 fw-semibold ms-2">UI/UX Designer</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">brian@exchange.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$20,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="ecommerce.html#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Mikaela Collins 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Head Of Marketing</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">mik@pex.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$9,300</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-9.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="ecommerce.html#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Francis Mitcham 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Software Arcitect</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$15,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="ecommerce.html#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Olivia Wild 
											<span class="badge badge-light fs-8 fw-semibold ms-2">System Admin</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">olivia@corpmail.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$23,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="ecommerce.html#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Neil Owen 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Account Manager</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$45,800</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-23.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="ecommerce.html#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Dan Wilson 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Web Desinger</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">dam@consilting.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$90,500</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="ecommerce.html#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Emma Bold 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Corporate Finance</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">emma@intenso.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$5,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-12.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="ecommerce.html#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Ana Crown 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Customer Relationship</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$70,000</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-5">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-6">
											<!--begin::Name-->
											<a href="ecommerce.html#" class="d-flex align-items-center fs-5 fw-bold text-dark text-hover-primary">Robert Doe 
											<span class="badge badge-light fs-8 fw-semibold ms-2">Marketing Executive</span></a>
											<!--end::Name-->
											<!--begin::Email-->
											<div class="fw-semibold text-muted">robert@benko.com</div>
											<!--end::Email-->
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Stats-->
									<div class="d-flex">
										<!--begin::Sales-->
										<div class="text-end">
											<div class="fs-5 fw-bold text-dark">$45,500</div>
											<div class="fs-7 text-muted">Sales</div>
										</div>
										<!--end::Sales-->
									</div>
									<!--end::Stats-->
								</div>
								<!--end::User-->
							</div>
							<!--end::List-->
						</div>
						<!--end::Users-->
						<!--begin::Notice-->
						<div class="d-flex justify-content-between">
							<!--begin::Label-->
							<div class="fw-semibold">
								<label class="fs-6">Adding Users by Team Members</label>
								<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
							</div>
							<!--end::Label-->
							<!--begin::Switch-->
							<label class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="" checked="checked" />
								<span class="form-check-label fw-semibold text-muted">Allowed</span>
							</label>
							<!--end::Switch-->
						</div>
						<!--end::Notice-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - View Users-->
		<!--begin::Modal - Users Search-->
		<div class="modal fade" id="kt_modal_users_search" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog modal-dialog-centered mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Content-->
						<div class="text-center mb-13">
							<h1 class="mb-3">Search Users</h1>
							<div class="text-muted fw-semibold fs-5">Invite Collaborators To Your Project</div>
						</div>
						<!--end::Content-->
						<!--begin::Search-->
						<div id="kt_modal_users_search_handler" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="inline">
							<!--begin::Form-->
							<form data-kt-search-element="form" class="w-100 position-relative mb-5" autocomplete="off">
								<!--begin::Hidden input(Added to disable form autocomplete)-->
								<input type="hidden" />
								<!--end::Hidden input-->
								<!--begin::Icon-->
								<!--begin::Svg Icon | path: icons/duotune/general/gen021.svg-->
								<span class="svg-icon svg-icon-2 svg-icon-lg-1 svg-icon-gray-500 position-absolute top-50 ms-5 translate-middle-y">
									<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
										<rect opacity="0.5" x="17.0365" y="15.1223" width="8.15546" height="2" rx="1" transform="rotate(45 17.0365 15.1223)" fill="currentColor" />
										<path d="M11 19C6.55556 19 3 15.4444 3 11C3 6.55556 6.55556 3 11 3C15.4444 3 19 6.55556 19 11C19 15.4444 15.4444 19 11 19ZM11 5C7.53333 5 5 7.53333 5 11C5 14.4667 7.53333 17 11 17C14.4667 17 17 14.4667 17 11C17 7.53333 14.4667 5 11 5Z" fill="currentColor" />
									</svg>
								</span>
								<!--end::Svg Icon-->
								<!--end::Icon-->
								<!--begin::Input-->
								<input type="text" class="form-control form-control-lg form-control-solid px-15" name="search" value="" placeholder="Search by username, full name or email..." data-kt-search-element="input" />
								<!--end::Input-->
								<!--begin::Spinner-->
								<span class="position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
									<span class="spinner-border h-15px w-15px align-middle text-muted"></span>
								</span>
								<!--end::Spinner-->
								<!--begin::Reset-->
								<span class="btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 me-5 d-none" data-kt-search-element="clear">
									<!--begin::Svg Icon | path: icons/duotune/arrows/arr061.svg-->
									<span class="svg-icon svg-icon-2 svg-icon-lg-1 me-0">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<rect opacity="0.5" x="6" y="17.3137" width="16" height="2" rx="1" transform="rotate(-45 6 17.3137)" fill="currentColor" />
											<rect x="7.41422" y="6" width="16" height="2" rx="1" transform="rotate(45 7.41422 6)" fill="currentColor" />
										</svg>
									</span>
									<!--end::Svg Icon-->
								</span>
								<!--end::Reset-->
							</form>
							<!--end::Form-->
							<!--begin::Wrapper-->
							<div class="py-5">
								<!--begin::Suggestions-->
								<div data-kt-search-element="suggestions">
									<!--begin::Heading-->
									<h3 class="fw-semibold mb-5">Recently searched:</h3>
									<!--end::Heading-->
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<a href="ecommerce.html#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-6.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Emma Smith</span>
												<span class="badge badge-light">Art Director</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="ecommerce.html#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Melody Macy</span>
												<span class="badge badge-light">Marketing Analytic</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="ecommerce.html#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-1.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Max Smith</span>
												<span class="badge badge-light">Software Enginer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="ecommerce.html#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-5.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Sean Bean</span>
												<span class="badge badge-light">Web Developer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
										<!--begin::User-->
										<a href="ecommerce.html#" class="d-flex align-items-center p-3 rounded bg-state-light bg-state-opacity-50 mb-1">
											<!--begin::Avatar-->
											<div class="symbol symbol-35px symbol-circle me-5">
												<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-25.jpg" />
											</div>
											<!--end::Avatar-->
											<!--begin::Info-->
											<div class="fw-semibold">
												<span class="fs-6 text-gray-800 me-2">Brian Cox</span>
												<span class="badge badge-light">UI/UX Designer</span>
											</div>
											<!--end::Info-->
										</a>
										<!--end::User-->
									</div>
									<!--end::Users-->
								</div>
								<!--end::Suggestions-->
								<!--begin::Results(add d-none to below element to hide the users list by default)-->
								<div data-kt-search-element="results" class="d-none">
									<!--begin::Users-->
									<div class="mh-375px scroll-y me-n7 pe-7">
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="0">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='0']" value="0" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-6.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
													<div class="fw-semibold text-muted">smith@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="1">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='1']" value="1" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
													<div class="fw-semibold text-muted">melody@altbox.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="2">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='2']" value="2" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-1.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
													<div class="fw-semibold text-muted">max@kt.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="3">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='3']" value="3" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-5.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
													<div class="fw-semibold text-muted">sean@dellito.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="4">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='4']" value="4" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-25.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
													<div class="fw-semibold text-muted">brian@exchange.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="5">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='5']" value="5" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
													<div class="fw-semibold text-muted">mik@pex.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="6">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='6']" value="6" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-9.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
													<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="7">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='7']" value="7" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
													<div class="fw-semibold text-muted">olivia@corpmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="8">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='8']" value="8" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
													<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="9">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='9']" value="9" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-23.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
													<div class="fw-semibold text-muted">dam@consilting.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="10">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='10']" value="10" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
													<div class="fw-semibold text-muted">emma@intenso.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="11">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='11']" value="11" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-12.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
													<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="12">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='12']" value="12" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
													<div class="fw-semibold text-muted">robert@benko.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="13">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='13']" value="13" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-13.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
													<div class="fw-semibold text-muted">miller@mapple.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="14">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='14']" value="14" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
													<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2" selected="selected">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="15">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='15']" value="15" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-21.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
													<div class="fw-semibold text-muted">ethan@loop.com.au</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1" selected="selected">Guest</option>
													<option value="2">Owner</option>
													<option value="3">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
										<!--begin::Separator-->
										<div class="border-bottom border-gray-300 border-bottom-dashed"></div>
										<!--end::Separator-->
										<!--begin::User-->
										<div class="rounded d-flex flex-stack bg-active-lighten p-4" data-user-id="16">
											<!--begin::Details-->
											<div class="d-flex align-items-center">
												<!--begin::Checkbox-->
												<label class="form-check form-check-custom form-check-solid me-5">
													<input class="form-check-input" type="checkbox" name="users" data-kt-check="true" data-kt-check-target="[data-user-id='16']" value="16" />
												</label>
												<!--end::Checkbox-->
												<!--begin::Avatar-->
												<div class="symbol symbol-35px symbol-circle">
													<img alt="Pic" src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-6.jpg" />
												</div>
												<!--end::Avatar-->
												<!--begin::Details-->
												<div class="ms-5">
													<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
													<div class="fw-semibold text-muted">smith@kpmg.com</div>
												</div>
												<!--end::Details-->
											</div>
											<!--end::Details-->
											<!--begin::Access menu-->
											<div class="ms-2 w-100px">
												<select class="form-select form-select-solid form-select-sm" data-control="select2" data-hide-search="true">
													<option value="1">Guest</option>
													<option value="2">Owner</option>
													<option value="3" selected="selected">Can Edit</option>
												</select>
											</div>
											<!--end::Access menu-->
										</div>
										<!--end::User-->
									</div>
									<!--end::Users-->
									<!--begin::Actions-->
									<div class="d-flex flex-center mt-15">
										<button type="reset" id="kt_modal_users_search_reset" data-bs-dismiss="modal" class="btn btn-active-light me-3">Cancel</button>
										<button type="submit" id="kt_modal_users_search_submit" class="btn btn-primary">Add Selected Users</button>
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Results-->
								<!--begin::Empty-->
								<div data-kt-search-element="empty" class="text-center d-none">
									<!--begin::Message-->
									<div class="fw-semibold py-10">
										<div class="text-gray-600 fs-3 mb-2">No users found</div>
										<div class="text-muted fs-6">Try to search by username, full name or email...</div>
									</div>
									<!--end::Message-->
									<!--begin::Illustration-->
									<div class="text-center px-5">
										<img src="{{ asset('public/admin/') }}/media/illustrations/dozzy-1/1.png" alt="" class="w-100 h-200px h-sm-325px" />
									</div>
									<!--end::Illustration-->
								</div>
								<!--end::Empty-->
							</div>
							<!--end::Wrapper-->
						</div>
						<!--end::Search-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Users Search-->
		<!--begin::Modal - Invite Friends-->
		<div class="modal fade" id="kt_modal_invite_friends" tabindex="-1" aria-hidden="true">
			<!--begin::Modal dialog-->
			<div class="modal-dialog mw-650px">
				<!--begin::Modal content-->
				<div class="modal-content">
					<!--begin::Modal header-->
					<div class="modal-header pb-0 border-0 justify-content-end">
						<!--begin::Close-->
						<div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
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
					<!--begin::Modal header-->
					<!--begin::Modal body-->
					<div class="modal-body scroll-y mx-5 mx-xl-18 pt-0 pb-15">
						<!--begin::Heading-->
						<div class="text-center mb-13">
							<!--begin::Title-->
							<h1 class="mb-3">Invite a Friend</h1>
							<!--end::Title-->
							<!--begin::Description-->
							<div class="text-muted fw-semibold fs-5">If you need more info, please check out 
							<a href="ecommerce.html#" class="link-primary fw-bold">FAQ Page</a>.</div>
							<!--end::Description-->
						</div>
						<!--end::Heading-->
						<!--begin::Google Contacts Invite-->
						<div class="btn btn-light-primary fw-bold w-100 mb-8">
						<img alt="Logo" src="{{ asset('public/admin/') }}/media/svg/brand-logos/google-icon.svg" class="h-20px me-3" />Invite Gmail Contacts</div>
						<!--end::Google Contacts Invite-->
						<!--begin::Separator-->
						<div class="separator d-flex flex-center mb-8">
							<span class="text-uppercase bg-body fs-7 fw-semibold text-muted px-3">or</span>
						</div>
						<!--end::Separator-->
						<!--begin::Textarea-->
						<textarea class="form-control form-control-solid mb-8" rows="3" placeholder="Type or paste emails here"></textarea>
						<!--end::Textarea-->
						<!--begin::Users-->
						<div class="mb-10">
							<!--begin::Heading-->
							<div class="fs-6 fw-semibold mb-2">Your Invitations</div>
							<!--end::Heading-->
							<!--begin::List-->
							<div class="mh-300px scroll-y me-n7 pe-7">
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-6.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Smith</a>
											<div class="fw-semibold text-muted">smith@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">M</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Melody Macy</a>
											<div class="fw-semibold text-muted">melody@altbox.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-1.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Max Smith</a>
											<div class="fw-semibold text-muted">max@kt.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-5.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Sean Bean</a>
											<div class="fw-semibold text-muted">sean@dellito.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-25.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Brian Cox</a>
											<div class="fw-semibold text-muted">brian@exchange.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-warning text-warning fw-semibold">C</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Mikaela Collins</a>
											<div class="fw-semibold text-muted">mik@pex.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-9.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Francis Mitcham</a>
											<div class="fw-semibold text-muted">f.mit@kpmg.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
											<div class="fw-semibold text-muted">olivia@corpmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-primary text-primary fw-semibold">N</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Neil Owen</a>
											<div class="fw-semibold text-muted">owen.neil@gmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-23.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Dan Wilson</a>
											<div class="fw-semibold text-muted">dam@consilting.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">E</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Emma Bold</a>
											<div class="fw-semibold text-muted">emma@intenso.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="https://preview.keenthemes.com/metronic8/demo15/assets/media/avatars/300-12.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ana Crown</a>
											<div class="fw-semibold text-muted">ana.cf@limtel.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-info text-info fw-semibold">A</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Robert Doe</a>
											<div class="fw-semibold text-muted">robert@benko.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-13.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">John Miller</a>
											<div class="fw-semibold text-muted">miller@mapple.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-success text-success fw-semibold">L</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Lucy Kunic</a>
											<div class="fw-semibold text-muted">lucy.m@fentech.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2" selected="selected">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4 border-bottom border-gray-300 border-bottom-dashed">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<img alt="Pic" src="{{ asset('public/admin/') }}/media/avatars/300-21.jpg" />
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Ethan Wilder</a>
											<div class="fw-semibold text-muted">ethan@loop.com.au</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1" selected="selected">Guest</option>
											<option value="2">Owner</option>
											<option value="3">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
								<!--begin::User-->
								<div class="d-flex flex-stack py-4">
									<!--begin::Details-->
									<div class="d-flex align-items-center">
										<!--begin::Avatar-->
										<div class="symbol symbol-35px symbol-circle">
											<span class="symbol-label bg-light-danger text-danger fw-semibold">O</span>
										</div>
										<!--end::Avatar-->
										<!--begin::Details-->
										<div class="ms-5">
											<a href="ecommerce.html#" class="fs-5 fw-bold text-gray-900 text-hover-primary mb-2">Olivia Wild</a>
											<div class="fw-semibold text-muted">olivia@corpmail.com</div>
										</div>
										<!--end::Details-->
									</div>
									<!--end::Details-->
									<!--begin::Access menu-->
									<div class="ms-2 w-100px">
										<select class="form-select form-select-solid form-select-sm" data-control="select2" data-dropdown-parent="#kt_modal_invite_friends" data-hide-search="true">
											<option value="1">Guest</option>
											<option value="2">Owner</option>
											<option value="3" selected="selected">Can Edit</option>
										</select>
									</div>
									<!--end::Access menu-->
								</div>
								<!--end::User-->
							</div>
							<!--end::List-->
						</div>
						<!--end::Users-->
						<!--begin::Notice-->
						<div class="d-flex flex-stack">
							<!--begin::Label-->
							<div class="me-5 fw-semibold">
								<label class="fs-6">Adding Users by Team Members</label>
								<div class="fs-7 text-muted">If you need more info, please check budget planning</div>
							</div>
							<!--end::Label-->
							<!--begin::Switch-->
							<label class="form-check form-switch form-check-custom form-check-solid">
								<input class="form-check-input" type="checkbox" value="1" checked="checked" />
								<span class="form-check-label fw-semibold text-muted">Allowed</span>
							</label>
							<!--end::Switch-->
						</div>
						<!--end::Notice-->
					</div>
					<!--end::Modal body-->
				</div>
				<!--end::Modal content-->
			</div>
			<!--end::Modal dialog-->
		</div>
		<!--end::Modal - Invite Friend-->
		<!--end::Modals-->
		<!--begin::Javascript-->
		<script>var hostUrl = "{{ asset('public/admin/') }}/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset('public/admin/') }}/plugins/global/plugins.bundle.js"></script>
		<script src="{{ asset('public/admin/') }}/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Vendors Javascript(used for this page only)-->
		<script src="{{ asset('public/admin/') }}/plugins/custom/datatables/datatables.bundle.js"></script>
		<script src="{{ asset('public/admin/') }}/plugins/custom/vis-timeline/vis-timeline.bundle.js"></script>
		<!--end::Vendors Javascript-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ asset('public/admin/') }}/js/widgets.bundle.js"></script>
		<script src="{{ asset('public/admin/') }}/js/custom/widgets.js"></script>
		<script src="{{ asset('public/admin/') }}/js/custom/apps/chat/chat.js"></script>
		<script src="{{ asset('public/admin/') }}/js/custom/utilities/modals/users-search.js"></script>
		<script src="{{ asset('public/admin/') }}/js/toastr.min.js"></script>
		<script src="{{ asset('public/admin/') }}/js/master.js"></script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>