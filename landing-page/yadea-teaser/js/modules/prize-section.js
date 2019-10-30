import TweenMax, {Power2, Power3} from 'gsap';

export default class PrizeSection {
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
        this.SetupPrizeDetail()
    }

    /* ===================================
     *  METHODS
     * =================================== */

    SetupPrizeDetail(){
        this.$prizeSection = $('.section.prize-detail');
        this.$prizePhoneImage = this.$prizeSection.find('.prize-list-layout .center-prize .img-holder');
        this.$liveImage = this.$prizeSection.find('.prize-list-layout .center-prize .img-effect-holder');
        this.$prizeTitle = this.$prizeSection.find('.prize-heading');
        this.$subContent = this.$prizeSection
            .find('.prize-list-layout .right-prize, .prize-list-layout .left-prize, .prize-list-layout .center-prize .detail');
        this.$checkGameRule = this.$prizeSection.find('.cta-holder');

        TweenMax.set(this.$prizePhoneImage, {opacity: 0});

        if(window.innerWidth > 768){
            TweenMax.set(this.$liveImage, {scale: 4});
        } else {
            TweenMax.set(this.$liveImage, {scale: 4, transformOrigin: '20% 50%'});
        }

        TweenMax.set(this.$prizeTitle, {opacity: 0, y: 30});
        TweenMax.set([this.$subContent, this.$checkGameRule], {opacity: 0, y: 20});

        this.prizeTimeline = new TimelineMax({paused: true});

        // this.prizeTimeline.add('preAnimation');
        // this.prizeTimeline.add(
        //     TweenMax.to(this.$liveImage, 0.4,{opacity: 1, ease: Power3.easeOut})
        // );
        this.prizeTimeline.add('prizeStart');
        this.prizeTimeline.add([
            TweenMax.to(this.$liveImage, 1.5,{scale: 1.06, delay: 0.15})
        ]);
        this.prizeTimeline.add([
            TweenMax.to(this.$liveImage, 0.65,{scale: 1, opacity: 0}),
            TweenMax.to(this.$prizePhoneImage, 0.725, {opacity: 1, scale: 1})
        ]);

        this.prizeTimeline.add('phoneShowed');
        this.prizeTimeline.add(
            TweenMax.to(this.$prizeTitle, 0.75, {opacity: 1, y: 0, ease: Power2.easeOut }),
        );

        this.prizeTimeline.add(
            TweenMax.to(this.$subContent, 0.5, {opacity: 1, y: 0 }), '-=0.2'
        );

        this.prizeTimeline.add(
            TweenMax.to(this.$checkGameRule, 0.5, {opacity: 1, y: 0 }), '-=0.1'
        );
        this.prizeTimeline.add('animationEnd')

        $(window).on('scroll', (e) => {
            let anchor = this.$prizeSection.offset().top;
            let windowHeight = window.innerHeight

            if( anchor > 0 &&
                window.pageYOffset > anchor - (windowHeight * 0.2) &&
                window.pageYOffset < anchor + (windowHeight * 1) ){

                this.prizeTimeline.tweenTo('animationEnd');
            }

            // if(window.pageYOffset > anchor + (windowHeight * 1.35) || (window.pageYOffset < anchor - (windowHeight * 1))){
            //     if( this.prizeTimeline.progress() == 1 ){
            //         this.prizeTimeline.pause();
            //         this.prizeTimeline.progress(0);
            //     }
            // }
        })
    }
}