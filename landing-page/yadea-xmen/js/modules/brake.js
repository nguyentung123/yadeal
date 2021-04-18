export default class Brake {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor() {
    this.DISTANCE_Y = window.innerWidth * 0.05;

    // Elements Variables
    this.$BrakeSection = $("#yadea-xmen-brake");

    // Main Content
    this.$BrakeContent = this.$BrakeSection.find(".main-content");
    this.$Brake_Title = this.$BrakeContent.find(".section-title");
    this.$Brake_Sub_Title = this.$BrakeContent.find(".section-sub-title");
    this.$Brake_Text = this.$BrakeContent.find(".text");

    // Effect Holder
    this.$BrakeEffect = this.$BrakeSection.find(".effect-holder");
    this.$Brake_Back_Brake = this.$BrakeEffect.find(".brake-effect.back-brake");
    this.$Brake_Back_Image = this.$Brake_Back_Brake.find(".main-image");
    // this.$Brake_Back_Highlight = this.$Brake_Back_Brake.find(".main-highlight");
    this.$Brake_Back_Highlight_2 = this.$Brake_Back_Brake.find(".sub-highlight");

    this.$Brake_Front_Brake = this.$BrakeEffect.find(".brake-effect.front-brake");
    this.$Brake_Front_Image = this.$Brake_Front_Brake.find(".main-image");
    // this.$Brake_Front_Highlight = this.$Brake_Front_Brake.find(".main-highlight");
    this.$Brake_Front_Highlight_2 = this.$Brake_Front_Brake.find(".sub-highlight");

    this.BrakeEffectTimeline = new TimelineMax({
      paused: true,
      repeat: -1,
      repeatDelay: 1.5,
    });

    this.starterAnimation = new TimelineMax({
      paused: true,
      onComplete: () => {
        // this.BrakeEffectTimeline.play();
      },
    });

    this.bindEvents();
  }

  /* ===================================
   *  EVENTS
   * =================================== */
  bindEvents() {
    this.InitSection();
    yadeaXMenListener.on("yadea-xmen-brake-anim", () => {
      this.starterAnimation.play();
    });
  }

  /* ===================================
   *  METHODS
   * =================================== */
  InitSection() {
    // Init State
    TweenMax.set([this.$Brake_Title, this.$Brake_Sub_Title, this.$Brake_Text], {
      autoAlpha: 0,
      y: this.DISTANCE_Y * 0.25,
    });

    TweenMax.set([this.$Brake_Back_Image, this.$Brake_Front_Image], {
      autoAlpha: 0,
      y: -this.DISTANCE_Y * 0.5,
    });

    TweenMax.set([this.$Brake_Back_Highlight, this.$Brake_Front_Highlight], {
      autoAlpha: 0,
    });

    TweenMax.set([this.$Brake_Back_Highlight_2, this.$Brake_Front_Highlight_2], {
      x: "-10%",
      scaleX: 0.4,
      autoAlpha: 0,
    });

    // Starter Timeline Build
    this.starterAnimation.staggerTo(
      [this.$Brake_Title, this.$Brake_Sub_Title, this.$Brake_Text],
      0.5,
      {
        autoAlpha: 1,
        y: 0,
      },
      0.25
    );

    this.starterAnimation.to([this.$Brake_Back_Image, this.$Brake_Front_Image], 0.6, {
      autoAlpha: 1,
      y: 0,
    });

    this.starterAnimation.to(
      [this.$Brake_Back_Highlight_2, this.$Brake_Front_Highlight_2],
      0.6,
      {
        autoAlpha: 1,
        x: "0%",
        scaleX: 1,
        transformOrigin: "0% 50%",
      },
      "-=0.2"
    );

    // Brake Effect Timeline Build
    // this.BrakeEffectTimeline.to([this.$Brake_Back_Highlight, this.$Brake_Front_Highlight], 0.3, {
    //   autoAlpha: 1,
    // });

    // this.BrakeEffectTimeline.to(
    //   [this.$Brake_Back_Highlight_2, this.$Brake_Front_Highlight_2],
    //   0.4,
    //   {
    //     autoAlpha: 1,
    //     x: "0%",
    //     transformOrigin: "0% 50%",
    //     scaleX: 1,
    //     autoAlpha: 1,
    //   },
    //   "-=0.4"
    // );

    // this.BrakeEffectTimeline.addLabel("endHighlightAppear");
    // this.BrakeEffectTimeline.to(
    //   [this.$Brake_Back_Highlight, this.$Brake_Front_Highlight],
    //   0.3,
    //   {
    //     autoAlpha: 0,
    //   },
    //   "endHighlightAppear+=2"
    // );

    // this.BrakeEffectTimeline.to(
    //   [this.$Brake_Back_Highlight_2, this.$Brake_Front_Highlight_2],
    //   0.4,
    //   {
    //     x: "10%",
    //     transformOrigin: "100% 50%",
    //     scaleX: 0.9,
    //     autoAlpha: 0,
    //     onComplete: () => {
    //       TweenMax.set([this.$Brake_Back_Highlight_2, this.$Brake_Front_Highlight_2], {
    //         x: "-10%",
    //         scaleX: 0.4,
    //         autoAlpha: 0,
    //       });
    //     },
    //   },
    //   "endHighlightAppear+=2"
    // );
  }
}
