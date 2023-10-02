<h1 class="headline"><?php
    if (is_category()) {
        single_cat_title();
    } else {
        the_archive_title();
    } ?></h1>