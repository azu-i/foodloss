<?php

require_once __DIR__."/../class/controller/PasswordEditController.php";

$userId = htmlspecialchars($_POST["userId"], ENT_QUOTES, "UTF-8");
$currentPassword = htmlspecialchars($_POST["currentPassword"], ENT_QUOTES, "UTF-8");
$newPassword = htmlspecialchars($_POST["newPassword"], ENT_QUOTES, "UTF-8");
$newConfirmPassword = htmlspecialchars($_POST["newConfirmPassword"], ENT_QUOTES, "UTF-8");

$passwordEditController = new PasswordEditController( $userId, $currentPassword, $newPassword, $newConfirmPassword );

$results = $passwordEditController->run();

echo json_encode($results);
exit;
?>