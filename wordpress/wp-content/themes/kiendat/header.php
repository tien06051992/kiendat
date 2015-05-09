<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>kiendat</title>
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
    <?php wp_head(); ?>
</head><!--/head-->

<body id="home" class="homepage">

    <header id="header">

        <nav id="main-menu" class="navbar navbar-default navbar-fixed-top" role="banner">
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
            <div class="main-menu">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php bloginfo('url'); ?>"><img src="images/logo.png" alt="logo"></a>
                    </div>
                    
                    <!--menu-->
                    <div class="collapse navbar-collapse navbar-right">
                        <ul class="nav navbar-nav">
                            <?php if(qtrans_getLanguage() == "vi") : ?>
                            <li class="scroll"><a href="#services">Dịch vụ</a></li>
                            <li class="scroll"><a href="#project">dự án</a></li>
                            <li class="scroll"><a href="#about">giới thiệu</a></li>
                            <li class="scroll"><a href="#lastest-posts">bài viết gần đây</a></li> 
                            <li class="scroll"><a href="#contact">liên hệ</a></li>  
                            <?php endif ?>
                            <?php if(qtrans_getLanguage() == "en") : ?>
                            <li class="scroll"><a href="#services">services</a></li>
                            <li class="scroll"><a href="#project">Project</a></li>
                            <li class="scroll"><a href="#about">About us</a></li>
                            <li class="scroll"><a href="#lastest-posts">lastest post</a></li> 
                            <li class="scroll"><a href="#contact">Contact</a></li>  
                            <?php endif ?>
                        </ul>
                    </div>
                </div><!--/.container-->
            </div>
        </nav><!--/nav-->
    </header><!--/header-->