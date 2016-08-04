<?php
/**
 * Footer modifications
 *
 * @package     n8finch\dev\structure
 * @since       1.0.0
 * @author      n8finch
 * @link        https://n8finch.com
 * @license     GNU General Public License
 */

namespace n8finch\dev\structure;

add_action( 'genesis_before_footer', __NAMESPACE__ . '\modify_footer_elements' );

function modify_footer_elements() {
	remove_all_actions( 'genesis_before_footer' );
	remove_all_actions( 'genesis_footer' );
	remove_all_actions( 'genesis_after_footer' );
}