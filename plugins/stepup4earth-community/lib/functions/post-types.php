<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...
// Register Custom Post Type
function community_programs() {

	$labels = array(
		'name'                  => _x( 'Community Programs', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Community Program', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Community Programs', 'text_domain' ),
		'name_admin_bar'        => __( 'Community Programs', 'text_domain' ),
		'archives'              => __( 'Community Programs Archives', 'text_domain' ),
		'attributes'            => __( 'Community Program Attributes', 'text_domain' ),
		'parent_item_colon'     => __( 'Parent Item:', 'text_domain' ),
		'all_items'             => __( 'All Community Programs', 'text_domain' ),
		'add_new_item'          => __( 'Add New Community Program', 'text_domain' ),
		'add_new'               => __( 'Add New', 'text_domain' ),
		'new_item'              => __( 'New Community Program', 'text_domain' ),
		'edit_item'             => __( 'Edit Community Program', 'text_domain' ),
		'update_item'           => __( 'Update Community Program', 'text_domain' ),
		'view_item'             => __( 'View Community Program', 'text_domain' ),
		'view_items'            => __( 'View Community Programs', 'text_domain' ),
		'search_items'          => __( 'Search Community Program', 'text_domain' ),
		'not_found'             => __( 'Not found', 'text_domain' ),
		'not_found_in_trash'    => __( 'Not found in Trash', 'text_domain' ),
		'featured_image'        => __( 'Featured Image', 'text_domain' ),
		'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
		'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
		'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
		'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Uploaded to this community program', 'text_domain' ),
		'items_list'            => __( 'Community programs list', 'text_domain' ),
		'items_list_navigation' => __( 'Community programs list navigation', 'text_domain' ),
		'filter_items_list'     => __( 'Filter community programs list', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Community Program', 'text_domain' ),
		'description'           => __( 'This is communities outreach programs', 'text_domain' ),
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
		'has_archive'           => 'community',
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
		'show_in_rest'          => true,
		'menu_icon'             => 'dashicons-universal-access-alt',
	);
	register_post_type( 'community_programs', $args );

}
add_action( 'init', 'community_programs', 0 );
