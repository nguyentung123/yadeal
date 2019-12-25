import {TweenMax} from 'gsap/TweenMax';
export default class Supports {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        // Elements Variable
        this.$modalElem = $('.modal');
        this.$modalOverlay = this.$modalElem.find('.modal-overlay');
        this.$closeModal = $('.close-modal');

        this.$openModal = $('#trigger-as-shop');

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        this.$closeModal.on('click', ()=>{this.CloseModal();});
        this.$openModal.on('click', ()=>{this.OpenModal();});

        this.SetupTopicControl();

        this.InitBannerState();
        $(document).on('remove-overlay', () => {
            this.SetupBannerAnimation();
        })
    }



    /* ===================================
     *  METHODS
     * =================================== */
    CloseModal(){
        this.$modalElem.removeClass('active');
    }

    OpenModal(){
        this.$modalElem.addClass('active');
    }

    SetupTopicControl(){
        this.$topicList = $('.support-pages .topic-holder .topic-list');
        this.$mainTopicItem = this.$topicList.find('.topic-item');
        this.$mainTopicToggler = this.$topicList.find('.topic-toggler');

        this.$subTopicItem = this.$topicList.find('.sub-topic-item');
        this.$subTopicToggler = this.$subTopicItem.find('.sub-topic-title');

        // Animation Blocking Flag
        this.allowChangeTopic = true;

        this.$mainTopicToggler.on('click', (e) => {
            if(this.allowChangeTopic){
                // Block interaction until animation finish
                this.allowChangeTopic = false;

                // Related Element
                let $targetTopicItem = $(e.target).parents('.topic-item');
                let $topicContent = $(e.target).siblings('.sub-topic-holder, .topic-context');

                // Choose Other Topic
                if(!$targetTopicItem.hasClass('is-show-topic-content')){

                    // Close Current Active Topic
                    // let $currentActive = $('.is-show-topic-content');
                    // $currentActive.removeClass('is-show-topic-content');
                    // $currentActive.find('.sub-topic-holder, .topic-context').slideUp('fast');

                    // Open New Topic
                    $targetTopicItem.addClass('is-show-topic-content');
                    $topicContent.slideDown('fast', () => {
                        // Reopen animation Blocking
                        this.allowChangeTopic = true;
                    });

                } else {

                    // The Topic Close Itself
                    $targetTopicItem.removeClass('is-show-topic-content');
                    $topicContent.slideUp('fast', () => {
                        // Reopen animation Blocking
                        this.allowChangeTopic = true;
                    });
                }
            }
        });

        this.$subTopicToggler.on('click', (e) => {
            if(this.allowChangeTopic){
                // Block interaction until animation finish
                this.allowChangeTopic = false;

                $(e.target).siblings('.sub-topic-content').slideToggle('fast',  () => {
                    // Reopen animation Blocking
                    this.allowChangeTopic = true;
                })
            }
        })
    }

    InitBannerState(){
        this.$supportBanner = $('.support-pages .common-banner');
        this.$bannerImage = this.$supportBanner.find('.bg-holder');
        this.$bannerContent = this.$supportBanner.find('.main-content');
        TweenMax.set(this.$bannerImage, {opacity: 0, y: window.innerWidth * 0.04});
        TweenMax.set(this.$bannerContent, {opacity: 0, y: window.innerWidth * 0.025});

        this.bannerTimeline = new TimelineMax({paused: true});
        this.bannerTimeline.add(
          TweenMax.to(this.$bannerImage, 0.8, { opacity: 1, y:0, easing: Power4.easeOut }),
          '+=0.85');
        this.bannerTimeline.add(
          TweenMax.to(this.$bannerContent, 0.75, { opacity: 1, y:0 }),
          '-=0.15');
    }

    SetupBannerAnimation(){
        this.bannerTimeline.play();
    }
} 