import  { contextFadeIn, contextInit } from './utils';

export default class LCDScreen {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.$context = $('.g5-screen-section');

        this.$effectHolder = $('.g5-screen-section .effect-content');
        this.$detail1 = $('.feature-detail .feature-detail-context.detail-1');
        this.$detail2 = $('.feature-detail .feature-detail-context.detail-2');
        this.$detail1Marker = $('.pointer .mark-holder.mark-1');
        this.$detail2Marker = $('.pointer .mark-holder.mark-2');
        this.$detailMarkerBtn = $('.pointer .mark-holder .pointer-mark');

        this.autoplayInterval = null;
        this.allowAutoplayTimeout = null;

        this.sectionStatus = {
            isAutoPlay: true,
            currentState: 1,
        }

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
        contextInit(this.$context, [this.$effectHolder]);
    }

    SetupAnimation(){
        g5Listener.on('lcd-anim', () => {
            contextFadeIn(this.$context, () => {
            }, [this.$effectHolder]);
        });
    }
}
