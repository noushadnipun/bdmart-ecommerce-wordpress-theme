<div class="row categories-grid gutters-3 mt-gutter">

        <div class="col-sm-6 col-md-4">
			<?php 
			 $home_five_cat_style_cat_one = cs_get_option('home-5cat-style-cat-1'); 
			 $home_five_cat_style_cat_one_terms = get_term( $home_five_cat_style_cat_one, 'product_cat' ); 
			 $home_five_cat_style_cat_one_thumbnail_id = get_woocommerce_term_meta( $home_five_cat_style_cat_one_terms->term_id, 'thumbnail_id', true );
	         $home_five_cat_style_cat_one_image_url = wp_get_attachment_url( $home_five_cat_style_cat_one_thumbnail_id );
			?>
          <a href="<?php echo get_category_link($home_five_cat_style_cat_one);?>">
            <div class="card zoom-hover">
              <div style="background-image: url(<?php echo $home_five_cat_style_cat_one_image_url;?>);" data-cover="<?php echo $home_five_cat_style_cat_one_image_url;?>" data-xs-height="150px" data-sm-height="272px" data-md-height="246px" data-lg-height="324px" data-xl-height="400px"></div>
              <div class="card-img-overlay card-img-overlay-transparent">
                <h2 class="card-title bold">
					<?php 					
					echo get_term($home_five_cat_style_cat_one, 'product_cat')->name;
					?>
				</h2>
              </div>
            </div>
          </a>
        </div>

        <div class="col-sm-6 col-md-4">
		    <?php 
			 $home_five_cat_style_cat_two = cs_get_option('home-5cat-style-cat-2'); 
			 $home_five_cat_style_cat_two_terms = get_term( $home_five_cat_style_cat_two, 'product_cat' ); 
			 $home_five_cat_style_cat_two_thumbnail_id = get_woocommerce_term_meta( $home_five_cat_style_cat_two_terms->term_id, 'thumbnail_id', true );
	         $home_five_cat_style_cat_two_image_url = wp_get_attachment_url( $home_five_cat_style_cat_two_thumbnail_id );
			?>
          <div class="row gutters-3">
            <div class="col-6 col-sm-12 mt-3 mt-sm-0">
              <a href="<?php echo get_category_link($home_five_cat_style_cat_two);?>">
                <div class="card zoom-hover">
                  <div style="background-image: url(<?php echo $home_five_cat_style_cat_two_image_url;?>);" data-cover="<?php echo $home_five_cat_style_cat_two_image_url;?>" data-xs-height="100px" data-sm-height="128px" data-md-height="115px" data-lg-height="154px" data-xl-height="192px"></div>
                  <div class="card-img-overlay card-img-overlay-transparent">
                    <h3 class="card-title text-center">
					 <?php 					
					  echo get_term($home_five_cat_style_cat_two, 'product_cat')->name;
					?>
					</h3>
                  </div>
                </div>
              </a>
            </div>
			
            <div class="col-6 col-sm-12 mt-3">			
				<?php 
				 $home_five_cat_style_cat_three = cs_get_option('home-5cat-style-cat-3'); 
				 $home_five_cat_style_cat_three_terms = get_term( $home_five_cat_style_cat_three, 'product_cat' ); 
				 $home_five_cat_style_cat_three_thumbnail_id = get_woocommerce_term_meta( $home_five_cat_style_cat_three_terms->term_id, 'thumbnail_id', true );
				 $home_five_cat_style_cat_three_image_url = wp_get_attachment_url( $home_five_cat_style_cat_three_thumbnail_id );
				?>
              <a href="<?php echo get_category_link($home_five_cat_style_cat_three);?>">
                <div class="card zoom-hover">
                  <div style="background-image: url(<?php echo $home_five_cat_style_cat_three_image_url;?>);" data-cover="<?php echo $home_five_cat_style_cat_three_image_url;?>" data-xs-height="100px" data-sm-height="128px" data-md-height="115px" data-lg-height="154px" data-xl-height="192px"></div>
                  <div class="card-img-overlay card-img-overlay-transparent">
                    <h3 class="card-title text-center">
					 <?php 					
					  echo get_term($home_five_cat_style_cat_three, 'product_cat')->name;
					?>
					</h3>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="row gutters-3">
            <div class="col-6 col-md-12 mt-3 mt-md-0">
			 <?php 
			 $home_five_cat_style_cat_four = cs_get_option('home-5cat-style-cat-4'); 
			 $home_five_cat_style_cat_four_terms = get_term( $home_five_cat_style_cat_four, 'product_cat' ); 
			 $home_five_cat_style_cat_four_thumbnail_id = get_woocommerce_term_meta( $home_five_cat_style_cat_four_terms->term_id, 'thumbnail_id', true );
			 $home_five_cat_style_cat_four_image_url = wp_get_attachment_url( $home_five_cat_style_cat_four_thumbnail_id );
			?>
              <a href="<?php echo get_category_link($home_five_cat_style_cat_four);?>">
                <div class="card zoom-hover">
                  <div style="background-image: url(<?php echo $home_five_cat_style_cat_four_image_url;?>);" data-cover="<?php echo $home_five_cat_style_cat_four_image_url;?>" data-xs-height="100px" data-sm-height="128px" data-md-height="115px" data-lg-height="154px" data-xl-height="192px"></div>
                  <div class="card-img-overlay card-img-overlay-transparent">
                    <h2 class="card-title text-center">
					 <?php 					
					  echo get_term($home_five_cat_style_cat_four, 'product_cat')->name;
					?>					
					</h2>
                  </div>
                </div>
              </a>
            </div>
			
            <div class="col-6 col-md-12 mt-3">
			 <?php 
			 $home_five_cat_style_cat_five = cs_get_option('home-5cat-style-cat-5'); 
			 $home_five_cat_style_cat_five_terms = get_term( $home_five_cat_style_cat_five, 'product_cat' ); 
			 $home_five_cat_style_cat_five_thumbnail_id = get_woocommerce_term_meta( $home_five_cat_style_cat_five_terms->term_id, 'thumbnail_id', true );
			 $home_five_cat_style_cat_five_image_url = wp_get_attachment_url( $home_five_cat_style_cat_five_thumbnail_id );
			?>
              <a href="<?php echo get_category_link($home_five_cat_style_cat_five);?>">
                <div class="card zoom-hover">
                  <div style="background-image: url(<?php echo $home_five_cat_style_cat_five_image_url;?>);" data-cover="<?php echo $home_five_cat_style_cat_five_image_url;?>" data-xs-height="100px" data-sm-height="128px" data-md-height="115px" data-lg-height="154px" data-xl-height="192px"></div>
                  <div class="card-img-overlay card-img-overlay-transparent">
                    <h2 class="card-title text-center">
					 <?php 					
					  echo get_term($home_five_cat_style_cat_five, 'product_cat')->name;
					?>
					</h2>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>

        <a href="#" class="btn btn btn-light shadow-sm sa-btn">Discover <i data-feather="arrow-right"></i></a>

      </div>