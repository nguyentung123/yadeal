export default class Common {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        this.$pageOverlay = $('#loading-overlay');
        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        this.SetupCommon();
    }

    /* ===================================
     *  METHODS
     * =================================== */
    SetupCommon(){
        // Smooth Scrolling
        this.SmoothScrollingSetup();

        // News Slider
        this.NewsSliderSetup();

        // Color Slider
        this.BikeColorSliderSetup();

        // Fixed Top Menu Effect
        this.$pageHeader = $('#page-header');
        this.SetupFixedTopSubMenu();

        // Sub Menu Toggle On Mobile
        if(window.innerWidth < 480){
            this.SetupMbMenuToggle();
        }
    }

    NewsSliderSetup(){
        $('.news-list').on('init', () => {
            this.$pageOverlay.addClass('hidden');

            setTimeout(() => {
                ulikeListener.emit('page-start');
            }, 1000);
        });

        $('.news-list').slick({
            slidesToShow: 4,
            nextArrow: `<a class="news-slide-control slide-next"></a>`,
            prevArrow: `<a class="news-slide-control slide-prev"></a>`,
            responsive: [
                {
                    breakpoint: 769,
                    settings: {
                        slidesToShow: 2,
                    }
                },{
                    breakpoint: 481,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    }

    BikeColorSliderSetup(){
        this.allowChangeColor = true;
        this.$bikeColorSlider = $('.color-slider-holder .color-listing');

        this.$bikeColorSlider.on('beforeChange', (event, slick, currentSlide, nextSlide) => {
            $('.color-slider-holder .custom-button .slider-button.active').removeClass('active');
            $('.color-slider-holder .custom-button .slider-button:nth-child(' + (nextSlide + 1) + ')').addClass('active');
        })

        this.$bikeColorSlider.slick({
            slidesToShow: 1,
            fade: true,
            arrows: false,
            autoplay: true,
        });

        $('.color-slider-holder .custom-button').on('click', (e) => {
            if(!$(e.target).hasClass('active') && this.allowChangeColor) {

                // Stop interaction
                this.allowChangeColor = false;
                setTimeout(() => this.allowChangeColor = true, 520);

                // White
                if($(e.target).hasClass('button-white')){
                    $('.color-slider-holder .custom-button .slider-button.active').removeClass('active');
                    this.$bikeColorSlider.slick('slickGoTo', 0);
                    $(e.target).addClass('active');
                }

                // Red
                if($(e.target).hasClass('button-red')){
                    $('.color-slider-holder .custom-button .slider-button.active').removeClass('active');
                    this.$bikeColorSlider.slick('slickGoTo', 1);
                    $(e.target).addClass('active');
                }

                // Black
                if($(e.target).hasClass('button-black')){
                    $('.color-slider-holder .custom-button .slider-button.active').removeClass('active');
                    this.$bikeColorSlider.slick('slickGoTo', 2);
                    $(e.target).addClass('active');
                }
            }
        })
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
}