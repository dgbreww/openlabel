<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>{{ $siteSettings->website_name }} | {{ $title }}</title>
<link rel="stylesheet" href="{{ url('public/frontend') }}/css/bootstrap.min.css">
<link rel="stylesheet" href="{{ url('public/frontend') }}/css/slick.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{ url('public/frontend') }}/css/style.css">
<link rel="stylesheet" href="{{ url('public/frontend') }}/css/profile.css">
<link rel="stylesheet" href="{{ url('public/frontend') }}/css/master.css">
<script src="{{ url('public/frontend') }}/js/jquery.min.js"></script>
<script src="{{ url('public/frontend') }}/js/bootstrap.min.js"></script>
<script src="{{ url('public/frontend') }}/js/slick.js"></script>
<script src="{{ url('public/frontend') }}/js/script.js"></script>
<script type="text/javascript">
	baseUrl = "{{ url('/') }}";
</script>
</head>
<body>
<form method="get" action="{{ url('/creations') }}">
	<div class="search-main">
		<div class="_container _flex">
			<div class="search">
				<i class="fa-solid fa-magnifying-glass"></i>
				<input type="text" name="search" placeholder="What are you looking for?">
				<button>Search</button>
			</div>
			<i class="fa-solid fa-xmark close"></i>
		</div>
	</div>
</form>
<div class="stickey">
	<header>
		<a href="{{ url('/') }}" class="brand"><img src="{{ asset('public/'.$siteSettings->websiteLogoUrl) }}" alt="{{ $siteSettings->websiteLogoAlt }}"></a>
		<nav>
			<ul class="sidebar">
				<li><a href="{{ url('/') }}">Home</a></li>
				<li><a href="{{ url('/about-us') }}">About Us</a></li>
				
				@if(!session()->has('userSess'))
				<li><a href="{{ url('/sign-up') }}">Become a Creator</a></li>
				<li><a href="{{ url('/sign-up?account=artist') }}">Become an Artist</a></li>
				@endif

				<li><a href="{{ url('/creations') }}">Browse Creations</a></li>
				<li class="mb-hide"><a href="#"><i class="fa-solid fa-magnifying-glass searching"></i></a></li>

				@if(session()->has('userSess'))
					@php
						$userInfo = userInfo();
						$profileImg = url('public/frontend/img/profile-img.png');

						if (!empty($userInfo->profile_picture)) {
							$profileImg = url('public/'.$userInfo->profile_picture);
						}
					@endphp
				<li>
					<div class="dashboard-user _flex">
						<div class="user-img _flex header-drop">
							<div class="user_img header-drop-img">
								<img src="{{ $profileImg }}" alt="" class="header-drop-img">
							</div>
							<i class="fa-solid fa-caret-down"></i>
							<div class="profile-dropdown header-drop-dropdown">
								<ul>
									<li><a href="{{ url('/user/dashboard') }}">Dashboard</a></li>
									<li><a href="{{ url('/user/logout') }}">Logout</a></li>
								</ul>
							</div>
						</div>
					</div>
				</li>
				@endif

				@if(!session()->has('userSess'))
				<li class="mb-hide">
					<a href="{{ url('/login') }}" class="butn">
						Login/Signup
						<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M27.1666 28.5V25.8333C27.1666 24.4188 26.6047 23.0623 25.6045 22.0621C24.6044 21.0619 23.2478 20.5 21.8333 20.5H11.1666C9.75216 20.5 8.3956 21.0619 7.39541 22.0621C6.39522 23.0623 5.83331 24.4188 5.83331 25.8333V28.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M16.5 15.1667C19.4455 15.1667 21.8334 12.7789 21.8334 9.83333C21.8334 6.88781 19.4455 4.5 16.5 4.5C13.5545 4.5 11.1667 6.88781 11.1667 9.83333C11.1667 12.7789 13.5545 15.1667 16.5 15.1667Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</a>
				</li>
				@endif
			</ul>
			<ul class="desk-hide">
				<li><a href="#"><i class="fa-solid fa-magnifying-glass searching"></i></a></li>
				@if(!session()->has('userSess'))
				<li>
					<a href="#" class="butn">
						Login/Signup
						<svg width="33" height="33" viewBox="0 0 33 33" fill="none" xmlns="http://www.w3.org/2000/svg">
							<path d="M27.1666 28.5V25.8333C27.1666 24.4188 26.6047 23.0623 25.6045 22.0621C24.6044 21.0619 23.2478 20.5 21.8333 20.5H11.1666C9.75216 20.5 8.3956 21.0619 7.39541 22.0621C6.39522 23.0623 5.83331 24.4188 5.83331 25.8333V28.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M16.5 15.1667C19.4455 15.1667 21.8334 12.7789 21.8334 9.83333C21.8334 6.88781 19.4455 4.5 16.5 4.5C13.5545 4.5 11.1667 6.88781 11.1667 9.83333C11.1667 12.7789 13.5545 15.1667 16.5 15.1667Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</a>
				</li>
				@endif
			</ul>
			<div id="ham">
				<div id="ham1"></div>
				<div id="ham2"></div>
				<div id="ham3"></div>
			</div>
		</nav>
	</header>
</div>