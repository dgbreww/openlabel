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

$("#kt_add_video_size_form").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$("#kt_add_video_size_form_submit .indicator-label").hide();
			$("#kt_add_video_size_form_submit .indicator-progress").show();
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
				$("#kt_add_video_size_form")[0].reset();
				$("#remove_image").trigger('click');

			}

			$("#kt_add_video_size_form_submit .indicator-label").show();
			$("#kt_add_video_size_form_submit .indicator-progress").hide();
		}
	});

});

$("#kt_update_video_size_form").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$("#kt_update_video_size_form_submit .indicator-label").hide();
			$("#kt_update_video_size_form_submit .indicator-progress").show();
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

			$("#kt_update_video_size_form_submit .indicator-label").show();
			$("#kt_update_video_size_form_submit .indicator-progress").hide();
		}
	});

});