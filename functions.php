<?php
/* theme */

function weightloss_theme(){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('html5',array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption'
    ));

    register_nav_menus(array(
        'primary' => 'Primary Menu',
    ));
    
}

add_action('after_setup_theme','weightloss_theme');

function weightloss_enqueue_styles()
{
    wp_enqueue_style(
        'main-style',
        get_template_directory_uri() . '/assets/css/main.css',
        array(),
        '1.0',
        'all'
    );
}

add_action('wp_enqueue_scripts','weightloss_enqueue_styles');