<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package WordPress
 * @subpackage kiendat
 * @since kiendat
 */

get_header(); ?>
    <section id="cta-banner" style="background: url('<?php echo get_field('get_started_image', 15); ?>') no-repeat 100% 100% !important; background-size: cover;">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><?php echo get_field('get_started_title', 15); ?></h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms"><?php echo get_field('get_started_description', 15); ?></p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#about">Get started now</a></p>
            </div>
        </div>
    </section><!--cta2-->


    <section id="services" >
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php echo get_field('service_title', 15); ?></h2>
                <p class="text-center wow fadeInDown short-intro"><?php echo get_field('service_description', 15); ?></p>
            </div>
            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-heart-o fa-4x"></i>
                            </div>
                            <?php echo get_field('service_1', 15); ?>
                        </div>
                    </div> <!--/col-md-4-->
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-star-o"></i>
                            </div>
                            <?php echo get_field('service_2', 15); ?>
                        </div>
                    </div> <!--/col-md-4-->
                    <div class="col-md-4 col-sm-4 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-star-o"></i>
                            </div>
                            <?php echo get_field('service_3', 15); ?>
                        </div>
                    </div> <!--/col-md-4-->
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="project">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php agilsun_get_catogery_name("projects"); ?></h2>
            </div>

            <div class="row">
                <?php 
                    query_posts(array('category_name' => 'projects'));
                    while (have_posts()) : the_post();
                    $post_id = get_the_ID();
                ?>
                <div class="col-sm-4 col-md-4">
                    <div class="project-item wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <a href="<?php the_permalink(); ?>">
                            <div class="project-img">
                                <?php the_post_thumbnail('img-service'); ?>
                            </div>
                            <div class="project-info">
                                <h3><?php the_title(); ?></h3>
                                <span><?php echo get_field('type_field', $post_id); ?></span>
                            </div>
                        </a>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_query();
                ?>     
            </div>

            <div class="divider"></div>

        </div>
    </section><!--/#project-->


    <section id="about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php agilsun_get_catogery_name("about-us"); ?></h2>
            </div>
            <div class="mytimeline-wrap">
                  <section id="cd-timeline" class="cd-container">
                  <?php 
                    query_posts(array('category_name' => 'about-us'));
                    $flag = 0;
                    while (have_posts()) : the_post();
                    $post_id = get_the_ID();
                    ?>
                    <div class="cd-timeline-block wow <?php if($flag % 2 == 0) {echo 'fadeInLeft';} else {echo 'fadeInRight';} ?>">
                        <div class="cd-timeline-img cd-picture">
                            <div class="cd-date course"><?php echo get_field('date_of_event', $post_id); ?></div>
                            <span class="circle-black hide-on-mobile hide-on-tablet"></span>
                        </div> <!-- cd-timeline-img -->

                        <div class="cd-timeline-content">
                            <a href="<?php the_permalink(); ?>"><h2 class="school-name"><?php the_title(); ?></h2></a>
                            <p class="info"><?php echo _substr(get_the_excerpt(), 70); ?></p>
                        </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->
                    <?php
                        $flag++;
                        endwhile;
                        wp_reset_query();
                    ?>
                    <div class="our-story">
                    <div class="cd-date course">
                    <?php agilsun_multilanguae_static_text("Our goes story","Lịch Sử"); ?>
                    </div>
                  </section> <!-- cd-timeline -->
                  <!-- END TIMELINE -->
            </div><!--/row-->
        </div><!--/about-->
    </section><!--/#about-->

    <section id="lastest-posts">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown"><?php agilsun_multilanguae_static_text("Lastest post","Bài viết mới"); ?></h2>
            </div>

            <div class="row">
                <?php 
                    query_posts(array('category_name' => 'blog','posts_per_page' => 3));
                    while (have_posts()) : the_post();
                    $post_id = get_the_ID();
                ?>
                <div class="col-sm-4 col-md-4">
                    <div class="lastest-posts-item wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="lastest-posts-img">
                            <?php the_post_thumbnail('img-service'); ?>
                            <span></span>
                        </div>
                        <div class="lastest-posts-info">
                            <h3><?php echo _substr(get_the_title(), 80); ?></h3>
                            <p><?php echo _substr(get_the_excerpt(), 70); ?></p>
                            <a href="<?php the_permalink(); ?>">
                            <?php agilsun_multilanguae_static_text("View more detail","Xem chi tiết"); ?>
                            </a>
                        </div>
                    </div>
                </div>
                <?php
                    endwhile;
                    wp_reset_query();
                ?>     
            </div>
            <div class="view-all">
            <a href="<?php bloginfo('url'); ?>/category/blog">
                <?php agilsun_multilanguae_static_text("View all","Xem tất cả"); ?>
            </a></div>
        </div>
    </section><!--/#lastest-posts-->


    <section id="contact">
        <?php echo get_field('google_map', 15); ?>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6 info">
                            <?php echo get_field('info', 15); ?>
                    </div>
                    <div class="col-sm-4 col-md-4 col-sm-offset-2">
                        <div class="contact-form">
                            <?php $page_id = 43;?>
                            <?php agilsun_get_page_content($page_id); ?>
                            <!-- <form id="main-contact-form" name="contact-form" method="post" action="#">
                                <div class="form-group">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control" placeholder="Your Email Address" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="subject" class="form-control" placeholder="Your phone number" required>
                                </div>
                                <div class="form-group">
                                    <textarea name="message" class="form-control" rows="8" placeholder="Message" required></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary btn-send-message">SEND</button>
                            </form> -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#contact-->

<?php get_footer(); ?>
