<?php
/**
 * Description
 *
 * @package     n8finch\dev\structure
 * @since       1.0.0
 * @author      n8finch
 * @link        https://n8finch.com
 * @license     GNU General Public License
 */

namespace n8finch\dev\structure;

add_action( 'genesis_header', 'genesis_do_nav', 11 );
add_action( 'genesis_site_title', __NAMESPACE__ . '\add_links_before_header', 2 );


function add_links_before_header() {

	$facebook_like = '<iframe name="f1a6d07d3db23b4" width="90px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:like Facebook Social Plugin" src="https://www.facebook.com/plugins/like.php?action=like&amp;app_id=148862601855643&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2FLcj5EtQ5qmD.js%3Fversion%3D42%23cb%3Dff4ba28346319c%26domain%3Djungsik.kr%26origin%3Dhttp%253A%252F%252Fjungsik.kr%252Ff1c5ef38676db14%26relation%3Dparent.parent&amp;container_width=0&amp;href=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;layout=button_count&amp;locale=en_US&amp;sdk=joey&amp;share=true&amp;show_faces=true&amp;width=90" style="border: none; visibility: visible; width: 150px; height: 20px;" class=""></iframe>';

	$output = '<div class="links-before-header">';
	$output .= '<a href="#" class="language-links">New York</a><a href="#" class="language-links">Seoul</a>';
	$output .= '<div class="facebook-links">' . $facebook_like . '</div>';
	$output .= '</div>'; //end links-before-header
	echo $output;
}

