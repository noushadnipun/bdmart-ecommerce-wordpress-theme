<?php

//slider 
	register_post_type('riptwareslider', array(
	 'labels' => array(
	    'name' => 'Sliders',
		'add_new_item' => 'Add New Slider',
		'featured_image' => 'Upload or Update Slider Image',
		'set_featured_image' => 'Set Slider Image',
	 ),
	 'public' => true,
	 'show_in_menu' => true,
	 'menu_position' => 1,
	 'menu_icon' => 'dashicons-image-flip-horizontal',
	 'supports' => array('title' , 'thumbnail')
	));


?>