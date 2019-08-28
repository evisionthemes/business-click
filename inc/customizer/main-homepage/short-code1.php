<?php
global $business_click_sections;
global $business_click_settings_controls;
global $business_click_customizer_defaults;

/*defaults value*/
$business_click_customizer_defaults['short-code1-enable']				= 1;
$business_click_customizer_defaults['short-code1-title']				= '';
$business_click_customizer_defaults['short-code1-short-code-value']		= '';
$business_click_customizer_defaults['short-code1-btn-text']				= esc_html__('View All','business-click');
$business_click_customizer_defaults['short-code1-btn-link']				= '#';



/*create a section for short code*/
$priotry_short_code1_section_customizer = get_theme_mod('business_click_options');

$business_click_sections['short-code1-section'] = array(
	'title'			=> esc_html__('Short Code First','business-click'),
	'panel'			=> 'business-click-main-page-options',
	'priority'		=> 85,
); 

/*enbale disable short code*/
$business_click_settings_controls['short-code1-enable'] = array(
	'setting' => array(
		'default'		=> $business_click_customizer_defaults['short-code1-enable']
	),
	'control' => array(
		'label'				=> esc_html__('Show ShortCode First','business-click'),
		'section'			=> 'short-code1-section',
		'type'				=> 'checkbox',
		'priority'			=> 10,
		'active_callback'	=> ''
	)
);

/*Title*/
$business_click_settings_controls['short-code1-title'] = array(
	'setting' => array(
		'default'		=> $business_click_customizer_defaults['short-code1-title']
	),
	'control' => array(
		'label'				=> esc_html__('Title Text','business-click'),
		'section'			=> 'short-code1-section',
		'type'				=> 'text',
		'priority'			=> 20,
		'active_callback'	=> ''
	)
);

/*Short code value*/
$business_click_settings_controls['short-code1-short-code-value'] = array(
	'setting' => array(
		'default'		=> $business_click_customizer_defaults['short-code1-short-code-value']
	),
	'control' => array(
		'label'				=> esc_html__('Short Code Value','business-click'),
		'section'			=> 'short-code1-section',
		'type'				=> 'text',
		'priority'			=> 30,
		'active_callback'	=> ''
	)
);


/*Button Text*/
$business_click_settings_controls['short-code1-btn-text'] = array(
	'setting' => array(
		'default'		=> $business_click_customizer_defaults['short-code1-btn-text']
	),
	'control' => array(
		'label'				=> esc_html__('Button Text','business-click'),
		'section'			=> 'short-code1-section',
		'type'				=> 'text',
		'priority'			=> 40,
		'active_callback'	=> ''
	)
);

/*Button Link*/
$business_click_settings_controls['short-code1-btn-link'] = array(
	'setting' => array(
		'default'		=> $business_click_customizer_defaults['short-code1-btn-link']
	),
	'control' => array(
		'label'				=> esc_html__('Button Link','business-click'),
		'section'			=> 'short-code1-section',
		'type'				=> 'text',
		'priority'			=> 50,
		'active_callback'	=> ''
	)
);

