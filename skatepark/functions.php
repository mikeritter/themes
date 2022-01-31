<?php

/**
 * Block Styles.
 */
require get_stylesheet_directory() . '/inc/block-styles.php';

/**
 * Add class to body if post/page has a featured image.
 */
function add_featured_image_class( $classes ) {
	global $post;
	if ( isset ( $post->ID ) && get_the_post_thumbnail( $post->ID ) ) {
		$classes[] = 'has-featured-image';
	}
	return $classes;
}
add_filter( 'body_class', 'add_featured_image_class' );

/**
 * Disable color panel on the customizer coming from Blockbase.
 */
function disable_blockbase_customizer_colors( ) {
	return false;
}
add_filter( 'blockbase_customize_colors', 'disable_blockbase_customizer_colors', 10, 3 );
