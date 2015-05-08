<?php

/**
 * Remove Advance Customfiel Menu Page
 */
function remove_acf_menu()
{
	remove_menu_page('edit.php?post_type=acf');
}
//add_action( 'admin_menu', 'remove_acf_menu', 999 );
/**
 * Remove Menu Page
 */
function agilsun_remove_menu_pages() {
	remove_menu_page('tools.php');
	remove_menu_page('plugins.php');
	//remove_menu_page('edit-comments.php');
	remove_submenu_page( 'index.php', 'update-core.php' );
	//remove_menu_page('edit.php?post_type=acf');
	//remove_submenu_page( 'themes.php', 'customize.php' );
}
add_action( 'admin_menu', 'agilsun_remove_menu_pages' );

/**
 * Disable Auto-Saving
 */
function agilsun_disable_autosave(){
    wp_deregister_script('autosave');
}
add_action( 'wp_print_scripts', 'agilsun_disable_autosave' );

/**
 * Remove Editor From Admin Appearance Menu
 */
function agilsun_remove_the_editor() {
	remove_action('admin_menu', '_add_themes_utility_last', 101);
}
add_action('_admin_menu', 'agilsun_remove_the_editor', 1);

/**
 * Hide Help Tabs
 */
function agilsun_remove_help_tabs() {
    $screen = get_current_screen();
    $screen->remove_help_tabs();
}
add_action('admin_head', 'agilsun_remove_help_tabs');

/**
 * Remove menu tabs from the top toolbar
 */
function agilsun_config_admin_bar() {
	//call the global adminbar var
	global $wp_admin_bar;
	// hide the WP logo
	$wp_admin_bar->remove_menu('wp-logo');
	// hide link to the dashboard
	//$wp_admin_bar->remove_menu('dashboard');
	//hide links to WP
	//$wp_admin_bar->remove_menu('about');
	// To remove Update Icon/Menu
   	$wp_admin_bar->remove_menu('updates');
	$wp_admin_bar->remove_menu('wporg');
	$wp_admin_bar->remove_menu('documentation');
	$wp_admin_bar->remove_menu('support-forums');
	$wp_admin_bar->remove_menu('feedback');
	// To remove Comments Icon/Menu
   	$wp_admin_bar->remove_menu('comments');
}
add_action('wp_before_admin_bar_render', 'agilsun_config_admin_bar');

/**
 * Hook for wp-admin logo
 */
function agilsun_login_logo_url() {
	return get_bloginfo('url');
}
add_filter('login_headerurl', 'agilsun_login_logo_url');

function agilsun_login_logo_url_title() {
	return 'Agilsun';
}
add_filter('login_headertitle', 'agilsun_login_logo_url_title');

/**
* Hide Upgrade Message in Dashboar 
**/
add_action('admin_menu','wphidenag');
function wphidenag() {
remove_action( 'admin_notices', 'update_nag', 3 );
}

/**
* Change logo
**/
function my_login_logo() { ?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png);
            padding-bottom: 30px;
            background-size: 177px 49px;
            width: 177px;
            height: 49px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

/**
 * Hiding Unwanted WordPress Dashboard Widgets
 * Requires WordPress 3.1+
 * @author Mr Tien<tien06051992@gmail.com>
 */
add_action('wp_dashboard_setup', 'wpc_dashboard_widgets');
function wpc_dashboard_widgets() {
	// Globalize the metaboxes array, this holds all the widgets for wp-admin
	global $wp_meta_boxes;
	//Today widget
	#unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	//Last comments
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	//Incoming links
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	//Plugins
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	//Other WordPress News 
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
	//QuickPress
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	//WordPress Blog 
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	//Recent Drafts
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	//Recent Drafts
	unset($wp_meta_boxes['dashboard']['normal']['core']['icl_dashboard_widget']);
}



/**
 * Config Welcome Dashboard Metaboxes
 * Requires WordPress 3.1+
 * @author Mr Tien<tien06051992@gmail.com>
 */
function st_welcome_panel() {
	echo
	'<div class="welcome-panel-content">'
		. '<h1 style="color: #2c96d6;">Welcome to Travel Margazine</h1>'
		. '<a href="' . home_url() . '" style="outline-style: none">'
			. '<img title="D-Bridge" src="'
			. get_bloginfo("template_directory")
			. '/img/logo.png" >'
		. '</a>'
	. '</div>';
}
remove_action('welcome_panel', 'wp_welcome_panel');
add_action('welcome_panel', 'st_welcome_panel');

/**
 * Add height for category choose
 */
function agilsun_admin_css() { ?>
	<style type="text/css" media="screen">
		#welcome-panel {
			background: #fff;
		}
	</style> <?php
}
add_action( 'admin_head', 'agilsun_admin_css' );

