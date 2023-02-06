@include('vwHeader')

<style type="text/css">
	.tab-checkboxs{
		display:flex;
		flex-wrap:wrap;
	}

	.tab-checkbox {
		display: flex;
		align-items:center;
		width: 50%;
		margin-bottom: 2%;
	}

	.tab-checkbox input{
		width:14px;
		height:14px;
	}
	.tab-checkbox p{
		padding-left:5%;
		font-size: var(--micro-1-16);
	}


	@media (max-width:991px){
		.tab-checkbox input{
			width:12px;
			height:12px;
		}
	}
</style>

<div class="job-listing2">
	<div class="_container">
		<div class="job-listing2-inner">
			<div class="job-listing2-inner-left">
				<div class="job-listing2-inner-left-inner">
					<form method="get" id="filterForm">
						<h2 class="filter-heading">Filter by</h2>
						<div class="filter-tabs">
							
							@if(!empty($filterCategoryList) && $filterCategoryList->toArray())
							@php
								$getInputCategory = (Request::get('category'))? Request::get('category'):[];
							@endphp
							<div class="filter-tab">
								<div class="filter-tab-inner">
									<p>Category</p>
									<img src="{{ url('public/frontend') }}/img/job-listing2-arrow.png" class="filter-tab-click">
								</div>
								<div class="filter-tab-content">
									<div class="tab-checkboxs">
										@foreach($filterCategoryList as $filterCat)
										<div class="tab-checkbox">
											<label for="first-checkbox"></label>
											<input {{ (in_array($filterCat->category_slug, $getInputCategory))? 'checked':'' }} type="checkbox" name="category[]" value="{{ $filterCat->category_slug }}">
											<p>{{ $filterCat->category_name }}</p>
										</div>
										@endforeach
									</div>
								</div>
							</div>
							@endif

							@if(!empty($filterPlatformList) && $filterPlatformList->toArray())
							@php
								$getInputPlatform = (Request::get('platform'))? Request::get('platform'):[];
							@endphp
							<div class="filter-tab">
								<div class="filter-tab-inner">
									<p>platform</p>
									<img src="{{ url('public/frontend') }}/img/job-listing2-arrow.png" class="filter-tab-click">
								</div>
								<div class="filter-tab-content">
									<div class="tab-checkboxs">
										@foreach($filterPlatformList as $filterPlat)
										<div class="tab-checkbox">
											<label for="first-checkbox"></label>
											<input {{ (in_array($filterPlat->platform_slug, $getInputPlatform))? 'checked':'' }} type="checkbox" name="platform[]" value="{{ $filterPlat->platform_slug }}">
											<p>{{ $filterPlat->platform_name }}</p>
										</div>
										@endforeach
									</div>
								</div>
							</div>
							@endif

							@if(!empty($filterGenreList) && $filterGenreList->toArray())
							@php
								$getInputGenre = (Request::get('genre'))? Request::get('genre'):[];
							@endphp
							<div class="filter-tab">
								<div class="filter-tab-inner">
									<p>Genre</p>
									<img src="{{ url('public/frontend') }}/img/job-listing2-arrow.png" class="filter-tab-click">
								</div>
								<div class="filter-tab-content">
									<div class="tab-checkboxs">
										@foreach($filterGenreList as $filterGen)
										<div class="tab-checkbox">
											<label for="first-checkbox"></label>
											<input {{ (in_array($filterGen->genre_slug, $getInputGenre))? 'checked':'' }} type="checkbox" name="genre[]" value="{{ $filterGen->genre_slug }}">
											<p>{{ $filterGen->genre_name }}</p>
										</div>
										@endforeach
									</div>
								</div>
							</div>
							@endif

							@if(!empty($filterVideoSizeList) && $filterVideoSizeList->toArray())
							@php
								$getInputVideoSize = (Request::get('videosize'))? Request::get('videosize'):[];
							@endphp
							<div class="filter-tab">
								<div class="filter-tab-inner">
									<p>Video Size</p>
									<img src="{{ url('public/frontend') }}/img/job-listing2-arrow.png" class="filter-tab-click">
								</div>
								<div class="filter-tab-content">
									<div class="tab-checkboxs">
										@foreach($filterVideoSizeList as $filterVideoSize)
										<div class="tab-checkbox">
											<label for="first-checkbox"></label>
											<input {{ (in_array($filterVideoSize->video_slug, $getInputVideoSize))? 'checked':'' }} type="checkbox" name="videosize[]" value="{{ $filterVideoSize->video_slug }}">
											<p>{{ $filterVideoSize->video_slug }}</p>
										</div>
										@endforeach
									</div>
								</div>
							</div>
							@endif

							<input type="hidden" name="sort" id="sort" value="{{ Request::get('sort') }}">
							<input type="hidden" name="search" id="search" value="{{ Request::get('search') }}">

						</div>
						<button type="submit"><span><img src="{{ url('public/frontend') }}/img/return.png"></span>Filter</button>
					</form>
				</div>
			</div>
			<div class="job-listing2-inner-right">
				<div class="job-listing2-inner-right-inner">
					<div class="job-listing2-right-top-input">
						<form>
							<input type="text" name="search" placeholder="search for jobs" value="{{ Request::get('search') }}">
							<img src="{{ url('public/frontend') }}/img/joblisting2-search.png">
						</form>
					</div>
					<div class="sort-filter">
						<p>{{ count($jobsData) }} <span>Jobs Found</span> </p>
						<div class="filter-select">
							<span class="filter-img"><img src="{{ url('public/frontend') }}/img/sort.png" class="filter-main-img"></span>
							<select class="select" name="sort" id="sorting">
								<option value="">Sort by</option>
								<option value="latest" {{ Request::get('sort') == 'latest'? 'selected':''; }}>Latest</option>
								<option value="old" {{ Request::get('sort') == 'old'? 'selected':''; }}>Old</option>
							</select>
							<span><img src="{{ url('public/frontend') }}/img/down-arrow.png"></span>
						</div>
					</div>

					@if(!empty($jobsData) && $jobsData->toArray())
						@foreach($jobsData as $jobs)
						<div class="job-listing2-card">
							<div class="job-listing2-head">
								<h2>{{ $jobs->title }}</h2>
								<span>
									<i onclick="saveJob(this, {{ $jobs->id }})" data-token="{{ @csrf_token() }}" class="fa fa-heart likes-click {{ (isJobSaved($jobs->id))? 'like-bg':''; }}"></i>
								</span>
							</div>
							<div class="job-listing2-star-sec">
								<div class="p-inner">
									<p><span><img src="{{ url('public/frontend') }}/img/clock-img.png"></span>{{ $jobs->timeline }} Days</p>
									<p><span><img src="{{ url('public/frontend') }}/img/category.png"></span>{{ $jobs->category_name }}</p>
								</div>
								<div class="about-client-rating">
									<!-- <div class="star-rating">
									  <input id="star-5" type="radio" name="rating" value="star-5">
									  <label for="star-5" title="5 stars">
									    <i class="active fa fa-star" aria-hidden="true"></i>
									  </label>
									  <input id="star-4" type="radio" name="rating" value="star-4">
									  <label for="star-4" title="4 stars">
									    <i class="active fa fa-star" aria-hidden="true"></i>
									  </label>
									  <input id="star-3" type="radio" name="rating" value="star-3">
									  <label for="star-3" title="3 stars">
									    <i class="active fa fa-star" aria-hidden="true"></i>
									  </label>
									  <input id="star-2" type="radio" name="rating" value="star-2">
									  <label for="star-2" title="2 stars">
									    <i class="active fa fa-star" aria-hidden="true"></i>
									  </label>
									  <input id="star-1" type="radio" name="rating" value="star-1">
									  <label for="star-1" title="1 star">
									    <i class="active fa fa-star" aria-hidden="true"></i>
									  </label>
									</div>
									<p>4.94 of 89 reviews</p> -->
									<p class="posted">Posted {{ getHoursDays($jobs->created_at); }}</p>
								</div>
							</div>
							<div class="job-listing-job2-content">
								<p>{{ \Illuminate\Support\Str::limit($jobs->job_brief, 200, $end='...') }}</p>
								<button onclick="window.location.href='{{ url('creations/'.$jobs->slug) }}'" type="button">View Details</button>
							</div>
						</div>
						@endforeach
					@else
					<div class="job-listing2-card text-center">
						<div class="alert alert-danger">There are no creations</div>
					</div>
					@endif


				</div>
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$("#sorting").change(function (e) {
		getValue = $(this).find(':selected').val();
		$("#sort").attr('value', getValue);
		$("#filterForm").submit();
	});
</script>

@include('vwFooter')
