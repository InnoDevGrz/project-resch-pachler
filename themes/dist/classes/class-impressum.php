<?php

class tsc__Impressum extends tsc__ContactInfos
{
    protected $management = "";
    protected $uid = "";
    protected $companyRegister = "";
    protected $supervisory = "";

    protected $imageCredit = "";
    protected $tradeRegulation = "";
    protected $developer = array(); // link array
    protected $agency = array(); // link array


    public function __construct()
    {
        parent::__construct();
        $this->set__ImpressumData();
    }

    protected function set__ImpressumData()
    {

        $contact_data = get_field('contact', 'option');
        $this->management = $contact_data['management']; // Geschäftsführung
        $this->uid = $contact_data['uid']; // uid Nummer
        $this->companyRegister = $contact_data['companyRegister']; // firmenbuch
        $this->supervisory = $contact_data['supervisory']; // Aufsichtsbehörde

        $impressum_infos = get_field('impressum_infos', 'option');
        $this->imageCredit = $impressum_infos['imageCredit']; // Bildnachweis
        $this->developer = $impressum_infos['developer']; // Designer & Developer
        $this->agency = $impressum_infos['agency']; // Agentur
    }


    public function get_imageCredit($headline_before,$headline_after, $before, $after)
    {
        if (!empty($this->imageCredit)):
            return $headline_before  . __('Bildnachweise', 'ize') .  $headline_after . $before . $this->imageCredit . $after;
        endif;
    }

    public function get_developer($headline_before,$headline_after, $before, $after)
    {
        if (!empty($this->developer['developer_name'])):
            $html = $headline_before  . __('Design, Konzeption und Umsetzung', 'ize') .  $headline_after;
            $html .= $before;
            $html .= '<a href="' . $this->developer['url'] . '">' . $this->developer['developer_name'] . '</a>';
            $html .= $after;
            return $html;

        endif;
    }

    public function get_agency($headline_before,$headline_after, $before, $after)
    {
        if (!empty($this->agency['agency_name'])):
            $html = $headline_before  . __('Dies ist eine Webseite von', 'ize') .  $headline_after;
            $html .= $before;
            $html .= $this->agency['agency_name'] . ' ';
            $html .= '<a href="' . $this->agency['url'] . '">' . $this->agency['agency_link_name'] . '</a>';
            $html .= $after;
            return $html;

        endif;
    }




    public function get_management($before, $after)
    {
        if (!empty($this->management)):
            return $before . __('Geschäftsführung: ') . $this->management . $after;
        endif;
    }

    public function get_uid($headline_before,$headline_after, $before, $after)
    {
        if (!empty($this->uid)):
            return $headline_before  . __('UID-Nummer', 'ize') .  $headline_after . $before . $this->uid . $after;
        endif;
    }

    public function get_companyRegister($headline_before,$headline_after, $before, $after)
    {
        if (!empty($this->companyRegister)):
            return $headline_before  . __('Firmenbuch-Nummer', 'ize') .  $headline_after . $before . $this->companyRegister . $after;
        endif;
    }

    public function get_supervisory($headline_before,$headline_after, $before, $after)
    {
        if (!empty($this->supervisory)):
            return $headline_before  . __('Aufsichtsbehörde', 'ize') .  $headline_after . $before . $this->supervisory . $after;
        endif;
    }

    public function get_contactImpressum()
    {
        $html = "";
        if (!empty($this->company)): // view of all only, if company name exists

            $html = '<div class="tsc-impressum-contact">';

            $html = '<h2 class="h3">' . __('Vollständiger Firmenwortlaut', 'ize') . '</h2>';


            $html .= '<span style="display: block">' . $this->company_imprint . '</span>';

            if (!empty($this->management)):
                $html .= '<span style="display: block">' . __('Geschäftsführung: ') .  $this->management . '</span>';
            endif;

            if (!empty($this->street)):
                $html .= '<span style="display: block">' . $this->street . '</span>';
            endif;

            if (!empty($this->zip_city)):
                $html .= '<span style="display: block">' . $this->zip_city . '</span>';
            endif;

            if (!empty($this->country)):
                $html .= '<span style="display: block">' . $this->country . '</span>';
            endif;
    

            $html .= '<p>';
            $html .= '<span style="display: block">' . $this->get_phoneLink() . '</span>';
            $html .= '<span style="display: block">' . $this->get_emailLink() . '</span>';
            $html .= '</p>';

            $html .= "</div>"; // end div tsc-contact-infos

        endif; // end check company name

        return $html;
    }

}