export default class Banner {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor() {
    this.DISTANCE_Y = window.innerWidth * 0.05;

    // Elements Variables
    this.$BannerSection = $("#yadea-xmen-banner");
    this.$BannerBg = this.$BannerSection.find(".bg-holder");
    this.$BannerMainContent = this.$BannerSection.find(".main-content");
    this.$BannerSaleDetailInfo = this.$BannerMainContent.find(".sale-detail > *");
    this.$BannerSaleDetailLogo = this.$BannerMainContent.find(".sale-logo");
    this.$BannerSaleDetailCTA = this.$BannerMainContent.find(".sale-cta");

    this.starterTimeline = new TimelineMax({ paused: true });

    this.bindEvents();
  }

  /* ===================================
   *  EVENTS
   * =================================== */
  bindEvents() {
    this.InitSection();

    yadeaXMenListener.on("yadea-xmen-banner-anim", () => {
      this.starterTimeline.play();
    });
  }

  /* ===================================
   *  METHODS
   * =================================== */
  InitSection() {
    // Init State
    TweenMax.set(this.$BannerBg, { autoAlpha: 0 });
    TweenMax.set(this.$BannerSaleDetailInfo, { y: this.DISTANCE_Y * 0.25, autoAlpha: 0 });
    TweenMax.set(this.$BannerSaleDetailLogo, { autoAlpha: 0 });
    TweenMax.set(this.$BannerSaleDetailCTA, { autoAlpha: 0, y: this.DISTANCE_Y * 0.25 });

    // Build Timeline
    this.starterTimeline.to(this.$BannerBg, 0.6, { autoAlpha: 1 });
    this.starterTimeline.to(this.$BannerSaleDetailLogo, 0.6, { autoAlpha: 1 }, "-=0.2");
    this.starterTimeline.staggerTo(this.$BannerSaleDetailInfo, 0.4, { autoAlpha: 1, y: 0 }, 0.15, "-=0.6");
    this.starterTimeline.to(this.$BannerSaleDetailCTA, 0.5, { autoAlpha: 1, y: 0 }, "-=0.2");
  }
}
