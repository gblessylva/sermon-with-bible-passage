<?php


class Sermon_post_type {
    public function __construct( ) {
		add_action( 'init', [$this, 'wondah_sermons'], 0 );

	}

    public function wondah_sermons() {
    
        $labels = array(
            'name'                  => _x( 'Sermons', 'Post Type General Name', 'wondah_sermons' ),
            'singular_name'         => _x( 'Sermon', 'Post Type Singular Name', 'wondah_sermons' ),
            'menu_name'             => __( 'Sermons', 'wondah_sermons' ),
            'name_admin_bar'        => __( 'Sermon', 'wondah_sermons' ),
            'archives'              => __( 'Sermons Achives', 'wondah_sermons' ),
            'attributes'            => __( 'Sermon Attributes', 'wondah_sermons' ),
            'parent_item_colon'     => __( 'Parent Sermon:', 'wondah_sermons' ),
            'all_items'             => __( 'All Sermons', 'wondah_sermons' ),
            'add_new_item'          => __( 'Add New Sermon', 'wondah_sermons' ),
            'add_new'               => __( 'Add New', 'wondah_sermons' ),
            'new_item'              => __( 'New Sermon', 'wondah_sermons' ),
            'edit_item'             => __( 'Edit Sermon', 'wondah_sermons' ),
            'update_item'           => __( 'Update Sermon', 'wondah_sermons' ),
            'view_item'             => __( 'View Sermon', 'wondah_sermons' ),
            'view_items'            => __( 'View Sermons', 'wondah_sermons' ),
            'search_items'          => __( 'Search Sermon', 'wondah_sermons' ),
            'not_found'             => __( 'Not found', 'wondah_sermons' ),
            'not_found_in_trash'    => __( 'Not found in Trash', 'wondah_sermons' ),
            'featured_image'        => __( 'Featured Image', 'wondah_sermons' ),
            'set_featured_image'    => __( 'Set featured image', 'wondah_sermons' ),
            'remove_featured_image' => __( 'Remove featured image', 'wondah_sermons' ),
            'use_featured_image'    => __( 'Use as featured image', 'wondah_sermons' ),
            'insert_into_item'      => __( 'Insert into Sermon', 'wondah_sermons' ),
            'uploaded_to_this_item' => __( 'Uploaded to this Sermon', 'wondah_sermons' ),
            'items_list'            => __( 'Sermons list', 'wondah_sermons' ),
            'items_list_navigation' => __( 'Sermons list navigation', 'wondah_sermons' ),
            'filter_items_list'     => __( 'Filter Sermons list', 'wondah_sermons' ),
        );
        $rewrite = array(
            'slug'                  => 'sermons',
            'with_front'            => true,
            'pages'                 => true,
            'feeds'                 => true,
        );
        $args = array(
            'label'                 => __( 'Sermon', 'wondah_sermons' ),
            'description'           => __( 'Add and Manage Sernmons', 'wondah_sermons' ),
            'labels'                => $labels,
            'supports'              => array( 'title', 'editor', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields' ),
            'taxonomies'            => array( 'category', 'post_tag' ),
            'hierarchical'          => false,
            'public'                => true,
            'show_ui'               => true,
            'show_in_menu'          => true,
            'menu_position'         => 5,
            'menu_icon'             => 'dashicons-book-alt',
            'show_in_admin_bar'     => true,
            'show_in_nav_menus'     => true,
            'can_export'            => true,
            'has_archive'           => true,
            'exclude_from_search'   => false,
            'publicly_queryable'    => true,
            'rewrite'               => $rewrite,
            'capability_type'       => 'page',
            'show_in_rest'          => true,
            'rest_base'             => 'sermons',
        );
        register_post_type( 'sermons', $args );
    
    }

    
}

new Sermon_post_type();