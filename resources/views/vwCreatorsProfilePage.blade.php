@include('vwHeader')

<div class="profile-page">
	<div class="_container box-shadow">
		<div class="cover-bg">
			<img src="{{ $coverImg }}" alt="" id="cover">
			<!-- <a href="#" class="butn left">
				<img src="{{ url('public/frontend') }}/img/camera.png" alt="">Edit Cover<input type="file" id="mypic2">
			</a> -->
		</div>
		<div class="profile-main">
			<div class="profile-container artitst-width">
				<div class="profile border-bottom">
					<div class="_flex">
						<div class="detail">
							<div class="user-img">
								<img id="profile" src="{{ $profileImg }}" alt="" >
								<!-- <a class="artist-profile-btn">
									<img src="{{ url('public/frontend') }}/img/camera.png" alt="">
									<input id="mypic" type="file" name="">
								</a> -->
							</div>
							<h3>{{ $name }} 
								@if(!empty($creatorData->badge_id))
									<img src="{{ getImg($creatorData->badge_img) }}" alt="">
								@endif
							</h3>
							@if(!empty($creatorData->tag_line))
							<span class="user-designation">{{ $creatorData->tag_line }}</span>
							@endif
							
							@if(!empty($creatorData->address))
							<span class="user-location"><i class="fa-solid fa-location-dot"></i>{{ $creatorData->address }}</span>
							@endif

							<span class="user-rating">
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
							</span>
							<span class="user-period">Member since {{ date('M, d Y', strtotime($creatorData->created_at)) }}</span>
						</div>
						<div class="settings">
							<a style="visibility:hidden" href="{{ url('user/my-profile') }}" class="butn">Profile Settings</a>
							<div class="_flex">
								<div class="total-spent">
									$35k+
									<span>Total Spent</span>
								</div>
								<div class="total-posted">
									43
									<span>Total Jobs Posted</span>
								</div>
							</div>
						</div>
					</div>
				</div>
				@if($creatorData->about)
				<div class="profile-about border-bottom">
					<h4>About</h4>
					<p>{{ $creatorData->about }}</p>
				</div>
				@endif
				<div class="profile-testimonial">
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
				</div>
			</div>
		</div>
	</div>
</div>

@include('vwFooter')
