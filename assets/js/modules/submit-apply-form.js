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
        this.$signupTestDriveForm = $('#signup-test-drive');

        this.SetupAJAXSubmitForm(this.$applyShopForm);
        this.SetupAJAXSubmitForm(this.$signupTestDriveForm);

        // Restrict input to digits and '.' by using a regular expression filter.
        if(document.getElementById("phone-number-input")){
            this.setInputFilter(document.getElementById("phone-number-input"), function(value) {
                return /^\d*\.?\d*$/.test(value);
            });
        }
    }

    setInputFilter(textbox, inputFilter) {
        ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop"].forEach(function(event) {
            textbox.addEventListener(event, function() {
                if (inputFilter(this.value)) {
                    this.oldValue = this.value;
                    this.oldSelectionStart = this.selectionStart;
                    this.oldSelectionEnd = this.selectionEnd;
                } else if (this.hasOwnProperty("oldValue")) {
                    this.value = this.oldValue;
                    this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
                }
            });
        });
    }

    /* ===================================
     *  METHODS
     * =================================== */
    SetupAJAXSubmitForm(formElement){
        let $submitFeedback = formElement.find('.submit-feedback');
        let action = formElement.attr('action');
        let $loadingIcon = formElement.find('.loading-form');
        let callbackLink = formElement.data('callback-link') ? formElement.data('callback-link') : '';
        console.log(callbackLink);
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
                        window.location.replace(callbackLink);
                    }
                }
            });
        });
    }
}