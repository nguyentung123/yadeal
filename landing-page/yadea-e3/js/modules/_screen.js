import { TweenMax } from "gsap/TweenMax";

export default class Screen {
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
        this.ScreenSetup();
        this.ScreenInit();
    }



    /* ===================================
     *  METHODS
     * =================================== */
    ScreenSetup(){
        this.$screenDisplay = $('.section-screen-display');
        this.$mainContent = this.$screenDisplay.find('.main-content.screen-content');
        this.$chargingContent = this.$screenDisplay.find('.main-content.charging-content');
        this.$effectHolder = this.$screenDisplay.find('.effect-holder');
        this.$screenHolder = this.$screenDisplay.find('.bg-holder');

        this.$markerPoint = this.$screenDisplay.find('.marker');
        this.$markerPointDot = this.$screenDisplay.find('.marker .dot');

        // Init State
        TweenMax.set(this.$mainContent,{ opacity: 0, y: window.innerWidth * 0.02 });
        TweenMax.set(this.$chargingContent,{ opacity: 0 });
        TweenMax.set(this.$effectHolder,{ opacity: 0, y: window.innerWidth * 0.05 });
        TweenMax.set(this.$markerPoint, { autoAlpha: 0 });

        this.screenTimeline = new TimelineMax({ paused: true, onComplete: () => { this.ShowMarker(); } });

        this.screenTimeline.add('anim-start');
        this.screenTimeline.add(TweenMax.to(
            this.$mainContent, 0.5, { y: 0, opacity: 1 }
        ));
        this.screenTimeline.add('main-content-appear');

        this.screenTimeline.add(TweenMax.to(
            this.$effectHolder, 1, { y: 0, opacity: 1 }
        ));
        this.screenTimeline.add('effect-holder-appear');

        this.screenTimeline.add(TweenMax.to(
            this.$chargingContent, 0.5, { opacity: 1 }
        ), '-=0.2');

    }

    ScreenInit(){
        e3Listener.on('screen-anim', () => {
            this.screenTimeline.play();
        });
    }

    ShowMarker(){
        TweenMax.to(this.$markerPoint, 0.25, { autoAlpha: 1});
    }
}