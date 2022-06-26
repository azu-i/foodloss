<?php

require_once __DIR__."/../adminUserLoginScript.php";
// 管理ユーザー登録に関するController
// データベース接続・処理は一切書かない
// あくまで処理のためのMapper/Modelをつなげるだけに使用する事

class AdminUserLoginController
{
    private $mail;
    private $password;


    function __construct($mail, $password)
    {
        $this->mail = $mail;
        $this->password = $password;
        $this->model = new AdminUserLoginModel($mail, $password);
    }

    public function loginAbleAccount()
    {
        return $this->model->isExistsAccount();
    }

    public function addLoginSession()
    {
        $this->model->addLoginSession();
    }
}


?>