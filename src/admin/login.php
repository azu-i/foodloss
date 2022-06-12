<?php
$title = "管理者ログイン";
$jsScript = '<script src="/src/admin/js/adminUserLogin.js"></script>';

require_once __DIR__."/parts/header.php";

?>


<div>
    <form>
        <label for="">email:<input type="text" name="email" class="mail"></label>
        <label for="">password:<input type="text" name="password" class="password"></label>
        <input type="button" id="js-adminUserLoginSubmit" class="adminUserLoginSubmit" value="Login">
    </form>
    <a href="/src/admin/register.php">新規登録</a>

</div>
<div>


</div>

<?php

require_once __DIR__."/parts/footer.php";
?>

