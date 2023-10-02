<?php

add_action('wp_enqueue_scripts', function () {

    $theme_version = wp_get_theme()->get('Version');
    //wp_add_inline_style( 'ize-theme-styles', theme_get_customizer_css() );
    wp_enqueue_style('ize-style', get_template_directory_uri() . '/style.css');

    wp_register_style('custom-menu-css', get_template_directory_uri() . '/assets/css/custom-menu-colors.css');

    wp_register_style('slider-css', get_template_directory_uri() . '/assets/css/slider.css');
    wp_register_script('slider-js', get_template_directory_uri() . '/assets/js/slider.js', array(), $theme_version, true);
    wp_script_add_data('slider-js', 'async', true);

    wp_enqueue_script('simpleparallax-js', get_template_directory_uri() . '/assets/js/simpleParallax.js', array(), $theme_version, true);
    //wp_script_add_data('simplepara-js', 'async', true);

    wp_register_style('colorbox-css', get_template_directory_uri() . '/assets/css/colorbox.css');
    wp_register_script('colorbox-js', get_template_directory_uri() . '/assets/js/jquery.colorbox-min.js', array('jquery'), $theme_version, true);
    wp_register_script('colorbox-de-js', get_template_directory_uri() . '/assets/js/jquery.colorbox-de.js', array('jquery'), $theme_version, true);
    wp_script_add_data('colorbox-js', 'async', true);
    wp_script_add_data('colorbox-de-js', 'async', true);

    wp_register_style('justifiedgallery-css', get_template_directory_uri() . '/assets/css/justifiedGallery.css');
    wp_register_script('justifiedgallery-js', get_template_directory_uri() . '/assets/js/jquery.justifiedGallery.js', array('jquery'), $theme_version, true);
    wp_script_add_data('justifiedgallery-js', 'async', true);

    wp_register_script('gallery-js', get_template_directory_uri() . '/assets/js/gallery.js', array('jquery'), $theme_version, true);
    wp_script_add_data('gallery-js', 'async', true);
 

    wp_enqueue_script('ize-scripts', get_template_directory_uri() . '/assets/js/scripts.js', array(), $theme_version, true);
    wp_script_add_data('ize-scripts', 'async', true);
});

add_action('enqueue_block_editor_assets', function () {
    wp_enqueue_script('ize-editor', get_template_directory_uri() . '/assets/js/editor.js', array('wp-blocks', 'wp-dom'), '', true);
});