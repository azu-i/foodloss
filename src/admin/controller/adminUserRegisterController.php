<?php

require_once __DIR__."/../model/AdminUserRegisterModel.php";

$name = htmlspecialchars($_POST["name"], ENT_QUOTES, "UTF-8");
$mail = htmlspecialchars($_POST["mail"], ENT_QUOTES, "UTF-8");
$password = htmlspecialchars($_POST["password"], ENT_QUOTES, "UTF-8");

echo json_decode($name);
exit;
?>