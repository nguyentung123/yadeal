import  { contextFadeIn, contextInit } from './utils';

export default class Led {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.$context = $('.g5-container-section .context-block');

        this.$backgroundImg = $('.g5-container-section .container-inside img');
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
    }

    SetupAnimation(){
        g5Listener.on('container-anim', () => {
            contextFadeIn(this.$context, () => {
                this.SetupShowing();
            }, [this.$backgroundImg]);
        })
    }

    SetupShowing() {
        setTimeout( () => {
            TweenMax.to(this.$backgroundImg, 1, {opacity: 0});

            setTimeout( () => {
                TweenMax.to(this.$backgroundImg, 0.8, {opacity: 1, onComplete: this.SetupShowing.bind(this)});
            }, 1800);
        }, 5000);
    }
}
