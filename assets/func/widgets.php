<?php

function riptware_sidebar(){	

    register_sidebar(array(
	  'name' => 'Right Widget',
	  'description' => 'Add your right Widgets',
	  'id' => 'right-widget',
	  'before_widget' => '<div class="card">',
	  'after_widget' => '</div></div></div>',
	  'before_title' => '<div class="card-header"><a href="#filter-categories" data-toggle="collapse" aria-expanded="true" aria-controls="filter-categories" role="button" class="h6">',
	  'after_title' => '</a></div><div id="filter-categories" class="collapse show"><div class="card-body">',	
	));	
	
    //Footer Sidebar
	register_sidebar(array(
	  'name' => 'Footer Widget',
	  'description' => 'Add your footer Widgets',
	  'id' => 'footer-widget',
	  'before_widget' => '<div class="col-6 col-lg-3 px-3 footer-widget">',
	  'after_widget' => '</div></div>',
	  'before_title' => '<h6 class="bold">',
	  'after_title' => '</h6><div class="list-group list-group-flush list-group-no-border list-group-sm">',	
	));	
}
add_action('widgets_init' , 'riptware_sidebar');

?>