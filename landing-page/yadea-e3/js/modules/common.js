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
        this.SetupCommon();
    }

    /* ===================================
     *  METHODS
     * =================================== */
    SetupCommon(){
        // Smooth Scrolling
        this.SmoothScrollingSetup();

        // Color Slider
        this.BikeColorSliderSetup();

        // Fixed Top Menu Effect
        this.$pageHeader = $('#page-header');
        this.SetupFixedTopSubMenu();

        // Sub Menu Toggle On Mobile
        if(window.innerWidth < 480){
            this.SetupMbMenuToggle();
        }

        // Setup Test Drive Behavior
        this.SetupTestDriveBehavior();
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
                    $('.color-slider-holder .custom-button .sl watchjider-button.active').removeClass('active');
                    this.$bikeColorSlider.slick('slickGoTo', 1);
                    $(e.target).addClass('active');
                }

                // Black
                if($(e.target).hasClass('button-blue')){
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

    SetupTestDriveBehavior(){
        this.$testDriveBox = $('.test-drive-box');
        this.$closeButton = this.$testDriveBox.find('.cta-holder .close-area');

        this.$closeButton.on('click', (e) => {
            e.preventDefault();
            this.$testDriveBox.addClass('inactive');
        })

        if(window.innerWidth > 768){
            // Desktop
            this.testDriveIsHover = false;
            this.testDriveAllowInteraction = true;
            this.$desktopContentWrapper = this.$testDriveBox.find('.desktop-content-wrapper');
            this.$desktopIconHolder = this.$desktopContentWrapper.find('.icon-holder');
            this.$desktopContextHolder = this.$desktopContentWrapper.find('.context-holder');

            if(window.pageYOffset > 30){
                this.$desktopIconHolder.addClass('active');
                this.$desktopContextHolder.removeClass('active');
            }

            $(document).on('scroll', () => {
                if(window.pageYOffset > 30 && !this.testDriveIsHover){
                    if(!this.$desktopIconHolder.hasClass('active')){
                        this.$desktopIconHolder.addClass('active');
                        this.$desktopContextHolder.removeClass('active');
                    }
                } else {
                    if(!this.$desktopContextHolder.hasClass('active')){
                        this.$desktopIconHolder.removeClass('active');
                        this.$desktopContextHolder.addClass('active');
                    }
                }
            });

            // Mouse In, Show Context, Block Other Interaction
            this.$desktopContentWrapper.on('mouseenter', () => {
                this.testDriveIsHover = true;
                if(this.$desktopIconHolder.hasClass('active') && this.testDriveAllowInteraction){
                    this.testDriveAllowInteraction = false;
                    this.$desktopIconHolder.removeClass('active');
                    this.$desktopContextHolder.addClass('active');

                    setTimeout(() => {
                        this.testDriveAllowInteraction = true;
                    }, 300);
                }
            });

            this.$desktopContentWrapper.on('mouseleave', () => {
                this.testDriveIsHover = false;
                if( window.pageYOffset > 30 &&
                    this.$desktopContextHolder.hasClass('active') &&
                    this.testDriveAllowInteraction ) {
                    this.testDriveAllowInteraction = false;
                    this.$desktopIconHolder.addClass('active');
                    this.$desktopContextHolder.removeClass('active');
                    setTimeout(() => {
                        this.testDriveAllowInteraction = true;
                    }, 300);
                }
            });
        } else {
            // Mobile
        }
    }
}