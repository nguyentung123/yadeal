import {Power4} from "gsap";

export default class WaterResistance {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        this.WaterResistanceSetup();
        this.WaterResistanceInit();
    }



    /* ===================================
     *  METHODS
     * =================================== */
    WaterResistanceSetup(){
        this.$waterSection = $('#yadea-ulike-page .water-resistance');
        this.$waterContent = this.$waterSection.find('.main-content');
        this.$waterEffect = this.$waterSection.find('.effect-holder');
        this.$waterSplashImg = this.$waterSection.find('.water-splash');

        // Init State
        TweenMax.set(this.$waterContent, { opacity: 0, y: moveDistance / 5 });
        TweenMax.set(this.$waterEffect, { opacity: 0, y: -moveDistance / 2 });
        TweenMax.set(this.$waterSplashImg, {
            opacity: 0,
            y: moveDistance / 10,
            scale: 0.9,
            transformOrigin: '50% 100%'
        });

        // Water Section Timeline
        this.waterSectionTimeline = new TimelineMax({ paused: true });
        this.waterSectionTimeline.add('anim-start');
        this.waterSectionTimeline.add(
            [
                TweenMax.to(this.$waterEffect, 1.25, {
                    opacity: 1,
                    y: 0,
                    ease: Power3.easeOut
                }),
                TweenMax.to(this.$waterContent, 0.5, {
                    opacity: 1,
                    y: 0,
                    delay: 0.35
                })
            ]
        );
        this.waterSectionTimeline.to(
            this.$waterSplashImg, 0.45, {
                opacity: 1,
                scale: 1,
                y: 0,
                ease: Power4.easeOut
            },
            '-=0.72'
        )

    }

    WaterResistanceInit(){
        ulikeListener.on('water-resistance-anim', () => {
            this.waterSectionTimeline.play();
        });
    }
}