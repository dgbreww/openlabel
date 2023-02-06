@include('vwHeader')

<style type="text/css">
	footer {
		margin-top: 7%;
	}

	.about-client-rating {
		justify-content:  flex-start;
	}

	li a, ul {
		color: var(--light-grey);
	}

	ul li {
		margin-left: 10%;
	}
	.project-job-sec-inner{
		width: unset;
	}
</style>

<div class="project-details">
	<div class="_container">
		<h2 class="head">Project Details</h2>
		<div class="project-details-inner">
			<div class="project-details-left">
				<div class="tiktok-video-sec">
					<div class="tiktok-video-sec-inner">
						<div class="tiktok-video">
							<h2>{{ $jobData->title }}</h2>
							<p>Posted {{ getHoursDays($jobData->created_at) }}</p>
						</div>
						<p class="tiktok-video-content">{{ $jobData->job_brief }}</p>
					</div>
				</div>
				<div class="project-duration">
					<p>Project Duration  : <span>{{ $jobData->timeline }} Days</span></p>
				</div>
				<div class="project-job-sec">
					<h2 class="project-job-heading">job requirements :</h2>
					<div class="project-job-sec-inner">
						<div class="job-category">
							<p>Category</p>
							<button>{{ $jobData->category_name }}</button>
						</div>

						@if(!empty($jobData->platform_name))
						<div class="job-category">
							<p>Platform</p>
							<button>{{ $jobData->platform_name }}</button>
						</div>
						@endif

						@if(!empty($jobData->genre_name))
						<div class="job-category">
							<p>Genre</p>
							<button>{{ $jobData->genre_name }}</button>
						</div>
						@endif

						@if(!empty($jobData->video_slug))
						<div class="job-category">
							<p>Video Size</p>
							<button>{{ $jobData->video_slug }}</button>
						</div>
						@endif

						@if(!empty($jobData->job_media_1) OR !empty($jobData->job_media_2) OR !empty($jobData->job_media_3) OR !empty($jobData->job_media_4) OR !empty($jobData->job_media_5))
						<div class="job-category">
							<p>Supporting Documents</p>
							

							<ul>
								
								@if(!empty($jobData->job_media_1))
									<li><a download href="{{ url('public/'.$jobData->job_media_1); }}">Download Document</a></li>
								@endif

								@if(!empty($jobData->job_media_2))
									<li><a download href="{{ url('public/'.$jobData->job_media_2); }}">Download Document</a></li>
								@endif

								@if(!empty($jobData->job_media_3))
									<li><a download href="{{ url('public/'.$jobData->job_media_3); }}">Download Document</a></li>
								@endif

								@if(!empty($jobData->job_media_4))
									<li><a download href="{{ url('public/'.$jobData->job_media_4); }}">Download Document</a></li>
								@endif

								@if(!empty($jobData->job_media_5))
									<li><a download href="{{ url('public/'.$jobData->job_media_5); }}">Download Document</a></li>
								@endif

								
							</ul>

						</div>
						@endif
					</div>
				</div>
			</div>
			<div class="project-details-right">
				<div class="project-deatils-apply-btn">
					<div class="project-deatils-apply-btn-inner">
						<div class="apply-btn">
							@if(isJobApplied($jobData->id))
								<button type="button">Applied</button>
							@elseif(canJobApplied($jobData->id))
								<button onclick="applyJob(this, {{ $jobData->id }})" data-token="{{ @csrf_token() }}" type="button">Apply Job</button>
							@endif

							@if(isJobSaved($jobData->id))
								<button onclick="saveJob(this, {{ $jobData->id }})" data-token="{{ @csrf_token() }}" type="button">{{ (isJobSaved($jobData->id))? 'Saved':'Save Job'; }}</button>
							@elseif(canJobApplied($jobData->id))
								<button onclick="saveJob(this, {{ $jobData->id }})" data-token="{{ @csrf_token() }}" type="button">{{ (isJobSaved($jobData->id))? 'Saved':'Save Job'; }}</button>
							@endif
						</div>
						<p class="flag-p"><img src="{{ url('public/frontend') }}/img/flag.png">Flag as inappropriate</p>
					</div>
				</div>
				<div class="about-the-client-sec">
					<div class="about-the-client-sec-inner">
						<h2 class="about-the-client-h2">About the client</h2>
						<!--start rating-->
						<div class="about-client-rating">
							<div class="star-rating">
							  <input id="star-5" type="radio" name="rating" value="star-5" />
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
							<p>4.94 of 89 reviews</p>
						</div>
						<!-- end rating -->
						
						@if(!empty($userData->address))
						<div class="state-sec">
							<h2>State</h2>
							<p>{{ $userData->address }}</p>
						</div>
						@endif

						<div class="state-sec">
							<h2>{{ $totalJobPosted }} Creations Posted</h2>
							<p>{{ $openJobs }} Open Creations</p>
						</div>
						
						<div class="state-sec">
							<h2>$20k+ total spent</h2>
							<p>123 hires, 23 active</p>
						</div>

						<p class="member-p">Member since {{ date('M d, Y', strtotime($userData->created_at)); }}</p>
					</div>
				</div>
				<div class="job-link-sec">
					<div class="job-link-sec-inner">
						<h2>job link</h2>
						<div class="copy-link-sec">
							<input type="text" placeholder="{{ URL::full() }}" id="txtKeyw" value="{{ URL::full() }}">
							<button  id="btnCopyToClipboard">Copy Link</button>
							<!-- <button>{{ URL::full() }}</button> -->
							<!-- <p>Copy link</p> -->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
	function copyToClipboard(text) { 

	   var textArea = document.createElement( "textarea" );
	   textArea.value = text;
	   document.body.appendChild( textArea );

	   textArea.select(); 

	   try {
	      var successful = document.execCommand( 'copy' );
	      var msg = successful ? 'successful' : 'unsuccessful';
	      console.log('Copying text command was ' + msg);
	   } catch (err) {
	      console.log('Oops, unable to copy');
	   }

	   document.body.removeChild( textArea );
	}

	$( '#btnCopyToClipboard' ).click( function(){
	    var clipboardText = "";
	    clipboardText = $( '#txtKeyw' ).val();
	    copyToClipboard( clipboardText );
	    $(this).html('URL Copied');

	    setTimeout(function() {
	    	$("#btnCopyToClipboard").html('Copy Link');
	    }, 2000);

	 })
</script>

@include('vwFooter')
