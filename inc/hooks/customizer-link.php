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

    if ( current_user_can('manage_options') && ( 'posts' != get_option('show_on_front') &&  0 == $business_click_customizer_all_values['business-click-enbale-top-bar-header'] &&  0 == $business_click_customizer_all_values['business-click-enbale-slider'] &&   0 == $business_click_customizer_all_values['business-click-enable-about-us'] &&  0 == $business_click_customizer_all_values['business-click-blog-section-enable']  &&   0 == $business_click_customizer_all_values['business-click-enable-call-to-action'] &&  0 == $business_click_customizer_all_values['business-click-contact-section-enable'] &&  0 == $business_click_customizer_all_values['business-click-feature-enable']  &&  0 == $business_click_customizer_all_values['business-click-testimonila-enable'] ) ) :
    
    ?>
    <section class="container business-click-no-opton">
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <p><?php echo esc_html__('Enable each Section from customizer.<br>For 
              Feature Slider: Feature Slider Section -> Show Slider.<br>For other sections, Theme Options' ,'business-click' );?> </p>
            <a href="<?php echo esc_url( admin_url('/customize.php') );?>"><?php esc_html_e( 'Goto Customizer','business-click' );?></a>

            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

    </section>
  <?php
endif;
 }

endif;
add_action('business_click_show_message_if_no_option_selected','customizer_link',10);