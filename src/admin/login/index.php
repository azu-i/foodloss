<?php
$title = "管理者ログイン";

require_once __DIR__."/../parts/header.php";
?>


<div>
    <form>
        <label for="">email:<input type="text" name="email"></label>
        <label for="">password:<input type="text" name="password"></label>
        <input type="submit" value="送信">
    </form>
    <a href="/src/admin/register">新規登録</a>

</div>


<?php

require_once __DIR__."/../parts/footer.php";
?>


