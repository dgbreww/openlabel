@include('vwHeader')

<style type="text/css">
	.error {
	    position: absolute;
	    left: 0;
	    bottom: 0;
	    width: max-content;
	}
</style>

<!-- <div class="credit-card-detail">
	<form id="checkoutForm" method="post" action="{{ url('user/doCheckout') }}">
		<div class="row">

			<div class="col-lg-12">
				<div id="name" class="form-group input-fields">
	                <input name="cardNumber" type="text" class="form-control" placeholder=" ">
	                <label for="name" class="form-label">Credit Card Number<span>*</span></label>
	                <span id="cardNumberErr" class="error removeErr"></span>
	            </div>
			</div>

			<div class="col-lg-6">
				<div id="date" class="form-group input-fields">
	                <input name="date" type="text" class="form-control" placeholder=" ">
	                <label for="date" class="form-label">MM/YY<span>*</span></label>
	                <span id="dateErr" class="error removeErr"></span>
	            </div>
			</div>

			<div class="col-lg-6">
				<div id="date" class="form-group input-fields">
	                <input name="cvv" type="text" class="form-control" placeholder=" ">
	                <label for="date" class="form-label">CVV<span>*</span></label>
	                <span id="cvvErr" class="error removeErr"></span>
	            </div>
			</div>

			<div class="col-lg-12">
				<div id="date" class="form-group input-fields">
	                <input name="nameOnCard" type="text" class="form-control" placeholder=" ">
	                <label for="date" class="form-label">Name on Card<span>*</span></label>
	                <span id="nameOnCardErr" class="error removeErr"></span>
	            </div>
			</div>

			<div class="col-lg-12">
				@csrf
				<button id="checkoutFormBtn" type="submit" class="btn-full-pay-now">Pay now</button>
			</div>

		</div>
		
	</form>
</div> -->

<link rel="stylesheet" href="{{ url('public/frontend') }}/css/checkout.css">

<div class="profile-dashboard">
	<div class="_container">
		<div class="my-account">
			<div class="fadeInDown">
				<div class="main">
					<div class="content">
						<div class="card-detail">
							<div class="credit-card-detail tab-body">
								<div class="profile">
									<div class="_flex">
										<div class="detail account-forms">
											<h3>Credit Card Details</h3>
											<span class="user-designation">Mandatory fields are marked *</span>
											<form id="checkoutForm" method="post" action="{{ url('user/doCheckout') }}">
												<div class="form__">
													<div class="form-field w-100">
														<input type="text" name="cardNumber" class="mr-42">
														<span class="imp">*<span class="plc">Card Number</span></span>
														<span id="cardNumberErr" class="error removeErr"></span>
													</div>
													<div class="form-field">
														<input type="text" name="date">
														<span class="imp">*<span class="plc">MM/YYYY</span></span>
														<span id="dateErr" class="error removeErr"></span>
													</div>
													<div class="form-field">
														<input type="text" name="cvv" class="mr-42">
														<span class="imp">*<span class="plc">CVV</span></span>
														<span id="cvvErr" class="error removeErr"></span>
													</div>
													<div class="form-field w-100">
														<input type="text" name="nameOnCard">
														<span class="imp">*<span class="plc">Name on Card</span></span>
														<span id="nameOnCardErr" class="error removeErr"></span>
													</div>
													<div class="butn">
														@csrf
														<button type="submit" id="checkoutFormBtn" class="uppercase form-btn tab-form-btn-font w-100">Pay Now</button>
													</div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
							<div class="order-summary tab-body">
								<div class="profile">
									<div class="_flex">
										<div class="detail">
											<h3>Your Package Summary</h3>
											<span class="user-designation">Your package is listed below</span>
											<div class="order-list">
												<div class="left">
													<div class="img">
														<!-- <div class="user-img">
															<img src="img/profile-img.png" alt="">
														</div> -->
														<p>{{ $packageData->category_name }} | {{ $packageData->package_name }}</p>
													</div>
													<div class="order-detail">
														<p>
															<strong>No of Videos:</strong> {{ $packageData->no_of_videos }} (Accepted) |
															<strong>No of Videos:</strong> {{ $packageData->no_of_videos_received }} (Received) |
															<strong>Timeline:</strong> {{ $packageData->timeline }} Days</p>
													</div>
													<div class="order-price">
														<!-- <div class="form-field">
															<input type="text" name="chestsize" class="mr-42">
														</div> -->
														<p>Price: <span>${{ $packageData->price }}</span></p>
													</div>
													<!-- <div class="order-charge">
														<p>Service Charge: <span>$81.00</span></p>
													</div> -->
												</div>
												<div class="right" onclick="window.location.href='{{ url('packages') }}'">
													<span>
														<i class="fa-regular fa-trash-can"></i>
													</span>
												</div>
												<div class="separator w-100"></div>
												<div class="grand-total">
													<p>Grand Total:</p>
													<span>${{ $packageData->price }}</span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
// remove plc from input on click
$('.form-field input').focusin(function(){
  $(this).next('.imp').css('opacity','0');
  $(this).css('background','#fff');
});
$('.form-field input').focusout(function(){
  $(this).next('.imp').css('opacity','1');
  $(this).css('background','transparent');
  // var a = $(this).val();
  if($(this).val()){
    // console.log('user input done')
    $(this).next('.imp').css('opacity','0');
    $(this).css('background','#fff');
  }
  // console.log(a);
  // console.log('input clicked');
});
$('.form-field textarea').focusin(function(){
  $(this).next('.imp').css('opacity','0');
  $(this).css('background','#fff');
  // console.log('input clicked');
});
$('.form-field textarea').focusout(function(){
  $(this).next('.imp').css('opacity','1');
  $(this).css('background','transparent');
  if ($(this).val()){
    $(this).next('.imp').css('opacity','0');
    $(this).css('background','#fff');
  }
  // console.log('input clicked');
});
$('.form-field-input input').focusin(function(){
  $(this).next('.imp').css('opacity','0');
  $(this).css('background','#fff');
  // console.log('input clicked');
});
$('.form-field-input input').focusout(function(){
  $(this).next('.imp').css('opacity','1');
  $(this).css('background','transparent');
  if ($(this).val()){
    $(this).next('.imp').css('opacity','0');
    $(this).css('background','#fff');
  }
  // console.log('input clicked');
});
$('.form-field-textarea textarea').focusin(function(){
  $(this).next('.imp').css('opacity','0');
  $(this).css('background','#fff');
  // console.log('input clicked');
});
$('.form-field-textarea textarea').focusout(function(){
  $(this).next('.imp').css('opacity','1');
  $(this).css('background','transparent');
  if ($(this).val()){
    $(this).next('.imp').css('opacity','0');
    $(this).css('background','#fff');
  }
  // console.log('input clicked');
});

// custom select
$('.after').click(function(){
 var a = $(this).children('.custom-select').slideToggle('slow');
 var b = $(this).children('.imp').text();
 var text = $(this).children('.imp');
 // var b = $(a).next('.custom-select');
 // console.log(b);
 var c = $(this).children('.custom-select').children('ul').children('li');
 // console.log(c)
 $(c).click(function(){
  var d = $(this).text();
  $(text).text(d);
  $(text).css('color','#a0a0a0');
  // b.html(d);
  // console.log(b);
 });
});
// payment tab
$('.payment-tab div a').click(function(){
  $('.payment-tab div a').removeClass('active');
  $(this).addClass('active');
  var id = $(this).attr('href');
  $('.payment-tab-body .data').removeClass('active');
  $(id).addClass('active');
});
</script>

@include('vwFooter')
