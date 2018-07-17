<?php

if( !function_exists('about_us_sections') ) :
	/**
    * about us
    *
    * @since business-click 1.0.0
    *
    * @param null
    * @return null
    *
    */
    function about_us_sections()
    {
    	global $business_click_customizer_all_values;
    	$about_us_single_number_words 		= esc_attr($business_click_customizer_all_values['business-clcik-excerpt-length']);
    	$about_us_button_text				= esc_html( $business_click_customizer_all_values['business-click-about-us-button-text'] );
    	$about_us_page						= $business_click_customizer_all_values['business-click-about-us-select-page'];

    	if(  ! $business_click_customizer_all_values['business-click-enable-about-us'] )
    	{
    		return null;
    	} ?>

    	<?php
    	if ( !empty($about_us_page) ){
    		$about_us_arg	= array(
	    		'post_type' 		=> 'page',
	            'p' 				=>$about_us_page,
	            'posts_per_page' 	=> 1
    		);
    		$about_us_query	= new WP_Query($about_us_arg);
    		if( $about_us_query->have_posts() ) :
    			while ( $about_us_query->have_posts() ) :
    				$about_us_query->the_post();
    				if(has_post_thumbnail())
		            {
		                $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
		            }
		            else
		            {
		                $thumb[0] = '';
		            }?>
		            <section id="evt-why-us" class="">	
						<div class="container">
							<h2 class="widget-title evision-animate slideInDown"><?php the_title();?></h2>
							<div class="row">
								<div class="col align-self-center evision-animate fadeInLeft">
									<p><?php echo wp_kses_post(business_click_words_count( $about_us_single_number_words ,get_the_content()));?></p>
											
									<?php if( (!empty($about_us_button_text)  ) ){ ?>
										<a href="<?php echo esc_url(the_permalink());?>" class="btn"><?php echo esc_html($about_us_button_text);?><i class="fas fa-angle-right"></i></a>
									<?php } ?>	
								</div>
								<div class="w-100 d-block d-md-none"></div>
								<div class="col align-self-center evision-animate fadeInRight">
									<figure>
										<img src="<?php echo esc_url($thumb[0]); ?>">
									</figure>	
								</div>
							</div>
						</div>
					</section>
		            <?php
    			endwhile;
    		endif;
    	}

    }
endif;
add_action( 'business_click_homepage', 'about_us_sections', 30 );