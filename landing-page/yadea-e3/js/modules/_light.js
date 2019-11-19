import { TweenMax } from "gsap/TweenMax";

export default class Light {
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
        this.LightSectionSetup();
        this.LightSectionInit();
    }



    /* ===================================
     *  METHODS
     * =================================== */
    LightSectionSetup(){
        this.$lightSection = $('.section-light');
        this.$mainContent = this.$lightSection.find('.main-content');
        this.$lightBg = this.$lightSection.find('.effect-holder .bike-light-img');
        this.$lightLedEffect = this.$lightSection.find('.effect-holder .light-effect');

        TweenMax.set(this.$mainContent, { opacity: 0, x: window.innerWidth * 0.01});
        TweenMax.set(this.$lightBg, { '-webkit-filter':'brightness(0.35)'});
        TweenMax.set(this.$lightLedEffect, { opacity: 0 });

        this.LightTimeline = new TimelineMax({ paused: true, onComplete: () => { this.LightRepeat(); } });

        this.LightTimeline.add(
            TweenMax.to(this.$mainContent, 0.5, { opacity: 1, x: 0 })
        );

        this.LightTimeline.add('light-effect');

        this.LightTimeline.add([
                TweenMax.to(this.$lightLedEffect, 0.65, { opacity: 1 }),
                TweenMax.to(this.$lightBg, 0.65, { '-webkit-filter':'brightness(1)' }),
            ], '-=0.05'
        );

        this.LightTimeline.add('light-end');
    }

    LightSectionInit(){
        e3Listener.on('light-anim', () => {
            this.LightTimeline.play();
        });
    }

    LightRepeat(){
        this.LightTimeline.tweenFromTo('light-end', 'light-effect', {
            delay: 3,
            onComplete: () => {
                setTimeout(() => {
                    this.LightTimeline.play('light-effect');
                }, 800);
            }
        });
    }
}
