<?php

add_filter( 'woocommerce_product_tabs', 'woo_reorder_tabs', 98 );
function woo_reorder_tabs( $tabs ) {

	global $product;

	if (array_key_exists('reviews', $tabs)) {
		$tabs['reviews']['priority'] = 5;			// Reviews first
	}

	if (array_key_exists('additional_information', $tabs)) {
		if ($product->has_attributes() || $product->has_dimensions() || $product->has_weight()) {
			$tabs['additional_information']['priority'] = 10;	// Additional information second
		}
	}
	
	if (array_key_exists('description', $tabs)) {
		$tabs['description']['priority'] = 15;			// Description third
	}

	return $tabs;
}

?>
