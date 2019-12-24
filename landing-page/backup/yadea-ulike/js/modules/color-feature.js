export default class ColorFeature {
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
        this.ColorFeatureSliderSetup();
    }

    /* ===================================
     *  METHODS
     * =================================== */
    ColorFeatureSliderSetup(){
        this.allowChangeColor = true;
        this.$bikeColorSlider = $('.colors-slider-holder .colors-slider');

        this.$bikeColorSlider.on('beforeChange', (event, slick, currentSlide, nextSlide) => {
            $('.colors-slider-holder .colors-indicator .color-item.active').removeClass('active');
            $('.colors-slider-holder .colors-indicator .color-item:nth-child(' + (nextSlide + 1) + ')').addClass('active');
        })

        this.$bikeColorSlider.slick({
            slidesToShow: 1,
            fade: true,
            arrows: false,
            autoplay: true,
        });

        $('.colors-slider-holder .colors-indicator .color-item').on('click', (e) => {
            if(!$(e.target).hasClass('active') && this.allowChangeColor) {

                // Stop interaction
                this.allowChangeColor = false;
                setTimeout(() => this.allowChangeColor = true, 520);

                // Yellow
                if($(e.target).hasClass('yellow')){
                    $('.colors-slider-holder .colors-indicator .color-item.active').removeClass('active');
                    this.$bikeColorSlider.slick('slickGoTo', 0);
                    $(e.target).addClass('active');
                }

                // White
                if($(e.target).hasClass('white')){
                    $('.colors-slider-holder .colors-indicator .color-item.active').removeClass('active');
                    this.$bikeColorSlider.slick('slickGoTo', 1);
                    $(e.target).addClass('active');
                }

                // Black
                if($(e.target).hasClass('black')){
                    $('.colors-slider-holder .colors-indicator .color-item.active').removeClass('active');
                    this.$bikeColorSlider.slick('slickGoTo', 2);
                    $(e.target).addClass('active');
                }

                // Red
                if($(e.target).hasClass('red')){
                    $('.colors-slider-holder .colors-indicator .color-item.active').removeClass('active');
                    this.$bikeColorSlider.slick('slickGoTo', 3);
                    $(e.target).addClass('active');
                }
            }
        })
    }
}