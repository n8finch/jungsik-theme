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

	for ( $i=0; $i < sizeof($staff_names_positions); $i++ ) {

		//Get left or right class for names

		$right_or_left = '';

		if( $i === 0) {
			$right_or_left = '';
		} elseif( 0 === $i%2 ) {
			$right_or_left = 'staff-name-position-right';
		} else {
			$right_or_left = 'staff-name-position-left';
		}

		//Echo the names and positions
		echo '<a href="" data-staff-pair="staff-bio-'.$i.'" class="staff-name-links"><div id="staff-name-'.$i.'" class="staff-name-position '.$right_or_left.'">' .
		     $staff_names_positions[$i]['staff_name'] .
		     '<br/>' .
		     $staff_names_positions[$i]['staff_position'] .
		     '</div></a>';
	}

	echo '</div>'; //end hello-page-name-position-section


	for ( $i=0; $i < sizeof($staff_names_positions); $i++ ) {
		echo '<div id="staff-bio-'.$i.'" class="staff-bios">' .
		     $staff_names_positions[$i]['staff_name'] .
		     '<br/>' .
		     $staff_names_positions[$i]['staff_position'] .
		     '<br/>' .
		     $staff_names_positions[$i]['staff_bio'] .
		     '<p>___________</p>' .
		     '</div>';
	}

	echo '<div class="hello-page-bottom-content">' . $hello_page_bottom_content . '</div>';
	echo '</div>'; //end hello-page-container

}


