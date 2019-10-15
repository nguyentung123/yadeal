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
                        $toggleTarget.slideToggle('normal');
                    }
                }
            })
        }


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

    CloseMbSubMenu(){
        if(this.$subNavTrigger){
            let $toggleTarget = this.$subNavTrigger.siblings('.nav-item__sub-menu');
            if($toggleTarget){
                $toggleTarget.slideUp('normal');
            }

            this.$subNavTrigger.removeClass('active');
        }
    }
}