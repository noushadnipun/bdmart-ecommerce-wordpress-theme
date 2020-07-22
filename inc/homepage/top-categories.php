<div class="row gutters-3">

   <?php
   $top_categories_group_sec = cs_get_option('home-cat-style-top-group');
   foreach ((array) $top_categories_group_sec as $group_value) { ?>
   
   <?php 
	$top_categories_group_terms = get_term( $group_value['home-cat-style-top-cat'], 'product_cat' ); 
	$top_categories_group_thumbnail_id = get_woocommerce_term_meta( $top_categories_group_terms->term_id, 'thumbnail_id', true );
	$top_categories_group_image_url = wp_get_attachment_url( $top_categories_group_thumbnail_id );
	$top_categories_group_chose_design = $group_value['home-cat-style-top-chose-design'];
	?>		
    <!-- Top Categories Style 1 -->
   <?php if ($top_categories_group_chose_design == 'style-1'): ?>
   <div class="col-6 d-flex" style="margin-bottom: 15px;">
      <div class="card card-2col flex-fill">
         <div class="d-flex flex-column-reverse flex-md-row">		    
            <div class="card-2col-body">
               <h2 class="card-title"><?php echo $top_categories_group_terms->name;?></h2>
               <p class="text-center d-none d-lg-block"><?php echo $top_categories_group_terms->description;?></p>			  
               <a href="<?php echo get_category_link($group_value['home-cat-style-top-cat']);?>" class="btn btn-<?php echo $group_value['home-cat-style-top-button-color'];?> rounded-pill" data-addclass-on-xs="btn-sm"><?php echo $group_value['home-cat-style-top-link-text'];?></a>
            </div>
            <div class="card-2col-img">
               <div data-cover="<?php echo $top_categories_group_image_url;?>" data-xs-height="120px" data-sm-height="200px" data-md-height="175px" data-lg-height="225px" data-xl-height="250px" style="background-image: url(<?php echo $top_categories_group_image_url;?>);"></div>
            </div>
         </div>
      </div>
   </div>
   <?php endif;?>
   <!-- Top Categories 2 -->
     <?php if ($top_categories_group_chose_design == 'style-2'): ?>
        <div class="col-6" style="margin-bottom: 15px;">
          <div class="card card-2col text-white zoom-hover">
            <img data-cover="<?php echo $top_categories_group_image_url;?>" data-xs-height="120px" data-sm-height="200px" data-md-height="175px" data-lg-height="225px" data-xl-height="250px" class="card-img" src="<?php echo $top_categories_group_image_url;?>" alt="<?php echo $top_categories_group_terms->name;?>">
            <div class="card-img-overlay card-img-overlay-transparent flex-center flex-column">
              <h2 class="card-title"><?php echo $top_categories_group_terms->name;?></h2>
              <p class="text-center d-none d-lg-block"><?php echo $top_categories_group_terms->description;?></p>
              <a href="<?php echo get_category_link($group_value['home-cat-style-top-cat']);?>" class="btn btn-<?php echo $group_value['home-cat-style-top-button-color'];?> rounded-pill" data-addclass-on-xs="btn-sm"><?php echo $group_value['home-cat-style-top-link-text'];?></a>
            </div>
          </div>
        </div>
	  <?php endif;?> 
      <!-- /Top Categories 2 -->
 
   <?php } ?>
   
</div>