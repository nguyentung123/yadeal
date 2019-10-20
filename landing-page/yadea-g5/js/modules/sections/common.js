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

        if(window.innerWidth <= 768){
            this.SetupPriceTagMenu();
        }
    }


    /* ===================================
     *  METHODS
     * =================================== */
    SetupVideoPlayer(){
        this.playerYT = YouTubePlayer('video-modal-video', {
            videoId: 'BnRxdYVE6KA', // Default Clip
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

            if($(e.target).parent('.play-modal-video').length > 0){
                this.videoCode = $(e.target).parent('.play-modal-video').data('video-id');
            } else {
                this.videoCode =  $(e.target).data('video-id');
            }
            this.PlayModalClip(this.videoCode);
        });

        $('.close-video-modal').on('click', (e) => {
            this.CloseModalClip();
        });
    }

    PlayModalClip( clipID = 'pKGxsAte4Ao'){
        $('body').addClass('show-modal');
        $('.video-modal').addClass('active');
        this.playerYT.cueVideoById(clipID);
        this.playerYT.unMute();
        this.playerYT.playVideo();

        this.playerYT.addEventListener('onStateChange', (e) => {
            if(e.data == 0){
                this.CloseModalClip();
            }
        })

        console.log(clipID)
    }

    CloseModalClip(){
        this.playerYT.mute();
        $('body').removeClass('show-modal');
        $('.video-modal').removeClass('active');
        setTimeout(() => {this.playerYT.stopVideo();}, 200);
    }

    SmoothScrollingSetup(){
        $('a[href*="#"]')
        // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
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
                        }, 700, function() {
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

    PriceTagScroll(){
        g5Listener.on('price-tag-fixed', () => {
            $('#page-header').addClass('scrolling-menu');
        });

        g5Listener.on('price-tag-normal', () => {
            $('#page-header').removeClass('scrolling-menu');
        });
    }

    SetupPriceTagMenu(){
        this.$openPriceTagMenu = $('.open-g5-menu');
        this.$closePriceTagMenu = $('.close-g5-menu');
        this.$iconHolder = $('.g5-price-tag-menu');
        this.$priceTagMenu = $('.features-list');

        this.$openPriceTagMenu.on('click', () => {
            this.$priceTagMenu.slideDown('normal');
            this.$iconHolder.addClass('is-showing');
        });

        this.$closePriceTagMenu.on('click', () => {
            this.$priceTagMenu.slideUp('normal');
            this.$iconHolder.removeClass('is-showing');
        })
    }
}
