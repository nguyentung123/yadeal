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
        this.FeaturesSetup();
        this.FeatureInit();
    }

    /* ===================================
     *  METHODS
     * =================================== */
    FeaturesSetup(){
        this.$featureSection = $('#yadea-ulike-page .section-features');
        this.$featureMainContent = this.$featureSection.find('.main-content');
        this.$featureList = this.$featureSection.find('.feature-list');

        // Init State
        TweenMax.set(this.$featureMainContent, { opacity: 0, y: moveDistance / 5 });
        TweenMax.set(this.$featureList, { opacity: 0, y: moveDistance / 4 });
    }

    FeatureInit(){
        ulikeListener.on('features-anim', () => {
            TweenMax.to(this.$featureMainContent, 0.5, {
                opacity: 1,
                y: 0,
            });
            TweenMax.to(this.$featureList, 0.75, {
                opacity: 1,
                y: 0,
                delay: 0.35
            })
        });
    }
}