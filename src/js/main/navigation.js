/**

	This script adds/removes class of the header and a button in the header changing
	the button and header styles once you scroll past a certain point
	
**/
$(function() {

	// Variables
	var header = $('#header');
	var button = $('#header .btn');
	var $w = $(window);

	function headerBackground() {

		/**
			If window position is more or qual to 250 then shouldBeSticky is TRUE
		**/

		var windowPosition = $w.scrollTop();
		var shouldBeSticky = windowPosition >= 250;

		// If TRUE then add class .STICKY-HEADER to header
		if (shouldBeSticky) {
			button.removeClass('btn-line');
			header.addClass('header-sticky');
		} else {
			button.addClass('btn-line');
			header.removeClass('header-sticky');
		}
	}

	$(document).ready(headerBackground);
	$w.scroll(headerBackground);

});


/**

	This script makes a navigation menu a hamburger dropdown when the site is viewed on
	a mobile device

**/
(function($) {

	$.fn.dropMenu = function(options) {
			
			// Options
			var cssmenu = $(this), settings = $.extend({
				title: "Menu",
				format: "dropdown"
			}, options);

			return this.each(function() {
				cssmenu.prepend('<div id="menu-hamburger">' + settings.title + '</div>');
				$(this).find("#menu-hamburger").on('click', function(){


					$(this).toggleClass('menu-opened');

					// Define the menu
					var mainmenu = $('.navigation');


					if (mainmenu.hasClass('open')) { 
						//mainmenu.hide().removeClass('open');
						mainmenu.slideToggle().removeClass('open');
					}
					else {
						//mainmenu.show().addClass('open');
						mainmenu.slideToggle().addClass('open');
						if (settings.format === "dropdown") {
							mainmenu.find('ul').show();

						}
					}   
				});

				resizeFix = function() {
					var breakpoint = 868;
					
					if ($( window ).width() > breakpoint) {
						cssmenu.find('ul').show();
					}

					if ($(window).width() <= breakpoint) {
						cssmenu.find('ul').hide().removeClass('open');
					}
				};
				resizeFix();
				return $(window).on('resize', resizeFix);

			});
	};
})(jQuery);


(function($){
	$(document).ready(function(){

		$(".site-navigation").dropMenu({
			title: "Menu",
			format: "multitoggle",
		});

	});
})(jQuery);