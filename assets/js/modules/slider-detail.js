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
    $('.real-img-slider').slick({
      infinite: true,
      slidesToShow: 3,
      slidesToScroll: 1,
      nextArrow: `<img class="real-img-control next-slide" src="${yadeaVietnamVariables.assets_url}img/arrow-right.png">`,
      prevArrow: `<img class="real-img-control prev-slide" src="${yadeaVietnamVariables.assets_url}img/arrow-left.png">`,
    });
  }

  AddColorSlide () {
    for(let i=0 ; i< this.arrDots.length ; i++) {
      $(this.arrDots[i]).on('click', function (e) {
        $('.slide-detail .slide-content').slick('slickGoTo', i);
        $('.slide-dots-custom li.active-color').removeClass('active-color');
        $(e.target).parents('li').addClass('active-color');
      })
    }
  }


}
