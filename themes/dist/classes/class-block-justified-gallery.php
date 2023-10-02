<?php

class tsc__BlockJustifiedGallery
{


    protected $blockGalleryImages = array();

    static function init(){
        self::registerAcfBlock();
       // self::registerAcfFields();
    }

    static function registerAcfBlock()
    {
            acf_register_block_type(array(
                'supports' => array(
                    'anchor' => false,
                   //'align' => array('full', 'wide'),
                    'mode' => false,
                ),
                'name' => 'tsc-block-justified-gallery',
                'title' => __('Justified Gallery', 'ize'),
                'description' => __('Dynamische Galleie', 'ize'),
                'keywords' => array('gallerie', 'bild', 'foto', 'picture', 'image'),
                'render_template' => 'template-parts/blocks/justified-gallery.php',
                'category' => 'tsc-blocks',
                'icon' => 'slides',
                'post_types' => array('page'),
                'mode' => false,
            ));
    }

    public function getGalleryImages(){
        return $this->blockGalleryImages = get_field('block_justified_gallery_images');
    }

    // acf fields in json gespeichert


}