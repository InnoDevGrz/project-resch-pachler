<?php

// add class to menu-item with logo image
function change_menu_item_class($classes, $item, $args, $depth) {
    // Überprüfe, ob der Menüpunkt die gewünschte ID oder Bedingung erfüllt
    $logo = get_field('menu-logo', $item);
    if ($logo) {
        $classes[] = 'menu-logo-item';
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'change_menu_item_class', 10, 4);




// add images or brand to menu item
add_filter('wp_nav_menu_objects', 'my_wp_nav_menu_objects', 10, 2);
function my_wp_nav_menu_objects($items, $args)
{

// loop
    foreach ($items as &$item) {

// vars
        $image = get_field('menu-image', $item);
        $logo = get_field('menu-logo', $item);


// append icon
    if ($image) {

        $item->title .= wp_get_attachment_image($image, 'menu_image', '', array('class' => "aspect-ratio-16-10"));
    }

    if ($logo) {
        $logo_image = wp_get_attachment_image(get_theme_mod('custom_logo'), 'full', false, array(
            'class' => 'menu-brand',
            'aria-hidden' => 'true',
        ));

        $item->title = '<span class="menu-brand">'
            . '<span class="screen-reader-text">' . esc_attr__("Home", "ize") . '</span>'
            . $logo_image . '</span>';
        apply_filters('first_filter_hook', $item->classes, $item );

    }


}


// return


    return $items;

}

