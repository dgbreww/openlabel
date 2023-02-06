@include('vwHeader')

<link rel="stylesheet" type="text/css" href="{{ url('public/frontend') }}/css/profile-listing.css">

<div class="profile_listing">
	<div class="_container">

		<div class="main">
			<div class="head" style="display: block; text-align: center;">
				<h2>Browse Creators</h2>
			</div>
		</div>

		<div class="profile_listing_inner">

			@if(!empty($creatorsData))
				@foreach($creatorsData as $creator)
					@php
						
						$profileImg = url('public/frontend/img/profile-img.png');

						if(!empty($creator->profile_picture)) {
							$profileImg = url('public/').$creator->profile_picture;
						}

						$expertiseList = '';

						if(!empty($creator->expertise)) {
							$getExpertise = explode(',', $creator->expertise);
							$expertiseList = App\Models\CategoryModel::select(DB::raw("GROUP_CONCAT(category_name SEPARATOR ', ') as expertiseList"))->whereIn('id', $getExpertise)->first();

							$getExpertise = json_decode($expertiseList);
							$expertiseList = (isset($getExpertise->expertiseList))? $getExpertise->expertiseList:'';
						}

					@endphp
				<div class="profile_listing_card active">
					<div class="profile_listing-card_inner">
						<div class="profile_listing_card_img"><img src="{{ $profileImg }}"></div>
						<div class="profile_listing-card_inner_content">
							<h2>{{ $creator->first_name.' '.$creator->last_name }} 
								
								@if(!empty($creator->badge_id))
								<span><img src="{{ getImg($creator->badge_img) }}"></span>
								@endif
							</h2>
							
							@if(!empty($creator->tag_line))
							<p class="ads-p">{{ $creator->tag_line }}</p>
							@endif

							<div class="profile_listing_location_sec">
								
								<div class="pl_content">
									<p>Total Jobs</p>
									<h3>125+</h3>
								</div>
								<div class="pl_content">
									<p>Rating</p>
									<h3>4.2</h3>
								</div>
							</div>
							
							<div class="profile_listing-expert">
								<p>Expert in:</p>
								<h2>{{ ($expertiseList)? $expertiseList:'-' }}</h2>
							</div>

							@if(!empty($creator->about))
							<p class="profile-p">{{ $creator->about }}</p>
							@endif
							<a href="{{ url('/creators/'.$creator->id) }}" class="profile_listing_btn">View Profile</a>
						</div>
					</div>
				</div>
				@endforeach
			@endif

		</div>
	</div>
</div>

@include('vwFooter')
