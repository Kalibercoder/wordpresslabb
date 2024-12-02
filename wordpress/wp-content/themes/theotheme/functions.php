<?php
// Enqueue styles and scripts
function theotheme_enqueue_assets() {
    // Link the style.css file
    wp_enqueue_style('theotheme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theotheme_enqueue_assets');