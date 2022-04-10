<?php

// Register Custom Post Type Car
function create_car_cpt() {

	$labels = array(
		'name' => _x( 'Cars', 'Post Type General Name', 'customtheme' ),
		'singular_name' => _x( 'Car', 'Post Type Singular Name', 'customtheme' ),
		'menu_name' => _x( 'Cars', 'Admin Menu text', 'customtheme' ),
		'name_admin_bar' => _x( 'Car', 'Add New on Toolbar', 'customtheme' ),
		'archives' => __( 'Car Archives', 'customtheme' ),
		'attributes' => __( 'Car Attributes', 'customtheme' ),
		'parent_item_colon' => __( 'Parent Car:', 'customtheme' ),
		'all_items' => __( 'All cars', 'customtheme' ),
		'add_new_item' => __( 'Add New Car', 'customtheme' ),
		'add_new' => __( 'Add New', 'customtheme' ),
		'new_item' => __( 'New Car', 'customtheme' ),
		'edit_item' => __( 'Edit Car', 'customtheme' ),
		'update_item' => __( 'Update Car', 'customtheme' ),
		'view_item' => __( 'View Car', 'customtheme' ),
		'view_items' => __( 'View cars', 'customtheme' ),
		'search_items' => __( 'Search Car', 'customtheme' ),
		'not_found' => __( 'Not found', 'customtheme' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'customtheme' ),
		'featured_image' => __( 'Featured Image', 'customtheme' ),
		'set_featured_image' => __( 'Set featured image', 'customtheme' ),
		'remove_featured_image' => __( 'Remove featured image', 'customtheme' ),
		'use_featured_image' => __( 'Use as featured image', 'customtheme' ),
		'insert_into_item' => __( 'Insert into Car', 'customtheme' ),
		'uploaded_to_this_item' => __( 'Uploaded to this Car', 'customtheme' ),
		'items_list' => __( 'cars list', 'customtheme' ),
		'items_list_navigation' => __( 'cars list navigation', 'customtheme' ),
		'filter_items_list' => __( 'Filter cars list', 'customtheme' ),
	);
	$args = array(
		'label' => __( 'Car', 'customtheme' ),
		'description' => __( 'Custom Post Type Cars', 'customtheme' ),
		'labels' => $labels,
		'menu_icon' => 'dashicons-admin-generic',
		'supports' => array('title', 'editor', 'excerpt', 'thumbnail', 'author', 'comments', 'custom-fields', 'page-attributes'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => true,
		'hierarchical' => true,
		'exclude_from_search' => false,
		'show_in_rest' => true,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'car', $args );

}
add_action( 'init', 'create_car_cpt', 0 );

// Register Taxonomy Brand
function create_brand_tax() {

	$labels = array(
		'name'              => _x( 'Brands', 'taxonomy general name', 'customtheme' ),
		'singular_name'     => _x( 'Brand', 'taxonomy singular name', 'customtheme' ),
		'search_items'      => __( 'Search Brands', 'customtheme' ),
		'all_items'         => __( 'All Brands', 'customtheme' ),
		'parent_item'       => __( 'Parent Brand', 'customtheme' ),
		'parent_item_colon' => __( 'Parent Brand:', 'customtheme' ),
		'edit_item'         => __( 'Edit Brand', 'customtheme' ),
		'update_item'       => __( 'Update Brand', 'customtheme' ),
		'add_new_item'      => __( 'Add New Brand', 'customtheme' ),
		'new_item_name'     => __( 'New Brand Name', 'customtheme' ),
		'menu_name'         => __( 'Brand', 'customtheme' ),
	);
	$args = array(
		'labels' => $labels,
		'description' => __( 'Cars Brands', 'customtheme' ),
		'hierarchical' => true,
		'public' => true,
		'publicly_queryable' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'show_in_nav_menus' => true,
		'show_tagcloud' => true,
		'show_in_quick_edit' => true,
		'show_admin_column' => false,
		'show_in_rest' => true,
	);
	register_taxonomy( 'brand', array('car'), $args );

}
add_action( 'init', 'create_brand_tax' );

// This theme uses post thumbnails
add_theme_support( 'post-thumbnails', array('post', 'page', 'car') );
add_theme_support( 'automatic-feed-links' );

// Add Shortcode
function custom_shortcode() {
	$message = 'Hello Test World';
	return $message;
}
add_shortcode( 'test', 'custom_shortcode' );


/* Custom Post Type Start */
function create_posttype() {
register_post_type( 'news',
// CPT Options
array(
  'labels' => array(
   'name' => __( 'news' ),
   'singular_name' => __( 'News' )
  ),
  'public' => true,
  'has_archive' => false,
  'rewrite' => array('slug' => 'news'),
 )
);
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );
/* Custom Post Type End */


/*Custom Post type start*/
function cw_post_type_news() {
$supports = array(
'title', // post title
'editor', // post content
'author', // post author
'thumbnail', // featured images
'excerpt', // post excerpt
'custom-fields', // custom fields
'comments', // post comments
'revisions', // post revisions
'post-formats', // post formats
);
$labels = array(
'name' => _x('news', 'plural'),
'singular_name' => _x('news', 'singular'),
'menu_name' => _x('news', 'admin menu'),
'name_admin_bar' => _x('news', 'admin bar'),
'add_new' => _x('Add New', 'add new'),
'add_new_item' => __('Add New news'),
'new_item' => __('New news'),
'edit_item' => __('Edit news'),
'view_item' => __('View news'),
'all_items' => __('All news'),
'search_items' => __('Search news'),
'not_found' => __('No news found.'),
);
$args = array(
'supports' => $supports,
'labels' => $labels,
'public' => true,
'query_var' => true,
'rewrite' => array('slug' => 'news'),
'has_archive' => true,
'hierarchical' => false,
);
register_post_type('news', $args);
}
add_action('init', 'cw_post_type_news');
/*Custom Post type end*/
