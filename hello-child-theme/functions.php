<?php
function assessment_enqueue_styles() {
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'), '1.0');
}
add_action('wp_enqueue_scripts', 'assessment_enqueue_styles');

function assessment_register_menus() {
    register_nav_menus(array('primary' => __('Primary Menu','assessment-theme')));
}
add_action('after_setup_theme', 'assessment_register_menus');
?>
