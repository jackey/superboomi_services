(function ($) {
	Drupal.behaviors.bm_services = {
		attach: function (context, settings) {
			$('#bm_services_upload_picture_form').ajaxForm({
			    beforeSend: function() {
			    	console.log('beforeSend');
			    },
			    uploadProgress: function(event, position, total, percentComplete) {
			    	// none.
			    },
				complete: function(xhr) {
					console.log('complete');
				}
			});
		}
	};

})(jQuery);

// Drupal.ajax.prototype.commands.redirect = function (ajax, response, status) {
// 	if (response['settings'].url) {
// 		//window.location.href = response['settings'].url;
// 	}
// }