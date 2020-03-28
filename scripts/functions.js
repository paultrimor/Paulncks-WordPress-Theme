/*! 
 * Name: functions.js 
 * Description: Miscellaneous functions
**/ 

// Loads once the page starts
jQuery(window).resize(function() {
	var window_width = jQuery(window).width();

	if (window_width > 0 && window_width < 768) {
		/* Mobile Adjustments */ 
		jQuery('body').addClass('mobile')
			.removeClass('ipad').removeClass('desktop');
		
		showBranding();	

	} else if (window_width >= 768 && window_width < 991) {
		/* iPad Adjustments */ 
		jQuery('body').addClass('ipad')
			.removeClass('mobile').removeClass('desktop');
		closeMenu();

	} else if ( window_width >= 991) {
		/* Desktop Adjustments */ 
		jQuery('body').addClass('desktop')
			.removeClass('ipad').removeClass('mobile');
		closeMenu();
	}

}());

// Hide Branding Section when scroll on Mobile
var lastScrollTop = 0;
jQuery('body.mobile #content').scroll(function() {
	var st = jQuery(this).scrollTop();
	if (st > lastScrollTop) {
		console.log('scroll up');
		hideBranding();
	} else {
		console.log('scroll dowm');
		showBranding();
	}
   lastScrollTop = st;
}); 

function openMenu() {
	jQuery('#menu-main-container')
		.removeClass('menu-close')
		.addClass('menu-open');	
}
function closeMenu() {
	jQuery('#menu-main-container')
		.removeClass('menu-open')
		.addClass('menu-close');	
}
function toggleMenu() {
	if (!jQuery('#menu-main-container').hasClass('menu-open')) {
		openMenu();
	} else {
		closeMenu();
	}		
}

function hideBranding() {
	jQuery('.header-area')
		.removeClass('header-show')
		.addClass('header-hide');
}
function showBranding() {
	jQuery('.header-area')
		.removeClass('header-hide')
		.addClass('header-show');
}
