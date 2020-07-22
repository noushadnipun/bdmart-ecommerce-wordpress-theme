</section> <!-- Footer -->
    <div class="footer">
      <div class="container">
        <div class="row no-gutters">
		<?php dynamic_sidebar('footer-widget'); ?>                 
        </div>
      </div>
    </div>
    <div class="copyright">Copyright © <?php echo date("Y"); ?> All right reserved</div>
    <!-- /Footer -->

    <!--Menu Modal -->
    <div class="modal modal-left modal-menu" id="menuModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header shadow">
            <a class="h5 mb-0 d-flex align-items-center" href="index-2.html">
              <img src="https://mimity-fashion51.netlify.com/img/logo.svg" alt="Mimity" class="mr-3">
              <strong>BD MART</strong>
            </a>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body shadow">
		    <?php wp_nav_menu( array(
		'theme_location'  => 'header-mobile-menu',
		'depth'	          => 2, // 1 = no dropdowns, 2 = with dropdowns.
		'container'       => false,
		'menu_class'      => 'menu',
		'menu_id'      => 'menu',
		'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
		//'walker'          => new WP_Bootstrap_Navwalker(),
	    ) ); ?>
          </div>
        </div>
      </div>
    </div>
    <!-- /Menu Modal -->

    <!-- REQUIRED JS  -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/feather.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/metisMenu.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/perfect-scrollbar.min.js"></script>

   
	 <!-- PLUGINS FOR CURRENT PAGE -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/swiper.min.js"></script>
	<script src="<?php echo get_template_directory_uri(); ?>/assets/js/photoswipe.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/photoswipe-ui-default.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/noty.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/jquery.countdown.min.js"></script>

    <!-- Mimity JS  -->
    <script src="<?php echo get_template_directory_uri(); ?>/assets/js/script.min.js"></script>

    <script>
    $(function () {

      App.atcDemo() // Add to Cart Demo
      App.atwDemo() // Add to Wishlist Demo
      App.homeSlider('#home-slider')
      App.dealsSlider('#deals-slider')
      App.colorOption()

      // example countdown, 6 hours from now for flash deals
      var countdown = new Date()
      countdown.setHours(countdown.getHours() + 6)
      $('#flash-deals-countdown').countdown(countdown, function (event) {
        $(this).text(event.strftime('%H:%M:%S'))
      })

    })
    </script>
	
	 <script>
    $(function () {

      App.rating()
      //App.atcDemo()
      //App.atwDemo()
      //App.colorOption()

      setTimeout(function () {
        // Large images slider
        var productSlider = new Swiper('#product-slider', {
          pagination: {
            el: '.swiper-pagination',
            clickable: true
          },
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          },
          on: {
            init: function () {
              setTimeout(function() {
                $('#product-slider-small .swiper-slide:first-child').addClass('active')
              }, 100)
            }
          }
        })

        // Small images slider
        var productSliderSmall = new Swiper ('#product-slider-small', {
          slidesPerView: 4,
          spaceBetween: 5,
          navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
          }
        })

        // Hide navigation when small items less than 5
        $('#product-slider-small .swiper-slide').length < 5 && $('#product-slider-small').find('.swiper-button-next, .swiper-button-prev').remove()

        // Update small image active
        productSlider.on('slideChange', function () {
          productSliderSmall.slideTo(productSlider.activeIndex)
          $('#product-slider-small .swiper-slide').removeClass('active')
            .eq(productSlider.activeIndex).addClass('active')
        })

        // Update large image active
        $('#product-slider-small .swiper-slide').click(function (event) {
          productSlider.slideTo( $('#product-slider-small .swiper-slide').index(this) )
        })

        $('.zoom').click(function () {
          openPhotoSwipe(items, productSlider.activeIndex)
        })

      }, 100)

      // Collect items for photoswipe
      var items = []
      $('#product-slider .swiper-wrapper img').each(function () {
        items.push({
          src: $(this).data('large'),
          w: 1395,
          h: 1500
        })
      })

      var openPhotoSwipe = function (items, activeIndex) {
        activeIndex = typeof activeIndex !== 'undefined' ? activeIndex : 0
        var pswpElement = document.querySelectorAll('.pswp')[0]
        var options = {
          index: activeIndex
        }
        var gallery = new PhotoSwipe(pswpElement, PhotoSwipeUI_Default, items, options)
        gallery.init()
      }

    })
    </script>
	

	
  <?php wp_footer();?>
  </body>
</html>