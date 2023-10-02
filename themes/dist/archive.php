<?php get_header(); ?>
<main id="content" class="container post-list" role="main">
    <?php include(locate_template('template-parts/archive-title.php')); ?>
    <?php if (get_the_archive_description()) : ?>
        <div class="archive-description">
            <?= get_the_archive_description(); ?>
        </div>
    <?php endif; ?>
    <?php if (have_posts()) {
        include(locate_template('template-parts/posts/list.php'));
        // utils.php
        the_archive_pagination();
    } else {
        include(locate_template('template-parts/posts/noposts.php'));
    } ?>
</main>
<?php get_footer();  ?>

