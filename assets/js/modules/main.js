export default class Main {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        // Elements Variable
        this.$subMenuTrigger = $('#sub-menu-trigger');
        this.$subMenu = $('#page-sub-menu');

        this.$aboutusMenuTrigger = $('#about-us-sub-menu-trigger');
        this.$aboutusSubMenu = $('#about-us-sub-menu');

        this.$imageHolder = $('.image-holder');
        this.$imageHolderTarget = null;
        this.imageHolderInterval = null;
        this.imageHolderTimeout = null;

        // Mobile Menu
        this.$mobileMenu = $('#mobile-menu');
        this.$mobileMenuControl = $('#mobile-menu-ctrl');
        this.$mobileMenuOverlay = this.$mobileMenu.find('.mobile-menu__overlay');
        this.$subNavTrigger = this.$mobileMenu.find('.nav-trigger');

        this.appStatus = {
            showSubMenu: false,
            imageHoverState: false,
            showMbMenu: false,
            allowClickMbMenu: true,
            showSmallMenu: false,
            showAboutSubMenu: false,
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
                this.ToggleAboutSubMenu(false);
                this.ToggleSubMenu(true);
            }

            if(this.appStatus.showAboutSubMenu){
                this.ToggleAboutSubMenu(false);
            }
        });

        this.$subMenu.on('mouseleave', (e) => {
            if(this.appStatus.showSubMenu){
                this.ToggleSubMenu(false);
            }
        });

        /* ===== Aboutus Sub Menu Effect Display ===== */
        this.$aboutusMenuTrigger.on('mouseenter', (e) => {
            e.preventDefault();

            if(!this.appStatus.showAboutSubMenu){
                this.ToggleAboutSubMenu(true);
            }
            if(this.appStatus.showSubMenu){
                this.ToggleSubMenu(false);
            }
        });

        this.$aboutusSubMenu.on('mouseleave', (e) => {
            if(this.appStatus.showAboutSubMenu){
                this.ToggleAboutSubMenu(false);
            }
        });

        /* ===== Mobile Menu Effect ===== */
        this.CloseMbSubMenu();
        this.$mobileMenuControl.on('click', (e) => {
            if(this.appStatus.allowClickMbMenu) {
                if (!this.appStatus.showMbMenu) {
                    this.appStatus.allowClickMbMenu = false;
                    this.ToggleMobileMenu(true);
                } else {
                    this.appStatus.allowClickMbMenu = false;
                    this.ToggleMobileMenu(false);

                }
            }
        });

        this.$mobileMenuOverlay.on('click', (e) => {
            if (this.appStatus.allowClickMbMenu) {
                if (this.appStatus.showMbMenu) {
                    this.ToggleMobileMenu(false);
                }
            }
        });

        if(this.$subNavTrigger){
            this.$subNavTrigger.on('click', (e) => {
                if(this.appStatus.allowClickMbMenu){
                    this.appStatus.allowClickMbMenu = false;
                    setTimeout(() => this.appStatus.allowClickMbMenu = true, 200);

                    if($(e.target).hasClass('active')){
                        $(e.target).removeClass('active');
                    } else {
                        $(e.target).addClass('active');
                    }

                    let $toggleTarget = $(e.target).siblings('.nav-item__sub-menu');
                    if($toggleTarget){
                        $toggleTarget.slideToggle({
                            start: function () {
                                $(this).css({
                                    display: "flex",
                                })
                            }
                        });
                    }
                }
            })
        }


        /* ===== Image Holder Display Effect ===== */
        $('.product-showcase__item__body .image-holder>img:first-child').addClass('active');
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


        /* ==== Wordpress Admin Bar Adaptation === */
        if($('body').hasClass('admin-bar') && window.innerWidth <= 600){
            this.$pageHeader = $('#page-header');
            $(window).on('scroll', () => {
                if(window.pageYOffset > 20){
                    this.$pageHeader.addClass('scroll-menu');
                } else {
                    this.$pageHeader.removeClass('scroll-menu');
                }
            });
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

    ToggleAboutSubMenu(show){
        this.appStatus.showAboutSubMenu = show;
        if(show){
            this.$aboutusSubMenu.addClass('active');
        } else {
            this.$aboutusSubMenu.removeClass('active');
        }
    }

    ToggleMobileMenu( show ){
        setTimeout(()=>{
            this.appStatus.allowClickMbMenu = true;
        }, 200);

        this.appStatus.showMbMenu = show;

        if(show){
            if(this.$mobileMenu && this.$mobileMenuControl){
                this.$mobileMenu.addClass('active');
                this.$mobileMenuControl.addClass('show-menu');
            }
        } else {
            if(this.$mobileMenu && this.$mobileMenuControl){
                this.$mobileMenu.removeClass('active');
                this.$mobileMenuControl.removeClass('show-menu');
            }

            this.CloseMbSubMenu();
        }
    }

    ActiveImageHover( active ) {
        if (this.$imageHolderTarget.find('.image-holder__item').length > 1) {
            this.appStatus.imageHoverState = active;
            if (active) {
                this.$imageList = this.$imageHolderTarget.find('.image-holder__item').toArray();
                this.ImageCounter = 0;
                this.DoAnimate(true);
            } else {
                this.CleanUpImageHover();
            }
        }
    }

    DoAnimate(firstTime = false){
        let timeout_amount = 1700;
        if(firstTime){
            timeout_amount = 600
        }
        this.AnimateTimeout = setTimeout(() => {
            $(this.$imageList[this.ImageCounter]).addClass('slide-away').removeClass('active');

            setTimeout(() => {
                $(this.$imageList[this.ImageCounter]).removeClass('slide-away');
                if(this.ImageCounter === this.$imageList.length - 1){
                    this.ImageCounter = 0;
                } else {
                    this.ImageCounter++;
                }

                setTimeout(() => {$(this.$imageList[this.ImageCounter]).addClass('active');}, 100)

            }, 380);

            this.DoAnimate();
        }, timeout_amount);
    }

    CleanUpImageHover(){
        var id = window.setTimeout(function () {
        }, 0);

        while (id--) {
            window.clearTimeout(id); // will do nothing if no timeout with id is present
        }

        this.ImageCounter = 0;
        if (this.$imageHolderTarget.find('img.active').index() > 0) {
            this.$imageHolderTarget.find('img').removeClass('slide-away active');
        }
        $(this.$imageList[this.ImageCounter]).removeClass('slide-away').addClass('active');
    }

    CloseMbSubMenu() {
        if (this.$subNavTrigger) {
            let $toggleTarget = this.$subNavTrigger.siblings('.nav-item__sub-menu');
            if ($toggleTarget) {
                $toggleTarget.slideUp('normal');
            }

            this.$subNavTrigger.removeClass('active');
        }
    }
}