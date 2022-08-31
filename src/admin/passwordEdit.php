<?php
$title = "登録情報の変更";
$jsScript ="<script src='/src/admin/js/passwordEdit.js'></script>";

require_once __DIR__."/api/loginAuth.php";
require_once __DIR__."/parts/header.php";


?>


<div class="changeRegisterSummary">
    <h2>パスワードの変更</h2>
    <p>パスワード変更をします。<br />現在のパスワードと新しいパスワードを入力し、「パスワード変更する」ボタンを押してください。</p>
</div>


<form action="">
    <section class="passwordEditInputOuter">
        <h2>パスワード変更</h2>

        <table>
            <tbody>
                <tr>
                    <th>現在のパスワード</th>
                    <td><input type="text" name="currentPassword"></td>
                </tr>
                <tr>
                    <th>新しいパスワード</th>
                    <td><input type="text" name="newPassword"></td>
                </tr>
                <tr>
                    <th>
                        新しいパスワード ※確認用
                        <p class="errorMessage passwordConfirm"></p>
                    </th>
                    <td>
                        <input type="text" name="newConfirmPassword">
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="userId" value="<?= $userId ?>">
        <button type="button" class="nextButton js-passwordEditSubmit">パスワード変更する</button>
    </section>
</form>



<?php

require_once __DIR__."/parts/footer.php";
?>

