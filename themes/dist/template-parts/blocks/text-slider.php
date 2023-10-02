<?php
$textSlider = new tsc__TextSlider();
$sliders = $textSlider->getTextSlides();



$class_name = 'text-slider';
if (!empty($block['className'])) $class_name .= ' ' . $block['className'];
if (!empty($block['align'])) $class_name .= ' align' . $block['align'];
?>

    <section class="<?= esc_attr($class_name); ?> ">
        <h2 class=" has-text-align-center"><?php _e('Das sagen unsere Kunden', 'ize');?></h2>
        <div class="background-image">
        <p class="text-slider-sign has-text-align-center"><?php _e(" \" ");?></p>
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($sliders as $slide) : ?>
                        <li class="splide__slide">
                            <div class="wrapper">
                                <div class="container-small">
                                    <div class="inner">
                                       <?php  echo tsc_create_html('<p class="text-slider-text has-text-align-center">', '</p>', $slide['text']); ?>
                                       <?php  echo tsc_create_html('<p class="text-slider-short-text is-style-short-text has-text-align-center">', '</p>', $slide['shorttext']); ?>
                                    </div>
                                </div>
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
    </section>
<?php if (is_admin()) : ?>
    <h3 class="empty-block"><?php esc_attr_e('Text-Slider-Block bearbeiten &raquo;', 'ize'); ?></h3>
<?php endif;