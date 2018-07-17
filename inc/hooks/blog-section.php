<?php

if( !function_exists('business_click_blog') ) :
	/**
     * Blog Section
     *
     * @since business-click 1.0.0
     *
     * @param null
     * @return null
     *
     */
	function business_click_blog(){
		global $business_click_customizer_all_values;
		global $post;
		$author_id = $post->post_author;
		$business_click_section_title		= esc_html( $business_click_customizer_all_values['business-click-blog-section-title-text'] );
		$business_click_number_post			= absint( $business_click_customizer_all_values['business-click-blog-select-number-post'] );
		$business_click_number_single_words	= absint( $business_click_customizer_all_values['business-click-blog-excerpt-length'] );
		$business_click_blog_category		= $business_click_customizer_all_values['business-click-blog-select-category'];
		$business_click_button_text			= esc_html( $business_click_customizer_all_values['business-click-blog-button-text'] );
		$business_click_enable_title		= esc_html( $business_click_customizer_all_values['business-click-blog-enable-title'] );
		$business_click_enable_content		= esc_html( $business_click_customizer_all_values['business-click-blog-enable-content'] );
		$business_click_enable_image		= esc_html( $business_click_customizer_all_values['business-click-blog-enable-image'] );
		$business_click_enable_button		= esc_html( $business_click_customizer_all_values['business-click-blog-enable-button'] );

		if(  ! $business_click_customizer_all_values['business-click-blog-section-enable']  ){
			return null;
		} ?>
		<section id="evt-blog" class="text-center">	
			<div class="container">
				<?php if( !empty($business_click_section_title) ) { ?>
					<h2 class="widget-title evision-animate slideInDown"><?php echo esc_html($business_click_section_title);?></h2>
				<?php } ?>	
				
				<div class="evt-blog-slider evt-carousel evision-animate fadeIn">
					<?php 
						$business_click_blog_arg = array(
							'post_type'				=> 'post',
							'posts_per_page'		=> $business_click_number_post,
							'cat'					=> $business_click_blog_category,
							'ignore_sticky_posts'	=> 1
						);
						$business_click_blog_query  = new WP_Query($business_click_blog_arg);
						if( $business_click_blog_query->have_posts() ) :
							while( $business_click_blog_query->have_posts() ) :
								$business_click_blog_query->the_post();
								if(has_post_thumbnail()){
                                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID(),'latebusiness-click-image' ), 'medium' );
                                    $th_image = $thumb['0'];
                                    }
                                    else{
                                        $th_image = '';
                                    }
									?>
									<div class="evt-box-item-wrap">
										<div class="evt-box-item">
											<?php if( 1 == $business_click_enable_image ) { ?>
												<div class="evt-box-image image">
													<img src="<?php echo esc_url($th_image);?>">
												</div>
											<?php } ?>	

											<div class="evt-box-caption text-left">
												<?php if( 1 == $business_click_enable_title ) { ?>
													<h2 class="evt-box-title mt-3"><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
												<?php } ?>

												<div class="entry-meta">
                                                        <span class="posted-on ">
                                                            <?php
                                                            $archive_year  = get_the_time('Y'); 
                                                            $archive_month = get_the_time('m'); 
                                                            $archive_day   = get_the_time('d'); 
                                                            ?>
                                                            <a href="<?php echo esc_url(get_day_link($archive_year, $archive_month, $archive_day) ); ?>"><?php echo esc_html(get_the_date('M j , Y') );?></a>
                                                        </span>
                                                        <span class="byline">
                                                        	 <a href="<?php echo esc_url(get_author_posts_url(get_the_author_meta('ID')) ); ?>"><?php echo esc_html(get_the_author() );?></a>
                                                        	
                                                        </span>                                                       
                                                </div>

												<?php if(1 == $business_click_enable_content ) { ?>
													<p>
														<?php 
															if ( has_excerpt() ) {
					                                            the_excerpt();
					                                        } else {
					                                            $content_blog = get_the_content();
					                                            echo wp_kses_post(business_click_words_count( $business_click_number_single_words, $content_blog ));
					                                        }
														?>
													</p>

												<?php } ?>	
												<?php if(!empty($business_click_button_text)) { ?>
													<a href="<?php the_permalink(); ?>" class="readmore"><?php echo esc_html($business_click_button_text);?></a>
												<?php } ?>	
											</div>
										</div>
									</div>
								<?php
							endwhile;
							wp_reset_postdata();
						endif;
					?>
				</div>
			</div>
		</section>

	<?php 	
	}
endif;
add_action('business_click_homepage','business_click_blog',80);