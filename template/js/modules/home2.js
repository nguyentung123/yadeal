// Import Lodash As Demo
import * as _ from 'lodash';
import Slider from './slider';
import Main from './main';
import Products from './products';

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