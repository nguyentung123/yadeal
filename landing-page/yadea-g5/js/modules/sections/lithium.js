import  { contextFadeIn, contextInit } from './utils';
import { CountUp } from 'countup.js';

export default class Lithium {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.$context = $('.g5-lithium-battery-section');

        this.$mainInfo = this.$context.find('.main-info');
        this.$selectGroup = this.$context.find('.mode-selectors');

        this.currentSpeed = 60;

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents() {
        contextInit(this.$context, [this.$mainInfo, this.$selectGroup]);
        g5Listener.on('lithium-anim', () => {
            contextFadeIn(this.$context, () => {
                let demo = new CountUp('battery-spped', this.currentSpeed , {
                    duration: 1.5, startVal: 0, useEasing: false
                });
                if (!demo.error) {
                    demo.start();
                } else {
                    console.error(demo.error);
                }

                this.SetupSelectBox();
            }, [this.$mainInfo, this.$selectGroup]);
        })
    }


    /* ===================================
     *  METHODS
     * =================================== */
    RenderSpeed(nextSpeed){
        let demo = new CountUp('battery-spped', nextSpeed , {
            duration: 0.65, startVal: this.currentSpeed, useEasing: false,
        });
        if (!demo.error) {
            demo.start();
        } else {
            console.error(demo.error);
        }

        this.currentSpeed = nextSpeed;
    }

    SelectBoxToggleSetup(){
        $('.selector-block.weight .selection').on('click', (e) => {
            $('.selector-block.weight .selection').toggleClass('show-select');
        });
    }

    SetupSelectBox(){
        this.SelectBoxToggleSetup();

        this.$weightList = this.$context.find('.selector-block.weight .select-list li');
        this.$weightValue = this.$context.find('.selector-block.weight .selection .value');

        this.$weightList.on('click', (e) => {
            e.stopPropagation();
            $('.selector-block.weight .selection').removeClass('show-select');

            if(!$(e.target).hasClass('active')) {
                this.$weightValue.html($(e.target).html())
                this.$weightList.removeClass('active');
                $(e.target).addClass('active');
                let speedValue = $(e.target).data('value');
                this.RenderSpeed(speedValue);
            }
        })
    }
}
