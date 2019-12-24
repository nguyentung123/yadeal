import { TweenMax } from "gsap/TweenMax";

export default class Design {
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
        this.DesignSetup();
        this.DesignAnimation();
    }



    /* ===================================
     *  METHODS
     * =================================== */
    DesignSetup(){
        this.$designSection = $('.section-design-intro');
        this.$mainContent = this.$designSection.find('.main-content');
        this.$imageList = this.$designSection.find('.design-image-list');

        TweenMax.set(this.$mainContent, {opacity: 0});
        TweenMax.set(this.$imageList, {opacity: 0, y: window.innerWidth * 0.01});

        this.designTimeline = new TimelineMax({ paused: true });

        this.designTimeline.add(
            TweenMax.to(this.$mainContent, 0.5, { opacity: 1 }),
        );

        this.designTimeline.add(
            TweenMax.to(this.$imageList, 0.5, { opacity: 1, y: 0 }), '-=0.1'
        );
    }

    DesignAnimation(){
        e3Listener.on('design-anim', () => {
            this.designTimeline.play();
        })
    }
}