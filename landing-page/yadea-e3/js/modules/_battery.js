import { TweenMax } from "gsap/TweenMax";

export default class BatteryCharging {
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
        this.isMobile = window.innerWidth <= 768
        if(this.isMobile){
            this.BatterySectionSetup();
            this.BatterySectionInit();
        }
    }



    /* ===================================
     *  METHODS
     * =================================== */
    BatterySectionSetup() {
        this.$batterySection = $('.section-usb-charging');
        this.$mainContent = this.$batterySection.find('.main-content');
        this.$effectHolder = this.$batterySection.find('.effect-holder');
        this.$effectItem = this.$effectHolder.find('.effect-item-description');

        // Init State
        TweenMax.set(this.$mainContent, {opacity: 0, y: window.innerWidth * 0.02});
        TweenMax.set(this.$effectHolder, {opacity: 0, y: window.innerWidth * 0.05});
        TweenMax.set(this.$effectItem, {opacity: 0});

        this.batteryTimeline = new TimelineMax({paused: true});
        this.batteryTimeline.to(
            this.$mainContent, 0.5, {opacity: 1, y: 0}
        );

        this.batteryTimeline.to(
            this.$effectHolder, 0.75, { opacity: 1, y: 0 }, '-=0.1'
        );

        this.batteryTimeline.to(
            this.$effectItem, 0.2, { opacity: 1 }
        );
    }

    BatterySectionInit(){
        e3Listener.on('battery-anim', () => {
            this.batteryTimeline.play();
        })
    }
}