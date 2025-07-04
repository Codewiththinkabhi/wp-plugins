<?php
/**
 * Plugin Name: Custom Admin Footer
 * Description: Replaces the default WordPress admin footer text
 * Version: 1.0
 * Author: Abhishek Jaiswal
 */

// Function to replace the admin footer text 
function caf_change_footer_text() {
    error_log("Custom Admin Footer Hook Ran"); // Logs only when the hook runs
    echo 'Made with ❤️ by Abhishek Jaiswal'; 
}

// Hook into admin_footer_text filter 
add_filter('admin_footer_text', 'caf_change_footer_text');
?>