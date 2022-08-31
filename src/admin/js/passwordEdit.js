$(document).ready(() => {

    $(".js-passwordEditSubmit").click(function(){
        var currentPassword    = $("input[name='currentPassword']").val(),
            newPassword        = $("input[name='newPassword']").val(),
            newConfirmPassword = $("input[name='newConfirmPassword']").val(),
            userId = $("input[name='userId']").val();
            console.log(currentPassword.length());


        $.ajax({
            type: "POST",
            url: "/src/admin/api/passwordEdit.php",
            data: {
                currentPassword    : currentPassword,
                newPassword        : newPassword,
                newConfirmPassword : newConfirmPassword,
                userId             : userId
            },
            dataType: "json",
        })
        .done(function(dataSet) {
            console.log(dataSet);

        })

        .fail(function(jqXHR, textStatus, errorThrown) {
            console.log("jqXHR          : " + jqXHR.status); // HTTPステータスが取得
            console.log("textStatus     : " + textStatus);    // タイムアウト、パースエラー
            console.log("errorThrown    : " + errorThrown.message); // 例外情報
            return false;
        });

    });

})