<?php

global $business_click_sections;
global $business_click_settings_controls;
global $business_click_repeated_settings_controls;
global $business_click_customizer_defaults;

/*defaults value*/
$business_click_customizer_defaults['business-click-testimonila-enable']				= 0;
$business_click_customizer_defaults['business-click-testimonial-section-title']			= esc_html__('Testimonial','business-click');
$business_click_customizer_defaults['business-click-number-of-testimonial']				= 2;
$business_click_customizer_defaults['business-click-testimonial-excerpt-length']		= 30;
$business_click_customizer_defaults['business-click-testimonial-select-for-page']		= '';
$business_click_customizer_defaults['business-click-testimonial-designation']			= esc_html__('C.E.O','business-click');
$business_click_customizer_defaults['business-click-testimonial-background-image']		= '';


/*create a section */
$business_click_sections['business-click-testimonial-section'] = array(
	'title'							=> esc_html__('Testimonial Section','business-click'),
	'description'         			=> sprintf( '%1$s <a  href="https://evisionthemes.com/product/business-click-pro/" target="_blank"> %2$s </a> %3$s', esc_html__( 'Note: We have more options for Testimonial Section,please visit our pro version', 'business-click' ), esc_html__( 'Business Click Pro ', 'business-click' ), esc_html__( 'to get more features', 'business-click' ) ),
	'panel'							=> 'business-click-main-page-options',
	'priority'						=> 80
);

/*Enable Testimonial*/
$business_click_settings_controls['business-click-testimonila-enable'] = array(
	'settings' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonila-enable']
	),
	'control' => array(
		'label'						=> esc_html__('Show testimonial','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'checkbox',
		'priority'					=> 10,
		'active_callback'			=> ''
	)
);

/*Section Title*/
$business_click_settings_controls['business-click-testimonial-section-title'] = array(
	'settings' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonial-section-title']
	),
	'control' => array(
		'label'						=> esc_html__('Testimonial Section Title','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'text',
		'priority'					=> 20,
		'active_callback'			=> ''
	)
);

/*Section Title*/
$business_click_settings_controls['business-click-number-of-testimonial'] = array(
	'settings' => array(
		'default'					=> $business_click_customizer_defaults['business-click-number-of-testimonial']
	),
	'control' => array(
		'label'						=> esc_html__('Select Number of post for Testimonial','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'select',
		'choices' => array(
			1						=> esc_html__('1','business-click'),
			2						=> esc_html__('2','business-click'),
		),	
		'priority'					=> 30,
		'active_callback'			=> ''
	)
);

/*Excerpt Length*/
$business_click_settings_controls['business-click-testimonial-excerpt-length'] = array(
	'settings' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonial-excerpt-length']
	),
	'control' => array(
		'label'						=> esc_html__('Excerpt Length','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'number',
		'priority'					=> 40,
		'active_callback'			=> ''
	)
);


/*Select number of page*/
$business_click_repeated_settings_controls['business-click-testimonial-designation'] = array(
	'repeated'					   => 2,
	'testimonial-designation-ids' => array(
		'settings' => array(
			'default'					=> $business_click_customizer_defaults['business-click-testimonial-designation']
		),
		'control' => array(
			/* translators: %s: search testimonila designation */
			'label'						=> esc_html__('Text Field for Designation %s','business-click'),
			'section'					=> 'business-click-testimonial-section',
			'type'						=> 'text',
			'priority'					=> 50,
			'active_callback'			=> ''
		)
	),
	'testimonial-page-ids' => array(
		'settings' => array(
			'default'					=> $business_click_customizer_defaults['business-click-testimonial-select-for-page']
		),
		'control' => array(
			/* translators: %s: search testimonial page */
			'label'						=> esc_html__('Select page for testimonial %s','business-click'),
			'section'					=> 'business-click-testimonial-section',
			'type'						=> 'dropdown-pages',
			'priority'					=> 50,
			'active_callback'			=> ''
		)
	),	
);

/*Background image upload*/
$business_click_settings_controls['business-click-testimonial-background-image'] = array(
	'settings' => array(
		'default'					=> $business_click_customizer_defaults['business-click-testimonial-background-image']
	),
	'control' => array(
		'label'						=> esc_html__('Upload Background Image','business-click'),
		'section'					=> 'business-click-testimonial-section',
		'type'						=> 'image',
		'priority'					=> 60,
		'active_callback'			=> ''
	)
);

