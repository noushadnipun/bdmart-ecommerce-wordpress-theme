<?php

/*  shop page */


//Change several of the breadcrumb defaults
add_filter( 'woocommerce_breadcrumb_defaults', 'riptware_woocommerce_breadcrumbs' );
function riptware_woocommerce_breadcrumbs() {
    return array(
            'delimiter'   => '',
            'wrap_before' => '<ol class="breadcrumb d-md-flex p-0 mb-0 mr-auto">',
            'wrap_after'  => '</ol>',
            'before'      => '<li class="breadcrumb-item">',
            'after'       => '</li>',
            'home'        => _x( 'Home', 'breadcrumb', 'woocommerce' ),
        );
}


// Remove the Showing Results 
add_action( 'init', 'woo_remove_wc_showing_results' );
function woo_remove_wc_showing_results() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_result_count', 20, 0 );
}

// Remove the catalog ordering 
add_action( 'init', 'woo_remove_wc_catalog_ordering' );
function woo_remove_wc_catalog_ordering() {
    remove_action( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30, 0 );
}

//Shop Page Product Title
remove_action( 'woocommerce_shop_loop_item_title','woocommerce_template_loop_product_title',  10 );
add_action('woocommerce_shop_loop_item_title', 'abChangeProductsTitle', 10 );
function abChangeProductsTitle() {
echo '<div class="card-title">' . get_the_title() . '</div>';

}

// Thumbnail

remove_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);
add_action( 'woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail', 10);

if ( ! function_exists( 'woocommerce_template_loop_product_thumbnail' ) ) {
    function woocommerce_template_loop_product_thumbnail() {
        echo woocommerce_get_product_thumbnail();
    } 
}

if ( ! function_exists( 'woocommerce_get_product_thumbnail' ) ) {   
    function woocommerce_get_product_thumbnail( $size = 'shop_catalog', $placeholder_width = 0, $placeholder_height = 0  ) {
        global $post, $woocommerce;
        $output = '<div class="card-img-top">';

        if ( has_post_thumbnail() ) {               
            $output .= get_the_post_thumbnail( $post->ID, $size );
        } else {
             $output .= wc_placeholder_img( $size );
        }                       
        $output .= '</div>';
        return $output;
    }
}

// Price
add_filter( 'woocommerce_get_price_html', 'wpa83367_price_html', 100, 2 );
function wpa83367_price_html( $price, $product ){
    //return '' . str_replace( '<del>', '<span class="h5 del">', $price ) ;
	$insdel = ['<del><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">' , '<ins>'];
	$relpaceinsdel = ['<span class="h5 del"><span style="color: #adb5bd;">', '<span class="h5">']; 
	return str_replace( $insdel, $relpaceinsdel, $price );
   //return '' . str_replace( '<ins>', '<span class="h5">', $price );
    // echo $price;
}


//Change number of products that are displayed per page (shop page)
add_filter( 'loop_shop_per_page', 'new_loop_shop_per_page', 20 );

function new_loop_shop_per_page( $cols ) {
  // $cols contains the current number of products per page based on the value stored on Options -> Reading
  // Return the number of products you wanna show per page.
  $cols = 9;
  return $cols;
}

// Pagination

function riptware_pagination() {

global $wp_query;

if ( $wp_query->max_num_pages <= 1 ) return; 

$big = 999999999; // need an unlikely integer

$pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
		'prev_next'          => true,
		'prev_text'          => __('<span class="btn btn-link btn-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left"><polyline points="15 18 9 12 15 6"></polyline></svg></span>'),
		'next_text'          => __('<span class="btn btn-link btn-icon"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right"><polyline points="9 18 15 12 9 6"></polyline></svg></span>'),
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<div class="card card-pagination"> <div class="card-body"><div class="d-inline-flex"  style="margin: 0 auto;">';
        foreach ( $pages as $page ) {
                echo "<span style='margin-left: 10px;' class='btn btn-icon rounded-pill btn-light'>$page</span>";
        }
       echo '</div></div></div>';
        }
}



?>