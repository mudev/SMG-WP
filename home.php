<?php
/**
 * @package WordPress
 * @subpackage SMPWide_Theme
 */

get_header(); 
?>
<?php $posts = query_posts('orderby=date&order=ASC&cat=7'); ?>
			<div id="topbar_home">
				<div id="topleftcell">
				<a href="http://localhost:8888/smp29/freebies" title="Git yer Free tracks 'ere" target="_self"><img src="<?php bloginfo('template_directory'); ?>/images/internal/rotator.php" alt="Free Tracks" /></a></div><!-- end topleftcell -->
 				 <div id="buckle" class="buk1"><h1>Off and Running!</h1></div><!-- end buckle -->
				<div id="toprightcell"><a href="http://localhost:8888/smp29/freebies" title="Brand New! Stable Tracks" target="_self"><img src="<?php bloginfo('template_directory'); ?>/images/internal/rotator2.php" alt="Free Tracks" /></a></div><!-- end toprightcell -->
			</div>
			<div id="belt" >
			<div id="lpanel" >
				<div>
					<?php echo myshouts_show(); ?>
				</div>
			</div>
			<!-- 	 LOOP START -->
			<div class="sliderswap">
				<h1>Welcome to Stable Media</h1>
					<?php if (function_exists('wp_paginate')){wp_paginate();}?>
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
							<div class="exc_class">
								<h2 class="title"><?php the_title(); ?></h2>
									<?php the_excerpt(); ?>		
							</div><!-- end exc_class -->		
					<?php endwhile; ?>
					<?php endif; ?>
			</div><!-- end coda-slider-wrapper -->
			<div id="rpanel">
			<?php include(TEMPLATEPATH . '/stab_bar.php'); ?>
			<div id="rpnl2" class="sidebar">
				<?php if (function_exists('vote_poll') && !in_pollarchive()): ?>
					<li>
					   <h2>Polls</h2>
					   <ul>
					      <li><?php get_poll(-2);?></li>
					   </ul>
					   <?php display_polls_archive_link(); ?>
					</li>
					<?php endif; ?>
			</div> <!-- end rpnl2 -->
			</div><!-- end rpanel -->
			</div> <!-- end belt  -->
			<div id="shadow"></div>
			
			<?php get_footer(); ?>
 <!-- end page -->
</html>
