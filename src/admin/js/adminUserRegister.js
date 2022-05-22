$(document).ready(() => {


    $("#js-adminUserRegisterSubmit").click(function() {
        var name = $(".name").val(),
            mail = $(".mail").val(),
            password = $(".password").val();

        $.ajax({
            type: "POST",
            url: "/src/admin/controller/adminUserRegisterController.php",
            data: {
                name:name,
                mail:mail,
                password:password
            },
            dataType: "json",
        })
        .done(function(data) {
            console.log(data);

        })

        .fail(function() {

        });

    });


})