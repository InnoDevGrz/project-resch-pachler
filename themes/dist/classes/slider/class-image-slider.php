<?php

/*
 * in acf.php:
 * $init_dailyMenu = new tsc__DailyMenu();
 * $init_dailyMenu->init_backend_tsc();
 *
 *
 * view: template-parts/blocks/image-slider.php
 * js: slider.js
 * */


class tsc__Imageslider
{

    protected $slide_images = array();

    public function __construct()
    {
        $this->slide_images = get_field('block_image_slider');
    }

    static function init(){
        self::registerAcfBlock();
        self::registerAcfFields();
    }

    /* *** B A C K E N D *** */
    static function registerAcfBlock()
    {
        if (function_exists('acf_register_block_type')):

            acf_register_block_type(array(
                'supports' => array(
                    'anchor' => false,
                    'align' => array('full'),
                    'mode' => false,
                ),
                'name' => 'tsc-image-slider',
                'title' => __('Image-Slider', 'ize'),
                'description' => __('Image-Slider', 'ize'),
                'keywords' => array('slider', 'slideshow', 'bild', 'foto', 'picture', 'image'),
                'render_template' => 'template-parts/blocks/image-slider.php',
                'category' => 'tsc-blocks',
                'icon' => 'slides',
                'post_types' => array('page'),
                'mode' => false,
                //'align' => 'full',
            ));

        endif;
    }
    static function registerAcfFields(){
        if (function_exists('acf_add_local_field_group')):

            acf_add_local_field_group(array(
                'key' => 'group_63bc82a6366db',
                'title' => 'Image-Slider',
                'fields' => array(
                    array(
                        'key' => 'field_63bc82a6458ca',
                        'label' => 'Slideshow-Bilder',
                        'name' => 'block_image_slider',
                        'aria-label' => '',
                        'type' => 'repeater',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'layout' => 'table',
                        'pagination' => 0,
                        'min' => 0,
                        'max' => 0,
                        'collapsed' => '',
                        'button_label' => 'Eintrag hinzufügen',
                        'rows_per_page' => 20,
                        'sub_fields' => array(
                            array(
                                'key' => 'field_63bc84e9eac73',
                                'label' => '',
                                'name' => 'image',
                                'aria-label' => '',
                                'type' => 'image_aspect_ratio_crop',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'crop_type' => 'aspect_ratio',
                                'aspect_ratio_width' => 16,
                                'aspect_ratio_height' => 10,
                                'return_format' => 'id',
                                'preview_size' => 'medium',
                                'library' => 'all',
                                'min_width' => '',
                                'min_height' => '',
                                'min_size' => '',
                                'max_width' => '',
                                'max_height' => '',
                                'max_size' => '',
                                'mime_types' => '',
                                'parent_repeater' => 'field_63bc82a6458ca',
                            ),
                        ),
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'block',
                            'operator' => '==',
                            'value' => 'acf/tsc-image-slider',
                        ),
                    ),
                ),
                'menu_order' => 0,
                'position' => 'normal',
                'style' => 'default',
                'label_placement' => 'top',
                'instruction_placement' => 'label',
                'hide_on_screen' => '',
                'active' => true,
                'description' => '',
                'show_in_rest' => 0,
            ));

        endif;
    }


    protected function set_slider_images(){
        $this->slide_images = get_field('block_image_slider');
    }

    public function get_slider_images(){
        return $this->slide_images;
    }


}

