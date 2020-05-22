/**
 * Add product custom tab.
 * May 22, 2020
 * Brandon Holland
 * Holland Web Development
 * https://www.hollandwebdevelopment.com
 */

add_filter( 'woocommerce_product_tabs', 'hwd_add_custom_tab' );
function hwd_add_custom_tab( $tabs ) {
    $tabs['tab_name'] = array(	// Add custom tab
        'title'     => __( 'Tab Title', 'woocommerce' ),
        'priority'  => 50,
        'callback'  => 'hwd_custom_tab_content'
    );
    return $tabs;
}

function hwd_custom_tab_content() {
  // Add custom tab content below
  echo '<h2>Tab Title</h2>';
  echo '<p>Content goes here.</p>';
}