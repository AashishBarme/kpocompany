<?php


/**
 * KpoCompany only works in WordPress 4.7 or later.
 */
if ( version_compare( $GLOBALS['wp_version'], '4.7', '<' ) ) {
	require get_template_directory() . '/inc/back-compat.php';
	return;
}

if(!function_exists('kpocompany_setup')):

	function kpocompany_setup() {
	// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );
		set_post_thumbnail_size( 1568, 9999 );

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'primary' => __( 'Primary', 'kpocompany' ),
				'footer' => __( 'Footer Menu', 'kpocompany' ),
				'social' => __( 'Social Links Menu', 'kpocompany' ),
			)
		);

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'script',
				'style',
			)
		);

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'flex-width'  => false,
				'flex-height' => false,
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' );

	}
endif;
add_action( 'after_setup_theme', 'kpocompany_setup' );	



//consist all the extra customized function
require get_template_directory(). '/inc/extras.php';
require get_template_directory(). '/inc/template-functions.php';
require get_template_directory(). '/inc/customizer.php';
require get_template_directory(). '/inc/home-functions.php';

/**
* wp query for wordpress rest api
*/
require get_template_directory(). '/api/api-register.php';


/**
* Add all the style and script of theme
*/

function kpocompany_scripts() {
	/*   
     *  Theme stylesheet.
     */
  	wp_enqueue_style('bootstrap', get_template_directory_uri().'/css/extras/bootstrap.min.css',array(), time());
	wp_enqueue_style('owl-carousel', get_template_directory_uri().'/css/extras/owl.carousel.min.css',array(), time());  	
	wp_enqueue_style('magnific-popup', get_template_directory_uri().'/css/extras/magnific-popup.css',array(), time());

	wp_enqueue_style('flaticon', get_template_directory_uri().'/css/extras/flaticon.css',array(), time());
  	wp_enqueue_style('animate', get_template_directory_uri().'/css/extras/animate.min.css',array(), time());
  	wp_enqueue_style('slick', get_template_directory_uri().'/css/extras/slick.css',array(), time());
  	wp_enqueue_style('slicknav', get_template_directory_uri().'/css/extras/slicknav.css',array(), time());
  	wp_enqueue_style( 'kpoa-style', get_template_directory_uri() . '/css/style.css',array(),time() );


  	/*   
     *  Theme Script.
     */
    wp_enqueue_script('modernizr',get_template_directory_uri(). '/js/vendor/modernizr-3.5.0.min.js',array(),time());
    wp_enqueue_script('jquery', get_template_directory_uri(). '/js/vendor/jquery-1.12.4.min.js', array(),time());
    wp_enqueue_script('popper',get_template_directory_uri().'/js/popper.min.js',array(),time());
  	wp_enqueue_script( 'bootstrap',  get_template_directory_uri().'/js/bootstrap.min.js', array(), time() );
  	wp_enqueue_script('owlcarousel', get_template_directory_uri().'/js/owl.carousel.min.js', array(), time());
  	wp_enqueue_script('slicknav', get_template_directory_uri().'/js/jquery.slicknav.min.js', array(), time());
  	wp_enqueue_script('magnific-popup', get_template_directory_uri().'/js/jquery.magnific-popup.min.js', array(), time());
  	wp_enqueue_script('isotope', get_template_directory_uri().'/js/isotope.pkgd.min.js', array(), time());
  	wp_enqueue_script('custom-plugin', get_template_directory_uri().'/js/plugins.js', array(), time());
  	wp_enqueue_script('wow', get_template_directory_uri().'/js/wow.min.js', array(), time());
  	// Load the Main Js
  	wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js');


}
add_action( 'wp_enqueue_scripts', 'kpocompany_scripts' );


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function kpocompany_widgets_init() {

	register_sidebar(
		array(
			'name'          => __( 'Footer Widget 1', 'kpocompany' ),
			'id'            => 'footer-widget-1',
			'description'   => __( 'Add widgets here to appear in your footer.', 'kpocompany' ),
			'before_widget' => '<section id="%1$s" class="footer_widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="footer_title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer Widget 2', 'kpocompany' ),
			'id'            => 'footer-widget-2',
			'description'   => __( 'Add widgets here to appear in your footer.', 'kpocompany' ),
			'before_widget' => '<section id="%1$s" class="footer_widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="footer_title">',
			'after_title'   => '</h3>',
		)
	);

	register_sidebar(
		array(
			'name'          => __( 'Footer Widget 3', 'kpocompany' ),
			'id'            => 'footer-widget-3',
			'description'   => __( 'Add widgets here to appear in your footer.', 'kpocompany' ),
			'before_widget' => '<section id="%1$s" class="footer_widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h3 class="footer_title">',
			'after_title'   => '</h3>',
		)
	);



	register_sidebar(
		array(
			'name'          => __( 'Page Sidebar', 'kpocompany' ),
			'id'            => 'page-sidebar',
			'description'   => __( 'Add widgets here to appear in your sidebar.', 'kpocompany' ),
			'before_widget' => '<section id="%1$s" class="single_sidebar_widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);

}
add_action( 'widgets_init', 'kpocompany_widgets_init' );


register_post_type(
	'services', array(
		'labels' => array(
			'name' => 'Services',
			'singular_name' => 'Services',
			'add_new' => 'Add new Services',
			'add_new_item' => 'Add new Services',
			'edit_item' => 'Edit Services',
			'Search_items' => 'Search Services',
			'not_found' => 'No Services found',
			'not_found_in_trash' => 'No Services found in trash'
			),
		'public' => true,
		'show_ui' => true,
		'show_in_rest' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'query_var' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => false,
		'has_archive' => false,
		'menu_icon' => 'dashicons-networking',
		'supports' => array(
			'title',
			'editor',
			'thumbnail',
			//'excerpt'
			)
		)
	);


register_post_type(
	'faq', array(
		'labels' => array(
			'name' => 'FAQ',
			'singular_name' => 'FAQ',
			'add_new' => 'Add new FAQ',
			'add_new_item' => 'Add new FAQ',
			'edit_item' => 'Edit FAQ',
			'Search_items' => 'Search FAQ',
			'not_found' => 'No FAQ found',
			'not_found_in_trash' => 'No FAQ found in trash'
			),
		'public' => true,
		'show_ui' => true,
		'show_in_rest' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'query_var' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => false,
		'has_archive' => false,
		'menu_icon' => 'dashicons-lightbulb',
		'supports' => array(
			'title',
			'editor',
			)
		)
	);

register_post_type(
	'career', array(
		'labels' => array(
			'name' => 'Careers',
			'singular_name' => 'Career',
			'add_new' => 'Add new Career',
			'add_new_item' => 'Add new Career',
			'edit_item' => 'Edit Career',
			'Search_items' => 'Search Career',
			'not_found' => 'No Career found',
			'not_found_in_trash' => 'No Career found in trash'
			),
		'public' => true,
		'show_ui' => true,
		'show_in_rest' => true,
		'capability_type' => 'post',
		'hierarchical' => false,
		'query_var' => true,
		'show_in_nav_menus' => true,
		'exclude_from_search' => false,
		'has_archive' => false,
		'menu_icon' => 'dashicons-admin-site-alt3',
		'supports' => array(
			'title',
			'editor',
			)
		)
);

add_action( 'init', 'create_career_texonomies', 0 );

function create_career_texonomies()
{
  // Add new taxonomy, make it hierarchical (like categories)
  $labels = array(
    'name' => _x( 'Job Type', 'taxonomy general name' ),
    'singular_name' => _x( 'Job Type', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Job Type' ),
    'popular_items' => __( 'Popular Job Type' ),
    'all_items' => __( 'All Job Type' ),
    'parent_item' => __( 'Parent Job Type' ),
    'parent_item_colon' => __( 'Parent Job Type:' ),
    'edit_item' => __( 'Edit Job Type' ),
    'update_item' => __( 'Update Job Type' ),
    'add_new_item' => __( 'Add New Job Type' ),
    'new_item_name' => __( 'New Job Type Name' ),
  );

  register_taxonomy('job-type', array('career'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'job-type' ),
  ));
}


