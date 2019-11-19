export default class Distance {
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
        this.DistanceSetup();
        this.DistanceInit();
    }

    /* ===================================
     *  METHODS
     * =================================== */
    DistanceSetup(){
        this.$distanceSection = $('.section-distance');
        this.$distanceHead =  this.$distanceSection.find('.heading-img');
        this.$distanceContext = this.$distanceSection.find('.context-layout');


        // Init State For
        moveDistance = window.innerWidth * 0.1;
        TweenMax.set( this.$distanceHead, { opacity: 0, y: moveDistance/5 } );
        TweenMax.set( this.$distanceContext, { opacity: 0, y: moveDistance/5 } );

        // Banner Timeline
        this.distanceTimeline = new TimelineMax({ paused: true });

        // Animation Timeline Build
        this.distanceTimeline.add('anim-start');
        this.distanceTimeline.to(
            this.$distanceHead, 0.75,
            { opacity: 1, y: 0, ease: Power2.easeOut }
        );
        this.distanceTimeline.to(
            this.$distanceContext, 1,
            { opacity: 1, y: 0, ease: Power2.easeOut },
            '-=0.25'
        );
    }

    DistanceInit(){
        ulikeListener.on('distance-anim', () => {
            this.distanceTimeline.play();
        });
    }
}