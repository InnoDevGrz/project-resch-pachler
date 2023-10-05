<?php

$headerslider = new tsc__HeaderSlider();

$class_name = 'block-header-slider';
if (!empty($block['className'])) $class_name .= ' ' . $block['className'];
if (!empty($block['align'])) $class_name .= ' align' . $block['align'];
?>

    <header class="<?= esc_attr($class_name); ?>">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($headerslider->get_headerslider_data() as $header_slide) : ?>
                        <li class="splide__slide">
                            <div class="wrapper">
                                <div class="container">
                                    <div class="inner">
                                        <?php
                                        echo $headerslider->get_headline($header_slide);
                                        echo $headerslider->get_subheadline($header_slide);
                                        echo $headerslider->get_button($header_slide);
                                        ?>
                                    </div>
                                </div>
                                <?php if (!empty($header_slide['image'])) echo '<figure>' . wp_get_attachment_image($header_slide['image'], 'full') . '</figure>'; ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <?php
        $teasers = $headerslider->get_headerslider_teaser();
        ?>

        <?php if ($teasers): ?>
        <div class="hs-teaser">
            <?php foreach ($teasers as $teaser): ?>
                <a class="hs-teaser-item" href="<?= $teaser['link']; ?>"><?= $teaser['teaser_content']; ?></a>
            <?php endforeach; ?>
        </div>
            <?php endif; ?>

            <?php
            wp_enqueue_style('slider-css');
            wp_enqueue_script('slider-js');
            ?>
    </header>
<?php if (is_admin()) : ?>
    <h3 class="empty-block"><?php esc_attr_e('Headerslider-Block bearbeiten &raquo;', 'ize'); ?></h3>
<?php endif;