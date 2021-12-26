jQuery(function() {
	var	menuButton	= jQuery('#burgerMenu');
	    menu 		= jQuery('.main-menu');
		menuHeight	= menu.height();
		pageWrapper = document.querySelector('body');


	// Display menu if hamburger icon is clicked
	// jQuery(menuButton).on('click', function(e) {
	// 	e.preventDefault();
	// });
	
	document.getElementById("burgerMenu").addEventListener("click", function () {
		toggleMenu();
	});
	
	function toggleMenu() {
		document.getElementById("burgerMenu").classList.toggle("burgerMenu--open");
		pageWrapper.classList.toggle("menuOpen");
		menu.slideToggle();
		console.log('toggle');
	}

	// Make sure the menu isn't hidden if you resize to desktop view
	jQuery( window ).resize(function() {
		if ( menuButton.css('display') === 'none') {
			menu.removeAttr('style');
		}
	});

	// Back button, takes you to previous page
	jQuery('.back-button').click(function(e) {
		e.preventDefault();
		window.history.back();
	});

	// Cookie message
	var dismiss			= jQuery('#dismiss');
	var cookieMsg		= jQuery('#cookie-message');

	jQuery(dismiss).on('click', function(e) {
		e.preventDefault();
		cookieMsg.fadeOut();
	});

	// Theme click events
	jQuery(document).click(function(e) {
		var targetElement = jQuery(e.target);
		// if the hamburger menu is displayed AND
		// if you havent clicked on the hamburger menu AND
		// if you havent clicked on a menu item
		// if ( menuButton.css('display') === 'block' && ! jQuery(e.target).hasClass('mobile-buger-menu-toggle') && ! jQuery(e.target).parent().hasClass('menu-item')) {
		// 	menu.slideUp();
		// }

		if( targetElement.hasClass('image-gallery__image') ) {
			var parentSection = targetElement.closest('.page-section');
			var lightbox = parentSection.children('.gallery-lightbox');
			var imageIndex = targetElement.data('imageindex');
			lightboxGallery.slideTo(imageIndex);
			console.log(imageIndex);
			lightbox.addClass('gallery-lightbox--open');
		}

		if( targetElement.is('#gallery-lightbox__close') || targetElement.parent().is('#gallery-lightbox__close')) {
			var parentSection = targetElement.closest('.page-section');
			var lightbox = parentSection.children('.gallery-lightbox');
			lightbox.removeClass('gallery-lightbox--open');
		}

		if( targetElement.is('.mainMenu a[href="#footer-contact-form"]') ) {
			if ( menuButton.css('display') !== 'none') {
				toggleMenu();
			}
		}
	});

	// Testimonial slideshow
	const swiper = new Swiper('.swiper-container', {
		// Optional parameters
		loop: true,

		autoplay: {
			delay: 10000,
		},
	  
		// If we need pagination
		pagination: {
		  el: '.swiper-pagination',
		  clickable: true,
		},
	});

	// Gallery lightbox slideshow
	window.lightboxGallery = new Swiper('.gallery-lightbox', {
		// Optional parameters
		loop: true,
		observer: true,
		observeParents: true,
	  
		// Navigation arrows
		navigation: {
		  nextEl: '.swiper-button-next',
		  prevEl: '.swiper-button-prev',
		},
	});

	// Logos slideshow
	const logosSwiper = new Swiper('.logo-group__logos', {
		// Optional parameters
		slidesPerView: 3,
		spaceBetween: 20,

		autoplay: {
			delay: 5000,
		},
		breakpoints: {
			// when window width is >= 480px
			640: {
			  slidesPerView: 3,
			},
			// when window width is >= 640px
			1024: {
			  slidesPerView: 5,
			}
		},
		on: {
			beforeInit: function() {
				
				if(this.slides.length > this.slidesPerView) {
					this.params.loop = true;
				} else {
					this.params.centerInsufficientSlides = true;
				}
			}
		}
	});
});

// Smooth Scrolling To Internal Links
jQuery(document).ready(function(){
	jQuery('a[href^="#"]').on('click',function (e) {
		e.preventDefault();

		var target = this.hash;
		jQuerytarget = jQuery(target);

		jQuery('html, body').stop().animate({
			'scrollTop': jQuerytarget.offset().top
		}, 900, 'swing', function () {
			window.location.hash = target;
		});
	});
});


// ***********************************
// Helper Functions
// ***********************************

function handleTweets(tweets) {
	var x = tweets.length;
	var n = 0;
	var element = document.getElementById('latest-tweets');
	var html = '';
	while (n < x) {
		html += '<div class="single-tweet">';
		html += '<a class="twitter-bird" href="https://twitter.com/18aproductions" target="_blank"></a>';
		html += tweets[n];
		html += '</div>';
		n++;
	}
	element.innerHTML = html;
}

function twitterDate(date) {
	var monthNames = ["January", "February", "March",
		"April", "May", "June", "July", "August", "Septemner",
		"October", "November", "December"];
	var month = date.getMonth();
	var day = date.getDate();
	var dayExt = nth( day );
	var year = date.getFullYear();

	return day + dayExt + " " + monthNames[month] + " " + year;
}

function nth(d) {
	if(d>3 && d<21) return 'th'; // thanks kennebec
	switch (d % 10) {
		case 1:  return "st";
		case 2:  return "nd";
		case 3:  return "rd";
		default: return "th";
	}
}

function ColorLuminance(hex, lum) {

	// validate hex string
	hex = String(hex).replace(/[^0-9a-f]/gi, '');
	if (hex.length < 6) {
		hex = hex[0]+hex[0]+hex[1]+hex[1]+hex[2]+hex[2];
	}
	lum = lum || 0;

	// convert to decimal and change luminosity
	var rgb = "#", c, i;
	for (i = 0; i < 3; i++) {
		c = parseInt(hex.substr(i*2,2), 16);
		c = Math.round(Math.min(Math.max(0, c + (c * lum)), 255)).toString(16);
		rgb += ("00"+c).substr(c.length);
	}

	return rgb;
}

jQuery.fn.isOnScreen = function(){
	var win = jQuery(window);

	var viewport = {
		top : win.scrollTop(),
		left : win.scrollLeft()
	};
	viewport.right = viewport.left + win.width();
	viewport.bottom = viewport.top + win.height();

	var bounds = this.offset();
	bounds.right = bounds.left + this.outerWidth();
	bounds.bottom = bounds.top + this.outerHeight();

	return (!(viewport.right < bounds.left || viewport.left > bounds.right || viewport.bottom < bounds.top || viewport.top > bounds.bottom));

};
