<?php
get_header( 'second' );
$cat = get_query_var('cat');
$yourcat = get_category($cat);
?>
    <!--main-->
  <section id="category">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="bredcrumb">
            <?php if(qtrans_getLanguage() == "vi") : ?>
              <a href="<?php bloginfo('url'); ?>" class="index-breadcrumb">Trang chủ > </a><span><?php echo $yourcat->name; ?></span>
            <?php endif ?>
            <?php if(qtrans_getLanguage() == "en") : ?>
               <a href="<?php bloginfo('url'); ?>" class="index-breadcrumb">Home > </a><span><?php echo $yourcat->name; ?></span>
            <?php endif ?>
          </div><!--/bredcrumb-->
        </div><!--/col-sm-8 col-sm-offset-2-->
        <div class="col-sm-3 side-bar">
          <?php if(qtrans_getLanguage() == "vi") : ?>
            <h4 class="title">Bài viết xem nhiều</h4>
          <?php endif ?>
          <?php if(qtrans_getLanguage() == "en") : ?>
            <h4 class="title">Popular post</h4>
          <?php endif ?>
          <?php dynamic_sidebar('lastest-posts'); ?> 
        </div><!--/side-bar-->
        <div class="col-sm-9 img-post-item">
            <?php while (have_posts()) : the_post();?>
                <div class="post-item">
                  <div class="row">
                    <div class="col-sm-4">
                      <?php the_post_thumbnail('img-category'); ?>
                    </div>
                    <div class="col-sm-8">
                    <a href="<?php the_permalink(); ?>"><h2><?php echo _substr(get_the_title(), 80); ?></h2></a>
                    <p><?php echo _substr(get_the_excerpt(), 300); ?></p>
                    </div>
                    </div>
                </div>
            <?php endwhile; ?>
        </div><!--/col-sm-12 col-sm-offset-2-->
        <div class="col-sm-9 col-sm-offset-3">
          <?php wp_pagenavi(); ?>
        </div>
      </div><!--/row-->
    </div><!--container-->
  </section>
    
<?php get_footer(); ?>