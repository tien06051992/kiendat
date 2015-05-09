<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>kien dat</title>
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
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php bloginfo( 'template_url' ) ?>/img/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php bloginfo( 'template_url' ) ?>/img/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php bloginfo( 'template_url' ) ?>/img/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="<?php bloginfo( 'template_url' ) ?>/img/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">

        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top main-menu-header-second" role="banner">
            <div class="top-header">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <ul class="top-header-item">
                                <li><i class="fa fa-envelope-o"></i><span><?php echo get_field('email', 15); ?></span></li>
                                <li><i class="fa fa-mobile"></i><span><?php echo get_field('phone_number', 15); ?></span></li>
                            </ul>
                        </div>
                        <div class="col-sm-5 social-icon">
                            <ul class="top-header-item">
                                <li><a href="<?php echo get_field('facebook', 15); ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo get_field('google_plus', 15); ?>"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="<?php echo get_field('twitter', 15); ?>"><i class="fa fa-twitter"></i></a></li>
                            </ul>
                        </div>
                    <div class="col-sm-2 language-bar">
                        <?php dynamic_sidebar('language-chooser'); ?> 
                    </div>
                    </div>
                </div>
            </div>
        </nav><!--/nav-->
    </header><!--/header-->