/** Slider **/

$(document).ready(function() {

	// Main Slider 
	$('.slide-container').slick({
		arrows: false,
		autoplay: true,
		dots: true,
	});

	// Client Quote Slider
	$('.quote-slider').slick({
		arrows: true,
		autoplay: true,
		dots: true,
		cssEase: 'linear',
		nextArrow: '<div class="slick-next">&#xf105;</div>',
		prevArrow: '<div class="slick-prev">&#xf104;</div>',
		responsive: [
			{
				breakpoint: 868,
				settings: {
					arrows: false,
				}
			}
		]
	});

	// Project Page Slider & Navigation Slider
	$('.project__slides').slick({
		adaptiveHeight: true,
		arrows: true,
		asNavFor: '.project__slider-nav',
		autoplay: true,
		//lazyLoad: 'ondemand',
		nextArrow: '<div class="slick-next">&#xf105;</div>',
		prevArrow: '<div class="slick-prev">&#xf104;</div>',
	});
	$('.project__slider-nav').slick({
		arrows: false,
		asNavFor: '.project__slides',
		//centerMode: true,
		focusOnSelect: true,
		slidesToScroll: 1,
		slidesToShow: 4,
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
		nextArrow: '<div class="slick-next">&#xf105;</div>',
		prevArrow: '<div class="slick-prev">&#xf104;</div>',
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