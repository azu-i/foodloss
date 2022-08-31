<?php
$title = "登録情報の変更";
$jsScript ="<script src='/src/admin/js/passwordEdit.js'></script>";

require_once __DIR__."/api/loginAuth.php";
require_once __DIR__."/parts/header.php";


?>


<div class="changeRegisterSummary">
    <h2>商品の登録</h2>
    <p>商品情報を入力し、「次へ」ボタンを押してください。</p>
</div>


<form action="">
    <section class="passwordEditInputOuter">
        <table>
            <tbody>
                <tr>
                    <th>商品名</th>
                    <td><input type="text" name="currentPassword"></td>
                </tr>
                <tr>
                    <th>商品説明</th>
                    <td><textarea name="newPassword"></textarea> </td>
                </tr>
                <tr>
                    <th>内容量</th>
                    <td>
                        <input type="text" name="currentPassword">
                        <select name="" id="">
                            <option value="g">g</option>
                            <option value="kg">kg</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>金額</th>
                    <td><input type="text" name="currentPassword">円</td>
                </tr>
                <tr>
                    <th>個数制限</th>
                    <td>
                        <select name="" id="">
                            <option value="g">選択してください</option>
                            <option value="g">有</option>
                            <option value="kg">無</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>送料</th>
                    <td>
                        <select name="" id="">
                            <option value="g">選択してください</option>
                            <option value="g">購入者負担</option>
                            <option value="kg">出品者負担</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>到着時間指定</th>
                    <td>
                        <select name="" id="">
                            <option value="g">選択してください</option>
                            <option value="g">可</option>
                            <option value="kg">不可</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>注文から発送まで</th>
                    <td><input type="text" name="currentPassword">日</td>
                </tr>
                <tr>
                    <th>画像</th>
                    <td>
                    </td>
                </tr>
            </tbody>
        </table>
        <input type="hidden" name="userId" value="<?= $userId ?>">
        <button type="button" class="nextButton js-passwordEditSubmit">次へ</button>
    </section>
</form>



<?php

require_once __DIR__."/parts/footer.php";
?>

