
export default class Slider {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        this.sliderOptions = {
            'arrows': false,
            'speed': 1200,
            'autoplay': true,
            'autoplaySpeed': 5000,
            'pauseOnFocus': false,
            'pauseOnHover': false
        };

        this.sliderOptions1 = {
            'arrows': false,
            'speed': 1500,
            'autoplay': true,
            'autoplaySpeed': 5000,
            'pauseOnFocus': false,
            'pauseOnHover': false
        };

        this.videoPlayerArray = [];
        this.indexRefVideoArray = [];
        this.slider1VideoSlides = [];

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

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        /* ===== Sliders ===== */
        /* Slider 1 Init */
        //<editor-fold desc="Slider 1">
        if(this.slider1.length > 0){
            this.slider1.on('init reInit', (e, slick) => {
                let $currentPage = this.slider1Paging.find('.current-page.active');

                $currentPage.html('01');

                this.slider1TotalPage.html('0' + slick.slideCount);
                this.slider1Paging.css('bottom', slick.slideCount * 25 + 15 + 'px');
            });

            this.slider1.on('beforeChange', (e, slick, currentSlide, nextSlide) => {
                let $currentPage = this.slider1Paging.find('.current-page.active');
                let $nextPage = this.slider1Paging.find('.current-page.inactive');

                let i = nextSlide + 1;

                $currentPage.removeClass('active').addClass('removed');
                $nextPage.html('0' + i).removeClass('inactive').addClass('active');
            });

            this.slider1.on('afterChange', () => {
                let $removedPage = this.slider1Paging.find('.current-page.removed');

                if($removedPage){
                    $removedPage.removeClass('removed').addClass('inactive');
                }
            });

            this.slider1OBJ = this.slider1.slick(Object.assign({'fade': true, asNavFor:'#slider-style-1-indicator', 'dots': true,}, this.sliderOptions1));


            if(this.slider1Indicator.length > 0){
                this.slider1Indicator.slick(Object.assign({'fade': true, asNavFor:'#slider-style-1'}, this.sliderOptions1));
            }
        }
        //</editor-fold>


        /* Slider 2 Init */
        //<editor-fold desc="Slider 2">
        this.slider2.on('init reInit', (e, slick) => {
            let $currentPage = this.slider2Paging.find('.current-page.active');

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

        this.slider2.on('afterChange', () => {
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
        //<editor-fold desc="Slider 3">
        if(this.slider3){
            this.slider3.slick(Object.assign({'fade': true, 'dots': false}, this.sliderOptions))
        }
        //</editor-fold>
    }



    /* ===================================
     *  METHODS
     * =================================== */
}