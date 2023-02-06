@include('vwHeader')
<style type="text/css">
	.forgot-password {
		padding-bottom: 4%;
		padding-right: unset;
	}
</style>
<!-- start login section -->
<div class="login-page">
	<div class="login-page-inner">
		<div class="login-page-left">
			<div class="login-page-left-inner">
				<img src="{{ url('public/frontend') }}/img/login-lefside-img.png">
				<!-- <a href="index.html" class="login-page-logo"><img src="{{ url('public/frontend') }}/img/login-page-logo.png"></a> -->
			</div>
		</div>
		<div class="login-page-right">
			<div class="login-page-right-inner">
				<p class="sign-up-p">Not a member? <a href="{{ url('/sign-up') }}">Sign up now</a></p>
				<div class="login-form">
					<div class="login-form-inner">
						<h2>Log in to Open Label</h2>

						@if($verifyStatus)
							@if($verifyStatus['isVerified'])
								<div class="hideAlert alert alert-success">{{ $verifyStatus['msg'] }}</div>
							@else
								<div class="hideAlert alert alert-danger">{{ $verifyStatus['msg'] }}</div>
							@endif
						@endif

						<form id="loginForm" method="post" action="{{ url('/ajax/doLogin') }}">					
							<div class="input-first">
								<input type="text" name="email" placeholder="Email">
								<span><i class="fa fa-user"></i></span>
							</div>
							<span id="emailErr" class="error removeErr"></span>

							<div class="input-first">
								<input type="password" name="password" placeholder="Password">
								<span><i class="fa fa-lock"></i></span>
							</div>
							<span id="passwordErr" class="error removeErr"></span>

							@csrf
							<input type="hidden" name="redirect" value="{{ Request::get('redirect') }}">

							<p class="sign-up-p forgot-password"><a href="{{ url('/forgot-password') }}">Forgot Password?</a></p>

							<button id="loginFormBtn" type="submit">Login</button>
						</form>
						<p class="login-p">or <a href="#">Log in with </a></p>
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
						<p class="dont-account">Don't  have an Open label account?</p>
						<a href="{{ url('/sign-up') }}">
							<button class="sign-up-btn">Sign Up</button>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end login section -->
<!-- start footer  -->
@include('vwFooter')
