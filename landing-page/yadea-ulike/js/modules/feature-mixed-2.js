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
        this.MixedFeature2Setup();
        this.FashionColorSetup();
        this.ContainerSetup();
        this.ChargingSetup();
        this.SmartScreenSetup();
        this.MixedFeature2Init();
    }

    /* ===================================
     *  METHODS
     * =================================== */
    MixedFeature2Setup() {
        this.$mixed2Section = $('.feature-mixed-2');

        // Mixed Elements
        this.$mixedEffect = this.$mixed2Section.find('.mixed-effect');
        this.$mixedLayer1 = this.$mixedEffect.find('.mixed-layer.layer-1');
        this.$mixedLayer1Boundary = this.$mixedLayer1.find('svg');

        this.$mixedLayer2 = this.$mixedEffect.find('.mixed-layer.layer-2');
        this.$mixedLayer2Boundary = this.$mixedLayer2.find('svg');

        this.$mixedLayer3 = this.$mixedEffect.find('.mixed-layer.layer-3');
        this.$mixedLayer3Boundary = this.$mixedLayer3.find('svg')

        this.LAYER1_DISTANCE = this.$mixedLayer1.height() + this.$mixedLayer1Boundary.height();
        this.LAYER2_DISTANCE = this.$mixedLayer2.height() + this.$mixedLayer2Boundary.height();
        this.LAYER3_DISTANCE = this.$mixedLayer3.height() + this.$mixedLayer3Boundary.height();

        // Design Elements
        this.$designSection = $('.design-feature');
        this.$designMainContent = this.$designSection.find('.main-content');
        this.$designImageList = this.$designSection.find('.images-list');


        // Init State
        TweenMax.set( this.$mixedLayer1, { y: -this.LAYER1_DISTANCE } );
        TweenMax.set( this.$mixedLayer2, { y: -this.LAYER2_DISTANCE } );
        TweenMax.set( this.$mixedLayer3, { y: -this.LAYER3_DISTANCE } );

        TweenMax.set( this.$designMainContent, { opacity: 0, y: moveDistance / 5 } );
        TweenMax.set( this.$designImageList, { opacity: 0, y: moveDistance / 4 } );

        // Timeline
        this.mixed2Timeline = new TimelineMax({ paused: true });
        this.mixed2Timeline.add('anim-start');
        this.mixed2Timeline.add(
            [
                TweenMax.to(this.$mixedLayer1, 1,{ y: 0 }),
                TweenMax.to(this.$mixedLayer2, 1.75,{ y: 0, delay: 0.25 }),
                TweenMax.to(this.$mixedLayer3, 2.5,{ y: 0, delay: 0.75}),
            ]
        );

        this.mixed2Timeline.to(
            this.$designMainContent, 0.5, { opacity: 1, y: 0 }, '-=2.5'
        );
        this.mixed2Timeline.to(
            this.$designImageList, 0.5, { opacity: 1, y: 0 }, '-=2.2'
        );
    }

    FashionColorSetup(){
        this.$colorSection = $('.feature-mixed-2 .colors-feature');
        this.$colorMainContent = this.$colorSection.find('.main-content');
        this.$colorSlider = this.$colorSection.find('.colors-slider-holder');

        // Init State
        TweenMax.set(this.$colorMainContent, {
            opacity: 0,
            y: moveDistance / 5
        });
        TweenMax.set(this.$colorSlider, {
            opacity: 0,
            y: moveDistance / 4
        });
    }

    ContainerSetup(){
        this.$containerSection = $('.feature-mixed-2 .container-feature');
        this.$containerMainContent = this.$containerSection.find('.main-content');
        this.$containerBikeImg = this.$containerSection.find('.effect-holder .bike-img');
        this.$containerShadowImg = this.$containerSection.find('.effect-holder .shadow-img');

        // Init State
        TweenMax.set(this.$containerMainContent, { opacity: 0, y: moveDistance / 5 });
        TweenMax.set(this.$containerBikeImg, { opacity: 0, x: moveDistance / 4 });
        TweenMax.set(this.$containerShadowImg, { opacity: 0, x: 10 });
    }

    ChargingSetup(){
        this.$chargingSection = $('.feature-mixed-2 .charging-feature');
        this.$chargingMainContent = this.$chargingSection.find('.main-content');
        this.$chargingImg = this.$chargingSection.find('.thumbnail');

        // Init State
        TweenMax.set(this.$chargingMainContent, { opacity: 0, y: moveDistance / 5 });
        TweenMax.set(this.$chargingImg, { opacity: 0, y: moveDistance / 4 });
    }

    SmartScreenSetup(){
        this.$smartScreenSection = $('.feature-mixed-2 .smart-screen-feature');
        this.$smartScreenMainContent = this.$smartScreenSection.find('.main-content');
        this.$smartScreenImg = this.$smartScreenSection.find('.thumbnail');
        this.$smartScreenDetails = this.$smartScreenSection.find('.detail-item');

        // Init State
        TweenMax.set(this.$smartScreenMainContent, { opacity: 0, y: moveDistance / 5 });
        TweenMax.set(this.$smartScreenImg, { opacity: 0, y: moveDistance / 4 });
        TweenMax.set(this.$smartScreenDetails, { opacity: 0 });
    }

    MixedFeature2Init(){
        ulikeListener.on('mixed-feature-2-anim', () => {
            this.mixed2Timeline.play();
        });

        ulikeListener.on('fashion-color-anim', () => {
            TweenMax.to(this.$colorMainContent, 0.5,{
                opacity: 1,
                y: 0
            });

            TweenMax.to(this.$colorSlider, 0.5,{
                opacity: 1,
                y: 0,
                delay: 0.15
            });
        });
        
        ulikeListener.on('container-anim', () => {
            TweenMax.to(this.$containerMainContent, 0.5,{ opacity: 1, y: 0 });
            TweenMax.to(this.$containerBikeImg, 0.75,{ opacity: 1, x: 0, delay: 0.35 });
            TweenMax.to(this.$containerShadowImg, 0.5,{ opacity: 1, x: 0, delay: 1.25 });
        });

        ulikeListener.on('charging-anim', () => {
            TweenMax.to(this.$chargingMainContent, 0.5,{ opacity: 1, y: 0 });
            TweenMax.to(this.$chargingImg, 0.5,{ opacity: 1, y: 0, delay: 0.35 });
        });

        ulikeListener.on('smart-screen-anim', () => {
            TweenMax.to(this.$smartScreenMainContent, 0.5,{ opacity: 1, y: 0 });
            TweenMax.to(this.$smartScreenImg, 0.5,{ opacity: 1, y: 0, delay: 0.35 });
            TweenMax.to(this.$smartScreenDetails, 0.5,{ opacity: 1, delay: 1 });
        })
    }
}