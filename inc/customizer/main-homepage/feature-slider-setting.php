<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $defaults; // $business_click_customizer_defaults;

/*defaults value*/
// $business_click_customizer_defaults['business-click-enbale-slider']                         = 1;
// $business_click_customizer_defaults['business-click-excerpt-length']                        = 30;
// $business_click_customizer_defaults['business-click-select-post-form']                       = 'form-category';
// $business_click_customizer_defaults['business-click-select-from-cat']                       = -1;
// $business_click_customizer_defaults['business-click-select-from-page']                      = 0;
// $business_click_customizer_defaults['business-click-slider-button-text']                    = esc_html__('Learn more','business-click');
// $business_click_customizer_defaults['business-click-slider-enable-blog']                    = 0;

$defaults = business_click_defauts_value();
// var_dump($defaults);die('hello');
// $defaults = 'business-click-enbale-slider';
// $defaults = 'business-click-excerpt-length';
// $defaults = 'business-click-select-post-form';
// $defaults = 'business-click-select-from-cat';
// $defaults = 'business-click-select-from-page';
// $defaults = 'business-click-slider-button-text';
// $defaults = 'business-click-slider-enable-blog';

// var_dump($defaults) ;die('can u help me');

/*create section for feature slider*/
$business_click_sections['business-click-slider-section']  = array(
    'title'                 => esc_html__('Feature Slider Section','business-click'),
    'panel'                 => 'business-click-main-page-options',
    'priority'              => 20
);

/*slider enable */
$business_click_settings_controls['business-click-enbale-slider'] = array(
    'setting' => array(
        'default'          => $defaults['business-click-enbale-slider']
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
        'default'          => $defaults['business-click-excerpt-length']  
    ),
    'control' => array(
        'label'             => esc_html__('Excerpt Length','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'number',
        'priority'          => 20,
        'acticve_callback'  => ''

    )       
);

/* Select slider post */
$business_click_settings_controls['business-click-select-post-form'] = array(
        'setting' => array(
        'default'                   => $defaults['business-click-select-post-form']  
        ),
        'control' => array(
            /* translators: %s: search slider page */
            'label'                 => esc_html__('Select Slider Post Type ','business-click'),
            'section'               => 'business-click-slider-section',
            'type'                  => 'select',
            'choices' => array(
                'form-category'     => esc_html__('Choose From Category','business-click'),    
                'form-post'         => esc_html__('Choose From page','business-click'),    
            ),            
            'priority'              => 30,
            'acticve_callback'      => ''

        ),     
);


/*post type slider from post */
$business_click_settings_controls['business-click-select-from-cat'] = array(
        'setting' => array(
        'default'                   => $defaults['business-click-select-from-cat']
        ),
        'control' => array(
            'label'                 => esc_html__('Select Category Slider ','business-click'),
            'section'               => 'business-click-slider-section',
            'type'                  => 'category_dropdown',            
            'priority'              => 40,
            'acticve_callback'      => ''

        ),     
);

/*post type slider from page */
$business_click_repeated_settings_controls['business-click-select-from-page'] = array(
    'repeated'      => 3,
    'business-click-page-id' => array(
        'setting' => array(
        'default'                   => $defaults['business-click-select-from-page']
        ),
        'control' => array(
            /* translators: %s: search slider page */
            'label'                 => esc_html__('Slider %s','business-click'),
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
        'default'           => $defaults['business-click-slider-button-text'] 
    ),
    'control' => array(
        'label'             => esc_html__('Button text','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'text',
        'priority'          => 70,
        'acticve_callback'  => ''

    )       
);

/*for blog option */
$business_click_settings_controls['business-click-slider-enable-blog'] = array(
    'setting' => array(
        'default'          =>  $defaults['business-click-slider-enable-blog']  
    ),
    'control' => array(
        'label'             => esc_html__('Disable Slider on Blog Archive','business-click'),
        'section'           => 'business-click-slider-section',
        'type'              => 'checkbox',
        'priority'          => 80,
        'acticve_callback'  => ''

    )       
);


