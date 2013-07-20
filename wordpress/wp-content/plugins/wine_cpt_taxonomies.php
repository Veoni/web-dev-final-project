<?php

/*
Plugin Name: Wine
Description: Posts that describe various wines.
Version: 1.0
Author: Susan Veoni
Author URI: veonivine.com
*/


add_action( 'init', 'sv_register_cpt_wine' );

function sv_register_cpt_wine() {

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
		'labels' 		=> $labels,
		'public' 		=> true,
		'menu_position' => 20,
		'has_archive' 	=> true,
		'rewrite'		=> array( 'slug' => 'wines' ),
		'supports' 		=> array( 'title', 'thumbnail', 'editor' )

    );

    register_post_type( 'wine', $args );

}

/*
@Wine
*/

add_action( 'init', 'sv_year_register_wine_taxonomies', 0 );

function sv_year_register_wine_taxonomies() {
    // Add new taxonomy, keep it non-hierarchical (like tags)
    $labels = array(
        'name'                          => __( 'Year', 'year' ),
        'singular_name'                 => __( 'Year', 'year' ),
        'search_items'                  => __( 'Search Years', 'year' ),
        'all_items'                     => __( 'All Years', 'year' ),
        'edit_item'                     => __( 'Edit Year', 'year' ), 
        'update_item'                   => __( 'Update Year', 'year' ),
        'add_new_item'                  => __( 'Add New Year', 'year' ),
        'new_item_name'                 => __( 'New Year', 'year' ),
        'separate_items_with_commas'    => __( 'Separate years with commas', 'year' ),
        'menu_name'                     => __( 'Year', 'year' ),
    );  

    register_taxonomy( 'year', array( 'wine' ), array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'year' ),
    ));

}

/*
Create custom taxonomy for region
@Wine
*/

add_action( 'init', 'sv_region_register_wine_taxonomies', 0 );

function sv_region_register_wine_taxonomies() {
    // Add new taxonomy, keep it non-hierarchical (like tags)
    $labels = array(
        'name'                          => __( 'Region', 'region' ),
        'singular_name'                 => __( 'Regions', 'region' ),
        'search_items'                  => __( 'Search Regions', 'region' ),
        'all_items'                     => __( 'All Regions', 'region' ),
        'edit_item'                     => __( 'Edit Region', 'region' ), 
        'update_item'                   => __( 'Update Region', 'region' ),
        'add_new_item'                  => __( 'Add New Region', 'region' ),
        'new_item_name'                 => __( 'New Region Name', 'region' ),
        'separate_items_with_commas'    => __( 'Separate regions with commas', 'region' ),
        'menu_name'                     => __( 'Region', 'region' ),
    );  


    register_taxonomy( 'region', array( 'wine' ), array(
        'hierarchical'      => false,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'region' ),
    ));
}

add_filter( 'pre_get_posts', 'my_get_posts' );
function my_get_posts( $query ) {
if ( is_home() && false == $query->query_vars['suppress_filters'] )
$query->set( 'post_type', array( 'wine' ) );
return $query;

}

?>
