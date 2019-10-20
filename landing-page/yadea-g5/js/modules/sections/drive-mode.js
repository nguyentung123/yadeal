import { CountUp } from 'countup.js';
import  { contextFadeIn, contextInit } from './utils';

export default class DriveMode {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.$context = $('.g5-driving-mode-section');
        this.$moveSelect = $('.g5-driving-mode-section .mode-select');
        this.$modeSpecs = $('.g5-driving-mode-section .mode-specs');
        this.$mainIMG = $('.g5-driving-mode-section .img-holder');

        this.$speedWave = this.$context.find('.speed-wave');

        this.$ecoBtn = $('#eco-mode-option');
        this.$ecoDetail = $('.mode-specs .eco-detail');

        this.$sportBtn = $('#sport-mode-option');
        this.$sportDetail = $('.mode-specs .sport-detail');

        this.$ecoIcon = this.$context.find('.icon-eco');
        this.$sportIcon = this.$context.find('.icon-sport');

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents() {
        contextInit(this.$context, [this.$moveSelect, this.$modeSpecs, this.$mainIMG]);

        g5Listener.on('drive-mode-anim', () => {
            contextFadeIn(this.$context, () => {
                this.SetupSwitchingMode();

                this.$speedWave.addClass('is-animating');

                let demo = new CountUp('max-speed-value', 40, {
                    duration: 1.5, startVal: 0, useEasing: false,
                });
                if (!demo.error) {
                    demo.start();
                } else {
                    console.error(demo.error);
                }
            }, [this.$moveSelect, this.$modeSpecs, this.$mainIMG]);
        })
    }


    /* ===================================
     *  METHODS
     * =================================== */
    SetupSwitchingMode(){
        this.$ecoBtn.on('click', () => {
            if(!this.$ecoBtn.hasClass('active')){
                this.SwitchTo(1);
            }
        });

        this.$sportBtn.on('click', () => {
            if(!this.$sportBtn.hasClass('active')){
                this.SwitchTo(2);
            }
        });
    }

    SwitchTo( modeID ){
        switch( modeID ){
            // ECO Mode
            case 1:
                this.$ecoBtn.addClass('active');
                this.$ecoDetail.addClass('active');

                this.$sportBtn.removeClass('active');
                this.$sportDetail.removeClass('active');

                this.$ecoIcon.addClass('active');
                this.$sportIcon.removeClass('active');

                let demo2 = new CountUp('max-speed-value', 40, {
                    duration: 1, startVal: 60, useEasing: false,
                });
                if (!demo2.error) {
                    demo2.start();
                } else {
                    console.error(demo2.error);
                };

                break;

            // Sport Mode
            case 2:
                this.$sportBtn.addClass('active');
                this.$sportDetail.addClass('active');

                this.$ecoBtn.removeClass('active');
                this.$ecoDetail.removeClass('active');

                this.$ecoIcon.removeClass('active');
                this.$sportIcon.addClass('active');

                let demo1 = new CountUp('max-speed-value', 60, {
                    duration: 1, startVal: 40, useEasing: false,
                });
                if (!demo1.error) {
                    demo1.start();
                } else {
                    console.error(demo1.error);
                }

                break;
        }
    }
}
