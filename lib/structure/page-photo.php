<?php

namespace n8finch\dev\structure\photo;

add_action( 'genesis_before', __NAMESPACE__ . '\customize_photo_page' );
/**
 * Customize the Front Page.
 * Do all work within is_front_page conditional
 */
function customize_photo_page() {
	if ( is_page('photo') ) {
		remove_all_actions( 'genesis_loop' );
		add_action( 'genesis_before_content_sidebar_wrap', __NAMESPACE__ . '\add_bar_page_contents' );
	}
}

function add_bar_page_contents() {

	// Get data

	$master_slider_photos_page = get_field('master_slider_photos_page');

	echo '<div class="photo-slider-container">';
	masterslider($master_slider_photos_page);
	echo '</div>';
}


