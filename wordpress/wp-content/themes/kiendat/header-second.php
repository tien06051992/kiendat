<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <meta name="author" content="">
    <title>
        <?php
            // Print the <title> tag based on what is being viewed.
            global $page, $paged;
            wp_title( '|', true, 'right' );

            // Add the blog name.
            bloginfo( 'name' );

            // Add the blog description for the home/front page.
            $site_description = get_bloginfo( 'description', 'display' );
            if ( $site_description && ( is_home() || is_front_page() ) ) echo " | {$site_description}";

        ?>
    </title>
    <?php wp_head(); ?>
  <!-- core CSS -->
    <link href="<?php bloginfo( 'template_url' ) ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ) ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ) ?>/css/animate.min.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ) ?>/css/owl.carousel.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ) ?>/css/owl.transitions.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ) ?>/css/prettyPhoto.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ) ?>/css/main.css" rel="stylesheet">
    <link href="<?php bloginfo( 'template_url' ) ?>/css/vertical-timeline.css" rel="stylesheet" >
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link href="<?php bloginfo( 'template_url' ) ?>/css/responsive.css" rel="stylesheet">
 
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php bloginfo( 'template_url' ) ?>/img/ico/favicon.ico">
</head><!--/head-->

<body id="home" class="homepage">
    <header id="header">
        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <ul class="top-header-item">
                                <li><i class="fa fa-envelope-o"></i><span><?php echo get_field('email', 15); ?></span></li>
                                <li><i class="fa fa-mobile"></i><span><?php echo get_field('phone_number', 15); ?></span></li>
                            </ul>
                        </div><!--/col-sm-5-->
                        <div class="col-sm-5 social-icon">
                            <ul class="top-header-item">
                                <li><a href="<?php echo get_field('facebook', 15); ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo get_field('google_plus', 15); ?>"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="<?php echo get_field('twitter', 15); ?>"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div><!--/social-icon-->
                        <div class="col-sm-2 language-bar">
                            <?php dynamic_sidebar('language-chooser'); ?> 
                        </div><!--/language-bar-->
                    </div>
                </div><!--/container-->
            </div><!--/top-header-->
        </nav><!--/#main-menu-->
    </header><!--/header-->