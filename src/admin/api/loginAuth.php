<?php
ini_set('display_errors', "On");
session_start();

if( !isset($_SESSION['userId']) ) {
    header( "Location:/src/admin/login.php" );
} else {
    $userId = $_SESSION['userId'];
}

?>
