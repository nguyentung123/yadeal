export default class FlipClockCustom {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  constructor(){
    // Elements Variable
    this.bindEvents();
  }


  /* ===================================
   *  EVENTS
   * =================================== */
  bindEvents(){
    this.CheckNameUnit();

    this.oxygenStart = parseInt(yadeaVietnamVariables.oxygen_start);
    this.oxygenEnd = parseInt(yadeaVietnamVariables.oxygen_end);

    this.TIME_PER_WEEK = 604800;
    let today = new Date();
    let currentSecondOfTheWeek = today.getSeconds() + today.getDay() * 86400 + today.getHours() * 3600 + today.getMinutes() * 60;

    this.thisWeekOxygenSpeed = 1000/((this.oxygenEnd - this.oxygenStart)/this.TIME_PER_WEEK);
    this.weekProgress = Math.floor(this.oxygenEnd * currentSecondOfTheWeek/this.TIME_PER_WEEK);
    console.log(this.thisWeekOxygenSpeed, this.weekProgress)

    if($('#home-flip-clock').length > 0) {
      this.NumberOxygen();
      this.NumberTree();
    }
  }



  /* ===================================
   *  METHODS
   * =================================== */

  NumberOxygen () {
    // Declare variable flip clock
    let positions = [];
    let numberDec = this.weekProgress;
    console.log(this.thisWeekOxygenSpeed)

    this.numberOxygen = $('.number-decrease').FlipClock(numberDec, {
      clockFace: 'Counter',
    });

    setTimeout(() => {
      setInterval(() => {
        this.numberOxygen.increment();
      }, Math.ceil(this.thisWeekOxygenSpeed));
    });

    // detect of pos to margin
    $('.number-decrease .flip').each(function (i, value) {
      positions.forEach(function (item) {
        if (item === i + 1) {
          $(value).css('margin-right', '13px');
          $(value).addClass('add-dot');
        }
      })
    })
  }

  NumberTree () {
    // Declare variable flip clock
    let positions = [];
    let numberInc = this.weekProgress / 21.7;

    this.numberTree = $('.number-increase').FlipClock(numberInc, {
      clockFace: 'Counter',
    });

    setTimeout(() => {
      setInterval(() => {
        this.numberTree.increment();
      },  Math.ceil(this.thisWeekOxygenSpeed * 21.7));
    });

    // detect of pos to margin
    $('.number-increase .flip').each(function (i, value) {
      positions.forEach(function (item) {
        if (item === i + 1) {
          $(value).css('margin-right', '13px');
          $(value).addClass('add-dot');
        }
      })
    })
  }

  CheckNameUnit () {
    if(window.innerWidth <= 1024) {
      $('.unit01').html('Tấn')
      $('.unit02').html('Nghìn cây xanh')
    }
  }
}
