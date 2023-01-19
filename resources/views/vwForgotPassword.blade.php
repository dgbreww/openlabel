@include('vwHeader')
<!-- start login section -->
<div class="login-page forgot-password">
	<div class="login-page-inner">
		<div class="login-page-left">
			<div class="login-page-left-inner">
				<img src="{{ url('public/frontend') }}/img/login-lefside-img.png">
			</div>
		</div>
		<div class="login-page-right">
			<div class="forgot-password-inner">
				<h2>Forgot Password</h2>
				<p>Enter your registered email id <br> to reset your password</p>
				<form id="forgotPasswordForm" method="post" action="{{ url('/ajax/doForgotPassword') }}">
					<div class="for-pass-input">
						<input type="text" name="email" placeholder="Email Address">
						<span><img src="{{ url('public/frontend') }}/img/forgot-pass-input-img.png"></span>
					</div>
					<span id="emailErr" class="error"></span>

					@csrf
					<button id="forgotPasswordFormBtn" type="submit">Reset Password</button>
				</form>
			</div>
			<!-- <span class="close-icons"><img src="{{ url('public/frontend') }}/img/close-btn-img.png"></span> -->
		</div>
	</div>
</div>
<!-- end login section -->
@include('vwFooter')
