<?php
/**
 * Functions
 * @package QUEEN OF SEO - kiendat
 * @author Ms.Chau Huynh <chaucdth10a@gmail.com>
 */
include_once( 'includes/get-post-function.php' );
include_once( 'includes/remove-dashboard-items.php' );

/**
 * Setup Images Size
 */
function kiendat_imagesize() {
  add_image_size('img-home-top-large', 450, 340, true); // post in index size large
  add_image_size('img-home-top-thumbnail', 210, 104, true); // post in index size thumbnail
  add_image_size('img-post-item', 610, 271, true); // post in category size thumbnail
  add_image_size('img-post-sidebar', 300, 194, true); // post in sidebar size thumbnail
  add_image_size('img-post-thumbnail', 61, 51, true); // post in sidebar size thumbnail
  add_image_size('img-single', 690, 458, true); // post in single
}
add_action('after_setup_theme', 'kiendat_imagesize');

/**
 * Menu Locations
 */
if (function_exists('wp_nav_menu')) {
	function kiendat_wp_my_menus() {
		register_nav_menus(array(
				'header-menu' => __('Header menu')
		));
	}
	add_action('init', 'kiendat_wp_my_menus');
}



/**
 * Excerpt length for Index
 */
/*
 * Substring
 */
function _substr($str, $length, $minword = 3) {
 $sub = '';
 $len = 0;

 foreach (explode(' ', $str) as $word) {
  $part = (($sub != '') ? ' ' : '') . $word;
  $sub .= $part;
  $len += strlen($part);
  
  if (strlen($word) > $minword && strlen($sub) >= $length) {
   break;
  }
 }

 return $sub . (($len < strlen($str)) ? '' : '');
}

/**
 * Pagination
 */
// Pagination
  
  function pagination($pages = '', $range = 4) {  
    $showitems = ($range * 2) + 1;  
   
    global $paged;
     
    if(empty($paged)) $paged = 1;
   
    if($pages == '') {
      global $wp_query;
      $pages = $wp_query->max_num_pages;
      if(!$pages) {
         $pages = 1;
      }
    }
   
    if(1 != $pages) {
      echo '<div class="pagination-tt clearfix">';
       
      echo '<ul>';

      if ($paged > 1) {
      if (qtrans_getLanguage() == 'en') { // English ver 
       echo '<li class="pagination-prev"><a href="' . get_pagenum_link($paged - 1) . '" class="pagenav">Prev</a> </li>';
        }
        else {
        echo '<li class="pagination-prev"><a href="' . get_pagenum_link($paged - 1) . '" class="pagenav">Trước</a> </li>';  
        }
      }
      if ($paged < $pages) {
        if (qtrans_getLanguage() == 'en') { 
       echo '<li class="pagination-next"><a href="' . get_pagenum_link($paged + 1) . '" class="pagenav">Next</a> </li>';
        }
        else {
          echo '<li class="pagination-next"><a href="' . get_pagenum_link($paged + 1) . '" class="pagenav">Sau</a> </li>';

        }
      }
            
      for ($i=1; $i <= $pages; $i++) {
        if (1 != $pages &&( !($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems )) {
          echo ($paged == $i) ? "<li><span>" . $i . "</span></li>" : "<li><a href=\"".get_pagenum_link($i)."\">" . $i . "</a></li>";
        }
      }
      
      echo '</ul>';
      
      echo "</div>\n";
     }
  }

/**
 * Register popular sidebar
 */
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => __('Post Popular', 'www.travel.com'),
        'id' => 'post-popular',
        'description' => 'post-popular',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}



/**
 * Register email sidebar
 */

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => __('Email new letter', 'www.travel.com'),
        'id' => 'email-newletter',
        'description' => 'email-newletter',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h2>',
        'after_title' => '</h2>'
    ));
}
?>