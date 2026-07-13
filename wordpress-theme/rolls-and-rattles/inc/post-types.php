<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

function rr_register_post_types() {

	register_post_type( 'rr_review', array(
		'labels' => array(
			'name'          => __( 'Reviews', 'rolls-and-rattles' ),
			'singular_name' => __( 'Review', 'rolls-and-rattles' ),
			'add_new_item'  => __( 'Add New Review', 'rolls-and-rattles' ),
			'edit_item'     => __( 'Edit Review', 'rolls-and-rattles' ),
		),
		'public'       => false,
		'show_ui'      => true,
		'show_in_menu' => true,
		'menu_icon'    => 'dashicons-star-filled',
		'supports'     => array( 'title', 'editor' ),
		'has_archive'  => false,
		'show_in_rest' => true,
	) );

	register_post_type( 'rr_faq', array(
		'labels' => array(
			'name'          => __( 'FAQs', 'rolls-and-rattles' ),
			'singular_name' => __( 'FAQ', 'rolls-and-rattles' ),
			'add_new_item'  => __( 'Add New FAQ', 'rolls-and-rattles' ),
			'edit_item'     => __( 'Edit FAQ', 'rolls-and-rattles' ),
		),
		'public'       => false,
		'show_ui'      => true,
		'show_in_menu' => true,
		'menu_icon'    => 'dashicons-editor-help',
		'supports'     => array( 'title', 'editor', 'page-attributes' ),
		'has_archive'  => false,
		'show_in_rest' => true,
	) );
}
add_action( 'init', 'rr_register_post_types' );

function rr_review_meta_box() {
	add_meta_box( 'rr_review_stars', __( 'Star Rating', 'rolls-and-rattles' ), 'rr_review_stars_callback', 'rr_review', 'side', 'default' );
}
add_action( 'add_meta_boxes', 'rr_review_meta_box' );

function rr_review_stars_callback( $post ) {
	$stars = (int) get_post_meta( $post->ID, 'rr_stars', true );
	if ( ! $stars ) {
		$stars = 5;
	}
	wp_nonce_field( 'rr_save_review_meta', 'rr_review_meta_nonce' );
	echo '<label for="rr_stars">' . esc_html__( 'Stars (1–5)', 'rolls-and-rattles' ) . '</label><br>';
	echo '<select name="rr_stars" id="rr_stars">';
	for ( $i = 1; $i <= 5; $i++ ) {
		echo '<option value="' . esc_attr( $i ) . '" ' . selected( $stars, $i, false ) . '>' . esc_html( $i ) . '</option>';
	}
	echo '</select>';
}

function rr_save_review_meta( $post_id ) {
	if ( ! isset( $_POST['rr_review_meta_nonce'] ) || ! wp_verify_nonce( $_POST['rr_review_meta_nonce'], 'rr_save_review_meta' ) ) {
		return;
	}
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( isset( $_POST['rr_stars'] ) ) {
		update_post_meta( $post_id, 'rr_stars', (int) $_POST['rr_stars'] );
	}
}
add_action( 'save_post_rr_review', 'rr_save_review_meta' );

function rr_get_reviews( $limit = 6 ) {
	$query = new WP_Query( array(
		'post_type'      => 'rr_review',
		'posts_per_page' => $limit,
		'orderby'        => 'date',
		'order'          => 'DESC',
	) );
	return $query->have_posts() ? $query : null;
}

function rr_get_faqs( $limit = 12 ) {
	$query = new WP_Query( array(
		'post_type'      => 'rr_faq',
		'posts_per_page' => $limit,
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
	) );
	return $query->have_posts() ? $query : null;
}

function rr_default_reviews() {
	return array(
		array( 'name' => 'Add customer name', 'text' => "Your customers' Google review will appear here — connect your Google Business listing or paste a testimonial." ),
		array( 'name' => 'Add customer name', 'text' => "Your customers' Google review will appear here — connect your Google Business listing or paste a testimonial." ),
		array( 'name' => 'Add customer name', 'text' => "Your customers' Google review will appear here — connect your Google Business listing or paste a testimonial." ),
	);
}

function rr_default_faqs() {
	return array(
		array( 'q' => 'What are your showroom timings?', 'a' => "We're open every day of the week, including weekends and public holidays, from 10:30 AM to 9:30 PM." ),
		array( 'q' => 'Where are you located?', 'a' => 'We\'re at Dr. No. 6, PVRDL Edifice, 7-475/1, Opposite IDBI Bank, Tulasamma Nagar, Poranki, Andhra Pradesh – 521137.' ),
		array( 'q' => 'Do you provide home delivery?', 'a' => 'Yes. Alongside in-store shopping and in-store pickup, we offer home delivery for your convenience.' ),
		array( 'q' => 'Do you have parking?', 'a' => 'Yes, easy and convenient parking is available right outside our showroom.' ),
		array( 'q' => 'Can I contact you on WhatsApp?', 'a' => 'Absolutely. Tap any WhatsApp button on this page to chat with our team instantly.' ),
		array( 'q' => 'Do you stock bicycles for all age groups?', 'a' => 'Yes, our ground-floor Bicycle World has non-geared, geared, and electric cycles for kids, teens, and adults alike.' ),
		array( 'q' => 'Do you sell newborn essentials?', 'a' => 'Yes, we carry a complete range of feeding, bathing, and daily-care essentials for newborns.' ),
		array( 'q' => 'Which payment methods do you accept?', 'a' => 'We accept cash, all major debit/credit cards, and UPI payments for a smooth checkout.' ),
	);
}
