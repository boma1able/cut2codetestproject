<?php
/**
 * cut2codetestproject functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package cut2codetestproject
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function cut2codetestproject_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on cut2codetestproject, use a find and replace
		* to change 'cut2codetestproject' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'cut2codetestproject', get_template_directory() . '/languages' );

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'cut2codetestproject' ),
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
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'cut2codetestproject_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'cut2codetestproject_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function cut2codetestproject_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'cut2codetestproject_content_width', 640 );
}
add_action( 'after_setup_theme', 'cut2codetestproject_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function cut2codetestproject_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'cut2codetestproject' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'cut2codetestproject' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'cut2codetestproject_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function cut2codetestproject_scripts() {
	wp_enqueue_script('jquery');

	wp_enqueue_style( 'cut2codetestproject-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'cut2codetestproject-style', 'rtl', 'replace' );

	wp_enqueue_script( 'cut2codetestproject-main-js', get_template_directory_uri() . '/js/main.js', array(), _S_VERSION, true );

	wp_enqueue_style( 'cut2codetestproject-main-css', get_template_directory_uri() . '/css/style.css', array(), '', false );
	wp_enqueue_style( 'cut2codetestproject-media-css', get_template_directory_uri() . '/css/media.css', array(), '', false );

	
}
add_action( 'wp_enqueue_scripts', 'cut2codetestproject_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


// register acf/gutenberg blocks
add_action('acf/init', 'my_acf_blocks_init');
function my_acf_blocks_init() {

    if( function_exists('acf_register_block_type') ) {

        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Hero block'),
            'description'       => __('A custom hero block.'),
            'render_template'   => '/blocks/hero.php',
            'category'          => 'formatting',
			'keywords' 			=> array('block', 'hero'),
        ));

		acf_register_block_type(array(
            'name'              => 'cards',
            'title'             => __('Cards block'),
            'description'       => __('A custom cards block.'),
            'render_template'   => '/blocks/cards.php',
            'category'          => 'formatting',
			'keywords' 			=> array('block', 'cards'),
        ));

		acf_register_block_type(array(
            'name'              => 'mixed',
            'title'             => __('Mixed block'),
            'description'       => __('A custom mixed block.'),
            'render_template'   => '/blocks/mixed.php',
            'category'          => 'formatting',
			'keywords' 			=> array('block', 'mixed'),
        ));

		acf_register_block_type(array(
            'name'              => 'faq',
            'title'             => __('FAQ block'),
            'description'       => __('A custom FAQ block.'),
            'render_template'   => '/blocks/faq.php',
            'category'          => 'formatting',
			'keywords' 			=> array('block', 'faq'),
        ));

		acf_register_block_type(array(
            'name'              => 'achievements',
            'title'             => __('Achievements block'),
            'description'       => __('A custom Achievements block.'),
            'render_template'   => '/blocks/achievements.php',
            'category'          => 'formatting',
			'keywords' 			=> array('block', 'achievements'),
        ));

		acf_register_block_type(array(
            'name'              => 'contact',
            'title'             => __('Contact Us block'),
            'description'       => __('A custom Contact Us block.'),
            'render_template'   => '/blocks/contact.php',
            'category'          => 'formatting',
			'keywords' 			=> array('block', 'contact'),
        ));
    }
}

function acf_common_block_callback($block){
	if (file_exists(STYLESHEETPATH . "/template-parts/block/content-acf-common-block.php")) {
		include(STYLESHEETPATH . "/template-parts/block/content-acf-common-block.php");
	}
}


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	// acf_add_options_sub_page(array(
	// 	'page_title' 	=> 'Theme Header Settings',
	// 	'menu_title'	=> 'Header',
	// 	'parent_slug'	=> 'theme-general-settings',
	// ));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}