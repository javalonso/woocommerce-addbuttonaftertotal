/**
* Adds a button with "Continue shopping"  on Cart Page after Cart Totals and Continue Shopping in Cart
* Add to theme functions.php file on Child Theme
*/

add_action( 'woocommerce_after_cart_totals', 'woo_add_continue_shopping_button_to_cart' );
function woo_add_continue_shopping_button_to_cart() {
 $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) );
 
 echo '<div class="wc-proceed-to-checkout">';
 echo ' <a href="'.$shop_page_url.'" class="checkout-button button alt wc-forward">Continue Shopping →</a> ';
 echo '</div>';
}
