<?php $gallery_images = get_field('gallery_images', 'option');
?>

<?php if (!empty($gallery_images)):
    wp_enqueue_style('colorbox-css');
    wp_enqueue_style('justifiedgallery-css');
    wp_enqueue_script('colorbox-js');
    wp_enqueue_script('colorbox-de-js');
    wp_enqueue_script('justifiedgallery-js');
    wp_enqueue_script('gallery-js');
    ?>

    <div id="footergallery" class="footer-gallery justified-gallery">
        <?php foreach ($gallery_images as $item): ?>
            <a href="<?php echo wp_get_attachment_image_url($item['gallery_image'], 'large'); ?>">
                <?php echo wp_get_attachment_image($item['gallery_image'], 'full'); ?>
            </a>
        <?php endforeach; ?>
    </div>

<?php endif; ?>