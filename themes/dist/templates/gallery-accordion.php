<?php
/* Template Name: Gallerie Akkordeon */
$gallery_accordion = get_field('gallery_accordion', get_the_ID());


get_header(); ?>

    <main id="content" class="container accordion-container" role="main">
        <?php include(locate_template('template-parts/content.php')); ?>

        <div id="gallery-accordion">

            <?php foreach ($gallery_accordion as $accordion_item): ?>

                <div class="gallery-accordion-item">

                    <input type="radio" class="accordion-checkbox" name="gallery-radio"
                           id="<?php echo str_replace(' ', '', $accordion_item['label']); ?>">
                    <label for="<?php echo str_replace(' ', '', $accordion_item['label']); ?>" id="accordion-label">
                    <span class="accordion-label-text"
                          aria-hidden="true"><?php _e($accordion_item['label'], 'ize'); ?></span>
                        <span class="screen-reader-text"><?php esc_attr_e('open accordion task', 'ize'); ?></span>
                    </label>


                    <?php if ($accordion_item['reference_images']):
                        wp_enqueue_style('colorbox-css');
                        wp_enqueue_style('justifiedgallery-css');
                        wp_enqueue_script('colorbox-js');
                        wp_enqueue_script('colorbox-de-js');
                        wp_enqueue_script('justifiedgallery-js');
                        wp_enqueue_script('gallery-js');
                        ?>




                        <div class="gallery-images-wrapper">


                            <div class="accordion-gallery justified-gallery">
                                <?php foreach ($accordion_item['reference_images'] as $item): ?>
                                    <a href="<?php echo wp_get_attachment_image_url($item, 'full'); ?>">
                                        <?php echo wp_get_attachment_image($item, 'large'); ?>
                                    </a>
                                <?php endforeach; ?>
                            </div>
                        </div>

                    <?php endif; ?>


                </div>

            <?php endforeach; ?>

        </div>

    </main>

    <script>
        const firstRadioButton = document.querySelector('input[type="radio"][name="gallery-radio"]');
        firstRadioButton.checked = true;
    </script>

<?php get_footer(); ?>