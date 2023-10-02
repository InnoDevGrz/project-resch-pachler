<?php

/*
 *  class called static in inc/acf
 *  template: template-parts/header/navigation
*/

/***  acf option menu to config main-nav ***/
class tsc__MenuConfig
{
    protected $menuStyle = "style-navbar";
    protected $menuAlign = "desktop-menu-center";
    protected $menuContact = false;
    protected $menuBgImage = 0;
    protected $menuBgImageOpacity = 1;


    function __construct()
    {
        $this->setMenuConfigData();
    }

// methods
    static function init()
    {
        self::registerOptionPage();
        // ACF Fiels with json
    }

    static function registerOptionPage()
    {
        if (function_exists('acf_add_options_page')):

            acf_add_options_page(array(
                'page_title' => __('Menü-Einstellungen', 'ize'),
                'menu_title' => __('Menü-Einstellungen', 'ize'),
                'menu_slug' => 'inno-menu-config',
                'capability' => 'edit_pages',
                'redirect' => false,
                'position' => 90,
                'update_button' => __('Änderungen speichern', 'ize'),
                'updated_message' => __("Einstellungen wurden gespeichert", 'ize'),
            ));

        endif;
    }


    protected function setMenuConfigData()
    {
        $data = get_field('custom_menu_config', 'option');
        $this->menuStyle = $data['menu_style'];
        $this->menuAlign = $data['menu_align'];
        $this->menuBgImage = $data['menu_bg_image'];
        $this->menuBgImageOpacity = $data['menu_bg_image_opacity'];
    }

    public function getMenuStyle()
    {
        return $this->menuStyle;
    }

    public function getMenuAlign()
    {
        return $this->menuAlign;
    }

    public function getMenuBGImage()
    {
        return $this->menuBgImage;
    }
    public function getMenuBgImageOpacity()
    {
        return $this->menuBgImageOpacity;
    }


    public function get_MenuContacts(){
        return $this->menuContact = get_field('menu_contacts', 'option');
    }



}