import  { contextFadeIn, contextInit } from './utils';

export default class Accessories {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.$context = $('.g5-accessory-section');
        this.$caccHolder = $('.g5-accessory-section .accessories-holder');

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents() {
        contextInit(this.$context, [ this.$caccHolder]);
        g5Listener.on('acc-anim', () => {
            contextFadeIn(this.$context, () => {
                console.log('Finished');
            }, [ this.$caccHolder]);
        })
    }


    /* ===================================
     *  METHODS
     * =================================== */
}
