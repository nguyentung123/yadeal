import videojs from 'video.js';
export default class Slider {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.sliderOptions = {
            'arrows': false,
            'speed': 1200,
            'autoplay': true,
            'autoplaySpeed': 5000,
            'pauseOnFocus': false,
            'pauseOnHover': false,
            'lazyLoad': 'ondemand',
        };

        this.sliderOptions1 = {
            'arrows': false,
            'speed': 1500,
            'autoplay': false,
            // 'autoplaySpeed': 5000,
            'pauseOnFocus': false,
            'pauseOnHover': false,
            'swipeToSlide': true
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
    bindEvents() {
        /* ===== Sliders ===== */
        /* Slider 1 Init */
        //<editor-fold desc="Slider 1">
        this.$sliderTimeout = null;
        // this.videoPlayer = videojs(document.querySelector('.video-js'), {}, () => {
        //     this.videoPlayer.pause();
        //     this.videoPlayer.currentTime(0);
        //
        //     this.videoPlayer.on('ended', () => {
        //         this.slider1.slick('next');
        //         this.videoPlayer.pause();
        //         this.videoPlayer.currentTime(0);
        //     });
        // });

        this.$videoSlide = this.slider1.find('.main-content__slider__item');
        this.videoPlayersControl = [];
        this.$videoSlide.each((index,value) => {
            if ($(value).hasClass('slide-video')) {
                this.videoPlayersControl.push(videojs($(value).find('video').get(0),{},() => {
                    this.videoPlayersControl[index].pause()
                    this.videoPlayersControl[index].currentTime(0);

                    this.videoPlayersControl[index].on('ended',() => {
                        if ($('#slider-style-1 .main-content__slider__item').length > 1) {
                            this.slider1.slick('next')
                            this.videoPlayersControl[index].pause();
                            this.videoPlayersControl[index].currentTime(0);
                        } else {
                            this.videoPlayersControl[index].pause();
                            this.videoPlayersControl[index].currentTime(0);
                            this.videoPlayersControl[0].play();
                        }
                    });
                }))
            } else {
                this.videoPlayersControl.push(null)
            }
        })


        if (this.slider1.length > 0) {
            this.slider1.on('init reInit',(e,slick) => {
                let $currentPage = this.slider1Paging.find('.current-page.active');

                this.$currentSlide = this.slider1.find('.slick-active .main-content__slider__item');

                let timeout = 5000;
                let isVideoSlide = this.$currentSlide.hasClass('slide-video');
                if (isVideoSlide) {
                    setTimeout(() => {
                        this.videoPlayersControl[0].play();
                    },800);
                } else {
                    this.$sliderTimeout = setTimeout(() => {
                        this.slider1.slick('next');
                    },timeout);
                }

                // console.log(timeout);

                $currentPage.html('01');

                this.slider1TotalPage.html('0' + slick.slideCount);
                this.slider1Paging.css('bottom',slick.slideCount * 25 + 15 + 'px');

                if ($('#loading-overlay').length > 0) {
                    $('#loading-overlay').addClass('hidden');
                }
            });

            this.slider1.on('beforeChange',(e,slick,currentSlide,nextSlide) => {
                console.log('beforeChangge was called')
                if (this.$sliderTimeout) {
                    clearTimeout(this.$sliderTimeout);
                }
                let $currentPage = this.slider1Paging.find('.current-page.active');
                let $nextPage = this.slider1Paging.find('.current-page.inactive');

                let nextIsVideoSlide = $('.slick-slide:nth-child(' + (nextSlide + 1) + ') .slide-video video').length > 0;
                if (nextIsVideoSlide) {
                    this.videoPlayersControl[nextSlide].play();
                } else {
                    this.videoPlayersControl.forEach((value) => {
                        if (value !== null) {
                            value.pause();
                            value.currentTime(0);
                        }
                    });
                }

                let i = nextSlide + 1;

                $currentPage.removeClass('active').addClass('removed');
                $nextPage.html('0' + i).removeClass('inactive').addClass('active');
            });

            this.slider1.on('afterChange',(e,slick,currentSlide,nextSlide) => {
                this.$currentSlide = this.slider1.find('.slick-active .main-content__slider__item');

                let timeout = 5000;
                let isVideoSlide = this.$currentSlide.hasClass('slide-video');
                if (!isVideoSlide) {
                    this.$sliderTimeout = setTimeout(() => {
                        this.slider1.slick('next');
                    },timeout);
                }

                let $removedPage = this.slider1Paging.find('.current-page.removed');

                if ($removedPage) {
                    $removedPage.removeClass('removed').addClass('inactive');
                }
            });

            this.slider1OBJ = this.slider1.slick(Object.assign({
                fade: true,
                asNavFor: '#slider-style-1-indicator',
                dots: true,
            },this.sliderOptions1));


            if (this.slider1Indicator.length > 0) {
                this.slider1Indicator.slick(Object.assign({
                    'fade': true,
                    asNavFor: '#slider-style-1',
                    autoplay: false
                },this.sliderOptions1));
            }
        }
        //</editor-fold>


        /* Slider 2 Init */
        //<editor-fold desc="Slider 2">
        this.slider2.on('init reInit',(e,slick) => {
            let $currentPage = this.slider2Paging.find('.current-page.active');

            $currentPage.html('01');

            this.slider2TotalPage.html('0' + slick.slideCount);
            this.slider2Paging.css('bottom',slick.slideCount * 25 + 15 + 'px');
        });

        this.slider2.on('beforeChange',(e,slick,currentSlide,nextSlide) => {
            let $currentPage = this.slider2Paging.find('.current-page.active');
            let $nextPage = this.slider2Paging.find('.current-page.inactive');

            let i = nextSlide + 1;

            $currentPage.removeClass('active').addClass('removed');
            $nextPage.html('0' + i).removeClass('inactive').addClass('active');
        });

        this.slider2.on('afterChange',() => {
            let $removedPage = this.slider2Paging.find('.current-page.removed');

            if ($removedPage) {
                $removedPage.removeClass('removed').addClass('inactive');
            }
        });

        if (this.slider2) {
            this.slider2.slick(Object.assign({ 'fade': true,'dots': true },this.sliderOptions))
        }
        //</editor-fold>


        /* Slider 3 Init */
        //<editor-fold desc="Slider 3">
        if (this.slider3) {
            this.slider3.slick(Object.assign({ 'fade': true,'dots': false },this.sliderOptions))
        }
        //</editor-fold>
    }



    /* ===================================
     *  METHODS
     * =================================== */
}