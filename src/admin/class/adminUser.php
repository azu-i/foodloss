<?php

require_once __DIR__."/model/AdminUserModel.php";

if( !empty($_SESSION["userId"]) ) {
    $userId = $_SESSION["userId"];

    $adminUser = new AdminUserModel($userId);

    $var = $adminUser->accountFetch();
}



?>