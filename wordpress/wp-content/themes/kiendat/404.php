<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<!--main-->
    <div class="row">
      <div class="bredcrumb">
        <a href="<?php bloginfo('url'); ?>" class="index-breadcrumb">Home > </a><span>Error</span>
      </div>
      <div class="main-content">
        <!--left-content-->
        <div class="col-md-8">
          <h3 class="error">Error 404</h3>
        </div>
        <!--/left-content-->
        <!--right-content-->
       <?php get_sidebar(); ?>
        <!--/right-content-->
      </div>
    </div>

<?php get_footer(); ?>
