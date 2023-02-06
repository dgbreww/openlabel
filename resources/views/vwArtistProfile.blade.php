@include('vwHeader')
	@inject('applyJobsModel', 'App\Models\ApplyJobsModel')
	@inject('jobsModel', 'App\Models\JobsModel')
	@inject('orderModel', 'App\Models\OrderModel')

<style type="text/css">
	.error {
		position: absolute;
	    bottom: 10%;
	    left: 0;
	    z-index: 9;
	    width: max-content;
	}

	.pricing-table{
        padding: 4% 0;
        text-align: center;
    }
    .pricing-table h2.head{
        margin-bottom: 24px;
        position: relative;
    }
    .pricing-table h2.head:after{
        content: '';
        position: absolute;
        bottom: -10px;
        width: 38%;
        height: 1px;
        background: linear-gradient(0deg, #004071 10%, #0083b6 90%);
        left: 50%;
        transform: translate(-50%, 0%);
    }
    .subscription-container {
        display: flex;
        align-items: center;
        flex-flow: row wrap;
        justify-content: flex-start;
        width: 100%;
        max-width: 990px;
        margin: auto;
        padding: 5% 0;
        column-gap: 7%;
        row-gap: 24px;
    }
    
    .price_tabs{
        margin-top: 3%;
    }
    
    .price_tabs a{
        font-size: var(--sub-heading-3-28);
        margin: 0 6px;
        color: #212529;
    }
    
    .price_tabs a.active{
        color: var(--blue-sapphire);
        border-bottom: 2px solid var(--blue-sapphire);
    }
    
    .subscription__title,
    .subscription__main-feature,
    .subscription__price {
      text-transform: uppercase;
      margin-top: 0;
      margin-bottom: 0;
      color: #85A9C1;
    }
    
    .subscription__title {
      display: flex;
      flex-direction: column;
      align-items: center;
      padding: 10px;
      margin-top: 20px;
      font-size: var(--sub-heading-3-28);
      color: var(--blue-sapphire);
      width: 100%;
      border-top-left-radius: 10px;
      border-top-right-radius: 10px;
    }
    
    .subscription__icon {
      margin-top: 10px;
      font-size: var(--heading-3-40);
      background: #F2F5FF;
      padding: 30px;
      border-radius: 50%;
    }
    
    /*.subscription__price {*/
    /*  display: block;*/
    /*  width: 90%;*/
    /*  text-align: center;*/
    /*  text-transform: lowercase;*/
    /*  font-size: 32px;*/
    /*  color: #262223;*/
    /*  padding-bottom: 10px;*/
    /*  border-bottom: 2px solid #EFF1F3;*/
    /*}*/
    
    /*.subscription__price-month {*/
    /*  font-size: 18px;*/
    /*  color: #C8CDD1;*/
    /*}*/
    
    .subscription__list {
      padding: 0 15px;
      margin: 10px 0;
      list-style-type: none;
    }
    
    .subscription__item {
      display: flex;
      margin: 20px 0;
      font-size: var(--body-3-18);
      color: #666662;
    }
    
    .subscription__item-text {
      color: #AEAEAC;
      font-size: var(--micro-1-16);
    }
    
    .icon-subscription {
      color: #C8CDD1;
      margin-right: 5px;
    }
    
    .subscription__button {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 275px;
      margin: 5px 0;
      padding: 0;
      border-radius: 10px;
      background: #FFF;
      box-shadow: 0 4px 13px 0 rgba(0, 0, 0, 0.45);
      transition: transform 0.5s;
      cursor: pointer;
    }
    .subscription__button button{
      display: block;
      font-family: var(--roboto-medium);
      font-size: var(--body-3-18);
      text-align: center;
      padding: 4px;
      color: var(--blue-sapphire);
      width: 80%;
      border-radius: 5px;
      margin-bottom: 25px;
      border: solid 2px var(--blue-sapphire);
      transition: 0.5s;
    }
    .subscription__button button.active{
      background: var(--blue-sapphire);
      color: white;
    }
    .subscription__button button:hover{
      background: var(--blue-sapphire);
      color: white;
    }
    .subscription__button:hover{
      background: white;
      transform: scale(1.09);
      transition: transform 0.5s;
      box-shadow: 0 4px 15px 0 rgba(0, 0, 0, 0.65);
    }
    @media(max-width: 1200px){
        .subscription__button{
            width: 28%;
        }
    }
    @media(max-width: 768px){
        .subscription__item{
            margin: 12px 0;
        }
        .price_tabs{
            margin-top: 5%;
        }
    }
    @media(max-width: 600px){
        .subscription__button{
            width: 40%;
        }
        .subscription-container{
            row-gap: 32px;
            justify-content: center;
        }
    }
    @media(max-width: 480px){
        .subscription__button{
            width: 55%;   
        }
    }
    @media(max-width: 390px){
        .subscription__button{
            width: 70%;
        }
    }

    .yourJobs .jobs-listed .left p:first-child {
    	margin-right: 24px;
    }

    .yourJobs .jobs-listed .left p {
    	margin-right: 24px;
    }

    .pending {
		background: yellow !important;
	}

	.pending {
		background: yellow !important;
	}

	.submitted {
		background: blue !important;
	}

	.rejected {
		background: red !important;
	}	

	.re-submitted {
		background: purple !important;
	}

	.font-28 {
		font-size: 28px !important;
	}
</style>

@php
	$tab = Request::get('tab');
@endphp

<div class="profile-dashboard">
	<div class="_container">
		<div class="my-account">
			<div class="fadeInDown">
				<div class="main">
					<div class="content">
						<div class="tab-head">
							<ul>
								<li>
									<!-- <a onclick="window.location.href='{{ url("user/dashboard") }}'" href="#dashboard" class="tab-head-font">
										<p>My Dashboard</p>
										<img src="{{ url('public/frontend') }}/images/dashboard.png" alt="">
									</a> -->
									<a href="#dashboard" class="tab-head-font {{ (empty($tab))? 'active':'' }}">
										<p>My Dashboard</p>
										<img src="{{ url('public/frontend') }}/images/dashboard.png" alt="">
									</a>
								</li>
								<li>
									<a href="#myProfile" class="tab-head-font {{ ($tab == 'profile')? 'active':'' }}">
										<p>Edit Profile</p>
										<img src="{{ url('public/frontend') }}/images/my-profile.png" alt="">
									</a>
								</li>
								<li>
									<a href="#myJobs" class="tab-head-font {{ ($tab == 'creations' OR $tab == 'received-creations')? 'active':'' }}">
										<p>My Creations</p>
										<img src="{{ url('public/frontend') }}/images/my-jobs.png" alt="">
									</a>
								</li>
								
								<li>
									<a href="#myPackages" class="tab-head-font {{ ($tab == 'packages')? 'active':'' }}">
										<p>My Packages</p>
										<img src="{{ url('public/frontend') }}/images/packages.png" alt="">
									</a>
								</li>

								@if(!empty($customPackage))
								<li>
									<a onclick="window.location.href='{{ url('/user/dashboard?tab=customPackages') }}'" href="#customPackages" class="tab-head-font {{ ($tab == 'customPackages')? 'active':'' }}">
										<p>Custom Packages</p>
										<img src="{{ url('public/frontend') }}/images/packages.png" alt="">
									</a>
								</li>
								@endif

								<li>
									<a onclick="window.location.href='{{ url('/user/dashboard?tab=transactions') }}'" href="#transactions" class="tab-head-font {{ ($tab == 'transactions')? 'active':'' }}">
										<p>My Transactions</p>
										<img src="{{ url('public/frontend') }}/images/packages.png" alt="">
									</a>
								</li>

								<li>
									<a href="#changePassword" class="tab-head-font {{ ($tab == 'password')? 'active':'' }}">
										<p>Change Password</p>
										<img src="{{ url('public/frontend') }}/images/change-password.png" alt="">
									</a>
								</li>
								<li>
									<a onclick="window.location.href='{{ url("user/logout") }}'" href="{{ url('user/logout') }}" class="tab-head-font">
										<p>Logout</p>
										<img src="{{ url('public/frontend') }}/images/logout.png" alt="">
									</a>
								</li>
							</ul>
						</div>
						<div class="tab-body account-tab-body">
							<div class="data account-forms profile-page dashboard {{ (empty($tab))? 'active':'' }}" id="dashboard">
								
								<div class="form">
									<div class="cover-bg">
										<img id="update-cover-img" src="{{ $coverImg }}" alt="">
									</div>
									<div class="profile-main">
										<div class="profile-container">
											<div class="profile">
												<div class="_flex">
													<div class="detail">
														<div class="user-img">
															<img id="update-profile-img" src="{{ $profileImg }}" alt="">
														</div>
														

														<h3>{{ $name }} 
															@if(!empty($userInfo->badge_id))
															<img src="{{ getImg($userInfo->badge_img) }}" alt="">
															@endif
														</h3>

														@if(!empty($userInfo->tag_line))
														<span class="user-designation">{{ $userInfo->tag_line }}</span>
														@endif

														@if(!empty($userInfo->address))
														<span class="user-location"><i class="fa-solid fa-location-dot"></i>{{ $userInfo->address }}</span>
														@endif

														<!-- <span class="user-rating">
															4.2
															<div class="star-rating">
															  <input id="star-5" type="radio" name="rating" value="star-5" checked />
															  <label for="star-5" title="5 stars">
															    <i class="active fa fa-star" aria-hidden="true"></i>
															  </label>
															  <input id="star-4" type="radio" name="rating" value="star-4" />
															  <label for="star-4" title="4 stars">
															    <i class="active fa fa-star" aria-hidden="true"></i>
															  </label>
															  <input id="star-3" type="radio" name="rating" value="star-3" />
															  <label for="star-3" title="3 stars">
															    <i class="active fa fa-star" aria-hidden="true"></i>
															  </label>
															  <input id="star-2" type="radio" name="rating" value="star-2" />
															  <label for="star-2" title="2 stars">
															    <i class="active fa fa-star" aria-hidden="true"></i>
															  </label>
															  <input id="star-1" type="radio" name="rating" value="star-1" />
															  <label for="star-1" title="1 star">
															    <i class="active fa fa-star" aria-hidden="true"></i>
															  </label>
															</div>
														</span> -->

														<span class="user-period">Member since {{ date('M, d Y', strtotime($userInfo->created_at)) }}</span>

													</div>
													
													<div class="settings">
														<div class="_flex">
															<div class="total-spent">
																${{ $orderModel->where('user_id', $userInfo->id)->sum('price') }}
																<span>Total Spent</span>
															</div>
															<div class="total-posted">
																{{ count($jobListData) }}
																<span>Total Creations Posted</span>
															</div>
														</div>
													</div>

												</div>
											</div>

											@if($userInfo->about)
											<div class="profile-about border-bottom">
												<h4>About</h4>
												<p>{{ $userInfo->about }}</p>
											</div>
											@endif

											<!-- <div class="profile-testimonial">
												<h4>Testimonials</h4>
												<div class="data">
													<h3>Free Style Dancing Move TikTok Video</h3>
													<p>"Thanks for helping me draft this deck. Very responsive throughout the process despite many changes."</p>
													<span class="review">
														Maria Hill 
														<div class="star-rating">
														  <input id="star-5-1" type="radio" name="rating" value="star-5" />
														  <label for="star-5-1" title="5 stars">
														    <i class="active fa fa-star" aria-hidden="true"></i>
														  </label>
														  <input id="star-4-1" type="radio" name="rating" value="star-4" />
														  <label for="star-4-1" title="4 stars">
														    <i class="active fa fa-star" aria-hidden="true"></i>
														  </label>
														  <input id="star-3-1" type="radio" name="rating" value="star-3" />
														  <label for="star-3-1" title="3 stars">
														    <i class="active fa fa-star" aria-hidden="true"></i>
														  </label>
														  <input id="star-2-1" type="radio" name="rating" value="star-2" />
														  <label for="star-2-1" title="2 stars">
														    <i class="active fa fa-star" aria-hidden="true"></i>
														  </label>
														  <input id="star-1-1" type="radio" name="rating" value="star-1" />
														  <label for="star-1-1" title="1 star">
														    <i class="active fa fa-star" aria-hidden="true"></i>
														  </label>
														</div> 
														4.94 of 89 reviews
													</span>
												</div>
												<div class="data">
													<h3>Free Style Dancing Move TikTok Video</h3>
													<p>"Thanks for helping me draft this deck. Very responsive throughout the process despite many changes."</p>
													<span class="review">
														Maria Hill
														<div class="star-rating">
														  <input id="star-5-2" type="radio" name="rating" value="star-5" />
														  <label for="star-5-2" title="5 stars">
														    <i class="active fa fa-star" aria-hidden="true"></i>
														  </label>
														  <input id="star-4-2" type="radio" name="rating" value="star-4" />
														  <label for="star-4-2" title="4 stars">
														    <i class="active fa fa-star" aria-hidden="true"></i>
														  </label>
														  <input id="star-3-2" type="radio" name="rating" value="star-3" />
														  <label for="star-3-2" title="3 stars">
														    <i class="active fa fa-star" aria-hidden="true"></i>
														  </label>
														  <input id="star-2-2" type="radio" name="rating" value="star-2" />
														  <label for="star-2-2" title="2 stars">
														    <i class="active fa fa-star" aria-hidden="true"></i>
														  </label>
														  <input id="star-1-2" type="radio" name="rating" value="star-1" />
														  <label for="star-1-2" title="1 star">
														    <i class="active fa fa-star" aria-hidden="true"></i>
														  </label>
														</div> 
														4.94 of 89 reviews
													</span>
												</div>
											</div> -->

											<div class="row">
												<div class="col-lg-4 col-md-6">
													<a href="#">
														<div class="projects">
															<div class="img-icon">
																<span class="circle-bg"></span>
																<img src="{{ url('public/frontend/') }}/images/dashboard-icon/dashboard-main/folder.png">
															</div>
															<div class="projects-numbers">
																<p>{{ $orderModel->where('user_id', $userInfo->id)->count() }}</p>
															</div>
															<div class="projects-categories">
																<h4>Total Packages</h4>
															</div>
															<img class="pos-top-right-projects" src="{{ url('public/frontend/') }}/images/dashboard-icon/dashboard-main/folder.png">
														</div>
													</a>
												</div>
												<div class="col-lg-4 col-md-6">
													<a href="#">
														<div class="projects">
															<div class="img-icon">
																<span class="circle-bg"></span>
																<img src="{{ url('public/frontend/') }}/images/dashboard-icon/dashboard-main/tick.png">
															</div>
															<div class="projects-numbers">
																<p>{{ $orderModel->join('jobs', 'orders.id', '=', 'jobs.order_id')->where('orders.user_id', $userInfo->id)->count() }}</p>
															</div>
															<div class="projects-categories">
																<h4>Post Creations</h4>
															</div>
															<img class="pos-top-right-projects" src="{{ url('public/frontend/') }}/images/dashboard-icon/dashboard-main/tick.png">
														</div>
													</a>
												</div>
												<div class="col-lg-4 col-md-6">
													<a href="#">
														<div class="projects">
															<div class="img-icon">
																<span class="circle-bg"></span>
																<img src="{{ url('public/frontend/') }}/images/dashboard-icon/dashboard-main/earned-revenue.png">
															</div>
															<div class="projects-numbers">
																<p>${{ $orderModel->where('user_id', $userInfo->id)->sum('price') }}</p>
															</div>
															<div class="projects-categories">
																<h4>Spent</h4>
															</div>
															<img class="pos-top-right-projects" src="{{ url('public/frontend/') }}/images/dashboard-icon/dashboard-main/earned-revenue.png">
														</div>
													</a>
												</div>
											</div>

										</div>
									</div>
								</div>

							</div>
							<div class="data account-forms bodyMeasurement profile-page {{ ($tab == 'profile')? 'active':'' }}" id="myProfile">
								<form id="myProfileForm" action="{{ url('user/doUpdateProfile') }}" method="post" enctype="multipart/form-data">
									<div class="form">
										<div class="cover-bg">
											<img id="update-cover-img" src="{{ $coverImg }}" alt="">
											<a href="#" class="butn update-cover-btn"><img src="{{ url('public/frontend/') }}/img/camera.png" alt="">Edit Cover<input type="file" id="upload-cover-img" name="coverImage"></a>
										</div>
										<div class="profile-main">
											<div class="profile-container">
												<div class="profile">
													<div class="_flex">
														<div class="detail">
															<div class="user-img">
																<img id="update-profile-img" src="{{ $profileImg }}" alt="">
																<a id="profile" class="update-profile-btn" href="#"><img src="{{ url('public/frontend/') }}/img/camera.png" alt=""><input id="upload-profile-img" type="file" name="profileImage"></a>
															</div>
															<h3>My Profile</h3>
															
															<span class="user-designation">Mandatory fields are marked *</span>

															<span id="coverImageErr" class="error-2 removeErr"></span>
															<span id="profileImageErr" class="error-2 removeErr"></span>

															<div class="form__">
																<div class="form-field">
																	<input type="text" name="firstName" class="mr-42 onload-check-input" value="{{ $userInfo->first_name }}">
																	<span class="imp">*<span class="plc">First Name</span></span>
																	<span id="firstNameErr" class="error removeErr"></span>
																</div>
																<div class="form-field">
																	<input type="text" name="lastName" class="onload-check-input" value="{{ $userInfo->last_name }}">
																	<span class="imp">*<span class="plc">Last Name</span></span>
																	<span id="lastNameErr" class="error removeErr"></span>
																</div>
																<div class="form-field">
																	<input readonly type="text" name="email" value="{{ $userInfo->email }}" class="mr-42 onload-check-input">
																	<span class="imp">*<span class="plc">Email Address</span></span>
																	<span id="emailErr" class="error removeErr"></span>
																</div>
																<div class="code-dropdown">
																	<span class="after no-selector">
																		<div class="select"></div>
																		<div class="custom-select">
																			<ul>
																				@if(!empty($countryList))
																				@foreach($countryList as $country)
																					<li onclick="selectOption('+{{ $country->phonecode }}', 'countryCode')">+{{ $country->phonecode }}</li>
																				@endforeach
																				@endif
																			</ul>
																		</div>
																		<span class="imp"><span class="plc countryCode">{{ $userInfo->country_code? $userInfo->country_code:'+1'; }}</span><i class="fa-solid fa-chevron-down"></i></span>
																		<input type="hidden" name="countryCode" id="countryCode" value="{{ $userInfo->country_code? $userInfo->country_code:'+1'; }}">
																		<span id="mobileErr" class="error removeErr"></span>	
																	</span>
																	<div class="form-field">
																		<input type="text" class="onload-check-input" name="mobile" value="{{ $userInfo->phone_number }}">
																		<span class="imp">*<span class="plc">Mobile</span></span>
																	</div>
																</div>
																<div class="form-field">
																	<input type="text" name="address" class="mr-42 onload-check-input" value="{{ $userInfo->address }}">
																	<span class="imp"><span class="plc">Address</span></span>
																	<span id="addressErr" class="error removeErr"></span>
																</div>
																<div class="form-field">
																	<input value="{{ $userInfo->tag_line }}" type="text" name="tagLine" class="mr-42 onload-check-input">
																	<span class="imp"><span class="plc">Tag Line</span></span>
																	<span id="tagLineErr" class="error removeErr"></span>
																</div>
																<!-- <span class="after">
																	<div class="select"></div>
																	<div class="custom-select">
																		<ul>
																			<li>Your Work Profile 1</li>
																			<li>Your Work Profile 2</li>
																		</ul>
																	</div>
																	<span class="imp"><span class="plc">Work Profile</span></span>		
																</span> -->
																<div class="form-field text_area">
																	<textarea name="about" id="" class="mr-42">{{ $userInfo->about }}</textarea>
																	<span class="imp"><span class="plc">About Me</span></span>
																	<span id="aboutErr" class="error removeErr"></span>
																</div>
																<div class="butn">
																	@csrf
																	<button type="button" class="uppercase form-btn tab-form-btn-font mr-36">Cancel</button>
																	<button id="myProfileFormBtn" type="submit" class="uppercase form-btn tab-form-btn-font">Submit</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
							
							<div class="data account-forms bodyMeasurement profile-page myJobs {{ ($tab == 'creations')? 'active':'' }}" id="myJobs">
								<div class="form">
									<div class="profile-main">
										<div class="profile-container">
											<div class="profile">
												<div class="_flex">
													<div class="detail">
														<h3>My Creations</h3>
														<span class="user-designation">Your Creations listed below</span>
														@if(!empty($jobListData->toArray()))
															
															@foreach($jobListData as $jobs)
																@php
																	$postedDate = getHoursDays($jobs->created_at);
																@endphp

															<div class="yourJobs">
																<div class="jobs-listed">
																	<div class="left">
																		<!-- <span class="img"><img src="{{ url('public/frontend/') }}/img/profile-img.png" alt=""></span> -->
																		<div class="left-detail">
																			<h3>{{ $jobs->title }}</h3>
																			<div class="_flex" style="padding-top: 1rem;">
																				<p><span>Category:</span> {{ $jobs->category_name }}</p>
																				<p><span>Platform:</span> {{ $jobs->platform_name }}</p>
																				<p><span>Genre:</span> {{ $jobs->genre_name }}</p>
																				<p><span>Video Size:</span> {{ $jobs->video_slug }}</p>
																			</div>
																			<div class="_flex" style="padding-top: 1rem;">
																				<p><span>No of Videos:</span> {{ $jobs->no_of_videos }}</p>	

																				<p><span>Timeline:</span> {{ $jobs->timeline }} Days</p>	

																				<p><span>Applied Creations:</span> {{ $applyJobsModel->where('job_id', $jobs->id)->count() }}</p>

																				@php
																					$totalReceivedCreations = $applyJobsModel->where('job_id', $jobs->id)->where('video_link', '!=', '')->count();
																				@endphp

																				@if($totalReceivedCreations)
																				<p>
																					<span>Received Creations:</span> {{ $totalReceivedCreations }}
																					<a style="color: black" href="{{ url('/user/dashboard?tab=received-creations&job='.$jobs->id) }}"><i class="fa fa-eye"></i></a>
																				</p>
																				@else
																				<p><span>Received Creations:</span> {{ $totalReceivedCreations }} </p>
																				@endif

																			</div>
																		</div>
																	</div>
																	<div class="right">
																		<p>Posted {{ $postedDate }}</p>
																		@if($jobs->job_status == 'published')
																		<!-- <button onclick="window.location.href='{{ url('/user/edit-job/'.$jobs->id) }}'" type="button" class="butn">Edit Creation</button> -->
																		@endif
																	</div>
																</div>
															</div>
															@endforeach

														@else
														
														<div class="alert alert-danger">You don't have any creations. Please use your package to publish your creations</div>

															@if(!empty($packageOrderData) && $packageOrderData->toArray())

																<div class="butn text-center">
																	<a href="{{ url('/user/dashboard?tab=packages') }}"><button id="changePasswordFormBtn" type="button" class="uppercase form-btn tab-form-btn-font">Post Creation</button></a>
																</div>

															@else

																<div class="butn text-center">
																	<a href="{{ url('/packages') }}"><button id="changePasswordFormBtn" type="button" class="uppercase form-btn tab-form-btn-font">Buy Plans & Packages</button></a>
																</div>

															@endif

														@endif
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="data account-forms bodyMeasurement profile-page myJobs {{ ($tab == 'received-creations')? 'active':'' }}" id="myReceivedJobs">
								<div class="form">
									<div class="profile-main">
										<div class="profile-container">
											<div class="profile">
												<div class="_flex">
													<div class="detail">
														@if(!empty($singleJob) && !empty($appliedJobsList) && !empty($appliedJobsList->toArray()))
														<h3>{{ $singleJob->title }}</h3>
														<span class="user-designation">Received creations are listed below</span>
														<div class="dashboard profile-page">
															<div class="box-shadow">
																<div class="table_">
																	<table width="100%" cellpadding="0" cellpadding="0">
																		<thead>
																			<th>Creator</th>
																			<th>Status</th>
																			<th>New Status</th>
																			<th>Link</th>
																			<th>Applied Date</th>
																			<th>Last Action Taken</th>
																		</thead>
																		<tbody>
																			@if(!empty($appliedJobsList) && !empty($appliedJobsList->toArray()))
																			@foreach($appliedJobsList as $appliedJob)
																				@php
																					$creatorData = userInfoById($appliedJob->user_id);
																					$canJobApproved = canJobApproved($appliedJob->job_id);
																				@endphp
																			<tr>
																				
																				<td>{{ $creatorData->first_name.' '.$creatorData->last_name }}</td>
																				
																				<td><span class="status {{ $appliedJob->job_status }}"></span>{{ ucwords($appliedJob->job_status) }}</td>

																				<td>
																					@if(($appliedJob->job_status == 'submitted' OR $appliedJob->job_status == 're-submitted') && $canJobApproved)
																					<select class="newStatus" name="newStatus" data-id="{{ $appliedJob->id }}" data-jobid="{{ $appliedJob->job_id }}" data-token="{{ @csrf_token() }}">
																						<option value="">Select Status</option>
																						<option value="approved">Approved</option>
																						<option value="rejected">Rejected</option>
																					</select>
																					@else
																					-
																					@endif
																				</td>

																				<td><a target="_blank" href="{{ $appliedJob->video_link }}">Video Link</a></td>

																				<td>
																					{{ date('d/m/Y', strtotime($appliedJob->created_at)) }} <span class="light">{{ date('h:i A', strtotime($appliedJob->created_at)) }}</span>
																				</td>

																				<td>
																					@if(!empty($appliedJob->last_action_taken))
																						{{ date('d/m/Y', strtotime($appliedJob->last_action_taken)) }} <span class="light">{{ date('h:i A', strtotime($appliedJob->last_action_taken)) }}</span>
																					@else
																						-
																					@endif
																				</td>
																			</tr>

																			@endforeach
																			@else
																			<tr class="text-center">
																				<td>There are no creations data.</td>
																			</tr>
																			@endif
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
														@else
														<h3>No data found</h3>
														@endif
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="data account-forms bodyMeasurement profile-page transactions myJobs {{ ($tab == 'transactions')? 'active':'' }}" id="transactions">
								<div class="form">
									<div class="profile-main">
										<div class="profile-container">
											<div class="profile">
												<div class="_flex">
													<div class="detail">
														<h3>My Transactions</h3>
														<span class="user-designation">Your transactions listed below</span>
														<div class="dashboard profile-page">
															<div class="box-shadow">
																<div class="table_">
																	<table width="100%" cellpadding="0" cellpadding="0">
																		<thead>
																			
																				<th>Package Name</th>
																				<th>Amount</th>
																				<th>Total Creations</th>
																				<th>Timeline</th>
																				<th>Date</th>
																		</thead>
																		<tbody>
																			@if(!empty($myTransactions) && !empty($myTransactions->toArray()))
																			@foreach($myTransactions as $transaction)
																			<tr>
																				<td>{{ $transaction->package_name }}</td>
																				<td>${{ $transaction->price }}</td>
																				<td>{{ $transaction->no_of_videos }}</td>
																				<td>{{ $transaction->timeline }} Days</td>
																				<td>{{ date('d/m/Y', strtotime($jobs->created_at)) }} <span class="light">{{ date('h:i A', strtotime($jobs->created_at)) }}</span></td>
																			</tr>
																			@endforeach
																			@else
																			<tr class="text-center">
																				<td>There are no transaction data.</td>
																			</tr>
																			@endif
																		</tbody>
																	</table>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="data account-forms bodyMeasurement profile-page changePassword {{ ($tab == 'password')? 'active':'' }}" id="changePassword">
								<form id="changePasswordForm" action="{{ url('user/doChangePassword') }}" method="post">
									<div class="form">
										<div class="profile-main">
											<div class="profile-container">
												<div class="profile">
													<div class="_flex">
														<div class="detail">
															<h3>Change Password</h3>
															<span class="user-designation">Mandatory fields are marked *</span>
															<div class="form__">
																<div class="form-field">
																	<input type="password" name="currentPassword" class="mr-42">
																	<span class="imp">*<span class="plc">Current Password</span></span>
																	<span id="currentPasswordErr" class="error removeErr"></span>
																</div>
																<div class="form-field">
																	<input type="password" name="newPassword">
																	<span class="imp">*<span class="plc">New Password</span></span>
																	<span id="newPasswordErr" class="error removeErr"></span>
																</div>
																<div class="form-field">
																	<input type="password" name="confirmPassword" class="mr-42">
																	<span class="imp">*<span class="plc">Confirm New Password</span></span>
																	<span id="confirmPasswordErr" class="error removeErr"></span>
																</div>
																<div class="butn">
																	@csrf
																	<button type="button" class="uppercase form-btn tab-form-btn-font mr-36">Cancel</button>
																	<button id="changePasswordFormBtn" type="submit" class="uppercase form-btn tab-form-btn-font">Update Password</button>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>


							<!-- <div class="data account-forms orders" id="myProfile">
								<div class="form">
									<h1 class="tab-body-main-font uppercase">My Orders</h1>
									<div class="my-orders">
										<table border="0">
											<thead>
												<tr>
													<td>Order ID</td>
													<td>Order Date</td>
													<td>Product Name</td>
													<td>Qty</td>
													<td>Price</td>
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>ABCD321</td>
													<td>14/04/22</td>
													<td>Royal Blue Kuwaiti Kandora</td>
													<td>342</td>
													<td>1643.50 AED</td>
												</tr>
												<tr>
													<td>ABCD321</td>
													<td>14/04/22</td>
													<td>Royal Blue Kuwaiti Kandora</td>
													<td>342</td>
													<td>1643.50 AED</td>
												</tr>
												<tr>
													<td>ABCD321</td>
													<td>14/04/22</td>
													<td>Royal Blue Kuwaiti Kandora</td>
													<td>342</td>
													<td>1643.50 AED</td>
												</tr>
												<tr>
													<td>ABCD321</td>
													<td>14/04/22</td>
													<td>Royal Blue Kuwaiti Kandora</td>
													<td>342</td>
													<td>1643.50 AED</td>
												</tr>
												<tr>
													<td>ABCD321</td>
													<td>14/04/22</td>
													<td>Royal Blue Kuwaiti Kandora</td>
													<td>342</td>
													<td>1643.50 AED</td>
												</tr>
												<tr>
													<td>ABCD321</td>
													<td>14/04/22</td>
													<td>Royal Blue Kuwaiti Kandora</td>
													<td>342</td>
													<td>1643.50 AED</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div> -->
							<!-- <div class="data account-forms bodyMeasurement" id="myJobs">
								<div class="form">
									<h1 class="tab-body-main-font">Enter your Body Measurements below (in cm only)</h1>
									<p class="tab-body-para-font">Click here to follow our step by step guide.</p>
									<form action="">
										<div class="form-field">
											<input type="text" name="necksize" class="mr-42">
											<span class="imp">*<span class="plc">Neck Size</span></span>
										</div>
										<div class="form-field">
											<input type="text" name="shouldersize">
											<span class="imp">*<span class="plc">Shoulder Size</span></span>
										</div>
										<div class="form-field">
											<input type="text" name="chestsize" class="mr-42">
											<span class="imp">*<span class="plc">Chest Size</span></span>
										</div>
										<div class="form-field">
											<input type="text" name="waistsize">
											<span class="imp">*<span class="plc">Waist Size</span></span>
										</div>
										<div class="form-field">
											<input type="text" name="armsize" class="mr-42">
											<span class="imp">*<span class="plc">Arm Size</span></span>
										</div>
										<div class="form-field">
											<input type="text" name="wristsize">
											<span class="imp">*<span class="plc">Wrist Size</span></span>
										</div>
										<div class="form-field">
											<input type="text" name="kandoralength" class="mr-42">
											<span class="imp">*<span class="plc">Kandora Length</span></span>
										</div>
										<span class="after">
											<select name="fitting" id="fitting">
												<option value="">Your Preferred Fitting</option>
											</select>
											<div class="select"></div>
											<div class="custom-select">
												<ul>
													<li>Your Preferred Fitting 1</li>
													<li>Your Preferred Fitting 2</li>
												</ul>
											</div>
											<span class="imp">*<span class="plc">Your Preferred Fitting</span></span>
											<span class="arw"><img src="{{ url('public/frontend') }}/images/ExpandMore.png" alt=""></span>
										</span>
										<div class="form-field">
											<input type="text" name="yourheight" class="mr-42">
											<span class="imp">*<span class="plc">Your Height</span></span>
										</div>
										<div class="form-field">
											<input type="text" name="bodyweight">
											<span class="imp">*<span class="plc">Your Body Weight</span></span>
										</div>
										<div class="butn">
											<button class="uppercase form-btn tab-form-btn-font mr-36">Cancel</button>
											<button class="uppercase form-btn tab-form-btn-font">Update Info</button>
										</div>
									</form>
								</div>
							</div> -->

							<div class="data account-forms kandoraMeasurement {{ ($tab == 'packages')? 'active':'' }}" id="myPackages">
								<div class="profile">
									<div class="detail">
										<div class="pricing-table">
										    <div class="_container">
										        <h3 style="text-align:left;">Plans & Packages</h3>
										        <span class="user-designation" style="text-align: left;">Choose the right package for your business and get connected with the Content Creators reowned</span>

										        @if(!empty($packageOrderData) && $packageOrderData->toArray())
										        <div class="subscription-container" id="reels">

										        	@foreach($packageOrderData as $packageOrderData)
								                	<div class="subscription__button">
								                      <h3 class="subscription__title subscription__title--personal"> 
								                        {{ $packageOrderData->package_name }}
								                        <span class="subscription__icon">${{ $packageOrderData->price }}</span> 
								                      </h3>
								                      <ul class="subscription__list">
								                        <li class="subscription__item">
								                          <!--<i class="icon-subscription fas fa-check-circle"></i>-->
								                          <span>
								                              {{ $packageOrderData->no_of_videos }} {{ $packageOrderData->category_name }}/Videos
								                            	
								                            	@if(!empty($packageOrderData->timeline))
								                            	<br><span class="subscription__item-text">{{ $packageOrderData->timeline }} Days Timeline</span>
								                            	@endif

								                          </span>
								                
								                        </li>
								                      </ul>
								                      
								                      @if($packageOrderData->is_package_used == 'no')
								                      <button onclick="window.location.href='{{ url('user/post-job/'.$packageOrderData->id) }}'" type="button">Post Creation</button>
								                      @else
								                      <button style="visibility:hidden;" type="button">Used</button>
								                      @endif

								               		</div>
								               		@endforeach

								                </div>

								                @else

								               		<div class="alert alert-danger">You don't have any package.</div>

								               		<div class="butn text-center">
														<a href="{{ url('/packages') }}"><button id="changePasswordFormBtn" type="button" class="uppercase form-btn tab-form-btn-font">Buy Plans & Packages</button></a>
													</div>

								               	@endif

										    </div>
										</div>	
									</div>							
								</div>
							</div>

							<div class="data account-forms kandoraMeasurement {{ ($tab == 'customPackages')? 'active':'' }}" id="customPackages">
								<div class="profile">
									<div class="detail">
										<div class="pricing-table">
										    <div class="_container">
										        <h3 style="text-align:left;">Custom Packages</h3>
										        <span class="user-designation" style="text-align: left;">Choose the right package for your business and get connected with the Content Creators reowned</span>

										        @if(!empty($customPackage) && $customPackage->toArray())
										        <div class="subscription-container" id="reels">

										        	@foreach($customPackage as $customPack)
								                	@php
								                		$isFreePackageUsed = $orderModel->where('package_id', $customPack->id)->where('user_id', $customPack->user_id)->where('price', 0)->count();
								                	@endphp

								                	@if(!$isFreePackageUsed)
								                	<div class="subscription__button">
								                      <h3 class="subscription__title subscription__title--personal font-28"> 
								                        {{ $customPack->package_name }}
								                        <span class="subscription__icon">${{ $customPack->price }}</span> 
								                      </h3>
								                      <ul class="subscription__list">
								                        <li class="subscription__item">
								                          <!--<i class="icon-subscription fas fa-check-circle"></i>-->
								                          <span>
								                              {{ $customPack->no_of_videos }} {{ $customPack->category_name }}/Videos
								                            	
								                            	@if(!empty($customPack->timeline))
								                            	<br><span class="subscription__item-text">{{ $customPack->timeline }} Days Timeline</span>
								                            	@endif

								                          </span>
								                
								                        </li>
								                      </ul>
								                      
								                      <button type="button" class="checkout" data-id="{{ $customPack->id }}" data-token="{{ @csrf_token() }}">Buy Now</button>

								               		</div>
								               		@endif

								               		@endforeach

								                </div>

								                @else

								               		<div class="alert alert-danger">You don't have any custom package.</div>

								               		<div class="butn text-center">
														<a href="{{ url('/packages') }}"><button id="changePasswordFormBtn" type="button" class="uppercase form-btn tab-form-btn-font">Buy Plans & Packages</button></a>
													</div>

								               	@endif

										    </div>
										</div>	
									</div>							
								</div>
							</div>

							<!-- <div class="data account-forms addresses" id="">
									<h1 class="tab-body-main-font uppercase">Your Addresses</h1>
									<p class="tab-body-para-font">Mandatory fields are marked <span>*</span></p>
									<div class="address-tab">
										<div>
											<a href="#shippingAddress">Shipping Address</a>
											<a href="#billingAddress" class="active">Billing Address</a>
										</div>
									</div>
									<div class="address-tab-body">
										<div class="data shippingAddress" id="shippingAddress">
											<p>The following addresses will be used on the checkout page by default.</p>
											<form action="">
												<div class="form-field">
													<input type="text" name="firstname" class="mr-42">
													<span class="imp">*<span class="plc">First Name</span></span>
												</div>
												<div class="form-field">
													<input type="text" name="lastname">
													<span class="imp">*<span class="plc">Last Name</span></span>
												</div>
												<span class="m-set">
													<span class="after">
														<select name="countryregion" id="">
															<option value="">Country/Region</option>
														</select>
														<div class="select"></div>
														<div class="custom-select">
															<ul>
																<li>Your Preferred Fitting 1</li>
																<li>Your Preferred Fitting 2</li>
															</ul>
														</div>
														<span class="imp">*<span class="plc">Country Ragion</span></span>
														<span class="arw"><img src="{{ url('public/frontend') }}/images/ExpandMore.png" alt=""></span>
													</span>
													<div class="form-field">
														<input type="text" name="towncity" class="mr-42">
														<span class="imp">*<span class="plc">Town/City</span></span>
													</div>
												</span>
												<div class="form-field">
													<textarea type="text" name="address"></textarea>
													<span class="imp">*<span class="plc">Address</span></span>
												</div>
												<div class="form-field">
													<input type="text" name="postcode" class="mr-42">
													<span class="imp"><span class="plc">Postcode/Zip (Optional)</span></span>
												</div>
												<span class="after">
													<select name="countryoptional" id="">
														<option value="">Country (Optional)</option>
													</select>
													<div class="select"></div>
													<div class="custom-select">
														<ul>
															<li>Your Preferred Fitting 1</li>
															<li>Your Preferred Fitting 2</li>
														</ul>
													</div>
													<span class="imp"><span class="plc">Country (Optional)</span></span>
													<span class="arw"><img src="{{ url('public/frontend') }}/images/ExpandMore.png" alt=""></span>
												</span>
												<div class="form-field">
													<input type="text" name="state" class="mr-42">
													<span class="imp">*<span class="plc">Enter State</span></span>
												</div>
												<div class="form-field">
													<input type="text" name="number" class="mr-42">
													<span class="imp">*<span class="plc">Phone Number</span></span>
												</div>
												<div class="butn">
													<button class="uppercase form-btn tab-form-btn-font mr-36">Cancel</button>
													<button class="uppercase form-btn tab-form-btn-font">Save Address</button>
												</div>
											</form>
										</div>
										<div class="data billingAddress active" id="billingAddress">
											<p>The following addresses will be used on the checkout page by default.</p>
											<form action="">
												<div class="form-field">
													<input type="text" name="firstname" class="mr-42">
													<span class="imp">*<span class="plc">First Name</span></span>
												</div>
												<div class="form-field">
													<input type="text" name="lastname">
													<span class="imp">*<span class="plc">Last Name</span></span>
												</div>
												<span class="m-set">
													<span class="after">
														<select name="countryregion" id="">
															<option value="">Country/Region</option>
														</select>
														<div class="select"></div>
														<div class="custom-select">
															<ul>
																<li>Your Preferred Fitting 1</li>
																<li>Your Preferred Fitting 2</li>
															</ul>
														</div>
														<span class="imp">*<span class="plc">Country Region</span></span>
														<span class="arw"><img src="{{ url('public/frontend') }}/images/ExpandMore.png" alt=""></span>
													</span>
													<div class="form-field">
														<input type="text" name="towncity" class="mr-42">
														<span class="imp">*<span class="plc">Town/City</span></span>
													</div>
												</span>
												<div class="form-field">
													<textarea type="text" name="address"></textarea>
													<span class="imp">*<span class="plc">Address</span></span>
												</div>
												<div class="form-field">
													<input type="text" name="postcode" class="mr-42">
													<span class="imp"><span class="plc">Postcode/Zip (Optional)</span></span>
												</div>
												<span class="after">
													<select name="countryoptional" id="">
														<option value="">Country (Optional)</option>
													</select>
													<div class="select"></div>
													<div class="custom-select">
														<ul>
															<li>Your Preferred Fitting 1</li>
															<li>Your Preferred Fitting 2</li>
														</ul>
													</div>
													<span class="imp"><span class="plc">Country (Optional)</span></span>
													<span class="arw"><img src="{{ url('public/frontend') }}/images/ExpandMore.png" alt=""></span>
												</span>
												<div class="form-field">
													<input type="text" name="state" class="mr-42">
													<span class="imp">*<span class="plc">Enter State</span></span>
												</div>
												<div class="form-field">
													<input type="text" name="number" class="mr-42">
													<span class="imp">*<span class="plc">Phone Number</span></span>
												</div>
												<div class="form-field">
													<input type="text" name="email" class="mr-42">
													<span class="imp">*<span class="plc">Email</span></span>
												</div>
												<div class="form-field">
													<div class="butn">
														<button class="uppercase form-btn tab-form-btn-font mr-36">Cancel</button>
														<button class="uppercase form-btn tab-form-btn-font">Update Address</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								<div class="add_msg">
									<div class="addressesMsg">
										<p>No saved Addresses currently added or available.</p>
									</div>
									<div class="butn">
										<button class="uppercase form-btn tab-form-btn-font mr-36">Add Billing Address</button>
										<button class="uppercase form-btn tab-form-btn-font">Add Shipping Address</button>
									</div>
								</div>
							</div> -->
							<!-- <div class="data account-forms paymentMethod" id="">
								<div class="form">
									<h1 class="tab-body-main-font uppercase">Choose Payment Method</h1>
									<p class="tab-body-para-font">Mandatory fields are marked <span>*</span></p>
									<div class="payment-tab">
										<div>
											<a href="#cards" class="active">
												<span></span>
												Credit/Debit Card
											</a>
										</div>
										<div>
											<a href="#cashod" class="">
												<span></span>
												Cash on Delivery
											</a>
										</div>
										<div>
											<a href="#cardod" class="">
												<span></span>
												Cash on Delivery
											</a>
										</div>
									</div>
									<div class="payment-tab-body">
										<div class="data cards active" id="cards">
											<form action="">
												<div class="form-field">
													<input type="text" name="cardnumber" class="mr-42">
													<span class="imp">*<span class="plc">Card Number</span></span>
												</div>
												<div class="form-field">
													<input type="text" name="mmyy">
													<span class="imp">*<span class="plc">MM/YY</span></span>
												</div>
												<div class="form-field">
													<input type="text" name="cvv" class="mr-42">
													<span class="imp">*<span class="plc">CVV</span></span>
												</div>
												<div class="form-field">
													<input type="text" name="nameoncard">
													<span class="imp">*<span class="plc">Name on Card</span></span>
												</div>
												<div class="butn">
													<button class="uppercase form-btn tab-form-btn-font mr-36">Update</button>
													<button class="uppercase form-btn tab-form-btn-font">Remove</button>
												</div>
											</form>
										</div>
										<div class="data cashod" id="cashod">
											<div class="paymentMsg">
												<p>You have chosen cash on delivery payment method for your account.</p>
											</div>
										</div>
										<div class="data cardod" id="cardod">
											<div class="paymentMsg">
												<p>You have chosen card on delivery payment method for your account. </p>
											</div>
										</div>
									</div>
								</div>
								<div class="paymentMsg hide">
									<p>No saved Payment Methods found.</p>
								</div>
							</div> -->
							<!-- <div class="data account-forms accountDetail" id="logout">
								<div class="form">
									<h1 class="tab-body-main-font uppercase">Account Details</h1>
									<p class="tab-body-para-font">Mandatory fields are marked <span>*</span></p>
									<form action="">
										<div class="form-field">
											<input type="text" name="firstname" class="mr-42">
											<span class="imp">*<span class="plc">First Name</span></span>
										</div>
										<div class="form-field">
											<input type="text" name="lastname">
											<span class="imp">*<span class="plc">Last Name</span></span>
										</div>
										<div class="form-field">
											<input type="text" name="displayname" class="mr-42">
											<span class="imp">*<span class="plc">Display Name</span></span>
										</div>
										<div class="form-field">
											<input type="text" name="email">
											<span class="imp">*<span class="plc">Email</span></span>
										</div>
										<div class="form-field plc-adjust">
											<input type="text" name="currentpassword" class="mr-42">
											<span class="imp"><span class="plc">Current Password (blank to leave unchanged)</span></span>
										</div>
										<div class="form-field plc-adjust">
											<input type="text" name="newpassword">
											<span class="imp"><span class="plc">New Password (blank to leave unchanged)</span></span>
										</div>
										<div class="form-field">
											<input type="text" name="confirmnewpassword" class="mr-42">
											<span class="imp"><span class="plc">Confirm New Password</span></span>
										</div>
										<div class="form-field">
											<div class="butn">
												<button class="uppercase form-btn tab-form-btn-font mr-36">Cancel</button>
												<button class="uppercase form-btn tab-form-btn-font">Save Changes</button>
											</div>
										</div>
									</form>
								</div>
							</div> -->						
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	// account tabs
	if($(window).width() < 991){

	  $('.tab-head ul').on('click', ".active", function(event) {
	  	event.preventDefault();
	    var a = $(this).closest("ul").children('li').children('a:not(.active)').toggleClass('SH');
	    console.log(a);
	  });

	  var allOption = $('.tab-head ul').children('li').children('a:not(.active)');
	  console.log(allOption);
	  $('.tab-head ul').on('click', 'a:not(.active)', function(event) {
	  	event.preventDefault();
	    allOption.removeClass('selected');
	    $(this).addClass('selected');
	    $('.tab-head ul li a').removeClass('active');
	    $(this).addClass('active');
	    // $('.tab-head ul li').children('.active').html($(this).html());
	    var id = $(this).attr('href');
	    $('.tab-body .account-forms').removeClass('active');
	    $(id).addClass('active');
	    $('.tab-head ul li a').removeClass('SH');
	  });
	  
	}else{

	  $('.tab-head ul li a').click(function(event) {
	  	event.preventDefault();
	    $('.tab-head ul li a').removeClass('active');
	    $(this).addClass('active');
	    var id = $(this).attr('href');
	    $('.tab-body .account-forms').removeClass('active');
	    $(id).addClass('active');
	    // console.log(id);
	  });

	}
	// remove plc from input on click
	$('.form-field input').focusin(function(){
	  $(this).next('.imp').css('opacity','0');
	  $(this).css('background','#fff');
	});
	$('.form-field input').focusout(function(){
	  $(this).next('.imp').css('opacity','1');
	  $(this).css('background','transparent');
	  // var a = $(this).val();
	  if($(this).val()){
	    // console.log('user input done')
	    $(this).next('.imp').css('opacity','0');
	    $(this).css('background','#fff');
	  }
	  // console.log(a);
	  // console.log('input clicked');
	});
	$(document).ready(function(){

		var input = $('.onload-check-input');

		input.each(function(index, el) {
			if ($(el).val()) {
				$(el).next('.imp').css('opacity','0');
				$(el).css('background','#fff');
			}
		});

		// if($('.onload-check-input').val()){
		// 	$('.onload-check-input').next('.imp').css('opacity','0');
		// 	$('.onload-check-input').css('background','#fff');
		// }

	});
	 $('.form-field textarea').focusin(function(){
	  $(this).next('.imp').css('opacity','0');
	  $(this).css('background','#fff');
	  // console.log('input clicked');
	});
	$('.form-field textarea').focusout(function(){
	  $(this).next('.imp').css('opacity','1');
	  $(this).css('background','transparent');
	  if ($(this).val()){
	    $(this).next('.imp').css('opacity','0');
	    $(this).css('background','#fff');
	  }
	  // console.log('input clicked');
	});
	$('.form-field-input input').focusin(function(){
	  $(this).next('.imp').css('opacity','0');
	  $(this).css('background','#fff');
	  // console.log('input clicked');
	});
	$('.form-field-input input').focusout(function(){
	  $(this).next('.imp').css('opacity','1');
	  $(this).css('background','transparent');
	  if ($(this).val()){
	    $(this).next('.imp').css('opacity','0');
	    $(this).css('background','#fff');
	  }
	  // console.log('input clicked');
	});
	$('.form-field-textarea textarea').focusin(function(){
	  $(this).next('.imp').css('opacity','0');
	  $(this).css('background','#fff');
	  // console.log('input clicked');
	});
	$('.form-field-textarea textarea').focusout(function(){
	  $(this).next('.imp').css('opacity','1');
	  $(this).css('background','transparent');
	  if ($(this).val()){
	    $(this).next('.imp').css('opacity','0');
	    $(this).css('background','#fff');
	  }
	  // console.log('input clicked');
	});

	// custom select
	$('.after').click(function(){
	 var a = $(this).children('.custom-select').slideToggle('slow');
	 var b = $(this).children('.imp').text();
	 var text = $(this).children('.imp');
	 var textp = $(this).children('.imp').children('.plc');
	 // var b = $(a).next('.custom-select');
	 // console.log(b);
	 var c = $(this).children('.custom-select').children('ul').children('li');
	 // console.log(c)
	 $(c).click(function(){
	  var d = $(this).text();
	  $(textp).text(d);
	  $(text).css('color','#a0a0a0');
	  // b.html(d);
	  // console.log(b);
	 });
	});
	// payment tab
	$('.payment-tab div a').click(function(){
	  $('.payment-tab div a').removeClass('active');
	  $(this).addClass('active');
	  var id = $(this).attr('href');
	  $('.payment-tab-body .data').removeClass('active');
	  $(id).addClass('active');
	});

	var coverImg = document.getElementById('update-cover-img');
	var coverImgBtn = document.getElementById('upload-cover-img');
	var profileImg = document.getElementById('update-profile-img');
	var profileImgBtn = document.getElementById('upload-profile-img');

	coverImgBtn.addEventListener('change', uploadCover);

	function uploadCover(event){
		var fileURL = URL.createObjectURL(event.target.files[0]);
		coverImg.src = fileURL;
	}

	$(profileImgBtn).on('change', uploadProfile);

	function uploadProfile(event){
		var fileURL = URL.createObjectURL(event.target.files[0]);
		profileImg.src = fileURL;
	}

	function selectOption(countryCode, id) {
		$("#"+id).val(countryCode);
	}
</script>

@include('vwFooter')
