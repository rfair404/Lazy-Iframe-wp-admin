<?php

/**
* Plugin Name: sillyness
* Description: a plugin I wrote just before midnight
*/
remove_action( 'admin_init', 'send_frame_options_header' );
add_action('admin_enqueue_scripts', 'silly_css');
function silly_css(){
wp_enqueue_style(
    'silly',
    plugins_url( '/what.css' , __FILE__ ),
    array(),
    '8675309',
    'all'
    );
}
