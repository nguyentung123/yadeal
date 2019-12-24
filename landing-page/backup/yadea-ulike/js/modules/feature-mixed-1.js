export default class MixedFeature1 {
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
        this.MixedFeature1Setup();
        this.LedSectionSetup();
        this.MixedFeature1Init();
    }

    /* ===================================
     *  METHODS
     * =================================== */
    MixedFeature1Setup(){
        this.$mixed1Section = $('#yadea-ulike-page .feature-mixed-1');

        // Mixed Effect And Comfort Section Have The Same Trigger
        // Mixed Elements
        this.$mixedEffectHolder = this.$mixed1Section.find('.mixed-effect');
        this.$mixedLayer = this.$mixedEffectHolder.find('.top-background');
        this.$boundaryElement = this.$mixedEffectHolder.find('.boundary-holder');

        // Comfort Elements
        this.$comfortSection = this.$mixed1Section.find('.section-comfort');
        this.$comfortMainContent = this.$comfortSection.find('.main-content');
        this.$comfortEffectHolder = this.$comfortSection.find('.effect-holder');
        this.$comfortBikeImg = this.$comfortEffectHolder.find('.bike-img');
        this.$comfortBikeOverlay = this.$comfortEffectHolder.find('.bike-overlay');
        this.$comfortTriangleShape = this.$comfortEffectHolder.find('#triangle'); // Length is 781.02
        this.$comfortTriangleDetail = this.$comfortEffectHolder.find('.detail');

        this.TRIANGLE_LENGTH = 781.02

        // Init State
        let mixedLayerHeight = this.$mixedLayer.height() + this.$boundaryElement.height();
        TweenMax.set(this.$mixedLayer, { y: -mixedLayerHeight });

        TweenMax.set( this.$comfortMainContent, { opacity: 0, y: moveDistance / 5 });
        TweenMax.set( this.$comfortEffectHolder, { opacity: 0, x: -moveDistance / 4 } );
        TweenMax.set( this.$comfortBikeOverlay, { opacity: 0 } );
        TweenMax.set( this.$comfortTriangleShape, {
            strokeDasharray: this.TRIANGLE_LENGTH,
            strokeDashoffset: this.TRIANGLE_LENGTH,
        });
        TweenMax.set(this.$comfortTriangleDetail, { opacity: 0 });



        // Timeline
        this.mixedEffectTimeline = new TimelineMax({ paused: true });

        // Timeline Build
        this.mixedEffectTimeline.add('anim-start');
        if(isMobile){
            TweenMax.to(this.$comfortMainContent, 0.75, { y: 0, opacity: 1 });
        }
        this.mixedEffectTimeline.to(
            this.$mixedLayer, 1.75, { y: 0, ease: Power4.easeOut }
        );
        this.mixedEffectTimeline.to(
            this.$comfortEffectHolder, 1, { x: 0, opacity: 1, ease: Power3.easeOut },
            '-=0.75'
        );
        this.mixedEffectTimeline.to(
            this.$comfortBikeImg, 0.45, {opacity: 0}, '-=0.25'
        );
        this.mixedEffectTimeline.to(
            this.$comfortBikeOverlay, 0.45, {opacity: 1}, '-=0.45'
        );
        this.mixedEffectTimeline.to(
            this.$comfortTriangleShape, 0.75, { strokeDashoffset: 0, ease: Linear.easeNone }
        );
        this.mixedEffectTimeline.to(
            this.$comfortTriangleDetail, 0.5, { opacity: 1 }, '+=0.25'
        );

        if(!isMobile){
            this.mixedEffectTimeline.add(
                [
                    TweenMax.to(this.$comfortEffectHolder, 0.75, { x: moveDistance * 1.65, ease: Power2.easeOut }),
                    TweenMax.to(this.$comfortMainContent, 0.75, { y: 0, opacity: 1 }),
                ]
            );
        }

    }

    LedSectionSetup(){
        this.$ledSection = $('.section-led');
        this.$ledMainContent = this.$ledSection.find('.main-content');
        this.$ledEffect = this.$ledSection.find('.context-thumbnail');
        this.$ledImg = this.$ledEffect.find('.led');

        // Init State
        TweenMax.set(this.$ledSection, { opacity: 0, y: moveDistance / 5 });
        TweenMax.set(this.$ledImg, { opacity: 0});
    }

    MixedFeature1Init(){
        ulikeListener.on('mixed-feature-1-anim', () => {
            this.mixedEffectTimeline.play();
        });
        
        ulikeListener.on('led-anim', () => {
            TweenMax.to(this.$ledSection, 0.5, {
                opacity: 1,
                y: 0,
                onComplete: () => {
                    this.repeatLedEffect = new TimelineMax({ repeat: -1, repeatDelay: 2 });
                    this.repeatLedEffect.to(
                        this.$ledImg, 0.5, { opacity: 1, ease: Power3.easeIn }
                    );
                    this.repeatLedEffect.to(
                        this.$ledImg, 0.35, { opacity: 0, ease: Power3.easeOut }, '+=2'
                    );
                }
            })
        })
    }
}