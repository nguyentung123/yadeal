import ScrollMagic from "scrollmagic";
import "imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/debug.addIndicators";
// import "imports-loader?define=>false!scrollmagic/scrollmagic/uncompressed/plugins/jquery.ScrollMagic";
import { ScrollMagicPluginGsap } from "scrollmagic-plugin-gsap";
ScrollMagicPluginGsap(ScrollMagic, TweenMax, TimelineMax);

export default class Power {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor() {
    this.DISTANCE_Y = window.innerWidth * 0.05;
    this.scrollMagicController = new ScrollMagic.Controller();

    // Elements
    this.$PowerSection = $("#yadea-xmen-power");
    this.$PowerEffect = $("#xmen-power-effect");
    this.EFFECT_HEIGHT = this.$PowerEffect.height();
    this.$Power_Top_Content = this.$PowerSection.find(".top-effect-content");
    this.$Power_Top_Text = this.$Power_Top_Content.find(".main-content");
    this.$Power_Top_Text_Title = this.$Power_Top_Text.find(".section-title");
    this.$Power_Top_Text_Sub_Title = this.$Power_Top_Text.find(".section-sub-title");
    this.$Power_Top_Text_Context = this.$Power_Top_Text.find(".text");
    this.$Power_Top_Bg = this.$Power_Top_Content.find(".top-bg");

    this.$Power_Bottom_Content = this.$PowerSection.find(".bottom-effect-content");
    this.$Power_Bottom_Data_Block = this.$Power_Bottom_Content.find(".data-info");
    this.$Power_Bottom_Data_Label = this.$Power_Bottom_Data_Block.find(".data-info-label");
    this.$Power_Bottom_Data_Text = this.$Power_Bottom_Data_Block.find(".text");

    this.$Power_CounterShock_Label = $("#power-data__counter-shock .data-info-label");
    this.$Power_CounterShock_Text = $("#power-data__counter-shock .text");

    this.$Power_BikeFrame_Label = $("#power-data__bike-frame .data-info-label");
    this.$Power_BikeFrame_Text = $("#power-data__bike-frame .text");

    this.$Power_BikeBottom_Label = $("#power-data__bike-bottom .data-info-label");
    this.$Power_BikeBottom_Text = $("#power-data__bike-bottom .text");

    this.$Power_WaterResist_Label = $("#power-data__bike-water-resist .data-info-label");
    this.$Power_WaterResist_Text = $("#power-data__bike-water-resist .text");

    this.$Power_Engine_Label = $("#power-data__bike-engine .data-info-label");
    this.$Power_Engine_Text = $("#power-data__bike-engine .text");

    this.$Power_Wheel_Label = $("#power-data__bike-wheel .data-info-label");
    this.$Power_Wheel_Text = $("#power-data__bike-wheel .text");
    this.BOTTOM_HEIGHT = this.$Power_Bottom_Content.height();

    this.mainAnimation = new TimelineMax();

    this.bindEvents();
  }

  /* ===================================
   *  EVENTS
   * =================================== */
  bindEvents() {
    if (!IS_MOBILE) {
      this.InitSectionDesktop();
    } else {
      this.InitSectionMobile();
    }

    yadeaXMenListener.on("yadea-xmen-power-anim", () => {
      if (IS_MOBILE) {
        this.mainAnimation.play();
      }
    });
  }

  /* ===================================
   *  METHODS
   * =================================== */
  InitSectionDesktop() {
    // Init State - DESKTOP BUILD
    TweenMax.set(this.$Power_Top_Text, { opacity: 0, y: this.DISTANCE_Y * 0.5 });
    TweenMax.set(this.$Power_Top_Bg, { opacity: 0, y: this.DISTANCE_Y * 0.5 });
    TweenMax.set([this.$Power_Bottom_Data_Label, this.$Power_Bottom_Data_Text], {
      autoAlpha: 0,
      y: this.DISTANCE_Y * 0.25,
    });
    this.mainAnimation.to(this.$Power_Top_Text, 1, { opacity: 1, y: 0 });
    this.mainAnimation.to(this.$Power_Top_Bg, 1, { opacity: 1, y: 0, scale: 1 }, "-=0.8");
    this.mainAnimation.addLabel("endStep1+=1");
    this.mainAnimation.to(this.$Power_Top_Text, 0.5, { opacity: 0, y: this.DISTANCE_Y * 0.25 }, "endStep1+=2");
    this.mainAnimation.to(
      this.$Power_Top_Bg,
      4,
      { opacity: 0, scale: 1.5, y: this.DISTANCE_Y * 5, delay: 0.5 },
      "endStep1+=1.2"
    );
    this.mainAnimation.to(
      this.$PowerEffect,
      8,
      { y: -this.BOTTOM_HEIGHT * 0.475, ease: Linear.easeNone },
      "endStep1+=1"
    );

    this.mainAnimation.staggerTo(
      [this.$Power_CounterShock_Label, this.$Power_CounterShock_Text],
      1,
      {
        autoAlpha: 1,
        y: 0,
      },
      0.5,
      "endStep1+=1.5"
    );

    this.mainAnimation.staggerTo(
      [this.$Power_BikeFrame_Label, this.$Power_BikeFrame_Text],
      1,
      {
        autoAlpha: 1,
        y: 0,
      },
      0.5,
      "endStep1+=3.25"
    );

    this.mainAnimation.staggerTo(
      [this.$Power_BikeBottom_Label, this.$Power_BikeBottom_Text],
      1,
      {
        autoAlpha: 1,
        y: 0,
      },
      0.5,
      "endStep1+=4.5"
    );

    this.mainAnimation.staggerTo(
      [this.$Power_WaterResist_Label, this.$Power_WaterResist_Text],
      1,
      {
        autoAlpha: 1,
        y: 0,
      },
      0.5,
      "endStep1+=5.75"
    );

    this.mainAnimation.staggerTo(
      [this.$Power_Engine_Label, this.$Power_Engine_Text],
      1,
      {
        autoAlpha: 1,
        y: 0,
      },
      0.5,
      "endStep1+=7"
    );

    this.mainAnimation.staggerTo(
      [this.$Power_Wheel_Label, this.$Power_Wheel_Text],
      1,
      {
        autoAlpha: 1,
        y: 0,
      },
      0.5,
      "endStep1+=10"
    );

    let ScrollMagicPowerScreen = new ScrollMagic.Scene({
      triggerElement: "#yadea-xmen-power",
      duration: this.BOTTOM_HEIGHT * 0.7,
    })
      // .setPin("#yadea-xmen-power")
      .setTween(this.mainAnimation)
      // .addIndicators({ name: "2 (duration: 0)" }) // Open debug mode
      .addTo(this.scrollMagicController);
  }

  InitSectionMobile() {
    TweenMax.set([this.$Power_Top_Text_Title, this.$Power_Top_Text_Sub_Title, this.$Power_Top_Text_Context], {
      autoAlpha: 0,
      y: this.DISTANCE_Y * 0.5,
    });

    TweenMax.set(this.$Power_Top_Bg, {
      autoAlpha: 0,
      scale: 1.15,
    });

    this.mainAnimation.staggerTo(
      [this.$Power_Top_Text_Title, this.$Power_Top_Text_Sub_Title, this.$Power_Top_Text_Context],
      0.5,
      {
        autoAlpha: 1,
        y: 0,
      },
      0.25
    );

    this.mainAnimation.to(
      this.$Power_Top_Bg,
      0.6,
      {
        autoAlpha: 1,
        scale: 1,
      },
      "-=0.2"
    );
  }
}
