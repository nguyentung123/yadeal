export default class FlipClockCustom {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor() {
    // Elements Variable
    this.bindEvents();
  }

  /* ===================================
   *  EVENTS
   * =================================== */
  bindEvents() {
    // this.oxygenData = {
    //   'jan': 41537417,
    //   'feb': 77715167,
    //   'mar': 124612250,
    //   'apr': 160790000,
    //   'may': 207687083,
    //   'jun': 241185000,
    //   'jul': 290761917,
    //   'aug': 332299333,
    //   'sep': 361777500,
    //   'oct': 415374167,
    //   'nov': 361777500,
    //   'dec': 498449000,
    // }

    this.oxygenData = [
      41537417,
      77715167,
      124612250,
      137820000,
      160215750,
      172275000,
      195819250,
      213621000,
      223957500,
      249224500,
      258412500,
      284828000,
    ];
    this.secondsPerMonth = [
      2678400,
      2505600,
      2678400,
      2592000,
      2678400,
      2592000,
      2678400,
      2592000,
      2678400,
      2592000,
      2678400,
      2592000,
    ];

    this.CheckNameUnit();

    let today = new Date();
    let month = today.getMonth();

    if (month < 1) {
      this.oxygenStart = 10000000;
    } else {
      this.oxygenStart = this.oxygenData[month - 1];
    }
    this.oxygenEnd = this.oxygenData[month];

    this.TIME_PER_MONTH = this.secondsPerMonth[month];
    let currentSecondOfTheMonth =
      today.getSeconds() +
      today.getDate() * 86400 +
      today.getHours() * 3600 +
      today.getMinutes() * 60;

    this.thisMonthOxygenSpeed =
      (this.oxygenEnd - this.oxygenStart) / this.TIME_PER_MONTH;

    this.monthProgress =
      Math.floor(
        (this.oxygenEnd - this.oxygenStart) *
          (currentSecondOfTheMonth / this.TIME_PER_MONTH)
      ) + this.oxygenStart;
    console.log(this.thisMonthOxygenSpeed);

    if ($("#home-flip-clock").length > 0) {
      this.NumberOxygen();
      this.NumberTree();
    }
  }

  /* ===================================
   *  METHODS
   * =================================== */

  NumberOxygen() {
    // Declare variable flip clock
    let positions = [];
    let numberDec = this.monthProgress;

    this.numberOxygen = $(".number-decrease").FlipClock(numberDec, {
      clockFace: "Counter",
    });

    // console.log('month speed' , 3 * Math.floor(this.thisMonthOxygenSpeed));

    console.log(this.numberOxygen);

    setInterval(() => {
      numberDec = numberDec + 5 * Math.floor(this.thisMonthOxygenSpeed);
      this.numberOxygen.setValue(numberDec);
    }, 4000);

    // detect of pos to margin
    $(".number-decrease .flip").each(function (i, value) {
      positions.forEach(function (item) {
        if (item === i + 1) {
          $(value).css("margin-right", "13px");
          $(value).addClass("add-dot");
        }
      });
    });
  }

  NumberTree() {
    // Declare variable flip clock
    let positions = [];
    let numberInc = Math.floor(this.monthProgress / 21.7);

    this.numberTree = $(".number-increase").FlipClock(numberInc, {
      clockFace: "Counter",
    });

    setInterval(() => {
      if (Math.floor(this.thisMonthOxygenSpeed / 21.7) === 0) {
        numberInc = numberInc + 2;
      } else {
        numberInc =
          numberInc + 5 * Math.floor(this.thisMonthOxygenSpeed / 21.7);
      }
      this.numberTree.setValue(numberInc);
    }, 4000);

    // detect of pos to margin
    $(".number-increase .flip").each(function (i, value) {
      positions.forEach(function (item) {
        if (item === i + 1) {
          $(value).css("margin-right", "13px");
          $(value).addClass("add-dot");
        }
      });
    });
  }

  CheckNameUnit() {
    if (window.innerWidth <= 1024) {
      $(".unit01").html("Tấn");
      $(".unit02").html("Nghìn cây xanh");
    }
  }
}
