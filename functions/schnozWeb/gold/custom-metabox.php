<?php
/**
 * Include and setup custom metaboxes and fields.
 *
 * @category YourThemeOrPlugin
 * @package  Metaboxes
 * @license  http://www.opensource.org/licenses/gpl-license.php GPL v2.0 (or later)
 * @link     https://github.com/jaredatch/Custom-Metaboxes-and-Fields-for-WordPress
 */

add_filter( 'cmb_meta_boxes', 'gold_cmb_child_metaboxes' );
function gold_cmb_child_metaboxes( array $meta_boxes ) {

	// Start with an underscore to hide fields from custom fields list
	$prefix = '_cmb_';
	
	// Doctor Information
	$meta_boxes[] = array(
		'id'         => 'doctor_metabox',
		'title'      => 'Doctor Information',
		'pages'      => array( 'doctor' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			array(
				'name' => 'Quote',
				'id'   => $prefix . 'contact_address1',
				'type' => 'quote',
			),
			array(
				'name' => 'Fellowship',
				'desc' => 'Where was your Fellowship?',
				'id'   => $prefix . 'contact_city',
				'type' => 'repeatable-text',
			),
			array(
				'name' => 'Residency',
				'desc' => 'Where was your Residency?',
				'id'   => $prefix . 'contact_state',
				'type' => 'repeatable-text',
			),
			array(
				'name' => 'Internship',
				'desc' => 'Where was your Internship?',
				'id'   => $prefix . 'contact_zip',
				'type' => 'repeatable-text',
			),
			array(
				'name' => 'Medical Education',
				'desc' => 'Where did you recieve your Medical Education?',
				'id'   => $prefix . 'contact_phone',
				'type' => 'repeatable-text',
			),
			array(
				'name' => 'Credentials',
				'desc' => 'List all your credentials.',
				'id'   => $prefix . 'contact_phonetf',
				'type' => 'repeatable-text',
			),
			array(
				'name' => 'Professional Interests',
				'desc' => 'Describe your professional interests.',
				'id'   => $prefix . 'contact_fax',
				'type' => 'wysiwyg',
			),

		),
	);
	
		// Testimonial Video
	$meta_boxes[] = array(
		'id'         => 'video_metabox',
		'title'      => 'Video',
		'pages'      => array( 'testimonial' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			array(
				'name' => 'Video',
				'desc' => 'Video',
				'id'   => $prefix . 'testimonial_video',
				'taxonomy' => 'quote',
				'type' => 'text',
			),
		),
	);
	
	// Testimonial Quote
	$meta_boxes[] = array(
		'id'         => 'quote_metabox',
		'title'      => 'Quote',
		'pages'      => array( 'testimonial' ), // Post type
		'context'    => 'normal',
		'priority'   => 'high',
		'show_names' => true, // Show field names on the left
		'fields'     => array(
			array(
				'name' => 'Quote',
				'desc' => 'Quote',
				'id'   => $prefix . 'testimonial_quote',
				'taxonomy' => 'quote',
				'type' => 'quote',
			),
		),
	);


	// Add other metaboxes as needed

	return $meta_boxes;

}

add_action( 'init', 'cmb_initialize_cmb_meta_boxes', 9999 );
