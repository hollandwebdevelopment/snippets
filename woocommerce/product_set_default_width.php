/**
 * Set default width for all products if not yet defined.
 * May 20, 2020
 * Brandon Holland
 * Holland Web Development
 * https://www.hollandwebdevelopment.com
 */

add_filter( 'woocommerce_product_get_width', 'hwd_set_product_default_width' );
add_filter( 'woocommerce_product_variation_get_width', 'hwd_set_product_default_width' );	// For variable product variations

if( ! function_exists('hwd_set_product_default_width') ) {
	function hwd_set_product_default_width($width) {

		$default = 16;	// Provide default width

		if( empty($width) ) {
			return $default;
		}
		else {
			return $width;
		}
	}
}