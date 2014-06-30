<?php
/**
 * Created by PhpStorm.
 * User: Akiba
 * Date: 14-6-25
 * Time: 下午6:30
 */

add_theme_support( 'post-thumbnails' );
set_post_thumbnail_size( 9999, 576, true);
add_image_size( 'post-bg-img', 1337, 800, true );
// register post formats
add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
// register post type label args
function cutom_post_type_label_args($typeName){
    return $labels = array(
        'name' => $typeName,
        'singular_name' => $typeName,
        'add_new' => 'Add New',
        'add_new_item' => 'Add New '.$typeName,
        'edit_item' => 'Edit '.$typeName,
        'new_item' => 'New '.$typeName,
        'all_items' => 'All '.$typeName,
        'view_item' => 'View '.$typeName,
        'search_items' => 'Search '.$typeName,
        'not_found' =>  'No '.$typeName.' found',
        'not_found_in_trash' => 'No '.$typeName.' found in Trash',
        'parent_item_colon' => '',
        'menu_name' => $typeName
    );
}

// register post type args
function custom_post_type_args($typeName,$postType="post",$public=true,$queryable=true,$show_ui=true,$show_menu=true,$query_var=true,$has_archive = true, $hierarchical = false,$menu_position = null){
    return $args = array(
        'labels' => cutom_post_type_label_args($typeName),
        'public' => $public,
        'publicly_queryable' => $queryable,
        'show_ui' => $show_ui,
        'show_in_menu' => $show_menu,
        'query_var' => $query_var,
        'rewrite' => array( 'slug' => strtolower($typeName)),
        'capability_type' => $postType,
        'has_archive' => $has_archive,
        'hierarchical' => $hierarchical,
        'menu_position' => $menu_position,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
    );
}
// register portfolio post type
function custom_post_type() {
    register_post_type( 'portfolio', custom_post_type_args("Portfolio"));
}
add_action( 'init', 'custom_post_type' );