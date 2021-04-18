export default class Distance {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor() {
    this.DISTANCE_Y = window.innerWidth * 0.05;
    this.SCREEN_MULTIPLE = IS_MOBILE ? 16 : 13;
    this.SPEED_TIME = IS_MOBILE ? 1.75 : 3.5;
    this.currentProduct = "x5";
    this.nextProduct = "x5";

    // Section Variables
    this.$DistanceSection = $("#yadea-xmen-distance");
    this.$DistanceMainContent = this.$DistanceSection.find(".main-content");
    this.$Distance_Title = this.$DistanceMainContent.find(".section-title");
    this.$Distance_Sub_Title = this.$DistanceMainContent.find(".section-sub-title");
    this.$Distance_Text = this.$DistanceMainContent.find(".text");

    // Effect
    this.$DsitanceEffect = this.$DistanceSection.find(".effect-holder");
    this.$DsitanceEffect_Bg = this.$DsitanceEffect.find(".bg-effect");
    this.$DsitanceEffect_Bike = this.$DsitanceEffect.find(".main-effect .bike-holder");
    // this.$DsitanceEffect_Bike_X5 = this.$DsitanceEffect.find(".main-effect .bike-holder.bike-x5");
    this.$DsitanceEffect_EffectSwapper = this.$DsitanceEffect.find(".effect-swapper");

    // Swapper Product

    this.$DistanceSwapper = this.$DistanceSection.find(".products-distance-mb");
    this.$DistanceSwapBtn = this.$DistanceSection.find(".product-distance-holder");

    this.starterAnimation = new TimelineMax({
      paused: true,
      // repeat: -1,
      onComplete: () => {
        // this.$DsitanceEffect_Bg.addClass("animating");
        this.StartBikeAnim();
      },
    });

    this.bikeRunAnimation = new TimelineMax({
      repeat: -1,
      paused: true,
      repeatDelay: 1.5,
      delay: 1.5,
    });

    this.bindEvents();
  }

  /* ===================================
   *  EVENTS
   * =================================== */
  bindEvents() {
    this.InitSection();
    yadeaXMenListener.on("yadea-xmen-distance-anim", () => {
      this.starterAnimation.play();
    });
  }

  /* ===================================
   *  METHODS
   * =================================== */
  InitSection() {
    // Init State
    TweenMax.set(
      [this.$Distance_Title, this.$Distance_Sub_Title, this.$Distance_Text, this.$DsitanceEffect_EffectSwapper],
      {
        autoAlpha: 0,
        y: this.DISTANCE_Y * 0.25,
      }
    );

    TweenMax.set(this.$DsitanceEffect_Bg, {
      autoAlpha: 0,
    });

    TweenMax.set(this.$DsitanceEffect_Bike, {
      // autoAlpha: 0,
      x: -this.DISTANCE_Y * this.SCREEN_MULTIPLE,
    });

    // Starter Timeline Build
    this.starterAnimation.to(this.$DsitanceEffect_Bg, 0.5, { autoAlpha: 1 });
    this.starterAnimation.staggerTo(
      [this.$Distance_Title, this.$Distance_Sub_Title, this.$Distance_Text],
      0.5,
      {
        autoAlpha: 1,
        y: 0,
      },
      0.25,
      "-=0.25"
    );
    this.starterAnimation.to(this.$DsitanceEffect_Bike, 1, {
      // autoAlpha: 1,
      x: 0,
    });

    this.starterAnimation.to(
      this.$DsitanceEffect_EffectSwapper,
      0.25,
      {
        autoAlpha: 1,
        y: 0,
      },
      "-=0.3"
    );

    // Bike Run
    this.bikeRunAnimation.to(this.$DsitanceEffect_Bg, this.SPEED_TIME, { x: "-200%", ease: Power0.inOut });
    this.bikeRunAnimation.addLabel("endDay");
    this.bikeRunAnimation.to(this.$DsitanceEffect_Bg, this.SPEED_TIME, { x: "-400%", ease: Power0.inOut }, "+=1.5");
    this.bikeRunAnimation.addLabel("endNight");
    this.bikeRunAnimation.addCallback(() => {
      this.$DsitanceEffect_Bike.removeClass("night");
      this.bikeRunAnimation.resume();
    }, "endNight");
    this.bikeRunAnimation.addCallback(() => {
      this.$DsitanceEffect_Bike.addClass("night");
      this.bikeRunAnimation.resume();
    }, "endDay");
  }

  StartBikeAnim() {
    this.BIKE_IS_PLAYING = true;
    this.bikeRunAnimation.play();

    // this.$DistanceSwapBtn.on("click", (e) => {
    //   // Get correct button to process
    //   let $targetToCheck = $(e.target);
    //   if ($targetToCheck.parents(".product-distance-holder").length > 0) {
    //     $targetToCheck = $targetToCheck.parents(".product-distance-holder");
    //   }

    //   if (!$targetToCheck.hasClass("active")) {
    //     // Working With Button State
    //     this.$DistanceSwapBtn.removeClass("active");
    //     $targetToCheck.addClass("active");

    //     switch (this.nextProduct) {
    //       case "x5":
    //         this.nextProduct = "xmen";
    //         TweenMax.to(this.$DsitanceEffect_Bike_X5, this.SPEED_TIME / 3.5, {
    //           x: this.DISTANCE_Y * this.SCREEN_MULTIPLE,
    //         });
    //         TweenMax.to(this.$DsitanceEffect_Bike_XMEN, this.SPEED_TIME / 3.5, {
    //           x: 0,
    //           delay: 0.33,
    //           onComplete: () => {
    //             TweenMax.set(this.$DsitanceEffect_Bike_X5, { x: -this.DISTANCE_Y * this.SCREEN_MULTIPLE });
    //             this.currentProduct = this.nextProduct;
    //             this.bikeRunAnimation.resume();
    //           },
    //         });
    //         break;
    //       case "xmen":
    //         this.nextProduct = "x5";
    //         TweenMax.to(this.$DsitanceEffect_Bike_XMEN, this.SPEED_TIME / 3.5, {
    //           x: this.DISTANCE_Y * this.SCREEN_MULTIPLE,
    //         });
    //         TweenMax.to(this.$DsitanceEffect_Bike_X5, this.SPEED_TIME / 3.5, {
    //           x: 0,
    //           delay: 0.33,
    //           onComplete: () => {
    //             TweenMax.set(this.$DsitanceEffect_Bike_XMEN, { x: -this.DISTANCE_Y * this.SCREEN_MULTIPLE });
    //             this.currentProduct = this.nextProduct;
    //             this.bikeRunAnimation.resume();
    //           },
    //         });
    //         break;
    //     }
    //   }
    // });
  }
}
