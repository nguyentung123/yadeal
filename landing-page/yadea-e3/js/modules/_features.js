import { TweenMax } from "gsap/TweenMax";

export default class Features {
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
        this.FeatureSetup();
        this.FeatureInit();
    }



    /* ===================================
     *  METHODS
     * =================================== */
    FeatureSetup(){
        this.$featureSection = $('.section-features');
        this.$mainContent = this.$featureSection.find('.main-content');
        this.$featureImgs = this.$featureSection.find('.feature-list');

        // Init State
        TweenMax.set(this.$mainContent, { opacity: 0, y: window.innerWidth * 0.02 });
        TweenMax.set(this.$featureImgs, { opacity: 0, y: window.innerWidth * 0.03 });

        this.featureTimeline = new TimelineMax({ paused: true });
        this.featureTimeline.to(
            this.$mainContent, 0.5, { opacity: 1, y: 0 }
        );
        this.featureTimeline.to(
            this.$featureImgs, 0.75, { opacity: 1, y: 0 }, '-=0.1'
        );
    }

    FeatureInit(){
        e3Listener.on('features-anim', () => {
            this.featureTimeline.play();
        })
    }
}

