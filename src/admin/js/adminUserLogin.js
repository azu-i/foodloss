$(document).ready(function() {


    $("#js-adminUserLoginSubmit").click(function() {
        var mail = $(".mail").val(),
            password = $(".password").val();

        $("#js-adminUserLoginSubmit").attr("id","");

        $.ajax({
            type: "POST",
            url: "/src/admin/api/adminUserLogin.php",
            data: {
                mail : mail,
                password : password
            },
            dataType: "json",
        })
        .done(function(dataSet) {
            // success:0 ログイン成功　1ログイン失敗
            console.log(dataSet["success"]);
            if( dataSet["success"] === 0 ) {
                console.log("seikou");
                window.location.href = "/src/admin/home.php";

            } else {
                console.log("sippai");

            }

        })

        .fail(function(jqXHR, textStatus, errorThrown) {
            console.log("jqXHR          : " + jqXHR.status); // HTTPステータスが取得
            console.log("textStatus     : " + textStatus);    // タイムアウト、パースエラー
            console.log("errorThrown    : " + errorThrown.message); // 例外情報
        });

    });


})