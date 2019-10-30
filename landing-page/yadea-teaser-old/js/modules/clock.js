import { TweenMax } from 'gsap';
export default class Home {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        this.$progressCircleDays = $('.time-value-holder.days .progress-circle');
        this.$progressCircleHours = $('.time-value-holder.hours .progress-circle');
        this.$progressCircleMinutes = $('.time-value-holder.minutes .progress-circle');

        this.$remainDateHolder = $('#date-holder');
        this.$remainHoursHolder = $('#hours-holder');
        this.$remainMinsHolder = $('#minutes-holder');

        this.CIRCLE_LENGTH = 270 * Math.PI;

        this.UpdateClockValue();

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        /* === Setup Progress Bar Of All Block === */
        // Minutes
        TweenMax.set(this.$progressCircleMinutes, {
            strokeDasharray: this.CIRCLE_LENGTH,
            strokeDashoffset: this.remainTime.currentSecond / 60 * this.CIRCLE_LENGTH
        });

        //Hours
        TweenMax.set(this.$progressCircleHours, {
            strokeDasharray: this.CIRCLE_LENGTH,
            strokeDashoffset: this.remainTime.currentMins / 60 * this.CIRCLE_LENGTH
        });

        // Days
        TweenMax.set(this.$progressCircleDays, {
            strokeDasharray: this.CIRCLE_LENGTH,
            strokeDashoffset: this.remainTime.currentHour / 24 * this.CIRCLE_LENGTH
        });

        /* === Progress Run === */
        // Second Run
        TweenMax.to(this.$progressCircleMinutes, 60 - this.remainTime.currentSecond , {
            strokeDashoffset: this.CIRCLE_LENGTH,
            ease:Linear.easeNone,
            onComplete: () => {
                this.UpdateClockValue();

                // Start looping and update 2 other clock
                TweenMax.set(this.$progressCircleMinutes, {
                    strokeDasharray: this.CIRCLE_LENGTH,
                    strokeDashoffset: 0,
                });

                TweenMax.to(this.$progressCircleMinutes, 60, {
                    strokeDashoffset: this.CIRCLE_LENGTH,
                    repeat:-1,
                    yoyo:false,
                    ease:Linear.easeNone,
                    onRepeat: this.UpdateClockValue.bind(this),
                });
            }
        });

        // Minutes Run
        TweenMax.to(this.$progressCircleHours, 3600 - this.remainTime.currentMins * 60, {
            strokeDashoffset: this.CIRCLE_LENGTH,
            ease:Linear.easeNone,
            onComplete: () => {

                // Start looping and update 2 other clock
                TweenMax.set(this.$progressCircleHours, {
                    strokeDasharray: this.CIRCLE_LENGTH,
                    strokeDashoffset: 0,
                });

                TweenMax.to(this.$progressCircleHours, 3600, {
                    strokeDashoffset: this.CIRCLE_LENGTH,
                    repeat:-1,
                    yoyo:false,
                    ease:Linear.easeNone,
                });
            }
        });

        // Hours Run
        TweenMax.to(this.$progressCircleDays, 86400 - this.remainTime.currentHour * 3600, {
            strokeDashoffset: this.CIRCLE_LENGTH,
            ease:Linear.easeNone,
            onComplete: () => {

                // Start looping and update 2 other clock
                TweenMax.set(this.$progressCircleDays, {
                    strokeDasharray: this.CIRCLE_LENGTH,
                    strokeDashoffset: 0,
                });

                TweenMax.to(this.$progressCircleDays, 3600, {
                    strokeDashoffset: this.CIRCLE_LENGTH,
                    repeat:-1,
                    yoyo:false,
                    ease:Linear.easeNone,
                });
            }
        });

        this.SetupHomePage();
    }

    /* ===================================
     *  METHODS
     * =================================== */
    SetupHomePage(){
        console.log('SetupHomePage Was Called');
    }

    UpdateClockValue(){
        this.currentTime = new Date();
        this.targetDate = new Date("November 20, 2019 18:00:00");
        this.remainingTime = this.targetDate - this.currentTime;
        this.remainTime = {
            remainDay: Math.floor(this.remainingTime / (1000 * 60 * 60 * 24)),
            remainHours: Math.floor((this.remainingTime / (1000 * 60 * 60)) % 24),
            remainMins: Math.floor((this.remainingTime / (1000 * 60)) % 60),
            remainSecond: Math.floor((this.remainingTime / 1000) % 60),
            currentHour: this.currentTime.getHours(),
            currentMins: this.currentTime.getMinutes(),
            currentSecond: this.currentTime.getSeconds()
        }

        console.log(this.remainTime)

        this.$remainDateHolder.html(this.remainTime.remainDay);
        this.$remainHoursHolder.html(this.remainTime.remainHours);
        this.$remainMinsHolder.html(this.remainTime.remainMins);
    }
}