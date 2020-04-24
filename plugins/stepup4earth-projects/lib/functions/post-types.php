<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function su4e_projects() {

	$labels = array(
		'name'                  => _x( 'Projects', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Projects', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Projects', 'text_domain' ),
		'name_admin_bar'        => __( 'Projects', 'text_domain' ),
		'archives'              => __( 'Projects Archives', 'text_domain' ),
		'attributes'            => __( 'Projects Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Projects', 'text_domain' ),
		'add_new_item'          => __( 'Add New Projects', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Projects', 'text_domain' ),
		'edit_item'             => __( 'Edit Projects', 'text_domain' ),
		'update_item'           => __( 'Update Projects', 'text_domain' ),
		'view_item'             => __( 'View Projects', 'text_domain' ),
		'view_items'            => __( 'View Projects', 'text_domain' ),
		'search_items'          => __( 'Search Projects', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this community program', 'text_domain' ),
		'items_list'            => __( 'Projects list', 'text_domain' ),
		'items_list_navigation' => __( 'Projects list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter projects list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Projects', 'text_domain' ),
		'description'           => __( 'These are StepUp4Earth Projects', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => 'projects',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'menu_icon'             => 'dashicons-hammer',
	);
	register_post_type( 'projects', $args );

}
add_action( 'init', 'su4e_projects', 0 );
