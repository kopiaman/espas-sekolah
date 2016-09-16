/* Custom Scripts */
$(document).ready(function () {
		
	// Start One Page Scrolling
	$('.top-menu').singlePageNav({
		offset: 40,
		filter: ':not(.external)',
	});

    $('.navbar .nav a').on('click', function(){ 
        if($('.navbar-toggle').css('display') !='none'){
            $(".navbar-toggle").trigger( "click" );
        }
    });

	// Start Parallax script
	$('.bg-img').parallax("50%", 0.1);
	$('#quoteArea').parallax("50%", 0.1);
	$('#commentArea').parallax("50%", 0.05);
	$('#contactArea').parallax("50%", 0.05);
	$('.clients').parallax("50%", 0.2);

	// Start main image 
	var viewHeight = $(window).height();
	$("#main-slider .bg-img").css({
		'height': viewHeight
	});
	$(window).on('resize', function () {
		var viewHeight = $(window).height();
		$("#main-slider .bg-img").css({
			'height': viewHeight
		});
	});
	
	
	// Start Main Content Slider
	$('#main-slider').flexslider({
		animation: "fade",
  	slideshowSpeed: 3000,
    pauseOnHover: false, 
		useCSS: false,
		directionNav: true,
		touch: true,
		prevText: "<span class='glyphicon glyphicon-chevron-left'></span>",
		nextText: "<span class='glyphicon glyphicon-chevron-right'></span>",
	});

	// Start about Slider
      $('#about-slider').flexslider({
        animation: "slide",
        animationLoop: true,
		controlNav: false,
        itemWidth: 360,
		itemMargin: 30,
        move: 1,
        minItems: 1,
        maxItems: 3,
		prevText: "<span class='glyphicon glyphicon-chevron-left'></span>",
		nextText: "<span class='glyphicon glyphicon-chevron-right'></span>",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });

	// Start logo Slider
      $('#logo-slider').flexslider({
        animation: "slide",
        animationLoop: true,
		controlNav: false,
        itemWidth: 230,
        itemMargin: 10,
        move: 1,
        minItems: 1,
        maxItems: 5,
		prevText: "<span class='glyphicon glyphicon-chevron-left'></span>",
		nextText: "<span class='glyphicon glyphicon-chevron-right'></span>",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });

	// Start nth child class
	 $("#pricingArea ul li:nth-child(2n)").addClass("sucess");

	// Start comment slider
      $('#comment-slider').flexslider({
		animation: "slide",
		useCSS: false,
		directionNav: false,
		touch: true,
		prevText: "<span class='glyphicon glyphicon-chevron-left'></span>",
		nextText: "<span class='glyphicon glyphicon-chevron-right'></span>",
      });
	
	// Start Header Animation
	$(window).scroll(function () {
		if ($(document).scrollTop() == 0) {
			$('.top-menu').removeClass('tiny');
		} else {
			$('.top-menu').addClass('tiny');
		}
	});

	// Start Google Map
	$('#map_canvas').gmap({
		'center': new google.maps.LatLng(41.1529,-73.64434), // Change this to your desired latitude and longitude
		'zoom': 17,
		'mapTypeControl': false,
		'navigationControl': false,
		'streetViewControl': false,
		'styles': [{
			stylers: [{
				gamma: 0.60
			}, {
				hue: "#E67E22"
			}, {
				invert_lightness: false
			}, {
				lightness: 2
			}, {
				saturation: -20
			}, {
				visibility: "on"
			}]
		}]
	});
	var image = {
		url: 'images/marker.png', // Define the map marker file here
		// This marker is 51 pixels wide by 63 pixels tall.
		size: new google.maps.Size(64, 64),
		// The origin for this image is 0,0.
		origin: new google.maps.Point(0, 0),
		// The anchor for this image is the base of the flagpole at 26,63.
		anchor: new google.maps.Point(26, 63)
	};
	$('#map_canvas').gmap().bind('init', function () {
		$('#map_canvas').gmap('addMarker', {
			'id': 'marker-1',
			'position': '41.1529,-73.64434',
			'bounds': false,
			'icon': image
		}).click(function () {
			$('#map_canvas').gmap('openInfoWindow', {
				'content': '<p><strong style="color:#E67E22;">Thunder Loop, Tondagamies </strong><br>Village, Louisiana,<br> 71036-2571, <br>US, (337) 400-1518</p>'
			}, this);
		});
	}); 
	
	// prettyPhoto script start here
    $('a[data-gal]').each(function() {
        $(this).attr('rel', $(this).data('gal'));
    });     
    $("a[data-rel^='prettyPhoto']").prettyPhoto({animationSpeed:'slow',theme:'light_square',slideshow:false,overlay_gallery: false,social_tools:false,deeplinking:false});


	// Instantiate MixItUp:
/*
	$('#Grid').mixItUp({
	load: {
		filter: '.Sukan'
	}
    });	
*/
		
});	