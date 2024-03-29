<?php

require get_template_directory() . '/inc/customizer.php';

function wpdevs_load_scripts()
{
    wp_enqueue_style('wpdevs-style', get_stylesheet_uri(), array(), filemtime(get_template_directory() . '/style.css'), 'all');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap', array(), null);
    wp_enqueue_script('dropdown', get_template_directory_uri() . '/js/dropdown.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'wpdevs_load_scripts');


function wpedvs_config()
{
    $textdomain = 'wp-devs';
    load_theme_textdomain($textdomain, get_template_directory() . '/languages/');

    register_nav_menus(
        array(
            'wp_devs_main_menu' => __('Main Menu', 'wp-devs'),
            'wp_devs_footer_menu' => __('Footer Menu', 'wp-devs'),
        )
    );

    $args = array(
        'height' => 225,
        'width' => 1920
    );
    add_theme_support('custom-header', $args);
    add_theme_support('post-thumbnails');
    add_theme_support('custom-logo', array(
        'width' => 200,
        'height' => 110,
        'flex-height' => true,
        'flex-width' => true
    ));
    add_theme_support('title-tag');
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script'));
    add_theme_support('automatic-feed-links');
}
add_action('after_setup_theme', 'wpedvs_config', 0);
add_action('widgets_init', 'wpedvs_sidebars');

function wpedvs_sidebars()
{
    register_sidebar(
        array(
            'name' => __('Blog Sidebar', 'wp-devs'),
            'id' => 'sidebar-blog',
            'description' => __('this is the Blog Sidebar. You can add your own widgets here.', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-tittle">',
            'after_title' => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name' => __('Services 1', 'wp-devs'),
            'id' => 'services-1',
            'description' => __('First Service Area.', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-tittle">',
            'after_title' => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name' => __('Services 2', 'wp-devs'),
            'id' => 'services-2',
            'description' => __('Second Service Area.', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-tittle">',
            'after_title' => '</h4>',
        )
    );
    register_sidebar(
        array(
            'name' => __('Services 3', 'wp-devs'),
            'id' => 'services-3',
            'description' => __('Third Service area ', 'wp-devs'),
            'before_widget' => '<div class="widget-wrapper">',
            'after_widget' => '</div>',
            'before_title' => '<h4 class="widget-tittle">',
            'after_title' => '</h4>',
        )
    );
}


if (!function_exists('wp_body_open')) {
    function wp_body_open()
    {
        do_action('wp_body_open');
    }
}
