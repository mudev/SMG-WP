<?php
/**
 * @package WordPress
 * @subpackage SMPWide_Theme
 */

get_header(); 
?>
<?php include(TEMPLATEPATH . '/absnav.php'); ?>
			<div id="topbar">
				<div id="topleftcell">
				<a href="http://localhost:8888/smp29/freebies" title="Git yer Free tracks 'ere" target="_self"><img src="<?php bloginfo('template_directory'); ?>/images/internal/rotator.php" alt="Free Tracks" /></a>
				</div><!-- end topleftcell -->
 				 <div id="buckle" class="buk1">
	 				 <?php single_cat_title(); ?>
				</div><!-- end buckle -->
				<div id="toprightcell"><a href="http://localhost:8888/smp29/freebies" title="Brand New! Stable Tracks" target="_self"><img src="<?php bloginfo('template_directory'); ?>/images/internal/rotator2.php" alt="Free Tracks" /></a></div><!-- end toprightcell -->

			</div>			
			<div id="belt" >
				<div id="lpanel" >
				<div class="lpane">
					<?php echo myshouts_show(); ?>
				</div>
			</div>
				<div class="sliderswap">
									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
												<h2 class="title"><?php the_title(); ?></h2>
												<?php the_content(); ?>				
									<?php endwhile; ?>
									<?php endif; ?>
						</div><!-- end coda-slider-wrapper -->
				<div id="rpanel2"><?php include(TEMPLATEPATH . '/stab_bar.php'); ?></div>
			</div><!-- end belt -->
			<div id="shadow"></div>
		<?php get_footer(); ?>
<!-- end page -->
