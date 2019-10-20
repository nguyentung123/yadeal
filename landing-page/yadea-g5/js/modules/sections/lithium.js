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

        this.minSpeed = 60;

        this.batterySetting = {
            mode: [5,10,15],
            weight: [10, 15, 20],
            heat: [5,10,15]
        }

        this.activeLevel = [0,0,0];

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents() {
        contextInit(this.$context, [this.$mainInfo, this.$selectGroup]);
        g5Listener.on('lithium-anim', () => {
            contextFadeIn(this.$context, () => {
                this.currentSpeed = this.CalculateSpeed(this.activeLevel)
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
    CalculateSpeed( levelSetting ){
        return  this.minSpeed
            + this.batterySetting.mode[levelSetting[0]]
            + this.batterySetting.weight[levelSetting[1]]
            + this.batterySetting.heat[levelSetting[2]]
    }

    RenderSpeed(){
        let getTargetSpeed = this.CalculateSpeed(this.activeLevel);

        let demo = new CountUp('battery-spped', getTargetSpeed , {
            duration: 0.65, startVal: this.currentSpeed, useEasing: false,
        });
        if (!demo.error) {
            demo.start();
        } else {
            console.error(demo.error);
        }

        this.currentSpeed = getTargetSpeed;
    }

    SelectBoxToggleSetup(){
        $('.selector-block.heat .selection').on('click', (e) => {
            $('.selector-block.heat .selection').toggleClass('show-select');
        });

        $('.selector-block.weight .selection').on('click', (e) => {
            $('.selector-block.weight .selection').toggleClass('show-select');
        });

        $('.selector-block.mode .selection').on('click', (e) => {
            $('.selector-block.mode .selection').toggleClass('show-select');
        });
    }

    SetupSelectBox(){
        this.SelectBoxToggleSetup();

        this.$modeList = this.$context.find('.selector-block.mode .select-list li');
        this.$weightList = this.$context.find('.selector-block.weight .select-list li');
        this.$heatList = this.$context.find('.selector-block.heat .select-list li');

        this.$heatList.on('click', (e) => {
            e.stopPropagation();
            $('.selector-block.heat .selection').removeClass('show-select');

            if(!$(e.target).hasClass('active')){
                this.$heatList.removeClass('active');
                $(e.target).addClass('active')
                this.activeLevel[2] = $(e.target).index();
                this.RenderSpeed();
            }
        })

        this.$modeList.on('click', (e) => {
            e.stopPropagation();
            $('.selector-block.mode .selection').removeClass('show-select');

            if(!$(e.target).hasClass('active')) {
                this.$modeList.removeClass('active');
                $(e.target).addClass('active');
                this.activeLevel[0] = $(e.target).index();
                this.RenderSpeed();
            }
        })

        this.$weightList.on('click', (e) => {
            e.stopPropagation();
            $('.selector-block.weight .selection').removeClass('show-select');

            if(!$(e.target).hasClass('active')) {
                this.$weightList.removeClass('active');
                $(e.target).addClass('active');
                this.activeLevel[1] = $(e.target).index();
                this.RenderSpeed();
            }
        })
    }
}
