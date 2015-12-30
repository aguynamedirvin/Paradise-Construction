/** Slider **/

$(document).ready(function() {

	var $nextArrow = '<div class="slick-next">&#xf105;</div>';
	var $prevArrow = '<div class="slick-prev">&#xf104;</div>';

	// Main Slider 
	$('.slide-container').slick({
		arrows: false,
		autoplay: true,
		dots: true,
		cssEase: 'linear',
	});

	// Client Quote Slider
	$('.quote-slider').slick({
		arrows: true,
		autoplay: true,
		dots: true,
		cssEase: 'linear',
		nextArrow: $nextArrow,
		prevArrow: $prevArrow,
		responsive: [
			{
				breakpoint: 868,
				settings: {
					arrows: false,
				}
			}
		]
	});

	// Featured Projects - Homepage
	$('.featured-projects').slick({
		arrows: false,
		autoplay: true,
		autoplaySpeed: 1750,
		dots: false,
		pauseOnHover: false,
		slidesToScroll: 1,
		slidesToShow: 4,
		nextArrow: $nextArrow,
		prevArrow: $prevArrow,
		responsive: [
			{
				breakpoint: 380,
				settings: {
					slidesToShow: 1
				}
			},
			{
				breakpoint: 868,
				settings: {
					slidesToShow: 2
				}
			},
			{
				breakpoint: 1200,
				settings: {
					slidesToShow: 3
				}
			}
		]
	});

});