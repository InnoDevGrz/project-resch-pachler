<?php

class tsc__ImageBox
{

    protected $images = "";

    static function init()
    {
        self::registerAcfBlock();
    }

    static function registerAcfBlock()
    {
        acf_register_block_type(array(
            'supports' => array(
                'anchor' => false,
                'align' => array('wide'),
                'mode' => false,
            ),
            'name' => 'tsc-block-image-box',
            'title' => __('Image Box', 'ize'),
            'description' => __('Zwei Bilder mit 3dAnimation', 'ize'),
            'keywords' => array('gallerie', 'bild', 'foto', 'picture', 'image'),
            'render_template' => 'template-parts/blocks/image-box.php',
            'category' => 'tsc-blocks',
            'icon' => 'slides',
            'post_types' => array('page'),
            'mode' => false,
        ));
    }

    public function get_Images()
    {
        return $this->images = get_field('image_box');
    }

    public function getContainerHeight(){
        return $this->images = get_field('container_height');
    }

}