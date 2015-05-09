<?php
get_header();
$categories = get_the_category();

if (have_posts()) : the_post();
$post_id = get_the_ID();
?>

<section id="single">
  <div class="container">
    <div class="row">
       <div class="col-sm-8 col-sm-offset-2">
        <h2><?php the_title(); ?></h2>
        <p class="date"><?php the_time('m/d/y');?></p>
        <h5 class="name-author"><?php the_author(); ?> </h5>
        <div class="content">
          <?php the_content();?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>
<?php get_footer(); ?>