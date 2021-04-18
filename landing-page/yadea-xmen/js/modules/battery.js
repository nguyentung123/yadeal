export default class Battery {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor() {
    this.DISTANCE_Y = window.innerWidth * 0.05;

    // Elements Variables
    this.$BatterySection = $("#yadea-xmen-battery");

    // Background
    this.$Battery_Bg = this.$BatterySection.find(".bg-holder");

    // Main Content
    this.$BatteryMainContent = this.$BatterySection.find(".main-content");
    this.$Battery_Title = this.$BatteryMainContent.find(".section-title");
    this.$Battery_Sub_Title = this.$BatteryMainContent.find(".section-sub-title");
    this.$Battery_Text = this.$BatteryMainContent.find(".text");

    // Effect Elements
    this.$BatteryEffects = this.$BatterySection.find(".effect-holder");
    this.$BatteryEffects_Top = this.$BatteryEffects.find(".effect-top");
    this.$BatteryEffects_Bottom = this.$BatteryEffects.find(".effect-bottom");

    // Starter Timeline
    this.starterTimeline = new TimelineMax({ paused: true });

    this.bindEvents();
  }

  /* ===================================
   *  EVENTS
   * =================================== */
  bindEvents() {
    this.InitSection();

    yadeaXMenListener.on("yadea-xmen-battery-anim", () => {
      this.starterTimeline.play();
    });
  }

  /* ===================================
   *  METHODS
   * =================================== */
  InitSection() {
    TweenMax.set([this.$Battery_Title, this.$Battery_Sub_Title, this.$Battery_Text], {
      opacity: 0,
      y: this.DISTANCE_Y * 0.25,
    });
    TweenMax.set([this.$BatteryEffects_Top, this.$BatteryEffects_Bottom], { opacity: 0 });

    this.starterTimeline.staggerTo(
      [this.$Battery_Title, this.$Battery_Sub_Title, this.$Battery_Text],
      0.5,
      {
        autoAlpha: 1,
        y: 0,
      },
      0.25
    );
    this.starterTimeline.to([this.$BatteryEffects_Top, this.$BatteryEffects_Bottom], 0.35, { opacity: 1 }, "-=0.2");
  }
}
