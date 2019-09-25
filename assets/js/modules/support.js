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
        console.log('Bind Event');
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
}