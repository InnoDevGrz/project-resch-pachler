<?php
/* Template Name: Kontaktseite */
$contact_page_infos = new tsc__ContactInfos();

?>
<?php get_header(); ?>

    <main id="content" class="container" role="main">
        <?php include(locate_template('template-parts/content.php')); ?>

        <div class="is-layout-flex wp-container-3 wp-block-columns is-style-section">
            <div class="is-layout-flow wp-block-column is-style-default">
                <h2 class="animate fade-in-up animated">Schreiben Sie uns! </h2>
                <p class="animate fade-in-up animated">Wir freuen uns auf Ihre Nachricht.</p>
                <div class="tsc-contact-infos">
                    <?php echo $contact_page_infos->get_contactInfos() ?>
                </div>
            </div>
            <div class="is-layout-flow wp-block-column is-style-default">
                <?php echo $contact_page_infos->get_contactInfoTitle('<h3>', '</h2>'); ?>
                <div class="tsc-infotext">
                    <?php echo $contact_page_infos->get_contactInfoText('<div>', '</div>'); ?>
                </div>

                <div class="locations">
                    <h3><?php _e('Unsere Standorte', 'ize'); ?></h3>
                    <?php echo $contact_page_infos->get_locations(); ?>
                </div>

            </div>
        </div>


            <div class="is-layout-flex wp-container-3 wp-block-columns is-style-section">
                <div class="is-layout-flow wp-block-column is-style-default">
                    <?php echo $contact_page_infos->get_contact_form(); ?>
                <?php the_custom_logo(); ?>
                </div>
                <div class="is-layout-flow wp-block-column is-style-default">
                        <?php echo $contact_page_infos->get_google_maps_code(); ?>
                </div>
            </div>


    </main>
<?php get_footer(); ?>