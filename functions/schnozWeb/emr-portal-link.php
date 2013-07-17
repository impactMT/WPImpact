<?php
// Add Additional Settings to General Settings Page
$emr_portal_link_setting = new emr_portal_link_setting();
 
class emr_portal_link_setting {
    function emr_portal_link_setting( ) {
        add_filter( 'admin_init' , array( &$this , 'register_fields' ) );
    }
    function register_fields() {
        register_setting( 'general', 'emr_code', 'esc_attr' );
        add_settings_field('emr_code', '<label for="emr_code">'.__('EMR Portal Link' , 'emr_code' ).'</label>' , array(&$this, 'fields_html') , 'general' );
    }
    function fields_html() {
        $value = get_option( 'emr_code', '' );
        echo '<input type="text" id="emr_code" name="emr_code" class="regular-text ltr" value="' . $value . '" placeholder="e.g. UA-XXXXXXXX-X" /><p class="description">Enter ';
		echo bloginfo('sitename');
		echo ' EMR Portal Link</p>';
    }
}
?>