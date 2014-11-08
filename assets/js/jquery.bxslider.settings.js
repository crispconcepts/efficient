$(document).ready(function(){
	$('.slideshow.placeholder').addClass('hide');
	$('.slideshow.launchpad').removeClass('hide');
	$('.slideshow.launchpad').bxSlider({
		// mode: horizontal			// horizontal, vertical, fade
		easing: 'ease-out',			// linear, ease, ease-in, ease-out, ease-in-out
		adaptiveHeight: false,
		touchEnabled: true,
		swipeThreshold: '50',
		controls: false,
		auto: true,
		pause: 8000,
		autoHover: true,
	});
});