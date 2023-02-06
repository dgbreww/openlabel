@include('vwHeader')

<div class="job-listing">
	<div class="_container">
		<div class="form">
			<form id="postJobForm" method="post" action="{{ url('/user/doPostJob') }}" enctype="multipart/form-data">
				<div class="project-title">
					<h2 class="head">Project Title</h2>
					<input name="projectTitle" class="input" type="text" placeholder="Give your project a title">
					<div id="projectTitleErr" class="error removeErr"></div>

					<select class="select" name="" id="no-of-videos" disabled>
						<option value="{{ $orderData->no_of_videos }}" selected>{{ $orderData->no_of_videos }}</option>						
					</select>
					<label for="no-of-videos">No of Video You will recieve against this order ({{ $orderData->no_of_videos }})</label>
				</div>
				
				@if(!empty($categoryData))
				<div class="type-of-video-service mt-5">
					<h2 class="head">Video Category:</h2>
					<div class="type-checkbox">
						@foreach($categoryData as $catData)
							@php
								
								if($catData->id == $orderData->category_id):
									$categoryCheckBoxSel = 'checked';
								else:
									$categoryCheckBoxSel = '';									
								endif;

							@endphp
						<div class="field">
							<input {{ $categoryCheckBoxSel }} disabled name="category" value="{{ $catData->id }}" type="checkbox" id="{{ $catData->category_slug }}">
							<label for="{{ $catData->category_slug }}">{{ $catData->category_name }}</label>
						</div>
						@endforeach
					</div>
				</div>
				@endif

				@if(!empty($platformData))
				<div class="select-platform mt-5">
					<h2 class="head">Select Platform:</h2>
					<div class="type-checkbox">
						@foreach($platformData as $platformD)
						<div class="field">
							<input name="platform" class="platform-checkbox" type="checkbox" value="{{ $platformD->id }}" id="{{ $platformD->platform_slug }}">
							<label for="{{ $platformD->platform_slug }}">{{ $platformD->platform_name }}</label>
						</div>
						@endforeach
					</div>
					<div id="platformErr" class="error removeErr"></div>
				</div>
				@endif

				@if(!empty($genreData))
				<div class="video-categories mt-5">
					<h2 class="head">Genre:</h2>
					<div class="type-checkbox">
						@foreach($genreData as $genre)
						<div class="field">
							<input name="genre" class="genre-checkbox" type="checkbox" value="{{ $genre->id }}" id="{{ $genre->genre_slug }}">
							<label for="{{ $genre->genre_slug }}">{{ $genre->genre_name }}</label>
						</div>
						@endforeach
					</div>
					<div id="genreErr" class="error removeErr"></div>
				</div>
				@endif

				@if(!empty($videoSizeData))
				<div class="select-platform mt-5">
					<h2 class="head">Video Sizes:</h2>
					<div class="type-checkbox">
						@foreach($videoSizeData as $videoSize)
						<div class="field">
							<input name="videoSize" class="videosize-checkbox" type="checkbox" value="{{ $videoSize->id }}" id="{{ $videoSize->video_slug }}">
							<label for="{{ $videoSize->video_slug }}">{{ $videoSize->video_slug }}</label>
						</div>
						@endforeach						
					</div>
					<div id="videoSizeErr" class="error removeErr"></div>
				</div>
				@endif

				<div class="video-project-brief mt-5">
					<h2 class="head">Video Project Brief:</h2>
					<textarea class="textarea" name="jobBrief" id="" placeholder="Description"></textarea>
					<div id="jobBriefErr" class="error removeErr"></div>
				</div>

				<div class="video-project-brief mt-5">
					<h2 class="head">Required Documents:</h2>
					<input type="file" name="documents[]" multiple>
					<div id="documentsErr" class="error removeErr"></div>
				</div>

				<div class="captcha mt-5"></div>
				<div class="buttons">
					@csrf
					<input type="hidden" name="orderId" value="{{ $orderData->id }}">
					<button onclick="window.location.href='{{ url('/user/dashboard') }}'" type="button" class="cancel">Cancel</button>
					<button id="postJobFormBtn" type="submit" class="submit">Submit</button>
				</div>
			</form>
		</div>
	</div>
</div>

<script type="text/javascript">
	$('.platform-checkbox').change(function (e) {
		if ($(this).is(':checked')) {
			$('.platform-checkbox').prop('checked', false);	
			$(this).prop('checked', true);
		}
	});

	$('.genre-checkbox').change(function (e) {
		if ($(this).is(':checked')) {
			$('.genre-checkbox').prop('checked', false);	
			$(this).prop('checked', true);
		}
	});

	$('.videosize-checkbox').change(function (e) {
		if ($(this).is(':checked')) {
			$('.videosize-checkbox').prop('checked', false);	
			$(this).prop('checked', true);
		}
	});
</script>

@include('vwFooter')
