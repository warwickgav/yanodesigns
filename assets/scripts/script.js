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

	//var $grid = $('.grid').imagesLoaded( function() {
	//	// init Masonry after all images have loaded
	//	$('.grid').masonry({
	//		itemSelector: '.grid-col',
	//		columnWidth: '.grid-sizer',
	//		percentPosition: true
	//	});
	//});
	//
	//$('.product-grid').masonry({
	//	itemSelector: '.grid-col',
	//	columnWidth: '.grid-sizer',
	//	percentPosition: true
	//});

});