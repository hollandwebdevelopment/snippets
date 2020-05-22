/**
 * Reorder product tabs.
 * May 22, 2020
 * Brandon Holland
 * Holland Web Development
 * https://www.hollandwebdevelopment.com
 */

add_filter( 'woocommerce_product_tabs', 'hwd_reorder_product_tabs', 98);
function hwd_reorder_product_tabs($tabs) {
    $tabs['desc_tab']['priority'] = 5;
    $tabs['reviews']['priority'] = 20;
    
	return $tabs;
}