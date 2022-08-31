<?php

require_once __DIR__."/../class/adminUserLoginScript.php";

$mail = htmlspecialchars($_POST["mail"], ENT_QUOTES);
$password = htmlspecialchars($_POST["password"], ENT_QUOTES);

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