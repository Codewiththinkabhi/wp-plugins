<?php
/*
*Plugin Name: Shortcode Plugin 
*Description: This plugin is used to create shortcode 
*Version:1.0
*Author: Abhishek Jaiswal 
*/

//add_short code is wordpress function in which one is tag and the another is callback function call back funnctions name must be unique
//[message]
add_shortcode("message","sp_show_static_message");

function sp_show_static_message() {
   $output = '
    <div style="max-width: 400px; margin: 20px auto; border: 1px solid #ccc; border-radius: 8px; padding: 20px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); background-color: #f9f9f9;">
        <h3 style="margin-top: 0;">Message</h3>
        <p style="margin: 0;">Hello, here is your shortcode message.</p>
    </div>';
    
    return $output;
}
