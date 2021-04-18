import { contextFadeIn, contextInit } from './utils';

export default class Colors {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.$context = $('.g5-style-section');
        this.$colorList = $('.g5-style-section .g5-color-list');
        this.$itemColor = this.$colorList.find('.color-item');

        this.$itemColor1 = this.$colorList.find('.color-item.color-1');
        this.$itemColor2 = this.$colorList.find('.color-item.color-2');
        this.$itemColor3 = this.$colorList.find('.color-item.color-3');
        this.$itemColor4 = this.$colorList.find('.color-item.color-4');

        this.$mobileSlider = this.$context.find('.color-select-video-mb');

        this.currentColor = 0;

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents() {
        this.InitSection();
        if (window.innerWidth > 768) {
            this.SetupDesktopAnimation();
        } else {
            contextInit(this.$context, [this.$mobileSlider]);
            this.SetupMobileAnimation();
        }
    }


    /* ===================================
     *  METHODS
     * =================================== */
    InitSection() {
        contextInit(this.$context, [this.$colorList]);
    }

    SetupDesktopAnimation() {
        this.ActiveColor(2);
        g5Listener.on('color-anim', () => {
            contextFadeIn(this.$context, () => {
                this.SetupHoverEffect();
            }, [this.$colorList]);
        });
    }

    SetupMobileAnimation() {
        $('.g5-color-list-mb').slick({
            centerMode: true,
            centerPadding: '0',
            slidesToShow: 3,
            arrows: false,
            lazyLoad: 'ondemand',
        });

        g5Listener.on('color-anim', () => {
            contextFadeIn(this.$context, () => {
                this.SetupHoverEffect();
            }, [this.$mobileSlider]);
        });

        $('.color-slider-controller.prev-color-slide').on('click', () => {
            $('.g5-color-list-mb').slick('slickPrev');
        });

        $('.color-slider-controller.next-color-slide').on('click', () => {
            $('.g5-color-list-mb').slick('slickNext');
        })
    }

    SetupHoverEffect() {
        this.$itemColor.on('mouseenter', (e) => {
            if ($(e.target).parents('.color-item').hasClass('color-1')) {
                this.ActiveColor(1);
            }

            if ($(e.target).parents('.color-item').hasClass('color-2')) {
                this.ActiveColor(2);
            }

            if ($(e.target).parents('.color-item').hasClass('color-3')) {
                this.ActiveColor(3);
            }

            if ($(e.target).parents('.color-item').hasClass('color-4')) {
                this.ActiveColor(4);
            }
        });

        // this.$colorList.on('mouseleave', (e) => {
        //     this.ActiveColor(0);
        // })
    }

    ActiveColor(colorID) {
        switch (colorID) {
            case 1:
                // targetColor
                this.$itemColor1.addClass('active')
                    .css({ 'left': '-3%' });

                // other colors
                this.$itemColor2.removeClass('active')
                    .css({ 'left': '24.5%' });
                this.$itemColor3.removeClass('active')
                    .css({ 'left': '48.25%' });
                this.$itemColor4.removeClass('active')
                    .css({ 'left': '71.75%' });
                break;

            case 2:
                // targetColor
                this.$itemColor2.addClass('active')
                    .css({ 'left': '22%' });

                // other colors
                this.$itemColor1.removeClass('active')
                    .css({ 'left': '-5.75%' });
                this.$itemColor3.removeClass('active')
                    .css({ 'left': '49.75%' });
                this.$itemColor4.removeClass('active')
                    .css({ 'left': '73.5%' });
                break;

            case 3:
                // targetColor
                this.$itemColor3.addClass('active')
                    .css({ 'left': '47%' });

                // other colors
                this.$itemColor2.removeClass('active')
                    .css({ 'left': '19.25%' });
                this.$itemColor1.removeClass('active')
                    .css({ 'left': '-4.525%' });
                this.$itemColor4.removeClass('active')
                    .css({ 'left': '74.75%' });
                break;

            case 4:
                // targetColor
                this.$itemColor4.addClass('active')
                    .css({ 'left': '70.75%' });

                // other colors
                this.$itemColor2.removeClass('active')
                    .css({ 'left': '19.25%' });
                this.$itemColor3.removeClass('active')
                    .css({ 'left': '43%' });
                this.$itemColor1.removeClass('active')
                    .css({ 'left': '-4.75%' });
                break;

                // Reset Everything to normal when recaive other value
            default:
                this.$itemColor2.removeClass('active')
                    .css({ 'left': '22%' });
                this.$itemColor1.removeClass('active')
                    .css({ 'left': '-2%' });
                this.$itemColor3.removeClass('active')
                    .css({ 'left': '46%' });
                this.$itemColor4.removeClass('active')
                    .css({ 'left': '70%' });
                break;
        }
    }
}