<?php

add_action('wp_enqueue_scripts', 'simple_enqueue_styles');
function simple_enqueue_styles() {
    // Main stylesheet
    wp_enqueue_style('simple-style', get_stylesheet_uri());
}
?>