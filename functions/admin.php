<?php
// Admin Login CSS
function my_custom_login_css() { 
	 echo '<style type="text/css">
		   .login form .input, .login input[type="text"] { height:30px !important; }
		  </style>';}   
add_action('login_head', 'my_custom_login_css');

// Remove Welcome to Wordpress
function hide_welcome_screen() {
    $user_id = get_current_user_id();
    if ( 1 == get_user_meta( $user_id, 'show_welcome_panel', true ) )
        update_user_meta( $user_id, 'show_welcome_panel', 0 );
}
add_action( 'load-index.php', 'hide_welcome_screen' );
// Remove the Welcome to Wordpress Checkbox
function my_custom_admin_head() {
        echo '<style>[for="wp_welcome_panel-hide"] {display: none !important;}</style>';
}
add_action('admin_head', 'my_custom_admin_head');
// Remove editor
function remove_editor_menu() {
  remove_action('admin_menu', '_add_themes_utility_last', 101);
}
add_action('_admin_menu', 'remove_editor_menu', 1);
// Remove Uneeded Dashboard Widgets
function remove_dashboard_widgets() {
	global $wp_meta_boxes;
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_quick_press']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_incoming_links']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_right_now']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
	unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_recent_drafts']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_recent_comments']);
	unset($wp_meta_boxes['dashboard']['normal']['core']['acx_plugin_dashboard_widget']);
	//unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
	//unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);
}
add_action('wp_dashboard_setup', 'remove_dashboard_widgets' );
// Remove "You are using wordpress %s from Right Now Widget
function remove_admin_stuff( $translated_text, $untranslated_text, $domain ) {
    $custom_field_text = 'You are using <span class="b">WordPress %s</span>.';
    if ( is_admin() && $untranslated_text === $custom_field_text ) {
        return '';
    }
    return $translated_text;
}
add_filter('gettext', 'remove_admin_stuff', 20, 3);
// Custom Admin Impact Shiznizzle Footer
function remove_footer_admin () {
	global $current_user;
    get_currentuserinfo();
    echo '&copy;';
	echo date(Y);
	echo ' | Developed by <i class="icon-Impact icon-2x impact-link" data-toggle="tooltip" title="Developed by Impact Marketing & Technology"></i> Impact Marketing & Technolgoies</a> | <strong>Do You Need Support?</strong> <a href="http://impactmt.com/website-support/?company='.get_bloginfo('name').'&website='.get_bloginfo('url').'&email='.$current_user->user_email.'&firstname='.$current_user->user_firstname.'&lastname='.$current_user->user_lastname.'" target="_blank">Click Here</a></p>';
    }
add_filter('admin_footer_text', 'remove_footer_admin'); 
// Change Admin Version Number
function my_footer_version() {
    return '<i class="icon-Impact icon-2x" data-toggle="tooltip" title="Developed by Impact Marketing & Technology"></i> <i class="icon-logo-css3-vector technology-icons icon-2x" title="Developed w/ CSS3"></i> <i class="icon-HTML5-Logo-Badge technology-icons icon-2x" title="Developed w/ HTML5"></i>';
}
add_filter( 'update_footer', 'my_footer_version', 11 );
// Remove the Screen Options Tab
function remove_screen_options(){
    return false;
}
add_filter('screen_options_show_screen', 'remove_screen_options');
// Remove Uneeded Links from Admin Bar
function wps_admin_bar() {
    global $wp_admin_bar;
    //$wp_admin_bar->remove_menu('wp-logo');
	$wp_admin_bar->remove_menu('updates');
    $wp_admin_bar->remove_menu('about');
    $wp_admin_bar->remove_menu('wporg');
	$wp_admin_bar->remove_menu('comments');
	$wp_admin_bar->remove_menu('themes');
	$wp_admin_bar->remove_menu('customize');
	$wp_admin_bar->remove_menu('widgets');
	$wp_admin_bar->remove_menu('menus');
    $wp_admin_bar->remove_menu('documentation');
    $wp_admin_bar->remove_menu('support-forums');
    $wp_admin_bar->remove_menu('feedback');
	//$wp_admin_bar->remove_menu('new-post');
	$wp_admin_bar->remove_menu('new-media');
	$wp_admin_bar->remove_menu('new-link');
	$wp_admin_bar->remove_menu('new-user');
    //$wp_admin_bar->remove_menu('view-site');
}
add_action( 'wp_before_admin_bar_render', 'wps_admin_bar' );
// So now let's add our own links
function my_admin_bar_link() {
	global $current_user;
    get_currentuserinfo();
	global $wp_admin_bar;
	$wp_admin_bar->add_menu( array(
	'id' => 'impact',
	'parent' => 'wp-logo',
	'title' => __( 'Impact Marketing & Technology'),
	'href' => /*admin_url*/( 'http://impactmt.com' )
	) );
	$wp_admin_bar->add_menu( array(
	'id' => 'impactfeedback',
	'parent' => 'wp-logo-external',
	'title' => __( 'Feedback'),
	'href' => ( 'http://impactmt.com/website-support/?company='.get_bloginfo('name').'&website='.get_bloginfo('url').'&email='.$current_user->user_email.'&firstname='.$current_user->user_firstname.'&lastname='.$current_user->user_lastname.'' )
	) );
	$wp_admin_bar->add_menu( array(
	'id' => 'impactsupport',
	'parent' => 'wp-logo-external',
	'title' => __( 'Support Question'),
	'href' => ('http://impactmt.com/website-support/?company='.get_bloginfo('name').'&website='.get_bloginfo('url').'&email='.$current_user->user_email.'&firstname='.$current_user->user_firstname.'&lastname='.$current_user->user_lastname.'')
	) );
}
add_action('admin_bar_menu', 'my_admin_bar_link');
// Replace WordPress Howdy, Per Elsie Webster
function goodbye_howdy ( $wp_admin_bar ) {
    $avatar = get_avatar( get_current_user_id(), 16 );
    if ( ! $wp_admin_bar->get_node( 'my-account' ) )
        return;
    $wp_admin_bar->add_node( array(
        'id' => 'my-account',
        'title' => sprintf( 'Logged in as, %s', wp_get_current_user()->display_name ) . $avatar,
    ) );
}
add_action( 'admin_bar_menu', 'goodbye_howdy' );
// Remove Help Tabs
function wpse50723_remove_help($old_help, $screen_id, $screen){
    $screen->remove_help_tabs();
    return $old_help;
}
add_filter( 'contextual_help', 'wpse50723_remove_help', 999, 3 );
// TinyMCE EDITOR "Biographical Info" USER PROFILE
function kpl_user_bio_visual_editor( $user ) {
	// Requires WP 3.3+ and author level capabilities
	if ( function_exists('wp_editor') && current_user_can('publish_posts') ):
	?>
	<script type="text/javascript">
	(function($){ 
		// Remove the textarea before displaying visual editor
		$('#description').parents('tr').remove();
	})(jQuery);
	</script>
 
	<table class="form-table">
		<tr>
			<th><label for="description"><?php _e('Biographical Info'); ?></label></th>
			<td>
				<?php 
				$description = get_user_meta( $user->ID, 'description', true);
				wp_editor( $description, 'description' ); 
				?>
				<p class="description"><?php _e('Share a little biographical information to fill out your profile. This may be shown publicly.'); ?></p>
			</td>
		</tr>
	</table>
	<?php
	endif;
}
add_action('show_user_profile', 'kpl_user_bio_visual_editor');
add_action('edit_user_profile', 'kpl_user_bio_visual_editor');
// Remove textarea filters from description field
function kpl_user_bio_visual_editor_unfiltered() {
	remove_all_filters('pre_user_description');
}
add_action('admin_init','kpl_user_bio_visual_editor_unfiltered');


//  Add an metabox for support into the dashboard and remove default meta boxes
function mycustom_dashboard_widgets() {
global $wp_meta_boxes;
	wp_add_dashboard_widget('custom_help_widget', 'Company Information', 'custom_dashboard_help');
}

function custom_dashboard_help() { 
    
	global $post;
	
	$args = array(
		'post_type' => 'company'
	);
	
	$the_query = new WP_Query( $args );
	
	
	if ( $the_query->have_posts() ) :
    
	// The Loop
	while ( $the_query->have_posts() ) :
		$the_query->the_post();
		echo '<div class="location">';
		echo '<h4>' . get_the_title() . '</h4>';
		if (get_post_meta( $post->ID, '_cmb_contact_address1', true )) {
			echo get_post_meta( $post->ID, '_cmb_contact_address1', true );
		}
		if (get_post_meta( $post->ID, '_cmb_contact_address2', true )) {
			echo '&nbsp;';
			echo get_post_meta( $post->ID, '_cmb_contact_address2', true );
		}
		echo '</br>';
		if (get_post_meta( $post->ID, '_cmb_contact_city', true )) {
			echo '<strong>';
			echo get_post_meta( $post->ID, '_cmb_contact_city', true );
			echo '</strong>';
		}
		if ((get_post_meta( $post->ID, '_cmb_contact_city', true )) && (get_post_meta( $post->ID, '_cmb_contact_state', true ))) {
			echo ', &nbsp;';
		}
		if (get_post_meta( $post->ID, '_cmb_contact_state', true )) {
			echo '<strong>';
			echo get_post_meta( $post->ID, '_cmb_contact_state', true );
			echo '</strong>';
		}
		if (get_post_meta( $post->ID, '_cmb_contact_zip', true )) {
			echo '&nbsp;';
			echo get_post_meta( $post->ID, '_cmb_contact_zip', true );
		}
		
		
		if ((get_post_meta( $post->ID, '_cmb_contact_phone', true )) || (get_post_meta( $post->ID, '_cmb_contact_phonetf', true )) || (get_post_meta( $post->ID, '_cmb_contact_fax', true ))) {
		echo '<div class="metabox-contact-info">';
			$phone = get_post_meta($post->ID, '_cmb_contact_phone', true);
			if (get_post_meta( $post->ID, '_cmb_contact_phone', true )) {
				echo '<strong>Phone</strong>';
				foreach ( $phone as $key => $valuemeta ) { 
				echo $valuemeta;
                echo ' ';
                }
			}
			if (get_post_meta( $post->ID, '_cmb_contact_phonetf', true )) {
				echo '</br><strong>Toll Free</strong>';
				echo get_post_meta( $post->ID, '_cmb_contact_phonetf', true );
			}
			if (get_post_meta( $post->ID, '_cmb_contact_fax', true )) {
				echo '</br><strong>Fax</strong>';
				echo get_post_meta( $post->ID, '_cmb_contact_fax', true );
			}
		echo '</div>';	
		}
		
		echo '<br/>';
		echo edit_post_link();
		echo '</div>';	
		
	endwhile;
	
	else : ?>
		<div class="no-content-entry-content">
			<a href="/wp-admin/edit.php?post_type=company" class="no-info btn btn-large btn-danger">Add Company Information</a>
		</div><!-- .entry-content -->
	<?php endif;
	
	/* Restore original Post Data 
	 * NB: Because we are using new WP_Query we aren't stomping on the 
	 * original $wp_query and it does not need to be reset.
	*/
	wp_reset_postdata();
}
	
add_action('wp_dashboard_setup', 'mycustom_dashboard_widgets');
// Change "Posts" to "News"
function change_post_menu_label() {
	global $menu;
	global $submenu;
	$menu[5][0] = 'News';
	$submenu['edit.php'][5][0] = 'News';
	$submenu['edit.php'][10][0] = 'Add News';
	$submenu['edit.php'][16][0] = 'News Tags';
	echo '';
}
function change_post_object_label() {
	global $wp_post_types;
	$labels = &$wp_post_types['post']->labels;
	$labels->name = 'News';
	$labels->singular_name = 'News';
	$labels->add_new = 'Add News';
	$labels->add_new_item = 'Add News';
	$labels->edit_item = 'Edit News';
	$labels->new_item = 'News';
	$labels->view_item = 'View News';
	$labels->search_items = 'Search News';
	$labels->not_found = 'No News found';
	$labels->not_found_in_trash = 'No News found in Trash';
}
add_action( 'init', 'change_post_object_label' );
add_action( 'admin_menu', 'change_post_menu_label' );


?>