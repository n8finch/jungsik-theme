<?php

namespace n8finch\dev\structure\landing_page;

add_action( 'genesis_before', __NAMESPACE__ . '\customize_front_page' );
/**
 * Customize the Front Page.
 * Do all work within is_front_page conditional
 */
function customize_front_page() {
	if ( is_front_page() ) {
		remove_all_actions( 'genesis_loop' );
		add_action( 'genesis_site_description', __NAMESPACE__ . '\add_address_phone_image_on_frontpage' );
		add_action( 'genesis_before_content_sidebar_wrap', __NAMESPACE__ . '\add_featured_image_to_front_page' );
	}
}

function add_address_phone_image_on_frontpage() {
	$address_phone = get_field( 'address_and_phone_number' );
	$jungsik_image = get_field( 'jungsik_image' );

	$output = '<div class="front-page-address-phone-image">';
	$output .= $address_phone;
	$output .= '<img src="' . $jungsik_image . '"/>';
	$output .= '</div>';


	echo $output;
}

/**
 * Get the featured image for the home page
 */
function add_featured_image_to_front_page() {
	$post_thumb = get_field( 'homepage_big_image' );

	$output = '<div class="front-page-image" style="background: url(' . $post_thumb . '); background-size: cover; background-position: center;">';
	$output .= '</div>';

	echo $output;

}



