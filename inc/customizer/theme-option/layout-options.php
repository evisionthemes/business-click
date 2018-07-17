<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*defaults values*/
$business_click_customizer_defaults['business-click-enable-static-page']            = 1;
$business_click_customizer_defaults['business-click-default-layout']                = 'right-sidebar';
$business_click_customizer_defaults['business-click-single-post-image-align']       = 'full';
$business_click_customizer_defaults['business-click-archive-image-align']           = 'full';

$business_click_sections['business-click-layout-options'] =
    array(
        'priority'       => 200,
        'title'          => esc_html__( 'Layout Options', 'business-click' ),
        'panel'          => 'business-click-theme-options',
    );

    /*home page static page display*/
$business_click_settings_controls['business-click-enable-static-page'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-enable-static-page'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Enable Static Front Page', 'business-click' ),
            'description'           =>  esc_html__( 'If you disable this the static page will be disappera form the home page and other section from customizer will reamin as it is', 'business-click' ),
            'section'               => 'business-click-layout-options',
            'type'                  => 'checkbox',
            'priority'              => 10,
        )
    );


/*layout-options option responsive lodader start*/

$business_click_settings_controls['business-click-default-layout'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-default-layout'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Default Layout', 'business-click' ),
            'description'           =>  esc_html__( 'Please note that this section can be overridden for individual page/posts', 'business-click' ),
            'section'               => 'business-click-layout-options',
            'type'                  => 'select',
            'choices'               => array(
                'right-sidebar' => esc_html__( 'Content - Primary Sidebar', 'business-click' ),
                'left-sidebar'  => esc_html__( 'Primary Sidebar - Content', 'business-click' ),
                'no-sidebar'    => esc_html__( 'No Sidebar', 'business-click' )
            ),
            'priority'              => 10,
            'active_callback'       => ''
        )
    );


$business_click_settings_controls['business-click-single-post-image-align'] =
    array(
        'setting' =>     array(
            'default'              => $business_click_customizer_defaults['business-click-single-post-image-align'],
        ),
        'control' => array(
            'label'                 =>  esc_html__( 'Alignment Of Image In Single Post/Page', 'business-click' ),
            'section'               => 'business-click-layout-options',
            'type'                  => 'select',
            'choices'               => array(
                'full'      => esc_html__( 'Full', 'business-click' ),
                'right'     => esc_html__( 'Right', 'business-click' ),
                'left'      => esc_html__( 'Left', 'business-click' ),
                'no-image'  => esc_html__( 'No image', 'business-click' )
            ),
            'priority'              => 40,
            'description'           =>  esc_html__( 'Please note that this setting can be override from individual post/page', 'business-click' ),
        )
    );


   