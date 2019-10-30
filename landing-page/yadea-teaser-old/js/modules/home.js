import YouTubePlayer from 'youtube-player';
import DateSection from './info-date';
import PrizeSection from './prize-section';
import BannerSection from './banner';

export default class Home {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        let bannerSection = new BannerSection();
        let dateSection = new DateSection();
        let prizeSection = new PrizeSection();

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        // Basic Slider Setup
        this.ColorSliderSetup();
        this.NewsSliderSetup();

        // Sub Menu Fixed Top Setup
        this.$pageHeader = $('#page-header');
        this.SetupFixedTopSubMenu();

        // Sub Menu Toggle On Mobile
        if(window.innerWidth < 480){
            this.SetupMbMenuToggle();
        }

        // Common Behavior
        this.SetupVideoPlayer();
        this.SmoothScrollingSetup();

        // Force Number Phone Input Only
        this.$applyForm = $('#apply-info-g5-form');
        this.ApplyInfomationSetup();
        this.setInputFilter(document.getElementsByClassName("phone-number-input")[0], function(value) {
            return /^\d*\.?\d*$/.test(value);
        });
        this.SetupAJAXSubmitForm(this.$applyForm);
    }

    /* ===================================
     *  METHODS
     * =================================== */
    // Bike Color Slider
    ColorSliderSetup(){
        this.allowChangeColor = true;
        $('.g5-color-listing').slick({
            arrows: false,
            autoplay: true,
            autoplaySpeed: 3000,
        });

        $('.g5-color-listing').on('beforeChange', (event, slick, currentSlide, nextSlide) => {
            $('.color-slider-holder .custom-button .slider-button.active').removeClass('active');
            $('.color-slider-holder .custom-button .slider-button:nth-child(' + (nextSlide + 1) + ')').addClass('active');
            console.log(nextSlide);
        })

        $('.color-slider-holder .custom-button').on('click', (e) => {
            if(!$(e.target).hasClass('active') && this.allowChangeColor) {

                // Stop interaction
                this.allowChangeColor = false;
                setTimeout(() => this.allowChangeColor = true, 520);

                // Gray
                if($(e.target).hasClass('button-gray')){
                    $('.color-slider-holder .custom-button .slider-button.active').removeClass('active');
                    $('.g5-color-listing').slick('slickGoTo', 0);
                    $(e.target).addClass('active');
                }

                // Black
                if($(e.target).hasClass('button-black')){
                    $('.color-slider-holder .custom-button .slider-button.active').removeClass('active');
                    $('.g5-color-listing').slick('slickGoTo', 1);
                    $(e.target).addClass('active');
                }

                // White
                if($(e.target).hasClass('button-white')){
                    $('.color-slider-holder .custom-button .slider-button.active').removeClass('active');
                    $('.g5-color-listing').slick('slickGoTo', 2);
                    $(e.target).addClass('active');
                }

                // Red
                if($(e.target).hasClass('button-red')){
                    $('.color-slider-holder .custom-button .slider-button.active').removeClass('active');
                    $('.g5-color-listing').slick('slickGoTo', 3);
                    $(e.target).addClass('active');
                }
            }
        })
    }

    // News Slider
    NewsSliderSetup(){
        $('.news-list').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            nextArrow: `<a class="news-slider-control slide-next"></a>`,
            prevArrow: `<a class="news-slider-control slide-prev"></a>`,
            responsive: [{
                breakpoint: 769,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                }
            },{
                breakpoint: 481,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }],
        })
    }

    // Mobile Menu Toggle
    SetupMbMenuToggle(){
        this.allowToggle = true;
        this.$closeSubMenuBtn = $('.close-sub-menu');
        this.$menuToggleButton = $('.sub-menu-toggler');
        this.$subHeader = $('.sub-header');
        this.$subMenu = $('.sub-menu-main');

        this.$menuToggleButton.on('click', (e) => {
            if(this.allowToggle){
                // After 300ms, allow Toggle back to true
                this.allowToggle = false;
                setTimeout(() => { this.allowToggle = true }, 300);

                if(!this.$subHeader.hasClass('showing-sub-menu')){
                    this.$subHeader.addClass('showing-sub-menu');
                    this.$subMenu.slideDown('fast');
                } else {
                    this.$subHeader.removeClass('showing-sub-menu');
                    this.$subMenu.slideUp('fast');
                }
            }
        })

        this.$closeSubMenuBtn.on('click', (e) => {
            if(this.allowToggle) {
                // After 300ms, allow Toggle back to true
                this.allowToggle = false;
                setTimeout(() => { this.allowToggle = true }, 300);

                this.$subHeader.removeClass('showing-sub-menu');
                this.$subMenu.slideUp('fast');
            }
        })
    }

    // Fixed Top Sub Menu
    SetupFixedTopSubMenu(){
        if(window.pageYOffset > 20){
            this.$pageHeader.addClass('scrolling-menu');
        } else {
            this.$pageHeader.removeClass('scrolling-menu');
        }

        $(window).on('scroll', () => {
            if(window.pageYOffset > 20){
                this.$pageHeader.addClass('scrolling-menu');
            } else {
                this.$pageHeader.removeClass('scrolling-menu');
            }
        });
    }

    // Common Behavior
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

    setInputFilter(textbox, inputFilter) {
        ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
            textbox.addEventListener(event, function() {
                if (inputFilter(this.value)) {
                    this.oldValue = this.value;
                    this.oldSelectionStart = this.selectionStart;
                    this.oldSelectionEnd = this.selectionEnd;
                } else if (this.hasOwnProperty("oldValue")) {
                    this.value = this.oldValue;
                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                }
            });
        });
    }

    SetupAJAXSubmitForm(formElement){
        let $submitFeedback = formElement.find('.submit-feedback')
        formElement.on('submit', (e) => {
            e.preventDefault();
            let data = formElement.serialize();

            $.ajax({
                type : 'GET',
                url : 'https://script.google.com/macros/s/AKfycbzMCxerSP3KJRlkxqMtZIuPsTl23OF7FFiat2o50BrRe1r9OGk/exec',
                dataType:'json',
                crossDomain : true,
                data : data,
                success : (data) => {
                    if(data == 'false'){
                        $submitFeedback.removeClass('success').addClass('error').html('Đăng ký thông tin không thành công, quý khách vui lòng thử lại');
                    } else {
                        $submitFeedback.removeClass('error').addClass('success').html('Đăng ký nhận thông tin thành công, Yadea sẽ liên hệ lại với bạn');
                    }
                }
            });
        });
    }

    ApplyInfomationSetup(){
        this.$openApplyModal = $('.apply-info-modal');
        this.$closeApplyModal = $('.close-apply-modal');
        this.$applyModalElement = $('.apply-g5-event-modal');
        this.$openApplyModal.on('click', () => {
            this.$applyModalElement.addClass('active');
            $('body, html').addClass('show-modal');
        });

        this.$closeApplyModal.on('click', () => {
            this.$applyModalElement.removeClass('active');
            $('body, html').removeClass('show-modal');
        })
    }
}