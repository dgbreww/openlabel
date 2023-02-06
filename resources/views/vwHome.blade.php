<style type="text/css">
	.homepage-category, .homepage-category:hover {
		color: unset;
	}

	.trending-jobs-cards .slick-track{
		margin-left: initial;
		margin-right: initial;
	}
	.trending-jobs ._card .detail {
		padding: 22px 20px;
	}
	.trending-jobs ._card .detail{
		/*min-height: 278px;*/
	}
	.trending-jobs .slick-slide{
		height: initial;
	}
	._card .detail p{
		min-height: 134px;
	}
	._card .like{
		border: 1px solid #000;
	}

	@media (max-width: 475px){
		.trending-jobs-cards .slick-next{
			right: -11%!important;
		}
		
		._card{
			border-radius: 15px!important;
		}
		.trending-jobs ._card .detail{
			padding: 15px 12px;
		}
	}

</style>

@include('vwHeader')

<link rel="stylesheet" type="text/css" href="{{ url('public/frontend') }}/css/profile-listing.css">

<div class="banner">
	<img src="{{ url('public/frontend') }}/img/home-banner.png" alt="" class="bg">
	<div class="main">
		<div class="content">
			<h1>How<br> <a href="{{ url('/about-us') }}"><span>TikTok</span></a> helped these artists promote their music and how you can too.</h1>
			<!-- <div class="search">
				<i class="fa-solid fa-magnifying-glass"></i>
				<input type="text" placeholder="What are you looking for?">
				<button>Search</button>
			</div> -->
			<div class="search new-search">
				<a href="{{ url('/contact-us') }}"><button type="button">Explore More</button></a>
			</div>
		</div>
	</div>
</div>

@if(!empty($categoryData))
<div class="creators-category">
	<div class="_container">
		<div class="main">
			<div class="head">
				<h2>Browse Creators by Category</h2>
				<a href="#">All Categories <i class="fa-solid fa-arrow-right-long"></i></a>
			</div>
			<div class="_flex">
				@foreach($categoryData as $category)
				<a class="homepage-category" href="{{ url('creations?category%5B%5D='.$category->category_slug) }}">
					<div class="cols">
						<img src="{{ url('public/'.$category->path) }}" alt="">
						<h4>{{ $category->category_name }}</h4>
						<!-- <p>26 Creators</p> -->
					</div>
				</a>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endif

@if(!empty($jobsData))
<div class="trending-jobs">
	<div class="_container">
		<div class="main">
			<div class="head">
				<h2>Trending Creations</h2>
				<a href="{{ url('/creations') }}">All Creations <i class="fa-solid fa-arrow-right-long"></i></a>
			</div>
			<div class="trending-jobs-cards">
				@foreach($jobsData as $jobs)
				<div class="_card">
					<!-- <img src="{{ url('public/frontend') }}/img/elem-1.png" alt=""> -->
					<span class="like">
						<i onclick="saveJob(this, {{ $jobs->id }})" data-token="{{ @csrf_token() }}" class="fa fa-heart likes-click {{ (isJobSaved($jobs->id))? 'like-bg':''; }}"></i>
					</span>
					<div class="detail">
						<div class="faizan">
							<span class="date">Posted {{ getHoursDays($jobs->created_at); }}</span>
							<h4>{{ $jobs->title }}</h4>
							<p>{{ \Illuminate\Support\Str::limit($jobs->job_brief, 200, $end='...') }}</p>
						</div>
						<div class="_flex">
							<span><img src="{{ url('public/frontend') }}/img/category.png" alt="">{{ $jobs->category_name }}</span>
							<a href="{{ url('creations/'.$jobs->slug) }}" class="butn">View Details</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endif

<div class="someting-done">
	<div class="_container">
		<h2 class="head">Need something done?</h2>
		<div class="_flex">
			<div class="cols">
				<span class="icon"><img src="{{ url('public/frontend') }}/img/icon-1.png" alt=""></span>
				<h4>Post a Creation</h4>
				<p>Lorem Ipsum dolor sit amet consectetur eget sit quis eget at augue eu.</p>
			</div>
			<div class="cols">
				<span class="icon"><img src="{{ url('public/frontend') }}/img/icon-2.png" alt=""></span>
				<h4>Find Creator</h4>
				<p>Lorem Ipsum dolor sit amet consectetur eget sit quis eget at augue eu.</p>
			</div>
			<div class="cols">
				<span class="icon"><img src="{{ url('public/frontend') }}/img/icon-3.png" alt=""></span>
				<h4>Pay Safely</h4>
				<p>Lorem Ipsum dolor sit amet consectetur eget sit quis eget at augue eu.</p>
			</div>
			<!-- <div class="cols">
				<span class="icon"><img src="{{ url('public/frontend') }}/img/icon-4.png" alt=""></span>
				<h4>Award Project</h4>
				<p>Lorem Ipsum dolor sit amet consectetur eget sit quis eget at augue eu.</p>
			</div> -->
			<div class="cols">
				<span class="icon"><img src="{{ url('public/frontend') }}/img/icon-5.png" alt=""></span>
				<h4>Need Help</h4>
				<p>Lorem Ipsum dolor sit amet consectetur eget sit quis eget at augue eu.</p>
			</div>
		</div>
	</div>
</div>

@if(!empty($creatorsData))
<div class="winning">
	<div class="_container">
		<div class="main">
			<div class="head">
				<h2>Creator Profiles</h2>
				<a href="{{ url('/creators') }}">Explore All <i class="fa-solid fa-arrow-right-long"></i></a>
			</div>
			<div class="profile_listing_inner {{ (count($creatorsData) > 4)? 'trending-profiles':'' }}">
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
								<span>
									<img src="{{ getImg($creator->badge_img) }}">
								</span>
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
			</div>
		</div>
	</div>
</div>
@endif

<div class="creators">
	<div class="_container">
		<div class="angle-main">
			<div class="_flex">
				<div class="content">
					<h2>A whole world of <br> <span>CREATORS</span> at your fingertips</h2>
					<ul>
						<li>
							<img src="{{ url('public/frontend') }}/img/creator-icon-1.png" alt="">
							<div class="detail">
								<h4>Creators across the world</h4>
								<p>check any pro's work samples, client reviews, and identity verification.</p>
							</div>
						</li>
						<li>
							<img src="{{ url('public/frontend') }}/img/creator-icon-2.png" alt="">
							<div class="detail">
								<h4>Verified Creators</h4>
								<p>check any pro's work samples, client reviews, and identity verification.</p>
							</div>
						</li>
						<li>
							<img src="{{ url('public/frontend') }}/img/creator-icon-3.png" alt="">
							<div class="detail">
								<h4>Seal of Quality</h4>
								<p>check any pro's work samples, client reviews, and identity verification.</p>
							</div>
						</li>
						<!-- <li>
							<img src="{{ url('public/frontend') }}/img/creator-icon-4.png" alt="">
							<div class="detail">
								<h4>Pay after hiring</h4>
								<p>check any pro's work samples, client reviews, and identity verification.</p>
							</div>
						</li> -->
						<li>
							<img src="{{ url('public/frontend') }}/img/creator-icon-5.png" alt="">
							<div class="detail">
								<h4>Safe and secure</h4>
								<p>check any pro's work samples, client reviews, and identity verification.</p>
							</div>
						</li>
					</ul>
				</div>
				<div class="image">
					<img src="{{ url('public/frontend') }}/img/creator-image.png" alt="">
					<div class="points">
						<ul>
							<li><img src="{{ url('public/frontend') }}/img/tick.png" alt="">Budget Friendly</li>
							<li><img src="{{ url('public/frontend') }}/img/tick.png" alt="">Quality work done quickly</li>
							<li><img src="{{ url('public/frontend') }}/img/tick.png" alt="">Verified creators across the world</li>
							<li><img src="{{ url('public/frontend') }}/img/tick.png" alt="">Secure payments everytime</li>
							<li><img src="{{ url('public/frontend') }}/img/tick.png" alt="">Need Support</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<div class="open-label">
	<div class="_container">
		<div class="_flex">
			<div class="content">
				<h2 class="head">What is Open Label</h2>
				<p>Open Label is a new app on the market that is taking TikTok promotion to the next level. This app utilizes TikTok's in-app features to help artists get their music heard by thousands of people. By using it’s third-party services, the app helps artists get their songs to go viral on tiktok, resulting in a huge surge in streams for their music.</p>
				<p>This is especially useful for up-and-coming artists who may not have the resources or reach of more established acts. With this app, even the most unknown artists can see their music reach new heights of popularity and get the recognition they deserve. It's truly a game-changer for anyone looking to make a splash in the music industry.</p>
				<a href="{{ url('/about-us') }}" class="butn">Know More</a>
			</div>
			<div class="img">
				<img src="{{ url('public/frontend') }}/img/open-label-img.png" alt="">
			</div>
		</div>
	</div>
</div>
<!-- start  why choose us sec-->
<div class="why-choose-sec">
	<div class="_container">
		<h2 class="why-heading">Why Choose Us</h2>
		<div class="why-choose-sec-inner">
			<div class="xm-card">
				<div class="xm-card-img">
					<img src="{{ url('public/frontend') }}/img/why-choose-img1.png">
					<span>xxm</span>
				</div>
				<p>Total Artist</p>
			</div>
			<div class="xm-card">
				<div class="xm-card-img">
					<img src="{{ url('public/frontend') }}/img/why-choose-img2.png">
					<span>xxm</span>
				</div>
				<p>Positive Rating & Review</p>
			</div>
			<div class="xm-card">
				<div class="xm-card-img">
					<img src="{{ url('public/frontend') }}/img/why-choose-img3.png">
					<span>xxm</span>
				</div>
				<p>Live Projects</p>
			</div>
			<div class="xm-card">
				<div class="xm-card-img">
					<img src="{{ url('public/frontend') }}/img/why-choose-img4.png">
					<span>xxm</span>
				</div>
				<p>Completed Projects</p>
			</div>
			<div class="xm-card">
				<div class="xm-card-img">
					<img src="{{ url('public/frontend') }}/img/why-choose-img5.png">
					<span>xxm</span>
				</div>
				<p>Total Creators</p>
			</div>
		</div>
	</div>
</div>
<!-- end  why choose us sec   -->
<!-- start testimonial sec -->
<div class="testimonial-sec">
	<div class="_container">
		<h2 class="why-heading">Testimonials</h2>
		<div class="testimonial-sec-inner">
			<div class="testimonial-card-sec">
				<div class="testimonial-card-sec-inner">
					<div class="testi-card">
						<div class="testi-card-inner">
							<div class="testi-card-img"><img src="{{ url('public/frontend') }}/img/test-card1.png"></div>
							<div class="testi-card-content">
								<h2>Alen John</h2>
								<p class="p">Production Manager</p>
							</div>
						</div>
					</div>
					<div class="testi-card ">
						<div class="testi-card-inner">
							<div class="testi-card-img"><img src="{{ url('public/frontend') }}/img/test-card2.png"></div>
							<div class="testi-card-content">
								<h2>Janet Thomas</h2>
								<p>CEO ABC</p>
							</div>
						</div>
					</div>
					<div class="testi-card ">
						<div class="testi-card-inner">
							<div class="testi-card-img"><img src="{{ url('public/frontend') }}/img/testi-card3.png"></div>
							<div class="testi-card-content">
								<h2>Harry Laurel</h2>
								<p>Artist ABC Ltd.</p>
							</div>
						</div>
					</div>
					<div class="testi-card ">
						<div class="testi-card-inner">
							<div class="testi-card-img"><img src="{{ url('public/frontend') }}/img/test-card4.png"></div>
							<div class="testi-card-content">
								<h2>Peter</h2>
								<p>Marketing Manager</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="testimonial-img-sec">
				<div class="testimonial-img-sec-inner">
					<img src="{{ url('public/frontend') }}/img/testimonial-img.png">
					<div class="tetsimonial-img-content-main">
						<h2>amazing experience</h2>
						<img src="{{ url('public/frontend') }}/img/star-img.png">
						<p>Sed ut perspiciatis unde omnis iste natus error sit
							voluptatem accusantium doloremque laudantium,
							totam rem aperiam, eaque ipsa quae ab illo inventore
						veritatis !</p>
					</div>
				</div>
				<div class="testimonial-img-sec-inner">
					<img src="{{ url('public/frontend') }}/img/testimonial-img.png">
					<div class="tetsimonial-img-content-main">
						<h2>amazing experience</h2>
						<img src="{{ url('public/frontend') }}/img/star-img.png">
						<p>Sed ut perspiciatis unde omnis iste natus error sit
							voluptatem accusantium doloremque laudantium,
							totam rem aperiam, eaque ipsa quae ab illo inventore
						veritatis !</p>
					</div>
				</div>
				<div class="testimonial-img-sec-inner">
					<img src="{{ url('public/frontend') }}/img/testimonial-img.png">
					<div class="tetsimonial-img-content-main">
						<h2>amazing experience</h2>
						<img src="{{ url('public/frontend') }}/img/star-img.png">
						<p>Sed ut perspiciatis unde omnis iste natus error sit
							voluptatem accusantium doloremque laudantium,
							totam rem aperiam, eaque ipsa quae ab illo inventore
						veritatis !</p>
					</div>
				</div>
				<div class="testimonial-img-sec-inner">
					<img src="{{ url('public/frontend') }}/img/testimonial-img.png">
					<div class="tetsimonial-img-content-main">
						<h2>amazing experience</h2>
						<img src="{{ url('public/frontend') }}/img/star-img.png">
						<p>Sed ut perspiciatis unde omnis iste natus error sit
							voluptatem accusantium doloremque laudantium,
							totam rem aperiam, eaque ipsa quae ab illo inventore
						veritatis !</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end testimonial sec -->
<!-- start lenders sec -->
<div class="why-choose-sec leaders">
	<div class="_container">
		<h2 class="why-heading">Trusted by Leaders</h2>
		<div class="why-choose-sec-inner">
			<div class="xm-card">
				<div class="xm-card-img">
					<img src="{{ url('public/frontend') }}/img/l1.png">
				</div>
			</div>
			<div class="xm-card">
				<div class="xm-card-img">
					<img src="{{ url('public/frontend') }}/img/l2.png">
				</div>
			</div>
			<div class="xm-card">
				<div class="xm-card-img">
					<img src="{{ url('public/frontend') }}/img/l3.png">
				</div>
			</div>
			<div class="xm-card">
				<div class="xm-card-img">
					<img src="{{ url('public/frontend') }}/img/l4.png">
				</div>
			</div>
			<div class="xm-card">
				<div class="xm-card-img">
					<img src="{{ url('public/frontend') }}/img/l5.png">
				</div>
			</div>
			<div class="xm-card">
				<div class="xm-card-img">
					<img src="{{ url('public/frontend') }}/img/l6.png">
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end lenders sec -->
<div class="find-creators">
	<div class="_container">
		<div class="_flex">
			<div class="images">
				<img src="{{ url('public/frontend') }}/img/find-creators.png" alt="">
			</div>
			<div class="content">
				<h2>Find Creators to grow <br> you business</h2>
				<p>Create meaningful connections, unlock creativity, and grow creatively by collaborating with creators.</p>
				<a href="{{ url('creators') }}" class="butn">Find Creators</a>
			</div>
		</div>
	</div>
</div>
@include('vwFooter')
