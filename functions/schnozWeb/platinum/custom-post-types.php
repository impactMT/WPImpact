<?php
// * Function Reference/register post type
//   Wordpress Codex - http://codex.wordpress.org/Post_Types & http://codex.wordpress.org/Function_Reference/register_post_type
//   Custom Post Type Snippets to make you smile - http://yoast.com/custom-post-type-snippets/ 

// Declare New Function For Child Theme
function codex_custom_post_type_init() {
	
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
  
  // TESTIMONIALS POST TYPE		
  $testimonial_labels = array(
    'name' => 'Testimonials',
    'singular_name' => 'Testimonial',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Testimonial',
    'edit_item' => 'Edit Testimonial',
    'new_item' => 'New Testimonial',
    'all_items' => 'All Testimonials',
    'view_item' => 'View Testimonial',
    'search_items' => 'Search Testimonials',
    'not_found' =>  'No Testimonials Found',
    'not_found_in_trash' => 'No Testimonials Found', 
    'parent_item_colon' => '',
    'menu_name' => 'Testimonials'
  );

  $testimonial_args = array(
    'labels' => $testimonial_labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'testimonial' ),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'thumbnail' )
  ); 
  
  // FAQ
  $faq_labels = array(
    'name' => 'FAQ',
    'singular_name' => 'Question',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Question',
    'edit_item' => 'Edit Question',
    'new_item' => 'New Question',
    'all_items' => 'All Questions',
    'view_item' => 'View Question',
    'search_items' => 'Search Questions',
    'not_found' =>  'No Questions Found',
    'not_found_in_trash' => 'No Questions Found', 
    'parent_item_colon' => '',
    'menu_name' => 'FAQ'
  );

  $faq_args = array(
    'labels' => $faq_labels,
    'public' => true,
    'publicly_queryable' => true,
    'show_ui' => true, 
    'show_in_menu' => true, 
    'query_var' => true,
    'rewrite' => array( 'slug' => 'faq' ),
    'capability_type' => 'post',
    'has_archive' => true, 
    'hierarchical' => false,
    'menu_position' => null,
    'supports' => array( 'title', 'editor' )
  ); 
  
  register_post_type( 'doctor', $doctor_args );
  register_post_type( 'testimonial', $testimonial_args );
  register_post_type( 'faq', $faq_args );
}
add_action( 'init', 'codex_custom_post_type_init' );

?>