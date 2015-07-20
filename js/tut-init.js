//Flexslider
jQuery( document ).ready(function( $ ) {

			var $slider = $('#thinkup-testimonials .slides'),
    		timer = +$slider.data('timer');

			$('#thinkup-testimonials').flexslider({
				slideshow: true,
				animationDuration: 200,
				slideshowSpeed: timer
			});

			$('.flexslider').flexslider();
		});
