/**
 * Automate all order statuses from Processing to Completed.
 * March 3, 2020
 * Brandon Holland
 * Holland Web Development
 * https://www.hollandwebdevelopment.com
 */

add_action('woocommerce_order_status_changed', 'hwd_order_status_processing_to_completed');

function hwd_order_status_processing_to_completed($order_id){
	if ( ! $order_id ) {
		return;
	}
	
	global $product;
	$order = wc_get_order( $order_id );
	
	if ( $order->data['status'] == 'processing' ) {
		$payment_method=$order->get_payment_method();
		
		if ( $payment_method!="cod" ) {
			$order->update_status( 'completed' );
		}
	}
}