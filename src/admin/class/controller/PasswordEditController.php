<?php
require_once __DIR__"/../model/PasswordEditModel.php";

class PasswordEditController
{
    private $userId;
    private $currentPassword;
    private $newPassword;
    private $newConfirmPassword;

    public function __construct( $userId, $currentPassword, $newPassword, $newConfirmPassword ) {
        $this->userId = $userId;
        $this->currentPassword = $currentPassword;
        $this->newPassword = $newPassword;
        $this->newConfirmPassword = $newConfirmPassword;
        $this->model-> = new PasswordEditModel();
    }

    public function run() {
        $return["isvalidPassword"] = $this->isValidCurrentPassword();
        $return["isSameNewPasswords"] = $this->isSameNewPasswords();
        $return["updated"] = 0;

        if( $return["isvalidPassword"] === 1 && $return["isSameNewPasswords"] === 1 ) {
            $this->model->passwordUpdate( $this->userId, $this->newPassword );
            $return["updated"] = 1;
        }

        return $return;

    }

    // 必要なバリデーション
    // ユーザーのパスワードか
    // 確認用と入力したパスが一致しているか

    private function isValidCurrentPassword() {
        $isValid = $this->model->accountFetch( $this->userId, $this->currentPassword );

        if( $isValid ) {
            return 1;
        } else {
            return 0;
        }

    }


    private function isSameNewPasswords() {
        if( $this->newPassword === $this->newConfirmPassword ) {
            return 1;
        } else {
            return 0;
        }

    }
}


?>