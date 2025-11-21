<?php
function hello_child_enqueue_assets() {
    wp_enqueue_style('open-sans', 'https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap', [], null);
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css');
    wp_enqueue_script('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js', [], false, true);
    wp_enqueue_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css');
    wp_enqueue_style('child-custom', get_stylesheet_directory_uri() . '/custom.css');
}
add_action('wp_enqueue_scripts', 'hello_child_enqueue_assets');
