<div id="absmain">
	<ul id="navigationMenu">
	    <li>
		    <a class="home" href="<?php bloginfo('url'); ?>">
	            <span>Home</span>
	        </a>
	    </li>
	    <li>
	    	<a class="blog" href="<?php bloginfo('url'); ?>/stalls/smpstudio">
	            <span>Blog</span>
	        </a>
	    </li>    
	    <li>
		     <a class="gallery" href="<?php bloginfo('url'); ?>/stalls/smpgallery">
	            <span>Galleria</span>
	         </a>
	    </li>
	    <li>
	    	<a class="stores" href="<?php bloginfo('url'); ?>/tracks-page/smp_albums">
	            <span>Stores</span>
	        </a>
	    </li>    
	    <li>
	    	<a class="contact" href="<?php bloginfo('url'); ?>/contact">
	            <span>Contacts</span>
	        </a>
	    </li>
	    <li>
	    	<a class="cart" href="#">
	            <span>Cart</span>
	        </a>
	    </li>
	</ul>
	<?php include(TEMPLATEPATH . '/wpsc-cart_widget.php'); ?>   
</div>
