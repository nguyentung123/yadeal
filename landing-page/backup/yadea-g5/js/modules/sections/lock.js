import  { contextFadeIn, contextInit } from './utils';

export default class Lock {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        this.$context = $('.g5-touch-unlock');

        this.$mainImg = $('.g5-touch-unlock .effect-holder');
        this.$powerBtnImg = $('.g5-touch-unlock .effect-light-holder .power-btn img');
        this.$leftArrows = $('.g5-touch-unlock .effect-light-holder .light-left img');
        this.$rightArrows = $('.g5-touch-unlock .effect-light-holder .light-right img');

        this.lockTimeline = new TimelineMax({paused: true});

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        this.InitSection();

        g5Listener.on('lock-anim', () => {
            contextFadeIn(this.$context, () => {
                this.$mainImg.addClass('start-animating');
                this.SetupLockAnimation()
            }, [ this.$mainImg ]);
        });
    }



    /* ===================================
     *  METHODS
     * =================================== */
    InitSection(){
        contextInit( this.$context, [this.$mainImg ] );
    }

    SetupLockAnimation(){
        // Wait 6.5 seconds then to the animation again
        setTimeout(() => {
            this.$mainImg.removeClass('start-animating');

            setTimeout(() => {
                    this.$mainImg.addClass('start-animating');
                    this.SetupLockAnimation()
                },
                1500)
        }, 6500)
    }
}