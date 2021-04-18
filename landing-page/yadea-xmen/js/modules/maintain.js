export default class Maintainance {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor() {
    this.DISTANCE_Y = window.innerWidth * 0.05;

    // Elements Variables
    this.$MaintainSection = $("#yadea-xmen-maintainance");

    // Main Content
    this.$Maintain_Content = this.$MaintainSection.find(".main-content");
    this.$Maintain_Title = this.$Maintain_Content.find(".section-title");
    this.$Maintain_Sub_Title = this.$Maintain_Content.find(".section-sub-title");
    this.$Maintain_Text = this.$Maintain_Content.find(".text");

    // Effect Block
    this.$Maintain_Effect = this.$MaintainSection.find(".effect-holder");
    this.$Maintain_Bg = this.$Maintain_Effect.find(".bg-holder");
    // this.$Maintain_Effect_Garage = this.$MaintainSection.find(".garage-layer");
    // this.$Maintain_Effect_Garage_Shadow = this.$MaintainSection.find(".garage-shadow-layer");
    // this.$Maintain_Effect_Bike = this.$MaintainSection.find(".bike-layer");
    // this.$Maintain_Effect_Battery = this.$MaintainSection.find(".battery-layer");
    // this.$Maintain_Effect_Door = this.$MaintainSection.find(".door-layer");

    this.starterAnimation = new TimelineMax({
      paused: true,
      onComplete: () => {
        this.$Maintain_Effect.addClass("floating");
      },
    });

    this.bindEvents();
  }

  /* ===================================
   *  EVENTS
   * =================================== */
  bindEvents() {
    this.InitSection();
    yadeaXMenListener.on("yadea-xmen-maintainance-anim", () => {
      this.starterAnimation.play();
    });
  }

  /* ===================================
   *  METHODS
   * =================================== */
  InitSection() {
    TweenMax.set([this.$Maintain_Title, this.$Maintain_Sub_Title, this.$Maintain_Text], {
      autoAlpha: 0,
      y: this.DISTANCE_Y * 0.25,
    });

    TweenMax.set(this.$Maintain_Bg, {
      autoAlpha: 0,
      y: this.DISTANCE_Y * 0.5,
    });

    // TweenMax.set(this.$Maintain_Effect_Garage_Shadow, {
    //   autoAlpha: 0,
    //   scale: 0.92,
    // });

    // TweenMax.set(this.$Maintain_Effect_Garage, {
    //   autoAlpha: 0,
    //   y: this.DISTANCE_Y * 0.5,
    // });

    // TweenMax.set([this.$Maintain_Effect_Battery, this.$Maintain_Effect_Bike, this.$Maintain_Effect_Door], {
    //   autoAlpha: 0,
    //   y: -this.DISTANCE_Y * 0.5,
    // });

    this.starterAnimation.staggerTo(
      [this.$Maintain_Title, this.$Maintain_Sub_Title, this.$Maintain_Text],
      0.5,
      {
        autoAlpha: 1,
        y: 0,
      },
      0.25
    );

    this.starterAnimation.to(this.$Maintain_Bg, 0.6, { autoAlpha: 1, y: 0 }, "-=0.3");

    // this.starterAnimation.to(this.$Maintain_Effect_Garage, 0.6, { autoAlpha: 1, y: 0 }, "-=0.2");
    // this.starterAnimation.to(this.$Maintain_Effect_Garage_Shadow, 0.8, { autoAlpha: 1, scale: 1 }, "-=0.45");
    // this.starterAnimation.staggerTo(
    //   [this.$Maintain_Effect_Bike, this.$Maintain_Effect_Battery],
    //   0.6,
    //   {
    //     autoAlpha: 1,
    //     y: 0,
    //   },
    //   0.2,
    //   "-=0.4"
    // );
    // this.starterAnimation.to(this.$Maintain_Effect_Door, 0.4, { autoAlpha: 1, y: 0 }, "-=0.15");
    // this.starterAnimation.to(this.$Maintain_Effect_Door, 0.25, { autoAlpha: 0.85, scale: 0.98 }, "+=0.1");
    // this.starterAnimation.to(this.$Maintain_Effect_Door, 0.25, { autoAlpha: 1, scale: 1 });
    // this.starterAnimation.to(this.$Maintain_Effect_Door, 0.25, { autoAlpha: 0.85, scale: 0.98 });
    // this.starterAnimation.to(this.$Maintain_Effect_Door, 0.25, { autoAlpha: 1, scale: 1 });
    // this.starterAnimation.to(this.$Maintain_Effect_Door, 0.25, { autoAlpha: 0.85, scale: 0.98 });
    // this.starterAnimation.to(this.$Maintain_Effect_Door, 0.25, { autoAlpha: 1, scale: 1 });
  }
}
