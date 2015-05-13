<?php
// Register Custom Post Type
function podcasts() {

	$labels = array(
		'name'                => _x( 'Podcasts', 'Post Type General Name', 'sage' ),
		'singular_name'       => _x( 'Podcast', 'Post Type Singular Name', 'sage' ),
		'menu_name'           => __( 'Podcasts', 'sage' ),
		'name_admin_bar'      => __( 'Podcasts', 'sage' ),
		'parent_item_colon'   => __( 'Parent podcast:', 'sage' ),
		'all_items'           => __( 'All Podcasts', 'sage' ),
		'add_new_item'        => __( 'Add New podcast', 'sage' ),
		'add_new'             => __( 'Add New', 'sage' ),
		'new_item'            => __( 'New podcast', 'sage' ),
		'edit_item'           => __( 'Edit podcast', 'sage' ),
		'update_item'         => __( 'Update podcast', 'sage' ),
		'view_item'           => __( 'View podcast', 'sage' ),
		'search_items'        => __( 'Search podcast', 'sage' ),
		'not_found'           => __( 'Not found', 'sage' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'sage' ),
	);
	$args = array(
		'label'               => __( 'podcasts', 'sage' ),
		'description'         => __( 'Podcast Description', 'sage' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', ),
		'taxonomies'          => array( 'category', 'post_tag' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-media-audio',
		'show_in_admin_bar'   => true,
		'show_in_nav_menus'   => true,
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'podcasts', $args );

}

// Hook into the 'init' action
add_action( 'init', 'podcasts', 0 );
