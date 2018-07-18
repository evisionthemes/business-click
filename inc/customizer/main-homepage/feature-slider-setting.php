<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*defaults value*/
$business_click_customizer_defaults['business-click-enbale-slider']                         = 0;
$business_click_customizer_defaults['business-click-number-of-slider']                      = 2;
$business_click_customizer_defaults['business-click-excerpt-length']                        = 30;
$business_click_customizer_defaults['business-click-select-from-page']                      = '';
$business_click_customizer_defaults['business-click-slider-button-text']                    = esc_html__('Learn more','business-click');


/*create section for feature slider*/
$business_click_sections['business-click-slider-section']  = array(
    'title'                 => esc_html__('Feature Slider Section','business-click'),
    'description'           => sprintf( '%1$s <a  href="https://evisionthemes.com/product/business-click-pro/" target="_blank"> %2$s </a> %3$s', esc_html__( 'Note: We have more options for slider,please visit our pro version', 'business-click' ), esc_html__( 'Business Click Pro ', 'business-click' ), esc_html__( 'to get more features', 'business-click' ) ),
    'panel'                 => 'business-click-main-page-options',
    'priority'              => 20
);

/*slider enable */
$business_click_settings_controls['business-click-enbale-slider'] = array(
    'setting' => array(
        'defaults'          => $business_click_customizer_defaults['business-click-enbale-slider'] 
    ),
    'control' => array(
        'label'             => esc_html__('Show Slider','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'checkbox',
        'priority'          => 10,
        'acticve_callback'  => ''

    )       
);

/*except length */
$business_click_settings_controls['business-click-excerpt-length'] = array(
    'setting' => array(
        'defaults'          => $business_click_customizer_defaults['business-click-excerpt-length'] 
    ),
    'control' => array(
        'label'             => esc_html__('Excerpt Length','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'number',
        'priority'          => 20,
        'acticve_callback'  => ''

    )       
);


/*total number slider */
$business_click_settings_controls['business-click-number-of-slider'] = array(
    'setting' => array(
        'defaults'          => $business_click_customizer_defaults['business-click-number-of-slider'] 
    ),
    'control' => array(
        'label'             => esc_html__('Select Number of post for slider','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'select',
        'choices' => array(
            1               => esc_html__('1','business-click'),
            2               => esc_html__('2','business-click'),
            3               => esc_html__('3','business-click'),

        ),
        'priority'          => 30,
        'acticve_callback'  => ''

    )       
);



/*post type slider from page */
$business_click_repeated_settings_controls['business-click-select-from-page'] = array(
    'repeated'      => 3,
    'business-click-page-id' => array(
        'setting' => array(
        'defaults'              => $business_click_customizer_defaults['business-click-select-from-page'] 
        ),
        'control' => array(
            /* translators: %s: search slider page */
            'label'                 => esc_html__('Post type for slider from page %s','business-click'),
            'section'               => 'business-click-slider-section',
            'type'                  => 'dropdown-pages',            
            'priority'              => 60,
            'acticve_callback'      => ''

        ),  
    )   
);

/*Button text */
$business_click_settings_controls['business-click-slider-button-text'] = array(
    'setting' => array(
        'defaults'          => $business_click_customizer_defaults['business-click-slider-button-text'] 
    ),
    'control' => array(
        'label'             => esc_html__('Slider button text','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'text',
        'priority'          => 70,
        'acticve_callback'  => ''

    )       
);




