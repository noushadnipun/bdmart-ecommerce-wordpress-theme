<div class="swiper-container" id="home-slider">
      <div class="swiper-wrapper">
        
		<?php 
		$prefix ='_rwmeta_';
		$slideritems = new WP_Query(array(
		   'post_type' => 'riptwareslider',
		   'posts_per_page' => '10',
		));
	    while ($slideritems->have_posts()) : $slideritems->the_post(); ?>  
		
        <div class="swiper-slide" data-cover="<?php the_post_thumbnail_url();?>" data-xs-height="220px" data-sm-height="350px" data-md-height="400px" data-lg-height="430px" data-xl-height="460px" style="background-image: url(<?php the_post_thumbnail_url();?>);">
          <div class="swiper-overlay <?php echo get_post_meta(get_the_ID(), $prefix.'slider-info-alignment', true);?>">
            <div class="text-center">
			  <h1 class="bg-white text-dark d-inline-block p-1 animated fadeDown visible" data-animate="fadeDown"><?php echo get_post_meta(get_the_ID(), $prefix.'slider-brand-heading', true);?></h1>
              <p class="display-4 animated" data-animate="fadeDown"><?php echo get_post_meta(get_the_ID(), $prefix.'slider-brand-short-offer', true);?></p>
              <a href="<?php echo get_post_meta(get_the_ID(), $prefix.'slider-brand-link-url', true);?>" class="btn btn-warning rounded-pill animated" data-animate="fadeUp" data-addclass-on-xs="btn-sm"><?php echo get_post_meta(get_the_ID(), $prefix.'slider-brand-link-text', true);?></a>
            </div>
          </div>
        </div>

       <?php endwhile; ?>

      </div>
      <div class="swiper-pagination"></div>
      <div class="swiper-button-prev autohide"><i data-feather="chevron-left"></i></div>
      <div class="swiper-button-next autohide"><i data-feather="chevron-right"></i></div>
    </div>