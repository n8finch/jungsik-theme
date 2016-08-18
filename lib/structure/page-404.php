<?php
/**
 * Description
 *
 * @package     n8finch\dev\structure\four0four;
 * @since       1.0.0
 * @author      n8finch
 * @link        https://n8finch.com
 * @license     GNU General Public License
 */

namespace n8finch\dev\structure\four0four;

add_action( 'genesis_before', __NAMESPACE__ . '\customize_404_page' );
/**
 * Customize the Front Page.
 * Do all work within is_front_page conditional
 */
function customize_404_page() {
	if ( is_404() ) {
		remove_all_actions( 'genesis_loop' );
		add_action( 'genesis_before_content_sidebar_wrap', __NAMESPACE__ . '\add_404_page_contents' );
	}
}

function add_404_page_contents() {
	echo '<br/><br/>';
	echo '<h3>The page you are looking for is not here.</h3>';
	echo '<h3>Please select one of the menu links above.</h3>';
}