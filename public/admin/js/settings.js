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

$("#kt_site_settings_form").submit(function(event) {
	event.preventDefault();

	formData = $(this).serialize();
	baseUrl = $(this).attr('action');

	$.ajax({
		url: baseUrl,
		type: 'POST',
		dataType: 'json',
		data: formData,
		beforeSend: function() {
			
			$("#kt_site_settings_form_submit .indicator-label").hide();
			$("#kt_site_settings_form_submit .indicator-progress").show();
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

			$("#kt_site_settings_form_submit .indicator-label").show();
			$("#kt_site_settings_form_submit .indicator-progress").hide();
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