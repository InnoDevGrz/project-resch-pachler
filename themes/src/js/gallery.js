

(function ($) {


    $(document).ready(function () {



        $('.accordion-gallery ').justifiedGallery({
            lastRow : 'nojustify',
            rowHeight : 150,
            maxRowHeight: 150,
            rel : 'justified-gallery',
            margins : 25,
            randomize: true,
            captions: true,


        }).on('jg.complete', function () {
            $(this).find('a').colorbox({
                maxWidth : '100%',
                maxHeight : '100%',
                opacity : 0.8,
                transition : 'elastic',
                current : ''
            });
        });

        $('.block-justified-gallery').justifiedGallery({
            lastRow : 'justify',
            rowHeight : 300,
            maxRowHeight: 350,
            rel : 'justified-gallery',
            margins : '30px',
            randomize: true,
            captions: true,


        }).on('jg.complete', function () {
            $(this).find('a').colorbox({
                maxWidth : '100%',
                maxHeight : '100%',
                opacity : 0.8,
                transition : 'elastic',
                current : ''
            });
        });

        $('.single-justified-gallery').justifiedGallery({
            lastRow : 'justify',
            rowHeight : 300,
            maxRowHeight: 350,
            rel : 'justified-gallery',
            margins : '30px',
            randomize: true,
            captions: true,


        }).on('jg.complete', function () {
            $(this).find('a').colorbox({
                maxWidth : '100%',
                maxHeight : '100%',
                opacity : 0.8,
                transition : 'elastic',
                current : ''
            });
        });


    });


})(jQuery);

