<?php

/*
*Plugin Name: CMS2 Sneaker Post Type
*/




function cms2_register_post_type() {

   $labels = array(

      'name'                     => __( 'Sneakers', 'cms2' ),
      'singular_name'            => __( 'Sneaker', 'cms2' ),
      'add_new'                  => __( 'Add New', 'cms2' ),
      'add_new_item'             => __( 'Add New Sneaker', 'cms2' ),
      'edit_item'                => __( 'Edit Sneaker', 'cms2' ),
      'new_item'                 => __( 'New Sneaker', 'cms2' ),
      'view_item'                => __( 'View Sneaker', 'cms2' ),
      'view_items'               => __( 'View Sneakers', 'cms2' ),
      'search_items'             => __( 'Search Sneakers', 'cms2' ),
      'not_found'                => __( 'No Sneakers found.', 'cms2' ),
      'not_found_in_trash'       => __( 'No Sneakers found in Trash.', 'cms2' ),
      'parent_item_colon'        => __( 'Parent Sneakers:', 'cms2' ),
      'all_items'                => __( 'All Sneakers', 'cms2' ),
      'archives'                 => __( 'Sneaker Archives', 'cms2' ),
      'attributes'               => __( 'Sneaker Attributes', 'cms2' ),
      'insert_into_item'         => __( 'Insert into Sneaker', 'cms2' ),
      'uploaded_to_this_item'    => __( 'Uploaded to this Sneaker', 'cms2' ),
      'featured_image'           => __( 'Featured Image', 'cms2' ),
      'set_featured_image'       => __( 'Set featured image', 'cms2' ),
      'remove_featured_image'    => __( 'Remove featured image', 'cms2' ),
      'use_featured_image'       => __( 'Use as featured image', 'cms2' ),
      'menu_name'                => __( 'Sneakers', 'cms2' ),
      'filter_items_list'        => __( 'Filter Sneaker list', 'cms2' ),
      'filter_by_date'           => __( 'Filter by date', 'cms2' ),
      'items_list_navigation'    => __( 'Sneakers list navigation', 'cms2' ),
      'items_list'               => __( 'Sneakers list', 'cms2' ),
      'item_published'           => __( 'Sneaker published.', 'cms2' ),
      'item_published_privately' => __( 'Sneaker published privately.', 'cms2' ),
      'item_reverted_to_draft'   => __( 'Sneaker reverted to draft.', 'cms2' ),
      'item_scheduled'           => __( 'Sneaker scheduled.', 'cms2' ),
      'item_updated'             => __( 'Sneaker updated.', 'cms2' ),
      'item_link'                => __( 'Sneaker Link', 'cms2' ),
      'item_link_description'    => __( 'A link to an sneaker.', 'cms2' ),

   );

   $args = array(

      'labels'                => $labels,
      'description'           => __( 'organize and manage company sneakers', 'cms2' ),
      'public'                => false,
      'hierarchical'          => false,
      'exclude_from_search'   => true,
      'publicly_queryable'    => false,
      'show_ui'               => true,
      'show_in_menu'          => true,
      'show_in_nav_menus'     => false,
      'show_in_admin_bar'     => false,
      'show_in_rest'          => true,
      'menu_position'         => null,
      'menu_icon'             => 'dashicons-products',
      'capability_type'       => 'post',
      'capabilities'          => array(),
      'supports'              => array( 'title', 'editor', 'revisions' ),
      'taxonomies'            => array(),
      'has_archive'           => false,
      'rewrite'               => array( 'slug' => 'sneakers' ),
      'query_var'             => true,
      'can_export'            => true,
      'delete_with_user'      => false,
      'template'              => array(),
      'template_lock'         => false,

   );

   register_post_type( 'cms2_snekaer', $args );

}
add_action( 'init', 'cms2_register_post_type' );