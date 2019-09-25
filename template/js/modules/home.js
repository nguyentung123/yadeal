// Import Lodash As Demo
import * as _ from 'lodash';
import YouTubePlayer from 'youtube-player';

export default class Home {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        // Elements Variable
        this.$subMenuTrigger = $('#sub-menu-trigger');
        this.$subMenu = $('#page-sub-menu');

        this.$imageHolder = $('.image-holder');
        this.$imageHolderTarget = null;
        this.imageHolderInterval = null;
        this.imageHolderTimeout = null;

        // Sliders
        this.sliderOptions = {
            'arrows': false,
            'speed': 1200,
            'autoplay': true,
            'autoplaySpeed': 5000,
            'pauseOnFocus': false,
            'pauseOnHover': false
        };

        this.slider1 = $('#slider-style-1');
        this.slider1Paging = $('#slider-style-1-paging');
        this.slider1CurrentPage = this.slider1Paging.find('.current-page');
        this.slider1TotalPage = this.slider1Paging.find('.all-page');
        this.slider1Indicator = $('#slider-style-1-indicator');


        this.slider2 = $('#slider-style-2');
        this.slider2Paging = $('#slider-style-2-paging');
        this.slider2CurrentPage = this.slider2Paging.find('.current-page');
        this.slider2TotalPage = this.slider2Paging.find('.all-page');

        this.slider3 = $('#slider-style-3');

        this.appStatus = {
            showSubMenu: false,
            imageHoverState: false,
        }

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        /* ===== Sub Menu Effect Display ===== */
        this.$subMenuTrigger.on('mouseenter', (e) => {
            e.preventDefault();

            if(!this.appStatus.showSubMenu){
                this.ToggleSubMenu(true);
            }
        });

        this.$subMenu.on('mouseleave', (e) => {
            if(this.appStatus.showSubMenu){
                this.ToggleSubMenu(false);
            }
        });

        /* ===== Image Holder Display Effect ===== */
        this.$imageHolder.on('mouseenter', (e) => {
            if(!this.appStatus.imageHoverState) {
                this.$imageHolderTarget = $(e.target)
                this.ActiveImageHover(true);
            } else {
                this.ActiveImageHover(false);
                this.$imageHolderTarget = $(e.target)
                this.ActiveImageHover(true);
            }
        });

        this.$imageHolder.on('mouseleave', (e) => {
            if(this.appStatus.imageHoverState) {
                this.ActiveImageHover(false);
            }
        });

        /* ===== Sliders ===== */
        /* Slider 1 Init */
        //<editor-fold desc="Slider 1">
        this.slider1.on('init reInit', (e, slick, currentSlide, nextSlide) => {
            console.log(slick.slideCount);
            let $currentPage = this.slider1Paging.find('.current-page.active');
            let $nextPage = this.slider1Paging.find('.current-page.inactive');

            $currentPage.html('01');

            this.slider1TotalPage.html('0' + slick.slideCount);
            this.slider1Paging.css('bottom', slick.slideCount * 25 + 15 + 'px');
        });

        this.slider1.on('afterChange', (e, slick, currentSlide, nextSlide) => {
            let $removedPage = this.slider1Paging.find('.current-page.removed');

            if($removedPage){
                $removedPage.removeClass('removed').addClass('inactive');
            }
        });

        this.slider1.on('beforeChange', (e, slick, currentSlide, nextSlide) => {
            let $currentPage = this.slider1Paging.find('.current-page.active');
            let $nextPage = this.slider1Paging.find('.current-page.inactive');

            let i = nextSlide + 1;

            $currentPage.removeClass('active').addClass('removed');
            $nextPage.html('0' + i).removeClass('inactive removed').addClass('active');

        });

        if(this.slider1){
            this.slider1.slick(Object.assign({'fade': true, asNavFor:'#slider-style-1-indicator', 'dots': true,}, this.sliderOptions));
        }

        if(this.slider1Indicator){
            this.slider1Indicator.slick(Object.assign({'fade': true, asNavFor:'#slider-style-1'}, this.sliderOptions));
        }
        //</editor-fold>


        /* Slider 2 Init */
        //<editor-fold desc="Slider 2">
        this.slider2.on('init reInit', (e, slick, currentSlide, nextSlide) => {
            let $currentPage = this.slider2Paging.find('.current-page.active');
            let $nextPage = this.slider2Paging.find('.current-page.inactive');

            $currentPage.html('01');

            this.slider2TotalPage.html('0' + slick.slideCount);
            this.slider2Paging.css('bottom', slick.slideCount * 25 + 15 + 'px');
        });

        this.slider2.on('beforeChange', (e, slick, currentSlide, nextSlide) => {
            let $currentPage = this.slider2Paging.find('.current-page.active');
            let $nextPage = this.slider2Paging.find('.current-page.inactive');

            let i = nextSlide + 1;

            $currentPage.removeClass('active').addClass('removed');
            $nextPage.html('0' + i).removeClass('inactive').addClass('active');
        });

        this.slider2.on('afterChange', (e, slick, currentSlide, nextSlide) => {
            let $removedPage = this.slider2Paging.find('.current-page.removed');

            if($removedPage){
                $removedPage.removeClass('removed').addClass('inactive');
            }
        });

        if(this.slider2){
            this.slider2.slick(Object.assign({'fade': true, 'dots': true}, this.sliderOptions))
        }
        //</editor-fold>


        /* Slider 3 Init */
        if(this.slider3){
            this.slider3.slick(Object.assign({'fade': true, 'dots': false}, this.sliderOptions))
        }
    }



    /* ===================================
     *  METHODS
     * =================================== */
    ToggleSubMenu( show ){
        this.appStatus.showSubMenu = show;
        if(show){
            this.$subMenu.addClass('active');
        } else {
            this.$subMenu.removeClass('active');
        }
    }

    ActiveImageHover( active ){
        this.appStatus.imageHoverState = active;
        if(active){
            this.imageHolderTimeout = setTimeout(() => {
                if(this.$imageHolderTarget.hasClass('state-1')){
                    this.$imageHolderTarget.removeClass('state-1');
                    this.$imageHolderTarget.addClass('state-2');
                } else {
                    if(this.$imageHolderTarget.hasClass('state-2')) {
                        this.$imageHolderTarget.removeClass('state-2');
                        this.$imageHolderTarget.addClass('state-3');
                    } else {
                        this.$imageHolderTarget.removeClass('state-3');
                        this.$imageHolderTarget.addClass('state-1');
                    }
                }

                this.imageHolderInterval = setInterval(() => {
                    if(this.$imageHolderTarget.hasClass('state-1')){
                        this.$imageHolderTarget.removeClass('state-1');
                        this.$imageHolderTarget.addClass('state-2');
                    } else {
                        if(this.$imageHolderTarget.hasClass('state-2')) {
                            this.$imageHolderTarget.removeClass('state-2');
                            this.$imageHolderTarget.addClass('state-3');
                        } else {
                            this.$imageHolderTarget.removeClass('state-3');
                            this.$imageHolderTarget.addClass('state-1');
                        }
                    }
                }, 2000);
            }, 400);
        } else {
            this.$imageHolderTarget.removeClass('state-2 state-3');
            if(!this.$imageHolderTarget.hasClass('state-1')){
                this.$imageHolderTarget.addClass('state-1');
            }
            this.$imageHolderTarget = null;
            clearInterval(this.imageHolderInterval);
            clearTimeout(this.imageHolderTimeout);

            this.imageHolderInterval = null;
            this.imageHolderTimeout = null;
        }
    }
}