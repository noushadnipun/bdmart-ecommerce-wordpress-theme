<?php get_header(); ?>

<div class="container my-3">
	<div class="card mb-3">
		<div class="card-body d-flex justify-content-end align-items-center py-2">
			<?php woocommerce_breadcrumb();?>	
		</div>
	</div>
	
		<div class="card">
		<div class="card-header bg-white border-bottom flex-center p-0">
          <ul class="nav nav-pills card-header-pills main-nav-pills" role="tablist">
            <li class="nav-item">
              <a style="border-radius: 0px;" class="nav-link active" href="<?php the_permalink();?>"><?php the_title();?></a>
            </li>
          </ul>
        </div>
	
	
		<div class="card-body px-1 px-md-5 pt-5">
			<?php
			// Start the loop.
			while ( have_posts() ) : the_post();

				// Include the page content template.
				the_content();

			// End the loop.
			endwhile;
			?>
		</div>
	</div>
</div>

<?php get_footer(); ?>
