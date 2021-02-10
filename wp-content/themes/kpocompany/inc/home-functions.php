<?php

function kpocompany_home_services_section()
{
	$args = array(
      'post_type' => 'services',
      'post_status' => 'publish'
      );
	$servicesQuery = new WP_Query($args);
	while ( $servicesQuery->have_posts() ) : $servicesQuery->the_post();
		get_template_part('template-parts/home/single-service-section');
	endwhile;
	wp_reset_postdata();
}

function kpocompany_home_aboutus_section()
{
	$args = array(
		'post_type' => 'page',
		'post_status' => 'publish',
		'pagename' => 'about-us'
	);
	$aboutQuery = new WP_Query($args);
	while($aboutQuery->have_posts()): $aboutQuery->the_post();
		get_template_part('template-parts/home/about-us-section');
	endwhile;
	wp_reset_postdata();
}

function kpocompany_home_faq_section()
{
	$args = array(
		'post_type'=>'faq',
		'post_status' => 'publish',
		'order'=>'asc'
	);
	$faqQuery = new WP_Query($args);
	while($faqQuery->have_posts()) : $faqQuery->the_post();
		get_template_part('template-parts/home/faq-section');
	endwhile;
	wp_reset_postdata();

}