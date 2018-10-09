+(function($) {
	$(window).load(function() {
	    /*wow js*/
	    // fullpage slider - not support with wow
	    if( $('body').hasClass('enable-scroll-animations') ) {
		    wow = new WOW({
		            boxClass: 'evision-animate'
		        }
		    )
		    wow.init();
	    }
	});
})(jQuery);