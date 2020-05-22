/**
 * Unset product data tab.
 * May 22, 2020
 * Brandon Holland
 * Holland Web Development
 * https://www.hollandwebdevelopment.com
 */

add_filter( 'woocommerce_product_tabs', 'hwd_unset_product_tab', 98 );
function hwd_unset_product_tab($tabs) {
	unset($tabs['reviews']);	// Unset reviews tab
	return $tabs;
}