import  { contextFadeIn, contextInit } from './utils';
import {CountUp} from "countup.js";

export default class SmartButton {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.$mainContextBlock = $('.g5-side-controller-section .context-block');

        this.elemWidth = $('.g5-side-controller-section').width();

        // Left Side Group Of Element
        this.$leftSideWrapper = $('.g5-side-controller-section .side-control.left');
        this.$leftImage = this.$leftSideWrapper.find('.controler-img');
        this.$leftSwitchBtn = this.$leftSideWrapper.find('.cta');
        this.$leftDetailItems = this.$leftSideWrapper.find('.detail-item');

        // Right Side Group Of Element
        this.$rightSideWrapper = $('.g5-side-controller-section .side-control.right');
        this.$rightImage = this.$rightSideWrapper.find(' .controler-img');
        this.$rightSwitchBtn = this.$rightSideWrapper.find('.cta');
        this.$rightDetailItems = this.$rightSideWrapper.find('.detail-item');

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents() {
        this.InitSection();

        g5Listener.on('smart-btn-anim', () => {
            contextFadeIn(this.$mainContextBlock, () => {
                TweenMax.to(this.$leftDetailItems, 0.3,{opacity: 1, x: 0});
                this.$leftSideWrapper.addClass('active');
            }, [this.$leftImage, this.$leftSwitchBtn], 0.5, 0.15);
        });
    }


    /* ===================================
     *  METHODS
     * =================================== */
    InitSection(){
        contextInit(this.$mainContextBlock);

        TweenMax.set(this.$mainContextBlock.find('.grad-line'),{transformOrigin: '100% 50%'} )

        TweenMax.set(this.$rightImage, {opacity: 0, x: 60});
        TweenMax.set(this.$rightSwitchBtn, {opacity: 0, x: 30});
        TweenMax.set(this.$rightDetailItems, {opacity: 0, x: -20});


        TweenMax.set(this.$leftImage, {opacity: 0, x: -60});
        TweenMax.set(this.$leftSwitchBtn, {opacity: 0, x: -30});
        TweenMax.set(this.$leftDetailItems, {opacity: 0, x: 20});

        this.$rightSwitchBtn.on('click', (e) => {
            this.SwitchSide(1);
        })

        this.$leftSwitchBtn.on('click', (e) => {
            this.SwitchSide(2);
        })
    }

    SwitchSide( sideNo ){
        switch(sideNo){
            case 1:
                if(window.innerWidth > 768) {
                    TweenMax.to(this.$mainContextBlock, 0.5, {
                        opacity: 0,
                        onComplete: () => {
                            this.$mainContextBlock.addClass('right');
                            TweenMax.set(this.$mainContextBlock, {x: 0});
                            TweenMax.to(this.$mainContextBlock, 0.5, {opacity: 1, delay: 0.1});
                        }
                    });
                }

                this.CleanUpSide(2, () => {
                    contextFadeIn(null, () => {
                        this.$leftSideWrapper.addClass('active');
                    }, [this.$leftImage, this.$leftSwitchBtn, this.$leftDetailItems],
                        0.5, 0.15);
                });

                break;

            case 2:
                if(window.innerWidth > 768) {
                    // TweenMax.to(this.$mainContextBlock, 0.5, {x: -this.elemWidth * 0.55});
                    TweenMax.to(this.$mainContextBlock, 0.5, {
                        opacity: 0,
                        onComplete: () => {
                            this.$mainContextBlock.removeClass('right');
                            TweenMax.set(this.$mainContextBlock, {x: -this.elemWidth * 0.55});
                            TweenMax.to(this.$mainContextBlock, 0.5, {opacity: 1, delay: 0.1});
                        }
                    });
                }

                this.CleanUpSide(1, () => {
                    contextFadeIn(null, () => {
                        this.$rightSideWrapper.addClass('active');
                    }, [this.$rightImage, this.$rightSwitchBtn, this.$rightDetailItems],
                        0.5, 0.15);
                })

                break;
        }
    }

    CleanUpSide( sideNo, callback){
        switch(sideNo){
            case 1:
                TweenMax.to(this.$leftImage, 0.4,{ opacity: 0, x: -80 });
                TweenMax.to(this.$leftSwitchBtn, 0.4,{ opacity: 0, x: -80 });
                TweenMax.to(this.$leftDetailItems, 0.4, { opacity: 0, x: 60,
                    onComplete: () => {
                        this.$leftSideWrapper.removeClass('active');
                        this.$rightSideWrapper.addClass('active');
                        callback();
                    }
                });
                break;
            case 2:
                TweenMax.to(this.$rightImage, 0.4,{ opacity: 0, x: 80 });
                TweenMax.to(this.$rightSwitchBtn, 0.4,{ opacity: 0, x: 80 });
                TweenMax.to(this.$rightDetailItems, 0.4, {opacity: 0, x: -60,
                    onComplete: () => {
                        this.$rightSideWrapper.removeClass('active');
                        this.$leftSideWrapper.addClass('active');
                        callback();
                    }
                });
                break;
        }
    }

}
