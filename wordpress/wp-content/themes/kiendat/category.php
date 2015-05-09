<?php
get_header();
$cat = get_query_var('cat');
$yourcat = get_category($cat);
?>
    <!--main-->
  <section id="category">
    <div class="row">
      <div class="col-sm-8 col-sm-offset-2">
      <div class="bredcrumb">
        <a href="<?php bloginfo('url'); ?>" class="index-breadcrumb">Home > </a><span><?php echo $yourcat->name; ?></span>
      </div>
      </div>
      <div class="col-sm-12 col-sm-offset-2">
        <div class="main-content">
          <!--left-content-->
          <div class="col-md-8">
            <div class="title">The Best Of Travel</div>
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
           <div class="col-md-12 paging-travel">
           <?php wp_pagenavi(); ?>
           </div>
          </div>
          <!--/left-content-->
          <!--right-content-->
         <?php get_sidebar(); ?>
          <!--/right-content-->
        </div>
      </div>
    </div>
  </section>
    
<?php get_footer(); ?>