<div class="footer-nav">
    <h3 class="footer-title"><?php _e('Quicklinks', 'ize'); ?></h3>

        <?php wp_nav_menu(array(
            'theme_location' => 'footer',
            'menu_class' => 'nav-menu is-style-highlights',
            'container' => 'nav',
            'depth' => 1,
            'fallback_cb' => false
        )); ?>
</div>
