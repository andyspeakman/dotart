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

function dotart_google_analytics() { ?>
	<script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
  		a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-401715-1', 'auto');
  	ga('send', 'pageview');
  	</script>
<?php }
add_action( 'wp_head', 'dotart_google_analytics', 10 );

//WC()->query->layered_nav_product_ids =array();

?>
