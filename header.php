<?php
/**
 * @package WordPress
 * @subpackage SMPWide_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title> 
 <?php if (function_exists('is_tag') && is_tag()) { 
  single_tag_title('Tag Archive for &quot;'); echo '&quot; - '; 
 } elseif (is_archive()) { 
  wp_title(''); echo ' Archive - '; 
 } elseif (is_search()) { 
  echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; 
 } elseif (!(is_404()) && (is_single()) || (is_page())) { 
  wp_title(''); echo ' - '; 
 } elseif (is_404()) { 
  echo 'Not Found - '; 
 } 
 if (is_home()) { 
  bloginfo('name'); echo ' - '; bloginfo('description');
 } else { 
  bloginfo('name'); 
 } 
 if ($paged > 1) { 
  echo ' - page '. $paged; 
 } ?> 
</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
<?php wp_head(); ?>
<!-- comment change this ID for the hidden page when db setup on server -->
 <?php if ($post->ID == 100) { echo '<meta name="robots" content="noindex,noarchive">'; }?>
 <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/j/init.js" ></script>
 </head>
<body <?php body_class(); ?>>
<?php include(TEMPLATEPATH . '/absnav.php'); ?>
<div id="page">
<div id="header" role="banner">
	<div id="headerimg">
		<?php include(TEMPLATEPATH . '/navlist.php'); ?>
		<h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
		<div class="description"><?php bloginfo('description'); ?></div>
	</div>
  <div id="top_trans"></div>
</div>