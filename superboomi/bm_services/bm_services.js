(function ($) {
	Drupal.behaviors.bm_services = {
		attach: function (context, settings) {
			$('#bm_services_upload_picture_form').ajaxForm({
			    beforeSend: function() {
			    	// none
			    },
			    uploadProgress: function(event, position, total, percentComplete) {
			    	// none.
			    },
				complete: function(xhr) {
					// none
				}
			});

			//
			$('#bm_services_ajax_submit_form').ajaxForm({
				beforeSend: function() {

				},
				uploadProgress: function(event, position, total, percentComplete) {

				},
				complete: function(xhr) {
					// none
				}
			});

			// unpublish / publish
			$('.views-field-unpublish a, .views-field-unpublish a').click(function () {
				var href = $(this).attr('href');
				$.ajax({
					url: href,
					success: function () {
						// success
					}
				});

				return false;
			});
		}
	};

})(jQuery);

// Drupal.ajax.prototype.commands.redirect = function (ajax, response, status) {
// 	if (response['settings'].url) {
// 		//window.location.href = response['settings'].url;
// 	}
// }