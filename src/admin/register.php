<?php
$title = "管理者新規登録";
$jsScript = '<script src="/src/admin/js/adminUserRegister.js"></script>';

require_once __DIR__."/parts/header.php";
?>


<div>
    <form id="js-adminUserRegisterForm">
        <label for="">name:<input type="text" name="name" class="name"></label>
        <label for="">mail:<input type="text" name="mail" class="mail"></label>
        <label for="">password:<input type="text" name="password" class="password"></label>
        <input type="button" id="js-adminUserRegisterSubmit" class="adminUserRegisterSubmit" value="新規登録">
    </form>

</div>


<?php

require_once __DIR__."/parts/footer.php";
?>


