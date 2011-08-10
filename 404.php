<?php
/**
 * @package WordPress
 * @subpackage SMPWide
 */
get_header();?>
<body>
<?php include(TEMPLATEPATH . '/absnav.php'); ?>
<div id="topbar">
	<div id="topleftcell">
				<a href="http://localhost:8888/smp29/freebies" title="Git yer Free tracks 'ere" target="_self"><img src="<?php bloginfo('template_directory'); ?>/images/internal/rotator.php" alt="Free Tracks" /></a>
				</div><!-- end topleftcell -->
		 <div id="buckle" class="buk2"></div><!-- end buckle -->
	<div id="toprightcell"><a href="http://localhost:8888/smp29/freebies" title="Brand New! Stable Tracks" target="_self"><img src="<?php bloginfo('template_directory'); ?>/images/internal/rotator2.php" alt="Free Tracks" /></a></div><!-- end toprightcell -->
</div> <!-- end topbar -->
<div id="belt" >
<div id="lpanel" class="lpane">
	<div id="lateWid"><h2 class="TopPony">Top Of The Ponies</h2><?php echo nzshpcrt_latest_product(); ?></div>
</div>
<div class="coda-slider-wrapper">
	<div class="coda-slider preload" id="coda-slider-1">									
						<h2 id="oops" class="center">Pony says no.....We can't find that</h2>
						<div id="img_cnt"></div>
						<?php get_search_form(); ?>		
	</div><!-- end coda-slider-1 -->
</div><!-- end coda-slider-wrapper -->
<div id="rpanel"><?php include(TEMPLATEPATH . '/stab_bar.php'); ?></div>
</div><!-- end belt -->
<div id="shadow"></div>
 <!-- end page -->
 <?php get_footer(); ?>
</body>
</html>

