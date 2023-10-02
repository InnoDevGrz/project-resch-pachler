function DomReady(fn) {
    if (typeof fn !== 'function') {
        return;
    }
    if (document.readyState === 'interactive' || document.readyState === 'complete') {
        return fn();
    }
    document.addEventListener('DOMContentLoaded', fn, false);
}


function jsLoaded() {
    const htmlTag = document.querySelector('html')
    htmlTag.classList.remove('no-js');
    htmlTag.classList.add('js');
}

function addMenuToggle() {
    const menuHasChildrean = document.querySelectorAll('#main-nav .menu-item-has-children > a');
    for (var i = 0; i < menuHasChildrean.length; i++) {
        let id = menuHasChildrean[i].parentNode.getAttribute('id') + '-toggle';
        menuHasChildrean[i].insertAdjacentHTML('afterend', '<input type="checkbox" id="' + id + '">' +
            '<label for="' + id + '" class="menu-toggle">' +
            '<em aria-hidden="true"></em>' +
            '<span class="screen-reader-text">more</span>' +
            '</label>');
    }
}

function currentMenu() {
    const checkboxes = document.querySelectorAll('.current-menu-parent > input[type="checkbox"], .current-menu-ancestor > input[type="checkbox"]');
    for (checkbox of checkboxes) {
        checkbox.checked = true;
    }
}

function scrollTopButtonVisible() {
    const scrollTop = document.getElementById('scroll-top');
    if (window.pageYOffset > 300) {
        scrollTop.classList.add("visible");
    } else {
        scrollTop.classList.remove("visible");
    }
}


function navbarRecolor() {
    const scrollTop = document.getElementById('navbar');
    if (window.pageYOffset > 350) {
        scrollTop.classList.add("recolor");
    } else {
        scrollTop.classList.remove("recolor");
    }
}

function elementInViewport(elem, classToAdd) {

    var window_height = window.innerHeight || document.documentElement.clientHeight;
    var window_top_position = (window.pageYOffset) ;
    var window_bottom_position = (window_top_position + window_height );

    var elemLength = elem.length;
    var i;

    for (i = 0; i < elemLength; ++i) {

        var element_height = elem[i].clientHeight;
        var element_top_position = elem[i].getBoundingClientRect().top + window_top_position;
        var element_bottom_position = (element_top_position + element_height);
        if ((element_bottom_position  > window_top_position) && ( element_top_position  < window_bottom_position)) {
            elem[i].classList.add(classToAdd)

            /* if (!hasClass(elem[i], classToAdd)) {
                 addClass(elem[i], classToAdd);
              }
          } else {
              delClass(elem[i], classToAdd);
        }  */
        }

    }

}


function tsc_toggleMenuScrollUp() {
    const navbar = document.getElementById('navbar');

    window.onscroll = function (e) {
        // print "false" if direction is down and "true" if up
        //console.log(this.oldScroll > this.scrollY);

        if (this.oldScroll > (this.scrollY + 25)) {
            navbar.classList.add("scroll-up");
            navbar.classList.remove("scroll-down");
        } else if (this.oldScroll < (this.scrollY - 25)) {
            navbar.classList.add("scroll-down");
            navbar.classList.remove("scroll-up");
        }
        this.oldScroll = this.scrollY;
    }
}

function elementAddAnimate() {
    let elements = document.querySelectorAll('h1, h2, h3, p')
    for (let i = 0; i < elements.length; i++) {
        elements[i].classList.add('animate', 'fade-in-up')
    }
}

function initParallax() {
    //var cover = document.querySelector('.simplyparallax');
    //var image = cover.querySelector('.wp-block-cover__image-background');
    var image = document.querySelectorAll(' .has-parallax .wp-block-cover__image-background');
    new simpleParallax(image, {
        delay: 0.2,
        scale: 1.7,
        orientation: 'down',
    });
}






DomReady(() => {
    jsLoaded();
    scrollTopButtonVisible();
    tsc_toggleMenuScrollUp();
    navbarRecolor();
    addMenuToggle();
    currentMenu();
    elementAddAnimate();
    initParallax();
    elementInViewport(document.querySelectorAll('.animate'), 'animated');
});


window.addEventListener("resize", function () {
    tsc_toggleMenuScrollUp();
    elementInViewport(document.querySelectorAll('.animate'), 'animated');

    scrollTopButtonVisible();
    navbarRecolor();
});

window.addEventListener('scroll', function () {
    tsc_toggleMenuScrollUp();
    scrollTopButtonVisible();
    navbarRecolor();
    elementInViewport(document.querySelectorAll('.animate'), 'animated');

}, false);

