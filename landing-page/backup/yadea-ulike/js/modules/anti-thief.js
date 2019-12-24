import { TweenMax } from "gsap/TweenMax";
import {Power0} from "gsap";

export default class AntiThief {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        this.PARALLAX_DISTANCE = 18 * window.innerWidth/1920;

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        this.AntiThiefSetup();
        this.AntiThiefInit();
    }



    /* ===================================
     *  METHODS
     * =================================== */
    AntiThiefSetup(){
        this.$antiThiefSection = $('#yadea-ulike-page .anti-thief-feature');
        this.$mainContent = this.$antiThiefSection.find('.main-content');
        this.$effectHolder = this.$antiThiefSection.find('.effect-holder');

        // Bike Image And Its Shadow
        this.$bikeHolder = this.$effectHolder.find('.bike-img');
        this.$bikeShadow1 = this.$bikeHolder.find('.shadow-1');
        this.$bikeShadow2 = this.$bikeHolder.find('.shadow-2');

        // Effect Holder
        this.$bikeBacklight = this.$effectHolder.find('.light-img');
        this.$bellImg = this.$effectHolder.find('.ring-img .bell');
        this.$bellWaveImg = this.$effectHolder.find('.ring-img .wave');
        this.$soundImg1 = this.$effectHolder.find('.sound-img.sound-1');
        this.$soundImg2 = this.$effectHolder.find('.sound-img.sound-2');

        // Set Init State
        TweenMax.set(this.$mainContent, { opacity: 0, y: moveDistance /5  });
        TweenMax.set(this.$effectHolder , { opacity: 0, x: - moveDistance /4 });

        TweenMax.set( this.$bikeShadow1, { opacity: 0 });
        TweenMax.set( this.$bikeShadow2, { opacity: 0 });

        TweenMax.set( [
            this.$bikeBacklight,
            this.$bellImg,
            this.$bellWaveImg,
            this.$soundImg1,
            this.$soundImg2
        ], { opacity: 0 })


        this.appearTimeline = new TimelineMax({
            paused: true,
            onComplete: () => {
                if(window.innerWidth > 768){
                    this.DoShadowParallax();
                } else {
                    TweenMax.to(this.$bikeShadow1, 0.5, { opacity: 1, x: 8, y: 10 });
                    TweenMax.to(this.$bikeShadow2, 0.5, { opacity: 1, x: -10, y: -10});
                }
                this.DoAntiThieftAnimation();
            }
        });
        this.appearTimeline.add(
            TweenMax.to(this.$mainContent, 0.5, {opacity: 1, y: 0})
        )

        this.appearTimeline.add(
            TweenMax.to(this.$effectHolder, 0.75, {opacity: 1, x: 0})
        )
    }

    AntiThiefInit(){
        ulikeListener.on('anti-thief-anim', () =>{
            this.appearTimeline.play();
        })
    }

    DoShadowParallax(){
        TweenMax.to(this.$bikeShadow1, 0.5, { opacity: 1, x: 0, y: 0 });
        TweenMax.to(this.$bikeShadow2, 0.5, {
            opacity: 1, x: 0, y: 0,
            onComplete: () => {
                if (window.innerWidth > 767) {
                    this.$antiThiefSection.on('mousemove', (e) => {
                        let coreData = {
                            offsetX: e.clientX,
                            offsetY: e.clientY,
                            core: {x: this.$antiThiefSection.width() / 2, y:this.$antiThiefSection.height() / 2},
                        };

                        let calculatedData = {
                            xMove: this.PARALLAX_DISTANCE * (coreData.offsetX - coreData.core.x) / coreData.core.x,
                            yMove: this.PARALLAX_DISTANCE * (coreData.offsetY - coreData.core.y) / coreData.core.y
                        }

                        TweenMax.to(this.$bikeShadow1, 0.5, {x: -calculatedData.xMove, y: -calculatedData.yMove});
                        TweenMax.to(this.$bikeShadow2, 0.5, {x: calculatedData.xMove, y: calculatedData.yMove});
                    });
                }
            }
        });
    }


    DoAntiThieftAnimation(){
        this.antiThiefTimeline = new TimelineMax({ repeat: -1, repeatDelay: 2 });
        this.antiThiefTimeline.add(
            TweenMax.to([this.$bellImg, this.$bikeBacklight ], 0.5, { opacity: 1 }),
        );
        this.antiThiefTimeline.add(
            [
                TweenMax.to(this.$bellImg, 0.1, { rotation: '12deg', transformOrigin: '50% 0%' }),
                TweenMax.to(this.$bellWaveImg, 0.1, { scale: '1.05', ease: Linear.easeNone, opacity: 1 }),
                TweenMax.fromTo(this.$soundImg1, 0.1, { opacity: 0, scale: 0.75, x: 3, y: 8 }, { opacity: 0.25, scale: 0.85, x: 1, y: 3, ease: Linear.easeNone }),
                TweenMax.fromTo(this.$soundImg2, 0.1, { opacity: 0, scale: 0.75, x: -3, y: 8 }, { opacity: 0.25, scale: 0.85, x: 1, y: 3, ease: Linear.easeNone })
            ]
        )

        this.antiThiefTimeline.add(
            [
                TweenMax.to(this.$bellImg, 0.1, { rotation: '-12deg', transformOrigin: '50% 0%' }),
                TweenMax.to(this.$bellWaveImg, 0.1, { scale: '1.1', ease: Linear.easeNone, opacity: 1 }),
                TweenMax.to(this.$soundImg1, 0.1, { opacity: 0.5, scale: 0.95, x: -2, y: -2, ease: Linear.easeNone }),
                TweenMax.to(this.$soundImg2, 0.1, { opacity: 0.5, scale: 0.95, x: 2, y: -2, ease: Linear.easeNone})
            ]
        )

        this.antiThiefTimeline.add(
            [
                TweenMax.to(this.$bellImg, 0.1, { rotation: '6deg', transformOrigin: '50% 0%' }),
                TweenMax.to(this.$bellWaveImg, 0.1, { scale: '1.13', ease: Linear.easeNone, opacity: 0.5 }),
                TweenMax.to(this.$soundImg1, 0.1, { opacity: 1, scale: 1.05, x: -5, y: -9, ease: Linear.easeNone }),
                TweenMax.to(this.$soundImg2, 0.1, { opacity: 1, scale: 1.05, x: 5, y: -9, ease: Linear.easeNone})
            ]
        )

        this.antiThiefTimeline.add(
            [
                TweenMax.to(this.$bellImg, 0.1, { rotation: '-6deg', transformOrigin: '50% 0%' }),
                TweenMax.to(this.$bellWaveImg, 0.1, { scale: '1.16', ease: Linear.easeNone, opacity: 0 }),
                TweenMax.to(this.$soundImg1, 0.15, { opacity: 0, scale: 1.12, x: -10, y: -14, ease: Linear.easeNone }),
                TweenMax.to(this.$soundImg2, 0.15, { opacity: 0, scale: 1.12, x: 10, y: -14, ease: Linear.easeNone})
            ]
        )

        this.antiThiefTimeline.add(
            [
                TweenMax.to(this.$bellImg, 0.05, { rotation: '0deg', transformOrigin: '50% 0%' }),
            ]
        )

        this.antiThiefTimeline.add(
            [
                TweenMax.to([this.$bellImg, this.$bikeBacklight], 0.5, { opacity: 0, delay: 0.75 }),
            ]
        )
    }
}