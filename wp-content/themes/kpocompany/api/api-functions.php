<?php
require get_template_directory(). '/api/api-helpers.php';

function ListServices()
{
	global $wpdb;
	$posts = [];
	$results = $wpdb->get_results(
		$wpdb->prepare("select * from wp_posts 
		where post_type=%s and post_status=%s 
		order by ID DESC","services","publish")
	);

	foreach($results as $result)
	{
		$data = new StdClass();
		$data->Title = $result->post_title;
		$data->Slug = $result->post_name;
		$data->Excerpt = wp_trim_words($result->post_content,20, '...');
		$data->ImageUrl = get_the_post_thumbnail_url($result->ID);
		array_push($posts, $data);
	}
	return $posts;
}

function GetAboutUsDetails()
{
	global $wpdb;
	$results = $wpdb->get_results(
		$wpdb->prepare("
			select * from wp_posts where 
			post_name=%s and post_status=%s"
			, "about-us","publish")
	);
	foreach($results as $result )
	{
		$data = new StdClass();
		$data->Title = $result->post_title;
		$data->Slug = $result->post_name;
        $data->ImageUrl = get_the_post_thumbnail_url($result->ID);
		$data->Excerpt = wp_trim_words($result->post_content, 40, '...');
	}
	return $data;
}

function ListFaqs()
{
	global $wpdb;
	$posts = [];
	$results = $wpdb->get_results(
		$wpdb->prepare("select * from wp_posts where 
		post_type=%s and post_status=%s order by ID ASC",
		"faq","publish")
	);

	foreach($results as $result)
	{
		$data = new StdClass();
		$data->Title = $result->post_title;
		$data->Slug = $result->post_name;
		$data->Content = $result->post_content;
		array_push($posts, $data);
	}
	return $posts;
}

function GetMenuItems()
{
	$items =  wp_get_nav_menu_items('Main Menu');
	$menus = [];
	$submenus = [];
	foreach($items as $item)
	{
		if($item->menu_item_parent == 0)
		{
			$data = new StdClass();
			$data->Title = $item->title;
			$data->Slug = api_slug_maker($item->url);
			
			if($item->classes[0] == "has-submenu")
			{
				foreach($items as $submenuitem)
				{
					if($submenuitem->menu_item_parent == $item->ID)
					{
						$submenu = new StdClass();
						$submenu->Title = $submenuitem->title;
						$submenu->Slug =  api_slug_maker($submenuitem->url);
						array_push($submenus, $submenu);
					}
				}
				$data->ChildMenu = $submenus;
			} 
			array_push($menus, $data);
		}
	}
	return $menus;
}

function GetPostBySlug($data)
{
	global $wpdb;
	$slug = trim($data['slug']);
    $categoryArray = [];
	$results = $wpdb->get_results(
		$wpdb->prepare("select * from wp_posts 
			where post_name=%s and post_status=%s",
			$slug,"publish")
	);
	foreach($results as $result )
	{
		$data = new StdClass();
		$data->Title = $result->post_title;
		$data->Slug = $result->post_name;
		$data->Content = $result->post_content;
		$data->ModifiedDate = $result->post_modified;
		$data->PostType = $result->post_type;
        $data->ImageUrl = get_the_post_thumbnail_url($result->ID);
        $data->Excerpt = wp_trim_words($result->post_content, 20, '...');
		$data->Categories = get_the_terms( $result->ID, 'category' ); 
		$data->MetaTitle = $result->post_title;
        $data->MetaDescription =  get_post_meta($result->ID, '_yoast_wpseo_metadesc', true);

	}
	return $data;
}

function ListPosts()
{
	global $wpdb;
	$posts = [];
	$results = $wpdb->get_results(
		$wpdb->prepare("select * from wp_posts 
		where post_type=%s and post_status=%s 
		order by ID DESC", "post","publish")
	);

	foreach($results as $result)
	{
		$data = new StdClass();
		$data->Title = $result->post_title;
		$data->Slug = $result->post_name;
		$data->Excerpt = wp_trim_words($result->post_content,20, '...');
		$data->ModifiedDate = $result->post_modified;
		$data->ImageUrl = get_the_post_thumbnail_url($result->ID);
		$data->Categories = get_the_terms( $result->ID,'category');
		array_push($posts, $data);
	}
	return $posts;
}

function GetCareerBySlug($data)
{
	global $wpdb;
	$slug = trim($data['careername']);
	$results = $wpdb->get_results(
		$wpdb->prepare("select * from wp_posts where 
		post_name=%s and post_type=%s and post_status=%s",
		$slug , "career","publish")
	);
	foreach($results as $result)
	{
		$data = new StdClass();
		$data->Title = $result->post_title;
		$data->Slug = $result->post_name;
		$data->Content = $result->post_content;
		$data->ModifiedDate = $result->post_modified;
		$data->Categories = get_the_terms($result->ID, 'job-type');
		$data->MetaTitle = $result->post_title;
        $data->MetaDescription =  get_post_meta($result->ID, '_yoast_wpseo_metadesc', true);
	}
	return $data; 
}

function ListCareers()
{
	global $wpdb;
	$careers = [];
	$results = $wpdb->get_results(
		$wpdb->prepare("select * from wp_posts where post_type=%s 
				and post_status=%s order by ID DESC","career","publish")
	);

	foreach($results as $result)
	{
		$data = new StdClass();
		$data->Title = $result->post_title;
		$data->Slug = $result->post_name;
		$data->Excerpt = wp_trim_words($result->post_content,20, '...');
		$data->ModifiedDate = $result->post_modified;
		$data->Categories = get_the_terms( $result->ID,'job-type');
		array_push($careers, $data);
	}
	return $careers;
}

function GetServicesBySlug($data)
{
	global $wpdb;
	$slug = trim($data['servicename']);
	$results = $wpdb->get_results(
		$wpdb->prepare("select * from wp_posts where post_name=%s 
						and post_type=%s and post_status=%s", 
						$slug , "services","publish")
	);
	foreach($results as $result)
	{
		$data = new StdClass();
		$data->Title = $result->post_title;
		$data->Slug = $result->post_name;
		$data->Content = $result->post_content;
		$data->MetaTitle = $result->post_title;
        $data->MetaDescription =  get_post_meta($result->ID, '_yoast_wpseo_metadesc', true);
	}
	return $data; 
}


function GetCustomizerOptionsDetails()
{
	$data = new StdClass();
	$data->Location = get_theme_mod( 'location' );
	$data->PhoneNumber = get_theme_mod( 'phone_number' );
	$data->Mail = get_theme_mod( 'mail' );
	$data->Map = get_theme_mod('google_map');
	$data->BannerImage = get_theme_mod('banner_image');
	$data->BannerTitle = get_theme_mod('banner_text');
	$data->HomeFaqImage = get_theme_mod('faq_image');
	$data->JobMail = get_theme_mod('job_mail');
	$data->JobNumber = get_theme_mod('job_contact_number');
	$data->WebsiteName = get_option('blogname');
	//logo url
	$custom_logo_id = get_theme_mod( 'custom_logo' );
    $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );
	$data->LogoUrl =  $image[0]; 

	$wpseo_titles = get_option('wpseo_titles');

    $data->HomeSeoTitle = $wpseo_titles['title-home-wpseo'];
    $data->HomeMetaDesc = $wpseo_titles['metadesc-home-wpseo'];


	return $data;
}

function GetAllWidgets($data)
{
    $baseurl = get_site_url();
    $id = $data['widgetname'];
	ob_start();
    dynamic_sidebar($id);
	$sidebar = ob_get_contents();
    ob_end_clean();
    $exists = strpos($sidebar, $baseurl);
    if ($exists !== false) {
      // substring is in the main string
      return str_replace($baseurl,'',$sidebar);
    }
    return $sidebar;
}