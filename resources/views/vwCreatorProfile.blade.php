@include('vwHeader')
	@inject('walletHistoryModel', 'App\Models\WalletHistoryModel')
	@inject('userModel', 'App\Models\UserModel')
	@inject('applyJobModel', 'App\Models\ApplyJobsModel')
	@inject('saveJobModel', 'App\Models\SaveJobsModel')
	@inject('withdrawalRequestModel', 'App\Models\WithdrawalRequestModel')

	@php
		$isWithdrawalReqExist = $withdrawalRequestModel->where('user_id', $userInfo->id)->where('status', 'pending')->count();
	@endphp

<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
<link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet">
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<style type="text/css">
	.error {
		position: absolute;
	    bottom: 10%;
	    left: 0;
	    z-index: 9;
	    width: max-content;
	}
	.select2-container{
		height: 47px!important;
		border: 1px solid #ced4da;
		margin-bottom:5%;
	}
	.select2.select2-container.select2-container--bootstrap4{
		border: 1px solid #77bfdb;
		border-radius: 5px;
	}
	.select2-container--bootstrap4 .select2-selection--multiple .select2-selection__rendered{
		padding: 0 20px;
	}
	.select2-container span{
		height: 100%!important;
	}
	.select2-container--bootstrap4 .select2-selection{
		border: none;
	}
	.select2-container--bootstrap4.select2-container--focus .select2-selection{
		height: 100%!important;
	}
	.select2-container--bootstrap4 .select2-selection--multiple .select2-selection__clear{
		opacity: 0;
	}
	.select2-container--bootstrap4 .select2-results > .select2-results__options{
		background: #fff;
		border: 1px solid #000;
	}
	.tab-body .form-field.text_area{
		overflow: hidden!important;
	}
	.select2-container--bootstrap4 .select2-selection--multiple .select2-search__field{
		margin: 0;
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

    .subscription__title {
    	font-size: 18px !important;
    }

    .withdraw-div {
    	display: flex;
    }

    .withdraw-div-radio {
    	width: 10% !important;
    	height: 25px !important;
    }

    .withdraw-div-txt {
    	margin-left: 20px;
    }

    .withdrawl-form {
    	margin-top: 5rem;
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
									<a onclick="window.location.href='{{ url('/user/dashboard?tab=profile') }}'" href="#myProfile" class="tab-head-font {{ ($tab == 'profile')? 'active':'' }}">
										<p>Edit Profile</p>
										<img src="{{ url('public/frontend') }}/images/my-profile.png" alt="">
									</a>
								</li>
								<li>
									<a href="#myJobs" class="tab-head-font {{ ($tab == 'creations')? 'active':'' }}">
										<p>My Creations</p>
										<img src="{{ url('public/frontend') }}/images/my-jobs.png" alt="">
									</a>
								</li>
								<li>
									<a href="#paymentMethod" class="tab-head-font {{ ($tab == 'earnings')? 'active':'' }}">
										<p>Earnings: ${{ $userInfo->wallet_amount }}</p>
										<img src="{{ url('public/frontend') }}/images/payment.png" alt="">
									</a>
								</li>

								<li>
									<a onclick="window.location.href='{{ url('/user/dashboard?tab=transactions') }}'" href="#transactions" class="tab-head-font {{ ($tab == 'transactions')? 'active':'' }}">
										<p>Transactions</p>
										<img src="{{ url('public/frontend') }}/images/payment.png" alt="">
									</a>
								</li>

								<li>
									<a onclick="window.location.href='{{ url('/user/dashboard?tab=saveCreations') }}'" href="#saveCreations" class="tab-head-font {{ ($tab == 'saveCreations')? 'active':'' }}">
										<p>Saved Creations</p>
										<img src="{{ url('public/frontend') }}/images/payment.png" alt="">
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
																${{ $userInfo->wallet_amount }}
																<span>Earnings</span>
															</div>
															<div class="total-posted">
																{{ count($jobListData) }}
																<span>Total Creations Applied</span>
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
																<p>{{ $applyJobModel->where('user_id', $userInfo->id)->count() }}</p>
															</div>
															<div class="projects-categories">
																<h4>Applied Creations</h4>
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
																<p>{{ $applyJobModel->where([['user_id', $userInfo->id],['job_status', 'approved']])->count() }}</p>
															</div>
															<div class="projects-categories">
																<h4>Approved Creations</h4>
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
																<img src="{{ url('public/frontend/') }}/images/dashboard-icon/dashboard-main/cancelled.png">
															</div>
															<div class="projects-numbers">
																<p>{{ $applyJobModel->where([['user_id', $userInfo->id],['job_status', 'rejected']])->count() }}</p>
															</div>
															<div class="projects-categories">
																<h4>Rejected Creations</h4>
															</div>
															<img class="pos-top-right-projects" src="{{ url('public/frontend/') }}/images/dashboard-icon/dashboard-main/cancelled.png">
														</div>
													</a>
												</div>
												<div class="col-lg-4 col-md-6">
													<a href="#">
														<div class="projects">
															<div class="img-icon">
																<span class="circle-bg"></span>
																<img src="{{ url('public/frontend/') }}/images/dashboard-icon/dashboard-main/comment.png">
															</div>
															<div class="projects-numbers">
																<p>{{ $saveJobModel->where([['user_id', $userInfo->id]])->count() }}</p>
															</div>
															<div class="projects-categories">
																<h4>Save Jobs</h4>
															</div>
															<img class="pos-top-right-projects" src="{{ url('public/frontend/') }}/images/dashboard-icon/dashboard-main/comment.png">
														</div>
													</a>
												</div>
												<div class="col-lg-4 col-md-6">
													<a href="#">
														<div class="projects">
															<div class="img-icon">
																<span class="circle-bg"></span>
																<img src="{{ url('public/frontend/') }}/images/dashboard-icon/dashboard-main/gigs.png">
															</div>
															<div class="projects-numbers">
																<p>${{ $walletHistoryModel->where('user_id', $userInfo->id)->where('transaction_type', 'CR')->sum('amount'); }}</p>
															</div>
															<div class="projects-categories">
																<h4>Earnings</h4>
															</div>
															<img class="pos-top-right-projects" src="{{ url('public/frontend/') }}/images/dashboard-icon/dashboard-main/gigs.png">
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
																<p>${{ $walletHistoryModel->where('user_id', $userInfo->id)->where('transaction_type', 'DR')->sum('amount'); }}</p>
															</div>
															<div class="projects-categories">
																<h4>Withdrawal</h4>
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

																<div class="form-field text_area">
																	<select name="expertise[]" multiple placeholder="Select Your Expertise" data-allow-clear="1">
																		@if(!empty($categoryList) && $categoryList->toArray())
																			@php

																				$userExpertise = [];

																				if(!empty($userInfo->expertise)) {
																					$userExpertise = explode(',', $userInfo->expertise);
																				}

																			@endphp
																		@foreach($categoryList as $category)
																        	<option {{ (in_array($category->id, $userExpertise))? 'selected':''; }} value="{{ $category->id }}">{{ $category->category_name }}</option>
																        @endforeach
																        @endif
																    </select>
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
														<span class="user-designation">Your creations listed below</span>
														<div class="dashboard profile-page">
															<div class="box-shadow">
																<div class="table_">
																	<table width="100%" cellpadding="0" cellpadding="0">
																		<thead>
																			
																				<th>Title</th>
																				<th>Category</th>
																				<th>Status</th>
																				<th>Date</th>
																				<th>Last Action Taken</th>
																				<th>Action</th>
																			
																		</thead>
																		<tbody>
																			@if(!empty($jobListData) && !empty($jobListData->toArray()))
																			@foreach($jobListData as $jobs)
																			<tr>
																				<td>{{ $jobs->title }}</td>
																				<td>{{ $jobs->category_name }}</td>
																				<td><span class="status {{ $jobs->job_status }}"></span>{{ ucwords($jobs->job_status) }}</td>
																				<td>{{ date('d/m/Y', strtotime($jobs->created_at)) }} <span class="light">{{ date('h:i A', strtotime($jobs->created_at)) }}</span></td>
																				<td>
																					@if(!empty($jobs->last_action_taken))
																						{{ date('d/m/Y', strtotime($jobs->last_action_taken)) }} <span class="light">{{ date('h:i A', strtotime($jobs->last_action_taken)) }}</span>
																					@else
																						-
																					@endif
																				</td>
																				<td>
																					@if($jobs->job_status == 'pending' OR $jobs->job_status == 'rejected')
																					<div onclick="openModel(this)" class="action" data-toggle="modal" data-target="#myModal-<?php echo $jobs->id ?>">
																						Send Video
																						<!-- <i class="fa-solid fa-caret-down"></i>
																						<div class="action-dropdown">
																							<ul>
																								<li>select</li>
																								<li>select</li>
																							</ul>
																						</div> -->
																					</div>
																					@else
																					-
																					@endif
																				</td>
																			</tr>

																			@if($jobs->job_status == 'pending' OR $jobs->job_status == 'rejected')
																			<div class="modal fade" id="myModal-<?php echo $jobs->id ?>" role="dialog">
																			    <div class="modal-dialog">
																			    
																			      <!-- Modal content-->
																			      <div class="modal-content">
																			        <div class="modal-header">
																			          <!-- <button type="button" class="close" data-dismiss="modal">&times;</button> -->
																			          <h4 class="modal-title">Submit Creation</h4>
																			        </div>
																			        <div class="modal-body">
																			          
																			          <form action="{{ url('user/doSendVideo') }}" class="submitVideoForm" method="post" data-id="">
																			          	
																			          	<input type="text" class="form-control" name="videoUrl" placeholder="Enter Video URL">
																			          	<p class="videoUrlErr text-danger removeErr"></p>

																			          	<input type="hidden" name="jobId" value="<?php echo $jobs->id ?>">

																			          	@csrf

																			          	<button type="submit" class="submitVideoFormBtn btn btn-primary">Send Creation</button>
																			          </form>

																			        </div>
																			        <div class="modal-footer">
																			          <button onclick="closeModel(this)" data-target="#myModal-<?php echo $jobs->id ?>" type="button" class="btn btn-default" data-dismiss="modal">Close</button>
																			        </div>
																			      </div>
																			      
																			    </div>
																			</div>
																			@endif

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
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							
							<div class="data account-forms bodyMeasurement profile-page paymentMethods {{ ($tab == 'earnings')? 'active':'' }}" id="paymentMethod">
								<!-- <form id="paymentMethodForm" action="{{ url('user/doUpdatePaymentMethod') }}" method="post"> -->
									<div class="form">
										<div class="profile-main">
											<div class="profile-container">
												<div class="profile">
													<div class="_flex">
														<div class="detail">
															<h3>My Earnings</h3>
															<!-- <span class="user-designation">Please enter your stripe ID to recieve your payout.</span> -->
															
															<!-- <img style="width: 173px" src="{{ url('public/frontend') }}/images/stripe.webp" alt="" class="paypal-img">
															<div class="form__">
																<div class="form-field">
																	<input type="text" name="stripeId" class="mr-42">
																	<span class="imp">*<span class="plc">Stripe Id</span></span>
																	<span id="stripeIdErr" class="error removeErr"></span>
																</div>
																<div class="butn">
																	@csrf
																	<button id="paymentMethodFormBtn" type="submit" class="uppercase form-btn tab-form-btn-font">Submit</button>
																</div>
															</div> -->

															<div class="_main_earning_parent">
																<div class="earnings-main">
																	<div class="row">

																		<div class="col-lg-4 col-md-4 col-sm-6">
																			<div class="earnings-part _1">
																				<div class="img-icon earning-part">
																					<span class="circle-bg"></span>
																					<img src="{{ url('public/frontend/images/') }}/dashboard-main/earned-revenue.png">
																				</div>
																				<div class="earnings-text">
																					<h4>${{ $walletHistoryModel->where('user_id', $userInfo->id)->where('transaction_type', 'CR')->sum('amount'); }}</h4>
																					<p>Earned Revenue</p>
																				</div>
																			</div>
																		</div>

																		<div class="col-lg-4 col-md-4 col-sm-6">
																			<div class="earnings-part _1">
																				<div class="img-icon earning-part">
																					<span class="circle-bg"></span>
																					<img src="{{ url('public/frontend/images/') }}/dashboard-main/withdrawn.png">
																				</div>
																				<div class="earnings-text">
																					<h4>${{ $walletHistoryModel->where('user_id', $userInfo->id)->where('transaction_type', 'DR')->sum('amount'); }}</h4>
																					<p>Withdrawn Amount</p>
																				</div>
																			</div>
																		</div>

																		<div class="col-lg-4 col-md-4 col-sm-6">
																			<div class="earnings-part _1">
																				<div class="img-icon earning-part">
																					<span class="circle-bg"></span>
																					<img src="{{ url('public/frontend/images/') }}/dashboard-main/balance.png">
																				</div>
																				<div class="earnings-text">
																					<h4>${{ $userInfo->wallet_amount }}</h4>
																					<p>Available Balance</p>
																				</div>
																			</div>
																		</div>

																	</div>

																</div>

																<div class=" withdraw-btn filled pull-right">
																	@if($userInfo->wallet_amount >= 50 && !$isWithdrawalReqExist)
																		<button id="paymentMethodFormBtn" type="submit" class="uppercase form-btn tab-form-btn-font">Withdraw</button>
																	@else
																		<p class="text-danger">*Minimum amount for withdrawl must be $50</p>
																	@endif
																</div>

															</div>

															@if(!$isWithdrawalReqExist)
															<form id="withdrawalForm" action="{{ url('user/doPaymentRequest') }}" method="post">
															
																<div class="withdrawl-form" style="display:none">
																	
																	<div class="row">

																		<div class="col-lg-4 col-md-4 col-sm-6">
																			<div class="earnings-text withdraw-div">
																				<input class="withdraw-div-radio" type="radio" name="paymentMethod" value="bank_transfer" checked> 
																				<span class="withdraw-div-txt">Bank Transfer</span>
																			</div>
																		</div>

																		<div class="col-lg-4 col-md-4 col-sm-6">
																			<div class="earnings-text withdraw-div">
																				<input class="withdraw-div-radio" type="radio" name="paymentMethod" value="paypal"> 
																				<span class="withdraw-div-txt">Paypal</span>
																			</div>
																		</div>

																		<div class="col-lg-4 col-md-4 col-sm-6">
																			<div class="earnings-text withdraw-div">
																				<input class="withdraw-div-radio" type="radio" name="paymentMethod" value="stripe"> 
																				<span class="withdraw-div-txt">Stripe</span>
																			</div>
																		</div>

																	</div>

																	<div class="profile-main" id="bank_transfer_method" style="display:none;">
																		<div class="profile-container pull-left">
																			<div class="profile">
																				<div class="_flex">
																					<div class="detail">
																						<div class="form__">
																							<div class="form-field">
																								<input type="text" name="accountHolderName" class="mr-42 onload-check-input" value="{{ $userInfo->account_holder_name }}">
																								<span class="imp">*<span class="plc">Account Holder Name</span></span>
																								<span id="accountHolderNameErr" class="error removeErr"></span>
																							</div>
																							<div class="form-field">
																								<input type="text" name="bankName" class="onload-check-input" value="{{ $userInfo->bank_name }}">
																								<span class="imp">*<span class="plc">Bank Name</span></span>
																								<span id="bankNameErr" class="error removeErr"></span>
																							</div>
																							<div class="form-field">
																								<input readonly type="text" name="accountNumber" value="{{ $userInfo->account_number }}" class="mr-42 onload-check-input">
																								<span class="imp">*<span class="plc">Account Number</span></span>
																								<span id="accountNumberErr" class="error removeErr"></span>
																							</div>
																							<div class="form-field">
																								<input readonly type="text" name="iban" value="{{ $userInfo->iban }}" class="mr-42 onload-check-input">
																								<span class="imp">*<span class="plc">IBAN</span></span>
																								<span id="ibanErr" class="error removeErr"></span>
																							</div>
																							<div class="form-field">
																								<input readonly type="text" name="ifscCode" value="{{ $userInfo->ifsc_code }}" class="mr-42 onload-check-input">
																								<span class="imp">*<span class="plc">IFSC Code</span></span>
																								<span id="ifscCodeErr" class="error removeErr"></span>
																							</div>
																							<div class="form-field">
																								<input readonly type="text" name="remark" value="" class="mr-42 onload-check-input">
																								<span class="imp">*<span class="plc">Remark</span></span>
																								<span id="remarkErr" class="error removeErr"></span>
																							</div>

																							<div class="text-danger" style="text-align: left;">
																	                            <p>
																	                                *Please provide us all the details about your bank account to receive the funds without any interrupts. <br>
																	                                *The duration of the amount receiving will be based on the country and bank process.
																	                            </p>
																	                        </div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>

																	<div class="profile-main" id="paypal_method" style="display:none;">
																		<div class="profile-container pull-left">
																			<div class="profile">
																				<div class="_flex">
																					<div class="detail">
																						<div class="form__">
																							<div class="form-field">
																								<input type="text" name="paypalEmail" class="mr-42 onload-check-input" value="{{ $userInfo->paypal_id }}">
																								<span class="imp">*<span class="plc">Enter your Email Address</span></span>
																								<span id="paypalEmailErr" class="error removeErr"></span>
																							</div>

																							<div class="text-danger" style="text-align: left;">
																	                            <p>
																	                                *If this email is not registered with Paypal you will recieve the link to create a PayPal account to recieve the money.<br>
																	                            </p>
																	                        </div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>

																	<div class="profile-main" id="stripe_method" style="display:none;">
																		<div class="profile-container pull-left">
																			<div class="profile">
																				<div class="_flex">
																					<div class="detail">
																						<div class="form__">
																							<div class="form-field">
																								<input type="text" name="stripeId" class="mr-42 onload-check-input" value="{{ $userInfo->paypal_id }}">
																								<span class="imp">*<span class="plc">Enter your Stripe ID</span></span>
																								<span id="stripeIdErr" class="error removeErr"></span>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>

																	<div class="profile-main" id="all_method_button">
																		<div class="profile-container pull-left">
																			<div class="profile">
																				<div class="_flex">
																					<div class="detail">
																						<div class="form__">
																							
																							<div class="butn" style="width: 100%;margin: unset;">
																								@csrf
																								<button id="withdrawalFormBtn" type="submit" class="uppercase form-btn tab-form-btn-font mr-36">Submit</button>
																							</div>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>

																</div>

															</form>
															@endif

														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
								<!-- </form> -->
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
																			
																				<th>Amount</th>
																				<th>Transaction Type</th>
																				<th>Comment</th>
																				<th>Date</th>
																		</thead>
																		<tbody>
																			@if(!empty($myTransactions) && !empty($myTransactions->toArray()))
																			@foreach($myTransactions as $transaction)
																			<tr>
																				<td>${{ $transaction->amount }}</td>
																				<td>{{ $transaction->transaction_type }}</td>
																				<td>{{ $transaction->comment }}</td>
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

							<div class="data account-forms kandoraMeasurement {{ ($tab == 'saveCreations')? 'active':'' }}" id="saveCreations">
								<div class="profile">
									<div class="detail">
										<div class="pricing-table">
										    <div class="_container">
										        <h3 style="text-align:left;">Saved Creations</h3>
										        <span class="user-designation" style="text-align: left;">Your selected creations</span>
										        @php										        	
													$savedCreations = $saveJobModel->select('jobs.*', 'orders.package_name', 'orders.no_of_videos', 'orders.timeline', 'category.category_name', 'platform.platform_name', 'genre.genre_name', 'video_size.video_slug')
													->where('save_jobs.user_id', $userInfo->id)
													->join('jobs', 'save_jobs.job_id', '=', 'jobs.id')
													->join('orders', 'jobs.order_id', '=', 'orders.id')
													->leftJoin('category', 'jobs.category_id', '=', 'category.id')
													->leftJoin('platform', 'jobs.platform_id', '=', 'platform.id')
													->leftJoin('genre', 'jobs.genre_id', '=', 'genre.id')
													->leftJoin('video_size', 'jobs.video_size', '=', 'video_size.id')
													->get();

										        @endphp

										        @if(!empty($savedCreations))
										        <div class="subscription-container" id="reels">

										        	@foreach($savedCreations as $savedCreation)
								                	<div class="subscription__button">
								                      <h3 class="subscription__title subscription__title--personal"> 
								                        {{ $savedCreation->title }}
								                      </h3>
								                      <ul class="subscription__list">
								                        <li class="subscription__item">
								                          <!--<i class="icon-subscription fas fa-check-circle"></i>-->
								                          <span>
								                              {{ $savedCreation->no_of_videos }} {{ $savedCreation->category_name }}/Videos
								                              <br><span class="subscription__item-text">{{ $savedCreation->timeline }} Days Timeline</span>
								                          </span>
								                
								                        </li>
								                      </ul>
								                      
								                      
								                     <button onclick="window.location.href='{{ url('/creations/'.$savedCreation->slug) }}'" type="button">View</button>								                      

								               		</div>
								               		@endforeach

								                </div>

								                @else

								               		<div class="alert alert-danger">You don't have saved creations.</div>

								               	@endif

										    </div>
										</div>	
									</div>							
								</div>
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

	$(function () {
	  $('select').each(function () {
	    $(this).select2({
	      theme: 'bootstrap4',
	      width: 'style',
	      placeholder: $(this).attr('placeholder'),
	      allowClear: Boolean($(this).data('allow-clear')),
	    });
	  });
	});

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
