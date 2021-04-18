// Libs
import { TweenMax } from "gsap/TweenMax";
import ScrollOut from "scroll-out";

// Utils
import { pageListener } from "./utils";
import SignUpInfo from "./_signup-info";

// Sections
import Banner from "./banner";
import Intro from "./intro";
import Colors from "./color";
import Battery from "./battery";
import Power from "./power";
import Maintainance from "./maintain";
import Comparision from "./compare";
import Brake from "./brake";
import Distance from "./distance";
import SmartKey from "./smartkey";

export default class Home {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor() {
    window.yadeaXMenListener = new pageListener();
    window.TweenMax = TweenMax;
    window.IS_MOBILE = window.innerWidth <= 768;

    // Sections
    let signupInfo = new SignUpInfo();
    let banner = new Banner();
    let intro = new Intro();
    let color = new Colors();
    let battery = new Battery();
    let power = new Power();
    let maintainance = new Maintainance();
    let compare = new Comparision();
    let brake = new Brake();
    let distance = new Distance();
    let smartKey = new SmartKey();

    this.Triggered = {};

    this.bindEvents();
  }

  /* ===================================
   *  EVENTS
   * =================================== */
  bindEvents() {
    this.ScrolloutSetup();
  }

  /* ===================================
   *  METHODS
   * =================================== */
  ScrolloutSetup() {
    ScrollOut({
      onShown: (el) => {
        // use the web animation API
        let elementID = $(el).attr("id");
        if (!this.Triggered[`${elementID}`]) {
          this.Triggered[`${elementID}`] = true;
          yadeaXMenListener.emit(`${elementID}-anim`);
        }
      },
      threshold: 0.225,
    });

    ScrollOut({
      targets: ".custom-header",
      offset: 50,
    });
  }
}
