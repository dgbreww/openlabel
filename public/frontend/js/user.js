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

function openModel(el) {
	id = $(el).attr('data-target');
	$(id).modal('show');
}

function closeModel(el) {
	id = $(el).attr('data-target');
	$(id).modal('hide');
}

$('.newStatus').change(function (e) {
	e.preventDefault();

	newStatus = $(this).find(':selected').val();
	id = $(this).attr('data-id');
	jobid = $(this).attr('data-jobid');
	token = $(this).attr('data-token');

	$.ajax({
		url: baseUrl+'/user/doChangeCreationStatus',
		type: 'POST',
		dataType: 'json',
		data: {
			newStatus: newStatus,
			id: id,
			jobId: jobid,
			_token: token,
		},
		success: function(res) {
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
					location.reload()
				}, 2000);

			}
		}
	});

});

function saveJob(el, jobId) {
	token = $(el).attr('data-token');

	$.ajax({
		url: baseUrl+"/user/doSaveJob",
		type: 'POST',
		dataType: 'json',
		data: {_token: token, jobId: jobId},
		beforeSend: function() {

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

				elTagName = $(el).prop("tagName");
				console.log(elTagName);

				if (res.status == 'add') {
					$(el).addClass('like-bg');
					
					if (elTagName == 'BUTTON') {
						$(el).text('Saved');
					}

				} else {
					$(el).removeClass('like-bg');

					if (elTagName == 'BUTTON') {
						$(el).text('Save Job');
					}
				}

				showMsg('success', res.msg);
			}
		}
	});
	
}

function applyJob(el, jobId) {
	token = $(el).attr('data-token');

	$.ajax({
		url: baseUrl+"/user/doApplyJob",
		type: 'POST',
		dataType: 'json',
		data: {_token: token, jobId: jobId},
		beforeSend: function() {

			$(el).html(`Applying <i class="fa fa-spinner fa-spin"></i>`)

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

				$(el).html(`Apply Now`)

			} else {

				showMsg('success', res.msg);
				$(el).html(`Applied`);

			}

		}
	});
	
}

$("#signUpForm").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	if ($('[name=userType]').prop('checked')) {
		formData += "&userType=creator";
	} else {
		formData += "&userType=artist";
	}

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$("#signUpFormBtn").html('Please Wait...')
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
				$("#signUpForm")[0].reset();

				setTimeout(function() {
					window.location.href = res.redirect;
				}, 3000);

			}

			$("#signUpFormBtn").html('Create account');
		}
	});

});

$("#loginForm").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$("#loginFormBtn").html('Please Wait...')
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

			$("#loginFormBtn").html('Login');
		}
	});

});

$("#forgotPasswordForm").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$("#forgotPasswordFormBtn").html('Please Wait...')
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

			$("#forgotPasswordFormBtn").html('Reset Password');
		}
	});

});

$("#resetPasswordForm").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$("#resetPasswordFormBtn").html('Please Wait...')
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

			$("#resetPasswordFormBtn").html('Change Password');
		}
	});

});

$("#myProfileForm").submit(function(event) {
	event.preventDefault();

	var formData = new FormData(this);
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		contentType: false,
        cache: false,
        processData:false,
		beforeSend: function() {
			
			$("#myProfileFormBtn").html('Please Wait...')
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

			$("#myProfileFormBtn").html('Create account');
		}
	});

});

$("#paymentMethodFormBtn").click(function (e) {
	$('.withdrawl-form').show();
	$("#bank_transfer_method").show();
});

$(".withdraw-div-radio").change(function (e) {
	getValue = $(this).val();

	$("#bank_transfer_method").hide();
	$("#paypal_method").hide();
	$("#stripe_method").hide();

	if (getValue == 'bank_transfer') {
		$("#bank_transfer_method").show();
	} else if(getValue == 'paypal') {
		$("#paypal_method").show();
	} else if(getValue == 'stripe') {
		$("#stripe_method").show();
	} else {
		$("#bank_transfer_method").show();
	}

});

$("#withdrawalForm").submit(function(event) {
	event.preventDefault();

	var formData = new FormData(this);
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		contentType: false,
        cache: false,
        processData:false,
		beforeSend: function() {
			
			$("#withdrawalFormBtn").html('Please Wait...')
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
					location.reload();
				}, 2000);

			}

			$("#withdrawalFormBtn").html('Submit');
		}
	});

});

$("#changePasswordForm").submit(function(event) {
	event.preventDefault();

	var formData = new FormData(this);
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		contentType: false,
        cache: false,
        processData:false,
		beforeSend: function() {
			
			$("#changePasswordFormBtn").html('Please Wait...')
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
				$("#changePasswordForm")[0].reset();
				
			}

			$("#changePasswordFormBtn").html('Update Password');
		}
	});

});

$('.checkout').click(function () {

	packageId = $(this).attr('data-id');
	token = $(this).attr('data-token');

	$.ajax({
		url: baseUrl+'/validatePackage',
		type: 'POST',
		dataType: 'json',
		data: {packageId: packageId, _token: token},
		beforeSend: function() {
			$(this).html('Please Wait...');
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

			$(this).html('Buy Now');
		}
	})
	
});

$("#checkoutForm").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$("#checkoutFormBtn").html('Please Wait...')
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

			$("#checkoutFormBtn").html('Pay Now');
		}
	});

});

$("#postJobForm").submit(function(event) {
	event.preventDefault();

	var formData = new FormData(this);
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		contentType: false,
        cache: false,
        processData:false,
		beforeSend: function() {
			
			$("#postJobFormBtn").html('Please Wait...')
			$(".error").text('');	

		}, success: function(res) {
			if (res.error == true) {
				
				if (res.eType == 'field') {
					$.each(res.errors, function(index, val) {
						$("#"+index+"Err").text(val);

						if (index == 'documents.0' || index == 'documents.1' || index == 'documents.2' || index == 'documents.3' || index == 'documents.4') {
							$("#documentsErr").text(val);
						}

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

			$("#postJobFormBtn").html('Submit');
		}
	});

});


$("#subscribeNowForm").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$("#subscribeNowFormBtn").html('Please Wait...')
			$(".error").text('');	

		}, success: function(res) {
			if (res.error == true) {
				
				if (res.eType == 'field') {
					$.each(res.errors, function(index, val) {						
						$("#subscribeNowFormEmail").html(val)
					});					
				}

				if (res.eType == 'final') {
					showMsg('error', res.msg);
				}


			} else {

				showMsg('success', res.msg);
				$("#subscribeNowForm")[0].reset();
			}

			$("#subscribeNowFormBtn").html('Send');
		}
	});

});

$("#customMessageForm").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$("#customMessageFormBtn").html('Please Wait...')
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
				$("#form").modal('hide');
        		$("#customMessageForm")[0].reset();

			}

			$("#customMessageFormBtn").html('Submit');
		}
	});

});

$(".submitVideoForm").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$(".submitVideoFormBtn").html('Please Wait...')
			$(".error").text('');	

		}, success: function(res) {
			if (res.error == true) {
				
				if (res.eType == 'field') {
					$.each(res.errors, function(index, val) {
						$("."+index+"Err").text(val);
					});
				}

				if (res.eType == 'final') {
					showMsg('error', res.msg);
				}


			} else {

				showMsg('success', res.msg);
				$(".modal").modal('hide');
        		$(".submitVideoForm")[0].reset();
        		location.reload();

			}

			$(".submitVideoFormBtn").html('Submit');
		}
	});

});

