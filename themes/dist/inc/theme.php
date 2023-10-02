<?php

function ize_wpbasic_setup(){
    load_theme_textdomain('ize', get_template_directory() . '/assets/languages');

    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'script',
        'style',
    ));

    add_theme_support('custom-logo', array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
    ));



    add_theme_support('editor-styles');
    add_editor_style('assets/css/style-editor.css');
    remove_theme_support('core-block-patterns');
    add_theme_support('responsive-embeds');

    $loader = new ScriptLoader();
    add_filter('script_loader_tag', array($loader, 'filter_script_loader_tag'), 10, 2);
}
add_action('after_setup_theme', 'ize_wpbasic_setup');



add_action('init', function () {

    register_nav_menus(array(
        'primary' => __('Haupt-Navigation', 'ize'),
        'footer' => __('Footer-Navigation', 'ize'),
    ));

});


add_action('wp_body_open', function () {
    echo '<a class="skip-link screen-reader-text" href="#content">' . esc_attr__('Zum Inhalt springen', 'ize') . '</a>';
}, 5);

function tsc_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'tsc_custom_excerpt_length', 999 );

/*
 * Zusätzlichen Mimes (Dokumenttypen) für den Upload erlauben (SVG-Logo Upload)
 * https://developer.wordpress.org/reference/hooks/upload_mimes/
 */
add_filter('upload_mimes', function ($mimes = array()) {
    $mimes['svg'] = 'image/svg+xml';
    $mimes['svgz'] = 'image/svg+xml';
    return $mimes;
});
