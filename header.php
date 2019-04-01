<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="<?php bloginfo('description'); ?>">

    <title>
      <?php bloginfo('name'); ?> |
      <?php is_front_page() ? bloginfo('description') : wp_title(); ?>
    </title>

    <!-- Bootstrap core CSS -->
    <link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet"> 

    <!-- Custom styles for this template -->
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">
    
    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
    
    <!-- Font Awesome -->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      
      <main role="main">
        
        <div id="myCarousel" class="carousel slide" data-ride="carousel"> 
          
            <span id="header-contact"> <i class="fas fa-phone"></i>07931 783 845</span>
           
          <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="first-slide" src="<?php echo get_bloginfo('template_url') ?>/img/image-1.jpg" alt="First slide"/>
              <div class="container">
                <div class="carousel-caption text-center">
                  <h1><span class="text-pink">P</span><span class="text-blue">2</span><span class="text-orange">K</span><span class="text-green">i</span><span class="text-purple">d</span><span class="text-orange">s</span><span class="text-pink">C</span><span class="text-blue">l</span><span class="text-orange">u</span><span class="text-green">b</span><span class="text-yellow">!</span></h1></span>
                  <p class="carousel-text">sharing the joy of performing arts</p>
                  <p><a class="btn btn-lg btn-primary" href="<?php echo site_url('/contact-us') ?>" role="button">Sign up today</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
            <img class="second-slide" src="<?php echo get_bloginfo('template_url') ?>/img/christmas-kids.jpg" alt="Second slide"/>

              <div class="container">
                <div class="carousel-caption">
                  <!--h1>Book a free trial</h1-->
                  <p class="carousel-text text-left">All children are invited along to P2Kids Club on Thursdays. Includes school pick up, snack and all activities</p>
                  <p><a class="btn btn-info" href="<?php echo site_url('/contact-us') ?>" role="button">Learn more</a></p>
                </div>
              </div>
            </div>
            <div class="carousel-item">
              <img class="third-slide" src="<?php echo get_bloginfo('template_url') ?>/img/kid-with-paint-on-hands.jpg" alt="Third slide"/>
              <div class="container">
                <div class="carousel-caption text-center">
                  <!--h1>Clubs for schools</h1-->
                  <p class="carousel-text">Lunch Time or After School Club at your school?</p>
                  <p><a class="btn btn-info" href="<?php echo site_url('/clubs-for-schools') ?>" role="button">Learn More</a></p>
                </div>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div> 
      <nav class="navbar navbar-expand-md fixed-top">
        
        <div id="main-social-icons">
          <a class="social-main-links" href="<?php the_permalink("https://www.w3schools.com"); ?>"><i class="fab fa-facebook-f"></i></a>
          <a class="social-main-links" href="<?php get_permalink();?>"><i class="fab fa-twitter"></i></a>
          <a class="social-main-links" href="#"><i class="fab fa-instagram"></i></a>
        </div> 
        
        <!--a class="navbar-brand" href="<?php echo site_url()?>">
          <img id="logo" class="header-logo" src="<?php echo get_bloginfo('template_url') ?>/img/P2-logo.png"/>
        </a-->   
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu( array(
          'theme_location'    => 'primary',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'navbarCollapse',
          'menu_class'        => 'navbar-nav mr-auto',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker()
        ));
        ?>
      </nav>

    </header>