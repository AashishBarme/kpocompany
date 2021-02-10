<?php

function kpocompany_page_title()
{
	if(is_archive())
	{
		return the_archive_title(); 
	}
	return the_title();
}

function kpocompany_contact_details()
{
	$contact_details = new stdClass;
	$contact_details->location = get_theme_mod( 'location' );
	$contact_details->phone_number = get_theme_mod( 'phone_number' );
	$contact_details->mail = get_theme_mod( 'mail' );
	$contact_details->map = get_theme_mod('google_map');
	return $contact_details;
}

function kpocompany_main_page_banner()
{
	$banner = new stdClass;
	$banner->image = get_theme_mod('banner_image');
	$banner->title = get_theme_mod('banner_text');
	return $banner;
}

function kpocompany_career_single_contact_details()
{
	$job = new stdClass;
	$job->mail = get_theme_mod('job_mail');
	$job->number = get_theme_mod('job_contact_number');
	return $job;
}


function kpocompany_custom_job_type($id)
{
	$terms = get_the_terms( $id , 'job-type' );
	if ( $terms != null ){
	foreach( $terms as $term ) {
	$term_link = get_term_link( $term, 'job-type' );
	echo '<span>'.$term->name.'</span>';
	unset($term); } } 
}

function kpocompany_get_custom_logo_url()
{
	$custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    return $image[0];
}