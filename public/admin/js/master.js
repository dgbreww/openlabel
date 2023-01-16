function showMsg(type, msg) {
	if (type == 'error') {
		toastr.error(msg);
	} else if (type == 'success') {
		toastr.success(msg);
	} else if (type == 'warning') {
		toastr.warning(msg);
	} else {
		toastr.info(msg);
	}
}

$("#kt_sign_in_form").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$(".indicator-label").hide();
			$(".indicator-progress").show();
			$(".error").text('');	

		}, success: function(res) {
			if (res.error == true) {
				
				if (res.eType == 'field') {
					$.each(res.errors, function(index, val) {
						$("#"+index+"Err").text(val);
					});
				}

				if (res.eType == 'final') {
					showMsg('error', res.msg);
				}


			} else {

				window.location.href = res.redirect;

			}

			$(".indicator-label").show();
			$(".indicator-progress").hide();
		}
	});

});

$("#kt_sing_in_two_steps_form").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$(".indicator-label").hide();
			$(".indicator-progress").show();
			$(".removeErr").removeClass('border-error')

		}, success: function(res) {
			if (res.error == true) {
				
				if (res.eType == 'field') {
					$.each(res.errors, function(index, val) {
						$("#"+index+"Err").addClass('border-error');
					});
				}

				if (res.eType == 'final') {
					showMsg('error', res.msg);
				}


			} else {

				window.location.href = res.redirect;

			}

			$(".indicator-label").show();
			$(".indicator-progress").hide();
		}
	});

});

$("#resendOtp").click(function (e) {
	e.preventDefault();

	formData = "_token="+$(this).attr('data-value');

	$.ajax({
		url: baseUrl+"/resendTwoFactorPasscode",
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			$("#resendOtp").html(`Please wait... <span class="spinner-border spinner-border-sm align-middle ms-2"></span>`);
		}, success: function(res) {
			
			if (res.error == true) {
				
				if (res.eType == 'field') {
					$.each(res.errors, function(index, val) {
						$("#"+index+"Err").addClass('border-error');
					});
				}

				if (res.eType == 'final') {
					showMsg('error', res.msg);
				}

			} else {

				showMsg('success', res.msg);

			}

			$("#resendOtp").html('Resend');
		}
	});

});

$("#kt_password_reset_form").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$(".indicator-label").hide();
			$(".indicator-progress").show();
			$(".error").text('');	

		}, success: function(res) {
			if (res.error == true) {
				
				if (res.eType == 'field') {
					$.each(res.errors, function(index, val) {
						$("#"+index+"Err").text(val);
					});
				}

				if (res.eType == 'final') {
					showMsg('error', res.msg);
				}


			} else {

				showMsg('success', res.msg);
				
				setTimeout(function() {
					window.location.href = res.redirect;
				}, 3000);

			}

			$(".indicator-label").show();
			$(".indicator-progress").hide();
		}
	});

});

$("#kt_new_password_form").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$(".indicator-label").hide();
			$(".indicator-progress").show();
			$(".error").text('');	

		}, success: function(res) {
			if (res.error == true) {
				
				if (res.eType == 'field') {
					$.each(res.errors, function(index, val) {
						$("#"+index+"Err").text(val);
					});
				}

				if (res.eType == 'final') {
					showMsg('error', res.msg);
				}


			} else {

				showMsg('success', res.msg);

				//reset form
				$("#kt_new_password_form")[0].reset();
				
				setTimeout(function() {
					window.location.href = res.redirect;
				}, 3000);

			}

			$(".indicator-label").show();
			$(".indicator-progress").hide();
		}
	});

});

$("#kt_account_profile_details_form").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$("#kt_account_profile_details_submit .indicator-label").hide();
			$("#kt_account_profile_details_submit .indicator-progress").show();
			$(".error").text('');	

		}, success: function(res) {
			if (res.error == true) {
				
				if (res.eType == 'field') {
					$.each(res.errors, function(index, val) {
						$("#"+index+"Err").text(val);
					});
				}

				if (res.eType == 'final') {
					showMsg('error', res.msg);
				}


			} else {

				showMsg('success', res.msg);				

			}

			$("#kt_account_profile_details_submit .indicator-label").show();
			$("#kt_account_profile_details_submit .indicator-progress").hide();
		}
	});

});


// two factor

$("#twoFactor").change(function(event) {
	
	getToken = $(this).data('token');
	enableTwoFactor = false;

	if ($(this).is(':checked')) {
		enableTwoFactor = true;			
	}

	baseUrl = $(this).data('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: {
			_token: getToken,
			enableTwoFactor: enableTwoFactor
		},
		success: function(res) {
			if (res.error == true) {
				showMsg('error', res.msg);
			} else {
				showMsg('success', res.msg);
			}
		}
	});

});

$("#kt_signin_change_email").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$("#kt_signin_submit .indicator-label").hide();
			$("#kt_signin_submit .indicator-progress").show();
			$(".error").text('');	

		}, success: function(res) {
			if (res.error == true) {
				
				if (res.eType == 'field') {
					$.each(res.errors, function(index, val) {
						$("#"+index+"Err").text(val);
					});
				}

				if (res.eType == 'final') {
					showMsg('error', res.msg);
				}


			} else {

				showMsg('success', res.msg);					
				$("#kt_signin_email .fw-semibold").html(res.email);
				document.getElementById('kt_signin_email').classList.toggle('d-none');
		        document.getElementById('kt_signin_email_button').classList.toggle('d-none');
		        document.getElementById('kt_signin_email_edit').classList.toggle('d-none');		

			}

			$("#kt_signin_submit .indicator-label").show();
			$("#kt_signin_submit .indicator-progress").hide();
		}
	});

});

$("#kt_signin_change_password").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$("#kt_password_submit .indicator-label").hide();
			$("#kt_password_submit .indicator-progress").show();
			$(".error").text('');	

		}, success: function(res) {
			if (res.error == true) {
				
				if (res.eType == 'field') {
					$.each(res.errors, function(index, val) {
						$("#"+index+"Err").text(val);
					});
				}

				if (res.eType == 'final') {
					showMsg('error', res.msg);
				}


			} else {

				showMsg('success', res.msg);
				$("#kt_signin_change_password")[0].reset();
		        document.getElementById('kt_signin_password').classList.toggle('d-none');
		        document.getElementById('kt_signin_password_button').classList.toggle('d-none');
		        document.getElementById('kt_signin_password_edit').classList.toggle('d-none');

			}

			$("#kt_password_submit .indicator-label").show();
			$("#kt_password_submit .indicator-progress").hide();
		}
	});

});

function updateAlt(element) {
    altText = $(element).val();
    mediaId = $(element).data('id');

    $.ajax({
    	url: baseUrl+'media/doUpdateAlt',
    	type: 'POST',
    	dataType: 'json',
    	data: {
    		altText: altText, 
    		mediaId: mediaId,
    		_token: $('meta[name="_token"]').attr('content')
    	},
    	success: function(res) {
    		if (res.error == true) {
    			showMsg('error', res.msg);
    		} else {
    			showMsg('success', res.msg);
    		}
    	}
    });
    
}