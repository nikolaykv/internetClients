$(document).ready(function () {
    $('.register-user-btn').click(function (event) {
        event.preventDefault();

        let inputs = [
            $('input[name="name"]'),
            $('input[name="surname"]'),
            $('input[name="email"]'),
            $('input[name="password"]')
        ];

        let formData = {
            'name': inputs[0].val(),
            'surname': inputs[1].val(),
            'email': inputs[2].val(),
            'password': inputs[3].val(),
            'action': 'register'
        };

        $.ajax({
            url: '/register-user',
            method: 'POST',
            dataType: 'json',
            cache: false,
            data: formData,
            success: function (data) {
                if (!data.status) {
                    switch (true) {
                        // Имя
                        case data.fields.hasOwnProperty("name_error_required"):
                            inputs[0].addClass("is-invalid").next().text(data.fields.name_error_required);
                            break;
                        case data.fields.hasOwnProperty("name_error_length"):
                            inputs[0].addClass("is-invalid").next().text(data.fields.name_error_length);
                            break;

                        // Фамилия
                        case data.fields.hasOwnProperty("surname_error_required"):
                            inputs[1].addClass("is-invalid").next().text(data.fields.surname_error_required);
                            break;
                        case data.fields.hasOwnProperty("surname_error_length"):
                            inputs[1].addClass("is-invalid").next().text(data.fields.surname_error_length);
                            break;

                        // email
                        case data.fields.hasOwnProperty("email_error_required"):
                            inputs[2].addClass("is-invalid").next().text(data.fields.email_error_required);
                            break;
                        case data.fields.hasOwnProperty("email_error_invalid"):
                            inputs[2].addClass("is-invalid").next().text(data.fields.email_error_invalid);
                            break;

                        // Пароль
                        case data.fields.hasOwnProperty("password_error_required"):
                            inputs[3].addClass("is-invalid").next().text(data.fields.password_error_required);
                            break;
                        case data.fields.hasOwnProperty("password_error_length"):
                            inputs[3].addClass("is-invalid").next().text(data.fields.password_error_length);
                            break;
                    }

                    if (data.type === 2) {
                        $('.alert-danger').removeClass('d-none').addClass('d-block').text(data.fields);
                    }
                } else {
                    $.post('/success', data, function (data) {});
                    window.location.href = "http://localhost/login";
                }
            }
        });
    });

    $('.login-user-btn').click(function (event) {
        event.preventDefault();

        let inputs = [
            $('input[name="email"]'),
            $('input[name="password"]'),
        ];

        let formData = {
            'email': inputs[0].val(),
            'password': inputs[1].val(),
            'action': 'login'
        };

        $.ajax({
            url: '/login-user',
            method: 'POST',
            dataType: 'json',
            cache: false,
            data: formData,
            success: function (data) {

                if (!data.status) {
                    switch (true) {
                        // email
                        case data.fields.hasOwnProperty("email_error_required"):
                            inputs[0].addClass("is-invalid").next().text(data.fields.email_error_required);
                            break;
                        case data.fields.hasOwnProperty("email_error_invalid"):
                            inputs[0].addClass("is-invalid").next().text(data.fields.email_error_invalid);
                            break;

                        // Пароль
                        case data.fields.hasOwnProperty("password_error_required"):
                            inputs[1].addClass("is-invalid").next().text(data.fields.password_error_required);
                            break;
                        case data.fields.hasOwnProperty("password_error_length"):
                            inputs[1].addClass("is-invalid").next().text(data.fields.password_error_length);
                            break;
                    }

                    if (data.type === 2) {
                        $('.alert-danger').removeClass('d-none').addClass('d-block').text(data.fields);
                    }
                } else {
                    $.post('/success', data, function (data) {});
                    window.location.href = "http://localhost/dashboard";
                }
            }
        });
    });

    $('.logout-user-btn').click(function (event) {
       event.preventDefault();

        $.post('/logout', {logout: true}, function(data){

            /*if (true) {
                window.location.href = "http://localhost/";
            }*/
        });
    });
});