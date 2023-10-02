<?php

function tsc_add_imagesize(){
    add_image_size('post_list','700','525',true);
    add_image_size('reference_image','700','393',true);
    add_image_size('event_image','1400','576',true);
    add_image_size('menu_image','300','187',true);
}
add_action('after_setup_theme', 'tsc_add_imagesize');