$(document).ready(() => {

    $(".changeculumn").change(function(){
        var chechedChangeCulumn = $(".changeculumn:checked").length,
            checkedId           = $(this).attr("id");
        if( chechedChangeCulumn > 0 ) {
            $(".changeculumnTextOuter").addClass("active");
        } else {
            $(".changeculumnTextOuter").removeClass("active");
        }
        $(".changeculumnTextOuter").find("." + checkedId).toggleClass("active");

    });

    $(".js-adminUserEditButton").click(function(){
        var name      = $(".changeName").text(),
            address   = $(".changeAddress").text(),
            introduce = $(".changeIntroduce").text(),
            userId    = $('input[name="userId"]').val();

        $(".changeName").text(name);
        $(".changeAddress").text(address);
        $(".changeIntroduce").text(introduce);


        $.ajax({
            type: "POST",
            url: "/src/admin/api/adminUserEdit.php",
            data: {
                name : name,
                address : address,
                introduce : introduce,
                userId : userId
            },
            dataType: "text",
        })
        .done(function(dataSet) {
            $(".js-adminUserEditButton").text("登録完了");
            $(".js-adminUserEditButton").removeClass("js-adminUserEditButton");
            $(".js-adminUserEditButton").removeClass("js-adminUserEditButton");

        })

        .fail(function(jqXHR, textStatus, errorThrown) {
            console.log("jqXHR          : " + jqXHR.status); // HTTPステータスが取得
            console.log("textStatus     : " + textStatus);    // タイムアウト、パースエラー
            console.log("errorThrown    : " + errorThrown.message); // 例外情報
        });

    });

})