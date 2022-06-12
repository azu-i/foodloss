<?php

require_once __DIR__."/../class/adminUserLoginScript.php";

$mail = htmlspecialchars($_POST["mail"], ENT_QUOTES, "UTF-8");
$password = htmlspecialchars($_POST["password"], ENT_QUOTES, "UTF-8");

$controller = new AdminUserLoginController( $mail, $password);

$loginAbleAccount = $controller->loginAbleAccount();

if( $loginAbleAccount ) {
    $results["success"] = 0;
    $controller->addLoginSession();
} else {
    $results["success"] = 1;
}

echo json_encode($results);
exit;
?>