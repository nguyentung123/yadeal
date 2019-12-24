import  { contextFadeIn, contextInit } from './utils';

export default class Brake {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.$context = $('.g5-brake-section');

        this.$brakeFeatures = $('.g5-brake-section .brake-feature-list');

        this.brakeHighlightImg = this.$context.find('.brake-highlight-img');

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents() {
        contextInit(this.$context, [this.$brakeFeatures]);
        g5Listener.on('brake-anim', () => {
            contextFadeIn(this.$context, () => {
                console.log('Finished');
                this.brakeHighlightImg.addClass('animating');
            }, [this.$brakeFeatures]);
        })
    }


    /* ===================================
     *  METHODS
     * =================================== */
}
