<?php
function theotheme_enqueue_assets() {
    wp_enqueue_style('theotheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theotheme_enqueue_assets');

function theotheme_register_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu', 'theotheme')
    ));
}
add_action('init', 'theotheme_register_menus');
