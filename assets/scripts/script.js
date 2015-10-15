$(document).ready( function() {

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

	$("img.lazy").lazyload({
		threshold : 200,
		event : "click",
		effect : "fadeIn"
	});

});