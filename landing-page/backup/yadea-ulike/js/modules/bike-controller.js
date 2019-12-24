export default class BikeController {
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
        this.BikeControllerSetup();
        this.BikeControllerInit();
    }

    /* ===================================
     *  METHODS
     * =================================== */
    BikeControllerSetup(){
        this.$bikeControllerSection = $('#yadea-ulike-page .section-bike-controller');
        this.$bikeControllerContent = this.$bikeControllerSection.find('.main-content');
        this.$bikeControllerEffect = this.$bikeControllerSection.find('.img-holder');
        this.$bikeControllerImg = this.$bikeControllerEffect.find('.main-img');
        this.$bikeControllerDetail =  this.$bikeControllerEffect.find('.controller-context');

        // Init State
        TweenMax.set( this.$bikeControllerContent, {opacity: 0, y: moveDistance / 5} );
        TweenMax.set( this.$bikeControllerEffect, { opacity: 0, y: moveDistance / 4 } );
        TweenMax.set( this.$bikeControllerDetail, { opacity: 0 } );

        // Bike Controller Timeline
        this.bikeControllerTimeline = new TimelineMax( { paused: true } );

        // Bike Controller Timeline build
        this.bikeControllerTimeline.add('anim-start');
        this.bikeControllerTimeline.to(
            this.$bikeControllerContent, 0.5, { opacity: 1, y: 0 }
        );
        this.bikeControllerTimeline.to(
            this.$bikeControllerEffect, 1.25,
            {
                opacity: 1,
                y: 0,
                ease: Power3.easeOut
            }, '-=0.15'
        );
        this.bikeControllerTimeline.to(
            this.$bikeControllerDetail, 0.35, { opacity: 1 }, '-=0.5'
        )
    }

    BikeControllerInit(){
        ulikeListener.on('controller-anim', () => {
            this.bikeControllerTimeline.play();
        })
    }
}