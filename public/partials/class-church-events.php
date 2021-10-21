<?php

class Generate_church_events {
    public function __construct(){
        
		add_action( 'init', [$this, 'church_events'], 0 );
    }
    
	public function church_events() {
	
		$labels = array(
			'name'                  => _x( 'Church Events', 'Post Type General Name', 'church_events' ),
			'singular_name'         => _x( 'Church Event', 'Post Type Singular Name', 'church_events' ),
			'menu_name'             => __( 'Church Event', 'church_events' ),
			'name_admin_bar'        => __( 'Church Event', 'church_events' ),
			'archives'              => __( 'Church Event Archives', 'church_events' ),
			'attributes'            => __( 'Church Event Attributes', 'church_events' ),
			'parent_item_colon'     => __( 'Parent Church Event:', 'church_events' ),
			'all_items'             => __( 'All Church Events', 'church_events' ),
			'add_new_item'          => __( 'Add New Church Event', 'church_events' ),
			'add_new'               => __( 'Add Event', 'church_events' ),
			'new_item'              => __( 'New Event', 'church_events' ),
			'edit_item'             => __( 'Edit Church Event', 'church_events' ),
			'update_item'           => __( 'Update Church Event', 'church_events' ),
			'view_item'             => __( 'View Church Event', 'church_events' ),
			'view_items'            => __( 'View Church Events', 'church_events' ),
			'search_items'          => __( 'Search Church Event', 'church_events' ),
			'not_found'             => __( 'No Church Events Found', 'church_events' ),
			'not_found_in_trash'    => __( 'Not found in Trash', 'church_events' ),
			'featured_image'        => __( 'Featured Image', 'church_events' ),
			'set_featured_image'    => __( 'Set featured image', 'church_events' ),
			'remove_featured_image' => __( 'Remove featured image', 'church_events' ),
			'use_featured_image'    => __( 'Use as featured image', 'church_events' ),
			'insert_into_item'      => __( 'Insert into Church Event', 'church_events' ),
			'uploaded_to_this_item' => __( 'Uploaded to this Church Event', 'church_events' ),
			'items_list'            => __( 'Church Event list', 'church_events' ),
			'items_list_navigation' => __( 'Church Events list navigation', 'church_events' ),
			'filter_items_list'     => __( 'Filter Church Events list', 'church_events' ),
		);
		$args = array(
			'label'                 => __( 'Church Event', 'church_events' ),
			'description'           => __( 'Church Events', 'church_events' ),
			'labels'                => $labels,
			'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'custom-fields' ),
			'taxonomies'            => array( 'category', 'post_tag' ),
			'hierarchical'          => false,
			'public'                => true,
			'show_ui'               => true,
			'show_in_menu'          => true,
			'menu_position'         => 5,
            'menu_icon'             => 'dashicons-calendar-alt',
			'show_in_admin_bar'     => true,
			'show_in_nav_menus'     => true,
			'can_export'            => true,
			'has_archive'           => true,
			'exclude_from_search'   => false,
			'publicly_queryable'    => true,
			'capability_type'       => 'page',
		);
		register_post_type( 'church_events', $args );
	
	}
}

new Generate_church_events();