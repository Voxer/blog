<aside id="sidebar" class="small-12 large-3 medium-4  columns">
	<?php do_action('foundationPress_before_sidebar'); ?>
	 <div class="hide-for-small">
	 	<?php the_widget( 'WP_Widget_Search' ); ?> 
	 </div>
	 <section id="subscribe" class="row">
		 <div class="header">
			<h1>
				<strong>Subscribe</strong><br>
				for THE latest<br>
				Voxer News!
			</h1>
		</div>
		<form id="subscribe-form" style="overflow:hidden;">
			<iframe id="subscribe-iframe" src="http://www2.voxer.com/l/52922/2014-10-15/4trr" type="text/html" frameborder="0" allowTransparency="true" ></iframe>
		</form>
	</section>
	<div class="show-for-small-only">
	 	<?php the_widget( 'WP_Widget_Search' ); ?> 
	 </div>
	<?php $instance = array( 'title'   => 'Popular Tags'); ?>
	<?php 
	 	 the_widget( 'WP_Widget_Tag_Cloud', $instance, $args ); 
	 ?> 
	 <br>
	<section id="download-app" class="row">
		<h1>Download our Application</h1>
		<div class="wrapper">
		  	<div class="downloadapp large-4 small-4" >
		  		<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/blog-assets/voxer-ios.png">
		  	</div>
		  	<div class="downloadapp large-4 small-4">
		  		<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/blog-assets/voxer-android.png">
		  	</div>
		  	<div class="downloadapp large-4 small-4">
		  		<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/blog-assets/voxer-windows.png">
		  	</div>
		</div>
		<a href="https://voxer.com/redirect" target="_blank" class="btn">
			Download Voxer >
		</a>
	</section>
	<section id="social-media" class="row nopadding">
		<h1>Stay tuned</h1>
		<div class="large-12 small-12 social-holder">
			<a href="https://twitter.com/voxer" target="_blank">
				<div class="social large-3 small-3 columns">
					<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/blog-assets/twitter.png">
				</div>
			</a>
			<a href="https://www.facebook.com/voxer" target="_blank">
				<div class="social large-3 small-3 columns">
					<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/blog-assets/facebook.png">
				</div>
			</a>
			<a href="https://plus.google.com/117064039775912834125" target="_blank">
				<div class="social large-3 small-3 columns">
					<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/blog-assets/gplus.png">
				</div>
			</a>
			<a href="http://instagram.com/voxer" target="_blank">
				<div class="social large-3 small-3 columns">
					<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/blog-assets/instagram.png">
				</div>
			</a>
		</div>
	</section>
	<section id="voxer-info" class="row">
		<div id="logo">
			<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/blog-assets/voxer-logo.png">
		</div>
		<div class="info">
			<p>
				Voxer combines the power of live voice with text and photos on any smart device on any network.
			</p>
		</div>
	</section>
	<?php do_action('foundationPress_after_sidebar'); ?>
</aside>
