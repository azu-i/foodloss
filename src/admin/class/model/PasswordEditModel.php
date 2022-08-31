<?php
require_once __DIR__."/../../../class/PDOC.php";



class PasswordEditModel
{
    function __construct()
    {
        $this->pdoc = new PDOC();
    }

    public function accountFetch( $userId, $password )
    {
        $sql = sprintf(
            "SELECT
             *
            FROM
            `admin-user`
            WHERE
            `id` = %s",
            $userId
        );

        $user = $this->pdoc->selectSql($sql);

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

    public function accountFetch( $userId, $password )
    {
        $sql = sprintf(
            "SELECT
             *
            FROM
            `admin-user`
            WHERE
            `id` = %s",
            $userId
        );

        $user = $this->pdoc->selectSql($sql);

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

    public function passwordUpdate( $userId, $newPassword )
    {
        $sql = sprintf(
            "UPDATE
            `admin-user`
            SET
            `password` = '%s'
            WHERE
            `id` = '%s'",
            $newPassword,
            $userId
        );

        $result = $this->pdoc->insertSql($sql);

        return $result;

    }

}
?>