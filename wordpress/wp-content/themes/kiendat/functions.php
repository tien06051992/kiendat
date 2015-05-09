<?php
/**
 * Functions
 * @package QUEEN OF SEO - kiendat
 * @author Ms.Chau Huynh <chaucdth10a@gmail.com>
 */
include_once( 'includes/get-post-function.php' );
// include_once( 'includes/remove-dashboard-items.php' );

/**
 * Setup Images Size
 */
function agilsun_imagesize() {
  add_image_size('img-service', 358, 291, true); // post in index size large
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'agilsun_imagesize');

/**
 * Menu Locations
 */
if (function_exists('wp_nav_menu')) {
	function agilsun_wp_my_menus() {
		register_nav_menus(array(
				'header-menu' => __('Header menu')
		));
	}
	add_action('init', 'agilsun_wp_my_menus');
}

/**
 * get post of project
 */



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
 * Register laguage chooser
 */
if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => __('Language Chooser', 'www.kiendat.com'),
        'id' => 'language-chooser',
        'description' => 'Language chooser on top header',
        'before_widget' => '',
        'after_widget' => '',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}

