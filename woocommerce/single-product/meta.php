<?php
/**
 * Single Product Meta
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/meta.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see 	    https://docs.woocommerce.com/document/template-structure/
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

global $product;
?>
<div class="product_meta" style=" border-top: 1px solid #dee2e6; margin-bottom: 5px;  min-height: 146px;">

   <div class="single-product-meta">

	<?php do_action( 'woocommerce_product_meta_start' ); ?>

	<?php if ( wc_product_sku_enabled() && ( $product->get_sku() || $product->is_type( 'variable' ) ) ) : ?>

		<div class="sku_wrapper"><span style="color: #333;"><?php esc_html_e( 'SKU:', 'woocommerce' ); ?> </span><span class="sku"><?php echo ( $sku = $product->get_sku() ) ? $sku : esc_html__( 'N/A', 'woocommerce' ); ?></span></div>

	<?php endif; ?>
         <div><span style="color: #333;">Delivery Time:</span> 1-4 Working days</div>
         
        <div><span style="color: #333;">Seller:</span> Hidden</div>

	<?php echo wc_get_product_category_list( $product->get_id(), ', ', '<div class="posted_in">' . _n( '<span style="color: #333;">Category:</span>', 'Categories:', count( $product->get_category_ids() ), 'woocommerce' ) . ' ', '</div>' ); ?>

	<?php echo wc_get_product_tag_list( $product->get_id(), ', ', '<span class="tagged_as">' . _n( 'Tag:', 'Tags:', count( $product->get_tag_ids() ), 'woocommerce' ) . ' ', '</span>' ); ?>

	<?php do_action( 'woocommerce_product_meta_end' ); ?>

    </div>

   <div class="single-product-delivery-time">
          <div><span style="color: #333;">Delivery Area:</span> Dhaka City,Outside Dhaka City</div>
          <div><span style="color: #333;">Delivery Charge:</span> Inside Dhaka: 40 tk, Outside Dhaka: 80 tk </div>
   </div>

</div>


<style>
.single-product-meta {float: left; width: 50%;}

.single-product-delivery-time {float: right; width: 48%;}
</style>
