export default class Light {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        this.LightSetup();
        this.LightInit();
    }

    /* ===================================
     *  METHODS
     * =================================== */
    LightSetup() {
        this.$lightSection = $('#yadea-ulike-page .section-light-section');
        this.$mainContent = this.$lightSection.find('.main-content');
        this.$effectHolder = this.$lightSection.find('.effect-holder');
        this.$bikeImg = this.$effectHolder.find('.img-holder');
        this.$ledImg = this.$effectHolder.find('.led-effect');

        // Init State For Light Section
        TweenMax.set(this.$mainContent, {opacity: 0, y: moveDistance / 5});
        TweenMax.set(this.$effectHolder, {opacity: 0, scale: 1});
        TweenMax.set(this.$bikeImg, {'-webkit-filter': 'brightness(0.35)'});
        TweenMax.set(this.$ledImg, {opacity: 0});

        // Light Section Timeline
        this.lightTimeline = new TimelineMax({paused: true, onComplete: () => {
            this.LightRepeat();
        }});

        // Timeline Building
        this.lightTimeline.add('anim-start');
        this.lightTimeline.to(this.$effectHolder, 0.5, {opacity: 1});
        this.lightTimeline.add(
            [
                TweenMax.to(this.$bikeImg, 0.85, {'-webkit-filter': 'brightness(1)', ease: Power4.easeIn}),
                TweenMax.to(this.$ledImg, 0.75, {opacity: 1, ease: Power4.easeIn})
            ],
            '-=0.15'
        );

        if(!isMobile){
            this.lightTimeline.to(
                this.$effectHolder, 1.65,
                { scale: 0.38, transformOrigin: '78% 50%', ease: Power2.easeInOut },
                '+=0.65'
            );
        }
        this.lightTimeline.to(this.$mainContent, 0.65, { opacity: 1, y: 0 }, '-=0.5');

    }

    LightInit(){
        ulikeListener.on('light-anim', () => {
            this.lightTimeline.play();
        });
    }

    LightRepeat(){
        setTimeout(() => {
            this.lightRepeatTimeline = new TimelineMax({ repeat: -1, repeatDelay: 5 });
            this.lightRepeatTimeline.to(this.$ledImg, 0.25, { opacity: 0 });
            this.lightRepeatTimeline.to(this.$ledImg, 0.5, { opacity: 1, ease: Power3.easeIn }, '+=1,25');
        }, 4000)
    }
}