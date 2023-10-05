wp.domReady(() => {

    wp.blocks.unregisterBlockStyle('core/image', 'default');
    wp.blocks.unregisterBlockStyle('core/image', 'rounded');
    wp.blocks.unregisterBlockStyle('core/buttons', 'default');
   // wp.blocks.unregisterBlockStyle('core/buttons', 'outline');
    // wp.blocks.unregisterBlockStyle('core/buttons', 'squared');
    wp.blocks.unregisterBlockStyle('core/buttons', 'fill');


    wp.blocks.registerBlockStyle('core/button', {
        name: 'btn-primary',
        label: 'Primary',
    });

    wp.blocks.registerBlockStyle('core/button', {
        name: 'btn-secondary',
        label: 'Secondary',
    });

    wp.blocks.registerBlockStyle('core/columns', {
        name: 'reverse',
        label: 'Reverse Columns on Mobile',
    });

    wp.blocks.registerBlockStyle('core/group', {
        name: 'image-shadow',
        label: 'Image Shadow',
    });

    wp.blocks.registerBlockStyle('core/group', {
        name: 'section',
        label: 'Section',
    });



    /** lists **/
    wp.blocks.registerBlockStyle('core/list', {
        name: 'highlights',
        label: 'Highlights',
    });

    wp.blocks.registerBlockStyle('core/list', {
        name: 'triangle-primary',
        label: 'Triangle Primary',
       // isDefault: true
    });

    wp.blocks.registerBlockStyle('core/list', {
        name: 'triangle-secondary',
        label: 'Triangle Secondary',
    });

    wp.blocks.registerBlockStyle('core/columns', {
        name: 'section',
        label: 'Section',
    });

    wp.blocks.registerBlockStyle('core/columns', {
        name: 'overlap-content',
        label: 'Overlap Content',
    });

    //wp.blocks.unregisterBlockType('core/media-text');

    /*** Common Blocks ***/
    //wp.blocks.unregisterBlockType('core/paragraph');
    //wp.blocks.unregisterBlockType('core/image');
    //wp.blocks.unregisterBlockType('core/heading');
    //wp.blocks.unregisterBlockType('core/gallery');
    //wp.blocks.unregisterBlockType('core/list');
    //wp.blocks.unregisterBlockType('core/quote');
    wp.blocks.unregisterBlockType('core/audio');
    //wp.blocks.unregisterBlockType('core/cover');
    //wp.blocks.unregisterBlockType('core/file');
    //wp.blocks.unregisterBlockType('core/video');

    /*** Formatting ***/
    wp.blocks.unregisterBlockType('core/code');
    //wp.blocks.unregisterBlockType('core/classic');
    //wp.blocks.unregisterBlockType('core/html');
    wp.blocks.unregisterBlockType('core/preformatted');
    wp.blocks.unregisterBlockType('core/pullquote');
    wp.blocks.unregisterBlockType('core/table');
    wp.blocks.unregisterBlockType('core/verse');

    /*** Layout Elements ***/
    wp.blocks.unregisterBlockType('core/nextpage');
    //wp.blocks.unregisterBlockType('core/spacer');
    //wp.blocks.unregisterBlockType('core/buttons');
    //wp.blocks.unregisterBlockType('core/columns');
    //wp.blocks.unregisterBlockType('core/group');
    //wp.blocks.unregisterBlockType('core/media-text');
    wp.blocks.unregisterBlockType('core/more');
    //wp.blocks.unregisterBlockType('core/reusable'); TODO: Wiederverwendbaren Block testen
    //wp.blocks.unregisterBlockType('core/separator');

    /*** Theme Blocks ***/
    //wp.blocks.unregisterBlockType('core/site-logo');
    wp.blocks.unregisterBlockType('core/site-tagline');
    wp.blocks.unregisterBlockType('core/site-title');
    wp.blocks.unregisterBlockType('core/query');
    wp.blocks.unregisterBlockType('core/post-title');
    wp.blocks.unregisterBlockType('core/post-content');
    wp.blocks.unregisterBlockType('core/post-date');
    wp.blocks.unregisterBlockType('core/post-excerpt');
    wp.blocks.unregisterBlockType('core/post-featured-image');
    wp.blocks.unregisterBlockType('core/post-terms');
    //wp.blocks.unregisterBlockType('core/post-archivetitle'); TODO: find correct name
    wp.blocks.unregisterBlockType('core/loginout');
    wp.blocks.unregisterBlockType('core/page-list');

    /*** Widgets ***/
    //wp.blocks.unregisterBlockType('core/shortcode');
    wp.blocks.unregisterBlockType('core/archives');
    wp.blocks.unregisterBlockType('core/calendar');
    wp.blocks.unregisterBlockType('core/categories');
    wp.blocks.unregisterBlockType('core/latest-comments');
    wp.blocks.unregisterBlockType('core/latest-posts');
    wp.blocks.unregisterBlockType('core/rss');
    wp.blocks.unregisterBlockType('core/search');
    wp.blocks.unregisterBlockType('core/social-links');
    wp.blocks.unregisterBlockType('core/tag-cloud');

    /*** Embeds ***/
    //wp.blocks.unregisterBlockVariation('core/embed', 'youtube');
    wp.blocks.unregisterBlockVariation('core/embed', 'amazon-kindle');
    wp.blocks.unregisterBlockVariation('core/embed', 'animoto');
    wp.blocks.unregisterBlockVariation('core/embed', 'cloudup');
    wp.blocks.unregisterBlockVariation('core/embed', 'crowdsignal');
    wp.blocks.unregisterBlockVariation('core/embed', 'dailymotion');
    wp.blocks.unregisterBlockVariation('core/embed', 'flickr');
    wp.blocks.unregisterBlockVariation('core/embed', 'imgur');
    wp.blocks.unregisterBlockVariation('core/embed', 'issuu');
    wp.blocks.unregisterBlockVariation('core/embed', 'kickstarter');
    wp.blocks.unregisterBlockVariation('core/embed', 'meetup-com');
    wp.blocks.unregisterBlockVariation('core/embed', 'mixcloud');
    wp.blocks.unregisterBlockVariation('core/embed', 'reddit');
    wp.blocks.unregisterBlockVariation('core/embed', 'reverbnation');
    wp.blocks.unregisterBlockVariation('core/embed', 'screencast');
    wp.blocks.unregisterBlockVariation('core/embed', 'scribd');
    wp.blocks.unregisterBlockVariation('core/embed', 'slideshare');
    wp.blocks.unregisterBlockVariation('core/embed', 'smugmug');
    wp.blocks.unregisterBlockVariation('core/embed', 'soundcloud');
    wp.blocks.unregisterBlockVariation('core/embed', 'speaker-deck');
    wp.blocks.unregisterBlockVariation('core/embed', 'spotify');
    wp.blocks.unregisterBlockVariation('core/embed', 'tiktok');
    wp.blocks.unregisterBlockVariation('core/embed', 'ted');
    wp.blocks.unregisterBlockVariation('core/embed', 'twitter');
    wp.blocks.unregisterBlockVariation('core/embed', 'tumblr');
    wp.blocks.unregisterBlockVariation('core/embed', 'videopress');
    wp.blocks.unregisterBlockVariation('core/embed', 'vimeo');
    wp.blocks.unregisterBlockVariation('core/embed', 'wordpress');
    wp.blocks.unregisterBlockVariation('core/embed', 'wordpress-tv');
});