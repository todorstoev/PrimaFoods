<?php
require_once ('wp_bootstrap_navwalker.php');

add_filter ( 'wp_title', 'filter_wp_title' );
function filter_wp_title($title) {
	global $page, $paged;
	
	if (is_feed ())
		return $title;
	
	$site_description = get_bloginfo ( 'description' );
	
	$filtered_title = $title . get_bloginfo ( 'name' );
	$filtered_title .= (! empty ( $site_description ) && (is_home () || is_front_page ())) ? ' | ' . $site_description : '';
	$filtered_title .= (2 <= $paged || 2 <= $page) ? ' | ' . sprintf ( __ ( 'Page %s' ), max ( $paged, $page ) ) : '';
	
	return $filtered_title;
}

// Including JS scripts
function include_scripts() {
	wp_enqueue_script ( 'jquery' );
	wp_register_script ( 'bootstrap', get_template_directory_uri () . '/js/bootstrap.min.js', array (
			'jquery' 
	), '1', true );
	wp_register_script ( 'custom', get_template_directory_uri () . '/js/custom.js', array (
			'jquery' 
	), '1.1', true );
	
	wp_enqueue_script ( 'bootstrap' );
	wp_enqueue_script ( 'custom' );
}

add_action ( 'wp_enqueue_scripts', 'include_scripts' );

// Inlude styles
function include_styles() {
	wp_enqueue_style ( 'bootstrap', get_template_directory_uri () . '/css/bootstrap.min.css', array (), '1', 'all' );
	wp_enqueue_style ( 'bootstrap-theme', get_template_directory_uri () . '/css/bootstrap-theme.min.css', array (), '2', 'all' );
	wp_enqueue_style ( 'custom', get_template_directory_uri () . '/css/custom.css', array (), '3', 'all' );
	wp_enqueue_style ( 'Prima ', get_stylesheet_uri () );
	
	wp_enqueue_style ( 'font-awesome', get_template_directory_uri () . '/css/font-awesome.min.css', array (), false );
	wp_enqueue_style ( 'fonts-google', 'http://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic', array (), false );
}

add_action ( 'wp_enqueue_scripts', 'include_styles' );
function menus_setup() {
	register_nav_menus ( array (
			'footer_nav' => __ ( 'Footer Menu' ),
			'top_menu' => __ ( 'Top Menu' ) 
	) );
}
add_action ( 'after_setup_theme', 'menus_setup' );

/**
 * Register our sidebars and widgetized areas.
 */
function arphabet_widgets_init() {
	register_sidebar ( array (
			'name' => 'Home 1 sidebar',
			'id' => 'home_1',
			'before_widget' => '<div class="col-md-12">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="text-blue text-center">',
			'after_title' => '</h2>' 
	) );
	
	register_sidebar ( array (
			'name' => 'Home 2 sidebar',
			'id' => 'home_2',
			'before_widget' => '<div class="col-md-12">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="text-blue text-center">',
			'after_title' => '</h2>' 
	) );
	
	register_sidebar ( array (
			'name' => 'Products sidebar',
			'id' => 'products',
			'before_widget' => '<div class="col-md-12">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="text-center">',
			'after_title' => '</h2>' 
	) );
	
	register_sidebar ( array (
			'name' => 'Parents sidebar',
			'id' => 'parents',
			'before_widget' => '<div class="col-md-12">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="text-center">',
			'after_title' => '</h2>' 
	) );
	
	register_sidebar ( array (
			'name' => 'Footer sidebar',
			'id' => 'footer',
			'before_widget' => '<div class="col-md-12">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="text-center">',
			'after_title' => '</h2>' 
	) );
	
	register_sidebar ( array (
			'name' => 'Contacts Right sidebar',
			'id' => 'contacts-right',
			'before_widget' => '<div class="col-md-12 contact-us-cont">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="text-left">',
			'after_title' => '</h2>' 
	) );
	register_sidebar ( array (
			'name' => 'Contacts Left sidebar',
			'id' => 'contacts-left',
			'before_widget' => '<div class="col-md-12 contact-us-cont">',
			'after_widget' => '</div>',
			'before_title' => '<h2 class="text-right">',
			'after_title' => '</h2>'
	) );
	
}
add_action ( 'widgets_init', 'arphabet_widgets_init' );

if (! function_exists ( 'prima_setup' )) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 *
	 * Create your own twentysixteen_setup() function to override in a child theme.
	 *
	 * @since Twenty Sixteen 1.0
	 */
	function prima_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Twenty Sixteen, use a find and replace
		 * to change 'twentysixteen' to the name of your theme in all the template files
		 */
		load_theme_textdomain ( 'prima', get_template_directory () . '/languages' );
		
		// Add default posts and comments RSS feed links to head.
		add_theme_support ( 'automatic-feed-links' );
		
		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support ( 'title-tag' );
		
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link http://codex.wordpress.org/Function_Reference/add_theme_support#Post_Thumbnails
		 */
		add_theme_support ( 'post-thumbnails' );
		set_post_thumbnail_size ( 1200, 9999 );
		
		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support ( 'html5', array (
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption' 
		) );
		
		/*
		 * Enable support for Post Formats.
		 *
		 * See: https://codex.wordpress.org/Post_Formats
		 */
		add_theme_support ( 'post-formats', array (
				'aside',
				'image',
				'video',
				'quote',
				'link',
				'gallery',
				'status',
				'audio',
				'chat' 
		) );
	}

endif;
add_action ( 'after_setup_theme', 'prima_setup' );

// Displays all child pages !!



// Displays all child pages !!