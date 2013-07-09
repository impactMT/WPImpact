<?php
function load_custom_wp_admin_scripts() {
        wp_register_script( 'bootstrap', IMPACT_BASE_URL . 'functions/js/bootstrap.js', false, '2.3.1' );
        wp_enqueue_script( 'bootstrap' );
}
add_action( 'admin_enqueue_scripts', 'load_custom_wp_admin_scripts' );
?>