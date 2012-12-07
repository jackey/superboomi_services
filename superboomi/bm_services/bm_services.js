(function ($) {
	Drupal.behaviors.AJAX = {
		attach: function (context, settings) {
			// var handlers = $('#edit-submit').data('events')['click'];
			// $('edit-submit').unbind();
			// $("#edit-submit").bind('click', function () {
			// 	$('#edit-field-boomi-image-und-0-upload-button').trigger('click');
			// 	$('#edit-submit').trigger('click');
			// });
			// $.each(handlers, function(handler) {
			// 	$('#edit-submit').bind('click', handler);
			// });
		}
	};

	$(document).ready(function () {

	});

})(jQuery);

Drupal.ajax.prototype.commands.redirect = function (ajax, response, status) {
	if (response['settings'].url) {
		//window.location.href = response['settings'].url;
	}
}