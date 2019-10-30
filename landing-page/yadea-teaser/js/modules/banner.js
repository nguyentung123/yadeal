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
        setTimeout(() => {
            $('body').removeClass('show-overlay');
            this.timelineBanner.play();
        }, 1250);

        // Banner Section Setup
        this.SetupBannerSection();
    }

    /* ===================================
     *  METHODS
     * =================================== */
    // Banner Animation
    SetupBannerSection(){
        this.$bannerSection = $('.banner-section');
        this.$bannerBikeImage = this.$bannerSection.find('.bike-img-holder');
        this.$bannerTitleImage = this.$bannerSection.find('.heading-title-holder');
        this.$bannerReleaseDay = this.$bannerSection.find('.banner-welcome');
        this.$bannerClockContainer = this.$bannerSection.find('.clock-holder');
        this.$bannerActionHolder = this.$bannerSection.find('.apply-information-form');

        TweenMax.set(this.$bannerBikeImage,{ opacity: 0,  x: -40 });

        TweenMax.set(this.$bannerTitleImage, { opacity: 0 });

        TweenMax.set([
            this.$bannerReleaseDay,
            this.$bannerClockContainer,
            this.$bannerActionHolder
        ], { opacity: 0, y: 15 });

        /* Banner Main Timeline */
        this.timelineBanner = new TimelineMax({
            paused: true,
            onComplete: () => {
                this.timelineSubBanner.play();
            }
        });

        this.timelineBanner.add(
            TweenMax.to(this.$bannerBikeImage, 1, {
                opacity: 1,
                x: 0,
                delay: 0.25
            }))

        this.timelineBanner.add(
            TweenMax.to(this.$bannerTitleImage, 0.55, {
                opacity: 1
            }), '-=0.1');

        this.timelineBanner.add(
            TweenMax.to([
                this.$bannerReleaseDay,
                this.$bannerClockContainer,
                this.$bannerActionHolder
            ], 0.5, {
                opacity: 1,
                y: 0
            }), '+=0.35');

        /* Banner Sub Timeline */
        // Requires Elements
        this.$wheelImage = this.$bannerSection.find('.image-1');
        this.$lightImage = this.$bannerSection.find('.image-2');
        this.$mainLightImage = this.$bannerSection.find('.image-3');

        TweenMax.set(this.$lightImage, {
            opacity: 0,
            y: -3,
            scale: 0.96,
            '-webkit-filter':'brightness(55%)',
        });

        TweenMax.set(this.$mainLightImage, {
            opacity: 0,
            y: -3,
            scale: 0.96,
            '-webkit-filter':'brightness(55%)',
        });

        this.timelineSubBanner = new TimelineMax({paused: true, repeat: -1});

        // Animation Start
        this.timelineSubBanner.add('bikeBannerStart');
        this.timelineSubBanner.add(
            TweenMax.to(this.$wheelImage, 0.75,{
                opacity: 0,
                x: 80,
                delay: 2,
                onComplete: () => {
                    TweenMax.set(this.$wheelImage, {
                        opacity: 0,
                        x: -80.
                    })
                }
            }),
        );
        this.timelineSubBanner.add('wheelFinish');

        // Light 1 Show Up
        this.timelineSubBanner.add(
            TweenMax.to(this.$lightImage, 1.2,{
                opacity: 1,
                y: 0,
                scale: 1,
                '-webkit-filter':'brightness(100%)',
                delay: 0.1
            }),
        );
        this.timelineSubBanner.add('light1Appear');
        this.timelineSubBanner.add(
            TweenMax.to(this.$lightImage, 0.75,{
                opacity: 0,
                y: 3,
                scale: 1.1,
                delay: 2,
            }),
        );
        this.timelineSubBanner.add('light1Finish');

        // Liune 2 Showup
        this.timelineSubBanner.add(
            TweenMax.to(this.$mainLightImage, 1.2,{
                opacity: 1,
                y: 0,
                scale: 1,
                '-webkit-filter':'brightness(100%)',
                delay: 0.1
            }),
        );
        this.timelineSubBanner.add('light2Appear');
        this.timelineSubBanner.add(
            TweenMax.to(this.$mainLightImage, 0.75,{
                opacity: 0,
                y: 3,
                scale: 1.1,
                delay: 2,
            }),
        );
        this.timelineSubBanner.add('light2Finish');

        // Repeat The Progress With Wheel Image
        this.timelineSubBanner.add(
            TweenMax.to(this.$wheelImage, 1.2,{
                opacity: 1,
                x: 0,
                delay: 0.1,
            })
        )
        this.timelineSubBanner.add('progressFinish');
    }
}