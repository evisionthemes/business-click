<?php

if( !function_exists('business_click_ourteam') ) :
/**
     * our team creation
     *
     * @since Business Click 1.0.0
     *
     * @param string null
     * @return null
     */
	function business_click_ourteam(){
		global $business_click_customizer_all_values;

		if(  ! $business_click_customizer_all_values['business-click-our-team-enable'] ){
			return null;
		} ?>
		<section id="evt-team" class="text-center">	
			<div class="container">
				<h2 class="widget-title evision-animate slideInDown">Our Team</h2>
				
				<div class="evt-team-slider evt-carousel- evision-animate fadeIn">

					<!-- <div class="evt-box-item-wrap">
						<div class="evt-box-item">
						</div>
					</div> -->
					<?php echo do_shortcode($business_click_customizer_all_values['business-click-our-team-short-code']);?>
				  

				</div>
			</div>
		</section>

	<?php }
endif;
add_action('business_click_homepage','business_click_ourteam',60);