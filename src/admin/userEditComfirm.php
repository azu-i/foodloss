<?php
$title = "登録情報の変更";
$jsScript ="<script src='/src/admin/js/adminUserEdit.js'></script>";

require_once __DIR__."/api/loginAuth.php";
require_once __DIR__."/parts/header.php";

if( !empty($_POST) ) {
    $name = htmlspecialchars($_POST["name"], ENT_QUOTES);
    $address = htmlspecialchars($_POST["address"], ENT_QUOTES);
    $introduce = htmlspecialchars($_POST["introduce"], ENT_QUOTES);
} else {
    $name = "";
    $address = "";
    $introduce = "";
}
?>


<div class="changeRegisterSummary">
    <h2>登録情報変更の確認</h2>
</div>


<form>
    <section class="currentUser">
        <div class="currentUserBox">
            <table>
                <tbody>
                    <tr>
                        <th>名前</th>
                        <td class="changeName"><?= $name ?></td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td class="changeAddress"><?= $address ?></td>
                    </tr>
                    <tr>
                        <th>プロフィール写真</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>紹介文</th>
                        <td class="changeIntroduce"><?= $introduce ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="nextButtonOuter">
            <input type="hidden" name="userId" value="<?= $userId ?>">
            <div class="nextButton userEdit js-adminUserEditButton">登録する</div>
        </div>

    </section>

</form>



<?php

require_once __DIR__."/parts/footer.php";
?>

