require('./bootstrap');
import 'swiper/css';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import WOW from 'wow.js'
import $ from "jquery";

// require('./gsap');

const wow = new WOW(
    {
        boxClass: 'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset: 100,          // distance to the element when triggering the animation (default is 0)
        duration: .5,
        mobile: true,       // trigger animations on mobile devices (default is true)
        live: true,       // act on asynchronously loaded content (default is true)
        callback: function (box) {
            // the callback is fired every time an animation is started
            // the argument that is passed in is the DOM node being animated
        },
        scrollContainer: null,    // optional scroll container selector, otherwise use window,
        resetAnimation: true,     // reset animation on end (default is true)
    }
);

wow.init();

$(document).ready(function () {
    $(window).scroll(function () { // check if scroll event happened
        if ($(document).scrollTop() > 50) { // check if user scrolled more than 50 from top of the browser window
            $('.backTo_Top').removeClass('outro');
        } else if ($(document).scrollTop() <= 50) {
            $('.backTo_Top').addClass('outro');
        }
    })
})
document.addEventListener('DOMContentLoaded', function () {
    const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
    const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))
    //toggle header on time
    const toggleScrollClass = function () {
        if (window.scrollY > 24) {
            document.body.classList.add('scrolled');
        } else {
            document.body.classList.remove('scrolled');
        }
    }

    toggleScrollClass();

    //check scroll to take actions on it
    window.addEventListener('scroll', function () {
        toggleScrollClass();
    });

    function realIndexChange () {
        let blocks = document.getElementsByClassName('heroSlider');
        let index = this.realIndex + 1; /* slide 1 => slides[1] */
        let current_data = this.slides[index].dataset.color;

        for (var i=0;i<blocks.length;i++) {
            blocks[i].style.background =current_data;
        }
    }
    const swiper = new Swiper('.hero-slide', {
        // Optional parameters
        loop: true,
        effect: 'slide',
        slidesPerView: 1,
        direction: 'horizontal',
        // centeredSlides: true,
        // spaceBetween: 20,
        navigation: {
            nextEl: '.swiper-button-next-unique',
            prevEl: '.swiper-button-prev-unique',
        },
        autoplay: {
            delay: 7000,
        },
        disableOnInteraction: false,
        breakpoints: {
            992: {
                slidesPerView: 1,
            }
        },
        on: {
            slideChange: realIndexChange,
            // init: realIndexChange
        }

    })

});
