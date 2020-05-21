/**
 * Set default billing address state.
 * May 20, 2020
 * Brandon Holland
 * Holland Web Development
 * https://www.hollandwebdevelopment.com
 */

add_filter( 'default_checkout_billing_state', 'hwd_checkout_set_default_billing_state' );
  
function hwd_checkout_set_default_billing_state() {
  return 'IL';	// State Code
}