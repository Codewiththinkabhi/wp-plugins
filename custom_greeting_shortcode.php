<?php
/**
 * Plugin Name: Custom Greeting Shortcode
 * Description: Adds a [greeting] shortcode to display personalized greetings based on time and optional name.
 * Version:     1.0
 * Author:      Abhishek Jaiswal
 */

/**
 * Shortcode function: [greeting name="John"]
 */

add_shortcode( 'greeting', 'cgs_greeting_shortcode' );

function cgs_greeting_shortcode( $atts ) {
    $atts = shortcode_atts( array(
        'name' => 'world'
    ), $atts, 'greeting' );

return'hello '.esc_html($atts['name']).'!'

}


