<?php

namespace n8finch\dev\structure\eat;

add_action( 'genesis_before', __NAMESPACE__ . '\customize_eat_page' );
/**
 * Customize the Front Page.
 * Do all work within is_front_page conditional
 */
function customize_eat_page() {
	if ( is_page('eat') ) {
		remove_all_actions( 'genesis_loop' );
		add_action( 'genesis_before_content_sidebar_wrap', __NAMESPACE__ . '\add_bar_page_contents' );
	}
}

function add_bar_page_contents() {


}


