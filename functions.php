<?php
/**
 * Description
 *
 * @package     n8finch\dev
 * @since       1.0.0
 * @author      n8finch
 * @link        https://n8finch.com
 * @license     GNU General Public License
 */

//namespace n8finch\dev;

//* Load Child Theme INIT
include_once( 'lib/init.php' );

//* Load the rest of the files
include_once( 'lib/functions/autoload.php' );

//* Start the engine (i.e. the Genesis Framework)
include_once( get_template_directory() . '/lib/init.php' );


//TODO Come back and re-arrange this to another part of the theme
remove_action( 'genesis_after_header', 'genesis_do_nav');

//*Turn off phone number detection in iOS
add_action( 'wp_head', 'n8f_add_ios_phone_number_blocker_to_meta');
function n8f_add_ios_phone_number_blocker_to_meta() {
	echo '<meta name="format-detection" content="telephone=no">';
}