<?php
require get_template_directory(). '/api/api-functions.php';
require get_template_directory(). '/api/contact-functions.php';


add_action( 'rest_api_init', function () {
    register_rest_route('wp/v2', 'home-services', array(
        'methods' => array('GET', 'POST'),
		'callback' => 'ListServices',
		'permission_callback' => '__return_true',
    ));

    register_rest_route('wp/v2', 'home-about-us', array(
    	'methods' => array('GET','POST'),
    	'callback' => 'GetAboutUsDetails',
		'permission_callback' => '__return_true',
    ));

    register_rest_route('wp/v2', 'home-faq' , array(
    	'methods' => array('GET','POST'),
    	'callback' => 'ListFaqs',
		'permission_callback' => '__return_true',
	));
	
	register_rest_route('wp/v2','primary-menu-api', array(
		'methods' => array('GET','POST'),
		'callback' => 'GetMenuItems',
		'permission_callback' => '__return_true',
	));

	register_rest_route('wp/v2','customizer-options',array(
		'methods' => array('GET','POST'),
		'callback' => 'GetCustomizerOptionsDetails',
		'permission_callback' => '__return_true',
	));


	register_rest_route('wp/v2', 'post-listing', array(
		'methods' => array('GET','POST'),
		'callback' => 'ListPosts',
		'permission_callback' => '__return_true',
	));

	register_rest_route('wp/v2','career-listing',array(
		'methods' => array('GET','POST'),
		'callback' => 'ListCareers',
		'permission_callback' => '__return_true',
	));

	register_rest_route('wp/v2','contact', array(
		'methods' => array('GET','POST'),
		'callback' => 'ContactFormOperation',
		'permission_callback' => '__return_true',
	));

	register_rest_route('wp/v2','(?P<slug>[a-zA-Z0-9-]+)', array(
		'methods' => array('GET','POST'),
		'callback' => 'GetPostBySlug',
		'permission_callback' => '__return_true',
	));

	register_rest_route('wp/v2','widgets/(?P<widgetname>[a-zA-Z0-9-]+)', array(
		'methods' => array('GET','POST'),
		'callback' => 'GetAllWidgets',
		'permission_callback' => '__return_true',
	));
	
	register_rest_route('wp/v2','career/(?P<careername>[a-zA-Z0-9-]+)', array(
		'methods' => array('GET','POST'),
		'callback' => 'GetCareerBySlug',
		'permission_callback' => '__return_true',
	));

	register_rest_route('wp/v2','services/(?P<servicename>[a-zA-Z0-9-]+)', array(
		'methods' => array('GET','POST'),
		'callback' => 'GetServicesBySlug',
		'permission_callback' => '__return_true',
	));

} );


