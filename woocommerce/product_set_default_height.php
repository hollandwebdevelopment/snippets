/**
 * Set default height for all products if not yet defined.
 * May 20, 2020
 * Brandon Holland
 * Holland Web Development
 * https://www.hollandwebdevelopment.com
 */

add_filter( 'woocommerce_product_get_height', 'hwd_set_product_default_height' );
add_filter( 'woocommerce_product_variation_get_height', 'hwd_set_product_default_height' );	// For variable product variations

if( ! function_exists('hwd_set_product_default_height') ) {
	function hwd_set_product_default_height($height) {

		$default = 16;	// Provide default height

		if( empty($height) ) {
			return $default;
		}
		else {
			return $height;
		}
	}
}