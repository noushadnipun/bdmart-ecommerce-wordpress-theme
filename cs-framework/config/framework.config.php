<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Framework',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'menu_position'   =>  3,
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Software Control <small>by Riptware</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
//                   HEADER               -
// ----------------------------------------


$options[]    =  array(
    'name'     => 'header-section',
	'title'  => 'Header',
	'icon'   => 'fa fa-header',
	'fields' => array(
        array(
		 'id' => 'phone-number',
		 'title' => 'Phone Number',
		 'type' => 'text',		 
		),
		
		array(
		 'id' => 'email',
		 'title' => 'E-Mail',
		 'type' => 'text',		 
		),
		
		array(
		 'id' => 'fb-link',
		 'title' => 'Facebook Link',
		 'type' => 'text',		 
		),
		
    ),
);

// ----------------------------------------
//                   HOMEPAGE             -
// ----------------------------------------


$options[]   =  array(
    'name'     => 'homepage-section',
	'title'  => 'HomePage',
	'icon'   => 'fa fa-home',
	'fields' => array(
	   // Homepage Cat Style 1- Top Categories
	   array(
	     'id'  => 'home-cat-style-top-group',
		 'title'  => 'Top Category Style',
		 'type'  => 'group',
		 'button_title'  => 'Add New',
		 'accordion_title'  => 'Add New Field',
         'fields'   => array(		 
											
				array(
				 'id' => 'home-cat-style-top-cat',
				 'title' => 'Category',
				 'type' => 'select',	
                 'options'  => 'categories',		
                 'query_args'     => array(
					'post_type'    => 'product',
					'taxonomy'     => 'product_cat',
					'orderby'      => 'mame',
					'order'        => 'ASC',					
				  ),		
                'default_option' => 'Select a category',				  
				),	
				
				array(
				 'id' => 'home-cat-style-top-link-text',
				 'title' => 'Link text',
				 'type' => 'text',	
                 'default' => 'Shop Now',				 
				),
			    
				array(
				  'id'        => 'home-cat-style-top-button-color',
				  'type'      => 'radio',
				  'class'     => 'horizontal',
				  'title'     => 'Button Color',
				  'options'   => array(
					'danger'     => 'Red',
					'success'    => 'Green',
					'warning'    => 'Yellow',
					'primary'    => 'Palm',
				   ),
				  'default'   => 'danger',
				),
				
				array(
				  'id'        => 'home-cat-style-top-chose-design',
				  'type'      => 'radio',
				  'title'     => 'Choose Style',
				  'options'   => array(
					'style-1'     => 'Style 1',
					'style-2'      => 'Style 2',
				   ),
				  'default'   => 'style-1',
				),
				
		    ),		 
	    ),		
		// Homepage Flash Deals
		 array(
	     'id'  => 'home-flash-deals',
		 'title'  => 'Flash Deals',
		 'type' => 'select',	
		 'options'  => 'categories',		
		 'query_args'     => array(
			'post_type'    => 'product',
			'taxonomy'     => 'product_cat',
			'orderby'      => 'mame',
			'order'        => 'ASC',
		  ),		
		'default_option' => 'Select a category',
		),
		
		// Homepage Cat Style 2- Middle Categories Discover
		
		array(
		 'type'   => 'content',
		 'content' => '<center><h2>Homepage middle category Section <br/> DISCOVER</h2></center>',
        ),
		 array(
	     'id'  => 'home-5cat-style-cat-1',
		 'title'  => 'Category Left Big',
		 'type' => 'select',	
		 'options'  => 'categories',		
		 'query_args'     => array(
			'post_type'    => 'product',
			'taxonomy'     => 'product_cat',
			'orderby'      => 'mame',
			'order'        => 'ASC',
		  ),		
		'default_option' => 'Select a category',
		),
		
		 array(
	     'id'  => 'home-5cat-style-cat-2',
		 'title'  => 'Category',
		 'type' => 'select',	
		 'options'  => 'categories',		
		 'query_args'     => array(
			'post_type'    => 'product',
			'taxonomy'     => 'product_cat',
			'orderby'      => 'mame',
			'order'        => 'ASC',
		  ),		
		'default_option' => 'Select a category',
		),
		
		array(
	     'id'  => 'home-5cat-style-cat-3',
		 'title'  => 'Category',
		 'type' => 'select',	
		 'options'  => 'categories',		
		 'query_args'     => array(
			'post_type'    => 'product',
			'taxonomy'     => 'product_cat',
			'orderby'      => 'mame',
			'order'        => 'ASC',
		  ),		
		'default_option' => 'Select a category',
		),
		
		array(
	     'id'  => 'home-5cat-style-cat-4',
		 'title'  => 'Category',
		 'type' => 'select',	
		 'options'  => 'categories',		
		 'query_args'     => array(
			'post_type'    => 'product',
			'taxonomy'     => 'product_cat',
			'orderby'      => 'mame',
			'order'        => 'ASC',
		  ),		
		'default_option' => 'Select a category',
		),
		
		array(
	     'id'  => 'home-5cat-style-cat-5',
		 'title'  => 'Category',
		 'type' => 'select',	
		 'options'  => 'categories',		
		 'query_args'     => array(
			'post_type'    => 'product',
			'taxonomy'     => 'product_cat',
			'orderby'      => 'mame',
			'order'        => 'ASC',
		  ),		
		'default_option' => 'Select a category',
		),
		
    ),
);



CSFramework::instance( $settings, $options );
