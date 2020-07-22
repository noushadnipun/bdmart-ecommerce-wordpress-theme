<!doctype html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri();?>/assets/images/favicon.png" />

    <!-- REQUIRED CSS: FONT, BOOTSTRAP, METISMENU, PERFECT-SCROLLBAR  -->
	<!--<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>-->
<!------ Include the above in your HEAD tag ---------->

    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/vendor.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/woocommerce.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.min.css">

    <!-- PLUGINS FOR CURRENT PAGE -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/noty.min.css">
   <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/photoswipe.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/default-skin.min.css">

    <!--  CSS  -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.min.css">
	

    <title>
	    <?php if(is_front_page() || is_home()){
			echo get_bloginfo('name');
		} else{
			echo wp_title('');
		}?>
	</title>
	<?php wp_head();?>
  </head>
  <body <?php body_class();?>>
    <!-- Top bar -->
    <div class="topbar">
      <div class="container d-flex">

        <!-- service contact -->
        <nav class="nav xd-none d-md-flex"> <!-- hidden on xs -->
          <a class="nav-link pl-0" href="javascript:void(0)"><i data-feather="phone"></i> <b><?php echo cs_get_option('phone-number');?></b></a>
          <a class="nav-link d-none d-lg-block" href="javascript:void(0)"><i data-feather="mail"></i> <b><?php echo cs_get_option('email');?></b></a>
        </nav>

        <!-- social media -->
        <nav class="nav">
          <a class="nav-link pr-2 pl-0" href="<?php echo cs_get_option('fb-link');?>"><i class="fa fa-facebook-square" style="color: #3b5998; font-size: 18px;"></i></a>
          <!--<a class="nav-link px-2" href="javascript:void(0)"><i data-feather="twitter"></i></a>
          <a class="nav-link px-2" href="javascript:void(0)"><i data-feather="instagram"></i></a>-->
        </nav>

        <!-- language -->
		
        <nav class="nav nav-lang ml-auto"> <!-- push it to the right -->
          <!-- <a class="nav-link active" href="javascript:void(0)">EN</a>
          <a class="nav-link pipe">|</a>
          <a class="nav-link" href="javascript:void(0)">RU</a> -->
        </nav>
		
<!-- User dropdown -->
        <ul class="nav">
		<?php global $current_user;?>
		 <?php if ( is_user_logged_in() ) {
		?>		
          <li class="nav-item dropdown dropdown-hover">
            <a class="nav-link dropdown-xtoggle pr-0" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
              <i data-feather="user"></i> Hi, <?php get_currentuserinfo(); echo $current_user->user_firstname; ?> <i data-feather="chevron-down"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="media p-1 align-items-center mb-2">
                <img src="<?php echo get_template_directory_uri();?>/assets/images/user.svg" alt="user" class="img-thumbnail rounded-circle mr-2 size50x50">
                <div class="media-body">
                  <strong><?php echo $current_user->user_firstname . ' ' .  $current_user->user_lastname; ?></strong>
                  <div class="small counter"></div>
                </div>
              </div>
              <a href="<?php echo wc_get_page_permalink( 'myaccount' );?>/orders" class="dropdown-item has-icon"><i data-feather="shopping-cart"></i>My Orders</a>
              <a href="<?php bloginfo('home');?>/wishlist" class="dropdown-item has-icon has-badge"><i data-feather="heart"></i>Wishlist <span class="badge rounded badge-primary"><?php if(function_exists('YITH_WCWL')){ echo YITH_WCWL()->count_products(); }?></span></a>
              <a href="<?php echo wc_get_page_permalink( 'myaccount' );?>" class="dropdown-item has-icon"><i data-feather="settings"></i>Account Setting</a>
              <div class="dropdown-divider"></div>
              <a href="<?php echo wc_get_page_permalink( 'myaccount' );?>?customer-logout=true" class="dropdown-item has-icon text-danger"><i data-feather="log-out"></i>Logout</a>
            </div>
          </li>
		  <?php } else {
			echo '<li class="nav-item"><a href="'.wc_get_page_permalink( 'myaccount' ).'" class="nav-link"><i data-feather="user"></i>  <b>Signin : Signup</b></a></li>';
		}?>
        </ul>
        <!-- /User dropdown -->
        

      </div><!-- /.container -->
    </div>
    <!-- /Top bar -->

   <!--Header -->	
    <header>
      <div class="container index-top">

        <!-- Sidebar toggler -->
        <a class="nav-link nav-icon ml-ni nav-toggler mr-3 d-flex d-lg-none" href="#" data-toggle="modal" data-target="#menuModal"><i data-feather="menu"></i></a>

        <!-- Logo -->
        <a class="nav-link nav-logo" href="<?php bloginfo ('home');?>"><img src="<?php echo get_template_directory_uri();?>/assets/images/logo.png" alt="BD MART" style="width: 77%;"> <!--<strong>BD MART</strong>--></a>
        
		
        <!-- Search form -->
        <form class="form-inline form-search ml-auto mr-0 mr-sm-1 d-none d-sm-flex pc-search-form" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>">
          <div class="input-group input-group-search pc-search-box">
            <div class="input-group-prepend">
              <button class="btn btn-light d-flex d-sm-none search-toggle" type="button"><i data-feather="chevron-left"></i></button>
            </div>
            <input style="text-align: center;" type="text" class="form-control border-0 bg-light input-search" placeholder="Search Here Which You Want" name="s" id="s" placeholder='<?php echo $search_params['placeholder']; ?>'>
			<input type="hidden" name="post_type" value="product">
            <div class="input-group-append">
              <button class="btn btn-light" type="submit"><i data-feather="search"></i></button>
            </div>
          </div>
        </form>
        <!-- /Search form -->
        
      <ul class="nav ml-auto ml-sm-0">
          <!-- Search form toggler -->
          <li class="nav-item d-block d-sm-none ml-2 ml-lg-0"><a class="nav-link nav-icon search-toggle" href="#"><i data-feather="search"></i></a></li>
          <!-- Cart dropdown -->
	 <?php if ( in_array( 'woocommerce/woocommerce.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) {
           $count = WC()->cart->cart_contents_count;?>
          <?php } ?>
          <li class="nav-item dropdown dropdown-hover dropdown-cart">
            <a class="nav-link nav-icon mr-nis dropdown-toggle forwardable ml-2" data-toggle="dropdown" href="<?php echo WC()->cart->get_cart_url(); ?>" role="button" aria-haspopup="true" aria-expanded="false">
              <i data-feather="shopping-cart"></i>
              <span class="badge badge-primary"><?php echo riptware_custom_minicart_count();?></span>
            </a>
            <div class="dropdown-menu dropdown-menu-right"> 	
			<?php  echo riptware_custom_minicart_bag(); ?> 
              </div>
            </div>
          </li>
          <!-- /Cart dropdown -->
        </ul>
      </div><!-- /.container -->
	  
	   <div class="pc-header d-none d-md-flex">
	  <!-- Main navigation -->
        <?php wp_nav_menu( array(
		'theme_location'  => 'header-main-menu',
		//'depth'	          => 3, // 1 = no dropdowns, 2 = with dropdowns.
		'container'       => false,
		'menu_class'      => 'nav nav-main ml-auto d-none d-lg-flex',
		'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
		'walker'          => new WP_Bootstrap_Navwalker(),
	    ) ); ?>
        <!-- /Main navigation -->
		</div>
		
    </header>
 
    <!-- /Header -->
	
<section class="pc-main-content">	