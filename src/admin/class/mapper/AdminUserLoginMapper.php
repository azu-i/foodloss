<?php
require_once __DIR__."/../adminUserLoginScript.php";


class AdminUserLoginMapper
{
    private $mail;
    private $password;

    function __construct($mail, $password)
    {
        $this->mail = $mail;
        $this->password = $password;
        $this->pdoc = new PDOC();
    }

    public function accountFetch()
    {
        $user = $this->fetch();

        if( empty($user) ) {
            return false;
        } else {
            if( password_verify($this->password, $user["password"]) ) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function fetch()
    {
        $sql = sprintf("
            SELECT
            *
            FROM
            `admin-user`
            WHERE
            `email` = '%s'",
            $this->mail
        );

        return $this->pdoc->selectSql( $sql );
    }

}

?>