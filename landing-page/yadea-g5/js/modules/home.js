import Common from './sections/common';

import Banner from './sections/banner';
import LCDScreen from './sections/lcd-screen';
import Colors from './sections/colors';
import Trending from './sections/trending';
import Led from './sections/led';

import Container from './sections/container';
import SmartButton from './sections/smart-button';
import Charging from './sections/charging';
import DriveMode from './sections/drive-mode';
import Engine from './sections/engine';
import Brake from './sections/brake';
import Lithium from './sections/lithium';
import BMS from './sections/bms';
import Sensor from './sections/smart-sensor';
import GPS from './sections/gps';
import Lock from './sections/lock';
import Scan from './sections/scan';
import Water from './sections/water';
import Frame from './sections/frame';
import Acc from './sections/accessories';
import { TweenMax } from "gsap/TweenMax";


import { contextAnimation, contextInit, reachSection, pageListener } from './sections/utils';

export default class Home {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        window.TweenMax = TweenMax;

        this.$lcd =  $('.g5-screen-section');
        this.$color =  $('.g5-style-section');
        this.$trend =  $('.g5-leading-section');
        this.$led =  $('.g5-led-section');
        this.$container =  $('.g5-container-section');
        this.$smartButton =  $('.g5-side-controller-section');
        this.$charging =  $('.g5-charging-usb-section');
        this.$driveMode =  $('.g5-driving-mode-section');
        this.$engine =  $('.g5-engine-section');
        this.$brake =  $('.g5-brake-section');
        this.$lithium =  $('.g5-lithium-battery-section');
        this.$bms =  $('.g5-battery-management-section');
        this.$smartSensor =  $('.g5-smart-sensor-section');
        this.$gps =  $('.g5-smart-gps-section');
        this.$lock =  $('.g5-touch-unlock');
        this.$scan =  $('.g5-analyze-bike-section');
        this.$water =  $('.g5-water-resist-section');
        this.$frame =  $('.g5-steel-frame-section');
        this.$acc =  $('.g5-accessory-section');

        this.animationStatus = {
            lcd: false,
            color: false,
            trend: false,
            led: false,
            container: false,
            smartButton: false,
            charging: false,
            driveMode: false,
            engine: false,
            brake: false,
            lithium: false,
            bms: false,
            smartSensor: false,
            gps: false,
            lock: false,
            scan: false,
            water: false,
            frame: false,
            acc: false,
        }

        window.g5Listener = new pageListener();

        let common = new Common();
        let bannerSection = new Banner();
        let lcdScreenSection = new LCDScreen();
        let colorSection = new Colors();
        let trendingSection = new Trending();
        let ledSection = new Led();
        let containerSection = new Container();
        let smartBtnSection = new SmartButton();
        let chargingSection = new Charging();
        let driveModeSection = new DriveMode();
        let engineSection = new Engine();
        let brakeSection = new Brake();
        let lithiumSection = new Lithium();
        let bmsSection = new BMS();
        let smartSensorSection = new Sensor();
        let gpsSection = new GPS();
        let lockSection = new Lock();
        let analyzeBike = new Scan();
        let water = new Water();
        let frame = new Frame();
        let acc = new Acc();

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        $('.real-img-slider').slick({
            infinite: true,
            slidesToShow: 3,
            slidesToScroll: 1,
            nextArrow: '<img class="real-img-control next-slide" src="img/g5/next-slide.png">',
            prevArrow: '<img class="real-img-control prev-slide" src="img/g5/prev-slide.png">',
        });

        let venoScreen = window.innerWidth;
        if(window.innerWidth > 728){
            venoScreen = venoScreen * 0.6
        }
        $('.venobox').venobox({
            framewidth: venoScreen + 'px',
        });

        this.ScrollingDetect();
    }



    /* ===================================
     *  METHODS
     * =================================== */
    ScrollingDetect(){
        $(window).on('scroll', (e) => {
            if(window.pageYOffset > 40){
                g5Listener.emit('price-tag-fixed');
            } else {
                g5Listener.emit('price-tag-normal');
            }

            if(reachSection( this.$lcd )){
                if( !this.animationStatus.lcd){
                    this.animationStatus.lcd = true;
                    g5Listener.emit('lcd-anim');
                }
            }

            if(reachSection( this.$color )){
                if( !this.animationStatus.color){
                    this.animationStatus.color = true;
                    g5Listener.emit('color-anim');
                }
            }

            if(reachSection( this.$trend )){
                if( !this.animationStatus.trend){
                    this.animationStatus.trend = true;
                    g5Listener.emit('trending-anim');
                }
            }

            if(reachSection( this.$led )){
                if( !this.animationStatus.led){
                    this.animationStatus.led = true;
                    g5Listener.emit('led-anim');
                }
            }

            if(reachSection( this.$container )){
                if( !this.animationStatus.container){
                    this.animationStatus.container = true;
                    g5Listener.emit('container-anim');
                }
            }

            if(reachSection( this.$smartButton )){
                if( !this.animationStatus.smartButton){
                    this.animationStatus.smartButton = true;
                    g5Listener.emit('smart-btn-anim');
                }
            }

            if(reachSection( this.$charging )){
                if( !this.animationStatus.charging ){
                    this.animationStatus.charging = true;
                    g5Listener.emit('charging-anim');
                }
            }

            if(reachSection( this.$driveMode )){
                if( !this.animationStatus.driveMode ){
                    this.animationStatus.driveMode = true;
                    g5Listener.emit('drive-mode-anim');
                }
            }

            if(reachSection( this.$engine )){
                if( !this.animationStatus.engine ){
                    this.animationStatus.engine = true;
                    g5Listener.emit('engine-anim');
                }
            }

            if(reachSection( this.$brake )){
                if( !this.animationStatus.brake ){
                    this.animationStatus.brake = true;
                    g5Listener.emit('brake-anim');
                }
            }

            if(reachSection( this.$lithium )){
                if( !this.animationStatus.lithium ){
                    this.animationStatus.lithium = true;
                    g5Listener.emit('lithium-anim');
                }
            }

            if(reachSection( this.$bms )){
                if( !this.animationStatus.bms ){
                    this.animationStatus.bms = true;
                    g5Listener.emit('bms-anim');
                }
            }

            if(reachSection( this.$smartSensor )){
                if( !this.animationStatus.smartSensor ){
                    this.animationStatus.smartSensor = true;
                    g5Listener.emit('smart-sensor-anim');
                }
            }

            if(reachSection( this.$gps )){
                if( !this.animationStatus.gps ){
                    this.animationStatus.gps = true;
                    g5Listener.emit('gps-anim');
                }
            }

            if(reachSection( this.$lock )){
                if( !this.animationStatus.lock ){
                    this.animationStatus.lock = true;
                    g5Listener.emit('lock-anim');
                }
            }

            if(reachSection( this.$scan )){
                if( !this.animationStatus.scan ){
                    this.animationStatus.scan = true;
                    g5Listener.emit('scan-anim');
                }
            }

            if(reachSection( this.$water )){
                if( !this.animationStatus.water ){
                    this.animationStatus.water = true;
                    g5Listener.emit('water-anim');
                }
            }

            if(reachSection( this.$frame )){
                if( !this.animationStatus.frame ){
                    this.animationStatus.frame = true;
                    g5Listener.emit('frame-anim');
                }
            }
            if(reachSection( this.$acc )){
                if( !this.animationStatus.acc ){
                    this.animationStatus.acc = true;
                    g5Listener.emit('acc-anim');
                }
            }
        });
    }
}