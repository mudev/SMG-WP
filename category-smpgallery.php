<?php
/**
 * @package WordPress
 * @subpackage SMPWide_Theme
 */
get_header(); 
?>
<div id="topbar_home">
				<div id="topleft"></div><!-- end topleftcell -->
 				 <div id="buckle" class="buk2">
					 <h2 class="galh">And now it's time for the Gallery</h1>
 				 </div><!-- end buckle -->
				<div id="topright"></div><!-- end toprightcell -->
			</div> <!-- end topbar -->
<!-- 	 LOOP START -->
			<div id="belt" >
				<div id="smpgal">
					<?php $posts = query_posts($query_string.'&cat=3'); ?>
					<div id="slides">
								<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
								<div class="slide"><h2 class="gal_title"><?php the_title(); ?></h2><?php the_content(); ?></div>
								<?php endwhile; ?>
								<?php endif; ?>
					</div>
				</div><!-- end smpgal-->
			<?php query_posts('cat=3'); ?> 
				<div id="galmenu">
					<?php if (have_posts()) : ?>
					<ul>
						<li class="fbar">&nbsp;</li>
						<?php while (have_posts()) : the_post();?>  
						<li class="menuItem"><a href=""><?php the_post_thumbnail(); ?></a></li>
					<?php endwhile; endif; ?>	
					</ul>
				</div>		
				</div> <!-- end belt  -->
			<?php get_footer(); ?>
 <!-- end page -->
</html>