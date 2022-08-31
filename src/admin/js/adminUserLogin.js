$(document).ready(function() {


    $("#js-adminUserLoginSubmit").click(function() {
        var mail = $(".email").val(),
            password = $(".password").val();

            console.log(mail);

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

            console.log(dataSet);
            if( dataSet["success"] === 0 ) {
                window.location.href = "/src/admin/home.php";

            } else {
                alert("ログイン情報が間違えています。")

            }

        })

        .fail(function(jqXHR, textStatus, errorThrown) {
            console.log("jqXHR          : " + jqXHR.status); // HTTPステータスが取得
            console.log("textStatus     : " + textStatus);    // タイムアウト、パースエラー
            console.log("errorThrown    : " + errorThrown.message); // 例外情報
        });

    });


})