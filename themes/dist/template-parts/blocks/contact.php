<?php
$contact_block_info = new tsc__contactInfos();
$class_name = 'block-contact-infos';
if (!empty($block['className'])) $class_name .= ' ' . $block['className'];
if (!empty($block['align'])) $class_name .= ' align' . $block['align'];
?>
<div class="<?= esc_attr($class_name); ?>">
    <?php echo $contact_block_info->get_contactInfos(); ?>
</div>
<?php if (is_admin()) : ?>
    <h6 class="empty-block"><?php esc_attr_e('Block Kontakt-Info bitte im Bereich Kontakt/Footer bearbeiten!', 'ize'); ?></h6>
<?php endif;