$(document).ready(function () {
    $('.register-user-btn').click(function (event) {
        event.preventDefault();


        let formData = {
            'name': $('input[name="name"]').val(),
            'surname': $('input[name="surname"]').val(),
            'email': $('input[name="email"]').val(),
            'password': $('input[name="password"]').val()

        };

        $.ajax({
            url: '/register-user',
            method: 'POST',
            dataType: 'json',
            cache: false,
            data: formData,
            success: function (data, textStatus, XMLHttpRequest) {
                console.groupCollapsed('success');
                console.log(data);
                console.log(textStatus);
                console.log(XMLHttpRequest);
                console.groupEnd();
            },
            error: function (XMLHttpRequest, textStatus, error) {
                console.groupCollapsed('error');
                console.log(XMLHttpRequest);
                console.log(textStatus);
                console.log(error);
                console.groupEnd();
            },
            complete: function (event, XMLHttpRequest, ajaxOption) {
                console.groupCollapsed('complete');
                console.log(event);
                console.log(XMLHttpRequest);
                console.log(ajaxOption);
                console.groupEnd();
            }
        });
    });
});