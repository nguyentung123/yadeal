export default class SignupInfo {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor() {
        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents() {
        this.$openModalBtn = $('.open-october-info-modal');
        this.$closeModalBtn = $('.close-october-info-modal');
        this.$OctoberInfoModal = $('.october-sale-information-modal');

        this.$openModalBtn.on('click', () => {
            this.$OctoberInfoModal.addClass('active');
        });

        this.$closeModalBtn.on('click', () => {
            this.$OctoberInfoModal.removeClass('active');
        })
    }
}