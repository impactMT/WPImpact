<?php
// Custom CSS for Admin
function add_custom_admin_styles() {
echo '<style>@import url("';
echo  bloginfo('template_directory');
echo '/functions/css/admin-styles.css");</style>';
}
add_action('admin_bar_menu', 'add_custom_admin_styles');
?>