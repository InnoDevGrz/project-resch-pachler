<?php

$block_headerslider = get_field('block_blockslider');
;
$overlay = "";
$overlay = get_field('overlay');


$class_name = 'block-slider';
if (!empty($block['className'])) $class_name .= ' ' . $block['className'];
?>

    <div class="<?= esc_attr($class_name); ?>">
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">
                    <?php foreach ($block_headerslider as $slide) : ?>
                        <li class="splide__slide">
                            <div class="wrapper <?php echo $overlay; ?>">
                                <div class="container">
                                    <div class="inner">
                                        <?php
                                        $html = '<' . $slide['h_tag'] . (($slide['h_tag'] != 'span') ? '  itemprop="headline"' : '') . ' class="headline">';
                                        $html .= $slide['headline'];
                                        $html .= '</' . $slide['h_tag'] . '>';

                                        $html .= '<' . $slide['sub_h_tag'] . (($slide['sub_h_tag'] != 'span') ? '  itemprop="headline"' : '') . ' class="subtitle">';
                                        $html .= $slide['subtitle'];
                                        $html .= '</' . $slide['sub_h_tag'] . '>';


                                        if (!empty($slide['button']['url'])) {
                                            $html .= '<a class="btn-primary" href="' . $slide['button']['url'] . '">' . $slide['button']['title'] . '</a>';
                                        }
                                        echo $html;
                                        ?>
                                    </div>
                                </div>
                                <?php if (!empty($slide['image'])) echo wp_get_attachment_image($slide['image'], 'full'); ?>
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
    <h3 class="empty-block"><?php esc_attr_e('Headerslider-Block bearbeiten &raquo;', 'ize'); ?></h3>
<?php endif;