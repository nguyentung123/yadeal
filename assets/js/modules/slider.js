// Import Lodash As Demo
import * as _ from 'lodash';
import YouTubePlayer from 'youtube-player';

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
            'autoplay': false,
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
            this.slider1.on('init reInit', (e, slick, currentSlide, nextSlide) => {
                console.log(slick.slideCount);
                let $currentPage = this.slider1Paging.find('.current-page.active');
                let $nextPage = this.slider1Paging.find('.current-page.inactive');

                $currentPage.html('01');

                this.YoutubeSetup();

                this.slider1TotalPage.html('0' + slick.slideCount);
                this.slider1Paging.css('bottom', slick.slideCount * 25 + 15 + 'px');

                _.forEach( this.videoPlayerArray, (value) => {
                    value.player.mute();
                    value.player.addEventListener('onStateChange', (data) => {
                        if (data.data == 0) {
                            slick.slickNext();
                        }
                    });
                })

                if(this.indexRefVideoArray.length > 0){
                    if(this.indexRefVideoArray[0].slide == '0'){
                        this.videoPlayerArray[this.indexRefVideoArray[0].index].player.playVideo();
                    } else {
                        slick.slickPlay();
                    }
                } else {
                    slick.slickPlay();
                }
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

                // Youtube Processing
                let isVideoSlide = false;
                this.StopAllVideo();

                if(this.videoPlayerArray.length > 0){
                    _.each(this.indexRefVideoArray, (value) => {
                        if(value.slide == nextSlide) {
                            isVideoSlide = true;
                            slick.slickPause();
                            this.videoPlayerArray[value.index].player.playVideo();
                        }
                    });
                }

                if(!isVideoSlide){
                    slick.slickPlay();
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
        //<editor-fold desc="Slider 3">
        if(this.slider3){
            this.slider3.slick(Object.assign({'fade': true, 'dots': false}, this.sliderOptions))
        }
        //</editor-fold>
    }



    /* ===================================
     *  METHODS
     * =================================== */
    // Youtube Structure Build
    YoutubeSetup(){
        // All Video Elements
        this.slider1VideoSlides = this.slider1.find('[id^=video-player-]').toArray();

        if(this.slider1VideoSlides.length > 0){

            _.each(this.slider1VideoSlides, (value) => {

                // Contain Video Slide In Slider And Index Of Video Object Inside videoPlayerArray to Reference
                this.indexRefVideoArray.push({
                    slide: $(value).data('slide'),
                    index: this.videoPlayerArray.length
                });

                this.videoPlayerArray.push({
                    element: $(value),
                    state: 0,
                    player: YouTubePlayer(value, {
                        videoId: $(value).data('src'),
                        playerVars: {
                            controls: 0,
                            disablekb: 1,
                            fs: 0,
                            modestbranding: 1,
                            rel: 0,
                        },
                    })
                });
            });
        }
    }

    StopAllVideo(){
        if(this.videoPlayerArray.length > 0){
            _.forEach( this.videoPlayerArray, (value) => {
                value.player.stopVideo();
            })
        }
    }
}