<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*defaults values*/
$business_click_customizer_defaults['business-click-enable-call-to-action'] 					= 0;
$business_click_customizer_defaults['business-click-call-excerpt-length']						= 30;
$business_click_customizer_defaults['business-click-call-to-action-select-from-page']			= '';
$business_click_customizer_defaults['business-click-button-text']								= esc_html__('Learn more','business-click');


/*create section for call to action*/
$business_click_sections['business-click-call-to-action-portfolio'] = array(
	'title'							=> esc_html__('Call To Action','business-click'),
	'description'         			=> sprintf( '%1$s <a  href="https://evisionthemes.com/product/business-click-pro/" target="_blank"> %2$s </a> %3$s', esc_html__( 'Note: We have more options for Call To Action Section,please visit our pro version', 'business-click' ), esc_html__( 'Business Click Pro ', 'business-click' ), esc_html__( 'to get more features', 'business-click' ) ),
	'panel'							=> 'business-click-main-page-options',
	'priority'						=> 70,
);

/*create enable section*/
$business_click_settings_controls['business-click-enable-call-to-action'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-enable-call-to-action'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Show Call To Action','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'checkbox',
		'priority'					=> 10,
		'acitive_callback'			=> ''
	)		

);

/*Excerpt Length*/
$business_click_settings_controls['business-click-call-excerpt-length'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-call-excerpt-length'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Excerpt Length','business-click'),
		'description'				=> esc_html__('You can choose number of words for call to action','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'number',
		'priority'					=> 20,
		'acitive_callback'			=> ''
	)		

);

/*page selection*/
$business_click_settings_controls['business-click-call-to-action-select-from-page'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-call-to-action-select-from-page'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Select page for Call To Action','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'dropdown-pages',
		'priority'					=> 30,
		'acitive_callback'			=> ''
	)		

);

/*Button Text*/
$business_click_settings_controls['business-click-button-text'] = array(
	'setting' => array(
		'default'					=> $business_click_customizer_defaults['business-click-button-text'] 
	),	
	'control' => array(
		'label'						=> esc_html__('Button Text','business-click'),
		'section'					=> 'business-click-call-to-action-portfolio',
		'type'						=> 'text',
		'priority'					=> 40,
		'acitive_callback'			=> ''
	)		

);



