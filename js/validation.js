$(document).ready(function () {

    $("#form").submit(function() {
        event.preventDefault();
        $email = $("#email").val(),
        $name = $("#name").val(),
        $surname = $("#surname").val()

        $.ajax({
            type: "POST",
            url: "../php/check.php",
            data: {
                "email"   : $email,
                "name"    : $name,
                "surname" : $surname
            },
            success: function (response) {
                var res =  $.parseJSON(response);
                var $res = $("#res");
                $res.text('');
                (res.emailValid == false)   ? $res.text(res.errorEmail)   : '';
                (res.nameValid == false)    ? $res.text(res.errorName)    : '';
                (res.surnameValid == false) ? $res.text(res.errorSurname) : '';
            },
            error: function (res) {
            }
        });
    });


});
