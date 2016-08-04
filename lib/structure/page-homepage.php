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
		add_action( 'genesis_after_header', __NAMESPACE__ . '\add_featured_image_to_front_page' );
		add_action( 'genesis_site_description', __NAMESPACE__ . '\add_address_phone_to_frontpage');
	}
}

function add_address_phone_to_frontpage() {
	$address_phone = get_post_meta( get_the_ID(), 'address_phone', true);

	echo $address_phone;
}

/**
 * Get the featured image for the home page
 */
function add_featured_image_to_front_page() {
	$post_thumb = get_the_post_thumbnail_url();

	$output = '<div class="front-page-image" style="background: url(' . $post_thumb . ');">';
	$output .= '</div>';

	echo $output;

}



