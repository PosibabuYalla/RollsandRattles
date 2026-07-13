<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

require_once get_template_directory() . '/inc/template-helpers.php';
require_once get_template_directory() . '/inc/customizer.php';
require_once get_template_directory() . '/inc/post-types.php';
require_once get_template_directory() . '/inc/woocommerce.php';

function rr_setup() {
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'custom-logo' );
	add_theme_support( 'html5', array( 'search-form', 'gallery', 'caption', 'script', 'style' ) );

	register_nav_menus( array(
		'primary' => __( 'Primary Menu', 'rolls-and-rattles' ),
		'footer'  => __( 'Footer Menu', 'rolls-and-rattles' ),
	) );
}
add_action( 'after_setup_theme', 'rr_setup' );

function rr_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Footer Widgets', 'rolls-and-rattles' ),
		'id'            => 'rr-footer-widgets',
		'description'   => __( 'Appears above the footer bottom bar. Handy for plugin widgets (payment badges, newsletter forms, etc).', 'rolls-and-rattles' ),
		'before_widget' => '<div class="rr-footer-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="rr-footer-widget-title">',
		'after_title'   => '</h4>',
	) );

	register_sidebar( array(
		'name'          => __( 'Before Footer (Announcement Bar)', 'rolls-and-rattles' ),
		'id'            => 'rr-before-footer',
		'description'   => __( 'Full-width area just above the footer — good for plugin-driven announcement bars or promo banners.', 'rolls-and-rattles' ),
		'before_widget' => '<div class="rr-announcement-widget">',
		'after_widget'  => '</div>',
		'before_title'  => '<h4 class="screen-reader-text">',
		'after_title'   => '</h4>',
	) );
}
add_action( 'widgets_init', 'rr_widgets_init' );

function rr_assets() {
	wp_enqueue_style(
		'rr-google-fonts',
		'https://fonts.googleapis.com/css2?family=Baloo+2:wght@600;700;800&family=Poppins:wght@400;500;600;700&display=swap',
		array(),
		null
	);

	wp_enqueue_style(
		'rr-style',
		get_template_directory_uri() . '/assets/css/style.css',
		array( 'rr-google-fonts' ),
		filemtime( get_template_directory() . '/assets/css/style.css' )
	);

	wp_enqueue_script(
		'rr-main',
		get_template_directory_uri() . '/assets/js/main.js',
		array(),
		filemtime( get_template_directory() . '/assets/js/main.js' ),
		true
	);

	if ( rr_is_page_template( 'page-about.php' ) ) {
		wp_enqueue_style(
			'rr-about',
			get_template_directory_uri() . '/assets/css/about.css',
			array( 'rr-style' ),
			filemtime( get_template_directory() . '/assets/css/about.css' )
		);
	}

	if ( rr_is_page_template( 'page-contact.php' ) ) {
		wp_enqueue_style(
			'rr-contact',
			get_template_directory_uri() . '/assets/css/contact.css',
			array( 'rr-style' ),
			filemtime( get_template_directory() . '/assets/css/contact.css' )
		);
		wp_enqueue_script(
			'rr-contact',
			get_template_directory_uri() . '/assets/js/contact.js',
			array(),
			filemtime( get_template_directory() . '/assets/js/contact.js' ),
			true
		);
	}
}
add_action( 'wp_enqueue_scripts', 'rr_assets' );

function rr_resource_hints( $urls, $relation_type ) {
	if ( 'preconnect' === $relation_type ) {
		$urls[] = array( 'href' => 'https://fonts.googleapis.com' );
		$urls[] = array(
			'href'        => 'https://fonts.gstatic.com',
			'crossorigin' => true,
		);
	}
	return $urls;
}
add_filter( 'wp_resource_hints', 'rr_resource_hints', 10, 2 );

/**
 * page-about.php / page-contact.php are auto-applied by WordPress when a Page's
 * slug matches ("about", "contact"), but is_page_template() only recognizes a
 * template once it's been explicitly selected in the editor's Page Attributes
 * panel. This keeps asset loading working either way.
 */
function rr_is_page_template( $template ) {
	if ( is_page_template( $template ) ) {
		return true;
	}
	$slug = str_replace( array( 'page-', '.php' ), '', $template );
	return is_page( $slug );
}
