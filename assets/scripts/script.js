(function($){

	// Close content
	$('.accordion__content').hide();

	// Clicking title toggles accordion
	$('.accordion__title').click(function() {
		if($(this).parent().hasClass('is-open')){
			$(this).parent().removeClass('is-open');
			$(this).next().slideUp();
		} else {
			$('.accordion__content').slideUp();
			$('.accordion > .accordion-group').removeClass('is-open');
			$(this).parent().addClass('is-open');
			$(this).next().slideDown();
		}
	});

})(jQuery);