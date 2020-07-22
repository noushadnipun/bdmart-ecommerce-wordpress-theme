<?php

//Permission
require_once get_template_directory() . ('/assets/lib/admin-dashboard/permission.php');

function riptware_default_functions() {
	
	add_theme_support ('title-tag');
	add_theme_support ('post-thumbnails');
		
	//excerpt
	function excerpt($limit){
		$post_content = explode(" " , get_the_content());
		$less_content = array_slice ($post_content, 0, $limit);
		echo implode (" ", $less_content);
	}	
}

add_action('after_setup_theme' , 'riptware_default_functions');

//woo
function mytheme_add_woocommerce_support() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );


//Load Woocommerce Existing Custom Design
require_once get_template_directory() . ('/assets/func/woocommerce.php');



//Nav Menu
require_once get_template_directory() . ('/assets/func/bootstrap-nav-walker.php');

add_theme_support( 'menus' );
if ( function_exists( 'register_nav_menus' ) ) {
    register_nav_menus(
        array(
          'header-main-menu' => __( 'Header Main Menu', 'riptware' ),
		  'header-mobile-menu' => __( 'Header Mobile Menu', 'riptware' ),
         )
     );
}

//Load Widget
require_once get_template_directory() . ('/assets/func/widgets.php');

//Load Framework
//require_once get_template_directory(). ('/lib/ReduxCore/framework.php');
//require_once get_template_directory(). ('/lib/sample/config.php');
require_once get_template_directory() .'/cs-framework/cs-framework.php';


//Load Slider
require_once get_template_directory() . ('/assets/func/slider.php');

//Load Metabox
require_once get_template_directory() . ('/metabox/init.php');
require_once get_template_directory() . ('/metabox/meta-functions.php');

//Load Woo Product Quantity
require_once get_template_directory() . ('/vendor/smntcs-woocommerce-quantity-buttons/woocommerce-quantity-buttons.php');

//Load Header Minicart
require_once get_template_directory() . ('/assets/func/header-minicart.php');

//Load Wc lebel Change
require_once get_template_directory() . ('/vendor/wc-label-change/wc-label-replacer.php');

// input field class
add_filter('woocommerce_form_field_args', function ($args, $key, $value) {
    $args['input_class'][] = 'form-control';
    $args['class'][] = 'form-group';
    return $args;
}, 10, 3);


//checkout
function iap_wc_bootstrap_form_field_args ($args, $key, $value) { 
  
  $args['input_class'][] = 'form-control'; 
  return $args; 
}
add_filter('woocommerce_form_field_args','iap_wc_bootstrap_form_field_args', 10, 3);



?>