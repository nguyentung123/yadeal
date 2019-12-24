export default class Accessories {
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
        this.AccessoriesSetup();
        this.AccessoriesInit();
    }

    /* ===================================
     *  METHODS
     * =================================== */
    AccessoriesSetup(){
        this.$accessoriesSection = $('#yadea-ulike-page .section-accessories');
        this.$accessoriesMainContent =  this.$accessoriesSection.find('.main-content');
        this.$accessoriesList = this.$accessoriesSection.find('.accessories-list');

        // Init State
        TweenMax.set(this.$accessoriesMainContent, { opacity: 0, y: moveDistance / 5 });
        TweenMax.set(this.$accessoriesList, { opacity: 0, y: moveDistance / 4 });
    }

    AccessoriesInit(){
        ulikeListener.on('accessories-anim', () => {
            TweenMax.to(this.$accessoriesMainContent, 0.5,{ opacity: 1, y: 0 });
            TweenMax.to(this.$accessoriesList, 0.75, {
                opacity: 1,
                y: 0,
                delay: 0.35
            })
        })
    }
}