<?php
if( !function_exists('short_code1') ) :
	/**
    *  Short code1
    *
    * @since business-click 1.0.0
    *
    * @param null
    * @return null
    *
    */
    function short_code1(){
    	global $business_click_customizer_all_values;
    	$business_click_title_text			 = stripslashes($business_click_customizer_all_values['short-code1-title'] );
        $business_click_short_code_text      = $business_click_customizer_all_values['short-code1-short-code-value'];
        $business_click_short_code_btn_text  = stripslashes($business_click_customizer_all_values['short-code1-btn-text'] );
    	$business_click_short_code_btn_link	 = $business_click_customizer_all_values['short-code1-btn-link'];


    	if(! $business_click_customizer_all_values['short-code1-enable']){
    		return null;
    	} ?>
        <?php if(!empty($business_click_title_text)  || !empty($business_click_short_code_text)) { ?>
        	<section id="evt-short-code1" class="section short-code1">
                <div class="evt-img-overlay">
                    <div class="container clearfix">
                        <?php if($business_click_title_text != '') { ?>
                		<h2 class="widget-title"><?php echo esc_html($business_click_title_text);?></h2>
                        <?php } ?>
            			<?php 
                        echo do_shortcode( str_replace( '\\', '',  $business_click_short_code_text ) );
                        ?>

                        <?php if( isset($business_click_customizer_all_values['short-code1-btn-text']) && isset($business_click_customizer_all_values['short-code1-btn-link']) ): 
                            if($business_click_short_code_btn_text != ''):
                        ?>
                            <div class="text-center"><a href="<?php echo $business_click_short_code_btn_link;?>" class="btn"><?php echo $business_click_short_code_btn_text;?> <i class="fa fa-angle-right"></i></a></div>
                        <?php 
                            endif;
                        endif;
                        ?>
            		</div>
                </div>
        	</section>

        <?php }
    }    
endif;

add_action('business_click_homepage','short_code1',75);