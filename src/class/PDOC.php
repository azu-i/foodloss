<?php
ini_set('display_errors', "On");

require_once __DIR__."/config.php";

class PDOC {
    private $dbh;

    public function __construct() {
        $this->dbh = new PDO('mysql:dbname='.DBNAME.';host='.DBHOST.';charset=utf8', DBUSER, DBPASS, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    }

    public function selectAllSql($sql){
        $st=$this->dbh;
        $stmt=$st->query($sql);
        $selectItems=$stmt->fetchAll(PDO::FETCH_ASSOC);
        return $selectItems;
    }


    public function selectSql($sql){
        $st=$this->dbh;
        $stmt=$st->query($sql);
        $selectItems=$stmt->fetch(PDO::FETCH_ASSOC);
        return $selectItems;
    }


    public function uplodeSql($sql){
        $st=$this->dbh;
        $stmt=$st->prepare($sql);
        $stmt->execute();
    }

    public function insertSql($sql){
        $st=$this->dbh;
        $stmt=$st->prepare($sql);
        $stmt->execute();
    }

    public function deleteSql($sql){
        $st=$this->dbh;
        $stmt=$st->prepare($sql);
        $stmt->execute();
    }

}

?>