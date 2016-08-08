<?php

namespace n8finch\dev\structure\press;

add_action( 'genesis_before', __NAMESPACE__ . '\customize_press_page' );
/**
 * Customize the Front Page.
 * Do all work within is_front_page conditional
 */
function customize_press_page() {
	if ( is_page('press') ) {
		remove_all_actions( 'genesis_loop' );
		add_action( 'genesis_before_content_sidebar_wrap', __NAMESPACE__ . '\add_bar_page_contents' );
	}
}

function add_bar_page_contents() {

	//Get the data
	$press_items = get_field('press_items');

	echo '<div class="press-items">';

	foreach ( $press_items as $row ) {
		echo '<div class="press-item">' .
		     '<img src="'.$row["press_item_image"].'"/>' .
		     '<br/>' .
		     $row['press_item_title'] .
		     '<br/>' .
		     $row['press_item_content'] .
		     '<br/>' .
		     $row['press_item_link'] .
		     '<hr/>' .
		     '</div>';
	}

	echo '</div>';
}


