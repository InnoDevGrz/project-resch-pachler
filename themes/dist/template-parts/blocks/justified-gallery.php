<?php

$justifiedGallery = new tsc__BlockJustifiedGallery;
$images = $justifiedGallery->getGalleryImages();

if (!empty($images)) {
    wp_enqueue_style('colorbox-css');
    wp_enqueue_style('justifiedgallery-css');
    wp_enqueue_script('colorbox-js');
    wp_enqueue_script('colorbox-de-js');
    wp_enqueue_script('justifiedgallery-js');
    wp_enqueue_script('gallery-js');
}


$class_name = 'block-justified-gallery';
if (!empty($block['className'])) $class_name .= ' ' . $block['className'];
?>

<section class="<?= esc_attr($class_name); ?>">
    <?php foreach ($images as $image): ?>
        <a href="<?php echo wp_get_attachment_image_url($image, 'large'); ?>">
            <?php echo wp_get_attachment_image($image, 'full'); ?>
        </a>

    <?php endforeach; ?>
</section>
<?php if (is_admin()) : ?>
    <h3 class="empty-block"><?php esc_attr_e('Gallerie-Block bearbeiten &raquo;', 'ize'); ?></h3>
<?php endif; ?>



