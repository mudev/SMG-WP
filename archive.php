<?php
/**
 * @package WordPress
 * @subpackage SMPWide_Theme
 */

get_header(); 
?>
<div id="topbar">
	<div id="topleftcell">
	</div><!-- end topleftcell -->
	<div id="buckle">
		<?php if (have_posts()) : ?>						
			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
			<?php /* If this is a category archive */ if (is_category()) { ?>
			<h2 class="pagetitle">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</h2>
			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
			<h2 class="pagetitle">Posts Tagged &#8216;<?php single_tag_title(); ?>&#8217;</h2>
			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
			<h2 class="pagetitle">Archive for <?php the_time('F jS, Y'); ?></h2>
			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
			<h2 class="pagetitle">Archive for <?php the_time('F, Y'); ?></h2>
	 	  <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
			<h2 class="pagetitle">Archive for <?php the_time('Y'); ?></h2>
		  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
			<h2 class="pagetitle">Author Archive</h2>
	 	  <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
			<h2 class="pagetitle">Blog Archives</h2>
	 	  <?php } ?>
		<div class="navigation">
			<?php if (function_exists('wp_paginate')){
			wp_paginate();
			}?>
		</div>
	</div>
	<div id="toprightcell"><!-- end toprightcell -->
	</div>
</div>
<!-- 	 LOOP START -->
<div id="belt" >
	<div id="lpanel"><?php echo wpsc_shopping_cart(); ?></div>
	<div class="coda-slider-wrapper">
		<div class="coda-slider preload" id="coda-slider-3">
		<?php while (have_posts()) : the_post(); ?>
			<div class="panel">
				<div class="panel-wrapper">
				<div <?php post_class()?>>
					<h3 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>" rel="bookmark"title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
					<small><?php the_time('l, F jS, Y') ?></small>
					<div class="entry">
						<?php the_content(); ?>
					</div>
					<p class="postmetadata"><?php the_tags('Tags: ', ', ', '<br />'); ?> Posted in <?php the_category(', ') ?> | <?php edit_post_link('Edit', '', ' | '); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				</div>
				</div><!-- end wrapper -->
			</div><!-- end panel -->
		<?php endwhile; ?>
		<?php if(function_exists('wp_paginate')) {wp_paginate();} ?>
		<?php else :
			if ( is_category() ) { // If this is a category archive
			printf("<h2 class='center'>Sorry, but there aren't any posts in the %s category yet.</h2>", single_cat_title('',false));
			} else if ( is_date() ) { // If this is a date archive
			echo("<h2>Sorry, but there aren't any posts with this date.</h2>");
			} else if ( is_author() ) { // If this is a category archive
			$userdata = get_userdatabylogin(get_query_var('author_name'));
			printf("<h2 class='center'>Sorry, but there aren't any posts by %s yet.</h2>", $userdata->display_name);
			} else {
			echo("<h2 class='center'>No posts found.</h2>");
			}
			get_search_form();													
			endif; ?>
		</div><!-- end coda-slider-3 -->
	</div><!-- end coda-slider-wrapper -->
	<div id="rpanel2"><?php include(TEMPLATEPATH . '/stab_bar.php'); ?></div>
</div><!-- end belt -->
<div id="shadow"></div>
<?php get_footer();?>
<!-- end page -->
</html>
