<?php
require_once __DIR__."/../adminUserLoginScript.php";


class AdminUserLoginModel
{
    private $mail;
    private $password;

    function __construct($mail, $password)
    {
        $this->mail = $mail;
        $this->password = $password;
        $this->mapper = new AdminUserLoginMapper($mail, $password);
    }

    public function isExistsAccount()
    {
        return $this->mapper->accountFetch();
    }

    

    public function addLoginSession()
    {
        session_start();

        session_regenerate_id(true);

        $_SESSION['userId'] = $this->userIdFetch();
    }

    private function userIdFetch()
    {
        $userColums = $this->mapper->fetch();

        $userId = $userColums["id"];

        return $userId;
    }

}

?>