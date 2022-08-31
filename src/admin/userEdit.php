<?php
$title = "登録情報の変更";
$jsScript ="<script src='/src/admin/js/adminUserEdit.js'></script>";

require_once __DIR__."/api/loginAuth.php";
require_once __DIR__."/parts/header.php";


?>


<div class="changeRegisterSummary">
    <h2>登録情報の変更</h2>
    <p>登録情報の変更をします。<br />登録したい項目を選択、内容を入力をして、「次へ」ボタンを押してください。</p>
</div>


<form action="/src/admin/userEditComfirm.php"  method="post" enctype="multipart/form-data" class="userEditOuter">
    <section class="currentUser">
        <h2>現在の登録内容</h2>
        <div class="currentUserBox">
            <table>
                <tbody>
                    <tr>
                        <th>名前</th>
                        <td class="currentName"><?= $var["name"] ?></td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td><?= $var["address"] ?></td>
                    </tr>
                    <tr>
                        <th>プロフィール写真</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>紹介文</th>
                        <td><?= $var["introduction"] ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </section>
    <section class="changeculumnCheckOuter">
        <h2>変更したい項目</h2>
        <div class="changeculumnCheckboxOuter">
            <input type="checkbox" name="isChangeName" value="1" id="name" class="changeculumn">
            <label for="name" class="label">名前</label>
            <input type="checkbox" name="isChangeAddress" value="1" id="address" class="changeculumn">
            <label for="address" class="label">住所</label>
            <input type="checkbox" name="isChangeImage" value="1" id="profileImage" class="changeculumn">
            <label for="profileImage" class="label">プロフィール写真</label>
            <input type="checkbox" name="isChangeIntroduce" value="1" id="introduceText" class="changeculumn">
            <label for="introduceText" class="label">紹介文</label>
        </div>
        <div class="changeculumnTextOuter">
            <h2>変更内容</h2>
            <table class="changeculumnTextTableOuter">
                <tbody>
                    <tr class="name changeculumnText">
                        <th>名前</th>
                        <td><input type="text" name="name" value="<?= $var["name"] ?>" required></td>
                    </tr>

                    <tr class="address changeculumnText">
                        <th>住所（市町村まで）</th>
                        <td>
                            <input type="text" class="zip" name="zip01" maxlength="8" placeholder="郵便番号入力してください" onKeyUp="AjaxZip3.zip2addr(this,'','address','address');">
                            <input type="text" name="address" value="<?= $var["address"] ?>" readonly>
                        </td>
                    </tr>

                    <tr class="profileImage changeculumnText">
                        <th>プロフィール写真</th>
                        <td><input type="file"></td>
                    </tr>

                    <tr class="introduceText changeculumnText">
                        <th>紹介文</th>
                        <td><textarea name="introduce" id="" value="<?= $var["introduction"] ?>"></textarea></td>
                    </tr>
                </tbody>
            </table>

            <div class="nextButtonOuter">
                <input type="submit" class="nextButton" name="" value="次へ">
            </div>

        </div>
        

    </section>
</form>



<?php

require_once __DIR__."/parts/footer.php";
?>

