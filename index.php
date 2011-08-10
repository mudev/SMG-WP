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
			<h2 class="center">excerpts</h2>
			<?php wp_tag_cloud(); ?>
				</div><!-- end buckle -->
				<div id="toprightcell"></div><!-- end toprightcell -->
			</div>
<div class="coda-slider-wrapper">
	<div class="coda-slider preload" id="coda-slider-1">
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			<div class="panel">
				<div class="panel-wrapper">
						<h2 class="title"><?php the_title(); ?></h2>
						<?php the_content(); ?>				
				</div><!-- end wrapper -->
			</div><!-- end panel -->
		<?php endwhile; ?>
		<?php endif; ?>
		</div><!-- end coda-slider-1 -->
		</div><!-- end coda-slider-wrapper -->
			<div id="lpanel"><?php echo nzshpcrt_shopping_basket(); ?></div>
			<div id="rpanel"><?php include(TEMPLATEPATH . '/stab_bar.php'); ?></div>
			<?php get_footer(); ?>	
 <!-- end page -->
