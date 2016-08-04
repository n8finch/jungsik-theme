<?php

namespace n8finch\dev\structure\bar;

add_action( 'genesis_before', __NAMESPACE__ . '\customize_bar_page' );
/**
 * Customize the Front Page.
 * Do all work within is_front_page conditional
 */
function customize_bar_page() {
	if ( is_page('bar') ) {
		remove_all_actions( 'genesis_loop' );
		add_action( 'genesis_before_content_sidebar_wrap', __NAMESPACE__ . '\add_bar_page_contents' );
	}
}

function add_bar_page_contents() {


}


