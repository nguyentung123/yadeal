export default class Banner {
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
        this.BannerSetup();
        this.BannerInit();
    }

    /* ===================================
     *  METHODS
     * =================================== */
    BannerSetup(){
        this.$bannerSection = $('#yadea-ulike-page .section-banner');
        this.$bikeImage =  this.$bannerSection.find('.bike-img');
        this.$bikeName = this.$bannerSection.find('.bike-name');
        this.$bikeSlogan = this.$bannerSection.find('.bike-slogan');
        this.$bikeFeature = this.$bannerSection.find('.banner-feature');


        // Init State For
        this.moveDistance = window.innerWidth * 0.1;
        this.angleRatio = 0.12
        if(isMobile){
            this.angleRatio = 0.15
        }
        TweenMax.set( this.$bikeImage, { opacity: 0, x: - moveDistance/3 } );
        TweenMax.set( this.$bikeName, { opacity: 0, x: -this.moveDistance, y: - moveDistance * this.angleRatio} );
        TweenMax.set( this.$bikeSlogan, { opacity: 0, x: this.moveDistance, y:  moveDistance * this.angleRatio } );
        TweenMax.set( this.$bikeFeature, { opacity: 0, y:  moveDistance * 0.05} );

        // Banner Timeline
        this.bannerTimeline = new TimelineMax({ paused: true });

        // Animation Timeline Build
        this.bannerTimeline.add('anim-start');
        this.bannerTimeline.to(
            this.$bikeImage, 1,
            { opacity: 1,  x: 0, ease: Power3.easeOut }
        );
        this.bannerTimeline.to(
            [this.$bikeName, this.$bikeSlogan ], 0.85,
            { opacity: 1,  x: 0, y:0 , ease: Power3.easeOut },
            '-=0.5'
        );
        this.bannerTimeline.to(
            this.$bikeFeature, 0.35,
            { opacity: 1, y: 0 },
            '-=0.25'
        );
    }

    BannerInit(){
        ulikeListener.on('page-start', () => {
            this.bannerTimeline.play();
        })
    }
}