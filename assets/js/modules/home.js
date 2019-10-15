// Import Lodash As Demo
import * as _ from 'lodash';
import Slider from './slider';
import Main from './main';
import Products from './products';
import Supports from './support';
import SliderDetail from './slider-detail';
import FlipClockCustom from './flip-clock.-custom';

export default class Home {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        // Slider
        this.slider = new Slider();

        // Default Behavior
        this.main = new Main();

        // Products Page
        this.products = new Products();

        // Supports Page
        this.supports = new Supports();

        // Slider detail page
        this.sliderDetail = new SliderDetail();

        // Flip Clock Custom
        this.flipClockCustom = new FlipClockCustom();
        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){

    }



    /* ===================================
     *  METHODS
     * =================================== */

}
