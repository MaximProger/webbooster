$('#sendMail').on('click', function() {
    const name = $('#name').val().trim();
    const phone = $('#phone').val().trim();
    const email = $('#email').val().trim();
    const product = $('#product').val().trim();

    // Валидация
    if (name == '') {
        $('#errorMess').text("Введите имя");
        return false;
    } else if (phone == '') {
        $('#errorMess').text("Введите телефон");
        return false;
    } else if (email == '') {
        $('#errorMess').text("Введите email");
        return false;
    } else if (product == '') {
        $('#errorMess').text("Не указано название товара");
        return false;
    }

    $('#errorMess').text("");

    $.ajax({
        url: 'ajax/mail.php',
        type: 'POST',
        cache: false,
        data: {'name' : name, 'email' : email, 'phone' : phone, 'product' : product},
        dataType: 'html',
        beforeSend: function() {
            $('#sendMail').prop("disabled", true);
        },
        success: function(data) {
            if (!data) {
                alert('Были ошибки, сообщение не отправлено!');
            } else {
                $('#mailForm').trigger('reset');
                $('.modal__mask').removeClass('active');
            }
            $('#sendMail').prop("disabled", false);
        }
    });
})