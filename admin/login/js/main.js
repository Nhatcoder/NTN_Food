
(function ($) {
    "use strict";


    /*==================================================================
    [ Focus Contact2 ]*/
    $('.input100').each(function () {
        $(this).on('blur', function () {
            if ($(this).val().trim() != "") {
                $(this).addClass('has-val');
            }
            else {
                $(this).removeClass('has-val');
            }
        })
    })


    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');

    $('.validate-form').on('submit', function () {
        var check = true;

        for (var i = 0; i < input.length; i++) {
            if (validate(input[i]) == false) {
                showValidate(input[i]);
                check = false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function () {
        $(this).focus(function () {
            hideValidate(this);
        });
    });

    function validatePhoneNumber(input) {
        if ($(input).attr('type') === 'tel' || $(input).attr('name') === 'sodienthoai') {
            // Sử dụng regex để kiểm tra số điện thoại, ví dụ: +84 123 456 789
            if ($(input).val().trim().match(/^\+(?:[0-9] ?){6,14}[0-9]$/) === null) {
                return false;
            }
        } else {
            // Kiểm tra trường rỗng cho các trường khác
            if ($(input).val().trim() === '') {
                return false;
            }
        }
        return true;
    }

    validatePhoneNumber(input);


    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }


})(jQuery);