<?php get_header(); ?>
    <main id="content" class="container post-list" role="main">


        <h1 class="headline"><?php
            $pagePosts = get_option('page_for_posts');
            if (!empty($pagePosts)) {
                echo get_the_title($pagePosts);
            } else {
                bloginfo('name');
            } ?></h1>

        <?php if (get_the_archive_description()) : ?>
            <div class="archive-description">
                <?= get_the_archive_description(); ?>
            </div>
        <?php endif; ?>
        <?php if (have_posts()) {
            include(locate_template('template-parts/posts/list.php'));
            archive_pagination();
        } else {
            include(locate_template('template-parts/posts/noposts.php'));
        } ?>
    </main>
<?php get_footer(); ?>

