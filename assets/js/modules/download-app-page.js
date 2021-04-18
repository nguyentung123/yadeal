export default class DownloadAppSupportPage {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor(){
    // Elements Variable
    this.sliderProcess = $('.slide-process');

    this.bindEvents();
  }


  /* ===================================
   *  EVENTS
   * =================================== */
  bindEvents(){
    if(this.sliderProcess.length > 0){
      this.sliderProcess.slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: false,
        arrows: false,
        loop: false,
        infinite: false,
        fade: true,
        focusOnSelect: false,
        autoplay: true,
        autoplaySpeed: 2500,
      });
    }
  }


  /* ===================================
   *  METHODS
   * =================================== */
}
