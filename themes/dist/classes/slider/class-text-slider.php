<?php

class tsc__TextSlider
{

    protected $textslides = array();

    public function __construct()
    {
        $this->textslides = get_field('textslide');
    }

    static function init()
    {
        self::register_acfFields();
        self::register_acfBlockType();
    }

    static function register_acfFields()
    {

        acf_add_local_field_group(array(
            'key' => 'group_62a9d2da16e27',
            'title' => 'Text-Slider',
            'fields' => array(
                array(
                    'key' => 'field_62a9d2eef9114',
                    'label' => '',
                    'name' => 'textslide',
                    'type' => 'repeater',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'collapsed' => '',
                    'min' => 0,
                    'max' => 0,
                    'layout' => 'table',
                    'button_label' => '',
                    'sub_fields' => array(
                        array(
                            'key' => 'field_62a9d30ff9115',
                            'label' => 'Text',
                            'name' => 'text',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '50',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                        array(
                            'key' => 'field_62a9d376f9116',
                            'label' => 'Short Text',
                            'name' => 'shorttext',
                            'type' => 'text',
                            'instructions' => '',
                            'required' => 0,
                            'conditional_logic' => 0,
                            'wrapper' => array(
                                'width' => '',
                                'class' => '',
                                'id' => '',
                            ),
                            'default_value' => '',
                            'placeholder' => '',
                            'prepend' => '',
                            'append' => '',
                            'maxlength' => '',
                        ),
                    ),
                ),
                array(
                    'key' => 'field_62a9d3a735ca9',
                    'label' => '',
                    'name' => 'background_image_url',
                    'type' => 'image',
                    'instructions' => '',
                    'required' => 0,
                    'conditional_logic' => 0,
                    'wrapper' => array(
                        'width' => '',
                        'class' => '',
                        'id' => '',
                    ),
                    'return_format' => 'url',
                    'preview_size' => 'full',
                    'library' => 'all',
                    'min_width' => '',
                    'min_height' => '',
                    'min_size' => '',
                    'max_width' => '',
                    'max_height' => '',
                    'max_size' => '',
                    'mime_types' => '',
                ),
            ),
            'location' => array(
                array(
                    array(
                        'param' => 'block',
                        'operator' => '==',
                        'value' => 'acf/ize-text-slider',
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
    }

    static function register_acfBlockType()
    {
        acf_register_block_type(array(
            'supports' => array(
                'anchor' => false,
                'align' => array('full'),
                'mode' => false,
            ),
            'name' => 'ize-text-slider',
            'title' => __('Text-Slider', 'ize'),
            'description' => __('Text-Slider', 'ize'),
            'keywords' => array('slider', 'headline', 'heading', 'slider', 'slideshow', 'bilder', 'images'),
            'render_template' => 'template-parts/blocks/text-slider.php',
            'category' => 'ize-blocks',
            'icon' => 'slides',
            'post_types' => array('page'),
            'mode' => false,
            'align' => 'full',
        ));
    }


    public function getTextSlides()
    {
        return $this->textslides;
    }

}













