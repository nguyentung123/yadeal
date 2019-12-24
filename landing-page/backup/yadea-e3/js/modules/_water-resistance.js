import { TweenMax } from "gsap/TweenMax";
import {Power2} from "gsap";

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
        this.$waterSection = $('.section-water-resistance');
        this.$waterMainContent = this.$waterSection.find('.main-content');
        this.$waterLayer1 = this.$waterSection.find('.effect-holder .front-water');
        this.$waterLayer2 = this.$waterSection.find('.effect-holder .back-water');
        this.$bikeLayer = $('.effect-holder .bike-holder');

        // Setup Init State
        TweenMax.set(this.$waterMainContent, { opacity: 0, y: window.innerWidth * 0.05 });
        TweenMax.set([this.$waterLayer1, this.$waterLayer2], { opacity: 0, y: window.innerWidth * 0.12 });
        TweenMax.set(this.$bikeLayer, { opacity: 0, x: window.innerWidth * 0.05 });


        this.WaterTimeline = new TimelineMax({ paused: true });

        this.WaterTimeline.add('water-start');
        this.WaterTimeline.add(
            TweenMax.to(this.$waterMainContent, 0.5, { opacity: 1, y: 0 })
        )
        this.WaterTimeline.add('content-appear');

        this.WaterTimeline.add(
            TweenMax.to(this.$bikeLayer, 0.75, { opacity: 1, x: 0 }),
        );
        this.WaterTimeline.add('bike-appear');

        this.WaterTimeline.add([
                TweenMax.to(this.$waterLayer1, 1.7, { opacity: 1, y: 0, ease: Power1.easeOut}),
                TweenMax.to(this.$waterLayer2, 1.4, { opacity: 1, y: 0, delay: 0.22, ease: Power1.easeOut }),
            ]
        );
        this.WaterTimeline.add('water-appear');
    }

    WaterResistanceInit(){
        e3Listener.on('water-resistance-anim', () => {
            this.WaterTimeline.play();
        })
    }
}