<?php
$image_slider = new tsc__Imageslider();

$class_name = 'image-slider';
if (!empty($block['className'])) $class_name .= ' ' . $block['className'];
if (!empty($block['align'])) $class_name .= ' align' . $block['align'];

?>

    <div class="<?= esc_attr($class_name); ?>">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($image_slider->get_slider_images() as $image_slide_item) : ?>
                        <li class="splide__slide">
                            <div class="wrapper">
                                <?php if (!empty($image_slide_item['image'])) echo wp_get_attachment_image($image_slide_item['image'], 'medium_large'); ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>
        <?php
        wp_enqueue_style('slider-css');
        wp_enqueue_script('slider-js');
        ?>
    </div>
<?php if (is_admin()) : ?>
    <h3 class="empty-block"><?php esc_attr_e('Slider-Block bearbeiten &raquo;', 'ize'); ?></h3>
<?php endif;