import { TweenMax } from "gsap/TweenMax";

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
        this.$bannerElement = $('#yadea-e3-page .section-banner');
        this.$bikeImage = this.$bannerElement.find('.bike-img');
        this.$bannerIcon = this.$bannerElement.find('.main-content .logo-img');
        this.$bannerCTA = this.$bannerElement.find('.main-content .cta-holder')

        TweenMax.set(this.$bikeImage, { opacity: 0, x: window.innerWidth * 0.02 });
        TweenMax.set(this.$bannerIcon, { opacity: 0, x: -window.innerWidth * 0.02 });
        TweenMax.set(this.$bannerCTA, { opacity: 0 });

        this.bannerTimeline = new TimelineMax({paused: true});

        this.bannerTimeline.add(
            TweenMax.to(this.$bikeImage, 0.5, { opacity: 1, x: 0 })
        );

        this.bannerTimeline.add(
            TweenMax.to(this.$bannerIcon, 0.5, { opacity: 1, x: 0 }), '-=0.2'
        );

        this.bannerTimeline.add(
            TweenMax.to(this.$bannerCTA, 0.15, { opacity: 1 }), '-=0.1'
        );
    }

    BannerInit(){
        e3Listener.on('page-start', () => {
            this.bannerTimeline.play();
        })
    }

}