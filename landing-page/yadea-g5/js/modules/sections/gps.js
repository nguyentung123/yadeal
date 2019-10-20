import  { contextFadeIn, contextInit } from './utils';

export default class GPS {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.$context = $('.g5-smart-gps-section');

        this.$mapImg = $('.g5-smart-gps-section .map-image img');
        this.$pinImg = $('.g5-smart-gps-section .pin-image img');

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents() {
        TweenMax.set(this.$mapImg, {y: 50, opacity: 0, rotationY: 40, scaleY: 0.75, transformOrigin:'50% 100%'});
        TweenMax.set(this.$pinImg, {y: -18, opacity: 0});
        contextInit(this.$context);
        g5Listener.on('gps-anim', () => {
            contextFadeIn(this.$context, () => {
                TweenMax.to(this.$mapImg, 0.75, {opacity: 1, rotationY: 0, y: 0, scaleY: 1,
                onComplete: () => {
                    TweenMax.to(this.$pinImg, 0.35, {y: 0, opacity: 1, onComplete: () => {
                            this.$pinImg.addClass('toggling');
                        }});
                }});
            });
        })
    }


    /* ===================================
     *  METHODS
     * =================================== */
}
