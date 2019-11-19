import { TweenMax } from "gsap/TweenMax";

export default class Container {
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
        this.ContainerSetup();
        this.ContainerInit();
    }



    /* ===================================
     *  METHODS
     * =================================== */
    ContainerSetup(){
        this.$containerSection = $('.section-bike-container');
        this.$mainContent = this.$containerSection.find('.main-content');
        this.$containerImg = this.$containerSection.find('.effect-holder .container-img');
        this.$containerInside = this.$containerSection.find('.effect-holder .inside-img');

        TweenMax.set(this.$mainContent, { opacity: 0, x: window.innerWidth * 0.01});
        TweenMax.set(this.$containerImg, { opacity: 0, y: window.innerWidth * 0.01 });
        TweenMax.set(this.$containerInside, { opacity: 0 });

        this.ContainerTimeline = new TimelineMax({ paused: true });

        this.ContainerTimeline.add(
            TweenMax.to(this.$mainContent, 0.5, { opacity: 1, x: 0 })
        );

        this.ContainerTimeline.add(
            TweenMax.to(this.$containerImg, 0.5, { opacity: 1, y: 0 }), '-=0.15'
        );

        this.ContainerTimeline.add(
            TweenMax.to(this.$containerInside, 0.5, { opacity: 1}), '-=0.1'
        );
    }

    ContainerInit(){
        e3Listener.on('container-anim', () => {
            this.ContainerTimeline.play();
        })
    }
}