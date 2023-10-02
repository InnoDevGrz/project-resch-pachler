<?php /* Template Name: Datenschutz */

$privacyContactData = new tsc__ContactInfos;
?>

<?php get_header(); ?>
    <main id="content" class="container" role="main">

        <h1><?php _e('Datenschutzerklärung bzw. Informationen gemäß Art 13 und 14 DSGVO', 'ize') ?></h1>

        <h2><?php _e('Kontaktdaten:') ?></h2>
        <?php
        /* all contact data incl. phone & email */
        echo $privacyContactData->get_contactInfos(); ?>

        <h2><?php _e('Datenverarbeitungszwecke:') ?></h2>

        <?php
        $privacyTexts = new tsc__PrivacyPolicy();
        echo $privacyTexts->get__contactForm_policy();
        echo $privacyTexts->get__analysisPurposesText_policy();
        echo $privacyTexts->get__registryText_policy();

        echo $privacyTexts->get__itSecurity_policy();
        echo $privacyTexts->get__cookies_policy();
        echo $privacyTexts->get__googleanalytics_policy();
        echo $privacyTexts->get__googleAds_policy();
        echo $privacyTexts->get__socialMedia_policy();
        echo $privacyTexts->get__legalBasis_policy();


        include(locate_template('template-parts/content.php')); ?>



    </main>

<?php get_footer(); ?>