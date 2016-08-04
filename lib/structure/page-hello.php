<?php

namespace n8finch\dev\structure\hello;

add_action( 'genesis_before', __NAMESPACE__ . '\customize_hello_page' );
/**
 * Customize the Front Page.
 * Do all work within is_front_page conditional
 */
function customize_hello_page() {
	if ( is_page('hello') ) {
		remove_all_actions( 'genesis_loop' );
		add_action( 'genesis_before_content_sidebar_wrap', __NAMESPACE__ . '\add_hello_page_contents' );
	}
}

function add_hello_page_contents() {

	$hello_subtitle = get_field('hello_subtitle');
	$hello_page_content = get_field('hello_page_content');
	$staff_names_positions = get_field('staff_names_positions');
	$hello_page_bottom_content = get_field('hello_page_bottom_content');





	echo $hello_subtitle ;
	echo $hello_page_content ;

	foreach ($staff_names_positions as $row) {
		echo '<p>' .
		     $row['staff_name'] .

		     $row['staff_position'] .

		     $row['staff_bio'] .
		     '</p>';
	}

	echo $hello_page_bottom_content ;

}


