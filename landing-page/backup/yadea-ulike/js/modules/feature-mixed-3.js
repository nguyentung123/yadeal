export default class MixedFeature2 {
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
        this.MixedFeature3Setup();
        this.MixedFeature3Init();
    }

    /* ===================================
     *  METHODS
     * =================================== */
    MixedFeature3Setup() {
        this.$mixed3Section = $('.feature-mixed-3');
        // Mixed Effect Elements
        this.$mixedEffectLayer = this.$mixed3Section.find('.mixed-layer');
        this.$mixedEffectBoundary = null
        if(isMobile){
            this.$mixedEffectBoundary = this.$mixed3Section.find('svg.mb-show');
        } else {
            this.$mixedEffectBoundary = this.$mixed3Section.find('svg.mb-hide');
        }

        // Init State Mixed Effect
        this.MIXED_START_POSITION = this.$mixedEffectLayer.height() + this.$mixedEffectBoundary.height();
        TweenMax.set(this.$mixedEffectLayer, { y: -this.MIXED_START_POSITION });

        // Engine Elements - Same trigger event with mixed effect 3
        this.$engineSection = this.$mixed3Section.find('.engine-feature');
        this.$engineImg = this.$engineSection.find('.effect-holder');
        this.$engineContext = this.$engineImg.find('.extra-content');
        this.$engineMainContent = this.$engineSection.find('.main-content');

        // Init State Engine Section
        TweenMax.set(this.$engineMainContent, { opacity: 0, y: moveDistance / 5 });
        TweenMax.set(this.$engineImg, { opacity: 0, x: -moveDistance/3 });
        TweenMax.set(this.$engineContext, { opacity: 0, x: -moveDistance/5 });


        // Mixed Section Timeline
        this.mixedSection3Timeline = new TimelineMax({ paused: true });
        this.mixedSection3Timeline.add('anim-start');
        this.mixedSection3Timeline.to(
            this.$mixedEffectLayer, 1, {
                y: 0,
                ease: Power2.easeOut
            }
        );
        this.mixedSection3Timeline.to(
            this.$engineImg, 1, {
                opacity: 1,
                x: 0,
                ease: Power3.easeOut
            }, '-=0.45'
        );
        this.mixedSection3Timeline.to(
            [ this.$engineContext, this.$engineMainContent ], 0.5, {
                opacity: 1,
                y: 0,
                x: 0,
            }, '-=0.55'
        );
    }

    MixedFeature3Init(){
        ulikeListener.on('mixed-feature-3-anim', () => {
            this.mixedSection3Timeline.play();
        });
    }
}