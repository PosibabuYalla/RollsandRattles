<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function rr_phone() {
	return get_theme_mod( 'rr_phone', '+91 88861 28686' );
}

function rr_phone_tel() {
	return preg_replace( '/[^0-9+]/', '', rr_phone() );
}

function rr_whatsapp_number() {
	return get_theme_mod( 'rr_whatsapp_number', '918886128686' );
}

function rr_whatsapp_link() {
	return 'https://wa.me/' . rr_whatsapp_number();
}

function rr_address() {
	return get_theme_mod( 'rr_address', 'Dr. No. 6, PVRDL Edifice, 7-475/1, Opposite IDBI Bank, Tulasamma Nagar, Poranki, Andhra Pradesh – 521137' );
}

function rr_hours() {
	return get_theme_mod( 'rr_hours', '10:30 AM – 9:30 PM, Every Day' );
}

function rr_maps_embed_url() {
	return get_theme_mod( 'rr_maps_embed_url', 'https://www.google.com/maps?q=Rolls+%26+Rattles+Kids+Mart,+Poranki,+Vijayawada&ll=16.4753873,80.709713&z=16&output=embed' );
}

function rr_maps_directions_url() {
	return get_theme_mod( 'rr_maps_directions_url', 'https://maps.app.goo.gl/Bdpxa887ZbUXaaTX6' );
}

function rr_social_url( $network ) {
	return get_theme_mod( 'rr_social_' . $network, '' );
}

function rr_page_link( $slug ) {
	$page = get_page_by_path( $slug );
	if ( $page ) {
		return get_permalink( $page );
	}
	return home_url( '/' . $slug . '/' );
}

function rr_blog_link() {
	$page_for_posts = (int) get_option( 'page_for_posts' );
	if ( $page_for_posts ) {
		return get_permalink( $page_for_posts );
	}
	return home_url( '/blog/' );
}

function rr_category_link( $slug ) {
	$page = get_page_by_path( 'products/' . $slug );
	if ( $page ) {
		return get_permalink( $page );
	}
	return home_url( '/products/' . $slug . '/' );
}

function rr_hero_line( $key, $default ) {
	return get_theme_mod( 'rr_hero_' . $key, $default );
}
