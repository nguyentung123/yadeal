import  { contextFadeIn, contextInit } from './utils';

export default class Led {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.$context = $('.g5-led-section');
        this.$ledsHolder = $('.g5-led-section .leds-holder');

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents() {
        contextInit(this.$context, [this.$ledsHolder]);
        g5Listener.on('led-anim', () => {
            contextFadeIn(this.$context, () => {
            }, [this.$ledsHolder]);
        })
    }


    /* ===================================
     *  METHODS
     * =================================== */
}
