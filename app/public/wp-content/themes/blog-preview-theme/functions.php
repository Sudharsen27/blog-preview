<?php
function blogpreview_enqueue_scripts() {
    wp_enqueue_style('main-css', get_stylesheet_uri());
    wp_enqueue_style('tailwind', 'https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css');
    wp_enqueue_script('jquery');
    wp_enqueue_script('slider-js', get_template_directory_uri() . '/assets/js/slider.js', array('jquery'), null, true);
}
add_action('wp_enqueue_scripts', 'blogpreview_enqueue_scripts');

function blogpreview_register_menus() {
    register_nav_menus(array(
        'main-menu' => __('Main Menu'),
    ));
}
add_action('init', 'blogpreview_register_menus');
function blogpreview_setup_theme() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 100,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}

add_action('wp_footer', function() {
    echo '<!-- Theme functions.php loaded correctly -->';
});
