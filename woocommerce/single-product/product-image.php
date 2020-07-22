<?php
/**
 * Single Product Image
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/product-image.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce/Templates
 * @version 3.5.1
 */

defined( 'ABSPATH' ) || exit;

// Note: `wc_get_gallery_image_html` was added in WC 3.3.2 and did not exist prior. This check protects against theme overrides being used on older versions of WC.
if ( ! function_exists( 'wc_get_gallery_image_html' ) ) {
	return;
}

global $product;

$columns           = apply_filters( 'woocommerce_product_thumbnails_columns', 4 );
$post_thumbnail_id = $product->get_image_id();
$wrapper_classes   = apply_filters( 'woocommerce_single_product_image_gallery_classes', array(
	'woocommerce-product-gallery',
	'woocommerce-product-gallery--' . ( $product->get_image_id() ? 'with-images' : 'without-images' ),
	'woocommerce-product-gallery--columns-' . absint( $columns ),
	'images',
) );
?>
<?php
/*
<div class="ilove <?php echo esc_attr( implode( ' ', array_map( 'sanitize_html_class', $wrapper_classes ) ) ); ?>" data-columns="<?php echo esc_attr( $columns ); ?>" style="opacity: 0; transition: opacity .25s ease-in-out;">
	<figure class="woocommerce-product-gallery__wrapper">
		<?php
		if ( $product->get_image_id() ) {
			$html = wc_get_gallery_image_html( $post_thumbnail_id, true );
		} else {
			$html  = '<div class="woocommerce-product-gallery__image--placeholder">';
			$html .= sprintf( '<img src="%s" alt="%s" class="wp-post-image" />', esc_url( wc_placeholder_img_src( 'woocommerce_single' ) ), esc_html__( 'Awaiting product image', 'woocommerce' ) );
			$html .= '</div>';
		}

		//echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $post_thumbnail_id ); // phpcs:disable WordPress.XSS.EscapeOutput.OutputNotEscaped

		//do_action( 'woocommerce_product_thumbnails' );
		?>
	</figure>
</div>
*/
?>

<!--  Start Custom Thumbnail -->

<?php
   $attachment_ids = $product->get_gallery_image_ids();
   ?>
<!-- Riptware Large -->
<div class="swiper-container" id="product-slider">
   <div class="swiper-wrapper">
      <?php
         // product image
         echo'<img src="'.get_the_post_thumbnail_url().'" data-large="'.get_the_post_thumbnail_url().'" alt="Product" class="swiper-slide">';
          //Product Gallery
         foreach( $attachment_ids as $attachment_id ) 
         {		
         echo '<img src="'.wp_get_attachment_url( $attachment_id ).'" data-large="'.wp_get_attachment_url( $attachment_id ).'" alt="Product" class="swiper-slide">';
         
         }
         
         
         ?>	  
   </div>
   <div class="swiper-pagination"></div>
   <div class="swiper-button-prev autohide"><i data-feather="chevron-left"></i></div>
   <div class="swiper-button-next autohide"><i data-feather="chevron-right"></i></div>
   <button class="wishlist atw-demo active" title="Added to wishlist"><i data-feather="heart"></i></button>
   <button class="zoom" title="Zoom"><i data-feather="zoom-in"></i></button>
</div>
<!-- Riptware Custom Woo Thumbnail -->
<div class="swiper-container product-slider-small" id="product-slider-small">
   <div class="swiper-wrapper">
      <?php
         $riptware_attachment_ids = wp_get_attachment_url( $attachment_id );
         // product image
		 echo'<img src="'.get_the_post_thumbnail_url().'" data-large="'.get_the_post_thumbnail_url().'" alt="Product" class="swiper-slide img-thumbnail">';
         
		 // Product Gallery
		 foreach( $attachment_ids as $attachment_id ) 
         {
          echo '<img src="'.wp_get_attachment_url( $attachment_id ).'" data-large="'.wp_get_attachment_url( $attachment_id ).'" alt="%s" class="swiper-slide img-thumbnail">';
         	
         
         }
         ?>
   </div>
   <div class="swiper-button-prev swiper-button-prev-sm"><i data-feather="chevron-left"></i></div>
   <div class="swiper-button-next swiper-button-next-sm"><i data-feather="chevron-right"></i></div>
</div>
<!-- Photoswipe container-->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
   <div class="pswp__bg"></div>
   <div class="pswp__scroll-wrap">
      <div class="pswp__container">
         <div class="pswp__item"></div>
         <div class="pswp__item"></div>
         <div class="pswp__item"></div>
      </div>
      <div class="pswp__ui pswp__ui--hidden">
         <div class="pswp__top-bar">
            <div class="pswp__counter"></div>
            <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
            <button class="pswp__button pswp__button--share" title="Share"></button>
            <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
            <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
            <div class="pswp__preloader">
               <div class="pswp__preloader__icn">
                  <div class="pswp__preloader__cut">
                     <div class="pswp__preloader__donut"></div>
                  </div>
               </div>
            </div>
         </div>
         <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
            <div class="pswp__share-tooltip"></div>
         </div>
         <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)"></button>
         <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)"></button>
         <div class="pswp__caption">
            <div class="pswp__caption__center"></div>
         </div>
      </div>
   </div>
</div>
<style>
   .woocommerce img, .woocommerce-page img {
   height: 100%;
   max-width: 100%;
   }
</style>