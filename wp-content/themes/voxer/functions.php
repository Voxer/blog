<?php
/*
Author: Ole Fredrik Lie
URL: http://olefredrik.com
*/


// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walker
require_once('library/menu-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

add_theme_support( 'infinite-scroll', array(
    'container'    => 'home-page',
    'footer'       => false ,
    'wrapper'	   => false ) );

//custom filters for the theme
function custom_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

function new_excerpt_more( $more ) {
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
function custom_tag_cloud_widget() {
    $args = array(
        'smallest' => 8, 
        'largest' => 22, 
        'unit' => 'pt', 
        'number' => 10,
        'format' => 'flat', 
        'separator' => "", 
        'orderby' => 'count', 
        'order' => 'DESC',
        'exclude' => '', 
        'include' => '', 
        'link' => 'view', 
        'taxonomy' => 'post_tag', 
        'post_type' => '', 
        'echo' => true
    );
    return $args;
}
add_filter( 'widget_tag_cloud_args', 'custom_tag_cloud_widget' );
?>
