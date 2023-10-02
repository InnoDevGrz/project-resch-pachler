import Splide from '@splidejs/splide';

let el = document.querySelectorAll('.block-header-slider .splide');
for (let i = 0; i < el.length; i++) {
    new Splide(el[i], {
        type: 'fade',
        rewind: true,
        perPage: 1,
        autoplay: true,
        interval: 7000,
        arrows: false,
        pagination: true
    }).mount();
}


let slideoverlay = document.querySelectorAll('.block-header-slider-overlay .splide');
for (let i = 0; i < slideoverlay.length; i++) {
    new Splide(slideoverlay[i], {
        type: 'fade',
        rewind: true,
        perPage: 1,
        autoplay: true,
        interval: 7000,
        arrows: false,
        pagination: false
    }).mount();
}



let element = document.querySelectorAll('.image-slider .splide');
for (let i = 0; i < element.length; i++) {
    new Splide(element[i], {
        type: 'fade',
        rewind: true,
        perPage: 1,
        autoplay: true,
        interval: 7000,
        arrows: false,
        pagination: true,
    }).mount();
}

let textslider = document.querySelectorAll('.text-slider .splide');
for (let i = 0; i < textslider.length; i++) {
    new Splide(textslider[i], {
        type: 'loop',
        rewind: true,
        perPage: 1,
        autoplay: true,
        interval: 3500,
        arrows: false,
        pagination: true
    }).mount();
}


let eventslider = document.querySelectorAll('.block-events .splide');
for (let i = 0; i < eventslider.length; i++) {
    new Splide(eventslider[i], {
        type: 'fade',
        rewind: true,
        perPage: 1,
        autoplay: true,
        interval: 4000,
        arrows: false,
        pagination: true
    }).mount();
}

let partner_carousel = document.querySelectorAll('.partner-carousel .splide');
for (let i = 0; i < partner_carousel.length; i++) {
    new Splide(partner_carousel[i], {
        type: 'slide',
        rewind: true,
        autoplay: true,
        interval: 4000,
        arrows: false,
        pagination: false,
        perPage: 6,
        breakpoints: {
            600: {
                perPage:1
            },
            768: {
                perPage:2
            },
            992: {
                perPage:3
            },
            1200: {
                perPage:4
            },
            1600: {
                perPage:5
            }
        }
    }).mount();
}
