<?php
$partner_carousel = new tsc_PartnerCarousel;
$partner_brands = $partner_carousel->get_partner_brands();
?>

<?php if ($partner_brands): ?>
    <section class="partner-carousel">
        <h2 class="has-text-align-center"><?php _e('Unsere Partner', 'ize') ?></h2>
        <div class="splide">
            <div class="splide__track">
                <ul class="splide__list">

                    <?php foreach ($partner_brands as $brand): ?>
                        <li class="splide__slide">
                            <div class="wrapper">
                                <?php if (!empty($brand['url'])): ?>
                                    <a href="<?php echo $brand['url']; ?>">
                                        <?php if (!empty($brand['image'])) echo wp_get_attachment_image($brand['image'], 'full'); ?>
                                    </a>
                                <?php else: ?>
                                    <?php if (!empty($brand['image'])) echo wp_get_attachment_image($brand['image'], 'full'); ?>
                                <?php endif; ?>

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

    </section>
<?php endif; ?>