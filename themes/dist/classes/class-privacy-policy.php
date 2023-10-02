<?php

class tsc__PrivacyPolicy
{

    public $privacyData = array();

    protected $showContactForm_policy = true;
    protected $contactForm_policy = "";

    protected $showAnalysisPurposes_policy = true;
    protected $analysisPurposes_policy = "";

    protected $showRegistry_policy = true;
    protected $registry_policy = "";

    protected $showItSecurity_policy = true;
    protected $itSecurity_policy = "";

    protected $showCookies_policy = true;
    protected $cookies_policy = "";

    protected $showGoogleanalytics_policy = true;
    protected $googleAnalytics_policy = "";

    protected $showGoogleAds_policy = true;
    protected $googleAds_policy = "";

    protected $showSocialMedia_policy = true;
    protected $socialMedia_policy = "";

    protected $showLegalBasis_policy = true;
    protected $legalBasis_policy = "";


    public function __construct()
    {
        /* get acf group field content*/
        $this->privacyData = get_field('privacy', 'option');


        /* *** set attributes *** */
        $this->showContactForm_policy = $this->privacyData['showContactForm_policy'];
        $this->contactForm_policy = $this->privacyData['contactForm_policy'];

        $this->showAnalysisPurposes_policy = $this->privacyData['showAnalysisPurposes_policy'];
        $this->analysisPurposes_policy = $this->privacyData['analysisPurposes_policy'];

        $this->showRegistry_policy = $this->privacyData['showRegistry_policy'];
        $this->registry_policy = $this->privacyData['registry_policy'];


        $this->showItSecurity_policy = $this->privacyData['showItSecurity_policy'];
        $this->itSecurity_policy = $this->privacyData['itSecurity_policy'];

        $this->showCookies_policy = $this->privacyData['showCookies_policy'];
        $this->cookies_policy = $this->privacyData['cookies_policy'];

        $this->showGoogleanalytics_policy = $this->privacyData['showGoogleanalytics_policy'];
        $this->googleAnalytics_policy = $this->privacyData['googleAnalytics_policy'];

        $this->showGoogleAds_policy = $this->privacyData['showGoogleAds_policy'];
        $this->googleAds_policy = $this->privacyData['googleAds_policy'];

        $this->showSocialMedia_policy = $this->privacyData['showSocialMedia_policy'];
        $this->socialMedia_policy = $this->privacyData['socialMedia_policy'];

        $this->showLegalBasis_policy = $this->privacyData['showLegalBasis_policy'];
        $this->legalBasis_policy = $this->privacyData['legalBasis_policys'];


    }

    public function get__contactForm_policy()
    {
        if ($this->showContactForm_policy === true) {
            return '<h3>' . __('Kontaktformular: ', 'ize') . '</h3>' . $this->contactForm_policy;
        }
    }

    public function get__analysisPurposesText_policy()
    {
        if ($this->showAnalysisPurposes_policy === true) {
            return '<h3>' . __('Analysezwecke: ', 'ize') . '</h3>' . $this->analysisPurposes_policy;
        }
    }

    public function get__registryText_policy()
    {
        if ($this->showRegistry_policy === true) {
            return '<h3>' . __('Registrierung: ', 'ize') . '</h3>' . $this->registry_policy;
        }
    }

    public function get__itSecurity_policy(){
        if ($this->showItSecurity_policy === true) {
            return '<h3>' . __('IT-Sicherheit: ', 'ize') . '</h3>' . $this->itSecurity_policy;
        }
    }

    public function get__cookies_policy(){
        if ($this->showCookies_policy === true) {
            return '<h3>' . __('Cookies: ', 'ize') . '</h3>' . $this->cookies_policy;
        }
    }

    public function get__googleanalytics_policy(){
        if ($this->showGoogleanalytics_policy === true) {
            return '<h3>' . __('Google Analytics: ', 'ize') . '</h3>' . $this->googleAnalytics_policy;
        }
    }

    public function get__googleAds_policy(){
        if ($this->showGoogleAds_policy === true) {
            return '<h3>' . __('Google Ads: ', 'ize') . '</h3>' . $this->googleAds_policy;
        }
    }

    public function get__socialMedia_policy(){
        if ($this->showSocialMedia_policy === true) {
            return '<h3>' . __('Social Media: ', 'ize') . '</h3>' . $this->socialMedia_policy;
        }
    }

    public function get__legalBasis_policy(){
        if ($this->showLegalBasis_policy === true) {
            return '<h3>' . __('Rechtliche Grundlage: ', 'ize') . '</h3>' . $this->legalBasis_policy;
        }
    }

}