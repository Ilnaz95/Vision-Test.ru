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
            success: function (res) {
                res =  $.parseJSON(res);
                $("#res").text("");
                if (res.emailValid == false)
                {
                    $("#res").text(res.errorEmail);
                }
                if(res.nameValid == false)
                {
                    $("#res").text(res.errorName);
                }
                if(res.surnameValid == false)
                {
                    $("#res").text(res.errorSurname);
                }
            },
            error: function (res) {
            }
        });
    });


});
