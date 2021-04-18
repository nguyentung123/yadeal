import YouTubePlayer from 'youtube-player';

export default class Home {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.$priceTag = $('.price-tag');

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents() {
        this.SetupVideoPlayer();
        this.SmoothScrollingSetup();
        this.PriceTagScroll();
        this.NewsSliderSetup();
        this.PayModalSetup();
        this.GPSModalSetup();

        if (window.innerWidth <= 768) {
            this.SetupPriceTagMenu();
        }

        // Setup Test Drive Behavior
        this.SetupTestDriveBehavior();
    }


    /* ===================================
     *  METHODS
     * =================================== */
    SetupVideoPlayer() {
        this.playerYT = YouTubePlayer('video-modal-video',{
            videoId: '2S6Z57j30Vs', // Default Clip
            playerVars: {
                disablekb: 1,
                fs: 0,
                modestbranding: 1,
                rel: 0,
                controls: 0,
                playlist: 'pKGxsAte4Ao',
                loop: 1,
            },
        });

        $('.play-modal-video').on('click',(e) => {
            this.videoCode = 'BnRxdYVE6KA'; // Default Youtube Video ID

            if ($(e.target).parent('.play-modal-video').length > 0) {
                this.videoCode = $(e.target).parent('.play-modal-video').data('video-id');
            } else {
                this.videoCode = $(e.target).data('video-id');
            }
            this.PlayModalClip(this.videoCode);
        });

        $('.close-video-modal').on('click',(e) => {
            this.CloseModalClip();
        });
    }

    PlayModalClip(clipID = 'pKGxsAte4Ao') {
        $('body').addClass('show-modal');
        $('.video-modal').addClass('active');
        this.playerYT.cueVideoById(clipID);
        this.playerYT.unMute();
        this.playerYT.playVideo();

        this.playerYT.addEventListener('onStateChange',(e) => {
            if (e.data == 0) {
                this.CloseModalClip();
            }
        })

        console.log(clipID)
    }

    CloseModalClip() {
        this.playerYT.mute();
        $('body').removeClass('show-modal');
        $('.video-modal').removeClass('active');
        setTimeout(() => { this.playerYT.stopVideo(); },200);
    }

    SmoothScrollingSetup() {
        $('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function (event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
                    &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = $(this.hash);
                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        $('html, body').animate({
                            scrollTop: target.offset().top
                        },700,function () {
                            // Callback after animation
                            // Must change focus!
                            var $target = $(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                }
            });
    }

    PriceTagScroll() {
        g5Listener.on('price-tag-fixed',() => {
            $('#page-header').addClass('scrolling-menu');
        });

        g5Listener.on('price-tag-normal',() => {
            $('#page-header').removeClass('scrolling-menu');
        });
    }

    SetupPriceTagMenu() {
        this.$openPriceTagMenu = $('.open-g5-menu');
        this.$closePriceTagMenu = $('.close-g5-menu');
        this.$iconHolder = $('.g5-price-tag-menu');
        this.$priceTagMenu = $('.features-list');

        this.$openPriceTagMenu.on('click',() => {
            this.$priceTagMenu.slideDown('normal');
            this.$iconHolder.addClass('is-showing');
        });

        this.$closePriceTagMenu.on('click',() => {
            this.$priceTagMenu.slideUp('normal');
            this.$iconHolder.removeClass('is-showing');
        })
    }

    // News Slider
    NewsSliderSetup() {
        let slideToShow = 3;
        if (window.innerWidth <= 768 && window.innerWidth > 480) {
            slideToShow = 2;
        } else {
            if (window.innerWidth < 480) {
                slideToShow = 1
            }
        }
        $('.news-list').slick({
            slidesToShow: slideToShow,
            slidesToScroll: 1,
            autoplay: true,
            nextArrow: `<a class="news-slider-control slide-next"></a>`,
            prevArrow: `<a class="news-slider-control slide-prev"></a>`,
        })
    }

    // Tragop Modal
    PayModalSetup() {
        this.$payModal = $('.tra-gop-information-modal');
        this.$openPayModalBtn = $('.open-tragop-modal');
        this.$closePayModalBtn = $('.close-tragop-modal');

        this.$openPayModalBtn.on('click',() => {
            $('body').addClass('show-modal');
            this.$payModal.addClass('active');
        })

        this.$closePayModalBtn.on('click',() => {
            $('body').removeClass('active');
            this.$payModal.removeClass('active');
        })
    }

    // GPS Modal
    GPSModalSetup() {
        this.$gpsModal = $('.gps-info-modal');
        this.$openGPSModalBtn = $('.open-gps-modal');
        this.$closeGPSModalBtn = $('.close-gps-modal');

        this.$openGPSModalBtn.on('click',() => {
            $('body').addClass('show-modal');
            this.$gpsModal.addClass('active');
        })

        this.$closeGPSModalBtn.on('click',() => {
            $('body').removeClass('active');
            this.$gpsModal.removeClass('active');
        })
    }

    // Test Drive Floating Button
    SetupTestDriveBehavior() {
        this.$testDriveBox = $('.test-drive-box');
        this.$closeButton = this.$testDriveBox.find('.cta-holder .close-area');

        this.$closeButton.on('click',(e) => {
            e.preventDefault();
            this.$testDriveBox.addClass('inactive');
        })

        if (window.innerWidth > 768) {
            // Desktop
            this.testDriveIsHover = false;
            this.testDriveAllowInteraction = true;
            this.$desktopContentWrapper = this.$testDriveBox.find('.desktop-content-wrapper');
            this.$desktopIconHolder = this.$desktopContentWrapper.find('.icon-holder');
            this.$desktopContextHolder = this.$desktopContentWrapper.find('.context-holder');

            if (window.pageYOffset > 30) {
                this.$desktopIconHolder.addClass('active');
                this.$desktopContextHolder.removeClass('active');
            }

            $(document).on('scroll',() => {
                if (window.pageYOffset > 30 && !this.testDriveIsHover) {
                    if (!this.$desktopIconHolder.hasClass('active')) {
                        this.$desktopIconHolder.addClass('active');
                        this.$desktopContextHolder.removeClass('active');
                    }
                } else {
                    if (!this.$desktopContextHolder.hasClass('active')) {
                        this.$desktopIconHolder.removeClass('active');
                        this.$desktopContextHolder.addClass('active');
                    }
                }
            });

            // Mouse In, Show Context, Block Other Interaction
            this.$desktopContentWrapper.on('mouseenter',() => {
                this.testDriveIsHover = true;
                if (this.$desktopIconHolder.hasClass('active') && this.testDriveAllowInteraction) {
                    this.testDriveAllowInteraction = false;
                    this.$desktopIconHolder.removeClass('active');
                    this.$desktopContextHolder.addClass('active');

                    setTimeout(() => {
                        this.testDriveAllowInteraction = true;
                    },300);
                }
            });

            this.$desktopContentWrapper.on('mouseleave',() => {
                this.testDriveIsHover = false;
                if (window.pageYOffset > 30 &&
                    this.$desktopContextHolder.hasClass('active') &&
                    this.testDriveAllowInteraction) {
                    this.testDriveAllowInteraction = false;
                    this.$desktopIconHolder.addClass('active');
                    this.$desktopContextHolder.removeClass('active');
                    setTimeout(() => {
                        this.testDriveAllowInteraction = true;
                    },300);
                }
            });
        } else {
            // Mobile
        }
    }
}
