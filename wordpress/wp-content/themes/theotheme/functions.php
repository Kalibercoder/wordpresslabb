<?php
// Enqueue styles and scripts
function theotheme_enqueue_assets() {
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css');

    // Enqueue theme's main stylesheet
    wp_enqueue_style('theotheme-style', get_stylesheet_uri());

    // Enqueue Bootstrap JS and dependencies
    wp_enqueue_script('jquery');
    wp_enqueue_script('popper-js', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-js', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js', array('jquery', 'popper-js'), null, true);
}
add_action('wp_enqueue_scripts', 'theotheme_enqueue_assets');

// Register navigation menus
function theotheme_register_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'theotheme')
    ));
}
add_action('init', 'theotheme_register_menus');