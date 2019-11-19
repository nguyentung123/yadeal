import { TweenMax } from "gsap/TweenMax";

export default class PositionSeat {
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
        this.PositionSetup();
        this.PositionInit();
    }



    /* ===================================
     *  METHODS
     * =================================== */
    PositionSetup(){
        this.$positionSection = $('.section-driving-position');
        this.$mainContent = this.$positionSection.find('.main-content');
        this.$effectHolder = this.$positionSection.find('.effect-holder')
        this.$bikeCore = this.$effectHolder.find('.bike-img');
        this.$bikeDraw = this.$effectHolder.find('.draw-img');

        // Set Init State
        TweenMax.set(this.$mainContent, {opacity: 0, y: window.innerWidth * 0.02 });
        TweenMax.set(this.$effectHolder, { opacity: 0, x: window.innerWidth * 0.03 });
        TweenMax.set(this.$bikeCore, { opacity: 1 });
        TweenMax.set(this.$bikeDraw, { opacity: 0 });

        this.PositionTimeline = new TimelineMax({ paused: true });

        this.PositionTimeline.add('anim-start');
        this.PositionTimeline.add(
            TweenMax.to(this.$mainContent, 0.5, {opacity: 1, y: 0})
        );
        this.PositionTimeline.add('main-cotnent-appear');

        this.PositionTimeline.add(
            TweenMax.to(this.$effectHolder, 0.65, { opacity: 1, x: 0, delay: 0.075 })
        );
        this.PositionTimeline.add('bike-appear');

        this.PositionTimeline.add([
                TweenMax.to(this.$bikeCore, 0.65, { opacity: 0.5, scale: 1 }),
                TweenMax.to(this.$bikeDraw, 0.65, { opacity: 1, scale: 1 }),
            ], '+=0.22'
        )

    }

    PositionInit(){
        e3Listener.on('position-seat-anim', () => {
            this.PositionTimeline.play();
        })
    }
}