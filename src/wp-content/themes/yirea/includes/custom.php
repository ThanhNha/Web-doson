<?php
add_action('wp_enqueue_scripts', 'shin_style');
function shin_style() {
    $version = '1.4.0';

    // Load CSS
    wp_enqueue_style('main-style-css', THEME_URL . '/assets/main/main.css', array(), $version, 'all');

    // Load JS
    wp_enqueue_script('main-scripts-js', THEME_URL . '/assets/main/main.js', array('jquery'), $version, true);  
}


/**
 * Menu Register
 */
register_nav_menus(
    array(
        "primary"    => __( "Primary Menu"),
        "footer"     => __( "Footer Menu")
    )
);


/*
 * Add Image Size for Wordpress
 */
if (function_exists('add_image_size')) {
    // add_image_size('nameImage', 392, 245, true);    
}