<?php
// * Function Reference/register post type
//   Wordpress Codex - http://codex.wordpress.org/Post_Types & http://codex.wordpress.org/Function_Reference/register_post_type
//   Custom Post Type Snippets to make you smile - http://yoast.com/custom-post-type-snippets/ 

// Declare New Function For Child Theme

  // DOCTORS POST TYPE		
  $doctor_labels = array(
    'name' => 'Doctors',
    'singular_name' => 'Doctor',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Doctor',
    'edit_item' => 'Edit Doctor',
    'new_item' => 'New Doctor',
    'all_items' => 'All Doctors',
    'view_item' => 'View Doctor',
    'search_items' => 'Search Doctors',
    'not_found' =>  'No Doctors Found',
    'not_found_in_trash' => 'No Doctors Found', 
    'parent_item_colon' => '',
    'menu_name' => 'Doctors'
  );

  $doctor_args = array(
    'labels' => $doctor_labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'doctor' ),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor', 'thumbnail' )
  ); 

	register_post_type( 'doctor', $doctor_args );

?>