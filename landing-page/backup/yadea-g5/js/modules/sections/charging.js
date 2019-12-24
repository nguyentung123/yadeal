import  { contextFadeIn, contextInit } from './utils';

export default class Charging {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.$context = $('.g5-charging-usb-section .context-block');
        this.$imageHolder = $('.g5-charging-usb-section .effect-holder .img-holder');

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents() {
        contextInit(this.$context);

        TweenMax.set(this.$imageHolder, {opacity: 0});

        g5Listener.on('charging-anim', () => {
            TweenMax.to(this.$imageHolder, 0.7, {
                opacity: 1,
                onComplete: () => {
                    contextFadeIn(this.$context);
                }
            });
        });
    }


    /* ===================================
     *  METHODS
     * =================================== */
}
