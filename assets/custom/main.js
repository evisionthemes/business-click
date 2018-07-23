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
		$('body').addClass('fixed-header  logo-left hide-header-on-scroll-down enable-scroll-animations');

		// preloader
		$('#evt-preloader').hide();

		// evt mobile menu
		$('#site-navigation').evtMobileMenu ();

		
		nav_padding_right();
		
		page_padding_top();


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