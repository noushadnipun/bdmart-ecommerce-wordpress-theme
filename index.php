<?php get_header();?>
    <!-- Main Content -->
  <!-- Home slider -->
    <?php require_once get_template_directory() . ('/inc/homepage/slider.php'); ?>
    <!-- /Home slider -->

    <div class="container mt-3">

      <!-- Top Categories -->
      <?php require_once get_template_directory() . ('/inc/homepage/top-categories.php'); ?>
      <!-- /Top Categories -->

      <div class="text-center mt-3">
        <!--<a href="shop-categories.html" class="btn btn-light border rounded-pill bold text-muted">ALL CATEGORIES</a>-->
      </div>

      <!-- Flash deals -->
     <?php require_once get_template_directory() . ('/inc/homepage/flash-deals.php'); ?>
      <!-- /Flash deals -->
      
      <!-- Discover -->
      <?php require_once get_template_directory() . ('/inc/homepage/discover.php'); ?>
      <!-- /Discover -->
	  
      <!-- Featured Products -->
      <h4 class="bold text-center mt-gutter">Featured Products</h4>
	   <div class="card-deck card-deck-product mt-3 mb-2 mb-sm-0">
       <?php require_once get_template_directory() . ('/inc/homepage/featured-products.php'); ?>
	   </div>   
      <!-- /Featured Products -->

    </div>
  
    <!-- /Main Content -->

<?php get_footer();?>   