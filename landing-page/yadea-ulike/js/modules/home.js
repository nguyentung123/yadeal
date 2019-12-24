import { TweenMax } from "gsap/TweenMax";

// Sections
import Common from "./common";
import Banner from "./banner";
import Distance from "./distance";
import Light from "./light";
import MixedFeature1 from "./feature-mixed-1";
import MixedFeature2 from "./feature-mixed-2";
import MixedFeature3 from "./feature-mixed-3";
import AntiThief from "./anti-thief";
import WaterResistance from "./water-resistance";
import Accessories from "./accessories";
import Features from "./feature";
import BikeController from "./bike-controller";
import SignupInfo from "./_signup-info";
import ColorFeature from "./color-feature";

import { reachSection, pageListener } from './utils';

export default class Home {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        window.TweenMax = TweenMax;
        window.ulikeListener = new pageListener();
        window.isMobile = window.innerWidth <= 768;
        window.moveDistance = window.innerWidth * 0.1;
        if(isMobile){
            window.moveDistance = window.innerWidth * 0.3;
        }
        console.log(ulikeListener);

        let common = new Common();
        let banner = new Banner();
        let light = new Light();
        let mixedFeature1 = new MixedFeature1();
        let mixedFeature2 = new MixedFeature2();
        let bikeController = new BikeController();
        let mixedFeature3 = new MixedFeature3();
        let antiThief = new AntiThief();
        let waterResistance = new WaterResistance();
        let accessories = new Accessories();
        let features = new Features();
        let disatance = new Distance();
        let signupInfo = new SignupInfo();

        let colorFeature = new ColorFeature();

        this.pageSections = {
            $banner: $('#yadea-ulike-page .section-banner'),
            $distance: $('#yadea-ulike-page .section-distance'),
            $light: $('#yadea-ulike-page .section-light-section'),
            $mixedFeature1: $('#yadea-ulike-page .feature-mixed-1'),
            $led: $('#yadea-ulike-page .section-led'),
            $mixedFeature2: $('#yadea-ulike-page .feature-mixed-2'),
            $container: $('#yadea-ulike-page .container-feature'),
            $charging: $('#yadea-ulike-page .charging-feature'),
            $smartScreen: $('#yadea-ulike-page .smart-screen-feature'),
            $fashionColor: $('#yadea-ulike-page .colors-feature'),
            $controller: $('#yadea-ulike-page .section-bike-controller'),
            $mixedFeature3: $('#yadea-ulike-page .feature-mixed-3'),
            $antiThief: $('#yadea-ulike-page .anti-thief-feature'),
            $waterResistance: $('#yadea-ulike-page .water-resistance'),
            $accessories: $('#yadea-ulike-page .section-accessories'),
            $features: $('#yadea-ulike-page .section-features'),
            $imagesLibrary: $('#yadea-ulike-page .section-images-library'),
            $specs: $('#yadea-ulike-page .section-spec-slider'),
            $news: $('#yadea-ulike-page .section-news-slider'),
        };

        this.animationStatus = {
            banner: false,
            distance: false,
            light: false,
            mixedFeature1: false,
            led: false,
            mixedFeature2:false,
            container: false,
            charging: false,
            smartScreen: false,
            fashionColor: false,
            controller: false,
            mixedFeature3: false,
            antiThief: false,
            waterResistance: false,
            accessories: false,
            features: false,
            imagesLibrary: false,
            specs: false,
            news: false,
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
            // Distance 2nd Section
            if(reachSection( this.pageSections.$distance )){
                if( !this.animationStatus.distance){
                    this.animationStatus.distance = true;
                    ulikeListener.emit('distance-anim');
                }
            }

            // Light 3rd Section
            if(reachSection( this.pageSections.$light )){
                if( !this.animationStatus.light){
                    this.animationStatus.light = true;
                    ulikeListener.emit('light-anim');
                }
            }

            // Mixed Feature 1 4rd Section
            if(reachSection( this.pageSections.$mixedFeature1 )){
                if( !this.animationStatus.mixedFeature1){
                    this.animationStatus.mixedFeature1 = true;
                    ulikeListener.emit('mixed-feature-1-anim');
                }
            }

            // Mixed Feature 1 4rd Section
            if(reachSection( this.pageSections.$led )){
                if( !this.animationStatus.led){
                    this.animationStatus.led = true;
                    ulikeListener.emit('led-anim');
                }
            }

            // Mixed Feature 2 5th Section
            if(reachSection( this.pageSections.$mixedFeature2 )){
                if( !this.animationStatus.mixedFeature2){
                    this.animationStatus.mixedFeature2 = true;
                    ulikeListener.emit('mixed-feature-2-anim');
                }
            }

            // Mixed Feature 2 5th Section
            if(reachSection( this.pageSections.$fashionColor )){
                if( !this.animationStatus.fashionColor){
                    this.animationStatus.fashionColor = true;
                    ulikeListener.emit('fashion-color-anim');

                    if(!this.animationStatus.mixedFeature2){
                        this.animationStatus.mixedFeature2 = true;
                        ulikeListener.emit('mixed-feature-2-anim');
                    }
                }
            }

            // Container
            if(reachSection( this.pageSections.$container )){
                if( !this.animationStatus.container){
                    this.animationStatus.container = true;
                    ulikeListener.emit('container-anim');

                    if(!this.animationStatus.mixedFeature2){
                        this.animationStatus.mixedFeature2 = true;
                        ulikeListener.emit('mixed-feature-2-anim');
                    }
                }
            }

            // Charging
            if(reachSection( this.pageSections.$charging )){
                if( !this.animationStatus.charging){
                    this.animationStatus.charging = true;
                    ulikeListener.emit('charging-anim');

                    if(!this.animationStatus.mixedFeature2){
                        this.animationStatus.mixedFeature2 = true;
                        ulikeListener.emit('mixed-feature-2-anim');
                    }
                }
            }


            // Charging
            if(reachSection( this.pageSections.$smartScreen )){
                if( !this.animationStatus.smartScreen){
                    this.animationStatus.smartScreen = true;
                    ulikeListener.emit('smart-screen-anim');

                    if(!this.animationStatus.mixedFeature2){
                        this.animationStatus.mixedFeature2 = true;
                        ulikeListener.emit('mixed-feature-2-anim');
                    }
                }
            }


            // Container 6th Section
            if(reachSection( this.pageSections.$controller )){
                if( !this.animationStatus.controller){
                    this.animationStatus.controller = true;
                    ulikeListener.emit('controller-anim');
                }
            }

            // Mixed  7th Section
            if(reachSection( this.pageSections.$mixedFeature3 )){
                if( !this.animationStatus.mixedFeature3){
                    this.animationStatus.mixedFeature3 = true;
                    ulikeListener.emit('mixed-feature-3-anim');
                }
            }

            // Anti Thief Section
            if(reachSection( this.pageSections.$antiThief )){
                if( !this.animationStatus.antiThief){
                    this.animationStatus.antiThief = true;
                    ulikeListener.emit('anti-thief-anim');
                }

                // If the page start at anti thief section, trigger mixed effect 3
                if( !this.animationStatus.mixedFeature3 ){
                    this.animationStatus.mixedFeature3 = true;
                    ulikeListener.emit('mixed-feature-3-anim');
                }
            }

            // Water Resistance Section
            if(reachSection( this.pageSections.$waterResistance )){
                if( !this.animationStatus.waterResistance && this.animationStatus.mixedFeature3){
                    this.animationStatus.waterResistance = true;
                    ulikeListener.emit('water-resistance-anim');
                }

                // If the page start at anti thief section, trigger mixed effect 3
                if( !this.animationStatus.mixedFeature3 ){
                    this.animationStatus.mixedFeature3 = true;
                    ulikeListener.emit('mixed-feature-3-anim');
                }
            }


            // Accessories Section
            if(reachSection( this.pageSections.$accessories )){
                if( !this.animationStatus.accessories){
                    this.animationStatus.accessories = true;
                    ulikeListener.emit('accessories-anim');
                }
            }

            // Features Section
            if(reachSection( this.pageSections.$features )){
                if( !this.animationStatus.features){
                    this.animationStatus.features = true;
                    ulikeListener.emit('features-anim');
                }
            }

            // Images Library Section
            if(reachSection( this.pageSections.$imagesLibrary )){
                if( !this.animationStatus.imagesLibrary){
                    this.animationStatus.imagesLibrary = true;
                    ulikeListener.emit('images-library-anim');
                }
            }

            // Specs Section
            if(reachSection( this.pageSections.$specs )){
                if( !this.animationStatus.specs){
                    this.animationStatus.specs = true;
                    ulikeListener.emit('specs-anim');
                }
            }

            // News Section
            if(reachSection( this.pageSections.$news )){
                if( !this.animationStatus.news){
                    this.animationStatus.news = true;
                    ulikeListener.emit('features-anim');
                }
            }
        });
    }
}