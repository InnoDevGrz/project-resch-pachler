<?php
$contact_block_info_text = new tsc__contactInfos();
$class_name = 'tsc-block-contact-info-text';
if (!empty($block['className'])) $class_name .= ' ' . $block['className'];
if (!empty($block['align'])) $class_name .= ' align' . $block['align'];
?>
<div class="<?= esc_attr($class_name); ?>">
    <?php
    echo $contact_block_info_text->get_contactInfoTitle('<h3>', '</h3>');
    echo $contact_block_info_text->get_contactInfoText('<p>', '</p>');
    ?>
</div>
<?php if (is_admin()) : ?>
    <h6 class="empty-block"><?php esc_attr_e('Block Kontakt-Info-Text bitte im Bereich Kontakt/Footer bearbeiten!', 'ize'); ?></h6>
<?php endif;