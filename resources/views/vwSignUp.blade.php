@include('vwHeader')
<!-- start login section -->
<div class="login-page sign-up">
	<div class="login-page-inner">
		<div class="login-page-left">
			<div class="login-page-left-inner">
				<img src="{{ url('public/frontend') }}/img/sign-left-img.png">
				<!-- <a href="index.html" class="login-page-logo"><img src="{{ url('public/frontend') }}/img/login-page-logo.png"></a> -->
			</div>
		</div>
		<div class="login-page-right">
			<div class="login-page-right-inner">
				<p class="sign-up-p"><span>Already a member</span> <a href="{{ url('/login') }}">Sign in</a></p>
				<div class="login-form">
					<div class="login-form-inner" id="sign-up">
						<h2>Sign Up</h2>						
						<form id="signUpForm" method="post" class="sign-up-page" action="{{ url('/ajax/doSignUp') }}">
							<p class="choose-acc-p">Choose account type</p>
							<div class="creater-sec">
								<p class="active-artist">Artist</p>
								<label class="switch">
									<input name="userType" value="creator" type="checkbox" {{ (Request::get('account') == 'artist')? '':'checked' }}>
									<span class="slider round"></span>
								</label>
								<p class="active-creator">Creator</p>

								<span id="userTypeErr" class="error removeErr"></span>
							</div>
							<div class="sign-up-input">
								<input type="text" name="firstName" placeholder="First Name">
								<span id="firstNameErr" class="error removeErr"></span>

								<input type="text" name="lastName" placeholder="Last Name">
								<span id="lastNameErr" class="error removeErr"></span>
							</div>

							<input type="text" name="email" placeholder="Email">
							<span id="emailErr" class="error removeErr"></span>

							<input type="password" name="password" placeholder="Password">
							<span id="passwordErr" class="error removeErr"></span>

							<div class="privacy-policy-p">
								<input name="agreeTermsCondition" value="yes" type="checkbox" class="checkbox">
								<span class="policy-text"> I agree to the <a href="#">Open Label Terms Conditions</a>&nbsp; and &nbsp;<a href="#">Privacy Policy</a></span>

								<span id="agreeTermsConditionErr" class="error removeErr"></span>

							</div>

							@csrf
							<button id="signUpFormBtn" type="submit">Create account</button>
							
						</form>

						<p class="login-p"> <a href="javascript:void(0)">or sign up with </a></p>
						<div class="login-social-icon">
							<a href="#" class="icon">
								<img src="{{ url('public/frontend') }}/img/google-img.png">
							</a>
							<a href="#" class="icon">
								<img src="{{ url('public/frontend') }}/img/fb2.png">
							</a>
							<a href="#" class="icon">
								<img src="{{ url('public/frontend') }}/img/insta.png">
							</a>
							<a href="#" class="icon">
								<img src="{{ url('public/frontend') }}/img/tiktok.png">
							</a>
						</div>
						<div class="bottom-line"></div>
						<!-- <div class="login-social-icon">
								<div class="icon"><img src="{{ url('public/frontend') }}/img/google-img.png"></div>
								<div class="icon"><img src="{{ url('public/frontend') }}/img/fb2.png"></div>
								<div class="icon"><img src="{{ url('public/frontend') }}/img/insta.png"></div>
								<div class="icon"><img src="{{ url('public/frontend') }}/img/tiktok.png"></div>
						</div> -->
						<!-- <p class="dont-account">Don't  have an Open label account?</p> -->
						<!-- <a href="#">
								<button class="sign-up-btn">Sign Up</button>
						</a> -->
						<p class="sign-page-login-p">Already have an account? <a href="{{ url('login') }}">Log in</a></p>
						<!-- <input type="checkbox" name=""> -->
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end login section -->
@include('vwFooter')
