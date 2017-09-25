(function($) {


	/**
	 * FADE-IN FSAH MESSAGE
	 */	
	setTimeout(function(){$(".alert").fadeOut(4000);}, 7000);


	/**
	 * DELETE FORM
	 */
	$('#delete-form').on('submit', function() {
		return confirm('for sure?');
	});


}(jQuery));