<?php
/*
function mytheme_enqueue_styles() {
    // Main stylesheet
    wp_enqueue_style('mytheme-style', get_stylesheet_uri());

    // Extra CSS file (optional)
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/custom.css');
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');
*/
// Enqueues style.css on the front.

function simple_enqueue_styles()
{
    wp_enqueue_style(
        'simple-style',
        get_parent_theme_file_uri('style.css'),
        array(),
        wp_get_theme()->get('Version')
    );
}

add_action('wp_enqueue_scripts', 'simple_enqueue_styles');

?>