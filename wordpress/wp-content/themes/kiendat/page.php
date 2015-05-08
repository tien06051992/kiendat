<?php
get_header();
$categories = get_the_category();

if (have_posts()) : the_post();
$post_id = get_the_ID();
?>
            <!--main-->
            <div class="row">
              <div class="bredcrumb">
                 <a href="<?php bloginfo('url'); ?>" class="index-breadcrumb">Home ></a>
                 <a href="<?php the_permalink(); ?>" class="active">
                 	<span><?php echo get_category_parents($categories[0]->term_id, true,' '); ?></span>
                 </a>
              </div>
              <!--single-->
                <div class="single">
                  <div class="col-md-3">
                    <h5 class="name-author"><?php the_author(); ?> </h5>
                    <p class="comment-number"><span class="icon-comment"></span><span><?php echo get_comments_number( $post_id ); ?></span></p>
                    <p class="date"><?php the_time('m/d/y');?></p>
                    <p class="time"><?php the_time('g:i a'); ?></p>
                  </div>
                  <div class="col-md-9">
                    <div class="img-feature"><?php the_post_thumbnail('img-single'); ?></div>
                    <h2><?php the_title(); ?></h2>
                    <div class="content">
                    	<?php the_content();?>
                    </div>
                    <div class="comment-form-custom">
                      <?php comment_form( $args, $post_id ); ?>
                      <ol class="list-comment-custom">
                      <?php
                      //Gather comments for a specific page/post 
                      $comments = get_comments(array(
                        'post_id' => $post_id,
                        'status' => 'approve' //Change this to the type of comments to be displayed
                      ));

                      //Display the list of comments

                      wp_list_comments(array(
                          'per_page' => 10, //Allow comment pagination
                          'reverse_top_level' => false, //Show the latest comments at the top of the list
                          'avatar_size'       => 56,
                        ), $comments);
                      ?>
                      </ol>
                    </div>
                  </div>
                </div>
              <!--/single-->
            </div>
<?php endif; ?>
<?php get_footer(); ?>