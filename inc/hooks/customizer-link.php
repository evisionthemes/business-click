<?php
if ( ! function_exists('customizer_link') ) : 


  /**
    * customizer link 
    *
    * @since business-click 1.0.0
    *
    * @param null
    * @return null
    */


 function customizer_link() {
    global $business_click_customizer_all_values;   

    if ( current_user_can('manage_options') && ( 'posts' != get_option('show_on_front')  &&  0 == $business_click_customizer_all_values['business-click-enbale-slider'] &&   0 == $business_click_customizer_all_values['business-click-enable-about-us'] &&  0 == $business_click_customizer_all_values['business-click-blog-section-enable']  &&   0 == $business_click_customizer_all_values['business-click-enable-call-to-action'] &&  0 == $business_click_customizer_all_values['business-click-contact-section-enable'] &&  0 == $business_click_customizer_all_values['business-click-feature-enable']  &&  0 == $business_click_customizer_all_values['business-click-testimonila-enable'] ) ) :
    
    ?>

    <section class="container business-click-no-opton">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            
            <p>
            <?php
           /* translators: %s: all enable custom link */
            printf(esc_html__('Enable each Section from customizer. %1$s For 
              Feature Slider: Homepage / Front Page > Feature Slider Section > Show Slider. %2$s For other sections: Homepage / Front Page','business-craft'), '<br />','<br />');
            ?>
            </p>
            <a class="btn" href="<?php echo esc_url( admin_url( 'customize.php' ) );?>">Customize Now</a>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    </section>
  <?php
endif;
 }

endif;
add_action('business_click_link','customizer_link',10);