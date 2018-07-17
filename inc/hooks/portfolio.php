<?php
if( !function_exists('portfolio_section_array') ) :
/**
    * portfolio section
    *
    * @since business click 1.0.0
    *
    * @param null
    * @return  array
    *
    */
    function portfolio_section_array(){
        global $business_click_customizer_all_values;

        $portfolio_number_of_post           = absint($business_click_customizer_all_values['business-click-portfolio-number-category']);
        $portfolio_single_number_words      = absint($business_click_customizer_all_values['business-click-portfolio-excerpt-length']);
        $portfolio_section_title            = $business_click_customizer_all_values['business-click-portfolio-section-title'];
        $portfolio_background_image         = $business_click_customizer_all_values['business-click-portfolio-background-image'];

        $enable_protfolio_post_title        = $business_click_customizer_all_values['business-click-portfolio-enable-category-title'];
        // $enable_protfolio_post_content      = $business_click_customizer_all_values['business-click-portfolio-enable-category-content'];
        $enable_protfolio_post_image        = $business_click_customizer_all_values['business-click-portfolio-enable-category-image'];
        $enable_protfolio_post_name         = $business_click_customizer_all_values['business-click-portfolio-enable-category-name'];
        $theme_background                   = $business_click_customizer_all_values['business-click-portfolio-background-theme'];

        $repeated_post                      = array('portfolio-category-post-ids'); 
        if( ! $business_click_customizer_all_values['business-click-portfolio-enable'] ){
            return null;
        } ?>
        <section id="evt-portfolio" class="text-center img-cover <?php echo esc_html($theme_background);?>-background" style="background-image: url('<?php echo esc_url($portfolio_background_image);?>');"> 
        <div class="evt-img-overlay">
            <div class="container">
                <h2 class="widget-title evision-animate slideInDown"><?php echo esc_html($portfolio_section_title);?></h2>

                <div id="filters" class="button-group evision-animate zoomIn"> 
                    <?php 
                        $business_click_prot_cat            = evision_customizer_get_repeated_all_value(4,$repeated_post);
                        $business_click_port_post_cat_id    = array();
                        foreach( $business_click_prot_cat as $business_click_prot_cats ){
                            if( 0 != $business_click_prot_cats['portfolio-category-post-ids'] ){
                                $business_click_port_post_cat_id[] = $business_click_prot_cats['portfolio-category-post-ids'];
                            }
                        }
                        $business_click_port_arg = array();
                        if( !empty($business_click_port_post_cat_id) ){  
                            $business_click_port_arg = array(
                                'post_type'             => 'post',
                                // 'posts_per_page'        => $portfolio_number_of_post,
                                'posts_per_page'        => -1,
                                'cat'                   => $business_click_port_post_cat_id,
                                'ignore_sticky_posts'   => true

                            );

                        }
                        ?>
                        <button class="button button-outline is-checked" data-filter="*"><?php echo esc_html__( 'All', 'business-click' ) ?></button>
                        <?php for( $i=0; $i < count($business_click_port_post_cat_id); $i++ ){
                            $business_click_cat_name    = get_cat_name($business_click_port_post_cat_id[$i]);
                            $business_click_cat_name_id = get_cat_id($business_click_cat_name);
                            ?>
                            <button class="button button-outline" data-filter=".<?php echo esc_html('cat-'.$business_click_cat_name_id);?>"><?php echo esc_html($business_click_cat_name);?></button>
                        <?php } ?>
                    
                </div>
                <?php  if( !empty($business_click_port_post_cat_id) ){ ?>
                    <div class="evt-grid evision-animate zoomIn" style="">
                        <?php
                        $business_click_portfolio_querry = new WP_Query($business_click_port_arg);
                        if( $business_click_portfolio_querry->have_posts() ) :
                            while( $business_click_portfolio_querry->have_posts() ) :
                                $business_click_portfolio_querry->the_post();
                                $business_clik_por_cat_id   = array();
                                if(has_post_thumbnail()){
                                    $thumb = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'full' );
                                    $th_image = $thumb['0'];
                                }
                                else{
                                    $th_image = '';
                                } 
                                ?>
                                <?php
                                global $post;
                                $portfolio_get_cat = get_the_category( $post->ID);
                                foreach( $portfolio_get_cat as $portfolio_get_cats ){
                                    $business_clik_por_cat_id[]     = $portfolio_get_cats->cat_ID;
                                }
                                $cat_ids = implode(' cat-',$business_clik_por_cat_id);
                                    ?>
                                    <div class="element-item <?php echo esc_attr('cat-'.($cat_ids)); ?>" data-category="transition" style="">
                                        <div class="evt-thumb-holder">
                                            <figure class="image">
                                                <img src="<?php echo esc_url($th_image);?>" alt="">
                                            </figure>

                                            <div class="evt-thumb-hover">
                                                <a href="<?php the_permalink();?>" class="evt-thumb-category d-block"><?php the_title();?></a>
                                                
                                            </div>
                                        </div>
                                    </div>
                            <?php  
                            endwhile;
                            wp_reset_postdata();
                        endif;
                    ?>   
                             
                    </div>
                <?php } ?>    
            </div>
        </div>
    </section>
    <?php }
endif;
add_action('business_click_homepage','portfolio_section_array',40);