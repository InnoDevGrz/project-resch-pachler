<?php

$infotext = new tsc__contactInfos();
/* gallery */
if (!is_page_template('templates/page-has-parallax-end.php')) {
    include(locate_template('template-parts/footer/gallery.php'));
}

/* social links */
?>
<div>
    <h4 class="footer-title"><?php _e('Aktuelle Projekte', 'ize'); ?></h4>
    <p class="has-text-align-center"><?php _e('Für aktuelle Projekte folgt uns gerne auf Instagram:', 'ize'); ?></p>

    <?php
    include(locate_template('template-parts/footer/social-links.php'));
    ?>
</div>
<div class="infodata">
    <h4 class="footer-title"><?php _e('Kontakt', 'ize'); ?></h4>
    <?php echo $infotext->get_contactInfos(); ?>
</div>

<div class="infotext">
    <?php
    echo $infotext->get_contactInfoTitle('<h4 class="footer-title">', '</h3>');
    echo $infotext->get_contactInfoText('<p>', '</p>');
    ?>
</div>
