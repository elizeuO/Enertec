<?php

//removes wordpress admin bar
add_filter('show_admin_bar', '__return_false');

//Get theme image
function getThemeImage($image)
{
    $path = '/dist/img/' . $image;
    return get_template_directory_uri() . $path;
}

function getThemeVideo($video)
{
    $path = '/dist/video/' . $video;
    return get_template_directory_uri() . $path;
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

//Creates the custom post type Serviço
function addCustomPostTypeServico()
{
    $labels = array(
        'name' => _x('Serviços', 'post type general name'),
        'singular_name' => _x('Serviço', 'post type singular name'),
        'add_new' => _x('Adicionar Novo', 'Novo item'),
        'add_new_item' => __('Novo Item'),
        'edit_item' => __('Editar Item'),
        'new_item' => __('Novo Item'),
        'view_item' => __('Ver Item'),
        'search_items' => __('Procurar Itens'),
        'not_found' => __('Nenhum registro encontrado'),
        'not_found_in_trash' => __('Nenhum registro encontrado na lixeira'),
        'parent_item_colon' => '',
        'menu_name' => 'Serviços',

    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'public_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'has-singular' => false,
        'has_archive' => true,
        'hierarchical' => false,
        'menu_position' => null,
        'menu_icon' => 'dashicons-tag',
        'supports' => array('title','thumbnail', 'excerpt', 'thumbnail')
    );

    register_post_type('servico', $args);
    flush_rewrite_rules();

    add_theme_support( 'post-thumbnails' ); 
}

add_action('init', 'addCustomPostTypeServico');