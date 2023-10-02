<?php

if (function_exists('acf_add_options_page')) {


    /* ACF Feldgruppen und Feldeinstellungen als .json-Dateien im Theme speichern (Verzeichnis "acf-fields") und von dort laden
* ACHTUNG: das Verzeichnis "acf-fields" muss existieren, damit die Dateien dort gespeichert werden können!
* https://www.advancedcustomfields.com/resources/local-json/
*/
    add_filter('acf/settings/save_json', function ( $path ) {
        $path = get_template_directory() . '/acf-fields';
        return $path;
    });

    add_filter('acf/settings/load_json', function ( $paths ) {
        unset($paths[0]);
        $paths[] = get_stylesheet_directory() . '/acf-fields';
        return $paths;
    });





    add_filter('acf/fields/wysiwyg/toolbars', function ($toolbars) {
        $toolbars['Simple'] = array();
        $toolbars['Simple'][1] = array('bold', 'bullist', 'link', 'removeformat');
        return $toolbars;
    });


    add_action('acf/init', function () {
        if (function_exists('acf_register_block_type')) {

            /* *
             * Register block types & option pages
             * */

            tsc__contactSetup::init();

            /* option: */
            tsc__HeaderSlider::init();
            tsc__HeaderSliderOverlay::init();
            tsc__Imageslider::init();
            tsc__TextSlider::init();
            tsc__BlockJustifiedGallery::init();
            tsc__ImageBox::init();


        }

    });


    //add_filter('acf/settings/show_admin', '__return_false');

    require_once(get_template_directory() . '/inc/acf-fields.php');


} else {

    add_action('admin_notices', function () {
        ?>
        <div class="error notice">
            <p><?php esc_attr_e('ACHTUNG: Das Plugin "ACF Pro" muss installiert werden!', 'ize'); ?></p>
        </div>
        <?php
    });

}

if (!defined('ACF_PRO_LICENSE')) {
    define('ACF_PRO_LICENSE', 'Y2Q2MmIwMmIwODUyNTc1ZThlZjUxNTkzZTI2ZTE0MWMwZDgzNDAzMWQ0ZTczMWQwMjBjZGU3');
}


if (!class_exists('npx_acf_plugin_image_aspect_ratio_crop')) {
    add_action('admin_notices', function () {
        $action = 'install-plugin';
        $slug = 'acf-image-aspect-ratio-crop';
        $npx_acf_plugin_url = wp_nonce_url(
            add_query_arg(
                array(
                    'action' => $action,
                    'plugin' => $slug
                ),
                admin_url('update.php')
            ),
            $action . '_' . $slug
        );
        ?>
        <div class="error notice">
            <p><?php esc_attr_e('ACHTUNG: Das Plugin "Advanced Custom Fields: Image Aspect Ratio Crop" muss installiert werden! ', 'ize'); ?>
                <a class="button button-primary" href="<?= $npx_acf_plugin_url; ?>"><?php
                    esc_attr_e('Jetzt installieren', 'ize'); ?></a></p>
        </div>
        <?php
    });
}

