$(document).ready(function() {


    $("#js-adminUserRegisterSubmit").click(function() {
        var name = $(".name").val(),
            mail = $(".mail").val(),
            password = $(".password").val();

        $("#js-adminUserRegisterSubmit").attr("id","");

        $.ajax({
            type: "POST",
            url: "/src/admin/api/adminUserRegister.php",
            data: {
                name : name,
                mail : mail,
                password : password
            },
            dataType: "json",
        })
        .done(function(dataSet) {
            if( dataSet.success === 0 ) {
                window.location.href = "/src/admin/registerComplete.php";
            } else {
                alert("登録失敗");
            }

        })

        .fail(function(jqXHR, textStatus, errorThrown) {
            console.log("jqXHR          : " + jqXHR.status); // HTTPステータスが取得
            console.log("textStatus     : " + textStatus);    // タイムアウト、パースエラー
            console.log("errorThrown    : " + errorThrown.message); // 例外情報
        });

    });


})