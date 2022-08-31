<?php
require_once __DIR__."/../adminUserScript.php";



class AdminUserModel
{
    private $userId;


    function __construct($userId)
    {
        $this->userId = $userId;
        $this->pdoc = new PDOC();
    }

    public function accountFetch()
    {
        $sql = sprintf(
            "SELECT
             *
            FROM
            `admin-user`
            WHERE
            `id` = %s",
            $this->userId
        );
        return $this->pdoc->selectSql($sql);

    }

}
?>