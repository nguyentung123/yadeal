// Import Lodash As Demo
import Slider from './slider';
import Main from './main';
import Products from './products';
import Supports from './support';
import SliderDetail from './slider-detail';
import FlipClockCustom from './flip-clock-custom';
import SubmitApplyForm from './submit-apply-form';
import DownloadAppSupportPage from '../download-app-page';
import SignupInfo from './_signup-info';

export default class Home {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        // Slider
        this.slider = new Slider();

        // Default Behavior
        this.main = new Main();

        // Products Page
        this.products = new Products();

        // Supports Page
        this.supports = new Supports();

        // Slider detail page
        this.sliderDetail = new SliderDetail();

        // Flip Clock Custom
        this.flipClockCustom = new FlipClockCustom();

        if($('#signup-as-shop-form').length > 0 || $('#signup-test-drive').length > 0){
            let submitApplyForm = new SubmitApplyForm();
        }

        if($('.signup-info-modal').length > 0){
            let signupBuyBike = new SignupInfo();
        }

        if($('#download-app-support-page').length > 0){
            let downloadAppSupportPage = new DownloadAppSupportPage();
        }

        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){
        // Page without any special content takes time to load
        if( $('.no-overlay').length > 0 ){
            if($('#loading-overlay').length > 0){
                $('#loading-overlay').addClass('hidden');
                $(document).trigger('remove-overlay');
            }
        }

        setTimeout(() => {
            if($('#loading-overlay').length > 0 && !$('#loading-overlay').hasClass('hidden')){
                $('#loading-overlay').addClass('hidden');
            }
        }, 3000);
    }



    /* ===================================
     *  METHODS
     * =================================== */

}
