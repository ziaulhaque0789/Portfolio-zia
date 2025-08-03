<?php 


// functions.php
function bootstrap_theme_setup() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menus([
        'primary' => __('Primary Menu', 'bootstrap-theme')
    ]);
}
add_action('after_setup_theme', 'bootstrap_theme_setup');

// Enqueue Bootstrap 5.3
function bootstrap_theme_scripts() {
    wp_enqueue_style('bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css');
    wp_enqueue_style('bootstrap-icons-css', 'https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css');
    wp_enqueue_style('theme-style', get_stylesheet_uri());
    wp_enqueue_script('bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js', array('jquery'), null, true);

    wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js', array(), false, true);

}
add_action('wp_enqueue_scripts', 'bootstrap_theme_scripts');


require_once get_template_directory() . '/inc/new Bootstrap_Walker_Nav_Menu.php';









?>