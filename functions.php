<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
 define( 'TEMPLATE_URL', trailingslashit( get_stylesheet_directory_uri() ) ); 
 // even more smart jquery inclusion :)
add_action( 'init', 'jquery_register' );
add_filter( 'script_loader_src', 'jquery_unversion' );

// register from google and for footer
function jquery_register() {
if ( !is_admin() ) {
    wp_deregister_script( 'jquery' );
    wp_register_script( 'jquery', ( 'http://ajax.googleapis.com/ajax/libs/jquery/1.5.0/jquery.min.js' ), false, '1.5', true );
    wp_enqueue_script( 'jquery' );
    }
}
// remove version tag to improve cache compatibility
function jquery_unversion( $src ) {

if( strpos( $src, 'ajax.googleapis.com' ) )
    $src = remove_query_arg( 'ver', $src );

return $src;
}
function start_js() {
		wp_enqueue_script('jquery_easing', TEMPLATE_URL . 'j/jquery.easing.1.3.js',array('jquery'));
		wp_enqueue_script('codaslider', TEMPLATE_URL . 'j/jquery-coda-slider-2.0.js', array('jquery','jquery_easing'));
		wp_enqueue_script('carousel', TEMPLATE_URL . 'j/jcarousellite_1.0.1.js', array('jquery','jquery_easing'));	
		wp_enqueue_script('ui_core', TEMPLATE_URL . 'j/ui.core.js', array('jquery'));
		wp_enqueue_script('accordion', TEMPLATE_URL . 'j/ui.accordion.js', array('jquery','ui_core'));
 		wp_enqueue_script('appgal', TEMPLATE_URL . 'j/appgal.js', array('jquery')); 
		wp_print_scripts();			
} 
add_action('wp_head', 'start_js');

if ( function_exists( 'add_theme_support' ) )
add_theme_support( 'post-thumbnails' );

function delete_comment_link($id) { 
 if (current_user_can('edit_post')) { 
  echo '| <a href="'.get_bloginfo('wpurl').'/wp-admin/comment.php?a 
ction=cdc&c='.$id.'">Delete</a> '; 
  echo '| <a href="'.get_bloginfo('wpurl').'/wp-admin/comment.php?a 
ction=cdc&dt=spam&c='.$id.'">Spam</a>'; 
 } 
}

$content_width = 450;

automatic_feed_links();

if ( function_exists('register_sidebar') ) {
	register_sidebar(array(
		'before_widget' => '<li id="%1$s" class="widget %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h2 class="widgettitle">',
		'after_title' => '</h2>',
	));
}

