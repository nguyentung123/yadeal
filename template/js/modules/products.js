// Import Lodash As Demo
import * as _ from 'lodash';

export default class Products {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        // Elements Variable
        this.$productsControlFilter = $('.products-control__item');
        this.$productControl = $('.products-control');

        this.mobileCaret = '<i class="fa fa-caret-down" aria-hidden="true"></i>';

        this.mobileControl = $('.products-control-mb .action-holder');
        this.mobileControlList = $('#mobile-control-list');

        this.filterStatus = {
            current: 'all',
            allowSwitchState: true,
            context: 'Tất cả'
        }

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        if(this.$productsControlFilter.length > 0 ){
            this.DoFirstFilter();
        }

        if(this.$productsControlFilter){
            this.$productsControlFilter.on('click', (e) => {
                let filterValue = $(e.target).data('target');
                let context = '';

                if($(e.target).hasClass('product-control__item__link')){
                    context = $(e.target).html();
                } else {
                    context = $(e.target).find('.product-control__item__link').html();
                }

                let $currentActive = this.$productControl.find('.products-control__item.active');

                if(filterValue !== this.filterStatus.current && this.filterStatus.allowSwitchState){
                    $currentActive.removeClass('active');
                    $('[data-target=' + filterValue + ']').addClass('active');

                    // Do Filter When State Need To Change
                    this.DoFilter(filterValue, context);

                    this.mobileControlList.slideUp('normal');
                    this.mobileControl.html(this.filterStatus.context + this.mobileCaret)
                }
            });
        }

        // Toggle Controller
        if(this.mobileControl) {
            this.mobileControl.on('click', (e) => {
                this.mobileControlList.slideToggle('normal');
            })
        }
    }



    /* ===================================
     *  METHODS
     * =================================== */
    DoFilter( value, context ){
        this.filterStatus.current = value;
        this.filterStatus.context = context;
        switch(value){
            case 'all':
                let $allElem = $('.series__block');

                // Fake Effect
                $allElem.fadeOut('normal', (e) => {
                    setTimeout( () => {
                        $allElem.fadeIn('normal', (e) => {
                            this.filterStatus.allowSwitchState = true;
                        });
                    }, 500);
                });
                break;
            default:
                let $others = $('.series__block');
                let $target = $('.series__block[data-value=' + value + ']');
                $others.fadeOut('normal', (e) => {});
                setTimeout(() => {
                    $target.fadeIn('normal', (e) => {this.filterStatus.allowSwitchState = true;});
                }, 500);

                break;
        }
    }

    DoFirstFilter(){
        console.log('window.location.href: ' + window.location.href);
        // Get URL
        let url = window.location.href;

        // Get after main URL link
        let afixURL = url.substring(url.lastIndexOf('#') + 1);

        // Get the index of content after the #[ID]
        let firstVarIndex = afixURL.indexOf('?');

        // Define Result to Filter
        let result = '';

        if(firstVarIndex > 0){
            result = afixURL.substring(0, firstVarIndex);
        } else {
            result = afixURL;
        }

        console.log(result);

        switch (result){
            // Nothing Special, keep default filter all
            case 'all':
            case '':
            break;

            // Filter with special input
            default:
                $('.products-control__item.active').removeClass('active');
                $('[data-target = ' + result + ']').addClass('active');

                // Reproduce the context of result ('l-series' => 'l series')
                this.DoFilter(result, result.replace('-', ' '));
                this.mobileControl.html(this.filterStatus.context + this.mobileCaret)
                break;
        }
    }
}