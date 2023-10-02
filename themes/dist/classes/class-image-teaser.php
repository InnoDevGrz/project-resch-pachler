<?php

add_action('acf/init', function () {

    if (function_exists('acf_register_block_type')) {
        tsc__ImageTeaser::init();
    }

});

class tsc__ImageTeaser
{
    static function init()
    {
        self::registerAcfBlock();
        self::registerACFfields();
    }

    protected $image_teaser = array();
    protected $columns = 0;

    static function registerAcfBlock()
    {
        acf_register_block_type(array(
            'supports' => array(
                'anchor' => false,
                'align' => array('wide', 'full'),
                'mode' => false,
            ),
            'name' => 'tsc-block-image-teaser',
            'title' => __('Image Teaser', 'ize'),
            'description' => __('Image Teaser mit Link 3-Spalten', 'ize'),
            'keywords' => array('gallerie', 'bild', 'foto', 'picture', 'image'),
            'render_template' => 'template-parts/blocks/image-teaser.php',
            'category' => 'tsc-blocks',
            'icon' => 'slides',
            'post_types' => array('page'),
            'mode' => false,

        ));
    }
    static function registerACFfields(){
        add_action( 'acf/include_fields', function() {
            if ( ! function_exists( 'acf_add_local_field_group' ) ) {
                return;
            }

            acf_add_local_field_group( array(
                'key' => 'group_63ff6521e2ae8',
                'title' => 'Image Teaser',
                'fields' => array(
                    array(
                        'key' => 'field_63ff6e2ef3374',
                        'label' => 'Image Teaser Spalten',
                        'name' => 'image_teaser_columns',
                        'aria-label' => '',
                        'type' => 'range',
                        'instructions' => '',
                        'required' => 0,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'default_value' => 4,
                        'min' => 1,
                        'max' => 4,
                        'step' => '',
                        'prepend' => '',
                        'append' => '',
                    ),
                    array(
                        'key' => 'field_63ff6522d2df8',
                        'label' => 'Image Teaser',
                        'name' => 'image_teaser',
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
                                'key' => 'field_64a47bc8bcdb2',
                                'label' => 'Titel',
                                'name' => 'title',
                                'aria-label' => '',
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
                                'maxlength' => '',
                                'placeholder' => '',
                                'prepend' => '',
                                'append' => '',
                                'parent_repeater' => 'field_63ff6522d2df8',
                            ),
                            array(
                                'key' => 'field_63ff653ed2df9',
                                'label' => 'Bild',
                                'name' => 'image',
                                'aria-label' => '',
                                'type' => 'image_aspect_ratio_crop',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '20',
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
                                'parent_repeater' => 'field_63ff6522d2df8',
                            ),
                            array(
                                'key' => 'field_63ff655dd2dfa',
                                'label' => 'Overlay Inhalt',
                                'name' => 'content',
                                'aria-label' => '',
                                'type' => 'wysiwyg',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '40',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'default_value' => '',
                                'tabs' => 'all',
                                'toolbar' => 'full',
                                'media_upload' => 1,
                                'delay' => 0,
                                'parent_repeater' => 'field_63ff6522d2df8',
                            ),
                            array(
                                'key' => 'field_63ff657fd2dfb',
                                'label' => 'Link',
                                'name' => 'link',
                                'aria-label' => '',
                                'type' => 'link',
                                'instructions' => '',
                                'required' => 0,
                                'conditional_logic' => 0,
                                'wrapper' => array(
                                    'width' => '20',
                                    'class' => '',
                                    'id' => '',
                                ),
                                'return_format' => 'url',
                                'parent_repeater' => 'field_63ff6522d2df8',
                            ),
                        ),
                    ),
                ),
                'location' => array(
                    array(
                        array(
                            'param' => 'block',
                            'operator' => '==',
                            'value' => 'acf/tsc-block-image-teaser',
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
            ) );
        } );




    }



    public function getImageTeasers(){
        return $this->images = get_field('image_teaser');
    }

    public function getImageTeaserColumns(){
        return $this->columns = get_field('image_teaser_columns');
    }

}

