jQuery(window).load(function() {
	// on window load

	// Top Header Bar
	jQuery('.menu_locations').click(function() {
		wp.customize.section( 'menu_locations' ).focus();
	});


	// Testimonial Section - Select Number of post
	jQuery('ul#sub-accordion-section-business-click-testimonial-section li#customize-control-business_click_options-business-click-number-of-testimonial select').on('change', function() {
		var selectedNum = jQuery(this).val();
		jQuery('ul#sub-accordion-section-business-click-testimonial-section li[id*="customize-control-business_click_options-testimonial-page-ids_"], ul#sub-accordion-section-business-click-testimonial-section li[id*="customize-control-business_click_options-testimonial-designation-ids_"]').hide();

		for(var i = 1; i <= selectedNum; i++) {
			jQuery('.customize-control-dropdown-pages#customize-control-business_click_options-testimonial-page-ids_'+i).show();
			jQuery('.customize-control-text#customize-control-business_click_options-testimonial-designation-ids_'+i).show();
		}
	});
});

function evt_feature_setting_show_hide(value, parent_id) {
	if(value == 'From-Page') {
		jQuery(parent_id).addClass('from-page-selected');
		jQuery(parent_id).removeClass('from-category-selected');	
	}
	else {
		jQuery(parent_id).addClass('from-category-selected');	
		jQuery(parent_id).removeClass('from-page-selected');
	}
}

// * Slider Section - Overlay
function evt_slider_overlay(li_id) {
	jQuery(li_id).append('<div class="slider-overlay"></div>');

	jQuery(li_id + " .slider-overlay").slider({
	    range: "min",
	    value: 0.5,
	    step: 0.01,
	    min: 0,
	    max: 1,
	    slide: function( event, ui ) {
	        jQuery( li_id + " input" ).val( ui.value );
	    }
	});
	jQuery(li_id+ " input").keyup(function () {
	    var value = this.value;
	    jQuery(li_id + " .slider-overlay").slider("value", value);
	});
}