// Import Lodash As Demo
import * as _ from 'lodash';

export default class SliderDetail {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor(){
    // Elements Variable
    this.arrSlideDetail = $('.slide-content .slide-item');
    this.arrLiTag = $('.slide-dots-custom li');
    this.arrDots = $('.slide-dots-custom li button');

    this.bindEvents();
  }


  /* ===================================
   *  EVENTS
   * =================================== */
  bindEvents(){
    // Slick carousel product detail
    this.SlideDetailPage();
    // Slick carousel center mod image reality
    this.SlideImageReality();

    this.AddColorSlide();
  }



  /* ===================================
   *  METHODS
   * =================================== */
  SlideDetailPage () {
    $('.slide-detail .slide-content').slick({
      draggable: true,
      arrows: false,
      dots: false,
      fade: true,
      speed: 900,
      infinite: true,
      // autoplay:true,
      // autoplaySpeed:5000,
      cssEase: 'cubic-bezier(0.7, 0, 0.3, 1)',
      touchThreshold: 100
    });
  }


  SlideImageReality () {
    $('.slide-image-reality .slide-content').slick({
      centerMode: true,
      centerPadding: '0px',
      slidesToShow: 3,
      arrows: true,
      prevArrow: '<div class="arrow prev"><img src="./img/arrow-left.png" alt="left"></div>',
      nextArrow:'<div class="arrow next"><img src="./img/arrow-right.png" alt="right"></div>',
      dots: false,
      responsive: [
        {
          breakpoint: 1025,
          settings: {
            arrows: false,
            centerMode: true,
          }
        },
        {
          breakpoint: 769,
          settings: {
            arrows: false,
            centerMode: false,
            slidesToShow: 1,
          }
        }
      ]
    });
  }


  AddColorSlide () {
    for(let i=0 ; i< this.arrDots.length ; i++) {
      $(this.arrDots[i]).on('click', function () {
        $('.slide-detail .slide-content').slick('slickGoTo', i);
        var arrLiTag = $('.slide-dots-custom li');
        // $(this).parent().addClass('slick-active')
      })
    }
  }


}
