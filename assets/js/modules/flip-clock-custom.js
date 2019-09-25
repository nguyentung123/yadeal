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
    if($('#home-flip-clock').length > 0) {
      this.NumberDecrease();
      this.NumberIncrease();
    }
  }



  /* ===================================
   *  METHODS
   * =================================== */
  NumberDecrease () {
    // Declare variable flip clock
    let chars = [];
    let positions = [];
    let numberDec = 55975444;

    // Create our number formatter.
    let formatter = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
    });

    // format price into 1 000 000
    // function formatter.format(number) => $1,000,00.00
    let formatChar = formatter.format(numberDec).split('$').join('').split('.')[0].split(',').join(' ');

    // loop string and add each of char into array if char equal space <=> formatChar.charAt(i) === ' '
    for (var i = 0; i < formatChar.length; i++) {
      if (formatChar.charAt(i) === ' ') {
        chars.push(i)
      }
    }

    // loop you just added to determine the correct position to margin
    for (var i = 0; i < chars.length; i++) {
      positions.push(chars[i] - i)
    }
    /*
      * Example: formatChar = 1 000 000
      * when you loop formatChar, chars = [1, 5]
      * when you loop chars, positions = [1, 4]
      * index of chars chars[0] = 1, chars[1] = 5 => chars[0] - 0 = 1 and chars[1] - 1 = 4
      * add new value of array positions, => positions = [1, 4]
      * */
    var numberDecrease = $('.number-decrease').FlipClock(numberDec, {
      clockFace: 'Counter',
    });
    setTimeout(function() {
      setInterval(function() {
        numberDecrease.decrement();
      }, 60000);
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

  NumberIncrease () {
    // Declare variable flip clock
    let chars = [];
    let positions = [];
    let numberInc = 5597672;
    // Create our number formatter.
    let formatter = new Intl.NumberFormat('en-US', {
      style: 'currency',
      currency: 'USD',
    });

    // format price into 1 000 000
    // function formatter.format(number) => $1,000,00.00
    let formatChar = formatter.format(numberInc).split('$').join('').split('.')[0].split(',').join(' ');

    // loop string and add each of char into array if char equal space <=> formatChar.charAt(i) === ' '
    for (var i = 0; i < formatChar.length; i++) {
      if (formatChar.charAt(i) === ' ') {
        chars.push(i)
      }
    }

    // loop you just added to determine the correct position to margin
    for (var i = 0; i < chars.length; i++) {
      positions.push(chars[i] - i)
    }

    /*
    * Example: formatChar = 1 000 000
    * when you loop formatChar, chars = [1, 5]
    * when you loop chars, positions = [1, 4]
    * index of chars chars[0] = 1, chars[1] = 5 => chars[0] - 0 = 1 and chars[1] - 1 = 4
    * add new value of array positions, => positions = [1, 4]
    * */
    var numberIncrease = $('.number-increase').FlipClock(numberInc, {
      clockFace: 'Counter',
    });

    setTimeout(function() {
      setInterval(function() {
        numberIncrease.increment();
      }, 60000);
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
