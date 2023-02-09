<?php

//removes wordpress admin bar
add_filter('show_admin_bar', '__return_false');

//Get theme image
function getThemeImage($image){
    $path = '/dist/img/'.$image;
    return get_template_directory_uri().$path;
}

//Register and enqueue the scripts
function registerScripts()
{
    $path = get_template_directory_uri() . '/dist/js/';
    //Removes the default wordpress jquery script
    wp_deregister_script('jquery');

    wp_register_script('jquery', $path . 'jquery-3.6.3.min.js', array(), '3.6.3', true);
    wp_enqueue_script('jquery');
}

add_action('wp_enqueue_scripts', 'registerScripts');

//Register and enqueue the CSS styles
function registerStyles()
{
    $path = get_template_directory_uri() . '/dist/style/';
    wp_register_style('normalize', $path . 'normalize.min.css', array(), false, false);
    wp_enqueue_style('normalize');

    wp_register_style('enertec', $path . 'enertec.css', array(), false, false);
    wp_enqueue_style('enertec');
}
add_action('wp_enqueue_scripts', 'registerStyles');