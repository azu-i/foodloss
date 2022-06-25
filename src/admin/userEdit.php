<?php
$title = "登録情報の変更";
$jsScript ="";

require_once __DIR__."/api/loginAuth.php";
require_once __DIR__."/parts/header.php";


?>


<div class="changeRegisterSummary">
    <h2>登録情報の変更</h2>
    <p>登録情報の変更をします。登録したい項目を選択、内容を入力をして、「次へ」ボタンを押してください。</p>
</div>


<form action="">
    <section class="currentUser">
        <h2>現在の登録内容</h2>
        <div class="currentUserBox">
            <table>
                <tbody>
                    <tr>
                        <th>名前</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>住所</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>プロフィール写真</th>
                        <td></td>
                    </tr>
                    <tr>
                        <th>紹介文</th>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
        
    </section>
    <section class="changeculumnCheckOuter">
        <h2>変更したい項目</h2>
        <div class="changeculumnCheckboxOuter">
            <input type="checkbox" name="changeculumn" value="1" id="name">
            <label for="name" class="label">名前</label>
            <input type="checkbox" name="changeculumn" value="1" id="address">
            <label for="address" class="label">住所</label>
            <input type="checkbox" name="changeculumn" value="1" id="profileImage">
            <label for="profileImage" class="label">プロフィール写真</label>
            <input type="checkbox" name="changeculumn" value="1" id="introduceText">
            <label for="introduceText" class="label">紹介文</label>
        </div>
        

    </section>
    <section>
        <h2>変更内容</h2>

        <table>
            <tbody>
                
            </tbody>
        </table>
    </section>
</form>



<?php

require_once __DIR__."/parts/footer.php";
?>

