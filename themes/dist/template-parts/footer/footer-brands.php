<div class="footer-brands">
    <?php
    $footer_brands = get_field('footer_brands', 'option');
    foreach ($footer_brands as $brand_item) {
        echo '<figure>';
        echo wp_get_attachment_image($brand_item['footer_brand'], 'small');
        echo '</figure>';
    }
    ?>
</div>