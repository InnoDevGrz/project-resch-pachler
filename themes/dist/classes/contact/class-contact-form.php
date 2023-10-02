<?php

class tsc_contactForm
{
    protected $contact_form_sc = "";

    public function __construct()
    {
        $this->set_contactFormData();
    }

    public function set_contactFormData()
    {
        $data = get_field('contact', 'option');
        $this->contact_form_sc = $data['form_shortcode'];
    }

    public function get_contact_form()
    {
        if (!empty($this->contact_form_sc)):
            echo do_shortcode($this->contact_form_sc);
        endif;
    }

    public function the_contact_form()
    {
        if (!empty($this->contact_form_sc)):
            echo do_shortcode($this->contact_form_sc);
        endif;
    }

}

