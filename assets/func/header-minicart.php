<?php





//check if woocommerce plugin is activated
if ( ! function_exists( 'is_woocommerce_activated' ) ) {
 function is_woocommerce_activated() {
  if ( class_exists( 'woocommerce' ) ) {
   return true;
  }
  else {
   return false;
  }
 }
}


// Riptware Custom cart Count

function riptware_custom_minicart_count() {
 echo '<span class="cart-number-box';
 $my_cart_count = $woocommerce->cart->cart_contents_count;
 if ($my_cart_count > 0) {
  echo ' active';
 } 
 echo '">';


  echo sprintf( _n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes' ), $woocommerce->cart->cart_contents_count );
	
	
};

// Riptware Custom Cart Bag
function riptware_custom_minicart_bag() {
if(is_woocommerce_activated()){
?>
 <div class="shopping-bag">
  <?php
   if ( version_compare( WOOCOMMERCE_VERSION, "2.0.0" ) >= 0 ) {
    the_widget( 'WC_Widget_Cart', 'title=' );
   } else {
    the_widget( 'WooCommerce_Widget_Cart', 'title=' );
   } ?>
  </div>
<?php }		
}





//showing cart header menu item
function andro_cart_menu_item() {
if(is_woocommerce_activated()){
?>

<li class="border"><a class="cart collapsed" data-target=".shopping-bag" href="javascript:;">
 <span class="cart-icon"><?php esc_attr_e('Cart','andro');?></span>
 
 <?php
 global $woocommerce;
 $my_cart_count = $woocommerce->cart->cart_contents_count;

  echo '<span class="cart-number-box';
  if ($my_cart_count > 0) {
    echo ' active';
  }
  echo '">';echo sprintf( _n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes' ), $woocommerce->cart->cart_contents_count );
  echo '</span>';
 ?>
 </a></li>
<?php }
}

function andro_cart_shopping_bag(){
 if(is_woocommerce_activated()){
  ?>
  <div class="shopping-bag">
  <?php
   if ( version_compare( WOOCOMMERCE_VERSION, "2.0.0" ) >= 0 ) {
    the_widget( 'WC_Widget_Cart', 'title=' );
   } else {
    the_widget( 'WooCommerce_Widget_Cart', 'title=' );
   } ?>
  </div>
<?php
 }
}

add_filter( 'add_to_cart_fragments', 'woocommerce_header_add_to_cart_fragment' );

if ( ! function_exists( 'woocommerce_header_add_to_cart_fragment' ) ) {
 function woocommerce_header_add_to_cart_fragment( $fragments ) {
  global $woocommerce;
  ob_start();
 ?>

 <?php
 echo '<span class="cart-number-box';
 $my_cart_count = $woocommerce->cart->cart_contents_count;
 if ($my_cart_count > 0) {
  echo ' active';
 } 
 echo '">';
 ?>
 <?php
  echo sprintf( _n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes' ), $woocommerce->cart->cart_contents_count );
 ?></span>


 <?php

  $fragments['span.cart-number-box'] = ob_get_clean();

  return $fragments;
 } // End woocommerce_header_add_to_cart_fragment()
}
/*

After that add this code to your header.php 

To show the cart count:
<?php echo sprintf (_n( '%d item', '%d items', $woocommerce->cart->cart_contents_count ), $woocommerce->cart->cart_contents_count ); ?> - <?php echo $woocommerce->cart->get_cart_total(); ?>

or 
    
<?php if (class_exists('Woocommerce')) {andro_cart_menu_item();} ?>


To show the cart bag or cart Widget: 

<?php  if (class_exists('Woocommerce')) {andro_cart_shopping_bag();} ?> 

*/
?>