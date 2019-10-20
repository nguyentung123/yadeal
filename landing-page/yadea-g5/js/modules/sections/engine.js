import  { contextFadeIn, contextInit } from './utils';

export default class Engine {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.$context = $('.g5-engine-section');

        this.$engineFeatures = $('.g5-engine-section .engine-feature');
        this.$engineImage = $('.g5-engine-section .engine-img-holder img')

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents() {
        contextInit(this.$context, [this.$engineFeatures, this.$engineImage]);
        g5Listener.on('engine-anim', () => {
            contextFadeIn(this.$context, () => {
                console.log('Finished');
            }, [this.$engineFeatures, this.$engineImage]);
        })
    }


    /* ===================================
     *  METHODS
     * =================================== */
}
