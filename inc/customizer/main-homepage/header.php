<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*default value*/
$business_click_customizer_defaults['business-click-enable-extra-button'] 				= 1;
$business_click_customizer_defaults['business-click-text-extra-button-text'] 			= esc_html__('Buy Now','business-click');
$business_click_customizer_defaults['business-click-link-extra-button']					= '#';

/*create a header section */
$business_click_sections['business-click-header-section'] = array(
	'title'		=> esc_html__('Header Section','business-click'),
	'panel'		=>'business-click-main-page-options',
	'priority'	=> 20
);

/*enable option for extar button*/
$business_click_settings_controls['business-click-enable-extra-button']  =  array(
	'setting'  => array(
		'defaults'		  => $business_click_customizer_defaults['business-click-enable-extra-button']
	),
	'control' => array(
		'label'			  => esc_html__('Show Button(Like Buy Now)','business-click'),
		'description'	  => esc_html__('If you put any link in that extra button thene only its appear in menu section','business-click'),
		'section'		  => 'business-click-header-section',	
		'type'			  => 'checkbox',
		'priority'		  => 10,
		'active_callback' => ''
	)		

);


/*button text*/
$business_click_settings_controls['business-click-text-extra-button-text']  =  array(
	'setting'  => array(
		'defaults'		  => $business_click_customizer_defaults['business-click-text-extra-button-text']
	),
	'control' => array(
		'label'			  => esc_html__('Button Text','business-click'),
		'section'		  => 'business-click-header-section',
		'type'			  => 'text',
		'priority'		  => 20,
		'active_callback' => ''
	)		

);

/*button-link*/
$business_click_settings_controls['business-click-link-extra-button']  =  array(
	'setting'  => array(
		'defaults'		=> $business_click_customizer_defaults['business-click-link-extra-button']
	),
	'control' => array(
		'label'			  => esc_html__('Button Link','business-click'),
		'section'		  => 'business-click-header-section',
		'type'			  => 'url',
		'priority'		  => 30,
		'active_callback' => ''
	)		

);



