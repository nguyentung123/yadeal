// Import Lodash As Demo
export default class SubmitApplyForm {
    /* ===================================
     *  CONSTRUCTOR
     * =================================== */
    constructor(){
        // Elements Variable
        this.bindEvents();
    }


    /* ===================================
     *  EVENTS
     * =================================== */
    bindEvents(){

        this.$applyShopForm = $('#signup-as-shop-form');
        this.SetupAJAXSubmitForm(this.$applyShopForm);
    }



    /* ===================================
     *  METHODS
     * =================================== */
    SetupAJAXSubmitForm(formElement){
        let $submitFeedback = formElement.find('.submit-feedback');
        let action = formElement.attr('action');
        let $loadingIcon = formElement.find('.loading-form');
        formElement.on('submit', (e) => {
            e.preventDefault();

            var today = new Date();
            var date = today.getFullYear()+'-'+(today.getMonth()+1)+'-'+today.getDate();
            var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();

            formElement.find('input[name=submit_date]').val(date + ' ' + time);
            let data = formElement.serialize();
            $loadingIcon.show();

            $.ajax({
                type : 'GET',
                url : action,
                dataType:'json',
                crossDomain : true,
                data : data,
                success : (data) => {
                    $loadingIcon.hide();
                    if(data == 'false'){
                        $submitFeedback.removeClass('success').addClass('error').html('Đăng ký thông tin không thành công, quý khách vui lòng thử lại');
                    } else {
                        $submitFeedback.removeClass('error').addClass('success').html('Đăng ký nhận thông tin thành công, Yadea sẽ liên hệ lại với bạn');
                    }
                }
            });
        });
    }
}