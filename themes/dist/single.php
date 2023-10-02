<?php get_header(); ?>
    <div class="container">
        <main id="content">
            <?php

            if (has_post_thumbnail()) {
                the_post_thumbnail('large');
            }

            the_title('<h1>', '</h1>');


            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    the_content();
                }
            }

            get_tsc_post_pagination('Voriges Gericht', 'Nächstges Gericht');
            ?>


        </main>



    </div>
<?php get_footer(); ?>