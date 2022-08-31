<?php

require_once __DIR__."/../model/AdminUserEditModel.php";

$name = htmlspecialchars($_POST["name"], ENT_QUOTES);
$address = htmlspecialchars($_POST["address"], ENT_QUOTES);
$introduce = htmlspecialchars($_POST["introduce"], ENT_QUOTES);
$userId = htmlspecialchars($_POST["userId"], ENT_QUOTES);


$adminUserEditModel = new AdminUserEditModel($name, $address, $introduce, $userId);


$results = $adminUserEditModel->insert();


echo json_encode($results);
exit;
?>