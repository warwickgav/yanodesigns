(function($){

	// Off Canvas Navigation
	var navClass = $('.global-navigation');

	$('.js-navToggle').click(function() {
		$('body').toggleClass('open-site-nav');
		navClass.toggleClass('is-leaving is-entering');
		$(this).toggleClass('is-active');
		navClass.removeClass('open-sub-nav');
		$('.sub-navigation').removeClass('is-entering').addClass('is-leaving');
		return false;
	});

	// Nav Item With Dropdown
	var navItemDropdown = $('li.has-dropdown');

	$(navItemDropdown).click(function() {
		$(this).children().toggleClass('is-leaving is-entering');
		$(this).parents('.global-navigation').addClass('open-sub-nav');
		return false;
	});

})(jQuery);