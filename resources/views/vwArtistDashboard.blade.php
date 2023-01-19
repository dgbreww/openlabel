@include('vwHeader')
<div class="profile-page reverse">
	<div class="_container box-shadow">
		<div class="cover-bg">
			<img src="{{ url('public/frontend') }}/img/cover-bg.png" alt="" id="cover">
			<a href="#" class="butn left">
				<img src="{{ url('public/frontend') }}/img/camera.png" alt="">
			Edit Cover
			<input type="file" id="mypic2">
		</a>
		</div>
		<div class="profile-main">
			<div class="profile-container artitst-width">
				<div class="profile border-bottom">
					<div class="_flex">
						<div class="detail">
							<div class="user-img">
								<img id="profile" src="{{ url('public/frontend') }}/img/profile-img.png" alt="" >
								<a class="artist-profile-btn">
									<img src="{{ url('public/frontend') }}/img/camera.png" alt="">
									<input id="mypic" type="file" name="">
								</a>
							</div>
							<h3>{{ $name }} <img src="{{ url('public/frontend') }}/img/verified.png" alt=""></h3>
							<span class="user-designation">Ads Manager</span>
							<span class="user-location"><i class="fa-solid fa-location-dot"></i> Arizona</span>
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
							<span class="user-period">Member since {{ date('M, d Y', strtotime($userInfo->created_at)) }}</span>
						</div>
						<div class="settings">
							<a href="#" class="butn">Profile Settings</a>
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
				<div class="profile-about border-bottom">
					<h4>About</h4>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras arcu nunc, retrum ut imperdiet non, tempor eu metus. Aliquam venenatis egastas urna sit amet iaculis. Duis blandit, metus rhoncus sagittis dapibus, est libero lobortis ipsum, nec graida quam libero et lectus.</p>
				</div>
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
