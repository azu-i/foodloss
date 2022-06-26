<?php
ini_set('display_errors', "On");
require_once __DIR__."/class/PDOC.php";
require_once __DIR__."/class/config.php";


$pdoc = new PDOC();



$results = $pdoc->selectSql("SELECT * FROM `admin-user`");

var_dump($results);



?>