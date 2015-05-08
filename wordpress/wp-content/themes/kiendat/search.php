<?php
/**
 * Template Name: travel
 * @package travel
 * Author: 
 */
get_header();
$cat = get_query_var('cat');
$yourcat = get_category($cat);
?>

    <div class="row">
      <div class="bredcrumb">
        <a href="<?php bloginfo('url'); ?>" class="index-breadcrumb">Result for</a><span> <?php echo get_search_query(); ?></span>
      </div>
      <div class="main-content">
        <!--left-content-->
        <div class="col-md-8">
          <div class="title">Result</div>
          <?php
                global $query_string;

                $query_args = explode("&", $query_string);
                $search_query = array();

                foreach($query_args as $key => $string) {
                    $query_split = explode("=", $string);
                    $search_query[$query_split[0]] = urldecode($query_split[1]);
                } // foreach

                $search = new WP_Query($search_query);
            ?>
            <?php if($search->have_posts()) : ?>
            <?php  while($search->have_posts()) : $search->the_post(); ?>
              <div class="post-item">
                <?php the_post_thumbnail('img-post-item'); ?>
                <a href="<?php the_permalink(); ?>"><h2><?php echo _substr(get_the_title(), 80); ?></h2></a>
                <p><?php echo _substr(get_the_excerpt(), 300); ?></p>
              </div>
            <?php endwhile; endif;?>    
         <div class="col-md-12 paging-travel">
         <?php wp_pagenavi(); ?>
         <?php wp_reset_query();?>
         </div>
        </div>
        <!--/left-content-->
        <!--right-content-->
       <?php get_sidebar(); ?>
        <!--/right-content-->
      </div>
    </div>
<?php get_footer(); ?>