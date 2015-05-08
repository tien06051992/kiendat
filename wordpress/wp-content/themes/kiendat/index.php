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
    <section id="cta2">
        <div class="container">
            <div class="text-center">
                <h2 class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms"><span>MULTI</span> IS A CREATIVE HTML TEMPLATE</h2>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">Mauris pretium auctor quam. Vestibulum et nunc id nisi fringilla <br />iaculis. Mauris pretium auctor quam.</p>
                <p class="wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms"><a class="btn btn-primary btn-lg" href="#">Get started now</a></p>
                <img class="img-responsive wow fadeIn" src="images/cta2/cta2-img.png" alt="" data-wow-duration="300ms" data-wow-delay="300ms">
            </div>
        </div>
    </section><!--cta2-->


    <section id="services" >
        <div class="container">

            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Services</h2>
                <p class="text-center wow fadeInDown short-intro">Magnis modipsae que lib voloratati andigen daepeditem quiate re porem aut labor. Laceaque quiae sitiorem rest non restibusaes maio es dem tumquam core posae volor remped modis volor.</p>
            </div>

            <div class="row">
                <div class="features">
                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="0ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-heart-o fa-4x"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">UX design</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="100ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">UI design</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->

                    <div class="col-md-4 col-sm-6 wow fadeInUp" data-wow-duration="300ms" data-wow-delay="200ms">
                        <div class="media service-box">
                            <div class="pull-left">
                                <i class="fa fa-star-o"></i>
                            </div>
                            <div class="media-body">
                                <h4 class="media-heading">SEO Services</h4>
                                <p>Backed by some of the biggest names in the industry, Firefox OS is an open platform that fosters greater</p>
                            </div>
                        </div>
                    </div><!--/.col-md-4-->
                
                </div>
            </div><!--/.row-->    
        </div><!--/.container-->
    </section><!--/#services-->

    <section id="project">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">project</h2>
            </div>

            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="project-item wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="project-img">
                            <img class="img-responsive" src="images/project/img1.png" alt="">
                        </div>
                        <div class="project-info">
                            <h3>Jane Man</h3>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div><!--/col-md-4-->
                
                <div class="col-sm-4 col-md-4">
                    <div class="project-item wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="project-img">
                            <img class="img-responsive" src="images/project/img2.png" alt="">
                        </div>
                        <div class="project-info">
                            <h3>Jane Man</h3>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div><!--/col-md-4-->
                <div class="col-sm-4 col-md-4">
                    <div class="project-item wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="project-img">
                            <img class="img-responsive" src="images/project/img2.png" alt="">
                        </div>
                        <div class="project-info">
                            <h3>Jane Man</h3>
                            <span>Project Manager</span>
                        </div>
                    </div>
                </div><!--/col-md-4-->
            </div>

            <div class="divider"></div>

        </div>
    </section><!--/#project-->


    <?php /* <section id="about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">About Us</h2>
            </div>

            <div class="row">
                <div class="mytimeline-wrap">
                  <section id="cd-timeline" class="cd-container">
                    <div class="cd-timeline-block wow fadeInLeft">
                      <div class="cd-timeline-img cd-picture">
                        <div class="cd-date course">April 2015</div>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <h2 class="school-name">Cao đẳng kỹ thuật cao thắng</h2>
                        <p class="brand">Công nghệ thông tin</p>
                        <p class="info">Học ngu chết mẹ, mém rớt, ra trường là một may mắn lớn!</p>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block wow fadeInRight">
                      <div class="cd-timeline-img cd-movie">
                        <div class="cd-date course"><p class="start">2014</p>-<p class="end">2015</p></div>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <h2 class="school-name">Đại học Ăn Nhậu</h2>
                        <p class="brand">Nhà báo</p>
                        <p class="info">Thủ khoa ngành báo đời, còn sống đến bây giờ là một hạnh phúc!</p>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block wow fadeInLeft">
                      <div class="cd-timeline-img cd-picture">
                        <div class="cd-date course"><p class="start">2015</p>-<p class="end">2016</p></div>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <h2 class="school-name">Đại học trộm chó</h2>
                        <p class="brand">Á khoa ngành trộm chó chuyên nghiệp</p>
                        <p class="info">Trộm chó và bị bắt, bị đánh gần chết, còn sống đến 2016 phải nói là kỳ tích. Công nhận thịt chó ngon!</p>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->

                    <div class="cd-timeline-block wow fadeInRight">
                      <div class="cd-timeline-img cd-location">
                        <div class="cd-date course"><p class="start">2016</p>-<p class="end">2017</p></div>
                      </div> <!-- cd-timeline-img -->

                      <div class="cd-timeline-content">
                        <h2 class="school-name">Đại học Cambridge</h2>
                        <p class="brand">Công nghệ thông tin</p>
                        <p class="info">Sau trận đánh vì ăn trộm chó, đã thay đổi và hoàn lương, tốt nghiệp thủ khoa ngành công nghệ thông tin đại học Cambridge.!</p>
                      </div> <!-- cd-timeline-content -->
                    </div> <!-- cd-timeline-block -->
                  </section> <!-- cd-timeline -->
                  <!-- END TIMELINE -->
                </div>
            </div><!--/row-->
        </div><!--/about-->
    </section><!--/#about--> */ ?>

    <section id="lastest-posts">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">lastest posts</h2>
            </div>

            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="lastest-posts-item wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="lastest-posts-img">
                            <img class="img-responsive" src="images/project/img1.png" alt="">
                            <span></span>
                        </div>
                        <div class="lastest-posts-info">
                            <h3>TITLE 01</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="">View more detail</a>
                        </div>
                    </div>
                </div><!--/col-md-4-->
                
                <div class="col-sm-4 col-md-4">
                    <div class="lastest-posts-item wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="lastest-posts-img">
                            <img class="img-responsive" src="images/project/img2.png" alt="">
                            <span></span>
                        </div>
                        <div class="lastest-posts-info">
                            <h3>TITLE 01</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="">View more detail</a>
                        </div>
                    </div>
                </div><!--/col-md-4-->
                <div class="col-sm-4 col-md-4">
                    <div class="lastest-posts-item wow fadeInUp" data-wow-duration="400ms" data-wow-delay="100ms">
                        <div class="lastest-posts-img">
                            <img class="img-responsive" src="images/project/img2.png" alt="">
                            <span></span>
                        </div>
                        <div class="lastest-posts-info">
                            <h3>TITLE 01</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            <a href="">View more detail</a>
                        </div>
                    </div>
                </div><!--/col-md-4-->
            </div>
            <div class="view-all"><a href="">view all</a></div>
    </section><!--/#lastest-posts-->


    <section id="contact">
        <div id="google-map" style="height:650px" data-latitude="52.365629" data-longitude="4.871331"></div>
        <div class="container-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 col-md-6">
                            <address>
                             Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit,.<br>

                                Khlong Tan Nuea, Wattana<br>
                                Bangkok 10110, Thailand<br><br>

                                <abbr title="Phone">T: +662 107 2027<br>
                                <abbr title="Phone">F: +662 711 573<br><br>
                                E: info@kiendats.com<br>
                                W: www.kiendats.com<br>
                            </address>
                    </div>
                    <div class="col-sm-4 col-md-4 col-sm-offset-2">
                        <div class="contact-form">

                            <form id="main-contact-form" name="contact-form" method="post" action="#">
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
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section><!--/#contact-->

<?php get_footer(); ?>
