<?php
global $business_click_panels;
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*default values*/
$business_click_customizer_defaults['business-click-feature-enable']					= 0;
$business_click_customizer_defaults['business-click-feature-section-title']				= esc_html__('Awesome Features','business-click');
$business_click_customizer_defaults['business-click-feature-number-post']				= 3;
$business_click_customizer_defaults['business-click-feature-excerpt-length']			= 30;
$business_click_customizer_defaults['business-click-feature-from-page']					= 0;
$business_click_customizer_defaults['business-click-feature-page-icon']					= '';
$business_click_customizer_defaults['business-click-feature-button-text']	    		= '';


/*create section for feature*/
$business_click_sections['business-click-feature-section'] = array(
	'title'		          => esc_html__('Feature Section','business-click'),
    'description'         => sprintf( '%1$s <a  href="https://evisionthemes.com/product/business-click-pro/" target="_blank"> %2$s </a> %3$s', esc_html__( 'Note: We have more options for Feature Section,please visit our pro version', 'business-click' ), esc_html__( 'Business Click Pro ', 'business-click' ), esc_html__( 'to get more features', 'business-click' ) ),
	'panel'		          => 'business-click-main-page-options',	
	'priority'	          => 30,

);

/*enable feature section*/
$business_click_settings_controls['business-click-feature-enable'] =
    array(
        'setting' =>       array(
            'default'               =>   $business_click_customizer_defaults['business-click-feature-enable']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Show Feature Section', 'business-click' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'checkbox',
            'priority'              =>   10,
            'active_callback'       =>   ''
        )
    );
/*Section Title*/
$business_click_settings_controls['business-click-feature-section-title'] =
    array(
        'setting' =>       array(
            'default'              =>   $business_click_customizer_defaults['business-click-feature-section-title']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Section Title', 'business-click' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'text',
            'priority'              =>   15,
            'active_callback'       =>   ''
        )
    );


/*enable feature section*/
$business_click_settings_controls['business-click-feature-number-post'] =
    array(
        'setting' =>       array(
            'default'              =>   $business_click_customizer_defaults['business-click-feature-number-post']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Show Feature Section', 'business-click' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'select',
            'choices'  => array(
            	1					=> esc_html__('1','business-click'),
            	2					=> esc_html__('2','business-click'),
            	3					=> esc_html__('3','business-click'),
            	
            	
            ),				
            'priority'              =>   20,
            'active_callback'       =>   ''
        )
    );

/*Excerpt length */
$business_click_settings_controls['business-click-feature-excerpt-length'] =
    array(
        'setting' =>       array(
            'default'               =>   $business_click_customizer_defaults['business-click-feature-excerpt-length']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Excerpt Length', 'business-click' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'number',
            'priority'              =>   30,
            'active_callback'       =>   ''
        )
    );

/*page Selection */
$business_click_repeated_settings_controls['business-click-feature-from-page'] = array(
	'repeated' 		=> 3,
	'feature-icons-ids' => array(
        'setting' => array(
            'default'               =>   $business_click_customizer_defaults['business-click-feature-page-icon']
        ),
        'control' =>   array(
            /* translators: %s: search page icon */
            'label'                 =>    esc_html__( 'Select Page for feature page icon %s', 'business-click' ),
            /* translators: %s: search page icon describe */
            'description'           =>   sprintf( esc_html__( 'Use font awesome icon: Eg: %1$s . %2$s  See more here %3$s', 'business-click' ), "<b>".'fa-wrench'."</b>",'<a href="'.esc_url('http://fontawesome.io/cheatsheet/').'" target="_blank">','</a>'. '-' .'Note : If you not select any awesome icon it dispaly the feature image ' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'text',
            'priority'              =>   30,
            'active_callback'       =>   ''
        )
	),
    'feature-page-ids' => array(
        'setting' => array(
            'default'              =>   $business_click_customizer_defaults['business-click-feature-from-page']
        ),
        'control' =>   array(
            /* translators: %s: search feature page */
            'label'                 =>    esc_html__( 'Select Page for feature page %s', 'business-click' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'dropdown-pages',
            'priority'              =>   30,
            'active_callback'       =>   ''
        )
    ),      
	
);

/* button text*/
$business_click_settings_controls['business-click-feature-button-text'] =
    array(
        'setting' =>       array(
            'default'               =>   $business_click_customizer_defaults['business-click-feature-button-text']
        ),
        'control' =>   array(
            'label'                 =>    esc_html__( 'Button Text', 'business-click' ),
            'section'               =>   'business-click-feature-section',
            'type'                  =>   'text',
            'priority'              =>   40,
            'active_callback'       =>   ''
        )
    );




