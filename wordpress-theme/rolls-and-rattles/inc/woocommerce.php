<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function rr_woocommerce_setup() {
	add_theme_support( 'woocommerce' );
	add_theme_support( 'wc-product-gallery-zoom' );
	add_theme_support( 'wc-product-gallery-lightbox' );
	add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'rr_woocommerce_setup' );

function rr_woocommerce_scripts() {
	if ( function_exists( 'is_woocommerce' ) ) {
		wp_enqueue_style(
			'rr-woocommerce',
			get_template_directory_uri() . '/assets/css/woocommerce.css',
			array( 'rr-style' ),
			filemtime( get_template_directory() . '/assets/css/woocommerce.css' )
		);
	}
}
add_action( 'wp_enqueue_scripts', 'rr_woocommerce_scripts' );

remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar', 10 );

function rr_woocommerce_wrapper_start() {
	echo '<div class="section"><div class="container woocommerce-wrap">';
}
add_action( 'woocommerce_before_main_content', 'rr_woocommerce_wrapper_start', 5 );

function rr_woocommerce_wrapper_end() {
	echo '</div></div>';
}
add_action( 'woocommerce_after_main_content', 'rr_woocommerce_wrapper_end', 25 );
