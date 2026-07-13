<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function rr_customize_register( $wp_customize ) {

	$wp_customize->add_panel( 'rr_theme_settings', array(
		'title'       => __( 'R&R Store Settings', 'rolls-and-rattles' ),
		'description' => __( 'Edit the phone number, address, hours, hero text, and social links used across every page.', 'rolls-and-rattles' ),
		'priority'    => 20,
	) );

	// ---------------------------------------------------------------
	// Contact Info
	// ---------------------------------------------------------------
	$wp_customize->add_section( 'rr_contact_section', array(
		'title' => __( 'Contact Info', 'rolls-and-rattles' ),
		'panel' => 'rr_theme_settings',
	) );

	$wp_customize->add_setting( 'rr_phone', array(
		'default'           => '+91 88861 28686',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'rr_phone', array(
		'label'   => __( 'Phone Number (display)', 'rolls-and-rattles' ),
		'section' => 'rr_contact_section',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'rr_whatsapp_number', array(
		'default'           => '918886128686',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'rr_whatsapp_number', array(
		'label'       => __( 'WhatsApp Number', 'rolls-and-rattles' ),
		'description' => __( 'Country code + number, digits only, e.g. 918886128686', 'rolls-and-rattles' ),
		'section'     => 'rr_contact_section',
		'type'        => 'text',
	) );

	$wp_customize->add_setting( 'rr_address', array(
		'default'           => 'Dr. No. 6, PVRDL Edifice, 7-475/1, Opposite IDBI Bank, Tulasamma Nagar, Poranki, Andhra Pradesh – 521137',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'rr_address', array(
		'label'   => __( 'Store Address', 'rolls-and-rattles' ),
		'section' => 'rr_contact_section',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'rr_hours', array(
		'default'           => '10:30 AM – 9:30 PM, Every Day',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'rr_hours', array(
		'label'   => __( 'Business Hours', 'rolls-and-rattles' ),
		'section' => 'rr_contact_section',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'rr_maps_embed_url', array(
		'default'           => 'https://www.google.com/maps?q=Rolls+%26+Rattles+Kids+Mart,+Poranki,+Vijayawada&ll=16.4753873,80.709713&z=16&output=embed',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'rr_maps_embed_url', array(
		'label'       => __( 'Google Maps Embed URL', 'rolls-and-rattles' ),
		'description' => __( 'From Google Maps > Share > Embed a map > copy the src="..." URL.', 'rolls-and-rattles' ),
		'section'     => 'rr_contact_section',
		'type'        => 'url',
	) );

	$wp_customize->add_setting( 'rr_maps_directions_url', array(
		'default'           => 'https://maps.app.goo.gl/Bdpxa887ZbUXaaTX6',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( 'rr_maps_directions_url', array(
		'label'   => __( 'Google Maps "Get Directions" Link', 'rolls-and-rattles' ),
		'section' => 'rr_contact_section',
		'type'    => 'url',
	) );

	// ---------------------------------------------------------------
	// Homepage Hero
	// ---------------------------------------------------------------
	$wp_customize->add_section( 'rr_hero_section', array(
		'title' => __( 'Homepage Hero', 'rolls-and-rattles' ),
		'panel' => 'rr_theme_settings',
	) );

	$wp_customize->add_setting( 'rr_hero_line1', array(
		'default'           => 'Everything',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'rr_hero_line1', array(
		'label'   => __( 'Hero Heading — Line 1', 'rolls-and-rattles' ),
		'section' => 'rr_hero_section',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'rr_hero_line2', array(
		'default'           => 'Your Child Needs,',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'rr_hero_line2', array(
		'label'   => __( 'Hero Heading — Line 2', 'rolls-and-rattles' ),
		'section' => 'rr_hero_section',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'rr_hero_line3', array(
		'default'           => 'Under One Roof',
		'sanitize_callback' => 'sanitize_text_field',
	) );
	$wp_customize->add_control( 'rr_hero_line3', array(
		'label'   => __( 'Hero Heading — Line 3 (pink)', 'rolls-and-rattles' ),
		'section' => 'rr_hero_section',
		'type'    => 'text',
	) );

	$wp_customize->add_setting( 'rr_hero_sub', array(
		'default'           => '4 Massive Floors. 10,000+ Products. Premium Brands. Discount on Every Product.',
		'sanitize_callback' => 'sanitize_textarea_field',
	) );
	$wp_customize->add_control( 'rr_hero_sub', array(
		'label'   => __( 'Hero Subtext', 'rolls-and-rattles' ),
		'section' => 'rr_hero_section',
		'type'    => 'textarea',
	) );

	$wp_customize->add_setting( 'rr_hero_image', array(
		'default'           => '',
		'sanitize_callback' => 'esc_url_raw',
	) );
	$wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'rr_hero_image', array(
		'label'       => __( 'Hero Image', 'rolls-and-rattles' ),
		'description' => __( 'Leave empty to keep the default showroom photo.', 'rolls-and-rattles' ),
		'section'     => 'rr_hero_section',
	) ) );

	// ---------------------------------------------------------------
	// Social Links
	// ---------------------------------------------------------------
	$wp_customize->add_section( 'rr_social_section', array(
		'title' => __( 'Social Links', 'rolls-and-rattles' ),
		'panel' => 'rr_theme_settings',
	) );

	foreach ( array( 'instagram' => 'Instagram', 'facebook' => 'Facebook', 'youtube' => 'YouTube' ) as $network => $label ) {
		$wp_customize->add_setting( 'rr_social_' . $network, array(
			'default'           => '',
			'sanitize_callback' => 'esc_url_raw',
		) );
		$wp_customize->add_control( 'rr_social_' . $network, array(
			'label'   => $label . __( ' URL', 'rolls-and-rattles' ),
			'section' => 'rr_social_section',
			'type'    => 'url',
		) );
	}
}
add_action( 'customize_register', 'rr_customize_register' );
