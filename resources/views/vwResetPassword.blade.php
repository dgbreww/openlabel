@include('vwHeader')
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
							<button id="loginFormBtn" type="submit">Change Password</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end login section -->
<!-- start footer  -->
@include('vwFooter')
