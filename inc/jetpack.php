<?php
/**
 * Jetpack Compatibility File.
 *
 * @link https://jetpack.me/
 *
 * @package Marchese
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function _mlg_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => '_mlg_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function _mlg_jetpack_setup
add_action( 'after_setup_theme', '_mlg_jetpack_setup' );

/**
 * Custom render function for Infinite Scroll.
 */
function _mlg_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function _mlg_infinite_scroll_render
