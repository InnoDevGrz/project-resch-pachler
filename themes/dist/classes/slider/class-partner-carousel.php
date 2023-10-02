<?php

tsc_PartnerCarousel::register__AcfOptionPage();

class tsc_PartnerCarousel
{
    public $partner_logo_ids;

    public function __construct()
    {
        $this->set_partner_logo_ids();
    }

    static function register__AcfOptionPage()
    {

        if (function_exists('acf_add_options_page')):
            acf_add_options_page(array(
                'page_title' => __('Partner-Logos', 'ize'),
                'menu_title' => __('Partner-Logos', 'ize'),
                'menu_slug' => 'ize-partner-carousel',
                'capability' => 'edit_pages',
                'redirect' => false,
                'position' => 80,
                'update_button' => __('Änderungen speichern', 'ize'),
                'updated_message' => __("Einstellungen wurden gespeichert", 'ize'),
            ));
        endif;

    }

    protected function set_partner_logo_ids()
    {
        $this->partner_logo_ids = get_field('partner_brands', 'option');
    }

    public function get_partner_brands()
    {
        return $this->partner_logo_ids;
    }


}