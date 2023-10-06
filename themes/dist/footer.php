<footer id="page-footer" itemscope="itemscope" itemtype="https://schema.org/WPFooter">
    <div class="wrapper">
        <?php include(locate_template('template-parts/footer/contact-infos.php')); ?>
        <?php include(locate_template('template-parts/footer/navigation.php')); ?>
    </div>

    <div class="site-info">
        <span class="copyright">&copy; <?= date('Y ') . get_bloginfo('name'); ?></span>
    </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
