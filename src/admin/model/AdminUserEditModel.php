<?php
ini_set('display_errors', "On");
require_once __DIR__."/../../class/PDOC.php";

class AdminUserEditModel
{
    private $name;
    private $address;
    private $introduce;
    private $userId;

    public function __construct($name, $address, $introduce, $userId) {
        $this->name = $name;
        $this->address = $address;
        $this->introduce = $introduce;
        $this->userId = $userId;
        $this->pdoc = new PDOC();
    }




    public function insert()
    {

        $sql = sprintf("
            UPDATE
            `admin-user`
            SET
            `name` = '%s',
            `address` = '%s',
            `introduction` = '%s'
            WHERE
            `id` = '%s'",
            $this->name,
            $this->address,
            $this->introduce,
            $this->userId
        );

        $result = $this->pdoc->insertSql($sql);

        return $result;
    }
}


?>