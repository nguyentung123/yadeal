import TweenMax, {Power2, Power3} from 'gsap';

export default class DateSection {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        this.$firstLayer = $('.first-layer');

        // Desktop Main Element
        this.$performanceLayout = $('.three-column-layout .layout-item.performance-layout');
        this.$designLayout = $('.three-column-layout .layout-item.design-layout');
        this.$smartLayout = $('.three-column-layout .layout-item.smart-layout');
        this.$layoutFinal = $('.three-column-layout .final-page');

        this.$performanceLayoutMb = $('.three-column-layout-mb .layout-item.performance-layout');
        this.$designLayoutMb = $('.three-column-layout-mb .layout-item.design-layout');
        this.$smartLayoutMb = $('.three-column-layout-mb .layout-item.smart-layout');
        this.$layoutFinalMobile = $('.three-column-layout-mb .final-page');

        this.$mainContext = $('.section-info-date');
        this.allowInteractive = true;
        this.currentPage = 0;

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        // Desktop Timeline Setup
        if(window.innerWidth > 768){
            this.SetupDesktopFinalPage();
            this.BuildDesktopDesignTimeline();
            this.BuildDesktopSmartTimeline();
            this.BuildDesktopPerformanceTimeline();

            $(window).on('scroll', () => {
                if( window.pageYOffset > this.$designDesktopSection.offset().top - (window.innerHeight * 0.65) &&
                    window.pageYOffset < this.$designDesktopSection.offset().top + (window.innerHeight * 0.5)){
                    this.desktopDesignTimeline.play();
                }

                if( window.pageYOffset > this.$smartDesktopSection.offset().top - (window.innerHeight * 0.65) &&
                    window.pageYOffset < this.$smartDesktopSection.offset().top + (window.innerHeight * 0.5)){
                    this.desktopSmartTimeline.play();
                }

                if( window.pageYOffset > this.$performanceDesktopSection.offset().top - (window.innerHeight * 0.65)&&
                    window.pageYOffset < this.$performanceDesktopSection.offset().top + (window.innerHeight * 0.5)){
                    this.desktopPerformanceTimeline.play();
                }

                if( window.pageYOffset > this.$layoutFinal.offset().top - (window.innerHeight * 0.65)&&
                    window.pageYOffset < this.$layoutFinal.offset().top + (window.innerHeight * 0.5)){
                    TweenMax.to(this.$finalDesktopContent, 0.5, { opacity: 1, y: 0 });
                }
            })
        }

        // Mobile Timeline Setup
        if(window.innerWidth <= 768){
            this.SetupMobileFinalPage();
            this.BuildMobileDesignTimeline();
            this.BuildMobileSmartTimeline();
            this.BuildMobilePerformanceTimeline();

            $(window).on('scroll', () => {
                if( window.pageYOffset > this.$designMobileSection.offset().top - (window.innerHeight * 0.65) &&
                    window.pageYOffset < this.$designMobileSection.offset().top + (window.innerHeight * 0.5)){
                    this.mobileDesignTimeline.play();
                }

                if( window.pageYOffset > this.$smartMobileSection.offset().top - (window.innerHeight * 0.65) &&
                    window.pageYOffset < this.$smartMobileSection.offset().top + (window.innerHeight * 0.5)){
                    this.mobileSmartTimeline.play();
                }

                if( window.pageYOffset > this.$performanceMobileSection.offset().top - (window.innerHeight * 0.65)&&
                    window.pageYOffset < this.$performanceMobileSection.offset().top + (window.innerHeight * 0.5)){
                    this.mobilePerformanceTimeline.play();
                }

                if( window.pageYOffset > this.$layoutFinalMobile.offset().top - (window.innerHeight * 0.65)&&
                    window.pageYOffset < this.$layoutFinalMobile.offset().top + (window.innerHeight * 0.5)){
                    TweenMax.to(this.$finalMobileContent, 0.5, { opacity: 1, y: 0 });
                }
            })
        }
    }

    /* ===================================
     *  METHODS
     * =================================== */
    /* === Desktop Timeline Builder === */
    BuildDesktopDesignTimeline(){
        this.$designDesktopSection = $('.three-column-layout .design-layout');
        this.$designDesktopTitle = this.$designDesktopSection.find('.layout-title')
        this.$designDesktopImgHolder = this.$designDesktopSection.find('.img-holder');
        this.$designDesktopLeftIMG = this.$designDesktopSection.find('.left .img-holder img');
        this.$designDesktopCenterIMG = this.$designDesktopSection.find('.center .img-holder img');
        this.$designDesktopRightIMG = this.$designDesktopSection.find('.right .img-holder .bike-holder img');
        this.$designDesktopLabels = this.$designDesktopSection.find('.column-label');

        TweenMax.set( this.$designDesktopLeftIMG, {autoAlpha: 0, x: 60});
        TweenMax.set( this.$designDesktopCenterIMG, {autoAlpha: 0, x: -60, y: -5, scale: 0.98} );
        TweenMax.set( this.$designDesktopRightIMG, {autoAlpha: 0, x: -60});
        TweenMax.set( this.$designDesktopImgHolder , {autoAlpha: 0});
        TweenMax.set( this.$designDesktopLabels , {autoAlpha: 0});
        TweenMax.set( this.$designDesktopTitle, {autoAlpha: 0, y: 30});

        this.desktopDesignTimeline = new TimelineMax({ paused: true });
        this.desktopDesignTimeline.add('startDesktopDesignAnimation');
        this.desktopDesignTimeline.add(
            TweenMax.to([
                this.$designDesktopImgHolder,
                this.$designDesktopTitle
            ], 0.65, {autoAlpha: 1, y: 0})
        );
        this.desktopDesignTimeline.add(
            TweenMax.to(this.$designDesktopCenterIMG, 0.75, {autoAlpha: 1, x: 0, y: 0, scale: 1})
        );
        this.desktopDesignTimeline.add(
            TweenMax.to([
                this.$designDesktopRightIMG,
                this.$designDesktopLeftIMG
            ], 1, {
                autoAlpha: 1,
                x: 0,
                onComplete: () => {
                    this.$designDesktopSection.find('.effect-holder img').addClass('animating');
                }
            }),
            '-=0.4'
        );
        this.desktopDesignTimeline.add(
            TweenMax.to(this.$designDesktopLabels, 0.4, {autoAlpha: 1, ease: Power2.easeOut})
        )
    }

    BuildDesktopSmartTimeline(){
        this.$smartDesktopSection = $('.three-column-layout .smart-layout');
        this.$smartDesktopTitle = this.$smartDesktopSection.find('.layout-title')
        this.$smartDesktopImgHolder = this.$smartDesktopSection.find('.img-holder');
        this.$smartDesktopLeftIMG = this.$smartDesktopSection.find('.left .img-holder img');
        this.$smartDesktopCenterIMG = this.$smartDesktopSection.find('.center .img-holder .map-holder img');
        this.$smartDesktopRightIMG = this.$smartDesktopSection.find('.right .img-holder img');
        this.$smartDesktopLabels = this.$smartDesktopSection.find('.column-label');

        TweenMax.set( this.$smartDesktopLeftIMG, {autoAlpha: 0, x: 60});
        TweenMax.set( this.$smartDesktopCenterIMG, {autoAlpha: 0, y: 35, scale: 0.8} );
        TweenMax.set( this.$smartDesktopRightIMG, {autoAlpha: 0, x: -60});
        TweenMax.set( this.$smartDesktopImgHolder , {autoAlpha: 0});
        TweenMax.set( this.$smartDesktopLabels , {autoAlpha: 0});
        TweenMax.set( this.$smartDesktopTitle, {autoAlpha: 0, y: 30});

        this.desktopSmartTimeline = new TimelineMax({ paused: true });

        this.desktopSmartTimeline.add('startDesktopDesignAnimation');
        this.desktopSmartTimeline.add(
            TweenMax.to([
                this.$smartDesktopImgHolder,
                this.$smartDesktopTitle
            ], 0.65, {autoAlpha: 1, y: 0})
        );
        this.desktopSmartTimeline.add([
            TweenMax.to(this.$smartDesktopCenterIMG, 1, {
                autoAlpha: 1,
                y: 0,
                scale: 1,
                onComplete: () => {
                    this.$smartDesktopSection.find('.center .pin-holder img').addClass('animating')
                }
            }),
            TweenMax.to([
                this.$smartDesktopRightIMG,
                this.$smartDesktopLeftIMG
            ], 1, {autoAlpha: 1, x: 0}),
        ]);
        this.desktopSmartTimeline.add(
            TweenMax.to(this.$smartDesktopLabels, 0.4, {autoAlpha: 1, ease: Power2.easeOut})
        )
    }

    BuildDesktopPerformanceTimeline(){
        this.$performanceDesktopSection = $('.three-column-layout .performance-layout');
        this.$performanceDesktopTitle = this.$performanceDesktopSection.find('.layout-title')
        this.$performanceDesktopImgHolder = this.$performanceDesktopSection.find('.img-holder');
        this.$performanceDesktopLeftIMG = this.$performanceDesktopSection.find('.left .img-holder img');
        this.$performanceDesktopCenterIMG = this.$performanceDesktopSection.find('.center .img-holder img');
        this.$performanceDesktopRightIMG = this.$performanceDesktopSection.find('.right .img-holder img');
        this.$performanceDesktopLabels = this.$performanceDesktopSection.find('.column-label');

        TweenMax.set( this.$performanceDesktopLeftIMG, {autoAlpha: 0, x: -60});
        TweenMax.set( this.$performanceDesktopCenterIMG, {autoAlpha: 0, y: -35} );
        TweenMax.set( this.$performanceDesktopRightIMG, {autoAlpha: 0, x: 60});
        TweenMax.set( this.$performanceDesktopImgHolder , {autoAlpha: 0});
        TweenMax.set( this.$performanceDesktopLabels , {autoAlpha: 0});
        TweenMax.set( this.$performanceDesktopTitle, {autoAlpha: 0, y: 30});

        this.desktopPerformanceTimeline = new TimelineMax({ paused: true });

        this.desktopPerformanceTimeline.add('startDesktopDesignAnimation');
        this.desktopPerformanceTimeline.add(
            TweenMax.to([
                this.$performanceDesktopImgHolder,
                this.$performanceDesktopTitle
            ], 0.65, {autoAlpha: 1, y: 0})
        );
        this.desktopPerformanceTimeline.add([
            TweenMax.to(this.$performanceDesktopCenterIMG, 1, {autoAlpha: 1, y: 0}),
            TweenMax.to([
                this.$performanceDesktopRightIMG,
                this.$performanceDesktopLeftIMG
            ], 1, {autoAlpha: 1, x: 0}),
        ]);
        this.desktopPerformanceTimeline.add(
            TweenMax.to(this.$performanceDesktopLabels, 0.4, {autoAlpha: 1, ease: Power2.easeOut})
        )
    }

    SetupDesktopFinalPage(){
        this.$finalDesktopContent = this.$layoutFinal.find('.main-content');
        TweenMax.set(this.$finalDesktopContent, { opacity: 0, y: 40 });
    }

    /* === Mobile Timeline Builder === */
    BuildMobileDesignTimeline(){
        this.$designMobileSection = $('.three-column-layout-mb .design-layout');
        this.$designMobileTitle = this.$designMobileSection.find('.layout-title');

        this.$designMobileLeft = this.$designMobileSection.find('.left');
        this.$designMobileLeftIMG  = this.$designMobileLeft.find('.img-holder img');

        this.$designMobileCenter = this.$designMobileSection.find('.center');
        this.$designMobileCenterIMG = this.$designMobileCenter.find('.img-holder img');

        this.$designMobileRight = this.$designMobileSection.find('.right');
        this.$designMobileRightIMG  = this.$designMobileRight.find('.img-holder');

        this.$designMobileLabels = this.$designMobileSection.find('.column-label');

        TweenMax.set(this.$designMobileTitle, { opacity: 0, y:(window.innerHeight * 0.02) });

        TweenMax.set(this.$designMobileCenter, { opacity: 0, scaleY: 0.4 });
        TweenMax.set(this.$designMobileCenterIMG, { opacity: 0, x:-(window.innerHeight * 0.05)});

        TweenMax.set(this.$designMobileLeftIMG, { opacity: 0, x: (window.innerWidth * 0.075) });
        TweenMax.set(this.$designMobileRightIMG, { opacity: 0, x: -(window.innerWidth * 0.075) });

        TweenMax.set(this.$designMobileLabels, { opacity: 0 })


        this.mobileDesignTimeline = new TimelineMax({ paused: true });

        this.mobileDesignTimeline.add('designTimelineMobileStart');

        this.mobileDesignTimeline.add(
            TweenMax.to(this.$designMobileTitle, 0.5, {
                opacity: 1,
                y: 1,
            })
        );

        this.mobileDesignTimeline.add(
            TweenMax.to(this.$designMobileCenter, 1, {
                opacity: 1,
                scaleY: 1,
            })
        );
        this.mobileDesignTimeline.add(
            TweenMax.to(this.$designMobileCenterIMG, 0.75, {
                opacity: 1,
                x: 0,
            }),
            '-=0.1'
        );
        this.mobileDesignTimeline.add('centerFinished');

        this.mobileDesignTimeline.add([
            TweenMax.to([
                this.$designMobileLeftIMG,
                this.$designMobileRightIMG
            ], 0.75, {
                opacity: 1,
                x: 0,
                onComplete: () => {
                    this.$designMobileRight.find('.effect-holder img').addClass('animating');
                }
            })
        ], '-=0.3');
        this.mobileDesignTimeline.add('sideImageFinished');

        this.mobileDesignTimeline.add(
            TweenMax.to(this.$designMobileLabels, 0.3, { opacity: 1 }),
            '-=0.15'
        );
    }

    BuildMobileSmartTimeline(){
        this.$smartMobileSection = $('.three-column-layout-mb .smart-layout');
        this.$smartMobileTitle = this.$smartMobileSection.find('.layout-title');

        this.$smartMobileLeft = this.$smartMobileSection.find('.left');
        this.$smartMobileLeftIMG  = this.$smartMobileLeft.find('.img-holder img');

        this.$smartMobileCenter = this.$smartMobileSection.find('.center');
        this.$smartMobileCenterIMG = this.$smartMobileCenter.find('.img-holder .map-holder img');

        this.$smartMobileRight = this.$smartMobileSection.find('.right');
        this.$smartMobileRightIMG  = this.$smartMobileRight.find('.img-holder img');

        this.$smartMobileLabels = this.$smartMobileSection.find('.column-label');

        TweenMax.set(this.$smartMobileTitle, { opacity: 0, y:(window.innerHeight * 0.02) });

        TweenMax.set(this.$smartMobileCenter, { opacity: 0, scaleY: 0.4 });
        TweenMax.set(this.$smartMobileCenterIMG, { opacity: 0, y:(window.innerHeight * 0.02), scale: 1.3});

        TweenMax.set(this.$smartMobileLeftIMG, { opacity: 0, x: (window.innerWidth * 0.075) });
        TweenMax.set(this.$smartMobileRightIMG, { opacity: 0, x: -(window.innerWidth * 0.075) });

        TweenMax.set(this.$smartMobileLabels, { opacity: 0 })


        this.mobileSmartTimeline = new TimelineMax({ paused: true });

        this.mobileSmartTimeline.add('smartTimelineMobileStart');

        this.mobileSmartTimeline.add(
            TweenMax.to(this.$smartMobileTitle, 0.5, {
                opacity: 1,
                y: 1,
            })
        );

        this.mobileSmartTimeline.add(
            TweenMax.to(this.$smartMobileCenter, 1, {
                opacity: 1,
                scaleY: 1,
            })
        );
        this.mobileSmartTimeline.add(
            TweenMax.to(this.$smartMobileCenterIMG, 0.75, {
                opacity: 1,
                scale: 1,
                y: 0,
                onComplete: () => {
                    this.$smartMobileCenter.find('.pin-holder img').addClass('animating');
                }
            }),
            '-=0.3'
        );
        this.mobileSmartTimeline.add('centerFinished');

        this.mobileSmartTimeline.add([
            TweenMax.to([
                this.$smartMobileLeftIMG, this.$smartMobileRightIMG
            ], 0.75, {
                opacity: 1,
                x: 0,
            })
        ], '-=0.3');
        this.mobileSmartTimeline.add('sideImageFinished');

        this.mobileSmartTimeline.add(
            TweenMax.to(this.$smartMobileLabels, 0.3, { opacity: 1 }),
            '-=0.15'
        );

    }

    BuildMobilePerformanceTimeline(){
        this.$performanceMobileSection = $('.three-column-layout-mb .performance-layout');
        this.$performanceMobileTitle = this.$performanceMobileSection.find('.layout-title');

        this.$performanceMobileLeft = this.$performanceMobileSection.find('.left');
        this.$performanceMobileLeftIMG  = this.$performanceMobileLeft.find('.img-holder .battery-holder img');

        this.$performanceMobileCenter = this.$performanceMobileSection.find('.center');
        this.$performanceMobileCenterIMG = this.$performanceMobileCenter.find('.img-holder img');

        this.$performanceMobileRight = this.$performanceMobileSection.find('.right');
        this.$performanceMobileRightIMG  = this.$performanceMobileRight.find('.img-holder img');

        this.$performanceMobileLabels = this.$performanceMobileSection.find('.column-label');

        TweenMax.set(this.$performanceMobileTitle, { opacity: 0, y:(window.innerHeight * 0.02) });

        TweenMax.set(this.$performanceMobileCenter, { opacity: 0, scaleY: 0.4 });
        TweenMax.set(this.$performanceMobileCenterIMG, { opacity: 0, y: (window.innerHeight * 0.015) ,x:-(window.innerHeight * 0.075)});

        TweenMax.set(this.$performanceMobileLeftIMG, { opacity: 0, y: -(window.innerHeight * 0.025) });
        TweenMax.set(this.$performanceMobileRightIMG, { opacity: 0, x: -(window.innerWidth * 0.075) });

        TweenMax.set(this.$performanceMobileLabels, { opacity: 0 })


        this.mobilePerformanceTimeline = new TimelineMax({ paused: true });

        this.mobilePerformanceTimeline.add('performanceTimelineMobileStart');

        this.mobilePerformanceTimeline.add(
            TweenMax.to(this.$performanceMobileTitle, 0.5, {
                opacity: 1,
                y: 1,
            })
        );

        this.mobilePerformanceTimeline.add(
            TweenMax.to(this.$performanceMobileCenter, 1, {
                opacity: 1,
                scaleY: 1,
            })
        );
        this.mobilePerformanceTimeline.add(
            TweenMax.to(this.$performanceMobileCenterIMG, 0.75, {
                opacity: 1,
                x: 0,
                y: 0,
                onComplete: () => {
                    this.$performanceMobileCenter.find('.engine-holder img').addClass('animating');
                }
            }),
            '-=0.3'
        );
        this.mobilePerformanceTimeline.add('centerFinished');

        this.mobilePerformanceTimeline.add([
            TweenMax.to([
                this.$performanceMobileLeftIMG, this.$performanceMobileRightIMG
            ], 0.75, {
                opacity: 1,
                x: 0,
                y: 0,
                onComplete: () => {
                    this.$performanceMobileLeft.find('.effect-holder img').addClass('animating');
                }
            })
        ], '-=0.3');
        this.mobilePerformanceTimeline.add('sideImageFinished');

        this.mobilePerformanceTimeline.add(
            TweenMax.to(this.$performanceMobileLabels, 0.3, { opacity: 1 }),
            '-=0.15'
        );
    }

    SetupMobileFinalPage(){
        this.$finalMobileContent = this.$layoutFinalMobile.find('.main-content');
        TweenMax.set(this.$finalMobileContent, { opacity: 0, y: 40 });
    }
}