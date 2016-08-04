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
	}
}



