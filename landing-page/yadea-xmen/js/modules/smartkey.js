export default class SmartKey {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor() {
    this.DISTANCE_Y = window.innerWidth * 0.05;
    this.PARALLAX_DISTANCE = (6 * window.innerWidth) / 1920;

    // Elements Variables
    this.$SmartkeySection = $("#yadea-xmen-smartkey");
    this.$SmartkeyContent = this.$SmartkeySection.find(".main-content");
    this.$Smartkey_Title = this.$SmartkeyContent.find(".section-title");
    this.$Smartkey_Sub_Title = this.$SmartkeyContent.find(".section-sub-title");
    this.$Smartkey_Text = this.$SmartkeyContent.find(".text");

    // Effect
    this.$SmartkeyEffect = this.$SmartkeySection.find(".effect-holder");

    // Feature List
    this.$SmartkeyEffect_FeatureList = this.$SmartkeyEffect.find(".smartkey-feature-layout");
    this.$SmartkeyEffect_FeatureList_Item = this.$SmartkeyEffect.find(".feature-item");
    this.$SmartkeyEffect_FeatureList_Item_Context = this.$SmartkeyEffect_FeatureList_Item.find(".context");

    this.$SmartkeyEffect_Main = this.$SmartkeyEffect.find(".main-effect");
    this.$SmartkeyEffect_Main_Wave = this.$SmartkeyEffect.find(".waving-effect");
    this.$SmartkeyEffect_Main_Wave_1 = this.$SmartkeyEffect_Main_Wave.find(".wave.wave-1");
    this.$SmartkeyEffect_Main_Wave_2 = this.$SmartkeyEffect_Main_Wave.find(".wave.wave-2");
    this.$SmartkeyEffect_Main_Wave_3 = this.$SmartkeyEffect_Main_Wave.find(".wave.wave-3");
    this.$SmartkeyEffect_Main_Wave_4 = this.$SmartkeyEffect_Main_Wave.find(".wave.wave-4");

    this.$SmartkeyEffect_Main_Bg = this.$SmartkeyEffect_Main.find(".remote-bg");
    this.$SmartkeyEffect_Main_Bike = this.$SmartkeyEffect_Main.find(".bike-effect-holder");
    this.$SmartkeyEffect_Main_Bike_Image = this.$SmartkeyEffect_Main_Bike.find(".bike-img");
    this.$SmartkeyEffect_Main_Bike_Shadow_1 = this.$SmartkeyEffect_Main_Bike.find(".bike-shadow.shadow-1");
    this.$SmartkeyEffect_Main_Bike_Shadow_2 = this.$SmartkeyEffect_Main_Bike.find(".bike-shadow.shadow-2");
    this.$SmartkeyEffect_Main_Bike_Shadow_3 = this.$SmartkeyEffect_Main_Bike.find(".bike-bottom-shadow");
    this.$SmartkeyEffect_Main_Bike_Lighting1 = this.$SmartkeyEffect_Main_Bike.find(".sound-img.sound-1");
    this.$SmartkeyEffect_Main_Bike_Lighting2 = this.$SmartkeyEffect_Main_Bike.find(".sound-img.sound-2");

    this.starterAnimation = new TimelineMax({
      paused: true,
      onComplete: () => {
        this.BindParallaxBehavior();
        this.BindSmartKeyBehavior();

        if (IS_MOBILE) {
          this.BindInfoToggler();
        }
      },
    });

    this.smartkeyTimeline = new TimelineMax({
      repeat: -1,
      repeatDelay: 2,
      delay: 3,
    });

    this.bindEvents();
  }

  /* ===================================
   *  EVENTS
   * =================================== */
  bindEvents() {
    this.InitSection();
    yadeaXMenListener.on("yadea-xmen-smartkey-anim", () => {
      this.starterAnimation.play();
    });
  }

  /* ===================================
   *  METHODS
   * =================================== */
  InitSection() {
    // Init Section
    TweenMax.set(
      [this.$Smartkey_Title, this.$Smartkey_Sub_Title, this.$Smartkey_Text, this.$SmartkeyEffect_FeatureList],
      {
        autoAlpha: 0,
        y: this.DISTANCE_Y * 0.25,
      }
    );

    TweenMax.set(
      [
        this.$SmartkeyEffect_Main_Wave_1,
        this.$SmartkeyEffect_Main_Wave_2,
        this.$SmartkeyEffect_Main_Wave_3,
        this.$SmartkeyEffect_Main_Wave_4,
        this.$SmartkeyEffect_Main_Bike_Shadow_1,
        this.$SmartkeyEffect_Main_Bike_Shadow_2,
        this.$SmartkeyEffect_Main_Bike_Shadow_3,
        this.$SmartkeyEffect_Main_Bike_Lighting1,
        this.$SmartkeyEffect_Main_Bike_Lighting2,
      ],
      { autoAlpha: 0 }
    );

    TweenMax.set(this.$SmartkeyEffect_Main_Bg, { autoAlpha: 0, y: this.DISTANCE_Y });
    TweenMax.set(this.$SmartkeyEffect_Main_Bike_Image, { autoAlpha: 0, y: -this.DISTANCE_Y });

    // Build Animation
    this.starterAnimation.staggerTo(
      [this.$Smartkey_Title, this.$Smartkey_Sub_Title, this.$Smartkey_Text, this.$SmartkeyEffect_FeatureList],
      0.5,
      {
        autoAlpha: 1,
        y: 0,
      },
      0.25
    );

    this.starterAnimation.to(
      [this.$SmartkeyEffect_Main_Bg, this.$SmartkeyEffect_Main_Bike_Image, this.$SmartkeyEffect_Main_Bike_Shadow_3],
      0.6,
      {
        autoAlpha: 1,
        y: 0,
      }
    );
  }

  BindParallaxBehavior() {
    TweenMax.to(this.$SmartkeyEffect_Main_Bike_Shadow_1, 0.5, { autoAlpha: 1, x: 5, y: 6 });
    TweenMax.to(this.$SmartkeyEffect_Main_Bike_Shadow_2, 0.5, {
      autoAlpha: 1,
      x: -5,
      y: -4,
      onComplete: () => {
        if (window.innerWidth > 767) {
          this.$SmartkeySection.on("mousemove", (e) => {
            let coreData = {
              offsetX: e.clientX,
              offsetY: e.clientY,
              core: { x: this.$SmartkeySection.width() / 2, y: this.$SmartkeySection.height() / 2 },
            };

            let calculatedData = {
              xMove: (this.PARALLAX_DISTANCE * (coreData.offsetX - coreData.core.x)) / coreData.core.x,
              yMove: (this.PARALLAX_DISTANCE * (coreData.offsetY - coreData.core.y)) / coreData.core.y,
            };

            TweenMax.to(this.$SmartkeyEffect_Main_Bike_Shadow_1, 0.5, {
              x: -calculatedData.xMove,
              y: -calculatedData.yMove,
            });
            TweenMax.to(this.$SmartkeyEffect_Main_Bike_Shadow_2, 0.5, {
              x: calculatedData.xMove,
              y: calculatedData.yMove,
            });
          });
        }
      },
    });
  }

  BindSmartKeyBehavior() {
    this.smartkeyTimeline.staggerTo(
      [
        this.$SmartkeyEffect_Main_Wave_4,
        this.$SmartkeyEffect_Main_Wave_3,
        this.$SmartkeyEffect_Main_Wave_2,
        this.$SmartkeyEffect_Main_Wave_1,
      ],
      0.3,
      { autoAlpha: 1, scale: 1.05, x: this.DISTANCE_Y * 0.04 },
      0.05
    );
    this.smartkeyTimeline.to(
      [
        this.$SmartkeyEffect_Main_Wave_4,
        this.$SmartkeyEffect_Main_Wave_3,
        this.$SmartkeyEffect_Main_Wave_2,
        this.$SmartkeyEffect_Main_Wave_1,
      ],
      0.25,
      { autoAlpha: 0 }
    );

    this.smartkeyTimeline.addLabel("startResponse");
    this.smartkeyTimeline.fromTo(
      this.$SmartkeyEffect_Main_Bike_Lighting1,
      0.3,
      { autoAlpha: 0, transformOrigin: "100% 100%", x: 4, y: 4, scale: 0.7 },
      { autoAlpha: 1, transformOrigin: "100% 100%", x: 0, y: 0, scale: 1 },
      "startResponse-=0.5"
    );
    this.smartkeyTimeline.to(
      this.$SmartkeyEffect_Main_Bike_Lighting1,
      0.2,
      { autoAlpha: 0, scale: 1.1 },
      "startResponse-=0.2"
    );

    this.smartkeyTimeline.fromTo(
      this.$SmartkeyEffect_Main_Bike_Lighting2,
      0.3,
      { autoAlpha: 0, transformOrigin: "0% 100%", x: -4, y: 4, scale: 0.7 },
      { autoAlpha: 1, transformOrigin: "0% 100%", x: 0, y: 0, scale: 1 },
      "startResponse-=0.5"
    );
    this.smartkeyTimeline.to(
      this.$SmartkeyEffect_Main_Bike_Lighting2,
      0.2,
      { autoAlpha: 0, scale: 1.1 },
      "startResponse-=0.2"
    );
  }

  BindInfoToggler() {
    this.$SmartkeyEffect_FeatureList_Item.on("click", (e) => {
      let $processItem = $(e.target);
      if ($processItem.parents(".feature-item").length > 0) {
        $processItem = $processItem.parents(".feature-item");
      }

      if (!$processItem.hasClass("active")) {
        this.$SmartkeyEffect_FeatureList_Item.removeClass("active");
        $processItem.addClass("active");
        let $showContext = $processItem.find(".context");
        this.$SmartkeyEffect_FeatureList_Item_Context.slideUp("fast");
        $showContext.slideDown("fast");
      } else {
        $processItem.removeClass("active");
        let $showContext = $processItem.find(".context");
        $showContext.slideUp("fast");
      }
    });
  }
}
