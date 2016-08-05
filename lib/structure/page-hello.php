<?php

namespace n8finch\dev\structure\hello;

add_action( 'genesis_before', __NAMESPACE__ . '\customize_hello_page' );
/**
 * Customize the Front Page.
 * Do all work within is_front_page conditional
 */
function customize_hello_page() {
	if ( is_page( 'hello' ) ) {
		remove_all_actions( 'genesis_loop' );
		add_action( 'genesis_before_content_sidebar_wrap', __NAMESPACE__ . '\add_hello_page_contents' );
	}
}

function add_hello_page_contents() {

	$hello_subtitle            = get_field( 'hello_subtitle' );
	$hello_page_content        = get_field( 'hello_page_content' );
	$staff_names_positions     = get_field( 'staff_names_positions' );
	$hello_page_bottom_content = get_field( 'hello_page_bottom_content' );

	echo '<div class="hello-page-container">';
	echo '<div class="hello-subtitle">' . $hello_subtitle . '</div>';
	echo '<div class="hello-page-content">' . $hello_page_content . '</div>';
	echo '<div class="hello-page-name-position-section">';

	foreach ( $staff_names_positions as $row ) {
		echo '<div class="staff-name-position">' .
		     $row['staff_name'] .
		     '<br/>' .
		     $row['staff_position'] .
		     '</div>';
	}

	echo '</div>'; //end hello-page-name-position-section


	foreach ( $staff_names_positions as $row ) {
		echo '<div class="staff-bios">' .
		     $row['staff_name'] .
		     '<br/>' .
		     $row['staff_position'] .
		     '<br/>' .
		     $row['staff_bio'] .
		     '<p>___________</p>' .
		     '</div>';
	}

	echo '<div class="hello-page-bottom-content">' . $hello_page_bottom_content . '</div>';
	echo '</div>'; //end hello-page-container

}


