
<?php

$infotext = new tsc__contactInfos();
/* gallery */
if (!is_page_template('templates/page-has-parallax-end.php')) {
    include(locate_template('template-parts/footer/gallery.php'));
}

/* social links */
include(locate_template('template-parts/footer/social-links.php'));
?>
<div class="infodata">
    <h3 class="footer-title"><?php _e('Kontakt', 'ize'); ?></h3>
    <?php echo $infotext->get_contactInfos(); ?>
</div>

<div class="infotext">
    <?php
    echo $infotext->get_contactInfoTitle('<h3 class="footer-title">', '</h3>');
    echo $infotext->get_contactInfoText('<p>', '</p>');
    ?>
</div>
