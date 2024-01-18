<?php

/**
 * @package Asparagus
 */

function asparagus_enqueue_scripts()
{
    // Register Styles
    wp_register_style('style', get_stylesheet_uri());
    wp_register_style('archive-page', get_template_directory_uri() . '/assets/css/custom-page.css');
    wp_register_style('bootstrap', get_template_directory_uri() . '/assets/src/library/bootstrap-5.3.2-dist/css/bootstrap.min.css');

    // Register Scripts
    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', null, null, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/assets/src/library/bootstrap-5.3.2-dist/js/bootstrap.min.js', ['jquery'], null, true);

    if (is_archive()) {
        wp_enqueue_style('archive-page');
    }
    // Enqueue Style
    wp_enqueue_style('style');
    wp_enqueue_style('bootstrap');

    // Enqueue Script
    wp_enqueue_script('main');
    wp_enqueue_script('bootstrap');
}
add_action('wp_enqueue_scripts', 'asparagus_enqueue_scripts');
