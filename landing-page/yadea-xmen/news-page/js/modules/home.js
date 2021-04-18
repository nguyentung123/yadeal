// Libs
import { TweenMax } from "gsap/TweenMax";
import ScrollOut from "scroll-out";

import SignUpInfo from "./_signup-info";

// Utils
import { pageListener } from "./utils";

// Sections

export default class Home {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        window.yadeaXMenListener = new pageListener();
        window.TweenMax = TweenMax;
        window.IS_MOBILE = window.innerWidth <= 768;
        $(window).on("resize", () => {
            window.IS_MOBILE = window.innerWidth <= 768;
        });

        let signupInfo = new SignUpInfo();

        this.Triggered = {};

        this.bindEvents();
    }

    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents() {
        this.ScrolloutSetup();
        this.BannerGallerySlide();
        this.BannerImageSwapper();
        this.SetupImageViewer();
        this.SwitchNews();
        this.NewsSwitcherSetup();
    }

    /* ===================================
     *  METHODS
     * =================================== */
    BannerGallerySlide() {
        $("#xmen-gallery-slider").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            lazyLoad: 'ondemand',
            nextArrow: `<button class="gallery-control next-slide for-xmen">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 44.1 119">
<style type="text/css">
	.st0{fill:#8B8B8B;}
</style>
<polygon class="st0" points="0,0 42.5,59.5 0,119 "/>
</svg>
      </button>`,
            prevArrow: `<button class="gallery-control prev-slide for-xmen">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 44.1 119">
<style type="text/css">
	.st0{fill:#8B8B8B;}
</style>
<polygon class="st0" points="44,0 1.5,59.5 44,119 "/>
</svg>
      </button>`,
            responsive: [{
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                },
            }, ],
        });

        $("#x5-gallery-slider").slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            lazyLoad: 'ondemand',
            nextArrow: `<button class="gallery-control next-slide for-x5">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 44.1 119">
<style type="text/css">
	.st0{fill:#8B8B8B;}
</style>
<polygon class="st0" points="0,0 42.5,59.5 0,119 "/>
</svg>
      </button>`,
            prevArrow: `<button class="gallery-control prev-slide for-x5">
      <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 44.1 119">
<style type="text/css">
	.st0{fill:#8B8B8B;}
</style>
<polygon class="st0" points="44,0 1.5,59.5 44,119 "/>
</svg>
      </button>`,
            responsive: [{
                breakpoint: 769,
                settings: {
                    slidesToShow: 1,
                },
            }, ],
        });
    }

    ScrolloutSetup() {
        // ScrollOut({
        //   onShown: (el) => {
        //     // use the web animation API
        //     let elementID = $(el).attr("id");
        //     if (!this.Triggered[`${elementID}`]) {
        //       this.Triggered[`${elementID}`] = true;
        //       yadeaXMenListener.emit(`${elementID}-anim`);
        //     }
        //   },
        //   threshold: 0.225,
        // });

        // Sticky Sub Menu
        ScrollOut({
            targets: ".custom-header",
            offset: 72,
        });
    }

    BannerImageSwapper() {
        this.currentBannerGallery = "xmen";
        this.$slideSwapBtn = $("#yadea-xmen-news-banner .slide-swap");
        this.$slideSwapBtn.on("click", (e) => {
            let $clickedBtn = $(e.target);
            if (!$clickedBtn.hasClass("active")) {
                let targetValue = $clickedBtn.data("target");

                // Button Process
                this.$slideSwapBtn.removeClass("active");
                $clickedBtn.addClass("active");

                // Slider Process
                $(`#${this.currentBannerGallery}-gallery-slider`).parents(".main-banner-slider").removeClass("active");
                $(`#${targetValue}-gallery-slider`).parents(".main-banner-slider").addClass("active");

                // Assign new current version
                this.currentBannerGallery = targetValue;
            }
        });
    }

    SetupImageViewer() {
        this.currentImage = "";
        this.$viewerImages = $("#yadea-xmen-news-banner .image-viewer");
        this.$viewerImageFrame = $("#banner-image-view-holder");
        this.$closeImageViewer = $(".close-image-viewer");

        // Open Image Viewer
        $(document).on("click", ".thumbnail-holder", (e) => {
            let $clickedThumbnail = $(e.target);
            if ($(e.target).parents(".thumbnail-holder").length > 0) {
                $clickedThumbnail = $(e.target).parents(".thumbnail-holder");
                let imageUrl = $clickedThumbnail.data("image");

                // New Image Need To Load
                if (this.currentImage !== imageUrl) {
                    let imageToShow = new Image();
                    imageToShow.src = imageUrl;
                    this.$viewerImageFrame.html(imageToShow);

                    imageToShow.onload = () => {
                        this.$viewerImages.addClass("active");
                        this.currentImage = imageUrl;
                    };
                } else {
                    // Same Image
                    this.$viewerImages.addClass("active");
                }
            }

            this.$closeImageViewer.on("click", () => {
                this.$viewerImages.removeClass("active");
            });
        });
    }

    SwitchNews(target = "type-sum") {
        let $HightlightBlock = $(".feature-posts-layout");
        let $PostItems = $(".post-listing-layout .post-item");

        $PostItems.hide();
        $(`.post-listing-layout .post-item.${target}`).show();

        if (target !== "type-sum") {
            $HightlightBlock.hide();
        } else {
            $HightlightBlock.show();
        }
    }

    NewsSwitcherSetup() {
        this.$NewsSwitchBtn = $(".news-menu-bar .category-item");
        this.$NewsSwitchBtn.on("click", (e) => {
            let $targetButton = $(e.target);
            if (!$targetButton.hasClass("active")) {
                // Target News Group To Switch To
                let targetData = $targetButton.data("news");
                console.log(targetData);

                // Button Stage Toggling
                this.$NewsSwitchBtn.removeClass("active");
                $targetButton.addClass("active");

                // Switch News Type
                this.SwitchNews(targetData);
            }
        });
    }
}