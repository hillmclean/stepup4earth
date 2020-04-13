<?php
/**
 * Custom functions that act independently of the theme templates.
 *
 * @package StepUp4Earth_Theme
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function stepup4earth_body_classes( $classes ) {
	// Adds a class of group-blog to blogs with more than 1 published author.
	if ( is_multi_author() ) {
		$classes[] = 'group-blog';
	}

	if ( is_singular( 'page' ) ) {
		global $post;
		$classes[] = 'page-' . $post->post_name;
	}

	return $classes;
}
add_filter( 'body_class', 'stepup4earth_body_classes' );

// Filter the archive title
function remove_archive_from_title($title){
	if('workshop' == get_post_type()){
		$title = post_type_archive_title();
		return $title;
	} 
	else{
		return $title;
	}
}
add_filter('get_the_archive_title', 'remove_archive_from_title');

// Adds custom logo to header 

add_filter('login_headerurl','loginpage_custom_link');
function loginpage_custom_link($url) {
    return home_url();
}

add_action( 'login_head', 'new_login_logo' );
function new_login_logo() { 
echo '
	<style>
			#login h1 a, .login h1 a {
			background-image: url('.get_template_directory_uri().'/build/assets/logos/GlobeLogo-compressed.png) !important;
			background-size: 200px 200px !important; 
			width: 200px !important;
			height: 200px !important;
			background-position: center !important;
			}
	</style>
	';
 } ?>
