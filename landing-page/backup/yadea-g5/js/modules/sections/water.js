import  { contextFadeIn, contextInit } from './utils';

export default class Water {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        this.$context = $('.g5-water-resist-section');
        this.$background = this.$context.find('.bg-holder');

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        contextInit( this.$context );

        TweenMax.set(this.$background, {y: 25, opacity: 0});

        g5Listener.on('water-anim', () => {
            TweenMax.to(this.$background, 0.5, {y: 0, opacity: 1,
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