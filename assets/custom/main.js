+(function($) {
	function page_padding_top() {
		var header_height = $('header').height();

		if($('body').hasClass('fixed-header')) {
			if($('body.home').hasClass('blog')) {
				header_height += 30;
			}
			$('#page.site').css({ 'padding-top': header_height + 'px' });
		}
		else {
			$('#page.site').css({ 'padding-top': '0' }); 
		}

		// transparent-header
		if($('body.home').hasClass('transparent-header')) {
			$('body.home #page.site').css({ 'padding-top': '0' }); //if not top header
		}

	}

	function nav_padding_right() {
		var padding_right = 0;
		if($('#evt-buy-btn').width() != '') {
			padding_right = $('#evt-buy-btn').width() + 40 + 20 + 'px';
		}
		$('nav#site-navigation').css({'padding-right': padding_right});
	}

	$(window).resize(function() {
		page_padding_top();
		nav_padding_right();
	});

	$(window).load(function() {
		// fixed header, boxed for archive page, enable-scroll-animations
		$('body').addClass('fixed-header logo-left hide-header-on-scroll-down enable-scroll-animations');

		// preloader
		$('#evt-preloader').hide();

		// evt mobile menu
		$('#site-navigation').evtMobileMenu ();

		page_padding_top();
		
		nav_padding_right();


		// show hide header contact info
		jQuery('.head-list-toggle').click(function(){
			jQuery('#evt-top-header').toggleClass('show-evt-head-list');
			page_padding_top();
		});

		// search toggle
		$('body').append('<div class="evt-search-mask"></div>');
		
		$('.evt-head-search-toggler').click(function() {
			$('body').toggleClass('head-search-active');

			// focus search input
			if($('body').hasClass('head-search-active')) {
				$('header.site-header .evt-head-search input.search-field').focus();
			}
		});

		$('.evt-search-mask').click(function() { 
			$('#evt-top-header .evt-head-search-toggler').trigger('click');
		});


		

		// scroll top
		$(window).scroll(function() { 
			var scrollTopPosition    = (document.documentElement && document.documentElement.scrollTop) || document.body.scrollTop;

			if (scrollTopPosition > 50) {//50, 200
				// scrolled down
		        $("body").addClass('small-header');
		        
		        $('#evt-scroll-top').css({'bottom': '40px'});
		    } else {
		        $("body").removeClass('small-header');

		        $('#evt-scroll-top').css({'bottom': '-40px'});
		    } 
		});

		$('#evt-scroll-top').click(function() {
			$("html, body").animate({ scrollTop: 0 }, "slow");
		});

		// slick_init
		var slick_ltr, slick_rtl;

		var slick_ltr = false;//ltr, rtl both works in false

		if($('body').hasClass('rtl')) {
			slick_rtl = true;//rtl works in true
		} else {
			slick_rtl = false;//ltr works in false
		}
		

		// banner
		$(".evt-banner-slider").slick({
			arrows: 		true,
			autoplay: 		true,
			autoplaySpeed: 	4000,
			draggable: 		true,
			dots: 			true,
			fade: 			true,
			infinite: 		true,
			pauseOnFocus: 	false,
			pauseOnHover: 	true,
			ltr: slick_ltr,//for rtl support
			rtl: slick_rtl,
			prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
			speed: 800,
			useCSS: true,
		});
		$("#evt-banner").css({'opacity': 1});

		
		$(".evt-featured-slider.evt-carousel").slick({
			arrows: false,
			autoplay:true ,
			autoplaySpeed: 4000,
			draggable: true,
			dots:  true,
			infinite: true,
			pauseOnFocus: false,
			pauseOnHover: true,
			ltr: slick_ltr,//for rtl support
			rtl: slick_rtl,
			slidesToShow: 3,
			prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
			speed: 800,
			useCSS: true,

			// the magic
			responsive: [{

			  breakpoint: 1024,
			  settings: {
			    slidesToShow: 3,
			    infinite: true
			  }

			}, 
			{

			  breakpoint: 991,
			  settings: {
			    slidesToShow: 2,
			  }

			}, 
			{

			  breakpoint: 575,
			  settings: {
			    slidesToShow: 1,
			  }

			}, 
			// {

			//   breakpoint: 300,
			//   settings: "unslick" // destroys slick

			// }
			]
		});

		// carousel
		$(".evt-team-slider.evt-carousel .tmm_container").slick({
			arrows: true,
			autoplay: true,
			autoplaySpeed: 4000,
			draggable: true,
			dots: false,
			infinite: true,
			pauseOnFocus: false,
			pauseOnHover: true,
			ltr: slick_ltr,//for rtl support
			rtl: slick_rtl,
			slidesToShow: 3,
			prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
			speed: 800,
			useCSS: true,

			// the magic
			responsive: [{

			  breakpoint: 1024,
			  settings: {
			    slidesToShow: 3,
			    infinite: true
			  }

			}, 
			{

			  breakpoint: 991,
			  settings: {
			    slidesToShow: 2,
			  }

			}, 
			{

			  breakpoint: 575,
			  settings: {
			    slidesToShow: 1,
			  }

			}, 
			// {

			//   breakpoint: 300,
			//   settings: "unslick" // destroys slick

			// }
			]
		});

		// blog
		

		$(".evt-blog-slider.evt-carousel").slick({
			arrows:  true,
			autoplay: true,
			autoplaySpeed: 4000,
			draggable: true,
			dots: false,
			infinite: true,
			pauseOnFocus: false,
			pauseOnHover: true,
			ltr: slick_ltr,//for rtl support
			rtl: slick_rtl,
			slidesToShow: 3,
			prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
			speed: 800,
			useCSS: true,

			// the magic
			responsive: [{

			  breakpoint: 1024,
			  settings: {
			    slidesToShow: 3,
			    infinite: true
			  }

			}, 
			{

			  breakpoint: 991,
			  settings: {
			    slidesToShow: 2,
			  }

			}, 
			{

			  breakpoint: 575,
			  settings: {
			    slidesToShow: 1,
			  }

			}, 
			// {

			//   breakpoint: 300,
			//   settings: "unslick" // destroys slick

			// }
			]
		});

		// testimonials	
		$(".evt-testimonials-slider").slick({
			arrows:true,
			autoplay: true,
			autoplaySpeed: 4000,
			draggable: true,
			dots: false,
			infinite: true,
			pauseOnFocus: false,
			pauseOnHover: true,
			ltr: slick_ltr,//for rtl support
			rtl: slick_rtl,
			slidesToShow: 1,
			prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
			speed: 800,
			useCSS: true,
		});

		// partner	
		$(".evt-partner-slider").slick({
			arrows: false,
			autoplay: true,
			autoplaySpeed: 4000,
			draggable: true,
			dots: false,
			infinite: true,
			pauseOnFocus: false,
			pauseOnHover: true,
			ltr: slick_ltr,//for rtl support
			rtl: slick_rtl,
			slidesToShow: 4,
			prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-angle-left"></i></button>',
			nextArrow: '<button type="button" class="slick-next"><i class="fas fa-angle-right"></i></button>',
			speed: 800,
			useCSS: true,

			// the magic
			responsive: [{

			  breakpoint: 767,
			  settings: {
			    slidesToShow: 3,
			    infinite: true
			  }

			}, 
			{

			  breakpoint: 575,
			  settings: {
			    slidesToShow: 2,
			  }

			}, 
			{

			  breakpoint: 359,
			  settings: {
			    slidesToShow: 1,
			  }

			}, 
			// {

			//   breakpoint: 300,
			//   settings: "unslick" // destroys slick

			// }
			]
		});



	    /*wow js*/
	    if( $('body').hasClass('enable-scroll-animations') ) {
		    wow = new WOW({
		            boxClass: 'evision-animate'
		        }
		    )
		    wow.init();
	    }


	    /* isotope */
	    var grid = $('.evt-grid');
		grid.isotope({
		    itemSelector: '.element-item',
		    masonry: {
		    }
	    });

	    // filter items on button click
		$('#filters.button-group').on( 'click', 'button', function() {
		  var filterValue = $(this).attr('data-filter');
		  grid.isotope({ filter: filterValue });
		});

		// change is-checked class on buttons
		$('#filters.button-group').each( function( i, buttonGroup ) {
		  var $buttonGroup = $( buttonGroup );
		  $buttonGroup.on( 'click', 'button', function() {
		    $buttonGroup.find('.is-checked').removeClass('is-checked');
		    $( this ).addClass('is-checked');
		  });
		});


		// hide header on scroll down, show on scroll up
		// Hide Header on on scroll down
		var didScroll;
		var lastScrollTop = 0;
		var delta = 5;
		var navbarHeight = $('header').outerHeight();

		$(window).scroll(function(event){
		    didScroll = true;
		});

		setInterval(function() {
		    if (didScroll) {
		        hasScrolled();
		        didScroll = false;
		    }
		}, 250);

		function hasScrolled() {
		    var st = $(this).scrollTop();
		    
		    // Make sure they scroll more than delta
		    if(Math.abs(lastScrollTop - st) <= delta)
		        return;
		    
		    // If they scrolled down and are past the navbar, add class .nav-up.
		    // This is necessary so you never see what is "behind" the navbar.
		    if (st > lastScrollTop && st > navbarHeight){
		        // Scroll Down
		        $('header').removeClass('nav-down').addClass('nav-up');
		    } else {
		        // Scroll Up
		        if(st + $(window).height() < $(document).height()) {
		            $('header').removeClass('nav-up').addClass('nav-down');
		        }
		    }
		    
		    lastScrollTop = st;
		}
		
	});
})(jQuery);