<?php


$imageBox = new tsc__ImageBox();
$imageBoxContent = $imageBox->get_Images();


$class_name = 'image-box';
if (!empty($block['className'])) $class_name .= ' ' . $block['className'];
if (!empty($block['align'])) $class_name .= ' align' . $block['align'];
?>

<div class="cube" style="height: <?php echo $imageBox->getContainerHeight(); ?>px;">
    <div class="side front"
            style=" height: <?php echo $imageBox->getContainerHeight(); ?>px;
                    background-image: url('<?php echo wp_get_attachment_image_url($imageBoxContent[0]['image'], 'full') ?>');
                    "
    ><?php echo $imageBoxContent[0]['content']; ?>
    </div>
    <div class="side back"
            style=" height: <?php echo $imageBox->getContainerHeight(); ?>px;
                    background-image: url('<?php echo wp_get_attachment_image_url($imageBoxContent[1]['image'], 'full') ?>');"
    >
        <?php echo $imageBoxContent[1]['content']; ?>
    </div>
</div>

<?php if (is_admin()) : ?>
    <h3 class="empty-block"><?php esc_attr_e('Image-Box bearbeiten &raquo;', 'ize'); ?></h3>
<?php endif;