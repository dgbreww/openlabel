@include('vwHeader')

	<link rel="stylesheet" href="{{ url('public/frontend') }}/css/thankyou_style.css">
	
	<div class="thankyou-page">
		<div class="thankyou-page-inner">
			<img src="{{ url('public/frontend') }}/img/thankyou-page-img.png">
			<div class="thankyou-page-content">
				<h2>Thank You!</h2>
				<p class="pay-p">Payment done successfully</p>
				<p class="pp">You will be redirected to the dashboard shortly or click here to return to dashboard</p>
				<a href="{{ url('/user/dashboard?tab=creation') }}" class="dashboard-btn" >Post Creation</a>
				<p class="ht-p">Having Trouble ? <a href="{{ url('contact-us') }}">Contact us</a></p>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		setTimeout(function() {
			window.location.href = '{{ url("/user/dashboard?tab=creations") }}';
		}, 3000);
	</script>

@include('vwFooter')
