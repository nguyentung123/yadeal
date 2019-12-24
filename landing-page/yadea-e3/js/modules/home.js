import { TweenMax } from "gsap/TweenMax";

// Sections
import Common from "./common";
import Banner from "./_banner";
import Design from "./_design";
import Container from "./_container";
import Light from "./_light";
import WaterResistance from "./_water-resistance";
import PositionSeat from "./_position-seat";
import Screen from "./_screen";
import Battery from "./_battery";
import Control from "./_control";
import AntiThief from "./_anti-thief";
import SavingEnergy from "./_saving-energy";
import Features from "./_features";
import SignupInfo from "./_signup-info";

import { reachSection, pageListener } from './utils';

export default class Home {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        window.TweenMax = TweenMax;
        window.e3Listener = new pageListener();

        // Behavior Use For All Page
        let banner    = new Banner();
        let design    = new Design();
        let container = new Container();
        let light     = new Light();
        let water    = new WaterResistance();
        let positionSeat = new PositionSeat();
        let screen    = new Screen();
        let battery    = new Battery();
        let control    = new Control();
        let antiThief    = new AntiThief();
        let savingEnergy1    = new SavingEnergy();
        let features    = new Features();
        let signupInfo = new SignupInfo();

        let common = new Common();

        this.pageSections = {
            $banner: $('#yadea-e3-page .section-banner'),
            $design: $('#yadea-e3-page .section-design-intro'),
            $container: $('#yadea-e3-page .section-bike-container'),
            $light: $('#yadea-e3-page .section-light'),
            $waterResistance: $('#yadea-e3-page .section-water-resistance'),
            $positionSeat: $('#yadea-e3-page .section-driving-position'),
            $screen: $('#yadea-e3-page .section-screen-display'),
            $battery: $('#yadea-e3-page .section-usb-charging'),
            $control: $('#yadea-e3-page .section-easy-control'),
            $antiThief: $('#yadea-e3-page .section-anti-thief'),
            $savingEnergy1: $('#yadea-e3-page .section-saving-energy'),
            $savingEnergy2: $('#yadea-e3-page .section-saving-energy-2'),
            $features: $('#yadea-e3-page .section-features'),
        }

        this.animationStatus = {
            banner: false,
            design: false,
            container: false,
            light: false,
            waterResistance: false,
            positionSeat: false,
            screen: false,
            battery: false,
            control: false,
            antiThief: false,
            savingEnergy1: false,
            savingEnergy2: false,
            features: false,
        }

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        this.ScrollingDetect();
    }



    /* ===================================
     *  METHODS
     * =================================== */
    ScrollingDetect(){
        $(window).on('scroll', (e) => {
            // Design 2nd Section
            if(reachSection( this.pageSections.$design )){
                if( !this.animationStatus.design){
                    this.animationStatus.design = true;
                    e3Listener.emit('design-anim');
                }
            }

            // Container 3rd Section
            if(reachSection( this.pageSections.$container )){
                if( !this.animationStatus.container){
                    this.animationStatus.container = true;
                    e3Listener.emit('container-anim');
                }
            }

            // Container 4th Section
            if(reachSection( this.pageSections.$light )){
                if( !this.animationStatus.light){
                    this.animationStatus.light = true;
                    e3Listener.emit('light-anim');
                }
            }

            // Water Resistance 5th Section
            if(reachSection( this.pageSections.$waterResistance )){
                if( !this.animationStatus.waterResistance){
                    this.animationStatus.waterResistance = true;
                    e3Listener.emit('water-resistance-anim');
                }
            }

            // Position Seat 6th Section
            if(reachSection( this.pageSections.$positionSeat )){
                if( !this.animationStatus.positionSeat){
                    this.animationStatus.positionSeat = true;
                    e3Listener.emit('position-seat-anim');
                }
            }

            // Screen Display 7th Section
            if(reachSection( this.pageSections.$screen )){
                if( !this.animationStatus.screen){
                    this.animationStatus.screen = true;
                    e3Listener.emit('screen-anim');
                }
            }

            // Control 8th Section
            if(reachSection( this.pageSections.$control )){
                if( !this.animationStatus.control){
                    this.animationStatus.control = true;
                    e3Listener.emit('easy-control-anim');
                }
            }

            // Battery 8.1th Section
            if(reachSection( this.pageSections.$battery )){
                if( !this.animationStatus.battery){
                    this.animationStatus.battery = true;
                    e3Listener.emit('battery-anim');
                }
            }

            // Easy Control 9th Section
            if(reachSection( this.pageSections.$control )){
                if( !this.animationStatus.control){
                    this.animationStatus.control = true;
                    e3Listener.emit('control-anim');
                }
            }

            // Anti Thief 11th Section
            if(reachSection( this.pageSections.$antiThief )){
                if( !this.animationStatus.antiThief){
                    this.animationStatus.antiThief = true;
                    e3Listener.emit('anti-thief-anim');
                }
            }

            // Saving Energy 1 12th Section
            if(reachSection( this.pageSections.$savingEnergy1 )){
                if( !this.animationStatus.savingEnergy1){
                    this.animationStatus.savingEnergy1 = true;
                    e3Listener.emit('saving-energy-anim');
                }
            }

            // Saving Energy 2 13th Section
            if(reachSection( this.pageSections.$savingEnergy2 )){
                if( !this.animationStatus.savingEnergy2){
                    this.animationStatus.savingEnergy2 = true;
                    e3Listener.emit('saving-energy-2-anim');
                }
            }

            // Saving Energy 1 14th Section
            if(reachSection( this.pageSections.$features )){
                if( !this.animationStatus.features){
                    this.animationStatus.features= true;
                    e3Listener.emit('features-anim');
                }
            }
        });
    }
}