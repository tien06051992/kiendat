    <footer id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 copy-right">
                    &copy; 2015 KIENDAT. All rights reserved.
                </div><!--/copy-right-->
                <div class="col-md-4 col-sm-12 menu-footer">
                    <ul>
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
                </div><!--/ menu-footer-->
                <div class="col-md-2 col-sm-12 menu">
                    <ul class="social-icons">
                        <li><a href="<?php echo get_field('facebook', 15); ?>"><i class="fa fa-twitter-square fa-3x"></i></a></li>
                        <li><a href="<?php echo get_field('twitter', 15); ?>"><i class="fa fa-facebook-square fa-3x"></i></a></li>
                    </ul>
                </div><!--/menu-->
            </div><!--/row-->
        </div><!--/container-->
    </footer><!--/#footer-->

    <div id="go-to-top" style="display: block;"><i class="fa fa-angle-up"></i></div>
    <!--/#go-to-top-->
    
    <?php wp_footer(); ?>
    <script src="<?php bloginfo( 'template_url' ) ?>/js/jquery.js"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/js/bootstrap.min.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/js/owl.carousel.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/js/mousescroll.js"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/js/smoothscroll.js"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/js/jquery.prettyPhoto.js"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/js/jquery.isotope.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/js/jquery.inview.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/js/wow.min.js"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/js/main.js"></script>
    <script src="<?php bloginfo( 'template_url' ) ?>/js/kiendat.js"></script>
</body>
</html>