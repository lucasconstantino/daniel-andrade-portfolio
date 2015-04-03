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




//OVERLAYS
$(document).ready(function() {
  if (Modernizr.touch) {
    // show the close overlay button
    $(".close-overlay").removeClass("hidden");
    // handle the adding of hover class when clicked
    $(".effects .img").click(function(e) {
      e.preventDefault();
      e.stopPropagation();
      if (!$(this).hasClass("hover")) {
        $(this).addClass("hover");
      }
    });
    // handle the closing of the overlay
    $(".close-overlay").click(function(e) {
      e.preventDefault();
      e.stopPropagation();
      if ($(this).closest(".img").hasClass("hover")) {
        $(this).closest(".img").removeClass("hover");
      }
    });
  } else {
    // handle the mouseenter functionality
    $(".effects .img").mouseenter(function() {
      $(this).addClass("hover");
    })
    // handle the mouseleave functionality
    .mouseleave(function() {
      $(this).removeClass("hover");
    });
  }
});

