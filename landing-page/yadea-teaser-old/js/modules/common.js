export default class Common {
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
        console.log('Common Script Will Run');
        this.SetupCommon();
    }

    /* ===================================
     *  METHODS
     * =================================== */
    SetupCommon(){
        console.log('SetupCommon Was Called');
        /**
         * TODO:
         * _ Add Smooth Scrolling
         * _ Header And Footer Effect
         * _ Menu Effect For Desktop And Mobile
         * _ Modal Control
         **/
    }
}