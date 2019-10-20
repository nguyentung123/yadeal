import { CountUp } from 'countup.js';
import  { contextFadeIn, contextInit } from './utils';

export default class Scan {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        this.$phoneHolder = $('.g5-analyze-bike-section .phone-holder');
        this.$finishStatus = $('.finish-status');
        this.$checkingStatus = $('.checking-context');
        this.$bikeImage = $('.g5-analyze-bike-section .bike-img');
        this.$bikeHolder = $('.g5-analyze-bike-section .bike-holder');
        this.$phoneMap = $('.g5-analyze-bike-section .phone-mapping-holder');

        this.$vcuController = $('.bike-context-item.vcu-controller');
        this.$vcuControllerContext = this.$vcuController.find('.img-holder');
        TweenMax.set(this.$vcuControllerContext,{ opacity: 0, scale: 0, transformOrigin: '0% 100%' });


        this.$batteryAnalyze = $('.bike-context-item.battery');
        this.$batteryAnalyzeContext = this.$batteryAnalyze.find('.img-holder');
        TweenMax.set(this.$batteryAnalyzeContext,{ opacity: 0, scale: 0, transformOrigin: '0% 45%' });


        this.$controlCenter= $('.bike-context-item.center');
        this.$controlCenterContext = this.$controlCenter.find('.img-holder');
        TweenMax.set(this.$controlCenterContext,{ opacity: 0, scale: 0, transformOrigin: '0% 75%' });

        TweenMax.set(this.$bikeHolder,{ y: -3, x: -50, scale: 0.95,  opacity: 0 });
        TweenMax.set(this.$phoneHolder,{ y: 50 });
        TweenMax.set(this.$finishStatus , { y: 50, scale: 0.8, opacity: 0 })

        this.$context = $('.g5-analyze-bike-section');

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        contextInit( this.$context );

        g5Listener.on('scan-anim', () => {
            contextFadeIn(this.$context, () => {
                this.DoCheckingAnimationEffect();
            });
        });

    }



    /* ===================================
     *  METHODS
     * =================================== */
    DoCheckingAnimationEffect(){

        let isMobile = false;
        if(window.innerWidth <= 768){
            isMobile = true;
        }

        TweenMax.set($('rect'),{ opacity: 0 });


        let timeline = new TimelineMax({paused:true});

        timeline.add([
            TweenMax.to([this.$bikeHolder , this.$phoneHolder], 1, {
                opacity: 1,
                y: 0,
                x: 0,
                scale: 1,
                onComplete: this.RunAnalyze
            })
        ]);

        timeline.add(
            TweenMax.staggerTo('rect', 0.2 , {
                opacity: 1,
            }, 0.01)
        )

        timeline.add(
            [
                TweenMax.to(this.$finishStatus, 0.5, { y: 0, scale: 1, opacity: 1 }),
                TweenMax.to(this.$checkingStatus, 0.3, { y: -15, scale: 0.7, opacity: 0 })
            ]
        );

        let point = this.$vcuController.find('.point');
        timeline.add([
            TweenMax.to(point, 0.5, { opacity: 1 }),
            TweenMax.to(this.$vcuControllerContext, 0.5, { opacity: 1, scale: 1 })
        ]);

        point = this.$controlCenter.find('.point');
        timeline.add([
            TweenMax.to(point, 0.5, { opacity: 1 }),
            TweenMax.to(this.$controlCenterContext, 0.5, { opacity: 1, scale: 1 })
        ],'-=0.22');

        point = this.$batteryAnalyze.find('.point');
        timeline.add([
            TweenMax.to(point, 0.5, { opacity: 1 }),
            TweenMax.to(this.$batteryAnalyzeContext, 0.5, { opacity: 1, scale: 1 })
        ], '-=0.22');

        // if(!isMobile){
        //     timeline.add([
        //         TweenMax.to(this.$bikeHolder, 0.3, {opacity: 0, x: 40}),
        //         TweenMax.to(this.$phoneHolder, 0.3, {opacity: 0, x: -40})
        //     ], '+=1');
        // } else {
        //     timeline.add([
        //         TweenMax.to(this.$phoneHolder, 0.3, {opacity: 0, y: 40})
        //     ], '+=1');
        // }

        timeline.add(
            [
                TweenMax.to(this.$phoneMap, 0.5,{opacity: 1}),
                TweenMax.to(this.$phoneHolder, 0.5,{opacity: 0, delay: 0.15})
            ], '+=0.25'
        )

        timeline.play();

    }

    RunAnalyze(){
        const options = {
            duration: 1.2,
            useEasing: false,
        };

        let demo = new CountUp('percent-value', 100, options);
        if (!demo.error) {
            demo.start();
        } else {
            console.error(demo.error);
        }

        let wave = $('.analyze-wave');
        wave.addClass('checking');
    }

    ShowSuccess(){
    }
}