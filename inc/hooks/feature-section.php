<?php
if( !function_exists('business_click_feature_array') ) :
	/**
     * Feature array creation
     *
     * @since Business Click 1.0.0
     *
     * @param string null
     * @return array
     */
	function business_click_feature_array(){
		global $business_click_customizer_all_values;
		$feature_number_of_post   		= absint($business_click_customizer_all_values['business-click-feature-number-post']);
		$feasute_single_number_words 	= absint($business_click_customizer_all_values['business-click-feature-excerpt-length']);
		$feature_page_array 			= array();

		$feature_page_array[1]['feature-title']			= '';
		$feature_page_array[1]['feature-content']		= '';
		$feature_page_array[1]['feature-icons-ids']		= '';
		$feature_page_array[1]['feature-image']     	= '';
		$feature_page_array[1]['feature-url']			= '';

		$repeated_page		= array('feature-page-ids');
		$repeated_icon		= array('feature-icons-ids');

		$feature_post_page 	=  evision_customizer_get_repeated_all_value(7,$repeated_page);
		$feature_post_icon	=  evision_customizer_get_repeated_all_value(7,$repeated_icon);

		$feature_page_id	= array();
		if( null != $feature_post_page) {
			foreach ( $feature_post_page as $feature_post_pages ){
				if( 0 != $feature_post_pages['feature-page-ids'] ){
					$feature_page_id[]  =  $feature_post_pages['feature-page-ids'];
				}
			}
			if( !empty($feature_page_id) ){
				$business_click_feature_arg 	= array(
					'post_type'				=> 'page',
					'post__in'				=> $feature_page_id,
					'posts_per_page'		=> $feature_number_of_post,
					'order_by'				=> 'post__in',
					'order'					=> 'ASC'
				); 
			}
		}

		if( !empty($business_click_feature_arg) ){
			$business_click_feature_query		= new WP_Query($business_click_feature_arg);
			if( $business_click_feature_query->have_posts() ):
				$i = 1;
				while( $business_click_feature_query->have_posts() ) :
					$business_click_feature_query->the_post();
					$th_image ='';
	                if(has_post_thumbnail()){
	                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'latebusiness-click-image' );
	                    $th_image = $thumb['0'];
	                }
					$feature_page_array[$i]['feature-title']				= get_the_title();
					if( has_excerpt() )
					{
						$feature_page_array[$i]['feature-content']			= the_excerpt();
					}
					else
					{
						$feature_page_array[$i]['feature-content']			= business_click_words_count($feasute_single_number_words,get_the_content());
					}
					$feature_page_array[$i]['feature-url']					= esc_url(get_the_permalink());
					$feature_page_array[$i]['feature-image']				= $th_image;

					if( isset($feature_post_icon[$i]['feature-icons-ids']) ){
						$feature_page_array[$i]['feature-icons-ids']		= $feature_post_icon[$i]['feature-icons-ids'];
					}
					else
					{
						$feature_page_array[$i]['feature-icons-ids']		= '';
					}
					$i++;
				endwhile;
				wp_reset_postdata();
			endif;
		}
		return $feature_page_array;
	}
endif;

if ( !function_exists('business_click_feature') ) :
	/**
     * Feature array creation
     *
     * @since Business Click 1.0.0
     *
     * @param string null
     * @return array
  **/
  function business_click_feature(){
  	global $business_click_customizer_all_values;

  	if (  ! $business_click_customizer_all_values['business-click-feature-enable'] ){
  		return null;
  	}
  	$feature_select_of_page  = $business_click_customizer_all_values['business-click-feature-from-page'];
  	$feature_post_page_array = business_click_feature_array($feature_select_of_page);
  	if( is_array($feature_post_page_array)  ){
  		$feature_section_title 				= esc_html($business_click_customizer_all_values['business-click-feature-section-title']);
  		$feature_button_text					= esc_html($business_click_customizer_all_values['business-click-feature-button-text']);
  		$feature_number_of_post   		= absint($business_click_customizer_all_values['business-click-feature-number-post']);?>

  			<section id="evt-featured" class="text-center">	
					<div class="container">
						<?php if(!empty($feature_section_title)) { ?>
							<h2 class="widget-title evision-animate slideInDown"><?php echo esc_html($feature_section_title);?></h2>
						<?php } ?>	
						<!-- .evt-carousel -->
						
							<div class="evt-featured-slider evt-carousel evision-animate fadeIn">	
								<?php
								$i = 1;
								foreach( $feature_post_page_array as $feature_post_page_arrays  ){
									if ( $feature_number_of_post < $i ){
										break;
									}
									if ( empty($feature_post_page_arrays['feature-image'] ))
						            {
						              $feature_sec_image = '';
						            }
						            else
						            {
						              $feature_sec_image = $feature_post_page_arrays['feature-image'];
						            }
						            // var_dump($feature_sec_image);die();
								?>
								<?php if(!empty($feature_post_page_arrays['feature-icons-ids']) || !empty($feature_post_page_arrays['feature-title']) || !empty($feature_post_page_arrays['feature-content']) || !empty($feature_button_text) ) {?>			
								<div class="evt-featured-item-wrap evision-animate">
									<div class="evt-featured-item">
										
										<?php if(($feature_post_page_arrays['feature-icons-ids']  != null)  ) { ?>
											<div class="evt-featured-icon">
											  	<i class="fa <?php echo esc_attr($feature_post_page_arrays['feature-icons-ids'])?>"></i>
											</div>
										<?php }
										else{ ?>
											<div class="evt-featured-img">
											  	<img src="<?php echo esc_url($feature_sec_image);?>">
											</div>
										<?php } ?>
											
										<div class="evt-featured-caption">
											<?php if(  !empty($feature_post_page_arrays['feature-title']) ) { ?>
												<h2 class="evt-featured-title mb-3 mt-2"><a href="<?php echo esc_url($feature_post_page_arrays['feature-url']);?>"><?php echo esc_html($feature_post_page_arrays['feature-title']);?></a></h2>
											<?php } ?>
											<?php if(  !empty($feature_post_page_arrays['feature-content']) ) { ?>	
												<p><?php echo wp_kses_post($feature_post_page_arrays['feature-content']);?></p>
											<?php } ?>
											<?php if( !empty($feature_button_text)  ) { ?>
											<a href="<?php echo esc_url($feature_post_page_arrays['feature-url']);?>" class="readmore"><?php echo esc_html($feature_button_text);?></a>
											<?php } ?>
										</div>
									</div>
									
								</div>
								<?php } ?>		
								<?php 
								
								$i++;
								}  ?>	  
							</div>
							
					</div>
				</section>

  	<?php }
  }
endif;

add_action('business_click_homepage','business_click_feature',20);

