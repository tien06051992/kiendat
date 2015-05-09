<?php

/**
 * Query custom get post
 */
function agilsun_query($catogery, $numpost) {
    query_posts(array('category_name' => $catogery, // choose catogery which u want to get
        'posts_per_page' => $numpost, //max num post was got
                )
    );
}

/**
 * Query get all post with cat slug
 */
function agilsun_query_get_all_post($catslug, $numpost) {
    query_posts(array('category_name' => $catslug,
        'posts_per_page' => $numpost));
}

/**
 * Agilsun get post news slide
 */
function agilsun_get_post_news_slide($catogery, $numpost) {
    agilsun_query_get_all_post($catogery, $numpost);
    ?><ul class="slides"><?php
    while (have_posts()) : the_post();
        ?>      <li class="m-thumb entry-image"><a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('msize'); ?>
                <p><?php echo the_title(); ?></p></a>
            </li>
            <?php
        endwhile;
        wp_reset_query();
        ?></ul><?php
}

/**
 * lget all post
 */
function agilsun_get_post_cat() {
    while (have_posts()) : the_post();
        ?>
        <li>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('ssize'); ?>
                <div class="excerpt">
                <h3><?php the_title(); ?></h3>
                <p><?php agilsun_excerpt("agilsun_excerptlength_cat","agilsun_excerptmore"); ?></p>
                </div>
            </a>
        </li>
        <?php
    endwhile;
    wp_reset_query();
}


/**
 * Count facebook comments
 */
function agilsun_fb_comment_count($url)
{
  $json = json_decode(file_get_contents('https://graph.facebook.com/?ids=' . $url));
  return ($json->$url->comments) ? $json->$url->comments : 0;
}

/**
 * get name current category
 */
function agilsun_get_current_cat_name() {
    if (is_category()) {
        $cat = get_query_var('cat');
        $yourcat = get_category($cat);
        agilsun_get_catogery_name($yourcat->slug);
    }
}

/**
 * get post by slug
 */
function agilsun_get_post_cat_by_slug($slug, $numpost) {
    agilsun_query_get_all_post($slug, $numpost);
    while (have_posts()) : the_post();
        ?>
        <li>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail('msize'); ?>
                <p><?php the_title(); ?></p>
            </a>
        </li>
        <?php
    endwhile;
    wp_reset_query();
}




/**
 * Get catagory name by slug
 */
function agilsun_get_catogery_name($slug) {
    $catt = get_category_by_slug($slug);
    echo $catt->name;
}

/**
 * Get permalink catagory by slug
 */
function agilsun_get_permalink_catogery($slug) {
    $catt = get_category_by_slug($slug);
    echo get_category_link($catt->term_id);
}

/**
 * Get permalink page by slug
 */
function agilsun_get_permalink_page($page_title) {
    $page = get_page_by_title($page_title);
    echo get_page_link($page->ID);
}


add_post_type_support('page', 'excerpt');

function agilsun_get_page_excerpt($id) {

    query_posts("page_id=$id");
    while ( have_posts() ) : the_post();
        the_content(); 
    endwhile; 
    wp_reset_query();

}

function agilsun_get_page_content($id) {

    query_posts("page_id=$id");
    while ( have_posts() ) : the_post();
        the_content(); 
    endwhile; 
    wp_reset_query();

}

function agilsun_get_the_slug() {
global $post;
return $post->post_name;
}

function agilsun_the_slug() {
echo agilsun_get_the_slug();
}


/**
 * Excerpt length for Index
 */
function agilsun_excerptlength_cat($length) {
    return 20;
};

/**
 * Excerpt more...
 */
function agilsun_excerptmore($more) {
    return '...';
};

/**
 * Excerpt no more
 */
function agilsun_excerptnomore($more) {
    return '';
};

/**
 * Excerpt length
 */
function agilsun_excerpt($length_callback = '', $more_callback = '') {
     global $post;
     
     if(function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
     }
     
     if(function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
     }
     
     $output = get_the_excerpt();
     $output = apply_filters('wptexturize', $output);
     $output = apply_filters('convert_chars', $output);
     
     echo $output;
};
/**
 * Show static text follow multilanguae
 */
function agilsun_multilanguae_static_text($en = '',$vi = '') {
    $result = "<!--:en-->" . $en . "<!--:--><!--:vi-->" . $vi . "<!--:-->";
    echo qtrans_useCurrentLanguageIfNotFoundUseDefaultLanguage($result);
}