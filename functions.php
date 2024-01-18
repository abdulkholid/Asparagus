<?php

/**
 * @package Asparagus
 */

function asparagus_enqueue_scripts()
{
    wp_register_style('style', get_stylesheet_uri());
    wp_register_script('main', get_template_directory_uri() . '/assets/js/main.js', null, null, true);
    wp_register_style('archive-page', get_template_directory_uri() . '/assets/css/custom-page.css');

    if (is_archive()) {
        wp_enqueue_style('archive-page');
    }
    wp_enqueue_style('style');
    wp_enqueue_script('main');
}
add_action('wp_enqueue_scripts', 'asparagus_enqueue_scripts');
