<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package contentJones_S
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function contentjones_s_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'contentjones_s_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function contentjones_s_jetpack_setup
add_action( 'after_setup_theme', 'contentjones_s_jetpack_setup' );

function contentjones_s_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function contentjones_s_infinite_scroll_render