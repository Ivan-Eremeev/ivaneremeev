<?php
/**
 * ivaneremeev functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package ivaneremeev
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'ivaneremeev_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function ivaneremeev_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on ivaneremeev, use a find and replace
		 * to change 'ivaneremeev' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'ivaneremeev', get_template_directory() . '/languages' );

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
				'Menu' => esc_html__( 'Primary', 'ivaneremeev' ),
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
				'ivaneremeev_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'ivaneremeev_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ivaneremeev_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ivaneremeev_content_width', 640 );
}
add_action( 'after_setup_theme', 'ivaneremeev_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ivaneremeev_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ivaneremeev' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ivaneremeev' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ivaneremeev_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function ivaneremeev_scripts() {
	wp_enqueue_style( 'ivaneremeev-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_enqueue_style( 'aos', get_template_directory_uri() . '/assets/css/libs/aos.css', array(), _S_VERSION );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/libs/slick.css', array(), _S_VERSION );

	wp_enqueue_style( 'ivaneremeev-main', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION );

	wp_enqueue_script('jquery');
	wp_enqueue_script( 'fontawesome', 'https://kit.fontawesome.com/b7bf307800.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'aos', get_template_directory_uri() . '/assets/js/libs/aos.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'jquery.lazy', get_template_directory_uri() . '/assets/js/libs/jquery.lazy.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/libs/slick.min.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ivaneremeev-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), _S_VERSION, true );
	wp_enqueue_script( 'ivaneremeev-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ivaneremeev_scripts' );

/**
 * Enqueue scripts and styles for admin page.
 */
function ivaneremeev_scripts_admin() {
	wp_enqueue_style( 'admin-style', get_template_directory_uri() . '/blocks/all.css', array(), _S_VERSION );
}
add_action( 'admin_enqueue_scripts', 'ivaneremeev_scripts_admin' );

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

/**
 * Запрет обновления плагинов
 */
add_filter( 'site_transient_update_plugins', 'filter_plugin_updates' );
function filter_plugin_updates( $value ) {
	unset( $value->response['advanced-custom-fields-pro-master/acf.php'] );
	return $value;
}

/**
 * Удалить пункты меню в админке
 */
function remove_admin_menu_items() {
	remove_menu_page('edit-comments.php');
	remove_menu_page('edit.php');
}
add_action( 'admin_menu', 'remove_admin_menu_items' );