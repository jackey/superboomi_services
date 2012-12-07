(function ($) {
	Drupal.behaviors.AJAX = {
	  attach: function (context, settings) {
	    // Load all Ajax behaviors specified in the settings.
	    for (var base in settings.ajax) {
	      if (!$('#' + base + '.ajax-processed').length) {
	        var element_settings = settings.ajax[base];

	        if (typeof element_settings.selector == 'undefined') {
	          element_settings.selector = '#' + base;
	        }
	        $(element_settings.selector).each(function () {
	          element_settings.element = this;
	          this.form = $(this.form).ajaxForm();
	          Drupal.ajax[base] = new Drupal.ajax(base, this, element_settings);
	        });

	        $('#' + base).addClass('ajax-processed');
	      }
	    }

	    // Bind Ajax behaviors to all items showing the class.
	    $('.use-ajax:not(.ajax-processed)').addClass('ajax-processed').each(function () {
	      var element_settings = {};
	      // Clicked links look better with the throbber than the progress bar.
	      element_settings.progress = { 'type': 'throbber' };

	      // For anchor tags, these will go to the target of the anchor rather
	      // than the usual location.
	      if ($(this).attr('href')) {
	        element_settings.url = $(this).attr('href');
	        element_settings.event = 'click';
	      }
	      var base = $(this).attr('id');
	      Drupal.ajax[base] = new Drupal.ajax(base, this, element_settings);
	    });

	    // This class means to submit the form to the action using Ajax.
	    $('.use-ajax-submit:not(.ajax-processed)').addClass('ajax-processed').each(function () {
	      var element_settings = {};

	      // Ajax submits specified in this manner automatically submit to the
	      // normal form action.
	      element_settings.url = $(this.form).attr('action');
	      // Form submit button clicks need to tell the form what was clicked so
	      // it gets passed in the POST request.
	      element_settings.setClick = true;
	      // Form buttons use the 'click' event rather than mousedown.
	      element_settings.event = 'click';
	      // Clicked form buttons look better with the throbber than the progress bar.
	      element_settings.progress = { 'type': 'throbber' };

	      var base = $(this).attr('id');
	      console.log(this);
	      Drupal.ajax[base] = new Drupal.ajax(base, this, element_settings);
	    });
	  }
	};
})(jQuery);

Drupal.ajax.prototype.commands.redirect = function (ajax, response, status) {
	if (response['settings'].url) {
		//window.location.href = response['settings'].url;
	}
}