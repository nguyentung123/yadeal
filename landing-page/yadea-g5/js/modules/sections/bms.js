import  { contextFadeIn, contextInit } from './utils';

export default class BMS {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.$context = $('.g5-battery-management-section');

        this.$featureList = $('.g5-battery-management-section .battery-management-feature-list');

        this.$batteryImage = $('.g5-battery-management-section .battery-img');
        this.$effectImage = $('.g5-battery-management-section .effect-img');
        this.$iconFeatures = $('.g5-battery-management-section .battery-functions');

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents() {
        contextInit(this.$context, [this.$featureList]);

        // Others
        TweenMax.set(this.$batteryImage, {y: -50, opacity: 0});
        TweenMax.set(this.$iconFeatures, {y: 35, opacity: 0});

        g5Listener.on('bms-anim', () => {
            contextFadeIn(this.$context, () => {
                this.$effectImage.addClass('animating');

                TweenMax.to(this.$iconFeatures, 0.7, {y: 0, opacity: 1});
            }, [this.$featureList, this.$batteryImage]);
        })
    }


    /* ===================================
     *  METHODS
     * =================================== */
}
