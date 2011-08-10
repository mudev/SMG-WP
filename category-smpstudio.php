<?php
/**
 * @package WordPress
 * @subpackage SMPWide_Theme
 */
get_header(); 
?>
<div id="topbar_home">
				<div id="topleftcell">
				<a href="http://localhost:8888/smp29/freebies" title="Git yer Free tracks 'ere" target="_self"><img src="<?php bloginfo('template_directory'); ?>/images/internal/rotator.php" alt="Free Tracks" /></a>
				</div><!-- end topleftcell -->
 				 <div id="buckle" class="buk3">
	 				 <h2 class="galh">Studio Blog</h1>
				</div><!-- end buckle -->
				<div id="toprightcell"><a href="http://localhost:8888/smp29/freebies" title="Brand New! Stable Tracks" target="_self"><img src="<?php bloginfo('template_directory'); ?>/images/internal/rotator2.php" alt="Free Tracks" /></a></div><!-- end toprightcell -->
			</div>
<!-- 	 LOOP START -->
			<div id="belt" >
				<div id="lpanel"><?php echo myshouts_show(); ?></div>
						<div class="sliderswap">
								<p id="catshow"></p>
									<?php if (function_exists('wp_paginate')){wp_paginate();}?>
									<?php if (have_posts()) : while (have_posts()) : the_post(); ?>					
										<h2 id="styleh2" class="title"><?php the_title(); ?></h2>
										<div class="pbody"><?php the_content(); ?></div>						
								<?php endwhile; ?>
								<?php endif; ?>
								<div class="navigation">
									<?php if (function_exists('wp_paginate')){wp_paginate();}?>
								</div>	
						</div><!-- end sliderswap -->
				<div id="rpanel"><?php include(TEMPLATEPATH . '/stab_bar.php'); ?></div>
			</div> <!-- end belt  -->
			<div id="shadow"></div>
			<?php get_footer(); ?>
 <!-- end page -->
</html>














