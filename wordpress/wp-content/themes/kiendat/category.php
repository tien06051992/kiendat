<?php
get_header( 'second' );
$cat = get_query_var('cat');
$yourcat = get_category($cat);
?>
    <!--main-->
  <section id="category">
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
            <?php while (have_posts()) : the_post();?>
                <div class="post-item">
                  <div class="row">
                    <div class="col-sm-4 img-thumbnail">
                      <?php the_post_thumbnail('img-service'); ?>
                    </div>
                    <div class="col-sm-8">
                    <a href="<?php the_permalink(); ?>"><h2><?php echo _substr(get_the_title(), 80); ?></h2></a>
                    <p><?php echo _substr(get_the_excerpt(), 300); ?></p>
                    </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div><!--/col-sm-12 col-sm-offset-2-->
        <div class="col-sm-8 col-sm-offset-2">
          <?php wp_pagenavi(); ?>
        </div>
      </div><!--/row-->
    </div><!--container-->
  </section>
    
<?php get_footer(); ?>