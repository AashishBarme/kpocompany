<?php
/**
 * Twenty Nineteen: Customizer
/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function kpocompany_customize_register( $wp_customize ) {
	/**
	 * Adding Custom Section
	 */
	$wp_customize->add_section( 'contact_us_section' , array(
    'title'      => __( 'Contact Us Detail', 'kpocompany' ),
    'priority'   => 30,
	) );

	/*
	* Custom Setting for Contact us Section
	*/
	$wp_customize->add_setting(
		'phone_number',
		array(
			'default'           => '+977',
		)
	);

	$wp_customize->add_control(
		'phone_number_details',
		array(
			'type'     => 'text',
			'label'    => __( 'Phone Number', 'kpocompany' ),
			'section' => 'contact_us_section',
			'settings' => 'phone_number'
		)
	);

	$wp_customize->add_setting(
		'location',
		array(
			'default'           => 'Kathmandu, Nepal',
		)
	);

	$wp_customize->add_control(
		'location_details',
		array(
			'type'     => 'text',
			'label'    => __( 'Location', 'kpocompany' ),
			'section' => 'contact_us_section',
			'settings' => 'location'
		)
	);

	$wp_customize->add_setting(
		'mail',
		array(
			'default'           => 'mail@company.com',
		)
	);

	$wp_customize->add_control(
		'mail_details',
		array(
			'type'     => 'text',
			'label'    => __( 'Email Address', 'kpocompany' ),
			'section' => 'contact_us_section',
			'settings' => 'mail'
		)
	);

	$wp_customize->add_setting(
		'google_map'
	);

	$wp_customize->add_control(
		'google_map_details',
		array(
			'type' => 'textarea',
			'label' => __('Google Map Iframe', 'kpocompany'),
			'section' => 'contact_us_section',
			'settings' => 'google_map'
		)
	);

	/*
	* Job Detail Contact
	*/
	$wp_customize->add_section('job_detail_section', array(
		'title' => __('Job Description Detail','kpocompany'),
		'priority' => 30 ,
	));

	$wp_customize->add_setting(
		'job_contact_number',
		array(
			'default'           => '+977',
		)
	);

	$wp_customize->add_control(
		'job_contact_details',
		array(
			'type'     => 'text',
			'label'    => __( 'Contact Number', 'kpocompany' ),
			'section' => 'job_detail_section',
			'settings' => 'job_contact_number'
		)
	);

	$wp_customize->add_setting(
		'job_mail',
		array(
			'default'           => 'mail@company.com',
		)
	);

	$wp_customize->add_control(
		'job_mail_details',
		array(
			'type'     => 'text',
			'label'    => __( 'Email Address', 'kpocompany' ),
			'section' => 'job_detail_section',
			'settings' => 'job_mail'
		)
	);



	/*
	* Banner Section
	*/
	$wp_customize->add_section('home_banner_section', array(
	 'title'  => __('Home Page Banner','kpocompany'),
	 'priority' => 30,
	));

	$wp_customize->add_setting(
		'banner_image',
		array(
			'height' => 325,
		));

	$wp_customize->add_setting(
		'banner_text'
	);

	$wp_customize->add_setting(
		'faq_image',
		array(
			'height' => 325,
		));


	$wp_customize->add_control(
		'home_banner_text', array(
			'type' => 'text',
			'label' => __('Banner Title', 'kpocompany'),
			'section' => 'home_banner_section',
			'settings' => 'banner_text',
		));

	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'home_banner_image', array(
        'label'             => __('Banner Image', 'kpocompany'),
        'section'           => 'home_banner_section',
        'settings'          => 'banner_image',    
	)));
	
	$wp_customize->add_control(new WP_Customize_Image_Control( $wp_customize, 'home_faq_image', array(
        'label'             => __('FAQ Image', 'kpocompany'),
        'section'           => 'home_banner_section',
        'settings'          => 'faq_image',    
    )));

}
add_action( 'customize_register', 'kpocompany_customize_register' );
