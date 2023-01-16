<!DOCTYPE html>
<html lang="en">
	<!--begin::Head-->
	<head>
		<title>Admin Two-Factor Authentication</title>
		<meta charset="utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="{{ asset('public/admin/') }}/media/logos/favicon.ico" />
		<!--begin::Fonts(mandatory for all pages)-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
		<link href="{{ asset('public/admin/') }}/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('public/admin/') }}/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link href="{{ asset('public/admin/') }}/css/master.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="{{ asset('public/admin/') }}/css/toastr.min.css">
		<script type="text/javascript">
			baseUrl = "{{ url('admin'); }}";
		</script>
		<!--end::Global Stylesheets Bundle-->
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="auth-bg">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Authentication - Sign-in -->
			<div class="d-flex flex-column flex-lg-row flex-column-fluid">
				<!--begin::Body-->
				<div class="d-flex flex-column flex-lg-row-fluid w-lg-50 p-10 order-2 order-lg-1">
					
					<div class="d-flex flex-center flex-column flex-lg-row-fluid">
						<div class="w-lg-500px p-10">
							<!--begin::Form-->
							<form class="form w-100 mb-13" novalidate="novalidate" action="{{ url('admin/doTwoFactorAuth') }}" id="kt_sing_in_two_steps_form">
								<!--begin::Icon-->
								<div class="text-center mb-10">
									<img alt="Logo" class="mh-125px" src="{{ asset('public/admin/') }}/media/svg/misc/smartphone-2.svg" />
								</div>
								<!--end::Icon-->
								<!--begin::Heading-->
								<div class="text-center mb-10">
									<!--begin::Title-->
									<h1 class="text-dark mb-3">Two Step Verification</h1>
									<!--end::Title-->
									<!--begin::Sub-title-->
									<div class="text-muted fw-semibold fs-5 mb-5">Enter the verification code we sent to</div>
									<!--end::Sub-title-->
									<!--begin::Mobile no-->
									<div class="fw-bold text-dark fs-3">{{ $hiddenEmail; }}</div>
									<!--end::Mobile no-->
								</div>
								<!--end::Heading-->
								<!--begin::Section-->
								<div class="mb-10">
									<!--begin::Label-->
									<div class="fw-bold text-start text-dark fs-6 mb-1 ms-1">Type your 6 digit security code</div>
									<!--end::Label-->
									<!--begin::Input group-->
									<div class="d-flex flex-wrap flex-stack">
										<input type="text" id="code_1Err" name="code_1" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="removeErr form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2" value="" />
										<input type="text" id="code_2Err" name="code_2" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="removeErr form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2" value="" />
										<input type="text" id="code_3Err" name="code_3" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="removeErr form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2" value="" />
										<input type="text" id="code_4Err" name="code_4" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="removeErr form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2" value="" />
										<input type="text" id="code_5Err" name="code_5" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="removeErr form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2" value="" />
										<input type="text" id="code_6Err" name="code_6" data-inputmask="'mask': '9', 'placeholder': ''" maxlength="1" class="removeErr form-control bg-transparent h-60px w-60px fs-2qx text-center mx-1 my-2" value="" />
									</div>
									<!--begin::Input group-->
								</div>
								<!--end::Section-->
								<!--begin::Submit-->
								<div class="d-flex flex-center">
									<input type="hidden" name="_token" value="{{ csrf_token() }}" />
									<button type="submit" id="kt_sing_in_two_steps_submit" class="btn btn-lg btn-primary fw-bold">
										<span class="indicator-label">Submit</span>
										<span class="indicator-progress">Please wait... 
										<span class="spinner-border spinner-border-sm align-middle ms-2"></span></span>
									</button>
								</div>
								<!--end::Submit-->
							</form>
							<!--end::Form-->
							<!--begin::Notice-->
							<div class="text-center fw-semibold fs-5">
								<span class="text-muted me-1">Didn’t get the code ?</span>
								<a href="javascript:void(0);" data-name="_token" data-value="{{ csrf_token() }}" id="resendOtp" class="link-primary fs-5 me-1">Resend</a>
							</div>
							<!--end::Notice-->
						</div>
					</div>

					<!--begin::Footer-->
					<div class="d-flex flex-center flex-wrap px-5">
						<!--begin::Links-->
						<div class="d-flex fw-semibold text-primary fs-base">
							<a href="{{ url('/') }}" class="px-5" target="_blank">Home</a>
							<a href="{{ url('/about-us') }}" class="px-5" target="_blank">About Us</a>
							<a href="{{ url('/contact-us') }}" class="px-5" target="_blank">Contact Us</a>
						</div>
						<!--end::Links-->
					</div>
					<!--end::Footer-->
				</div>
				<!--end::Body-->
				<!--begin::Aside-->
				<div class="d-flex flex-lg-row-fluid w-lg-50 bgi-size-cover bgi-position-center order-1 order-lg-2" style="background-image: url({{ asset('public/admin/') }}/media/misc/auth-bg.png)">
					<!--begin::Content-->
					<div class="d-flex flex-column flex-center py-7 py-lg-15 px-5 px-md-15 w-100">
						<!--begin::Logo-->
						<a href="../../../index.html" class="mb-0 mb-lg-12">
							<img alt="Logo" src="{{ asset('public/admin/') }}/media/logos/custom-1.png" class="h-60px h-lg-75px" />
						</a>
						<!--end::Logo-->
						<!--begin::Image-->
						<img class="d-none d-lg-block mx-auto w-275px w-md-50 w-xl-500px mb-10 mb-lg-20" src="{{ asset('public/admin/') }}/media/misc/auth-screens.png" alt="" />
						<!--end::Image-->
						<!--begin::Title-->
						<h1 class="d-none d-lg-block text-white fs-2qx fw-bolder text-center mb-7">Fast, Efficient and Productive</h1>
						<!--end::Title-->
						<!--begin::Text-->
						<div class="d-none d-lg-block text-white fs-base text-center">In this kind of post, 
						<a href="sign-in.html#" class="opacity-75-hover text-warning fw-bold me-1">the blogger</a>introduces a person they’ve interviewed 
						<br />and provides some background information about 
						<a href="sign-in.html#" class="opacity-75-hover text-warning fw-bold me-1">the interviewee</a>and their 
						<br />work following this is a transcript of the interview.</div>
						<!--end::Text-->
					</div>
					<!--end::Content-->
				</div>
				<!--end::Aside-->
			</div>
			<!--end::Authentication - Sign-in-->
		</div>
		<!--end::Root-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<script>var hostUrl = "{{ asset('public/admin/') }}/";</script>
		<!--begin::Global Javascript Bundle(mandatory for all pages)-->
		<script src="{{ asset('public/admin/') }}/plugins/global/plugins.bundle.js"></script>
		<script src="{{ asset('public/admin/') }}/js/scripts.bundle.js"></script>
		<script src="{{ asset('public/admin/') }}/js/toastr.min.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Custom Javascript(used for this page only)-->
		<script src="{{ asset('public/admin/') }}/js/master.js"></script>
		<script type="text/javascript">
			$("#code_1Err").keyup(function(event) {
				if ($(this).val() != '') {
					$("#code_2Err").focus();
				}
			});

			$("#code_2Err").keyup(function(event) {
				if ($(this).val() != '') {
					$("#code_3Err").focus();
				}
			});

			$("#code_3Err").keyup(function(event) {				
				if ($(this).val() != '') {
					$("#code_4Err").focus();
				}
			});

			$("#code_4Err").keyup(function(event) {
				if ($(this).val() != '') {
					$("#code_5Err").focus();
				}
			});

			$("#code_5Err").keyup(function(event) {
				if ($(this).val() != '') {
					$("#code_6Err").focus();
				}
			});
		</script>
		<!--end::Custom Javascript-->
		<!--end::Javascript-->
	</body>
	<!--end::Body-->
</html>