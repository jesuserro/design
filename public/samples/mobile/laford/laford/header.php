<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title( '|', true,'right' ); ?> <?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
    
    <!-- JS -->
    <!-- HTML5 Support for IE -->
    <!--[if lt IE 9]>
    <script src="<?php bloginfo('template_directory');?>/js/html5shim.js"></script>
    <![endif]-->
		
    <!-- Stylesheets -->
    
    <link href="<?php bloginfo('template_directory');?>/style/bootstrap.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/style/font-awesome.css" rel="stylesheet"> 
    <!--[if IE 7]>
    <link href="<?php bloginfo('template_directory'); ?>/style/font-awesome-ie7.css" rel="stylesheet"> 
    <![endif]-->		
    <link href="<?php bloginfo('template_directory'); ?>/style/isotype.css" rel="stylesheet"> 
    <link href="<?php bloginfo('template_directory'); ?>/style/prettyPhoto.css" rel="stylesheet"> 
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">   
    <link href="<?php bloginfo('template_directory');?>/style/bootstrap-responsive.css" rel="stylesheet">
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />

    <!-- Favicons -->
    <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/img/favicon/favicon.png">
    <?php if ( is_singular() ) wp_enqueue_script('comment-reply'); ?>

    <?php wp_head(); ?> 	
</head>

<body>
<div class="navbar navbar-fixed-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>
      <a class="brand" href="<?php echo home_url(); ?>/">
        <?php bloginfo('name'); ?>
      </a>
      <nav id="nav-main" class="nav-collapse" role="navigation">
        <?php
          if (has_nav_menu('primary_navigation')) :
            wp_nav_menu(array('theme_location' => 'primary_navigation', 'menu_class' => 'nav'));
          endif;
        ?>
      </nav>
    </div>
  </div>
</div>

<div class="outer">
  <!-- Header starts -->
  <header>
    <div class="container">
      <div class="row">
        <div class="span4">
          <div class="padd">
            <div class="logo">
              <!-- If you are using image for logo, then replace the below two lines with image tag. Recommended size of logo image is less than 280x80 -->
              <h1><a href="<?php bloginfo('url'); ?>"><i class="icon-gift"></i> <?php bloginfo('title'); ?></a></h1>
              <p class="meta"><?php bloginfo('description'); ?></p>
            </div>
          </div>
        </div>
        <div class="span4 offset4">
         <div class="padd">
            <div class="social">
               <a href="#"><i class="icon-facebook"></i></a>
               <a href="#"><i class="icon-twitter"></i></a>
               <a href="#"><i class="icon-linkedin"></i></a>
               <a href="#"><i class="icon-google-plus"></i></a>
               <a href="#"><i class="icon-pinterest"></i></a>
            </div>
         </div>
        </div>
      </div>
      <hr />
    </div>
  </header>
		
<!-- Header ends -->