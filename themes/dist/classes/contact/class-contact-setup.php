<?php
// include acf fields to backend

// in acf.php:
//$contact = tsc__contactSetup();
//$contact->initBackend();

/*** class to set acf fields and for using field content ***/
class tsc__contactSetup 
{
    protected $footer_info_title = "";
    protected $footer_info_text = "";

    static function init(){
        /*** !IMPORTANT ! ***/
        /*** ACF option page : register page in inc/acf-fields.php or here first ***/
        /*** ACF field construction: set fields in inc/acf-fields.php or here first ***/
        self::register__AcfOptionPage();
        // self::register__AcfFields(); nicht mehr nötig, da ab sofort über json automatisch gespeichert
        self::register_AcfBlockType();
    }

    // ** init backend ** //
    static function register__AcfOptionPage()
    {

        if (function_exists('acf_add_options_page')):
            acf_add_options_page(array(
                'page_title' => __('Kontakt / Footer', 'ize'),
                'menu_title' => __('Kontakt / Footer', 'ize'),
                'menu_slug' => 'ize-settings',
                'capability' => 'edit_pages',
                'redirect' => false,
                'position' => 100,
                'update_button' => __('Änderungen speichern', 'ize'),
                'updated_message' => __("Einstellungen wurden gespeichert", 'ize'),
            ));
        endif;

    }



    static function register_AcfBlockType()
    {
        if (function_exists('acf_register_block_type')):


            // block contactinfos
            acf_register_block_type(array(
                'supports' => array(
                    'anchor' => false,
                    'align' => array('full'),
                    'mode' => false,
                ),
                'name' => 'tsc-contactinfos',
                'title' => __('Kontaktinfos', 'ize'),
                'description' => __('Kontaktinfos', 'ize'),
                'keywords' => array('Kontakt', 'contact', 'tsc-blocks'),
                'render_template' => 'template-parts/blocks/contact.php',
                'category' => 'tsc-blocks',
                'icon' => 'slides',
                'post_types' => array('page'),
                'mode' => false,
                'align' => 'left',
            ));


            // block infotext
            acf_register_block_type(array(
                'supports' => array(
                    'anchor' => false,
                    'align' => array('full'),
                    'mode' => false,
                ),
                'name' => 'tsc-contact-infotext',
                'title' => __('Kontakt-Infotext', 'ize'),
                'description' => __('Kontakt-Infotext, etwa Öffnungszeiten etc.', 'ize'),
                'keywords' => array('contact', 'Kontakt', 'Infotext', 'tsc-blocks'),
                'render_template' => 'template-parts/blocks/info-text.php',
                'category' => 'tsc-blocks',
                'icon' => 'slides',
                'post_types' => array('page'),
                'mode' => false,
                'align' => 'left',
            ));


            // TODO: block social links



        endif;
    }


}






