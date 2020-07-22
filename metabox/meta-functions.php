<?php
// Slider Section
function riptware_slider_metabox(array $rwslider) {
	$prefix ='_rwmeta_';
	$rwslider[] = array(
	    'id'           => 'rw-slider',
		'title'        => 'Slider Display Information',
		'object_types'  => array('riptwareslider'),
		'fields'  => array(
		    array(
			  'name'  => 'Chose Alignment',
			  'type'  => 'radio',
			  'id'    => $prefix.'slider-info-alignment',
			  'options' => array(
			     'left'  => 'Left',
				 'right' => 'Right',
			  ),
			  'default' => 'left',
 			),
			
			array(
			  'name'  => 'Type Brand Heading',
			  'type'  => 'text',
			  'id'    => $prefix.'slider-brand-heading',
			  'default' => 'Top Brand',
 			),
			
			 array(
			  'name'  => 'Type Your Short Offer Or Information',
			  'type'  => 'textarea',
			  'id'    => $prefix.'slider-brand-short-offer',
			  'default' => '30%-70% OFF',
 			),
			
			array(
			  'name'  => 'Type Your Offer Product Link',
			  'type'  => 'text_url',
			  'id'    => $prefix.'slider-brand-link-url',
			  'default' => '',
 			),
			array(
			  'name'  => 'Type Your Link Text',
			  'type'  => 'text',
			  'id'    => $prefix.'slider-brand-link-text',
			  'default' => 'SHOP NOW',
 			),
		)
	);
	 
	return $rwslider; 
	
}

add_filter ('cmb2_meta_boxes', 'riptware_slider_metabox');
