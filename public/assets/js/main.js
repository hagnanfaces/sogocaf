(function($) {
	"use strict";

	///////////////////////////
	// Preloader
	$(window).on('load', function() {
		$("#preloader").delay(600).fadeOut();
	});

	///////////////////////////
	// Scrollspy
	$('body').scrollspy({
		target: '#nav',
		offset: $(window).height() / 2
	});

	///////////////////////////
	// Lang
	$("#lang").on('change', function(e) {
		// console.info('el: ',$(this).val());
		// console.info('location: ',window.location.origin);
		window.location.replace(`${window.location.origin}/${$(this).val()}`)
	});

	///////////////////////////
	// Smooth scroll
	$("#nav .main-nav a[href^='#']").on('click', function(e) {
		e.preventDefault();
		var hash = this.hash;
		$('html, body').animate({
			scrollTop: $(this.hash).offset().top
		}, 600);
	});

	$('#back-to-top').on('click', function(){
		$('body,html').animate({
			scrollTop: 0
		}, 600);
	});

	///////////////////////////
	// Btn nav collapse
	$('#nav .nav-collapse').on('click', function() {
		$('#nav').toggleClass('open');
	});

	///////////////////////////
	// Mobile dropdown
	$('.has-dropdown a').on('click', function() {
		$(this).parent().toggleClass('open-drop');
	});

	///////////////////////////
	// On Scroll
	$(window).on('scroll', function() {
		var wScroll = $(this).scrollTop();

		// Fixed nav
		wScroll > 1 ? $('#nav').addClass('fixed-nav') : $('#nav').removeClass('fixed-nav');

		// Back To Top Appear
		wScroll > 700 ? $('#back-to-top').fadeIn() : $('#back-to-top').fadeOut();
	});

	///////////////////////////
	// magnificPopup
	$('.work').magnificPopup({
		delegate: '.lightbox',
		// gallery: {
		// 	enabled: true, // set to true to enable gallery
		//
		// 	preload: [0,2], // read about this option in next Lazy-loading section
		//
		// 	navigateByImgClick: true,
		//
		// 	arrowMarkup: '<button title="%title%" type="button" class="mfp-arrow mfp-arrow-%dir%"></button>', // markup of an arrow button
		//
		// 	// tPrev: 'Previous (Left arrow key)', // title for left button
		// 	// tNext: 'Next (Right arrow key)', // title for right button
		// 	tCounter: '<span class="mfp-counter">%curr% of %total%</span>' // markup of counter
		// },
		type: 'image',
		callbacks: {

			buildControls: function () {
				// re-appends controls inside the main container
				this.contentContainer.append(this.arrowLeft.add(this.arrowRight));
			}
		}
	});
	$('.gallery').each(function () { // the containers for all your galleries
		$(this).magnificPopup({
			delegate: 'a', // the selector for gallery item
			type: 'image',
			gallery: {
				enabled: true
			}
		});
	});

	///////////////////////////
	// Owl Carousel
	/*$('#bgi-slider').owlCarousel({
		// items:1,1
		loop:true,
		margin:15,
		nav: true,
		navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		dots : true,
		autoplay : true,
		animateOut: 'fadeOut'
	});*/

	$('#about-slider').owlCarousel({
		items:1,
		loop:true,
		margin:15,
		nav: true,
		navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		dots : true,
		autoplay : true,
		animateOut: 'fadeOut'
	});

    $('.product').owlCarousel({
        items: 1,
        loop: true,
        margin: 15,
        nav: false,
        // navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
        dots: true,
        autoplay: true,
        animateOut: 'fadeOut',
        // responsive:{
        //     0: {
        //         items:1
        //     },
        //     992:{
        //         items:2
        //     }
        // }
    });

	$('#testimonial-slider').owlCarousel({
		loop:true,
		margin:15,
		dots : true,
		nav: false,
		autoplay : true,
		responsive:{
			0: {
				items:1
			},
			992:{
				items:2
			}
		}
	});

})(jQuery);
