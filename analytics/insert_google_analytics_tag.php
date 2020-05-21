/**
 * Add Google Analytics tag.
 * May 20, 2020
 * Brandon Holland
 * Holland Web Development
 * https://www.hollandwebdevelopment.com
 */

function hwd_google_analytics_tag() {

	// Update UA-XXXXXXXXX-X with Google Analytics tag
	
    echo "<script async src='https://www.googletagmanager.com/gtag/js?id=UA-XXXXXXXXX-X'></script><script>window.dataLayer = window.dataLayer || [];function gtag(){dataLayer.push(arguments);}gtag('js', new Date());gtag('config', 'UA-XXXXXXXXX-X');</script>";
}
add_action( 'wp_head', 'hwd_google_analytics_tag' );