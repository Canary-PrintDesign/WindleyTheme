<?php

function catposttype(  $q )
{
    if ( $q->is_category && empty($q->query_vars['post_type'])) {
        $q->query_vars['post_type'] = 'any';
    }
       if ( $q->is_tag && empty($q->query_vars['post_type'])) {
        $q->query_vars['post_type'] = 'any';
    }

}
add_action( 'pre_get_posts', 'catposttype' );



function cat_post_type_post_class(   $classes, $class, $post_id ) {
    if ( ($post_type = get_post_type( )) != false) {
        $post_type_object = get_post_type_object($post_type);
        if ( !$post_type_object->_builtin && $post_type_object->capability_type=='post' && !in_array('post', $classes)) {
            $classes[] = 'post';
        }
    }
    return $classes;
}


add_filter( 'post_class', 'cat_post_type_post_class', 10, 3 );



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
    'supports'              => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'trackbacks', 'revisions', 'custom-fields', 'page-attributes', 'post-formats', 'tag', ),
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
