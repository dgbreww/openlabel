<!-- start footer  -->
<footer>
	<div class="_container">
		<div class="footer-inner">
			<div class="footer-inner-sec">
				<div class="footer-logo-sec">
					<a href="{{ url('/') }}">
						<div class="footer-logo"><img src="{{ asset('public/'.$siteSettings->websiteLogoUrl) }}" alt="{{ $siteSettings->websiteLogoAlt }}"></div>
					</a>
					<p>123/XZ <br> ABC Street, Church Lane  <br> Amsterdam</p>
				</div>
				<div class="quick-sec">
					<h2>Quick Links</h2>
					<a href="#">about us</a>
					
					@if(!session()->has('userSess'))
					<a href="{{ url('/sign-up') }}">Become an artist</a>
					<a href="{{ url('/sign-up?account=artist') }}">become a creator </a>
					@endif

					<a href="job-listing.html">find jobs </a>
					<a href="#">pricing </a>
					<a href="#">terms & conditions</a>
					<a href="#">privacy policy</a>
				</div>
				<div class="category-sec">
					<h2>Categories</h2>
					<a href="#">animation</a>
					<a href="#">news</a>
					<a href="#">information </a>
					<a href="#">awareness</a>
					<a href="#">introductions</a>
					<a href="#">open link</a>
				</div>
				<div class="support-sec">
					<h2>Support</h2>
					<a href="#">terms & condition</a>
					<a href="#">privacy policy </a>
					<a href="#">help </a>
					<a href="#">FAQ</a>
					<a href="#">introductions</a>
					<a href="#">open link</a>
				</div>
				<div class="subscribe-sec">
					<h2>Subscribe</h2>
					<div class="subscribe-input">
						<form>
							<input type="text" name="Your email address" placeholder="Your email address">
							<button type="submit">Send</button>
						</form>
					</div>
				</div>
			</div>
			<div class="follow-us-section">
				<div class="follow-us-section-inner">
					<h2>Follow Us</h2>
					<ul class="follow-us-social-icon">
						<li>
							<a href="#" class="fa fa-facebook-f"></a>
						</li>
						<li>
							<a href="#" class="fa fa-linkedin"></a>
						</li>
						<li>
							<a href="#" class="fa fa-twitter"></a>
						</li>
						<li>
							<a href="#" class="fa fa-youtube-play"></a>
						</li>
						<li>
							<a href="#" class="fa fa-instagram"></a>
						</li>
					</ul>
				</div>
				<div class="follow-us-section-inner second">
					<h2>Mobile App</h2>
					<ul class="follow-us-social-icon">
						<li>
							<a href="#" class="fa fa-apple"></a>
						</li>
						<li>
							<a href="#" class="fa fa-android"></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="copy-right-sec">
			<p>{{ $siteSettings->copyright }}</p>
			<ul>
				<li><a href="#">terms of service</a></li>
				<li><a href="#">privacy policy</a></li>
				<li><a href="#">cookies settings</a></li>
				<li><a href="#">accessibility</a></li>
			</ul>
		</div>

		<link rel="stylesheet" href="{{ asset('public/frontend/') }}/css/toastr.min.css">
		<script src="{{ asset('public/frontend/') }}/js/toastr.min.js"></script>
		<script type="text/javascript" src="{{ asset('public/frontend/js/user.js') }}"></script>

		@if(Session::get('verifyStatus'))
		<script type="text/javascript">
			var timeOut = setTimeout(function() {
				$('.hideAlert').hide('slow');
				clearTimeout(timeOut);
			}, 3000);
		</script>
		@endif

	</div>
</footer>
<!-- end footer  -->
</body>
</html>