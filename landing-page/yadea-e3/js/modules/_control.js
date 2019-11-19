import { TweenMax } from "gsap/TweenMax";
import {Power1} from "gsap";

export default class Control {
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
        this.ControlSetup();
        this.ControlInit();
    }



    /* ===================================
     *  METHODS
     * =================================== */
    ControlSetup(){
        this.$controlArea = $('.section-easy-control');
        this.$mainContent = this.$controlArea.find('.main-content');
        this.$bikeImage = this.$controlArea.find('.img-holder');
        this.$leftMark = this.$controlArea.find('.desctiption-item.item-2');
        this.$rightMark = this.$controlArea.find('.desctiption-item.item-1');

        this.isMobile = window.innerWidth > 768;

        TweenMax.set(this.$mainContent, { opacity: 0, y: window.innerWidth * 0.02 });
        TweenMax.set(this.$bikeImage, { opacity: 0, y: window.innerWidth * 0.05 });
        TweenMax.set([ this.$leftMark, this.$rightMark ], { opacity: 0 });

        this.controlDesktopTimeline = new TimelineMax({ paused: true, onComplete: () => {
                if(window.innerWidth <= 768){
                    this.SetupMobileEffect();
                }
            }
        });

        this.controlDesktopTimeline.add('anim-start');
        this.controlDesktopTimeline.add(
            TweenMax.to(this.$mainContent, 0.5, {opacity: 1, y: 0})
        );

        this.controlDesktopTimeline.add(
            TweenMax.to(this.$bikeImage, 0.75, {opacity: 1, y: 0}), '-=0.15'
        );

        this.controlDesktopTimeline.add(
            TweenMax.to([ this.$leftMark, this.$rightMark ], 0.5, {opacity: 1})
        );
        this.controlDesktopTimeline.add('anim-end');
    }

    ControlInit(){
        e3Listener.on('easy-control-anim', () => {
            this.controlDesktopTimeline.play();
        });
    }

    SetupMobileEffect(){
        this.currentState = 'stage-left';
        this.$controlHolder = $('.section-easy-control .arrow-control-holder');
        this.$toRightSide = this.$controlHolder.find('.to-control-right');
        this.$toLeftSide = this.$controlHolder.find('.to-control-left');
        this.$effectHolder =  $('.section-easy-control .effect-holder');
        this.$detailHolder = $('.section-easy-control .description-holder');

        let distanceToMove =  this.$controlHolder.width();
        this.allowToggle = true;

        this.$toRightSide.on('click', () => {
            console.log(this.currentState)
            if(this.allowToggle && this.currentState == 'stage-left'){
                this.allowToggle = false;
                this.$controlHolder.removeClass( this.currentState);
                this.currentState = 'stage-right';
                this.$controlHolder.addClass( this.currentState);
                TweenMax.set($('.description-holder .item-2 .desc'),{opacity: 0, y: 12});
                TweenMax.to( this.$effectHolder, 1.25, { x: -distanceToMove });
                TweenMax.to( this.$detailHolder, 1.25, { x: -distanceToMove,
                    onComplete: () => {
                        this.allowToggle = true;
                    }
                });
                TweenMax.to($('.description-holder .item-2 .desc'), 0.5,
                    {opacity: 1, y: 0, ease: Power1.easeOut, delay: 0.8});
            }
        });

        this.$toLeftSide.on('click', () => {
            console.log(this.currentState)
            if(this.allowToggle && this.currentState ==  'stage-right'){
                this.allowToggle = false;
                this.$controlHolder.removeClass( this.currentState);
                this.currentState = 'stage-left';
                this.$controlHolder.addClass( this.currentState);
                TweenMax.set($('.description-holder .item-1 .desc'),{opacity: 0, y: 12});
                TweenMax.to( this.$effectHolder, 1.25, { x: 0 });
                TweenMax.to( this.$detailHolder, 1.25, { x: 0,
                    onComplete: () => {
                        this.allowToggle = true;
                    }
                });
                TweenMax.to($('.description-holder .item-1 .desc'), 0.5,
                    {opacity: 1, y: 0, ease: Power1.easeOut, delay: 0.8});
            }
        })
    }
}