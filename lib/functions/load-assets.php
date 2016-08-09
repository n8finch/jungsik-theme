<?php
/**
 * Asset loader handler
 *
 * @package     n8finch\dev\functions
 * @since       1.0.0
 * @author      n8finch
 * @link        https://n8finch.com
 * @license     GNU General Public License
 */

namespace n8finch\dev\functions;

add_action( 'wp_enqueue_scripts', __NAMESPACE__ . '\enqueue_scripts_styles' );

/**
 * //* Enqueue Scripts and Styles
 *
 *
 */
function enqueue_scripts_styles() {

	wp_enqueue_style( CHILD_TEXT_DOMAIN . '-font-awesome', '//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css', array(), CHILD_THEME_VERSION );
	wp_enqueue_style( 'dashicons' );

	wp_enqueue_script( CHILD_TEXT_DOMAIN . '-responsive-menu', CHILD_URL . '/assets/js/responsive-menu.js', array( 'jquery' ), 'CHILD_THEME_VERSION', true );
	$localized_script_args = array(
		'mainMenu' => __( 'Menu', 'CHILD_TEXT_DOMAIN' ),
		'subMenu'  => __( 'Menu', 'CHILD_TEXT_DOMAIN' ),
	);
	wp_localize_script( CHILD_TEXT_DOMAIN . '-responsive-menu', 'n8finchL10n', $localized_script_args );

	wp_enqueue_script( CHILD_TEXT_DOMAIN . '-custom-js', CHILD_URL . '/assets/js/custom.js', array( 'jquery' ), 'CHILD_THEME_VERSION', true );
}


add_filter( 'genesis_pre_load_favicon', __NAMESPACE__ . '\do_child_favicon' );
function do_child_favicon( $favicon_url ) {

	$favicon_url = CHILD_THEME_DIR . '/assets/img/favicon.ico';

	return $favicon_url;
}
