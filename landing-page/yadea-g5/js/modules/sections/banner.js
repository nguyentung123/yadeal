// import TweenMax from 'gsap/TweenMax';
export default class Home {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        // Required Elements
        this.$bannerBG = $('.yadea-g5-banner .banner-bg');
        this.$bikeImg = $('.yadea-g5-banner .bike-image');
        this.$g5Name = $('.yadea-g5-banner .banner-content .product-name');
        this.$g5Slogan = $('.yadea-g5-banner .banner-content .g5-product-slogan');
        this.$tragopContent = $('.yadea-g5-banner .banner-content .tra-gop-img')

        // Main Timeline Item
        this.bannerTimeline = null;

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        this.InitBanner();
        this.DoBannerAnimation();
    }



    /* ===================================
     *  METHODS
     * =================================== */
    InitBanner(){
        TweenMax.set(this.$bikeImg, { x: - 80 });
        TweenMax.set(this.$g5Name, { y: 40 });
        TweenMax.set(this.$g5Slogan, { y: 40 });
        TweenMax.set(this.$tragopContent , { y: 40, opacity: 0 });
    }

    DoBannerAnimation(){
        this.bannerTimeline = new TimelineMax({paused:true});

        this.bannerTimeline.add([
            TweenMax.to(this.$bannerBG, 0.7, {opacity: 1}),
            TweenMax.to(this.$bikeImg, 0.7, { x: 0, opacity: 1 }),
            TweenMax.to(this.$g5Name, 0.7, { y: 0, opacity: 1 }),
            TweenMax.to(this.$g5Slogan, 0.7, { y: 0, opacity: 1 }),
            TweenMax.to(this.$tragopContent, 0.7, { y: 0, opacity: 1 }),
        ], '+=0.1', 'sequence', -0.15);

        setTimeout(() => {
            this.bannerTimeline.play();
        },400)

    }
}