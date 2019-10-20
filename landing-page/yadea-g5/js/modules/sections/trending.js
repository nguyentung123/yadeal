import  { contextFadeIn, contextInit } from './utils';

export default class Trending {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.$context = $('.g5-leading-section');

        this.$sliderWrapper = $('.leading-slider');

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents() {
        this.InitSection();
        this.SetupAnimation();
    }


    /* ===================================
     *  METHODS
     * =================================== */
    InitSection(){
        contextInit(this.$context);

        this.SetupSlider();
    }

    SetupAnimation(){
        g5Listener.on('trending-anim', () => {
            contextFadeIn(this.$context, () => {
                console.log('Finished');
            });
        });
    }

    SetupSlider(){
        this.$sliderWrapper.slick({
            dots: true,
            arrows: false,
            dotsClass: 'g5-slider-dots',
            // fade: true,
            easing: 'ease-out',
            autoplaySpeed: 4000,
            speed: 650,
            swipeToSlide: true,
            autoplay: true,
        })
    }
}
