/**
 * Set default length for all products if not yet defined.
 * May 20, 2020
 * Brandon Holland
 * Holland Web Development
 * https://www.hollandwebdevelopment.com
 */

add_filter( 'woocommerce_product_get_length', 'hwd_set_product_default_length' );
add_filter( 'woocommerce_product_variation_get_length', 'hwd_set_product_default_length' );	// For variable product variations

if( ! function_exists('hwd_set_product_default_length') ) {
	function hwd_set_product_default_length($length) {

		$default = 16;	// Set default length
		
		if( empty($length) ) {
			return $default;
		}
		else {
			return $length;
		}
	}
}