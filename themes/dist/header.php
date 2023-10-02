<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php
/* set custom menu class to wp classes*/
//$menu_body_class = new tsc__MenuConfig;
body_class();
?>>

<?php wp_body_open();
include(locate_template('template-parts/header/navigation.php'));
include(locate_template('template-parts/header/sidebar-menu.php'));
include(locate_template('template-parts/header/scroll-top.php'));
