<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 19/01/2018
 * Time: 09:52
 */

namespace User\Model;

class User
{

    public $userId;
    public $userName;
    public $userEmail;
	
	/**
	 * @return mixed
	 */
	public function getUserId() : int
	{
		return $this->userId;
	}
	
	/**
	 * @param mixed $userId
	 */
	public function setUserId($userId)
	{
		$this->userId = (int)$userId;
	}
	
	/**
	 * @return mixed
	 */
	public function getUserName() : string
	{
		return $this->userName;
	}
	
	/**
	 * @param mixed $userName
	 */
	public function setUserName($userName)
	{
		$this->userName = $userName;
	}
	
	/**
	 * @return mixed
	 */
	public function getUserEmail() : string
	{
		return $this->userEmail;
	}
	
	/**
	 * @param mixed $userEmail
	 */
	public function setUserEmail($userEmail)
	{
		$this->userEmail = $userEmail;
	}

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