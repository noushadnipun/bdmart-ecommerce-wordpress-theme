 <div class="row mt-gutter">
        <div class="col">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title roboto-condensed bold"><i data-feather="zap" class="align-top"></i> FLASH DEALS: <!--<span class="text-danger" id="flash-deals-countdown">countdown</span>--></h5>
              <div class="swiper-container" id="deals-slider">
                <div class="swiper-wrapper">
				
				<?php
				$flashdealsargs = array( 'post_type' => 'product', 'posts_per_page' => 10, 'product_cat' => 'flash-deals', 'orderby' => 'rand' );
				$flashdealsloop = new WP_Query( $flashdealsargs );
				while ( $flashdealsloop->have_posts() ) : $flashdealsloop->the_post(); global $product; ?>
				

                  <div class="swiper-slide">
                    <div class="card card-2col shadow-none">
                      <div class="d-flex flex-column-reverse flex-md-row">
                        <div class="card-2col-body">
                          <a href="<?php echo get_permalink( $flashdealsloop->post->ID ) ?>" class="h3 card-title"><?php the_title();?></a>
                          <p class="price text-center">
                            <?php echo $product->get_price_html(); ?>
                          </p>					  
                          <a href="<?php echo get_permalink( $flashdealsloop->post->ID ) ?>"><button type="button" class="btn btn-primary rounded-pill"><i data-feather="shopping-cart"></i> View Product</button></a>
                        </div>
                        <div class="card-2col-img">
                          <a href="<?php echo get_permalink( $flashdealsloop->post->ID ) ?>" data-cover="<?php echo get_the_post_thumbnail_url(); ?>" style=" background-image: url(<?php echo get_the_post_thumbnail_url(); ?>);" data-xs-height="250px" data-sm-height="200px" data-md-height="175px" data-lg-height="225px" data-xl-height="250px"></a>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_query(); ?>
				 

                </div>
                <div class="swiper-button-prev left-0"><i data-feather="chevron-left"></i></div>
                <div class="swiper-button-next right-0"><i data-feather="chevron-right"></i></div>
              </div>
            </div>
          </div>
        </div>
      </div>