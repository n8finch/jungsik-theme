<?php

namespace n8finch\dev\structure\eat;

add_action( 'genesis_before', __NAMESPACE__ . '\customize_eat_page' );
/**
 * Customize the Front Page.
 * Do all work within is_front_page conditional
 */
function customize_eat_page() {
	if ( is_page( 'eat' ) ) {
		remove_all_actions( 'genesis_loop' );
		add_action( 'genesis_before_content_sidebar_wrap', __NAMESPACE__ . '\add_bar_page_contents' );
	}
}

function add_bar_page_contents() {

	global $wp_query;

	$post_ID = $wp_query->queried_object->ID;
	//Get the non-repeater field data

	//Get Arrays of Menus
	$appetizer_menu_items    = get_field( 'appetizer_menu_items' );
	$rice_noodle_menu_items  = get_field( 'rice_noodle_menu_items' );
	$seafood_menu_items      = get_field( 'seafood_menu_items' );
	$land_menu_items         = get_field( 'land_menu_items' );
	$sweet_menu_items        = get_field( 'sweet_menu_items' );
	$tasting_menu_selections = get_field( 'tasting_menu_selections' );

	//Get other data
	$choice_menu_icon_top = get_field('choice_menu_icon_top');
	$choice_menu_icon_bottom = get_field('choice_menu_icon_bottom');
	$tasting_menu_icon_top = get_field('tasting_menu_icon_top');
	$tasting_menu_icon_bottom = get_field('tasting_menu_icon_bottom');
	$tasting_menu_price = get_field( 'tasting_menu_price' );
	$wine_pairing_price = get_field( 'wine_pairing_price' );
	$wine_list_upload   = get_field( 'wine_list_upload' );


	//Eat page Menu Links
	echo '<div class="eat-page-menu-links">';
	echo '<a id="choice-menu-link" class="eat-page-menu-link" href="#">Choice Menu</a>';
	echo '<a id="tasting-menu-link" class="eat-page-menu-link" href="#">Tasting Menu</a>';
	echo '<a class="eat-page-menu-link" href="' . $wine_list_upload . '" target="_blank">Wine List</a>';
	echo '</div>';


	echo '<div class="eat-page-menu-items">';

	echo '<div class="choice-menu-items">';

	echo '<img class="eat-page-icons" src="'.$choice_menu_icon_top.'"/>';

	echo '<div class="appetizer-menu-items">';

	echo '<h3 class="choice-menu-items-headers">Appetizers</h3>';

	foreach ( $appetizer_menu_items as $row ) {
		echo '<div class="appetizer-menu-item">' .
		     $row['appetizer_name_english'] .
		     '<br/>' .
		     $row['appetizer_name_korean'] .
		     '<br/>' .
		     $row['appetizer_description'] .
		     '<br/>' .
		     $row['appetizer_price'] .
		     '</div>';
	}

	echo '</div>';

	echo '<div class="rice-noodle-menu-items">';

	echo '<h3 class="choice-menu-items-headers">Rice / Noodle</h3>';

	foreach ( $rice_noodle_menu_items as $row ) {
		echo '<div class="appetizer-menu-item">' .
		     $row['rice_noodle_name_english'] .
		     '<br/>' .
		     $row['rice_noodle_name_korean'] .
		     '<br/>' .
		     $row['rice_noodle_description'] .
		     '<br/>' .
		     $row['rice_noodle_price'] .
		     '</div>';
	}
	echo '</div>';

	echo '<div class="seafood-menu-items">';

	echo '<h3 class="choice-menu-items-headers">Seafood</h3>';

	foreach ( $seafood_menu_items as $row ) {
		echo '<div class="appetizer-menu-item">' .
		     $row['seafood_name_english'] .
		     '<br/>' .
		     $row['seafood_name_korean'] .
		     '<br/>' .
		     $row['seafood_description'] .
		     '<br/>' .
		     $row['seafood_price'] .
		     '</div>';
	}

	echo '</div>';

	echo '<div class="land-menu-items">';

	echo '<h3 class="choice-menu-items-headers">Land</h3>';

	foreach ( $land_menu_items as $row ) {
		echo '<div class="appetizer-menu-item">' .
		     $row['land_name_english'] .
		     '<br/>' .
		     $row['land_name_korean'] .
		     '<br/>' .
		     $row['land_description'] .
		     '<br/>' .
		     $row['land_price'] .
		     '</div>';
	}

	echo '</div>';

	echo '<div class="sweet-menu-items">';

	echo '<h3 class="choice-menu-items-headers">Sweet</h3>';

	foreach ( $sweet_menu_items as $row ) {
		echo '<div class="appetizer-menu-item">' .
		     $row['sweet_name_english'] .
		     '<br/>' .
		     $row['sweet_name_korean'] .
		     '<br/>' .
		     $row['sweet_description'] .
		     '<br/>' .
		     $row['sweet_price'] .
		     '</div>';
	}

	echo '</div>';

	echo '<img class="eat-page-icons" src="'.$choice_menu_icon_bottom.'"/>';

	echo '</div>'; // end choice-menu-items


	echo '<div class="tasting-menu-items">';

	echo '<img class="eat-page-icons" src="'.$tasting_menu_icon_top.'"/>';

	foreach ( $tasting_menu_selections as $row ) {
		echo '<div class="tasting-menu-item">' .
		     $row['tasting_item_name_english'] .
		     '<br/>' .
		     $row['tasting_item_name_korean'] .
		     '<br/>' .
		     $row['tasting_item_description'] .
		     '</div>';
	}

	echo '<img class="eat-page-icons" src="'.$tasting_menu_icon_bottom.'"/>';

	echo '<p class="tasting-menu-price">Tasting Menu: ' . $tasting_menu_price . '</p>';
	echo '<p class="wine-pairing-price">Wine Pairing: ' . $wine_pairing_price . '</p>';

	echo '</div>'; // end tasting-menu-items

	echo '<a href="https://www.facebook.com/jungsikdang/" target="_blank"><span class="fa fa-facebook fa"></span></a> | 	<a class="twitter" href="https://twitter.com/JUNGSIKDANG" target="_blank"><span class="fa fa-twitter fa"></span></a>';
	echo '</div>'; // end eat-page-menu-items

}


