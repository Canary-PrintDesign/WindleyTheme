<?php

// Register Custom Post Type
function custom_post_type() {

  $labels = array(
    'name'                  => 'Projects',
    'singular_name'         => 'Project',
    'menu_name'             => 'Projects',
    'name_admin_bar'        => 'Projects',
    'archives'              => 'Project Archives',
    'parent_item_colon'     => 'Parent Item:',
    'all_items'             => 'All Projects',
    'add_new_item'          => 'Add New Project',
    'add_new'               => 'Add New Project',
    'new_item'              => 'New Project',
    'edit_item'             => 'Edit Project',
    'update_item'           => 'Update Project',
    'view_item'             => 'View Project',
    'search_items'          => 'Search Projects',
    'not_found'             => 'Project Not Found',
    'not_found_in_trash'    => 'Not found in Trash',
    'featured_image'        => 'Featured Image',
    'set_featured_image'    => 'Set featured image',
    'remove_featured_image' => 'Remove featured image',
    'use_featured_image'    => 'Use as featured image',
    'insert_into_item'      => 'Insert into item',
    'uploaded_to_this_item' => 'Uploaded to this item',
    'items_list'            => 'Items list',
    'items_list_navigation' => 'Items list navigation',
    'filter_items_list'     => 'Filter items list',
  );
  $args = array(
    'label'                 => 'Project',
    'description'           => 'Individual Projects',
    'labels'                => $labels,
    'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', ),
    'taxonomies'            => array( 'category', 'post_tag' ),
    'hierarchical'          => false,
    'public'                => true,
    'show_ui'               => true,
    'show_in_menu'          => true,
    'menu_position'         => 2,
    'menu_icon'             => 'dashicons-admin-multisite',
    'show_in_admin_bar'     => true,
    'show_in_nav_menus'     => true,
    'can_export'            => true,
    'has_archive'           => true,
    'exclude_from_search'   => false,
    'publicly_queryable'    => true,
    'capability_type'       => 'page',
  );
  register_post_type( 'projects', $args );

}
add_action( 'init', 'custom_post_type', 0 );

?>
