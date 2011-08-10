<?php
/**
 * @package WordPress
 * @subpackage SMPWide_Theme
 Template Name: Contact
  */
get_header(); 
?>
<?php include(TEMPLATEPATH . '/absnav.php'); ?>
<div id="topbar">
	<div id="topleftcell">
		<a href="http://localhost:8888/smp29/freebies" title="Git yer Free tracks 'ere" target="_self"><img src="<?php bloginfo('template_directory'); ?>/images/internal/rotator.php" alt="Free Tracks" /></a>
	</div><!-- end topleftcell -->
 	<div id="buckle" class="buk4">
	 	<h2 class="conh">Contact Stable</h1>
	</div><!-- end buckle -->
	<div id="toprightcell"><a href="http://localhost:8888/smp29/freebies" title="Brand New! Stable Tracks" target="_self"><img src="<?php bloginfo('template_directory'); ?>/images/internal/rotator2.php" alt="Free Tracks" /></a></div><!-- end toprightcell -->
	<div id="belt" >
		<div id="lpanel" class="lpane">
			<div id="lateWid">
				<h2 class="TopPony">Top Of The Ponies</h2>
				<?php echo nzshpcrt_latest_product(); ?>
			</div>
		</div>
		<div class="sliderswap">
<!-- 	 .......................LOOP START.................................................... -->					
		<?php if (have_posts()) : ?>
			<?php $count = 0; ?>				 
<!--		if there are posts to display, set the count to zero and begin the loop
						if there are posts to display, process any code included here only once
						display any code output from this region above the entire set of posts	-->
			<?php while (have_posts()) : the_post(); ?>
			<?php $count++; ?>
<!--		for each post, increase the count variable by one and process any code included here
the output of any code included here will be displayed above the content of every post-->
			<?php if ($count == 1) : ?>
<!--if this is the first post, process any code that is specified in this region
process any code specified in this region before the content of the first post-->
			<?php the_content(); ?> 
<!-- display the full content of the first post only -->
<!-- process any code specified in this region after the content of the first post -->
			<?php else : ?>
<!-- if this is not the first post, process any code specified in this region
process any code specified in this region before the content of each post -->
				<?php the_excerpt(); ?>
<!--display only the excerpt for all other posts  
for all posts except the first, process this code below each post-->
			<?php endif; ?>
<!--for each post, including the first, process any code included here
any code output will be displayed below the content of every post-->
			<?php endwhile; ?>
<!--stop the post loop and process any code included here only once
any code output will be displayed below the entire set of posts-->
			<?php else : ?>
<!--if there are no posts to display, process any code that is included here
	the output of any code included here will be displayed instead of posts-->
			<?php endif; ?>
<!-- any code included here occurs after the wordpress loop and is always displayed -->
		</div><!-- end sliderswap -->
		<div id="rpanel"><?php include(TEMPLATEPATH . '/stab_bar.php'); ?></div>
	</div> <!-- end belt  -->
	<?php get_footer(); ?>
</div><!-- end page -->
</html>
