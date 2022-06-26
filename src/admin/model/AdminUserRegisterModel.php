<?php
ini_set('display_errors', "On");
require_once __DIR__."/../../class/PDOC.php";

class AdminUserRegiterModel
{
    private $name;
    private $mail;
    private $password;

    public function __construct($name, $mail, $password) {
        $this->name = $name;
        $this->mail = $mail;
        $this->password = $password;
        $this->pdoc = new PDOC();
    }

    public function allValidation()
    {
        $nameValidation = array( "name" => $this->nameValidation());
        $mailValidation = array( "mail" => $this->mailValidation());
        $passwordValidation = array( "password" => $this->passwordValidation());

        if( (int)$nameValidation["name"] === 0 && (int)$mailValidation["mail"] === 0 && (int)$passwordValidation["password"] === 0 ) {
            $success = array( "success" => 0);
        } else {
            $success = array( "success" => 1);
        }

        $validationResult = array_merge($success, $nameValidation, $mailValidation, $passwordValidation);

        return $validationResult;
    }

    private function nameValidation() {
        if( empty($this->name) ) {
            return 1;
        } else {
            return 0;
        }
    }

    private function mailValidation() {
        $pattern = "/^[^@]+@[^@]+$/";
        if( empty($this->mail) ) {
            return 1;
        } else {
            if( !preg_match($pattern, $this->mail ) ) {
                return 2;
            } else {
                if($this->isExitsEmail()) {
                    return 3;
                } else {
                    return 0;
                }
            }
        }
    }

    private function passwordValidation() {
        $pattern = "/^(?=.*?[a-z])(?=.*?[A-Z])(?=.*?\d)[a-zA-Z\d]{8,100}$/";

        if( empty($this->password) ) {
            return 1;
        } elseif (preg_match($pattern, $this->password )) {
            return 0;
        } else {
            return 2;
        }

    }

    private function isExitsEmail() {
        $sql = sprintf("
            SELECT
            `id`
            FROM
            `admin-user`
            WHERE
            `email` = '%s'",
            $this->mail
        );


        $result = $this->pdoc->selectSql($sql);

        return $result;
    }


    public function insert()
    {
        $password = password_hash($this->password,PASSWORD_DEFAULT);

        $sql = sprintf("
            INSERT INTO
            `admin-user`
            (`name`,
            `email`,
            `password`,
            `regidatetime`)
            VALUES
            ('%s',
            '%s',
            '%s',
            '%s')",
            $this->name,
            $this->mail,
            $password,
            date("Y-m-d H:i:s")
        );

        $result = $this->pdoc->insertSql($sql);

        return $result;
    }
}


?>