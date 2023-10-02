<?php

class tsc__contactSocials
{
    protected $email = "";
    protected $phone = "";
    protected $data_social = array();


    public function __construct()
    {
        $this->set__contactSocials();
    }

    protected function set__contactSocials()
    {
        $this->data_social = get_field('social', 'option');

    }


    public function get_facebookIcon()
    {
        if (!empty($this->data_social['facebook'])):
            $icon = '<i class="tsc-icon flaticon-facebook-app-symbol" aria-hidden="true"></i>';
            return '<a href="' . $this->data_social['facebook'] . '" target="_blank" aria-label="' . esc_attr__('follow us at Facebook', 'ize') . '">' . $icon . '</a>';
        endif;
    }

    public function get_instagramIcon()
    {
        if (!empty($this->data_social['instagram'])):
            $icon = '<i class="tsc-icon flaticon-instagram" aria-hidden="true"></i>';
            return '<a href="' . $this->data_social['instagram'] . '" target="_blank" aria-label="' . esc_attr__('follow us at Instagram', 'ize') . '">' . $icon . '</a>';
        endif;
    }

    public function get_linkedinIcon()
    {
        if (!empty($this->data_social['linkedin'])):
            $icon = '<i class="tsc-icon flaticon-linkedin" aria-hidden="true"></i>';
            return '<a href="' . $this->data_social['linkedin'] . '" target="_blank" aria-label="' . esc_attr__('follow us at LinkedIn', 'ize') . '">' . $icon . '</a>';
        endif;
    }

    public function get_socialLinks()
    {
        if (!empty($this->data_social)):
            $html = '<div class="follow">';
            $html .= '<span class="links">';

            $html .= $this->get_facebookIcon();
            $html .= $this->get_instagramIcon();
            $html .= $this->get_linkedinIcon();

            $html .= '</span>';
            $html .= '</div>';

            return $html;
        endif;
    }

    public function get_socialFooterBar()
    {

        if (!empty($this->data_social['facebook']) || !empty($this->data_social['instagram']) || !empty($this->data_social['linkedin'])):
            $html = '<div class="follow socials-footer-bar">';
            $html .= '<span class="links">';

            $html .= $this->get_facebookIcon();
            $html .= $this->get_instagramIcon();
            $html .= $this->get_linkedinIcon();

            $html .= '</span>';
            $html .= '</div>';

            return $html;
        endif;
    }


}
