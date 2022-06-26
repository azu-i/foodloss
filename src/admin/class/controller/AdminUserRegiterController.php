<?php

require_once __DIR__."/../class/adminUserRegister.php";
// 管理ユーザー登録に関するController
// データベース接続・処理は一切書かない
// あくまで処理のためのMapper/Modelをつなげるだけに使用する事

class AdminUserRegisterController
{
    private $name;
    private $mail;
    private $password;


    function __construct($name, $mail, $password)
    {
        $this->name = $name;
        $this->mail = $mail;
        $this->password = $password;
        $this->model = new AdminUserRegisterModel($name, $mail, $password);
    }

    public function register()
    {
        $this->model->register();
        
    }
}


?>