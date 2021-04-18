import YouTubePlayer from "youtube-player";

export default class Home {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor() {
    this.bindEvents();
  }

  /* ===================================
   *  EVENTS
   * =================================== */
  bindEvents() {
    this.SetupVideoPlayer();
    this.PayModalSetup();
    $(".lazy").Lazy({
      effect: "fadeIn",
      threshold: 800,
    });

    // Sub Menu Toggle On Mobile
    if (window.innerWidth < 480) {
      this.SetupMbMenuToggle();
    }
    this.SmoothScrollingSetup();
  }

  /* ===================================
   *  METHODS
   * =================================== */
  SetupVideoPlayer() {
    this.playerYT = YouTubePlayer("video-modal-video", {
      videoId: "2S6Z57j30Vs", // Default Clip
      playerVars: {
        disablekb: 1,
        fs: 0,
        modestbranding: 1,
        rel: 0,
        controls: 0,
        playlist: "pKGxsAte4Ao",
        loop: 1,
      },
    });

    $(".play-modal-video").on("click", (e) => {
      this.videoCode = "BnRxdYVE6KA"; // Default Youtube Video ID

      if ($(e.target).parents(".play-modal-video").length > 0) {
        this.videoCode = $(e.target).parents(".play-modal-video").data("video-id");
      } else {
        this.videoCode = $(e.target).data("video-id");
      }
      this.PlayModalClip(this.videoCode);
    });

    $(".close-video-modal").on("click", (e) => {
      this.CloseModalClip();
    });
  }

  PlayModalClip(clipID = "pKGxsAte4Ao") {
    $("body").addClass("show-modal");
    $(".video-modal").addClass("active");
    this.playerYT.cueVideoById(clipID);
    this.playerYT.unMute();
    this.playerYT.playVideo();

    this.playerYT.addEventListener("onStateChange", (e) => {
      if (e.data == 0) {
        this.CloseModalClip();
      }
    });

    console.log(clipID);
  }

  CloseModalClip() {
    this.playerYT.mute();
    $("body").removeClass("show-modal");
    $(".video-modal").removeClass("active");
    setTimeout(() => {
      this.playerYT.stopVideo();
    }, 200);
  }

  SmoothScrollingSetup() {
    $('a[href*="#"]')
      // Remove links that don't actually link to anything
      .not('[href="#"]')
      .not('[href="#0"]')
      .click(function (event) {
        // On-page links
        if (
          location.pathname.replace(/^\//, "") == this.pathname.replace(/^\//, "") &&
          location.hostname == this.hostname
        ) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $("[name=" + this.hash.slice(1) + "]");
          // Does a scroll target exist?
          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $("html, body").animate(
              {
                scrollTop: target.offset().top,
              },
              700,
              function () {
                // Callback after animation
                // Must change focus!
                var $target = $(target);
                $target.focus();
                if ($target.is(":focus")) {
                  // Checking if the target was focused
                  return false;
                } else {
                  $target.attr("tabindex", "-1"); // Adding tabindex for elements not focusable
                  $target.focus(); // Set focus again
                }
              }
            );
          }
        }
      });
  }

  // Mobile Menu Toggle
  SetupMbMenuToggle() {
    this.allowToggle = true;
    this.$closeSubMenuBtn = $(".close-sub-menu");
    this.$menuToggleButton = $(".sub-menu-toggler");
    this.$subHeader = $(".custom-header");
    this.$subMenu = $(".sub-menu-main");

    this.$menuToggleButton.on("click", (e) => {
      if (this.allowToggle) {
        // After 300ms, allow Toggle back to true
        this.allowToggle = false;
        setTimeout(() => {
          this.allowToggle = true;
        }, 300);

        if (!this.$subHeader.hasClass("showing-sub-menu")) {
          this.$subHeader.addClass("showing-sub-menu");
          this.$subMenu.slideDown("fast");
        } else {
          this.$subHeader.removeClass("showing-sub-menu");
          this.$subMenu.slideUp("fast");
        }
      }
    });

    this.$closeSubMenuBtn.on("click", (e) => {
      if (this.allowToggle) {
        // After 300ms, allow Toggle back to true
        this.allowToggle = false;
        setTimeout(() => {
          this.allowToggle = true;
        }, 300);

        this.$subHeader.removeClass("showing-sub-menu");
        this.$subMenu.slideUp("fast");
      }
    });
  }

  // Tragop Modal
  PayModalSetup() {
    this.$payModal = $(".tra-gop-information-modal");
    this.$openPayModalBtn = $(".open-tragop-modal");
    this.$closePayModalBtn = $(".close-tragop-modal");

    this.$openPayModalBtn.on("click", () => {
      $("body").addClass("show-modal");
      this.$payModal.addClass("active");
    });

    this.$closePayModalBtn.on("click", () => {
      $("body").removeClass("active");
      this.$payModal.removeClass("active");
    });
  }
}
