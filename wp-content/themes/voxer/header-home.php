<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title><?php if ( is_category() ) {
			echo 'Category Archive for &quot;'; single_cat_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_tag() ) {
			echo 'Tag Archive for &quot;'; single_tag_title(); echo '&quot; | '; bloginfo( 'name' );
		} elseif ( is_archive() ) {
			wp_title(''); echo ' Archive | '; bloginfo( 'name' );
		} elseif ( is_search() ) {
			echo 'Search for &quot;'.esc_html($s).'&quot; | '; bloginfo( 'name' );
		} elseif ( is_home() || is_front_page() ) {
			bloginfo( 'name' ); echo ' | '; bloginfo( 'description' );
		}  elseif ( is_404() ) {
			echo 'Error 404 Not Found | '; bloginfo( 'name' );
		} elseif ( is_single() ) {
			wp_title('');
		} else {
			echo wp_title( ' | ', 'false', 'right' ); bloginfo( 'name' );
		} ?></title>
		
		<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ; ?>/css/app.css" />
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
		<link rel="icon" type="image/png" href="https://voxer.com/images/favicon.png">
		<link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-144x144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-114x114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-72x72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" href="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/icons/apple-touch-icon-precomposed.png">
		<script id="facebook-jssdk" src="//connect.facebook.net/en_US/all.js#xfbml=1"></script>
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
	<!-- facebook skd -->
	<div id="fb-root"></div>
	<!-- facebook skd -->
	<!-- google share button -->
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<!-- google share button -->

	<?php do_action('foundationPress_after_body'); ?>
	<div class="off-canvas-wrap" data-offcanvas>
	<div class="inner-wrap">
	<?php do_action('foundationPress_layout_start'); ?>
	
	<div class="sticky contain-to-grid">
		<nav class="top-bar" data-topbar>
			<ul class="title-area">
		  		<li class="name">
		    		<a href="http://voxer.com/"><img class="logo" src="http://voxer.com/images/logo.png"></a>
		  		</li>
		   		<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
		  		<li class="toggle-topbar menu-icon"><a href="#"></a></li>
			</ul>
			<section class="top-bar-section">
			  <!-- Right Nav Section -->
			  		<?php wp_nav_menu( array( 'container' => 'false', 'menu_class' => 'right' ) ); ?>
			</section>
		</nav>
		<div class="clearfix"></div>
	</div>
<section class="container" role="document" id="mainContainer">
	<?php do_action('foundationPress_after_header'); ?>