export default class Colors {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor() {
    this.DISTANCE_Y = window.innerWidth * 0.05;
    this.currentPage = "xmen";
    this.BlockInteraction = false;

    // Elements Variables
    this.$ColorsSection = $("#yadea-xmen-colors");

    // Main Content
    this.$ColorsMainContent = this.$ColorsSection.find(".main-content");
    this.$ColorsTitle = this.$ColorsMainContent.find(".section-title");
    this.$ColorsSubTitle = this.$ColorsMainContent.find(".section-sub-title");
    this.$ColorsText = this.$ColorsMainContent.find(".text");
    this.$ColorsControl = this.$ColorsMainContent.find(".product-swapper");

    // Color Swapper
    this.$ColorsSwapBtn = this.$ColorsControl.find(".swap-btn");

    // Effects
    this.$ColorsEffect = this.$ColorsSection.find(".color-images-layout");
    this.$Colors_XMEN_Colors = this.$ColorsEffect.find(".color-set.xmen-color-set");
    this.$Colors_XMEN_Colors_Items = this.$Colors_XMEN_Colors.find(".color-item");

    this.$Colors_X5_Colors = this.$ColorsEffect.find(".color-set.x5-color-set");
    this.$Colors_X5_Colors_Items = this.$Colors_X5_Colors.find(".color-item");

    this.starterTimeline = new TimelineMax({
      paused: true,
      onComplete: () => {
        this.SetupColorsSwapper();
      },
    });

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

    yadeaXMenListener.on("yadea-xmen-colors-anim", () => {
      this.starterTimeline.play();
    });
  }

  /* ===================================
   *  METHODS
   * =================================== */
  InitSectionDesktop() {
    // Init Section
    TweenMax.set([this.$ColorsTitle, this.$ColorsSubTitle, this.$ColorsText, this.$ColorsControl], {
      autoAlpha: 0,
      y: this.DISTANCE_Y * 0.25,
    });

    TweenMax.set([this.$Colors_XMEN_Colors_Items, this.$Colors_X5_Colors_Items], {
      autoAlpha: 0,
      y: this.DISTANCE_Y * 0.25,
    });

    // Timeline Build
    this.starterTimeline.staggerTo(
      [this.$ColorsTitle, this.$ColorsSubTitle, this.$ColorsText, this.$ColorsControl],
      0.5,
      {
        autoAlpha: 1,
        y: 0,
      },
      0.25
    );
    if (this.currentPage == "xmen") {
      this.starterTimeline.to(this.$Colors_XMEN_Colors_Items, 0.25, { autoAlpha: 1, y: 0 }, "-=0.2");
    } else {
      this.starterTimeline.to(this.$Colors_X5_Colors_Items, 0.25, { autoAlpha: 1, y: 0 }, "-=0.2");
    }
  }

  InitSectionMobile() {
    // Config Slider
    this.$Colors_X5_Colors.slick({
      slidesToShow: 3,
      centerMode: true,
      slidesToScroll: 1,
      infinite: true,
      arrows: false,
      dots: false,
      lazyLoad: "ondemand",
    });

    this.$Colors_XMEN_Colors.slick({
      slidesToShow: 3,
      centerMode: true,
      slidesToScroll: 1,
      infinite: true,
      arrows: false,
      dots: false,
      lazyLoad: "ondemand",
    });

    TweenMax.set([this.$Colors_X5_Colors, this.$Colors_XMEN_Colors], { autoAlpha: 0, y: this.DISTANCE_Y });

    // Init Section
    TweenMax.set([this.$ColorsTitle, this.$ColorsSubTitle, this.$ColorsText, this.$ColorsControl], {
      autoAlpha: 0,
      y: this.DISTANCE_Y * 0.25,
    });

    // Timeline Build
    this.starterTimeline.staggerTo(
      [this.$ColorsTitle, this.$ColorsSubTitle, this.$ColorsText, this.$ColorsControl],
      0.5,
      {
        autoAlpha: 1,
        y: 0,
      },
      0.25
    );

    if (this.currentPage == "xmen") {
      this.starterTimeline.to(this.$Colors_XMEN_Colors, 0.5, { autoAlpha: 1, y: 0 }, "-=0.2");
    } else {
      this.starterTimeline.to(this.$Colors_X5_Colors, 0.5, { autoAlpha: 1, y: 0 }, "-=0.2");
    }
  }

  SetupColorsSwapper() {
    this.$ColorsSwapBtn.on("click", (e) => {
      if (!$(e.target).hasClass("active") && !this.BlockInteraction) {
        this.BlockInteraction = true;
        let $currentActiveBtn = $(".product-swapper .swap-btn.active");
        let targetProduct = $(e.target).data("target");

        $currentActiveBtn.removeClass("active");
        $(e.target).addClass("active");
        $(`.product-swapper .swap-btn[data-target="${targetProduct}"]`).addClass("active");
        this.SwitchColorSet(targetProduct);
      }
    });
  }

  SwitchColorSet(colorSet = "xmen") {
    if (colorSet === "xmen") {
      TweenMax.set(this.$Colors_XMEN_Colors, { zIndex: 1 });
      TweenMax.set(this.$Colors_X5_Colors, { zIndex: 0 });

      if (!IS_MOBILE) {
        TweenMax.staggerTo(this.$Colors_X5_Colors_Items, 0.3, { autoAlpha: 0, y: this.DISTANCE_Y * 0.25 }, 0.15);
        TweenMax.staggerTo(
          this.$Colors_XMEN_Colors_Items,
          0.3,
          {
            autoAlpha: 1,
            y: 0,
            delay: 0.3,
            onComplete: () => {
              this.BlockInteraction = false;
            },
          },
          0.2
        );
      } else {
        TweenMax.to(this.$Colors_X5_Colors, 0.5, { autoAlpha: 0, y: -this.DISTANCE_Y });
        TweenMax.to(this.$Colors_XMEN_Colors, 0.5, {
          autoAlpha: 1,
          y: 0,
          delay: 0.25,
          onComplete: () => {
            TweenMax.set(this.$Colors_X5_Colors, { y: this.DISTANCE_Y });
            this.BlockInteraction = false;
          },
        });
      }
    } else {
      TweenMax.set(this.$Colors_XMEN_Colors, { zIndex: 0 });
      TweenMax.set(this.$Colors_X5_Colors, { zIndex: 1 });

      if (!IS_MOBILE) {
        TweenMax.staggerTo(this.$Colors_XMEN_Colors_Items, 0.3, { autoAlpha: 0, y: this.DISTANCE_Y * 0.25 }, 0.15);
        TweenMax.staggerTo(
          this.$Colors_X5_Colors_Items,
          0.3,
          {
            autoAlpha: 1,
            y: 0,
            delay: 0.3,
            onComplete: () => {
              this.BlockInteraction = false;
            },
          },
          0.2
        );
      } else {
        TweenMax.to(this.$Colors_XMEN_Colors, 0.5, { autoAlpha: 0, y: -this.DISTANCE_Y });
        TweenMax.to(this.$Colors_X5_Colors, 0.5, {
          autoAlpha: 1,
          y: 0,
          delay: 0.25,
          onComplete: () => {
            TweenMax.set(this.$Colors_XMEN_Colors, { y: this.DISTANCE_Y });
            this.BlockInteraction = false;
          },
        });
      }
    }
  }
}
