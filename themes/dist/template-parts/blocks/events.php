<?php

$no_events = get_field('nos_events');
$event_infos = get_field('event_infos', 'option');


if (!empty($block['anchor'])) $id = $block['anchor'];
$className = 'block-events';
if (!empty($block['className'])) $className .= ' ' . $block['className'];

$event_query = get_inno_events(array(
    'posts_per_page' => -1,
));
?>

<?php
if ($event_query->have_posts()) :?>
    <div class="events">
        <h2 class="event-title"><?php _e('News', 'ize'); ?></h2>

        <div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
            <div class="splide">
                <div class="splide__track">
                    <ul class="splide__list">
                        <?php while ($event_query->have_posts()): $event_query->the_post(); ?>
                            <li class="splide__slide">
                                <?php
                                $post_id = get_the_ID();
                                $post_info = get_field('info', $post_id);
                                $date_from = substr(get_field('date_from', $post_id), 0, 16);
                                $date_to = substr(get_field('date_to', $post_id), 0, 16);
                                ?>

                                <?php if (has_post_thumbnail()) {
                                    echo '<figure class="event-image">';
                                    the_post_thumbnail('event_image', $post_id);
                                    echo '</figure>';
                                } ?>

                                <div class="event-description animate">
                                    <?php the_title('<h3 class="event-title">', '</h3>'); ?>
                                    <?php echo tsc_create_html('<p class="descr">', '</p>', $post_info); ?>

                                </div>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>
        </div>
        <?php
        wp_enqueue_style('slider-css');
        wp_enqueue_script('slider-js');
        ?>
    </div>
<?php
endif; ?>


<?php //wp_reset_postdata(); ?>
<?php $event_query->reset_postdata(); ?>

<?php if (is_admin()) : ?>
    <h3 class="empty-block"><?php esc_attr_e('Headerslider-Block bearbeiten &raquo;', 'ize'); ?></h3>
<?php endif;