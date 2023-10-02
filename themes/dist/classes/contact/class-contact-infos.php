<?php

class tsc__ContactInfos
{

    protected $company = "";
    protected $company_imprint = "";


    protected $street = "";
    protected $zip_city = "";
    protected $country = "";
    protected $email = "";
    protected $phone = "";
    protected $form_shortcode = "";
    protected $google_maps_code = "";

    protected $contact_info_title = "";
    protected $contact_info_text = "";
    protected $locations;

    public function __construct()
    {
        $this->set__ContactInfos();
    }

    protected function set__ContactInfos()
    {
        $data = get_field('contact', 'option');


        $this->company = $data['company'];
        $this->company_imprint = $data['company_imprint'];
        $this->street = $data['street'];
        $this->zip_city = $data['zip_city'];
        $this->country = $data['country'];
        $this->email = $data['email'];
        $this->phone = $data['phone'];
        $this->form_shortcode = $data['form_shortcode'];
        $this->google_maps_code = $data['google_maps_code'];

        $data = get_field('info', 'option');
        $this->contact_info_title = $data['title'];
        $this->contact_info_text = $data['text'];

        $this->locations = get_field('locations', 'option');


    }


    public function get_phoneNr()
    {
        return $this->phone;
    }

    public function get_email()
    {
        return $this->email;
    }

    public function get_phoneLink()
    {
        if (!empty($this->phone)):
            ;
            $url = 'tel:' . preg_replace("/[^\+\d]+/", "", $this->phone);
            return '<a href="' . $url . '">' . $this->phone . '</a>';
        endif;
    }

    public function get_emailLink($editor = false)
    {
        $title = antispambot($this->email);
        $url = antispambot('mailto:' . $this->email);
        if ($editor) $url = 'mailto:' . $this->email;
        return '<a aria-label="' . __('Send Email', 'ize') . '" href="' . $url . '">' . $title . '</a>';
    }

    public function get_emailIcon()
    {
        if (!empty($this->email)):
            $icon = '<i class="tsc-icon flaticon-email" aria-hidden="true"></i>';
            $url = antispambot('mailto:' . $this->email);
            return '<a aria-label="' . __('Send Email', 'ize') . '" href="' . $url . '">' . $icon . '</a>';
        endif;
    }

    public function get_phoneIcon()
    {
        if (!empty($this->phone)):
            $icon = '<i class="tsc-icon flaticon-telephone-call" aria-hidden="true"></i>';
            $url = 'tel:' . preg_replace("/[^\+\d]+/", "", $this->phone);
            return '<a aria-label="' . esc_attr__('Call now', 'ize') . '" href="' . $url . '">' . $icon . '</a>';
        endif;

    }

    public function get_contactIcons()
    {

        $view = "<div class='tsc-contact-icons'>";
        $view .= $this->get_emailIcon();
        $view .= $this->get_phoneIcon();
        $view .= "</div>";

        return $view;

    }


    public function get_company($before, $after)
    {
        if (!empty($this->company)):
            return $before . $this->company . $after;
        endif;
    }

    public function get_company_imprint($before, $after)
    {
        if (!empty($this->company_imprint)):
            return $before . $this->company_imprint . $after;
        endif;
    }


    public function get_street($before, $after)
    {
        if (!empty($this->street)):
            return $before . $this->street . $after;
        endif;
    }

    public function get_zipCity($before, $after)
    {
        if (!empty($this->zip_city)):
            return $before . $this->zip_city . $after;
        endif;
    }

    public function get_country($before, $after)
    {
        if (!empty($this->country)):
            return $before . $this->country . $after;
        endif;
    }
    
    public function get_google_maps_code(){
        if (!empty($this->google_maps_code)){
            return $this->google_maps_code;
        }
    }

    public function get_contact_form(){
        if (!empty($this->form_shortcode)){
            return do_shortcode($this->form_shortcode);
        }

}

    public function get_contactInfos()
    {
        $html = "";
        if (!empty($this->company)): // view of all only, if company name exists

            $html = '<div class="tsc-contact-infos">';
            $html .= '<p>';
            $html .= '<span style="display: block"><b>' . $this->company . '</b></span>';
            $html .= '<span style="display: block">' . $this->street . '</span>';
            $html .= '<span style="display: block">' . $this->zip_city . '</span>';
            $html .= '</p>';

            $html .= '<p>';
            $html .= '<span style="display: block">' . $this->get_phoneLink() . '</span>';
            $html .= '<span style="display: block">' . $this->get_emailLink() . '</span>';
            $html .= '</p>';
            $html .= "</div>"; // end div tsc-contact-infos

        endif; // end check company name

        return $html;
    }

    public function get_contactInfoTitle($before, $after)
    {
        if (!empty($this->contact_info_title)):
            return $before . $this->contact_info_title . $after;
        endif;
    }

    public function get_contactInfoText($before, $after)
    {
        if (!empty ($this->contact_info_text)):
            return $before . $this->contact_info_text . $after;
        endif;
    }

    public function get_contactInfoField($before_title, $after_title, $before_text, $after_text)
    {

        $view = $this->get_contactInfoTitle($before_title, $after_title);
        $view .= $this->get_contactInfoText($before_text, $after_text);

        return $view;

    }

    public function get_locations(){
        return $this->locations;
    }

}



