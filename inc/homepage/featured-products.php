<div class="card-deck card-deck-product with-sidebar mt-3 products columns-<?php echo esc_attr( wc_get_loop_prop( 'columns' ) ); ?>">
<?php
$args = array(
        'post_type' => 'product',
        'posts_per_page' => 5,
        'tax_query' => array(
                array(
                    'taxonomy' => 'product_visibility',
                    'field'    => 'name',
                    'terms'    => 'featured',
                ),
            ),
        );
    $loop = new WP_Query( $args );
    if ( $loop->have_posts() ) {
        while ( $loop->have_posts() ) : $loop->the_post();
            //wc_get_template_part( 'content', 'product' );
			 include get_template_directory() . '/woocommerce/content-product-home.php';
        endwhile;
    } else {
        echo __( 'No products found' );
    }
    wp_reset_postdata();
	?>
</div>	

<style>
img.attachment-shop_catalog.size-shop_catalog.wp-post-image {
    width: 100%;
}
@media (min-width: 760px) {
.home-product {flex: 1 0 20% !important;}
}

@media (max-width: 760px) {
.home-product {}
}
</style>