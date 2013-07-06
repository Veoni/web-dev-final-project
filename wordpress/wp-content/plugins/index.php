<?php
// Silence is golden.

Plugin Name: Wine List
Plugin URI: veonivine.com/wine-list
Description: Different tpes of wine
Author: Susan Veoni
Version: 0.1
Author URI: http://veonivine.com
*/

add_action( 'init', 'register_cpt_wine' );

function register_cpt_wine() {

    $labels = array( 
        'name' => _x( 'Wines', 'wine' ),
        'singular_name' => _x( 'Wine', 'wine' ),
        'add_new' => _x( 'Add New', 'wine' ),
        'add_new_item' => _x( 'Add New Wine', 'wine' ),
        'edit_item' => _x( 'Edit Wine', 'wine' ),
        'new_item' => _x( 'New Wine', 'wine' ),
        'view_item' => _x( 'View Wine', 'wine' ),
        'search_items' => _x( 'Search Wines', 'wine' ),
        'not_found' => _x( 'No wines found', 'wine' ),
        'not_found_in_trash' => _x( 'No wines found in Trash', 'wine' ),
        'parent_item_colon' => _x( 'Parent Wine:', 'wine' ),
        'menu_name' => _x( 'Wines', 'wine' ),
    );

    $args = array( 
        'labels' => $labels,
        'hierarchical' => false,
        'description' => 'Different types of wine',
        'supports' => array( 'title', 'editor' ),
        'taxonomies' => array( 'category', 'italy', 'us', 'south_america', 'france', 'other' ),
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        
        
        'show_in_nav_menus' => true,
        'publicly_queryable' => true,
        'exclude_from_search' => false,
        'has_archive' => false,
        'query_var' => true,
        'can_export' => true,
        'rewrite' => true,
        'capability_type' => 'post'
    );

    register_post_type( 'wine', $args );
}
?>

