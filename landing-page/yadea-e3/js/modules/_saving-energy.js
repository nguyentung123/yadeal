import { TweenMax } from "gsap/TweenMax";

export default class SavingEnergy {
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
        // Saving Energy Block 1
        this.SavingEnergy1Setup();
        this.SavingEnergy1Init();

        // Saving Energy Block 2
        this.SavingEnergy2Setup();
        this.SavingEnergy2Init();
    }



    /* ===================================
     *  METHODS
     * =================================== */
    SavingEnergy1Setup(){
        this.$savingEnergy1 = $('.section-saving-energy');
        this.$mainContent1 = this.$savingEnergy1.find('.main-content');
        this.$bikeImage = this.$savingEnergy1.find('.effect-holder');
        this.$backgroundHolder = this.$savingEnergy1.find('.background-holder');

        // Init State
        this.bgHolderHeight = this.$backgroundHolder.height();
        TweenMax.set(this.$mainContent1, { opacity: 0, y: window.innerWidth * 0.02 });
        TweenMax.set(this.$bikeImage, { opacity: 0, x: -window.innerWidth * 0.05 });
        TweenMax.set(this.$backgroundHolder, { y: 0 });

        this.saving1Animation = new TimelineMax({ paused: true });
        this.saving1Animation.add('anim-start');
        this.saving1Animation.add(
            TweenMax.to(this.$backgroundHolder, 1.5, { y: this.bgHolderHeight, ease: Power1.easeOut }),
        );
        this.saving1Animation.add(
            TweenMax.to(this.$bikeImage, 0.75, { opacity: 1, x: 0 }),
            '-=0.35'
        )
        this.saving1Animation.add(
            TweenMax.to(this.$mainContent1, 0.5, { opacity: 1, y: 0 }),
            '-=0.2'
        );
    }

    SavingEnergy1Init(){
        e3Listener.on('saving-energy-anim', () => {
            this.saving1Animation.play();
        })
    }


    SavingEnergy2Setup(){
        this.$savingEnergy2 = $('.section-saving-energy-2');
        this.$mainContent2 = this.$savingEnergy2.find('.main-content');
        this.$savingEnergyGallery = this.$savingEnergy2.find('.saving-energy-feature');

        // Init State
        TweenMax.set(this.$mainContent2, { opacity: 0, y: window.innerWidth * 0.02 });
        TweenMax.set(this.$savingEnergyGallery, { opacity: 0, y: window.innerWidth * 0.03 });

        this.saving2Animation = new TimelineMax({ paused: true });
        this.saving2Animation.add(
            TweenMax.to(this.$mainContent2, 0.5, {opacity: 1, y: 0})
        )
        this.saving2Animation.add(
            TweenMax.to(this.$savingEnergyGallery, 0.75,  { opacity:1, y: 0 })
        )
    }

    SavingEnergy2Init(){
        e3Listener.on('saving-energy-2-anim', () => {
            this.saving2Animation.play();
        });
    }
}