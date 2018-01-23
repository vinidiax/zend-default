<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 19/01/2018
 * Time: 09:52
 */

namespace Admin\Model;

class User
{

    public $userId;
    public $userName;
    public $userEmail;

    public function exchangeArray(array $data)
    {
        $this->userId = (!empty($data['userId']) ? $data['userId'] : null);
        $this->userName = (!empty($data['userName']) ? $data['userName'] : null);
        $this->userEmail = (!empty($data['userEmail']) ? $data['userEmail'] : null);
    }

    public function getArrayCopy()
    {
        return [
            'userId' => $this->userId,
            'userName' => $this->userName,
            'userEmail' => $this->userEmail
        ];
    }
}