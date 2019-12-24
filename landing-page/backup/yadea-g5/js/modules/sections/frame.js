import  { contextFadeIn, contextInit } from './utils';

export default class Frame {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.$context = $('.g5-steel-frame-section');

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents() {
        contextInit(this.$context);
        g5Listener.on('frame-anim', () => {
            contextFadeIn(this.$context, () => {
                console.log('Finished');
            });
        })
    }


    /* ===================================
     *  METHODS
     * =================================== */
}
