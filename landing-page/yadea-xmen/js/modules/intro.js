export default class Intro {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor() {
    this.DISTANCE_Y = window.innerWidth * 0.05;
    this.currentPage = "main";
    this.blockInteraction = true;

    // Elements Variables
    this.$IntroSection = $("#yadea-xmen-intro");
    this.$CoverOverlay = this.$IntroSection.find(".cover-layer");

    // First Layer
    this.$IntroFirstLayer = this.$IntroSection.find("#intro-overall-layer");
    this.$FirstLayer_Title = this.$IntroFirstLayer.find(".section-title");
    this.$FirstLayer_Sub_Title = this.$IntroFirstLayer.find(".section-sub-title");
    this.$FirstLayer_Text = this.$IntroFirstLayer.find(".text");
    this.$FirstLayer_Bg = this.$IntroFirstLayer.find(".bg-holder");
    this.$FirstLayer_Controller = this.$IntroFirstLayer.find(".layer-controller");

    // Detail Layer
    this.$IntroDetailLayer = this.$IntroSection.find(".layer-controller");

    // X5 Layer Elements
    this.$IntroDetail_X5_Control = $("#yadea-x5-intro-layer-control");
    this.$IntroDetail_X5_Title = $("#yadea-x5-intro-context .section-title");
    this.$IntroDetail_X5_Text = $("#yadea-x5-intro-context .text");
    this.$IntroDetail_X5_Images = $("#x5-intro-detail-layout");
    this.$IntroDetail_X5_Images_Cover = this.$IntroDetail_X5_Images.find(".image-block .img-cover");
    this.$IntroDetail_X5_Images_Items = this.$IntroDetail_X5_Images.find(".image-block .img-item");

    // XMEN Layer Elements
    this.$IntroDetail_XMEN_Control = $("#yadea-xmen-intro-layer-control");
    this.$IntroDetail_XMEN_Title = $("#yadea-xmen-intro-context .section-title");
    this.$IntroDetail_XMEN_Text = $("#yadea-xmen-intro-context .text");
    this.$IntroDetail_XMEN_Images = $("#xmen-intro-detail-layout");
    this.$IntroDetail_XMEN_Images_Cover = this.$IntroDetail_XMEN_Images.find(".image-block .img-cover");
    this.$IntroDetail_XMEN_Images_Items = this.$IntroDetail_XMEN_Images.find(".image-block .img-item");

    // Switch Page Button
    this.$LayerSwitcherBtn = $(".layer-switch");

    this.bindEvents();
  }

  /* ===================================
   *  EVENTS
   * =================================== */
  bindEvents() {
    this.InitSection();

    yadeaXMenListener.on("yadea-xmen-intro-anim", () => {
      this.MainPageIn();
    });

    this.SwitchPage("main");
  }

  /* ===================================
   *  METHODS
   * =================================== */
  SwitchPage(pageName = "main") {
    switch (pageName) {
      case "main":
        this.ToHomePage();
        break;
      case "xmen":
        this.ToXmenPage();
        break;
      case "x5":
        this.ToX5Page();
        break;
    }
  }

  InitSection() {
    TweenMax.set([this.$FirstLayer_Title, this.$FirstLayer_Text, this.$FirstLayer_Sub_Title], {
      autoAlpha: 0,
      y: this.DISTANCE_Y * 0.25,
    });
    TweenMax.set(this.$FirstLayer_Controller, { autoAlpha: 0 });
    TweenMax.set(this.$FirstLayer_Bg, { autoAlpha: 0 });
  }

  // Main Page Setup
  MainPageIn() {
    let mainPageTimeline = new TimelineMax({
      paused: true,
      onComplete: () => {
        this.currentPage = "main";
        this.blockInteraction = false;
        this.BindSwapLayerEvent();
      },
    });
    mainPageTimeline.to(this.$FirstLayer_Bg, 1, { autoAlpha: 1 });
    mainPageTimeline.staggerTo(
      [this.$FirstLayer_Title, this.$FirstLayer_Sub_Title, this.$FirstLayer_Text],
      0.5,
      {
        autoAlpha: 1,
        y: 1,
      },
      0.25,
      "-=0.65"
    );
    mainPageTimeline.to(this.$FirstLayer_Controller, 0.3, { autoAlpha: 1 }, "-=0.25");

    mainPageTimeline.play();
  }

  BindSwapLayerEvent() {
    this.$LayerSwitcherBtn.on("click", (e) => {
      if (!this.blockInteraction) {
        let targetParent = $(e.target).parents(".layer-switch");
        let targetPage = $(e.target).data("product");
        if (targetParent.length > 0) {
          targetPage = targetParent.data("product");
        }

        this.SwitchPage(targetPage);
      } else {
        console.log("Button is LOCKED");
      }
    });
  }

  ToHomePage() {
    this.blockInteraction = true;
    this.currentPage = "main";
    TweenMax.set(this.$CoverOverlay, {
      scaleX: 0,
      transformOrigin: "0% 50%",
    });

    TweenMax.to(this.$CoverOverlay, 0.5, {
      scaleX: 1,
      onComplete: () => {
        TweenMax.set(this.$IntroFirstLayer, { autoAlpha: 1 });

        TweenMax.to(this.$CoverOverlay, 0.5, {
          x: "100%",
          onComplete: () => {
            this.blockInteraction = false;
          },
        });
      },
    });
  }

  ToXmenPage() {
    this.blockInteraction = true;

    if (this.currentPage == "main") {
      // FROM MAIN TO XMEN
      this.currentPage = "xmen";
      TweenMax.to(this.$CoverOverlay, 0.5, {
        x: "-100%",
        onComplete: () => {
          this.InitX5Page();
          this.InitXMENPage(true);
          TweenMax.set(this.$IntroFirstLayer, { autoAlpha: 0 });
          TweenMax.to(this.$CoverOverlay, 0.5, {
            scaleX: 0,
            transformOrigin: "0% 50%",
            onComplete: () => {
              this.blockInteraction = false;
            },
          });
        },
      });
    } else {
      // FROM X5 TO XMEN
      this.currentPage = "xmen";
      TweenMax.to([this.$IntroDetail_X5_Title, this.$IntroDetail_X5_Text], 0.3, {
        autoAlpha: 0,
        y: -this.DISTANCE_Y * 0.5,
      });
      TweenMax.to(this.$IntroDetail_X5_Control, 0.3, { autoAlpha: 0 });
      TweenMax.to(this.$IntroDetail_X5_Images_Cover, 0.3, {
        x: "0%",
        onComplete: () => {
          TweenMax.set(this.$IntroDetail_X5_Images, { autoAlpha: 0 });
          TweenMax.set(this.$IntroDetail_XMEN_Images, { autoAlpha: 1 });
          TweenMax.set([this.$IntroDetail_XMEN_Title, this.$IntroDetail_XMEN_Text], {
            autoAlpha: 0,
            y: this.DISTANCE_Y,
          });
          TweenMax.set([this.$IntroDetail_XMEN_Images_Items], { autoAlpha: 1 });
          TweenMax.to(this.$IntroDetail_XMEN_Control, 0.3, { autoAlpha: 1 });
          TweenMax.staggerTo(
            [this.$IntroDetail_XMEN_Title, this.$IntroDetail_XMEN_Text],
            0.4,
            {
              autoAlpha: 1,
              y: 0,
              delay: 0.2,
              onComplete: () => {
                this.blockInteraction = false;
              },
            },
            0.15
          );
          TweenMax.to(this.$IntroDetail_XMEN_Images_Cover, 0.3, {
            x: "-100%",
            delay: 0.05,
            onComplete: () => {
              TweenMax.set(this.$IntroDetail_XMEN_Images_Cover, { x: "100%" });
            },
          });
        },
      });
    }
  }

  ToX5Page() {
    this.blockInteraction = true;

    if (this.currentPage == "main") {
      // FROM MAIN TO X5
      this.currentPage = "x5";
      TweenMax.to(this.$CoverOverlay, 0.5, {
        x: "-100%",
        onComplete: () => {
          this.InitXMENPage();
          this.InitX5Page(true);
          TweenMax.set(this.$IntroFirstLayer, { autoAlpha: 0 });
          TweenMax.to(this.$CoverOverlay, 0.5, {
            scaleX: 0,
            transformOrigin: "0% 50%",
            onComplete: () => {
              this.blockInteraction = false;
            },
          });
        },
      });
    } else {
      // FROM XMEN TO X5
      this.currentPage = "x5";
      TweenMax.to([this.$IntroDetail_XMEN_Title, this.$IntroDetail_XMEN_Text], 0.3, {
        autoAlpha: 0,
        y: -this.DISTANCE_Y * 0.5,
      });
      TweenMax.to(this.$IntroDetail_XMEN_Control, 0.3, { autoAlpha: 0 });
      TweenMax.to(this.$IntroDetail_XMEN_Images_Cover, 0.3, {
        x: "0%",
        transformOrigin: "0% 50%",
        onComplete: () => {
          TweenMax.set(this.$IntroDetail_XMEN_Images, { autoAlpha: 0 });
          TweenMax.set(this.$IntroDetail_X5_Images, { autoAlpha: 1 });
          TweenMax.set([this.$IntroDetail_X5_Title, this.$IntroDetail_X5_Text], {
            autoAlpha: 0,
            y: this.DISTANCE_Y,
          });
          TweenMax.set([this.$IntroDetail_X5_Images_Items], { autoAlpha: 1 });
          TweenMax.to(this.$IntroDetail_X5_Control, 0.3, { autoAlpha: 1 });
          TweenMax.staggerTo(
            [this.$IntroDetail_X5_Title, this.$IntroDetail_X5_Text],
            0.4,
            {
              autoAlpha: 1,
              y: 0,
              delay: 0.2,
              onComplete: () => {
                this.blockInteraction = false;
              },
            },
            0.15
          );
          TweenMax.to(this.$IntroDetail_X5_Images_Cover, 0.3, {
            x: "-100%",
            delay: 0.05,
            onComplete: () => {
              TweenMax.set(this.$IntroDetail_X5_Images_Cover, { x: "100%" });
            },
          });
        },
      });
    }
  }

  InitX5Page(showPage = false) {
    if (showPage) {
      TweenMax.set([this.$IntroDetail_X5_Control, this.$IntroDetail_X5_Images_Items], { autoAlpha: 1 });
      TweenMax.set([this.$IntroDetail_X5_Title, this.$IntroDetail_X5_Text], { autoAlpha: 1, y: 0 });
      TweenMax.set(this.$IntroDetail_X5_Images_Cover, { x: "100%" });

      // Hide XMEN layer
      TweenMax.set(this.$IntroDetail_X5_Images, { autoAlpha: 1 });
      TweenMax.set(this.$IntroDetail_XMEN_Images, { autoAlpha: 0 });
    } else {
      TweenMax.set([this.$IntroDetail_X5_Control, this.$IntroDetail_X5_Images_Items], { autoAlpha: 0 });
      TweenMax.set([this.$IntroDetail_X5_Title, this.$IntroDetail_X5_Text], { autoAlpha: 0, y: -this.DISTANCE_Y });
      TweenMax.set(this.$IntroDetail_X5_Images_Cover, { x: "0%" });

      // Hide the layer completely
      TweenMax.set(this.$IntroDetail_X5_Images, { autoAlpha: 0 });
    }
  }

  InitXMENPage(showPage = false) {
    if (showPage) {
      TweenMax.set([this.$IntroDetail_XMEN_Control, this.$IntroDetail_XMEN_Images_Items], { autoAlpha: 1 });
      TweenMax.set([this.$IntroDetail_XMEN_Title, this.$IntroDetail_XMEN_Text], { autoAlpha: 1, y: 0 });
      TweenMax.set(this.$IntroDetail_XMEN_Images_Cover, { x: "100%" });

      // Hide X5 layer
      TweenMax.set(this.$IntroDetail_XMEN_Images, { autoAlpha: 1 });
      TweenMax.set(this.$IntroDetail_X5_Images, { autoAlpha: 0 });
    } else {
      TweenMax.set([this.$IntroDetail_XMEN_Control, this.$IntroDetail_XMEN_Images_Items], { autoAlpha: 0 });
      TweenMax.set([this.$IntroDetail_XMEN_Title, this.$IntroDetail_XMEN_Text], { autoAlpha: 0, y: -this.DISTANCE_Y });
      TweenMax.set(this.$IntroDetail_XMEN_Images_Cover, { x: "0%" });

      // Hide the layer completely
      TweenMax.set(this.$IntroDetail_XMEN_Images, { autoAlpha: 0 });
    }
  }
}
