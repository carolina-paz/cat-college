<?php 

function college_files() {
    wp_enqueue_style('college_main_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'college_files');

function enqueue_styles() {
    wp_enqueue_style('tailwind', get_template_directory_uri() . '/output.css');
}
add_action('wp_enqueue_scripts', 'enqueue_styles');


?>