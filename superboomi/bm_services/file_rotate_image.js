(function ($) {
	Drupal.ajax.prototype.commands.rotateImage = function (ajax, response, status) {
		if (response['settings'].url) {
			$(response['settings']['selector']).attr('src', response['settings'].url);
		}
	}
	Drupal.ajax.prototype.commands.rotateImageAction = function (ajax, response, status) {
		if (response['settings'].url) {
			$(response['settings']['selector']).attr('src', response['settings'].url);

			if (response['settings']['op'] == "Left") {
				var val = parseInt($('input[name="rotate_image_left_value"]').val());
				$('input[name="rotate_image_left_value"]').val(val + 1);
			}
			else {
				var val = parseInt($('input[name="rotate_image_right_value"]').val());
				$('input[name="rotate_image_right_value"]').val(val + 1);
			}
		}
	}
})(jQuery);

