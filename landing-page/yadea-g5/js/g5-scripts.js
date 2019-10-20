/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 2);
/******/ })
/************************************************************************/
/******/ ([
/* 0 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.pageListener = pageListener;
exports.reachSection = exports.contextInit = exports.contextFadeIn = void 0;

function _toConsumableArray(arr) { if (Array.isArray(arr)) { for (var i = 0, arr2 = new Array(arr.length); i < arr.length; i++) { arr2[i] = arr[i]; } return arr2; } else { return Array.from(arr); } }

// Custom Ultilities Functions
var contextFadeIn = function contextFadeIn() {
  var $containerBlock = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
  var callback = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : null;
  var additionalElement = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : [];
  var speed = arguments.length > 3 && arguments[3] !== undefined ? arguments[3] : 0.55;
  var stagger = arguments.length > 4 && arguments[4] !== undefined ? arguments[4] : 0.275;
  console.log('context fade in was called');

  if ($containerBlock != null) {
    var $title = $containerBlock.find('.feature-title');
    var $subTitle = $containerBlock.find('.feature-sub-title');
    var $detail = $containerBlock.find('.feature-content');
    var $line = $containerBlock.find('.grad-line');
    return TweenMax.staggerTo([$title, $subTitle, $detail, $line].concat(_toConsumableArray(additionalElement)), speed, {
      opacity: 1,
      y: 0,
      x: 0,
      scaleX: 1
    }, stagger, callback);
  } else {
    return TweenMax.staggerTo(_toConsumableArray(additionalElement), speed, {
      opacity: 1,
      y: 0,
      x: 0,
      scaleX: 1
    }, stagger, callback);
  }
}; // let contextFadeOut = ($containerBlock = null, callback = null ) => {
//     console.log('context fade out was called');
//     if($containerBlock != null){
//         let $title = $containerBlock.find('.feature-title');
//         let $subTitle = $containerBlock.find('.feature-sub-title');
//         let $detail = $containerBlock.find('.feature-content');
//     }
// }


exports.contextFadeIn = contextFadeIn;

var reachSection = function reachSection() {
  var $target = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;

  if ($target.offset().top > 0) {
    if (window.pageYOffset > $target.offset().top - window.innerHeight / 1.65 && window.pageYOffset < $target.offset().top + window.innerHeight / 2) {
      return true;
    } else {
      return false;
    }
  }

  return false;
};

exports.reachSection = reachSection;

var contextInit = function contextInit() {
  var $containerBlock = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : null;
  var additionalElement = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : [];

  if ($containerBlock != null) {
    var $title = $containerBlock.find('.feature-title');
    var $subTitle = $containerBlock.find('.feature-sub-title');
    var $detail = $containerBlock.find('.feature-content');
    var $line = $containerBlock.find('.grad-line');
    TweenMax.set([$title, $subTitle, $detail].concat(_toConsumableArray(additionalElement)), {
      opacity: 0,
      y: 35
    });
    TweenMax.set($line, {
      opacity: 0,
      y: 0,
      scaleX: 0,
      transformOrigin: '0% 50%'
    });
  }
}; // Custom Event Listener


exports.contextInit = contextInit;

function pageListener() {
  this.events = {};
}

pageListener.prototype.on = function (eventType, listener) {
  // If the eventType Property not exist yet, create an empty aray of that property
  this.events[eventType] = this.events[eventType] || [];
  this.events[eventType].push(listener);
};

pageListener.prototype.emit = function (eventType) {
  // Loop through the events[eventType] array of function and invoke each of them
  this.events[eventType].forEach(function (item) {
    item();
  });
};

/***/ }),
/* 1 */
/***/ (function(module, __webpack_exports__, __webpack_require__) {

"use strict";
Object.defineProperty(__webpack_exports__, "__esModule", { value: true });
/* harmony export (binding) */ __webpack_require__.d(__webpack_exports__, "CountUp", function() { return CountUp; });
var __assign=this&&this.__assign||function(){return(__assign=Object.assign||function(t){for(var i,a=1,s=arguments.length;a<s;a++)for(var n in i=arguments[a])Object.prototype.hasOwnProperty.call(i,n)&&(t[n]=i[n]);return t}).apply(this,arguments)},CountUp=function(){function t(t,i,a){var s=this;this.target=t,this.endVal=i,this.options=a,this.version="2.0.4",this.defaults={startVal:0,decimalPlaces:0,duration:2,useEasing:!0,useGrouping:!0,smartEasingThreshold:999,smartEasingAmount:333,separator:",",decimal:".",prefix:"",suffix:""},this.finalEndVal=null,this.useEasing=!0,this.countDown=!1,this.error="",this.startVal=0,this.paused=!0,this.count=function(t){s.startTime||(s.startTime=t);var i=t-s.startTime;s.remaining=s.duration-i,s.useEasing?s.countDown?s.frameVal=s.startVal-s.easingFn(i,0,s.startVal-s.endVal,s.duration):s.frameVal=s.easingFn(i,s.startVal,s.endVal-s.startVal,s.duration):s.countDown?s.frameVal=s.startVal-(s.startVal-s.endVal)*(i/s.duration):s.frameVal=s.startVal+(s.endVal-s.startVal)*(i/s.duration),s.countDown?s.frameVal=s.frameVal<s.endVal?s.endVal:s.frameVal:s.frameVal=s.frameVal>s.endVal?s.endVal:s.frameVal,s.frameVal=Math.round(s.frameVal*s.decimalMult)/s.decimalMult,s.printValue(s.frameVal),i<s.duration?s.rAF=requestAnimationFrame(s.count):null!==s.finalEndVal?s.update(s.finalEndVal):s.callback&&s.callback()},this.formatNumber=function(t){var i,a,n,e,r,o=t<0?"-":"";if(i=Math.abs(t).toFixed(s.options.decimalPlaces),n=(a=(i+="").split("."))[0],e=a.length>1?s.options.decimal+a[1]:"",s.options.useGrouping){r="";for(var l=0,h=n.length;l<h;++l)0!==l&&l%3==0&&(r=s.options.separator+r),r=n[h-l-1]+r;n=r}return s.options.numerals&&s.options.numerals.length&&(n=n.replace(/[0-9]/g,function(t){return s.options.numerals[+t]}),e=e.replace(/[0-9]/g,function(t){return s.options.numerals[+t]})),o+s.options.prefix+n+e+s.options.suffix},this.easeOutExpo=function(t,i,a,s){return a*(1-Math.pow(2,-10*t/s))*1024/1023+i},this.options=__assign({},this.defaults,a),this.formattingFn=this.options.formattingFn?this.options.formattingFn:this.formatNumber,this.easingFn=this.options.easingFn?this.options.easingFn:this.easeOutExpo,this.startVal=this.validateValue(this.options.startVal),this.frameVal=this.startVal,this.endVal=this.validateValue(i),this.options.decimalPlaces=Math.max(this.options.decimalPlaces),this.decimalMult=Math.pow(10,this.options.decimalPlaces),this.resetDuration(),this.options.separator=String(this.options.separator),this.useEasing=this.options.useEasing,""===this.options.separator&&(this.options.useGrouping=!1),this.el="string"==typeof t?document.getElementById(t):t,this.el?this.printValue(this.startVal):this.error="[CountUp] target is null or undefined"}return t.prototype.determineDirectionAndSmartEasing=function(){var t=this.finalEndVal?this.finalEndVal:this.endVal;this.countDown=this.startVal>t;var i=t-this.startVal;if(Math.abs(i)>this.options.smartEasingThreshold){this.finalEndVal=t;var a=this.countDown?1:-1;this.endVal=t+a*this.options.smartEasingAmount,this.duration=this.duration/2}else this.endVal=t,this.finalEndVal=null;this.finalEndVal?this.useEasing=!1:this.useEasing=this.options.useEasing},t.prototype.start=function(t){this.error||(this.callback=t,this.duration>0?(this.determineDirectionAndSmartEasing(),this.paused=!1,this.rAF=requestAnimationFrame(this.count)):this.printValue(this.endVal))},t.prototype.pauseResume=function(){this.paused?(this.startTime=null,this.duration=this.remaining,this.startVal=this.frameVal,this.determineDirectionAndSmartEasing(),this.rAF=requestAnimationFrame(this.count)):cancelAnimationFrame(this.rAF),this.paused=!this.paused},t.prototype.reset=function(){cancelAnimationFrame(this.rAF),this.paused=!0,this.resetDuration(),this.startVal=this.validateValue(this.options.startVal),this.frameVal=this.startVal,this.printValue(this.startVal)},t.prototype.update=function(t){cancelAnimationFrame(this.rAF),this.startTime=null,this.endVal=this.validateValue(t),this.endVal!==this.frameVal&&(this.startVal=this.frameVal,this.finalEndVal||this.resetDuration(),this.determineDirectionAndSmartEasing(),this.rAF=requestAnimationFrame(this.count))},t.prototype.printValue=function(t){var i=this.formattingFn(t);"INPUT"===this.el.tagName?this.el.value=i:"text"===this.el.tagName||"tspan"===this.el.tagName?this.el.textContent=i:this.el.innerHTML=i},t.prototype.ensureNumber=function(t){return"number"==typeof t&&!isNaN(t)},t.prototype.validateValue=function(t){var i=Number(t);return this.ensureNumber(i)?i:(this.error="[CountUp] invalid start or end value: "+t,null)},t.prototype.resetDuration=function(){this.startTime=null,this.duration=1e3*Number(this.options.duration),this.remaining=this.duration},t}();

/***/ }),
/* 2 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var _home = _interopRequireDefault(__webpack_require__(3));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

$(document).ready(function () {
  var demo = new _home.default();
});

/***/ }),
/* 3 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _common = _interopRequireDefault(__webpack_require__(4));

var _banner = _interopRequireDefault(__webpack_require__(18));

var _lcdScreen = _interopRequireDefault(__webpack_require__(19));

var _colors = _interopRequireDefault(__webpack_require__(20));

var _trending = _interopRequireDefault(__webpack_require__(21));

var _led = _interopRequireDefault(__webpack_require__(22));

var _container = _interopRequireDefault(__webpack_require__(23));

var _smartButton = _interopRequireDefault(__webpack_require__(24));

var _charging = _interopRequireDefault(__webpack_require__(25));

var _driveMode = _interopRequireDefault(__webpack_require__(26));

var _engine = _interopRequireDefault(__webpack_require__(27));

var _brake = _interopRequireDefault(__webpack_require__(28));

var _lithium = _interopRequireDefault(__webpack_require__(29));

var _bms = _interopRequireDefault(__webpack_require__(30));

var _smartSensor = _interopRequireDefault(__webpack_require__(31));

var _gps = _interopRequireDefault(__webpack_require__(32));

var _lock = _interopRequireDefault(__webpack_require__(33));

var _scan = _interopRequireDefault(__webpack_require__(34));

var _water = _interopRequireDefault(__webpack_require__(35));

var _frame = _interopRequireDefault(__webpack_require__(36));

var _accessories = _interopRequireDefault(__webpack_require__(37));

var _utils = __webpack_require__(0);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Home =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function Home() {
    _classCallCheck(this, Home);

    this.$lcd = $('.g5-screen-section');
    this.$color = $('.g5-style-section');
    this.$trend = $('.g5-leading-section');
    this.$led = $('.g5-led-section');
    this.$container = $('.g5-container-section');
    this.$smartButton = $('.g5-side-controller-section');
    this.$charging = $('.g5-charging-usb-section');
    this.$driveMode = $('.g5-driving-mode-section');
    this.$engine = $('.g5-engine-section');
    this.$brake = $('.g5-brake-section');
    this.$lithium = $('.g5-lithium-battery-section');
    this.$bms = $('.g5-battery-management-section');
    this.$smartSensor = $('.g5-smart-sensor-section');
    this.$gps = $('.g5-smart-gps-section');
    this.$lock = $('.g5-touch-unlock');
    this.$scan = $('.g5-analyze-bike-section');
    this.$water = $('.g5-water-resist-section');
    this.$frame = $('.g5-steel-frame-section');
    this.$acc = $('.g5-accessory-section');
    this.animationStatus = {
      lcd: false,
      color: false,
      trend: false,
      led: false,
      container: false,
      smartButton: false,
      charging: false,
      driveMode: false,
      engine: false,
      brake: false,
      lithium: false,
      bms: false,
      smartSensor: false,
      gps: false,
      lock: false,
      scan: false,
      water: false,
      frame: false,
      acc: false
    };
    window.g5Listener = new _utils.pageListener();
    var common = new _common.default();
    var bannerSection = new _banner.default();
    var lcdScreenSection = new _lcdScreen.default();
    var colorSection = new _colors.default();
    var trendingSection = new _trending.default();
    var ledSection = new _led.default();
    var containerSection = new _container.default();
    var smartBtnSection = new _smartButton.default();
    var chargingSection = new _charging.default();
    var driveModeSection = new _driveMode.default();
    var engineSection = new _engine.default();
    var brakeSection = new _brake.default();
    var lithiumSection = new _lithium.default();
    var bmsSection = new _bms.default();
    var smartSensorSection = new _smartSensor.default();
    var gpsSection = new _gps.default();
    var lockSection = new _lock.default();
    var analyzeBike = new _scan.default();
    var water = new _water.default();
    var frame = new _frame.default();
    var acc = new _accessories.default();
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(Home, [{
    key: "bindEvents",
    value: function bindEvents() {
      $('.real-img-slider').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        nextArrow: '<img class="real-img-control next-slide" src="img/g5/next-slide.png">',
        prevArrow: '<img class="real-img-control prev-slide" src="img/g5/prev-slide.png">' // responsive: [
        //     {
        //         breakpoint: 480,
        //         settings: {
        //             slidesToShow: 1,
        //             slidesToScroll: 1,
        //             infinite: true,
        //         }
        //     }
        // ]

      });
      this.ScrollingDetect();
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }, {
    key: "ScrollingDetect",
    value: function ScrollingDetect() {
      var _this = this;

      $(window).on('scroll', function (e) {
        if ((0, _utils.reachSection)(_this.$lcd)) {
          if (!_this.animationStatus.lcd) {
            _this.animationStatus.lcd = true;
            g5Listener.emit('lcd-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$color)) {
          if (!_this.animationStatus.color) {
            _this.animationStatus.color = true;
            g5Listener.emit('color-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$trend)) {
          if (!_this.animationStatus.trend) {
            _this.animationStatus.trend = true;
            g5Listener.emit('trending-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$led)) {
          if (!_this.animationStatus.led) {
            _this.animationStatus.led = true;
            g5Listener.emit('led-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$container)) {
          if (!_this.animationStatus.container) {
            _this.animationStatus.container = true;
            g5Listener.emit('container-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$smartButton)) {
          if (!_this.animationStatus.smartButton) {
            _this.animationStatus.smartButton = true;
            g5Listener.emit('smart-btn-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$charging)) {
          if (!_this.animationStatus.charging) {
            _this.animationStatus.charging = true;
            g5Listener.emit('charging-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$driveMode)) {
          if (!_this.animationStatus.driveMode) {
            _this.animationStatus.driveMode = true;
            g5Listener.emit('drive-mode-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$engine)) {
          if (!_this.animationStatus.engine) {
            _this.animationStatus.engine = true;
            g5Listener.emit('engine-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$brake)) {
          if (!_this.animationStatus.brake) {
            _this.animationStatus.brake = true;
            g5Listener.emit('brake-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$lithium)) {
          if (!_this.animationStatus.lithium) {
            _this.animationStatus.lithium = true;
            g5Listener.emit('lithium-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$bms)) {
          if (!_this.animationStatus.bms) {
            _this.animationStatus.bms = true;
            g5Listener.emit('bms-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$smartSensor)) {
          if (!_this.animationStatus.smartSensor) {
            _this.animationStatus.smartSensor = true;
            g5Listener.emit('smart-sensor-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$gps)) {
          if (!_this.animationStatus.gps) {
            _this.animationStatus.gps = true;
            g5Listener.emit('gps-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$lock)) {
          if (!_this.animationStatus.lock) {
            _this.animationStatus.lock = true;
            g5Listener.emit('lock-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$scan)) {
          if (!_this.animationStatus.scan) {
            _this.animationStatus.scan = true;
            g5Listener.emit('scan-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$water)) {
          if (!_this.animationStatus.water) {
            _this.animationStatus.water = true;
            g5Listener.emit('water-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$frame)) {
          if (!_this.animationStatus.frame) {
            _this.animationStatus.frame = true;
            g5Listener.emit('frame-anim');
          }
        }

        if ((0, _utils.reachSection)(_this.$acc)) {
          if (!_this.animationStatus.acc) {
            _this.animationStatus.acc = true;
            g5Listener.emit('acc-anim');
          }
        }
      });
    }
  }]);

  return Home;
}();

exports.default = Home;

/***/ }),
/* 4 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _youtubePlayer = _interopRequireDefault(__webpack_require__(5));

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Home =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function Home() {
    _classCallCheck(this, Home);

    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(Home, [{
    key: "bindEvents",
    value: function bindEvents() {
      this.SetupVideoPlayer();
      this.SmoothScrollingSetup();
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }, {
    key: "SetupVideoPlayer",
    value: function SetupVideoPlayer() {
      var _this = this;

      this.playerYT = (0, _youtubePlayer.default)('video-modal-video', {
        videoId: 'BnRxdYVE6KA',
        // Default Clip
        playerVars: {
          disablekb: 1,
          fs: 0,
          modestbranding: 1,
          rel: 0,
          controls: 0,
          playlist: 'pKGxsAte4Ao',
          loop: 1
        }
      });
      $('.play-modal-video').on('click', function (e) {
        _this.videoCode = 'BnRxdYVE6KA'; // Default Youtube Video ID

        if ($(e.target).parent('.play-modal-video').length > 0) {
          _this.videoCode = $(e.target).parent('.play-modal-video').data('video-id');
        } else {
          _this.videoCode = $(e.target).data('video-id');
        }

        _this.PlayModalClip(_this.videoCode);
      });
      $('.close-video-modal').on('click', function (e) {
        _this.CloseModalClip();
      });
    }
  }, {
    key: "PlayModalClip",
    value: function PlayModalClip() {
      var _this2 = this;

      var clipID = arguments.length > 0 && arguments[0] !== undefined ? arguments[0] : 'pKGxsAte4Ao';
      $('body').addClass('show-modal');
      $('.video-modal').addClass('active');
      this.playerYT.cueVideoById(clipID);
      this.playerYT.unMute();
      this.playerYT.playVideo();
      this.playerYT.addEventListener('onStateChange', function (e) {
        if (e.data == 0) {
          _this2.CloseModalClip();
        }
      });
      console.log(clipID);
    }
  }, {
    key: "CloseModalClip",
    value: function CloseModalClip() {
      var _this3 = this;

      this.playerYT.mute();
      $('body').removeClass('show-modal');
      $('.video-modal').removeClass('active');
      setTimeout(function () {
        _this3.playerYT.stopVideo();
      }, 200);
    }
  }, {
    key: "SmoothScrollingSetup",
    value: function SmoothScrollingSetup() {
      $('a[href*="#"]') // Remove links that don't actually link to anything
      .not('[href="#"]').not('[href="#0"]').click(function (event) {
        // On-page links
        if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
          // Figure out element to scroll to
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']'); // Does a scroll target exist?

          if (target.length) {
            // Only prevent default if animation is actually gonna happen
            event.preventDefault();
            $('html, body').animate({
              scrollTop: target.offset().top
            }, 700, function () {
              // Callback after animation
              // Must change focus!
              var $target = $(target);
              $target.focus();

              if ($target.is(":focus")) {
                // Checking if the target was focused
                return false;
              } else {
                $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable

                $target.focus(); // Set focus again
              }

              ;
            });
          }
        }
      });
    }
  }]);

  return Home;
}();

exports.default = Home;

/***/ }),
/* 5 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _typeof = typeof Symbol === "function" && typeof Symbol.iterator === "symbol" ? function (obj) { return typeof obj; } : function (obj) { return obj && typeof Symbol === "function" && obj.constructor === Symbol && obj !== Symbol.prototype ? "symbol" : typeof obj; };

var _sister = __webpack_require__(6);

var _sister2 = _interopRequireDefault(_sister);

var _loadYouTubeIframeApi = __webpack_require__(7);

var _loadYouTubeIframeApi2 = _interopRequireDefault(_loadYouTubeIframeApi);

var _YouTubePlayer = __webpack_require__(9);

var _YouTubePlayer2 = _interopRequireDefault(_YouTubePlayer);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/**
 * @typedef YT.Player
 * @see https://developers.google.com/youtube/iframe_api_reference
 * */

/**
 * @see https://developers.google.com/youtube/iframe_api_reference#Loading_a_Video_Player
 */
var youtubeIframeAPI = void 0;

/**
 * A factory function used to produce an instance of YT.Player and queue function calls and proxy events of the resulting object.
 *
 * @param maybeElementId Either An existing YT.Player instance,
 * the DOM element or the id of the HTML element where the API will insert an <iframe>.
 * @param options See `options` (Ignored when using an existing YT.Player instance).
 * @param strictState A flag designating whether or not to wait for
 * an acceptable state when calling supported functions. Default: `false`.
 * See `FunctionStateMap.js` for supported functions and acceptable states.
 */

exports.default = function (maybeElementId) {
  var options = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : {};
  var strictState = arguments.length > 2 && arguments[2] !== undefined ? arguments[2] : false;

  var emitter = (0, _sister2.default)();

  if (!youtubeIframeAPI) {
    youtubeIframeAPI = (0, _loadYouTubeIframeApi2.default)(emitter);
  }

  if (options.events) {
    throw new Error('Event handlers cannot be overwritten.');
  }

  if (typeof maybeElementId === 'string' && !document.getElementById(maybeElementId)) {
    throw new Error('Element "' + maybeElementId + '" does not exist.');
  }

  options.events = _YouTubePlayer2.default.proxyEvents(emitter);

  var playerAPIReady = new Promise(function (resolve) {
    if ((typeof maybeElementId === 'undefined' ? 'undefined' : _typeof(maybeElementId)) === 'object' && maybeElementId.playVideo instanceof Function) {
      var player = maybeElementId;

      resolve(player);
    } else {
      // asume maybeElementId can be rendered inside
      // eslint-disable-next-line promise/catch-or-return
      youtubeIframeAPI.then(function (YT) {
        // eslint-disable-line promise/prefer-await-to-then
        var player = new YT.Player(maybeElementId, options);

        emitter.on('ready', function () {
          resolve(player);
        });

        return null;
      });
    }
  });

  var playerApi = _YouTubePlayer2.default.promisifyPlayer(playerAPIReady, strictState);

  playerApi.on = emitter.on;
  playerApi.off = emitter.off;

  return playerApi;
};

module.exports = exports['default'];

/***/ }),
/* 6 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


var Sister;

/**
* @link https://github.com/gajus/sister for the canonical source repository
* @license https://github.com/gajus/sister/blob/master/LICENSE BSD 3-Clause
*/
Sister = function () {
    var sister = {},
        events = {};

    /**
     * @name handler
     * @function
     * @param {Object} data Event data.
     */

    /**
     * @param {String} name Event name.
     * @param {handler} handler
     * @return {listener}
     */
    sister.on = function (name, handler) {
        var listener = {name: name, handler: handler};
        events[name] = events[name] || [];
        events[name].unshift(listener);
        return listener;
    };

    /**
     * @param {listener}
     */
    sister.off = function (listener) {
        var index = events[listener.name].indexOf(listener);

        if (index !== -1) {
            events[listener.name].splice(index, 1);
        }
    };

    /**
     * @param {String} name Event name.
     * @param {Object} data Event data.
     */
    sister.trigger = function (name, data) {
        var listeners = events[name],
            i;

        if (listeners) {
            i = listeners.length;
            while (i--) {
                listeners[i].handler(data);
            }
        }
    };

    return sister;
};

module.exports = Sister;


/***/ }),
/* 7 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _loadScript = __webpack_require__(8);

var _loadScript2 = _interopRequireDefault(_loadScript);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = function (emitter) {
  /**
   * A promise that is resolved when window.onYouTubeIframeAPIReady is called.
   * The promise is resolved with a reference to window.YT object.
   */
  var iframeAPIReady = new Promise(function (resolve) {
    if (window.YT && window.YT.Player && window.YT.Player instanceof Function) {
      resolve(window.YT);

      return;
    } else {
      var protocol = window.location.protocol === 'http:' ? 'http:' : 'https:';

      (0, _loadScript2.default)(protocol + '//www.youtube.com/iframe_api', function (error) {
        if (error) {
          emitter.trigger('error', error);
        }
      });
    }

    var previous = window.onYouTubeIframeAPIReady;

    // The API will call this function when page has finished downloading
    // the JavaScript for the player API.
    window.onYouTubeIframeAPIReady = function () {
      if (previous) {
        previous();
      }

      resolve(window.YT);
    };
  });

  return iframeAPIReady;
};

module.exports = exports['default'];

/***/ }),
/* 8 */
/***/ (function(module, exports) {


module.exports = function load (src, opts, cb) {
  var head = document.head || document.getElementsByTagName('head')[0]
  var script = document.createElement('script')

  if (typeof opts === 'function') {
    cb = opts
    opts = {}
  }

  opts = opts || {}
  cb = cb || function() {}

  script.type = opts.type || 'text/javascript'
  script.charset = opts.charset || 'utf8';
  script.async = 'async' in opts ? !!opts.async : true
  script.src = src

  if (opts.attrs) {
    setAttributes(script, opts.attrs)
  }

  if (opts.text) {
    script.text = '' + opts.text
  }

  var onend = 'onload' in script ? stdOnEnd : ieOnEnd
  onend(script, cb)

  // some good legacy browsers (firefox) fail the 'in' detection above
  // so as a fallback we always set onload
  // old IE will ignore this and new IE will set onload
  if (!script.onload) {
    stdOnEnd(script, cb);
  }

  head.appendChild(script)
}

function setAttributes(script, attrs) {
  for (var attr in attrs) {
    script.setAttribute(attr, attrs[attr]);
  }
}

function stdOnEnd (script, cb) {
  script.onload = function () {
    this.onerror = this.onload = null
    cb(null, script)
  }
  script.onerror = function () {
    // this.onload = null here is necessary
    // because even IE9 works not like others
    this.onerror = this.onload = null
    cb(new Error('Failed to load ' + this.src), script)
  }
}

function ieOnEnd (script, cb) {
  script.onreadystatechange = function () {
    if (this.readyState != 'complete' && this.readyState != 'loaded') return
    this.onreadystatechange = null
    cb(null, script) // there is no way to catch loading errors in IE8
  }
}


/***/ }),
/* 9 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _debug = __webpack_require__(10);

var _debug2 = _interopRequireDefault(_debug);

var _functionNames = __webpack_require__(14);

var _functionNames2 = _interopRequireDefault(_functionNames);

var _eventNames = __webpack_require__(15);

var _eventNames2 = _interopRequireDefault(_eventNames);

var _FunctionStateMap = __webpack_require__(16);

var _FunctionStateMap2 = _interopRequireDefault(_FunctionStateMap);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

/* eslint-disable promise/prefer-await-to-then */

var debug = (0, _debug2.default)('youtube-player');

var YouTubePlayer = {};

/**
 * Construct an object that defines an event handler for all of the YouTube
 * player events. Proxy captured events through an event emitter.
 *
 * @todo Capture event parameters.
 * @see https://developers.google.com/youtube/iframe_api_reference#Events
 */
YouTubePlayer.proxyEvents = function (emitter) {
  var events = {};

  var _loop = function _loop(eventName) {
    var onEventName = 'on' + eventName.slice(0, 1).toUpperCase() + eventName.slice(1);

    events[onEventName] = function (event) {
      debug('event "%s"', onEventName, event);

      emitter.trigger(eventName, event);
    };
  };

  var _iteratorNormalCompletion = true;
  var _didIteratorError = false;
  var _iteratorError = undefined;

  try {
    for (var _iterator = _eventNames2.default[Symbol.iterator](), _step; !(_iteratorNormalCompletion = (_step = _iterator.next()).done); _iteratorNormalCompletion = true) {
      var eventName = _step.value;

      _loop(eventName);
    }
  } catch (err) {
    _didIteratorError = true;
    _iteratorError = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion && _iterator.return) {
        _iterator.return();
      }
    } finally {
      if (_didIteratorError) {
        throw _iteratorError;
      }
    }
  }

  return events;
};

/**
 * Delays player API method execution until player state is ready.
 *
 * @todo Proxy all of the methods using Object.keys.
 * @todo See TRICKY below.
 * @param playerAPIReady Promise that resolves when player is ready.
 * @param strictState A flag designating whether or not to wait for
 * an acceptable state when calling supported functions.
 * @returns {Object}
 */
YouTubePlayer.promisifyPlayer = function (playerAPIReady) {
  var strictState = arguments.length > 1 && arguments[1] !== undefined ? arguments[1] : false;

  var functions = {};

  var _loop2 = function _loop2(functionName) {
    if (strictState && _FunctionStateMap2.default[functionName]) {
      functions[functionName] = function () {
        for (var _len = arguments.length, args = Array(_len), _key = 0; _key < _len; _key++) {
          args[_key] = arguments[_key];
        }

        return playerAPIReady.then(function (player) {
          var stateInfo = _FunctionStateMap2.default[functionName];
          var playerState = player.getPlayerState();

          // eslint-disable-next-line no-warning-comments
          // TODO: Just spread the args into the function once Babel is fixed:
          // https://github.com/babel/babel/issues/4270
          //
          // eslint-disable-next-line prefer-spread
          var value = player[functionName].apply(player, args);

          // TRICKY: For functions like `seekTo`, a change in state must be
          // triggered given that the resulting state could match the initial
          // state.
          if (stateInfo.stateChangeRequired ||

          // eslint-disable-next-line no-extra-parens
          Array.isArray(stateInfo.acceptableStates) && stateInfo.acceptableStates.indexOf(playerState) === -1) {
            return new Promise(function (resolve) {
              var onPlayerStateChange = function onPlayerStateChange() {
                var playerStateAfterChange = player.getPlayerState();

                var timeout = void 0;

                if (typeof stateInfo.timeout === 'number') {
                  timeout = setTimeout(function () {
                    player.removeEventListener('onStateChange', onPlayerStateChange);

                    resolve();
                  }, stateInfo.timeout);
                }

                if (Array.isArray(stateInfo.acceptableStates) && stateInfo.acceptableStates.indexOf(playerStateAfterChange) !== -1) {
                  player.removeEventListener('onStateChange', onPlayerStateChange);

                  clearTimeout(timeout);

                  resolve();
                }
              };

              player.addEventListener('onStateChange', onPlayerStateChange);
            }).then(function () {
              return value;
            });
          }

          return value;
        });
      };
    } else {
      functions[functionName] = function () {
        for (var _len2 = arguments.length, args = Array(_len2), _key2 = 0; _key2 < _len2; _key2++) {
          args[_key2] = arguments[_key2];
        }

        return playerAPIReady.then(function (player) {
          // eslint-disable-next-line no-warning-comments
          // TODO: Just spread the args into the function once Babel is fixed:
          // https://github.com/babel/babel/issues/4270
          //
          // eslint-disable-next-line prefer-spread
          return player[functionName].apply(player, args);
        });
      };
    }
  };

  var _iteratorNormalCompletion2 = true;
  var _didIteratorError2 = false;
  var _iteratorError2 = undefined;

  try {
    for (var _iterator2 = _functionNames2.default[Symbol.iterator](), _step2; !(_iteratorNormalCompletion2 = (_step2 = _iterator2.next()).done); _iteratorNormalCompletion2 = true) {
      var functionName = _step2.value;

      _loop2(functionName);
    }
  } catch (err) {
    _didIteratorError2 = true;
    _iteratorError2 = err;
  } finally {
    try {
      if (!_iteratorNormalCompletion2 && _iterator2.return) {
        _iterator2.return();
      }
    } finally {
      if (_didIteratorError2) {
        throw _iteratorError2;
      }
    }
  }

  return functions;
};

exports.default = YouTubePlayer;
module.exports = exports['default'];

/***/ }),
/* 10 */
/***/ (function(module, exports, __webpack_require__) {

/* WEBPACK VAR INJECTION */(function(process) {/**
 * This is the web browser implementation of `debug()`.
 *
 * Expose `debug()` as the module.
 */

exports = module.exports = __webpack_require__(12);
exports.log = log;
exports.formatArgs = formatArgs;
exports.save = save;
exports.load = load;
exports.useColors = useColors;
exports.storage = 'undefined' != typeof chrome
               && 'undefined' != typeof chrome.storage
                  ? chrome.storage.local
                  : localstorage();

/**
 * Colors.
 */

exports.colors = [
  'lightseagreen',
  'forestgreen',
  'goldenrod',
  'dodgerblue',
  'darkorchid',
  'crimson'
];

/**
 * Currently only WebKit-based Web Inspectors, Firefox >= v31,
 * and the Firebug extension (any Firefox version) are known
 * to support "%c" CSS customizations.
 *
 * TODO: add a `localStorage` variable to explicitly enable/disable colors
 */

function useColors() {
  // NB: In an Electron preload script, document will be defined but not fully
  // initialized. Since we know we're in Chrome, we'll just detect this case
  // explicitly
  if (typeof window !== 'undefined' && window.process && window.process.type === 'renderer') {
    return true;
  }

  // is webkit? http://stackoverflow.com/a/16459606/376773
  // document is undefined in react-native: https://github.com/facebook/react-native/pull/1632
  return (typeof document !== 'undefined' && document.documentElement && document.documentElement.style && document.documentElement.style.WebkitAppearance) ||
    // is firebug? http://stackoverflow.com/a/398120/376773
    (typeof window !== 'undefined' && window.console && (window.console.firebug || (window.console.exception && window.console.table))) ||
    // is firefox >= v31?
    // https://developer.mozilla.org/en-US/docs/Tools/Web_Console#Styling_messages
    (typeof navigator !== 'undefined' && navigator.userAgent && navigator.userAgent.toLowerCase().match(/firefox\/(\d+)/) && parseInt(RegExp.$1, 10) >= 31) ||
    // double check webkit in userAgent just in case we are in a worker
    (typeof navigator !== 'undefined' && navigator.userAgent && navigator.userAgent.toLowerCase().match(/applewebkit\/(\d+)/));
}

/**
 * Map %j to `JSON.stringify()`, since no Web Inspectors do that by default.
 */

exports.formatters.j = function(v) {
  try {
    return JSON.stringify(v);
  } catch (err) {
    return '[UnexpectedJSONParseError]: ' + err.message;
  }
};


/**
 * Colorize log arguments if enabled.
 *
 * @api public
 */

function formatArgs(args) {
  var useColors = this.useColors;

  args[0] = (useColors ? '%c' : '')
    + this.namespace
    + (useColors ? ' %c' : ' ')
    + args[0]
    + (useColors ? '%c ' : ' ')
    + '+' + exports.humanize(this.diff);

  if (!useColors) return;

  var c = 'color: ' + this.color;
  args.splice(1, 0, c, 'color: inherit')

  // the final "%c" is somewhat tricky, because there could be other
  // arguments passed either before or after the %c, so we need to
  // figure out the correct index to insert the CSS into
  var index = 0;
  var lastC = 0;
  args[0].replace(/%[a-zA-Z%]/g, function(match) {
    if ('%%' === match) return;
    index++;
    if ('%c' === match) {
      // we only are interested in the *last* %c
      // (the user may have provided their own)
      lastC = index;
    }
  });

  args.splice(lastC, 0, c);
}

/**
 * Invokes `console.log()` when available.
 * No-op when `console.log` is not a "function".
 *
 * @api public
 */

function log() {
  // this hackery is required for IE8/9, where
  // the `console.log` function doesn't have 'apply'
  return 'object' === typeof console
    && console.log
    && Function.prototype.apply.call(console.log, console, arguments);
}

/**
 * Save `namespaces`.
 *
 * @param {String} namespaces
 * @api private
 */

function save(namespaces) {
  try {
    if (null == namespaces) {
      exports.storage.removeItem('debug');
    } else {
      exports.storage.debug = namespaces;
    }
  } catch(e) {}
}

/**
 * Load `namespaces`.
 *
 * @return {String} returns the previously persisted debug modes
 * @api private
 */

function load() {
  var r;
  try {
    r = exports.storage.debug;
  } catch(e) {}

  // If debug isn't set in LS, and we're in Electron, try to load $DEBUG
  if (!r && typeof process !== 'undefined' && 'env' in process) {
    r = process.env.DEBUG;
  }

  return r;
}

/**
 * Enable namespaces listed in `localStorage.debug` initially.
 */

exports.enable(load());

/**
 * Localstorage attempts to return the localstorage.
 *
 * This is necessary because safari throws
 * when a user disables cookies/localstorage
 * and you attempt to access it.
 *
 * @return {LocalStorage}
 * @api private
 */

function localstorage() {
  try {
    return window.localStorage;
  } catch (e) {}
}

/* WEBPACK VAR INJECTION */}.call(exports, __webpack_require__(11)))

/***/ }),
/* 11 */
/***/ (function(module, exports) {

// shim for using process in browser
var process = module.exports = {};

// cached from whatever global is present so that test runners that stub it
// don't break things.  But we need to wrap it in a try catch in case it is
// wrapped in strict mode code which doesn't define any globals.  It's inside a
// function because try/catches deoptimize in certain engines.

var cachedSetTimeout;
var cachedClearTimeout;

function defaultSetTimout() {
    throw new Error('setTimeout has not been defined');
}
function defaultClearTimeout () {
    throw new Error('clearTimeout has not been defined');
}
(function () {
    try {
        if (typeof setTimeout === 'function') {
            cachedSetTimeout = setTimeout;
        } else {
            cachedSetTimeout = defaultSetTimout;
        }
    } catch (e) {
        cachedSetTimeout = defaultSetTimout;
    }
    try {
        if (typeof clearTimeout === 'function') {
            cachedClearTimeout = clearTimeout;
        } else {
            cachedClearTimeout = defaultClearTimeout;
        }
    } catch (e) {
        cachedClearTimeout = defaultClearTimeout;
    }
} ())
function runTimeout(fun) {
    if (cachedSetTimeout === setTimeout) {
        //normal enviroments in sane situations
        return setTimeout(fun, 0);
    }
    // if setTimeout wasn't available but was latter defined
    if ((cachedSetTimeout === defaultSetTimout || !cachedSetTimeout) && setTimeout) {
        cachedSetTimeout = setTimeout;
        return setTimeout(fun, 0);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedSetTimeout(fun, 0);
    } catch(e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't trust the global object when called normally
            return cachedSetTimeout.call(null, fun, 0);
        } catch(e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error
            return cachedSetTimeout.call(this, fun, 0);
        }
    }


}
function runClearTimeout(marker) {
    if (cachedClearTimeout === clearTimeout) {
        //normal enviroments in sane situations
        return clearTimeout(marker);
    }
    // if clearTimeout wasn't available but was latter defined
    if ((cachedClearTimeout === defaultClearTimeout || !cachedClearTimeout) && clearTimeout) {
        cachedClearTimeout = clearTimeout;
        return clearTimeout(marker);
    }
    try {
        // when when somebody has screwed with setTimeout but no I.E. maddness
        return cachedClearTimeout(marker);
    } catch (e){
        try {
            // When we are in I.E. but the script has been evaled so I.E. doesn't  trust the global object when called normally
            return cachedClearTimeout.call(null, marker);
        } catch (e){
            // same as above but when it's a version of I.E. that must have the global object for 'this', hopfully our context correct otherwise it will throw a global error.
            // Some versions of I.E. have different rules for clearTimeout vs setTimeout
            return cachedClearTimeout.call(this, marker);
        }
    }



}
var queue = [];
var draining = false;
var currentQueue;
var queueIndex = -1;

function cleanUpNextTick() {
    if (!draining || !currentQueue) {
        return;
    }
    draining = false;
    if (currentQueue.length) {
        queue = currentQueue.concat(queue);
    } else {
        queueIndex = -1;
    }
    if (queue.length) {
        drainQueue();
    }
}

function drainQueue() {
    if (draining) {
        return;
    }
    var timeout = runTimeout(cleanUpNextTick);
    draining = true;

    var len = queue.length;
    while(len) {
        currentQueue = queue;
        queue = [];
        while (++queueIndex < len) {
            if (currentQueue) {
                currentQueue[queueIndex].run();
            }
        }
        queueIndex = -1;
        len = queue.length;
    }
    currentQueue = null;
    draining = false;
    runClearTimeout(timeout);
}

process.nextTick = function (fun) {
    var args = new Array(arguments.length - 1);
    if (arguments.length > 1) {
        for (var i = 1; i < arguments.length; i++) {
            args[i - 1] = arguments[i];
        }
    }
    queue.push(new Item(fun, args));
    if (queue.length === 1 && !draining) {
        runTimeout(drainQueue);
    }
};

// v8 likes predictible objects
function Item(fun, array) {
    this.fun = fun;
    this.array = array;
}
Item.prototype.run = function () {
    this.fun.apply(null, this.array);
};
process.title = 'browser';
process.browser = true;
process.env = {};
process.argv = [];
process.version = ''; // empty string to avoid regexp issues
process.versions = {};

function noop() {}

process.on = noop;
process.addListener = noop;
process.once = noop;
process.off = noop;
process.removeListener = noop;
process.removeAllListeners = noop;
process.emit = noop;
process.prependListener = noop;
process.prependOnceListener = noop;

process.listeners = function (name) { return [] }

process.binding = function (name) {
    throw new Error('process.binding is not supported');
};

process.cwd = function () { return '/' };
process.chdir = function (dir) {
    throw new Error('process.chdir is not supported');
};
process.umask = function() { return 0; };


/***/ }),
/* 12 */
/***/ (function(module, exports, __webpack_require__) {


/**
 * This is the common logic for both the Node.js and web browser
 * implementations of `debug()`.
 *
 * Expose `debug()` as the module.
 */

exports = module.exports = createDebug.debug = createDebug['default'] = createDebug;
exports.coerce = coerce;
exports.disable = disable;
exports.enable = enable;
exports.enabled = enabled;
exports.humanize = __webpack_require__(13);

/**
 * The currently active debug mode names, and names to skip.
 */

exports.names = [];
exports.skips = [];

/**
 * Map of special "%n" handling functions, for the debug "format" argument.
 *
 * Valid key names are a single, lower or upper-case letter, i.e. "n" and "N".
 */

exports.formatters = {};

/**
 * Previous log timestamp.
 */

var prevTime;

/**
 * Select a color.
 * @param {String} namespace
 * @return {Number}
 * @api private
 */

function selectColor(namespace) {
  var hash = 0, i;

  for (i in namespace) {
    hash  = ((hash << 5) - hash) + namespace.charCodeAt(i);
    hash |= 0; // Convert to 32bit integer
  }

  return exports.colors[Math.abs(hash) % exports.colors.length];
}

/**
 * Create a debugger with the given `namespace`.
 *
 * @param {String} namespace
 * @return {Function}
 * @api public
 */

function createDebug(namespace) {

  function debug() {
    // disabled?
    if (!debug.enabled) return;

    var self = debug;

    // set `diff` timestamp
    var curr = +new Date();
    var ms = curr - (prevTime || curr);
    self.diff = ms;
    self.prev = prevTime;
    self.curr = curr;
    prevTime = curr;

    // turn the `arguments` into a proper Array
    var args = new Array(arguments.length);
    for (var i = 0; i < args.length; i++) {
      args[i] = arguments[i];
    }

    args[0] = exports.coerce(args[0]);

    if ('string' !== typeof args[0]) {
      // anything else let's inspect with %O
      args.unshift('%O');
    }

    // apply any `formatters` transformations
    var index = 0;
    args[0] = args[0].replace(/%([a-zA-Z%])/g, function(match, format) {
      // if we encounter an escaped % then don't increase the array index
      if (match === '%%') return match;
      index++;
      var formatter = exports.formatters[format];
      if ('function' === typeof formatter) {
        var val = args[index];
        match = formatter.call(self, val);

        // now we need to remove `args[index]` since it's inlined in the `format`
        args.splice(index, 1);
        index--;
      }
      return match;
    });

    // apply env-specific formatting (colors, etc.)
    exports.formatArgs.call(self, args);

    var logFn = debug.log || exports.log || console.log.bind(console);
    logFn.apply(self, args);
  }

  debug.namespace = namespace;
  debug.enabled = exports.enabled(namespace);
  debug.useColors = exports.useColors();
  debug.color = selectColor(namespace);

  // env-specific initialization logic for debug instances
  if ('function' === typeof exports.init) {
    exports.init(debug);
  }

  return debug;
}

/**
 * Enables a debug mode by namespaces. This can include modes
 * separated by a colon and wildcards.
 *
 * @param {String} namespaces
 * @api public
 */

function enable(namespaces) {
  exports.save(namespaces);

  exports.names = [];
  exports.skips = [];

  var split = (typeof namespaces === 'string' ? namespaces : '').split(/[\s,]+/);
  var len = split.length;

  for (var i = 0; i < len; i++) {
    if (!split[i]) continue; // ignore empty strings
    namespaces = split[i].replace(/\*/g, '.*?');
    if (namespaces[0] === '-') {
      exports.skips.push(new RegExp('^' + namespaces.substr(1) + '$'));
    } else {
      exports.names.push(new RegExp('^' + namespaces + '$'));
    }
  }
}

/**
 * Disable debug output.
 *
 * @api public
 */

function disable() {
  exports.enable('');
}

/**
 * Returns true if the given mode name is enabled, false otherwise.
 *
 * @param {String} name
 * @return {Boolean}
 * @api public
 */

function enabled(name) {
  var i, len;
  for (i = 0, len = exports.skips.length; i < len; i++) {
    if (exports.skips[i].test(name)) {
      return false;
    }
  }
  for (i = 0, len = exports.names.length; i < len; i++) {
    if (exports.names[i].test(name)) {
      return true;
    }
  }
  return false;
}

/**
 * Coerce `val`.
 *
 * @param {Mixed} val
 * @return {Mixed}
 * @api private
 */

function coerce(val) {
  if (val instanceof Error) return val.stack || val.message;
  return val;
}


/***/ }),
/* 13 */
/***/ (function(module, exports) {

/**
 * Helpers.
 */

var s = 1000;
var m = s * 60;
var h = m * 60;
var d = h * 24;
var y = d * 365.25;

/**
 * Parse or format the given `val`.
 *
 * Options:
 *
 *  - `long` verbose formatting [false]
 *
 * @param {String|Number} val
 * @param {Object} [options]
 * @throws {Error} throw an error if val is not a non-empty string or a number
 * @return {String|Number}
 * @api public
 */

module.exports = function(val, options) {
  options = options || {};
  var type = typeof val;
  if (type === 'string' && val.length > 0) {
    return parse(val);
  } else if (type === 'number' && isNaN(val) === false) {
    return options.long ? fmtLong(val) : fmtShort(val);
  }
  throw new Error(
    'val is not a non-empty string or a valid number. val=' +
      JSON.stringify(val)
  );
};

/**
 * Parse the given `str` and return milliseconds.
 *
 * @param {String} str
 * @return {Number}
 * @api private
 */

function parse(str) {
  str = String(str);
  if (str.length > 100) {
    return;
  }
  var match = /^((?:\d+)?\.?\d+) *(milliseconds?|msecs?|ms|seconds?|secs?|s|minutes?|mins?|m|hours?|hrs?|h|days?|d|years?|yrs?|y)?$/i.exec(
    str
  );
  if (!match) {
    return;
  }
  var n = parseFloat(match[1]);
  var type = (match[2] || 'ms').toLowerCase();
  switch (type) {
    case 'years':
    case 'year':
    case 'yrs':
    case 'yr':
    case 'y':
      return n * y;
    case 'days':
    case 'day':
    case 'd':
      return n * d;
    case 'hours':
    case 'hour':
    case 'hrs':
    case 'hr':
    case 'h':
      return n * h;
    case 'minutes':
    case 'minute':
    case 'mins':
    case 'min':
    case 'm':
      return n * m;
    case 'seconds':
    case 'second':
    case 'secs':
    case 'sec':
    case 's':
      return n * s;
    case 'milliseconds':
    case 'millisecond':
    case 'msecs':
    case 'msec':
    case 'ms':
      return n;
    default:
      return undefined;
  }
}

/**
 * Short format for `ms`.
 *
 * @param {Number} ms
 * @return {String}
 * @api private
 */

function fmtShort(ms) {
  if (ms >= d) {
    return Math.round(ms / d) + 'd';
  }
  if (ms >= h) {
    return Math.round(ms / h) + 'h';
  }
  if (ms >= m) {
    return Math.round(ms / m) + 'm';
  }
  if (ms >= s) {
    return Math.round(ms / s) + 's';
  }
  return ms + 'ms';
}

/**
 * Long format for `ms`.
 *
 * @param {Number} ms
 * @return {String}
 * @api private
 */

function fmtLong(ms) {
  return plural(ms, d, 'day') ||
    plural(ms, h, 'hour') ||
    plural(ms, m, 'minute') ||
    plural(ms, s, 'second') ||
    ms + ' ms';
}

/**
 * Pluralization helper.
 */

function plural(ms, n, name) {
  if (ms < n) {
    return;
  }
  if (ms < n * 1.5) {
    return Math.floor(ms / n) + ' ' + name;
  }
  return Math.ceil(ms / n) + ' ' + name + 's';
}


/***/ }),
/* 14 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});


/**
 * @see https://developers.google.com/youtube/iframe_api_reference#Functions
 */
exports.default = ['cueVideoById', 'loadVideoById', 'cueVideoByUrl', 'loadVideoByUrl', 'playVideo', 'pauseVideo', 'stopVideo', 'getVideoLoadedFraction', 'cuePlaylist', 'loadPlaylist', 'nextVideo', 'previousVideo', 'playVideoAt', 'setShuffle', 'setLoop', 'getPlaylist', 'getPlaylistIndex', 'setOption', 'mute', 'unMute', 'isMuted', 'setVolume', 'getVolume', 'seekTo', 'getPlayerState', 'getPlaybackRate', 'setPlaybackRate', 'getAvailablePlaybackRates', 'getPlaybackQuality', 'setPlaybackQuality', 'getAvailableQualityLevels', 'getCurrentTime', 'getDuration', 'removeEventListener', 'getVideoUrl', 'getVideoEmbedCode', 'getOptions', 'getOption', 'addEventListener', 'destroy', 'setSize', 'getIframe'];
module.exports = exports['default'];

/***/ }),
/* 15 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});


/**
 * @see https://developers.google.com/youtube/iframe_api_reference#Events
 * `volumeChange` is not officially supported but seems to work
 * it emits an object: `{volume: 82.6923076923077, muted: false}`
 */
exports.default = ['ready', 'stateChange', 'playbackQualityChange', 'playbackRateChange', 'error', 'apiChange', 'volumeChange'];
module.exports = exports['default'];

/***/ }),
/* 16 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});

var _PlayerStates = __webpack_require__(17);

var _PlayerStates2 = _interopRequireDefault(_PlayerStates);

function _interopRequireDefault(obj) { return obj && obj.__esModule ? obj : { default: obj }; }

exports.default = {
  pauseVideo: {
    acceptableStates: [_PlayerStates2.default.ENDED, _PlayerStates2.default.PAUSED],
    stateChangeRequired: false
  },
  playVideo: {
    acceptableStates: [_PlayerStates2.default.ENDED, _PlayerStates2.default.PLAYING],
    stateChangeRequired: false
  },
  seekTo: {
    acceptableStates: [_PlayerStates2.default.ENDED, _PlayerStates2.default.PLAYING, _PlayerStates2.default.PAUSED],
    stateChangeRequired: true,

    // TRICKY: `seekTo` may not cause a state change if no buffering is
    // required.
    timeout: 3000
  }
};
module.exports = exports['default'];

/***/ }),
/* 17 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = {
  BUFFERING: 3,
  ENDED: 0,
  PAUSED: 2,
  PLAYING: 1,
  UNSTARTED: -1,
  VIDEO_CUED: 5
};
module.exports = exports["default"];

/***/ }),
/* 18 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

// import TweenMax from 'gsap/TweenMax';
var Home =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function Home() {
    _classCallCheck(this, Home);

    // Required Elements
    this.$bannerBG = $('.yadea-g5-banner .banner-bg');
    this.$bikeImg = $('.yadea-g5-banner .bike-image');
    this.$g5Name = $('.yadea-g5-banner .banner-content .product-name');
    this.$g5Slogan = $('.yadea-g5-banner .banner-content .g5-product-slogan'); // Main Timeline Item

    this.bannerTimeline = null;
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(Home, [{
    key: "bindEvents",
    value: function bindEvents() {
      this.InitBanner();
      this.DoBannerAnimation();
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }, {
    key: "InitBanner",
    value: function InitBanner() {
      TweenMax.set(this.$bikeImg, {
        x: -80
      });
      TweenMax.set(this.$g5Name, {
        y: 40
      });
      TweenMax.set(this.$g5Slogan, {
        y: 40
      });
    }
  }, {
    key: "DoBannerAnimation",
    value: function DoBannerAnimation() {
      var _this = this;

      this.bannerTimeline = new TimelineMax({
        paused: true
      });
      this.bannerTimeline.add([TweenMax.to(this.$bannerBG, 0.7, {
        opacity: 1
      }), TweenMax.to(this.$bikeImg, 0.7, {
        x: 0,
        opacity: 1
      }), TweenMax.to(this.$g5Name, 0.7, {
        y: 0,
        opacity: 1
      }), TweenMax.to(this.$g5Slogan, 0.7, {
        y: 0,
        opacity: 1
      })], '+=0.1', 'sequence', -0.15);
      setTimeout(function () {
        _this.bannerTimeline.play();
      }, 400);
    }
  }]);

  return Home;
}();

exports.default = Home;

/***/ }),
/* 19 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _utils = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var LCDScreen =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function LCDScreen() {
    _classCallCheck(this, LCDScreen);

    this.$context = $('.g5-screen-section');
    this.$effectHolder = $('.g5-screen-section .effect-content');
    this.$detail1 = $('.feature-detail .feature-detail-context.detail-1');
    this.$detail2 = $('.feature-detail .feature-detail-context.detail-2');
    this.$detail1Marker = $('.pointer .mark-holder.mark-1');
    this.$detail2Marker = $('.pointer .mark-holder.mark-2');
    this.$detailMarkerBtn = $('.pointer .mark-holder .pointer-mark');
    this.autoplayInterval = null;
    this.allowAutoplayTimeout = null;
    this.sectionStatus = {
      isAutoPlay: true,
      currentState: 1
    };
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(LCDScreen, [{
    key: "bindEvents",
    value: function bindEvents() {
      this.InitSection();
      this.SetupAnimation();
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }, {
    key: "InitSection",
    value: function InitSection() {
      (0, _utils.contextInit)(this.$context, [this.$effectHolder]);
    }
  }, {
    key: "SetupAnimation",
    value: function SetupAnimation() {
      var _this = this;

      g5Listener.on('lcd-anim', function () {
        (0, _utils.contextFadeIn)(_this.$context, function () {
          _this.SetupMarkerClick();

          _this.SetupToggleLCD();
        }, [_this.$effectHolder]);
      });
    }
  }, {
    key: "SetupToggleLCD",
    value: function SetupToggleLCD() {
      var _this2 = this;

      if (this.sectionStatus.isAutoPlay) {
        this.autoplayInterval = setInterval(function () {
          _this2.SwitchMode();
        }, 5000);
      }
    } // Manually click and swap between marker

  }, {
    key: "SetupMarkerClick",
    value: function SetupMarkerClick() {
      var _this3 = this;

      this.$detailMarkerBtn.click(function () {
        _this3.SwitchMode();

        clearInterval(_this3.autoplayInterval);
        _this3.autoplayInterval = null;
        _this3.sectionStatus.isAutoPlay = false; // After 1 second, allow auto swapping between 2 mode

        if (_this3.allowAutoplayTimeout !== null) {
          clearTimeout(_this3.allowAutoplayTimeout);
          _this3.allowAutoplayTimeout = null;
        }

        _this3.allowAutoplayTimeout = setTimeout(function () {
          _this3.sectionStatus.isAutoPlay = true;

          _this3.SetupToggleLCD();
        }, 1000);
      });
    }
  }, {
    key: "SwitchMode",
    value: function SwitchMode() {
      var currentActiveMode = $('#g5-screen-section .feature-detail.is-active');
      var nextActiveMode = $('#g5-screen-section .feature-detail:not(.is-active)');
      var currentActiveMarker = currentActiveMode.find('.mark-holder');
      var nextActiveMarker = nextActiveMode.find('.mark-holder');
      currentActiveMode.removeClass('is-active');
      currentActiveMarker.removeClass('is-active');
      nextActiveMode.addClass('is-active');
      nextActiveMarker.addClass('is-active');
    }
  }]);

  return LCDScreen;
}();

exports.default = LCDScreen;

/***/ }),
/* 20 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _utils = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Colors =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function Colors() {
    _classCallCheck(this, Colors);

    this.$context = $('.g5-style-section');
    this.$colorList = $('.g5-style-section .g5-color-list');
    this.$itemColor = this.$colorList.find('.color-item');
    this.$itemColor1 = this.$colorList.find('.color-item.color-1');
    this.$itemColor2 = this.$colorList.find('.color-item.color-2');
    this.$itemColor3 = this.$colorList.find('.color-item.color-3');
    this.$itemColor4 = this.$colorList.find('.color-item.color-4');
    this.$mobileSlider = this.$context.find('.color-select-video-mb');
    this.currentColor = 0;
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(Colors, [{
    key: "bindEvents",
    value: function bindEvents() {
      this.InitSection();

      if (window.innerWidth > 768) {
        this.SetupDesktopAnimation();
      } else {
        (0, _utils.contextInit)(this.$context, [this.$mobileSlider]);
        this.SetupMobileAnimation();
      }
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }, {
    key: "InitSection",
    value: function InitSection() {
      (0, _utils.contextInit)(this.$context, [this.$colorList]);
    }
  }, {
    key: "SetupDesktopAnimation",
    value: function SetupDesktopAnimation() {
      var _this = this;

      this.ActiveColor(2);
      g5Listener.on('color-anim', function () {
        (0, _utils.contextFadeIn)(_this.$context, function () {
          _this.SetupHoverEffect();
        }, [_this.$colorList]);
      });
    }
  }, {
    key: "SetupMobileAnimation",
    value: function SetupMobileAnimation() {
      var _this2 = this;

      $('.g5-color-list-mb').slick({
        centerMode: true,
        centerPadding: '0',
        slidesToShow: 3,
        arrows: false
      });
      g5Listener.on('color-anim', function () {
        (0, _utils.contextFadeIn)(_this2.$context, function () {
          _this2.SetupHoverEffect();
        }, [_this2.$mobileSlider]);
      });
    }
  }, {
    key: "SetupHoverEffect",
    value: function SetupHoverEffect() {
      var _this3 = this;

      this.$itemColor.on('mouseenter', function (e) {
        if ($(e.target).parents('.color-item').hasClass('color-1')) {
          _this3.ActiveColor(1);
        }

        if ($(e.target).parents('.color-item').hasClass('color-2')) {
          _this3.ActiveColor(2);
        }

        if ($(e.target).parents('.color-item').hasClass('color-3')) {
          _this3.ActiveColor(3);
        }

        if ($(e.target).parents('.color-item').hasClass('color-4')) {
          _this3.ActiveColor(4);
        }
      });
      this.$colorList.on('mouseleave', function (e) {
        _this3.ActiveColor(0);
      });
    }
  }, {
    key: "ActiveColor",
    value: function ActiveColor(colorID) {
      switch (colorID) {
        case 1:
          // targetColor
          this.$itemColor1.addClass('active').css({
            'left': '-3%'
          }); // other colors

          this.$itemColor2.removeClass('active').css({
            'left': '24.5%'
          });
          this.$itemColor3.removeClass('active').css({
            'left': '48.25%'
          });
          this.$itemColor4.removeClass('active').css({
            'left': '71.75%'
          });
          break;

        case 2:
          // targetColor
          this.$itemColor2.addClass('active').css({
            'left': '22%'
          }); // other colors

          this.$itemColor1.removeClass('active').css({
            'left': '-5.75%'
          });
          this.$itemColor3.removeClass('active').css({
            'left': '49.75%'
          });
          this.$itemColor4.removeClass('active').css({
            'left': '73.5%'
          });
          break;

        case 3:
          // targetColor
          this.$itemColor3.addClass('active').css({
            'left': '47%'
          }); // other colors

          this.$itemColor2.removeClass('active').css({
            'left': '19.25%'
          });
          this.$itemColor1.removeClass('active').css({
            'left': '-4.525%'
          });
          this.$itemColor4.removeClass('active').css({
            'left': '74.75%'
          });
          break;

        case 4:
          // targetColor
          this.$itemColor4.addClass('active').css({
            'left': '70.75%'
          }); // other colors

          this.$itemColor2.removeClass('active').css({
            'left': '19.25%'
          });
          this.$itemColor3.removeClass('active').css({
            'left': '43%'
          });
          this.$itemColor1.removeClass('active').css({
            'left': '-4.75%'
          });
          break;
        // Reset Everything to normal when recaive other value

        default:
          this.$itemColor2.removeClass('active').css({
            'left': '22%'
          });
          this.$itemColor1.removeClass('active').css({
            'left': '-2%'
          });
          this.$itemColor3.removeClass('active').css({
            'left': '46%'
          });
          this.$itemColor4.removeClass('active').css({
            'left': '70%'
          });
          break;
      }
    }
  }]);

  return Colors;
}();

exports.default = Colors;

/***/ }),
/* 21 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _utils = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Trending =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function Trending() {
    _classCallCheck(this, Trending);

    this.$context = $('.g5-leading-section');
    this.$sliderWrapper = $('.leading-slider');
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(Trending, [{
    key: "bindEvents",
    value: function bindEvents() {
      this.InitSection();
      this.SetupAnimation();
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }, {
    key: "InitSection",
    value: function InitSection() {
      (0, _utils.contextInit)(this.$context);
      this.SetupSlider();
    }
  }, {
    key: "SetupAnimation",
    value: function SetupAnimation() {
      var _this = this;

      g5Listener.on('trending-anim', function () {
        (0, _utils.contextFadeIn)(_this.$context, function () {
          console.log('Finished');
        });
      });
    }
  }, {
    key: "SetupSlider",
    value: function SetupSlider() {
      this.$sliderWrapper.slick({
        dots: true,
        arrows: false,
        dotsClass: 'g5-slider-dots',
        // fade: true,
        easing: 'ease-out',
        autoplaySpeed: 4000,
        speed: 650,
        swipeToSlide: true,
        autoplay: true
      });
    }
  }]);

  return Trending;
}();

exports.default = Trending;

/***/ }),
/* 22 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _utils = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Led =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function Led() {
    _classCallCheck(this, Led);

    this.$context = $('.g5-led-section');
    this.$ledsHolder = $('.g5-led-section .leds-holder');
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(Led, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      (0, _utils.contextInit)(this.$context, [this.$ledsHolder]);
      g5Listener.on('led-anim', function () {
        (0, _utils.contextFadeIn)(_this.$context, function () {}, [_this.$ledsHolder]);
      });
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }]);

  return Led;
}();

exports.default = Led;

/***/ }),
/* 23 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _utils = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Led =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function Led() {
    _classCallCheck(this, Led);

    this.$context = $('.g5-container-section .context-block');
    this.$backgroundImg = $('.g5-container-section .container-inside img');
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(Led, [{
    key: "bindEvents",
    value: function bindEvents() {
      this.InitSection();
      this.SetupAnimation();
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }, {
    key: "InitSection",
    value: function InitSection() {
      (0, _utils.contextInit)(this.$context);
    }
  }, {
    key: "SetupAnimation",
    value: function SetupAnimation() {
      var _this = this;

      g5Listener.on('container-anim', function () {
        (0, _utils.contextFadeIn)(_this.$context, function () {
          _this.SetupShowing();
        }, [_this.$backgroundImg]);
      });
    }
  }, {
    key: "SetupShowing",
    value: function SetupShowing() {
      var _this2 = this;

      setTimeout(function () {
        TweenMax.to(_this2.$backgroundImg, 1, {
          opacity: 0
        });
        setTimeout(function () {
          TweenMax.to(_this2.$backgroundImg, 0.8, {
            opacity: 1,
            onComplete: _this2.SetupShowing.bind(_this2)
          });
        }, 1800);
      }, 5000);
    }
  }]);

  return Led;
}();

exports.default = Led;

/***/ }),
/* 24 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _utils = __webpack_require__(0);

var _countup = __webpack_require__(1);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var SmartButton =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function SmartButton() {
    _classCallCheck(this, SmartButton);

    this.$mainContextBlock = $('.g5-side-controller-section .context-block');
    this.elemWidth = $('.g5-side-controller-section').width(); // Left Side Group Of Element

    this.$leftSideWrapper = $('.g5-side-controller-section .side-control.left');
    this.$leftImage = this.$leftSideWrapper.find('.controler-img');
    this.$leftSwitchBtn = this.$leftSideWrapper.find('.cta');
    this.$leftDetailItems = this.$leftSideWrapper.find('.detail-item'); // Right Side Group Of Element

    this.$rightSideWrapper = $('.g5-side-controller-section .side-control.right');
    this.$rightImage = this.$rightSideWrapper.find(' .controler-img');
    this.$rightSwitchBtn = this.$rightSideWrapper.find('.cta');
    this.$rightDetailItems = this.$rightSideWrapper.find('.detail-item');
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(SmartButton, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      this.InitSection();
      g5Listener.on('smart-btn-anim', function () {
        (0, _utils.contextFadeIn)(_this.$mainContextBlock, function () {
          TweenMax.to(_this.$leftDetailItems, 0.3, {
            opacity: 1,
            x: 0
          });

          _this.$leftSideWrapper.addClass('active');
        }, [_this.$leftImage, _this.$leftSwitchBtn], 0.5, 0.15);
      });
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }, {
    key: "InitSection",
    value: function InitSection() {
      var _this2 = this;

      (0, _utils.contextInit)(this.$mainContextBlock);
      TweenMax.set(this.$mainContextBlock.find('.grad-line'), {
        transformOrigin: '100% 50%'
      });
      TweenMax.set(this.$rightImage, {
        opacity: 0,
        x: 60
      });
      TweenMax.set(this.$rightSwitchBtn, {
        opacity: 0,
        x: 30
      });
      TweenMax.set(this.$rightDetailItems, {
        opacity: 0,
        x: -20
      });
      TweenMax.set(this.$leftImage, {
        opacity: 0,
        x: -60
      });
      TweenMax.set(this.$leftSwitchBtn, {
        opacity: 0,
        x: -30
      });
      TweenMax.set(this.$leftDetailItems, {
        opacity: 0,
        x: 20
      });
      this.$rightSwitchBtn.on('click', function (e) {
        _this2.SwitchSide(1);
      });
      this.$leftSwitchBtn.on('click', function (e) {
        _this2.SwitchSide(2);
      });
    }
  }, {
    key: "SwitchSide",
    value: function SwitchSide(sideNo) {
      var _this3 = this;

      switch (sideNo) {
        case 1:
          if (window.innerWidth > 768) {
            TweenMax.to(this.$mainContextBlock, 1, {
              x: 0
            });
          }

          this.CleanUpSide(2, function () {
            (0, _utils.contextFadeIn)(null, function () {
              _this3.$leftSideWrapper.addClass('active');
            }, [_this3.$leftImage, _this3.$leftSwitchBtn, _this3.$leftDetailItems], 0.5, 0.15);
          });
          break;

        case 2:
          if (window.innerWidth > 768) {
            TweenMax.to(this.$mainContextBlock, 1, {
              x: -this.elemWidth * 0.55
            });
          }

          this.CleanUpSide(1, function () {
            (0, _utils.contextFadeIn)(null, function () {
              _this3.$rightSideWrapper.addClass('active');
            }, [_this3.$rightImage, _this3.$rightSwitchBtn, _this3.$rightDetailItems], 0.5, 0.15);
          });
          break;
      }
    }
  }, {
    key: "CleanUpSide",
    value: function CleanUpSide(sideNo, callback) {
      var _this4 = this;

      switch (sideNo) {
        case 1:
          TweenMax.to(this.$leftImage, 0.4, {
            opacity: 0,
            x: -80
          });
          TweenMax.to(this.$leftSwitchBtn, 0.4, {
            opacity: 0,
            x: -80
          });
          TweenMax.to(this.$leftDetailItems, 0.4, {
            opacity: 0,
            x: 60,
            onComplete: function onComplete() {
              _this4.$leftSideWrapper.removeClass('active');

              _this4.$rightSideWrapper.addClass('active');

              callback();
            }
          });
          break;

        case 2:
          TweenMax.to(this.$rightImage, 0.4, {
            opacity: 0,
            x: 80
          });
          TweenMax.to(this.$rightSwitchBtn, 0.4, {
            opacity: 0,
            x: 80
          });
          TweenMax.to(this.$rightDetailItems, 0.4, {
            opacity: 0,
            x: -60,
            onComplete: function onComplete() {
              _this4.$rightSideWrapper.removeClass('active');

              _this4.$leftSideWrapper.addClass('active');

              callback();
            }
          });
          break;
      }
    }
  }]);

  return SmartButton;
}();

exports.default = SmartButton;

/***/ }),
/* 25 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _utils = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Charging =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function Charging() {
    _classCallCheck(this, Charging);

    this.$context = $('.g5-charging-usb-section .context-block');
    this.$imageHolder = $('.g5-charging-usb-section .effect-holder .img-holder');
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(Charging, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      (0, _utils.contextInit)(this.$context);
      TweenMax.set(this.$imageHolder, {
        opacity: 0
      });
      g5Listener.on('charging-anim', function () {
        TweenMax.to(_this.$imageHolder, 0.7, {
          opacity: 1,
          onComplete: function onComplete() {
            (0, _utils.contextFadeIn)(_this.$context);
          }
        });
      });
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }]);

  return Charging;
}();

exports.default = Charging;

/***/ }),
/* 26 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _countup = __webpack_require__(1);

var _utils = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var DriveMode =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function DriveMode() {
    _classCallCheck(this, DriveMode);

    this.$context = $('.g5-driving-mode-section');
    this.$moveSelect = $('.g5-driving-mode-section .mode-select');
    this.$modeSpecs = $('.g5-driving-mode-section .mode-specs');
    this.$mainIMG = $('.g5-driving-mode-section .img-holder');
    this.$speedWave = this.$context.find('.speed-wave');
    this.$ecoBtn = $('#eco-mode-option');
    this.$ecoDetail = $('.mode-specs .eco-detail');
    this.$sportBtn = $('#sport-mode-option');
    this.$sportDetail = $('.mode-specs .sport-detail');
    console.log(this.$moveSelect);
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(DriveMode, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      (0, _utils.contextInit)(this.$context, [this.$moveSelect, this.$modeSpecs, this.$mainIMG]);
      g5Listener.on('drive-mode-anim', function () {
        (0, _utils.contextFadeIn)(_this.$context, function () {
          _this.SetupSwitchingMode();

          _this.$speedWave.addClass('is-animating');

          var demo = new _countup.CountUp('max-speed-value', 40, {
            duration: 2.5,
            startVal: 0
          });

          if (!demo.error) {
            demo.start();
          } else {
            console.error(demo.error);
          }
        }, [_this.$moveSelect, _this.$modeSpecs, _this.$mainIMG]);
      });
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }, {
    key: "SetupSwitchingMode",
    value: function SetupSwitchingMode() {
      var _this2 = this;

      this.$ecoBtn.on('click', function () {
        if (!_this2.$ecoBtn.hasClass('active')) {
          _this2.SwitchTo(1);
        }
      });
      this.$sportBtn.on('click', function () {
        if (!_this2.$sportBtn.hasClass('active')) {
          _this2.SwitchTo(2);
        }
      });
    }
  }, {
    key: "SwitchTo",
    value: function SwitchTo(modeID) {
      switch (modeID) {
        case 1:
          this.$ecoBtn.addClass('active');
          this.$ecoDetail.addClass('active');
          this.$sportBtn.removeClass('active');
          this.$sportDetail.removeClass('active');
          var demo2 = new _countup.CountUp('max-speed-value', 40, {
            duration: 2.5,
            startVal: 60
          });

          if (!demo2.error) {
            demo2.start();
          } else {
            console.error(demo2.error);
          }

          ;
          break;

        case 2:
          this.$sportBtn.addClass('active');
          this.$sportDetail.addClass('active');
          this.$ecoBtn.removeClass('active');
          this.$ecoDetail.removeClass('active');
          var demo1 = new _countup.CountUp('max-speed-value', 60, {
            duration: 2.5,
            startVal: 40
          });

          if (!demo1.error) {
            demo1.start();
          } else {
            console.error(demo1.error);
          }

          break;
      }
    }
  }]);

  return DriveMode;
}();

exports.default = DriveMode;

/***/ }),
/* 27 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _utils = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Engine =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function Engine() {
    _classCallCheck(this, Engine);

    this.$context = $('.g5-engine-section');
    this.$engineFeatures = $('.g5-engine-section .engine-feature');
    this.$engineImage = $('.g5-engine-section .engine-img-holder img');
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(Engine, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      (0, _utils.contextInit)(this.$context, [this.$engineFeatures, this.$engineImage]);
      g5Listener.on('engine-anim', function () {
        (0, _utils.contextFadeIn)(_this.$context, function () {
          console.log('Finished');
        }, [_this.$engineFeatures, _this.$engineImage]);
      });
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }]);

  return Engine;
}();

exports.default = Engine;

/***/ }),
/* 28 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _utils = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Brake =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function Brake() {
    _classCallCheck(this, Brake);

    this.$context = $('.g5-brake-section');
    this.$brakeFeatures = $('.g5-brake-section .brake-feature-list');
    this.brakeHighlightImg = this.$context.find('.brake-highlight-img');
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(Brake, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      (0, _utils.contextInit)(this.$context, [this.$brakeFeatures]);
      g5Listener.on('brake-anim', function () {
        (0, _utils.contextFadeIn)(_this.$context, function () {
          console.log('Finished');

          _this.brakeHighlightImg.addClass('animating');
        }, [_this.$brakeFeatures]);
      });
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }]);

  return Brake;
}();

exports.default = Brake;

/***/ }),
/* 29 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _utils = __webpack_require__(0);

var _countup = __webpack_require__(1);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Lithium =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function Lithium() {
    _classCallCheck(this, Lithium);

    this.$context = $('.g5-lithium-battery-section');
    this.$mainInfo = this.$context.find('.main-info');
    this.$selectGroup = this.$context.find('.mode-selectors');
    this.minSpeed = 60;
    this.batterySetting = {
      mode: [5, 10, 15],
      weight: [10, 15, 20],
      heat: [5, 10, 15]
    };
    this.activeLevel = [0, 0, 0];
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(Lithium, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      (0, _utils.contextInit)(this.$context, [this.$mainInfo, this.$selectGroup]);
      g5Listener.on('lithium-anim', function () {
        (0, _utils.contextFadeIn)(_this.$context, function () {
          _this.currentSpeed = _this.CalculateSpeed(_this.activeLevel);
          var demo = new _countup.CountUp('battery-spped', _this.currentSpeed, {
            duration: 2,
            startVal: 0
          });

          if (!demo.error) {
            demo.start();
          } else {
            console.error(demo.error);
          }

          _this.SetupSelectBox();
        }, [_this.$mainInfo, _this.$selectGroup]);
      });
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }, {
    key: "CalculateSpeed",
    value: function CalculateSpeed(levelSetting) {
      return this.minSpeed + this.batterySetting.mode[levelSetting[0]] + this.batterySetting.weight[levelSetting[1]] + this.batterySetting.heat[levelSetting[2]];
    }
  }, {
    key: "RenderSpeed",
    value: function RenderSpeed() {
      var getTargetSpeed = this.CalculateSpeed(this.activeLevel);
      var demo = new _countup.CountUp('battery-spped', getTargetSpeed, {
        duration: 2,
        startVal: this.currentSpeed
      });

      if (!demo.error) {
        demo.start();
      } else {
        console.error(demo.error);
      }

      this.currentSpeed = getTargetSpeed;
    }
  }, {
    key: "SelectBoxToggleSetup",
    value: function SelectBoxToggleSetup() {
      $('.selector-block.heat .selection').on('click', function (e) {
        $('.selector-block.heat .selection').toggleClass('show-select');
      });
      $('.selector-block.weight .selection').on('click', function (e) {
        $('.selector-block.weight .selection').toggleClass('show-select');
      });
      $('.selector-block.mode .selection').on('click', function (e) {
        $('.selector-block.mode .selection').toggleClass('show-select');
      });
    }
  }, {
    key: "SetupSelectBox",
    value: function SetupSelectBox() {
      var _this2 = this;

      this.SelectBoxToggleSetup();
      this.$modeList = this.$context.find('.selector-block.mode .select-list li');
      this.$weightList = this.$context.find('.selector-block.weight .select-list li');
      this.$heatList = this.$context.find('.selector-block.heat .select-list li');
      this.$heatList.on('click', function (e) {
        e.stopPropagation();
        $('.selector-block.heat .selection').removeClass('show-select');

        if (!$(e.target).hasClass('active')) {
          _this2.$heatList.removeClass('active');

          $(e.target).addClass('active');
          _this2.activeLevel[2] = $(e.target).index();

          _this2.RenderSpeed();
        }
      });
      this.$modeList.on('click', function (e) {
        e.stopPropagation();
        $('.selector-block.mode .selection').removeClass('show-select');

        if (!$(e.target).hasClass('active')) {
          _this2.$modeList.removeClass('active');

          $(e.target).addClass('active');
          _this2.activeLevel[0] = $(e.target).index();

          _this2.RenderSpeed();
        }
      });
      this.$weightList.on('click', function (e) {
        e.stopPropagation();
        $('.selector-block.weight .selection').removeClass('show-select');

        if (!$(e.target).hasClass('active')) {
          _this2.$weightList.removeClass('active');

          $(e.target).addClass('active');
          _this2.activeLevel[1] = $(e.target).index();

          _this2.RenderSpeed();
        }
      });
    }
  }]);

  return Lithium;
}();

exports.default = Lithium;

/***/ }),
/* 30 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _utils = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var BMS =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function BMS() {
    _classCallCheck(this, BMS);

    this.$context = $('.g5-battery-management-section');
    this.$featureList = $('.g5-battery-management-section .battery-management-feature-list');
    this.$batteryImage = $('.g5-battery-management-section .battery-img');
    this.$effectImage = $('.g5-battery-management-section .effect-img');
    this.$iconFeatures = $('.g5-battery-management-section .battery-functions');
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(BMS, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      (0, _utils.contextInit)(this.$context, [this.$featureList]); // Others

      TweenMax.set(this.$batteryImage, {
        y: -50,
        opacity: 0
      });
      TweenMax.set(this.$iconFeatures, {
        y: 35,
        opacity: 0
      });
      g5Listener.on('bms-anim', function () {
        (0, _utils.contextFadeIn)(_this.$context, function () {
          _this.$effectImage.addClass('animating');

          TweenMax.to(_this.$iconFeatures, 0.7, {
            y: 0,
            opacity: 1
          });
        }, [_this.$featureList, _this.$batteryImage]);
      });
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }]);

  return BMS;
}();

exports.default = BMS;

/***/ }),
/* 31 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _utils = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Sensor =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function Sensor() {
    _classCallCheck(this, Sensor);

    this.$context = $('.g5-smart-sensor-section');
    this.$phoneImg = $('.phone-img-holder img');
    this.$bikeSetting = this.$context.find('.feature-block.bike-setting');
    this.$batteryStatus = this.$context.find('.feature-block.battery-status');
    this.$travelLog = this.$context.find('.feature-block.travel-log');
    this.allowIndicate = true;
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(Sensor, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      this.DoParticleEffect();
      this.SetupSection();
      g5Listener.on('smart-sensor-anim', function () {
        (0, _utils.contextFadeIn)(_this.$context, function () {
          if (window.innerWidth > 768) {
            TweenMax.staggerTo([_this.$bikeSetting, _this.$batteryStatus, _this.$travelLog], 0.5, {
              opacity: 1,
              scale: 1,
              delay: 0.05
            }, 0.2, function () {
              _this.SetupShowInformation();

              _this.DoParallax();
            });
          }
        }, [_this.$phoneImg]);

        _this.SetupShowInformation();
      });
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }, {
    key: "SetupSection",
    value: function SetupSection() {
      (0, _utils.contextInit)(this.$context, [this.$phoneImg]);

      if (window.innerWidth > 768) {
        TweenMax.set(this.$batteryStatus, {
          transformOrigin: '50% 300%',
          opacity: 0,
          scale: 0.25
        });
        TweenMax.set(this.$bikeSetting, {
          transformOrigin: '200% 250%',
          opacity: 0,
          scale: 0.25
        });
        TweenMax.set(this.$travelLog, {
          transformOrigin: '-120% 250%',
          opacity: 0,
          scale: 0.25
        });
      }
    }
  }, {
    key: "DoParticleEffect",
    value: function DoParticleEffect() {
      particlesJS('particle-bg-holder', {
        "particles": {
          "number": {
            "value": 35,
            "density": {
              "enable": true,
              "value_area": 800
            }
          },
          "color": {
            "value": "#c0c6c8"
          },
          "shape": {
            "type": "circle",
            "stroke": {
              "width": 0,
              "color": "#000000"
            },
            "polygon": {
              "nb_sides": 3
            },
            "image": {
              "src": "img/github.svg",
              "width": 100,
              "height": 100
            }
          },
          "opacity": {
            "value": 0.5,
            "random": false,
            "anim": {
              "enable": false,
              "speed": 1,
              "opacity_min": 0.1,
              "sync": false
            }
          },
          "size": {
            "value": 3,
            "random": false,
            "anim": {
              "enable": false,
              "speed": 40,
              "size_min": 0.1,
              "sync": false
            }
          },
          "line_linked": {
            "enable": true,
            "distance": 208,
            "color": "#c0c6c8",
            "opacity": 0.42490419612936353,
            "width": 1.5
          },
          "move": {
            "enable": true,
            "speed": 6,
            "direction": "none",
            "random": false,
            "straight": false,
            "out_mode": "out",
            "bounce": false,
            "attract": {
              "enable": false,
              "rotateX": 600,
              "rotateY": 1200
            }
          }
        },
        "interactivity": {
          "detect_on": "canvas",
          "events": {
            "onhover": {
              "enable": false,
              "mode": "repulse"
            },
            "onclick": {
              "enable": false,
              "mode": "push"
            },
            "resize": true
          },
          "modes": {
            "grab": {
              "distance": 400,
              "line_linked": {
                "opacity": 1
              }
            },
            "bubble": {
              "distance": 400,
              "size": 40,
              "duration": 2,
              "opacity": 8,
              "speed": 3
            },
            "repulse": {
              "distance": 200,
              "duration": 0.4
            },
            "push": {
              "particles_nb": 4
            },
            "remove": {
              "particles_nb": 2
            }
          }
        },
        "retina_detect": true
      }, function () {
        console.log('callback - particles.js config loaded');
      });
    }
  }, {
    key: "SetupShowInformation",
    value: function SetupShowInformation() {
      $('.feature-block').on('mouseover', function (e) {
        var parent = $(e.target).parents('.feature-block');
        parent.addClass('show-content');
      });
      $('.feature-block').on('mouseleave', function (e) {
        $('.feature-block').removeClass('show-content');
      });
    } // Mouse parallax Effect

  }, {
    key: "DoParallax",
    value: function DoParallax() {
      var _this2 = this;

      if (window.innerWidth > 767) {
        var $parallaxBg = this.$context.find('.parallax-bg');
        var $parallaxMain = this.$context.find('.feature-block');
        this.$context.on('mousemove', function (e) {
          var coreData = {
            offsetX: e.clientX,
            offsetY: e.clientY,
            core: {
              x: _this2.$context.width() / 2,
              y: _this2.$context.height() / 2
            }
          };
          var calculatedData = {
            xMove: 13 * (coreData.offsetX - coreData.core.x) / coreData.core.x,
            yMove: 13 * (coreData.offsetY - coreData.core.y) / coreData.core.y
          };
          TweenMax.to($parallaxMain, 0.5, {
            x: -calculatedData.xMove,
            y: -calculatedData.yMove
          });
          TweenMax.to($parallaxBg, 0.5, {
            x: calculatedData.xMove * 3,
            y: calculatedData.yMove * 3
          });
        });
      }
    }
  }]);

  return Sensor;
}();

exports.default = Sensor;

/***/ }),
/* 32 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _utils = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var GPS =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function GPS() {
    _classCallCheck(this, GPS);

    this.$context = $('.g5-smart-gps-section');
    this.$phoneImg = $('.g5-smart-gps-section .phone-image img');
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(GPS, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      (0, _utils.contextInit)(this.$context, [this.$phoneImg]);
      g5Listener.on('gps-anim', function () {
        (0, _utils.contextFadeIn)(_this.$context, function () {
          console.log('Finished');
        }, [_this.$phoneImg]);
      });
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }]);

  return GPS;
}();

exports.default = GPS;

/***/ }),
/* 33 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _utils = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Lock =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function Lock() {
    _classCallCheck(this, Lock);

    this.$context = $('.g5-touch-unlock');
    this.$mainImg = $('.g5-touch-unlock .effect-holder');
    this.$powerBtnImg = $('.g5-touch-unlock .effect-light-holder .power-btn img');
    this.$leftArrows = $('.g5-touch-unlock .effect-light-holder .light-left img');
    this.$rightArrows = $('.g5-touch-unlock .effect-light-holder .light-right img');
    this.lockTimeline = new TimelineMax({
      paused: true
    });
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(Lock, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      this.InitSection();
      g5Listener.on('lock-anim', function () {
        (0, _utils.contextFadeIn)(_this.$context, function () {
          _this.$mainImg.addClass('start-animating');

          _this.SetupLockAnimation();
        }, [_this.$mainImg]);
      });
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }, {
    key: "InitSection",
    value: function InitSection() {
      (0, _utils.contextInit)(this.$context, [this.$mainImg]);
    }
  }, {
    key: "SetupLockAnimation",
    value: function SetupLockAnimation() {
      var _this2 = this;

      // Wait 6.5 seconds then to the animation again
      setTimeout(function () {
        _this2.$mainImg.removeClass('start-animating');

        setTimeout(function () {
          _this2.$mainImg.addClass('start-animating');

          _this2.SetupLockAnimation();
        }, 1500);
      }, 6500);
    }
  }]);

  return Lock;
}();

exports.default = Lock;

/***/ }),
/* 34 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _countup = __webpack_require__(1);

var _utils = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Scan =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function Scan() {
    _classCallCheck(this, Scan);

    this.$phoneHolder = $('.g5-analyze-bike-section .phone-holder');
    this.$finishStatus = $('.finish-status');
    this.$checkingStatus = $('.checking-context');
    this.$bikeImage = $('.g5-analyze-bike-section .bike-img');
    this.$bikeHolder = $('.g5-analyze-bike-section .bike-holder');
    this.$phoneMap = $('.g5-analyze-bike-section .phone-mapping-holder');
    this.$vcuController = $('.bike-context-item.vcu-controller');
    this.$vcuControllerContext = this.$vcuController.find('.img-holder');
    TweenMax.set(this.$vcuControllerContext, {
      opacity: 0,
      scale: 0,
      transformOrigin: '0% 100%'
    });
    this.$batteryAnalyze = $('.bike-context-item.battery');
    this.$batteryAnalyzeContext = this.$batteryAnalyze.find('.img-holder');
    TweenMax.set(this.$batteryAnalyzeContext, {
      opacity: 0,
      scale: 0,
      transformOrigin: '0% 45%'
    });
    this.$controlCenter = $('.bike-context-item.center');
    this.$controlCenterContext = this.$controlCenter.find('.img-holder');
    TweenMax.set(this.$controlCenterContext, {
      opacity: 0,
      scale: 0,
      transformOrigin: '0% 75%'
    });
    TweenMax.set(this.$bikeHolder, {
      y: -3,
      x: -50,
      scale: 0.95,
      opacity: 0
    });
    TweenMax.set(this.$phoneHolder, {
      y: 50
    });
    TweenMax.set(this.$finishStatus, {
      y: 50,
      scale: 0.8,
      opacity: 0
    });
    this.$context = $('.g5-analyze-bike-section');
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(Scan, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      (0, _utils.contextInit)(this.$context);
      g5Listener.on('scan-anim', function () {
        (0, _utils.contextFadeIn)(_this.$context, function () {
          _this.DoCheckingAnimationEffect();
        });
      });
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }, {
    key: "DoCheckingAnimationEffect",
    value: function DoCheckingAnimationEffect() {
      var isMobile = false;

      if (window.innerWidth <= 768) {
        isMobile = true;
      }

      TweenMax.set($('rect'), {
        opacity: 0
      });
      TweenMax.set(this.$phoneMap, {
        y: 60
      });
      var timeline = new TimelineMax({
        paused: true
      });
      timeline.add([TweenMax.to([this.$bikeHolder, this.$phoneHolder], 1, {
        opacity: 1,
        y: 0,
        x: 0,
        scale: 1,
        onComplete: this.RunAnalyze
      })]);
      timeline.add(TweenMax.staggerTo('rect', 0.2, {
        opacity: 1
      }, 0.01));
      timeline.add([TweenMax.to(this.$finishStatus, 0.5, {
        y: 0,
        scale: 1,
        opacity: 1
      }), TweenMax.to(this.$checkingStatus, 0.3, {
        y: -15,
        scale: 0.7,
        opacity: 0
      })]);
      var point = this.$vcuController.find('.point');
      timeline.add([TweenMax.to(point, 0.5, {
        opacity: 1
      }), TweenMax.to(this.$vcuControllerContext, 0.5, {
        opacity: 1,
        scale: 1
      })]);
      point = this.$controlCenter.find('.point');
      timeline.add([TweenMax.to(point, 0.5, {
        opacity: 1
      }), TweenMax.to(this.$controlCenterContext, 0.5, {
        opacity: 1,
        scale: 1
      })], '-=0.22');
      point = this.$batteryAnalyze.find('.point');
      timeline.add([TweenMax.to(point, 0.5, {
        opacity: 1
      }), TweenMax.to(this.$batteryAnalyzeContext, 0.5, {
        opacity: 1,
        scale: 1
      })], '-=0.22');

      if (!isMobile) {
        timeline.add([TweenMax.to(this.$bikeHolder, 0.3, {
          opacity: 0,
          x: 40
        }), TweenMax.to(this.$phoneHolder, 0.3, {
          opacity: 0,
          x: -40
        })], '+=1');
      } else {
        timeline.add([TweenMax.to(this.$phoneHolder, 0.3, {
          opacity: 0,
          y: 40
        })], '+=1');
      }

      timeline.add(TweenMax.to(this.$phoneMap, 0.5, {
        opacity: 1,
        y: 0
      }), '+=0.25');
      timeline.play();
    }
  }, {
    key: "RunAnalyze",
    value: function RunAnalyze() {
      var options = {
        duration: 1.2,
        useEasing: false
      };
      var demo = new _countup.CountUp('percent-value', 100, options);

      if (!demo.error) {
        demo.start();
      } else {
        console.error(demo.error);
      }

      var wave = $('.analyze-wave');
      wave.addClass('checking');
    }
  }, {
    key: "ShowSuccess",
    value: function ShowSuccess() {}
  }]);

  return Scan;
}();

exports.default = Scan;

/***/ }),
/* 35 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _utils = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Water =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function Water() {
    _classCallCheck(this, Water);

    this.$context = $('.g5-water-resist-section');
    this.$waterBG = $('.g5-water-resist-section .background img');
    this.$bikeImage = $('.g5-water-resist-section .bike-img');
    this.$splashImage = $('.splash-item img');
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(Water, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      (0, _utils.contextInit)(this.$context, [this.$waterBG]);
      TweenMax.set(this.$bikeImage, {
        opacity: 0,
        y: -35
      });
      TweenMax.set(this.$splashImage, {
        opacity: 0,
        y: -3
      });
      g5Listener.on('water-anim', function () {
        (0, _utils.contextFadeIn)(_this.$context, function () {
          TweenMax.to(_this.$splashImage, 0.3, {
            opacity: 1
          });
        }, [_this.$waterBG, _this.$bikeImage, _this.$splashImage]);
      });
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }]);

  return Water;
}();

exports.default = Water;

/***/ }),
/* 36 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _utils = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Frame =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function Frame() {
    _classCallCheck(this, Frame);

    this.$context = $('.g5-steel-frame-section');
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(Frame, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      (0, _utils.contextInit)(this.$context);
      g5Listener.on('frame-anim', function () {
        (0, _utils.contextFadeIn)(_this.$context, function () {
          console.log('Finished');
        });
      });
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }]);

  return Frame;
}();

exports.default = Frame;

/***/ }),
/* 37 */
/***/ (function(module, exports, __webpack_require__) {

"use strict";


Object.defineProperty(exports, "__esModule", {
  value: true
});
exports.default = void 0;

var _utils = __webpack_require__(0);

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

function _defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } }

function _createClass(Constructor, protoProps, staticProps) { if (protoProps) _defineProperties(Constructor.prototype, protoProps); if (staticProps) _defineProperties(Constructor, staticProps); return Constructor; }

var Accessories =
/*#__PURE__*/
function () {
  /* ===================================
   *  CONSTRUCTOR
   * =================================== */
  function Accessories() {
    _classCallCheck(this, Accessories);

    this.$context = $('.g5-accessory-section');
    this.$caccHolder = $('.g5-accessory-section .accessories-holder');
    this.bindEvents();
  }
  /* ===================================
   *  EVENTS
   * =================================== */


  _createClass(Accessories, [{
    key: "bindEvents",
    value: function bindEvents() {
      var _this = this;

      (0, _utils.contextInit)(this.$context, [this.$caccHolder]);
      g5Listener.on('acc-anim', function () {
        (0, _utils.contextFadeIn)(_this.$context, function () {
          console.log('Finished');
        }, [_this.$caccHolder]);
      });
    }
    /* ===================================
     *  METHODS
     * =================================== */

  }]);

  return Accessories;
}();

exports.default = Accessories;

/***/ })
/******/ ]);