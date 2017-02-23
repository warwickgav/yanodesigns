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

    var scrolling;

	$('#toggleMenu').click(function(){
		$('body').toggleClass('show-menu');
		return false;
	});

	$('#closeMenu').click(function(){
		$('body').toggleClass('show-menu');
		return false;
	});

	$(".fancybox").fancybox({
		openEffect	: 'none',
		closeEffect	: 'none'
	});

    var scrolling;
    var lastScrollTop = 0;
    var delta = 80;
    var navbarHeight = $('.site-header').outerHeight();

    $(window).scroll(function(event){
        scrolling = true;
    });

    setInterval(function() {
        if (scrolling) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();

        // Make sure they scroll more than delta
        if(Math.abs(lastScrollTop - st) <= delta)
            return;

        // If they scrolled down and are past the navbar, add class .nav-up.
        // This is necessary so you never see what is "behind" the navbar.
        if (st > lastScrollTop && st > navbarHeight){
            // Scroll Down
            $('.site-header').removeClass('up').addClass('down');
        } else {
            // Scroll Up
            if(st + $(window).height() < $(document).height()) {
                $('.site-header').removeClass('down').addClass('up');
            }
        }

        lastScrollTop = st;
    }

})(jQuery);