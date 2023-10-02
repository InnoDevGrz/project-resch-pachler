<div id="navbar" class="scroll-up">


    <div class="brand">
        <?php if (function_exists('the_custom_logo')) the_custom_logo(); ?>
    </div>
    <input type="checkbox" id="trigger-menu">
    <label for="trigger-menu" id="menu-button">
        <span class="sign" aria-hidden="true"></span>
        <span class="screen-reader-text"><?php esc_attr_e('open navigation', 'ize'); ?></span>
    </label>




    <nav id="primary-nav" itemscope="itemscope" itemtype="https://schema.org/SiteNavigationElement">
        <?php wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'nav-menu',
            'menu_id' => 'main-nav',
            'container' => false,
            'depth' => 2,
            'fallback_cb' => false
        )); ?>
        <?php if (function_exists('pll_the_languages')) : ?>
            <div class="nav-area">
                <ul class="languages">
                    <?php pll_the_languages(array(
                        'hide_if_empty' => 0
                    )); ?>
                </ul>
            </div>
        <?php endif; ?>
    </nav>

    <div class="mobile-menu-overlay desktop-off"></div>
</div>
