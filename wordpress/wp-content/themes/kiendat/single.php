<?php
get_header( 'second' );
$cat = get_query_var('cat');
$yourcat = get_category($cat);
if (have_posts()) : the_post();
$post_id = get_the_ID();
?>

<section id="single">
  <div class="container">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
        <div class="bredcrumb">
          <?php if(qtrans_getLanguage() == "vi") : ?>
            <a href="<?php bloginfo('url'); ?>" class="index-breadcrumb">Trang chủ > </a><span><?php echo $yourcat->name; ?></span>
          <?php endif ?>
          <?php if(qtrans_getLanguage() == "en") : ?>
             <a href="<?php bloginfo('url'); ?>" class="index-breadcrumb">Home > </a><span><?php echo $yourcat->name; ?></span>
          <?php endif ?>
        </div><!--/bredcrumb-->
      </div><!--/col-sm-8 col-sm-offset-2-->

      <div class="col-sm-8 col-sm-offset-2">
        <h2><?php the_title(); ?></h2>
        <p class="date"><?php the_time('m/d/y');?></p>
        <h5 class="name-author"><?php the_author(); ?> </h5>
        <div class="content">
          <?php the_content();?>
        </div><!--/content-->
      </div><!--/col-sm-8 col-sm-offset-2-->
    </div><!--/row-->
  </div><!--/container-->
</section>
<?php endif; ?>
<?php get_footer(); ?>