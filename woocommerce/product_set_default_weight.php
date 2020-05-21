/**
 * Set default height for all products if not yet defined.
 * May 20, 2020
 * Brandon Holland
 * Holland Web Development
 * https://www.hollandwebdevelopment.com
 */

add_filter( 'woocommerce_product_get_weight', 'hwd_product_default_weight' );
add_filter( 'woocommerce_product_variation_get_weight', 'hwd_product_default_weight' );	// For variable product variations

if( ! function_exists('hwd_product_default_weight') ) {
	function hwd_product_default_weight($weight) {

		$default = 16;	// Provide default weight

		if( empty($weight) ) {
			return $default;
		}
		else {
			return $weight;
		}
	}
}