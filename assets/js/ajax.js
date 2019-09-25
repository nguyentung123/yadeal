jQuery(document).ready(function($) {
    $('#signup-as-shop-form').submit(function (e) {
        let name = $('#name').val();
        let email = $('#email').val();
        let name_company = $('#company-name').val();
        let website = $('#website').val();
        let message = $('#message').val();
        if (name === '' || email === '') {
            if (name === '')
                $('#name').addClass('error_field');
            else
                $('#name').removeClass('error_field');
            if (email === '')
                $('#email').addClass('error_field');
            else
                $('#email').removeClass('error_field');
            return false;
        }
        else {
            $('.loading-form').show();
            jQuery.ajax({
                type: "post",
                dataType: "json",
                url: ajax_url,
                data: {
                    action: "fc_signup_shop_form",
                    name: name,
                    email: email,
                    name_company: name_company,
                    website: website,
                    message: message
                },
                success: function (response) {
                    if (response.success) {
                        $('#signup-as-shop-form').hide();
                        $('#signup-as-shop .modal-content').append('<h3 class="form-success">Successfull</h3>');
                    }
                }
            });
        }
    });
});