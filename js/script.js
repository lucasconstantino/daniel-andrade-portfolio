$(document).ready(function($) {
	var angle = 45;
	var duration = 200;

	$( ".bounce" ).mouseover(function() {var angle = Math.floor((Math.random() * 70) + 10);$(this).transition({ rotate: angle,  duration: duration });}).mouseleave(function() {$(this).transition({ rotate: 0,  duration: duration });});

	$( ".logo-contact" ).mouseover(function() {
		$(this).transition({ perspective: '100px',rotateY: '180deg'});
		}).mouseleave(function() {
			$(this).transition({ perspective: '100px',rotateY: '0deg'});
		});

	$( "#logo-img" ).mouseover(function() {
		$(this).transition({ perspective: '100px',rotateY: '180deg'});
		}).mouseleave(function() {
			$(this).transition({ perspective: '100px',rotateY: '0deg'});
		});

		
});