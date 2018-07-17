<?php

if( !function_exists('contact_us_section') ) :
/**
     *contact us 
     *
     * @since Business Click 1.0.0
     *
     * @param  null
     * @return null
     */
	function contact_us_section()
	{
		global $business_click_customizer_all_values; 
		$business_contact_section_title 	= esc_html($business_click_customizer_all_values['business-click-contact-section-title']);
        $business_click_contact_form		= esc_attr($business_click_customizer_all_values['business-click-contact-section-contact-form-short-code']  );

        if(  ! $business_click_customizer_all_values['business-click-contact-section-enable'] ){
        	return null;
        }
		?>
		<section id="evt-contact">
			<div class="container">
				<h2 class="widget-title text-left- evision-animate slideInDown"><?php echo esc_html($business_contact_section_title);?></h2>
				<div class="row">
					<div class="w-100 d-block d-md-none"></div>
					<div class="col evision-animate fadeInUp">
						<?php 
							if(function_exists( 'wpcf7' ) && isset( $business_click_customizer_all_values['business-click-contact-section-contact-form-short-code'] )){
								
                        ?>
							<div class="contact-form">
								<?php echo do_shortcode( str_replace( '\\', '',  $business_click_customizer_all_values['business-click-contact-section-contact-form-short-code'] ) ); ?>
								
								 
							</div>
						<?php
    					}
    					?> 
					</div>
				</div>
			</div>
		</section>

	<?php }
endif;
add_action('business_click_homepage','contact_us_section',100) ?>
