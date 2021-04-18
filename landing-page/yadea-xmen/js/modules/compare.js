export default class Comparision {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor() {
    this.DISTANCE_Y = window.innerWidth * 0.05;

    // Elements Variables
    this.$CompareSection = $("#yadea-xmen-comparision");
    this.$CompareMainContent = this.$CompareSection.find(".main-content");

    // Compare Layout
    this.$Compare_Layout = this.$CompareSection.find(".comparision-layout");
    this.$Compare_Layout_Options = this.$Compare_Layout.find(".comparision-options");
    this.$Compare_Layout_Options_Btn = this.$CompareSection.find(".option-item");
    this.$Compare_Layout_Column_Top = this.$Compare_Layout.find(".compare-product-column.column-top");
    this.$Compare_Layout_Column_Bottom = this.$Compare_Layout.find(".compare-product-column.column-bottom");

    this.$Compare_Layout_CompareList = this.$Compare_Layout.find(".product-compare-data .data-list");

    this.starterAnimation = new TimelineMax({
      paused: true,
      onComplete: () => {
        this.SetupCompareProduct();
      },
    });

    this.bindEvents();
  }

  /* ===================================
   *  EVENTS
   * =================================== */
  bindEvents() {
    this.InitSection();
    yadeaXMenListener.on("yadea-xmen-comparision-anim", () => {
      this.starterAnimation.play();
    });
  }

  /* ===================================
   *  METHODS
   * =================================== */
  InitSection() {
    TweenMax.set(this.$CompareMainContent, { autoAlpha: 0, y: this.DISTANCE_Y * 0.25 });
    TweenMax.set([this.$Compare_Layout_Column_Top, this.$Compare_Layout_Column_Bottom, this.$Compare_Layout_Options], {
      autoAlpha: 0,
    });

    this.starterAnimation.to(this.$CompareMainContent, 0.5, {
      autoAlpha: 1,
      y: 0,
    });
    this.starterAnimation.to(
      [this.$Compare_Layout_Column_Top, this.$Compare_Layout_Column_Bottom, this.$Compare_Layout_Options],
      0.6,
      {
        autoAlpha: 1,
      },
      "-=0.1"
    );
  }

  SetupCompareProduct() {
    this.$Compare_Layout_Options_Btn.on("click", (e) => {
      if (!$(e.target).hasClass("active")) {
        let targetOption = $(e.target).data("target");
        this.$Compare_Layout_Options_Btn.removeClass("active");
        $(e.target).addClass("active");
        this.$Compare_Layout_CompareList.removeClass("active");
        $(`#xmen-data__${targetOption}`).addClass("active");
        $(`#x5-data__${targetOption}`).addClass("active");
      }
    });
  }
}
