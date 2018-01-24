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

    private $userId;
    private $addressId;
    private $userName;
    private $userEmail;
    private $userSelfDescription;
    private $userLogin;
    private $userLastName;
    private $userDocumentId;
    private $userGender;
    private $userBirthDate;
    private $userPhoto;
    private $userRegisteredDate;
    private $userRegisteredTime;
    private $userTotalScore;
    private $userContactPhone;

    /**
     * @return mixed
     */
    public function getAddressId()
    {
        return $this->addressId;
    }

    /**
     * @param mixed $addressId
     */
    public function setAddressId($addressId)
    {
        $this->addressId = $addressId;
    }

    /**
     * @return mixed
     */
    public function getUserSelfDescription()
    {
        return $this->userSelfDescription;
    }

    /**
     * @param mixed $userSelfDescription
     */
    public function setUserSelfDescription($userSelfDescription)
    {
        $this->userSelfDescription = $userSelfDescription;
    }

    /**
     * @return mixed
     */
    public function getUserLogin()
    {
        return $this->userLogin;
    }

    /**
     * @param mixed $userLogin
     */
    public function setUserLogin($userLogin)
    {
        $this->userLogin = $userLogin;
    }

    /**
     * @return mixed
     */
    public function getUserLastName()
    {
        return $this->userLastName;
    }

    /**
     * @param mixed $userLastName
     */
    public function setUserLastName($userLastName)
    {
        $this->userLastName = $userLastName;
    }

    /**
     * @return mixed
     */
    public function getUserDocumentId()
    {
        return $this->userDocumentId;
    }

    /**
     * @param mixed $userDocumentId
     */
    public function setUserDocumentId($userDocumentId)
    {
        $this->userDocumentId = $userDocumentId;
    }

    /**
     * @return mixed
     */
    public function getUserGender()
    {
        return $this->userGender;
    }

    /**
     * @param mixed $userGender
     */
    public function setUserGender($userGender)
    {
        $this->userGender = $userGender;
    }

    /**
     * @return mixed
     */
    public function getUserBirthDate()
    {
        return $this->userBirthDate;
    }

    /**
     * @param mixed $userBirthDate
     */
    public function setUserBirthDate($userBirthDate)
    {
        $this->userBirthDate = $userBirthDate;
    }

    /**
     * @return mixed
     */
    public function getUserPhoto()
    {
        return $this->userPhoto;
    }

    /**
     * @param mixed $userPhoto
     */
    public function setUserPhoto($userPhoto)
    {
        $this->userPhoto = $userPhoto;
    }

    /**
     * @return mixed
     */
    public function getUserRegisteredDate()
    {
        return $this->userRegisteredDate;
    }

    /**
     * @param mixed $userRegisteredData
     */
    public function setUserRegisteredDate($userRegisteredDate)
    {
        $this->userRegisteredDate = $userRegisteredDate;
    }

    /**
     * @return mixed
     */
    public function getUserRegisteredTime()
    {
        return $this->userRegisteredTime;
    }

    /**
     * @param mixed $userRegisteredTime
     */
    public function setUserRegisteredTime($userRegisteredTime)
    {
        $this->userRegisteredTime = $userRegisteredTime;
    }

    /**
     * @return mixed
     */
    public function getUserTotalScore()
    {
        return $this->userTotalScore;
    }

    /**
     * @param mixed $userTotalScore
     */
    public function setUserTotalScore($userTotalScore)
    {
        $this->userTotalScore = $userTotalScore;
    }

    /**
     * @return mixed
     */
    public function getUserContactPhone()
    {
        return $this->userContactPhone;
    }

    /**
     * @param mixed $userContactPhone
     */
    public function setUserContactPhone($userContactPhone)
    {
        $this->userContactPhone = $userContactPhone;
    }
	
	/**
	 * @return mixed
	 */
	public function getUserId()
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
        $this->addressId =  (!empty($data['addressId']) ? $data['addressId'] : null);
        $this->userName = (!empty($data['userName']) ? $data['userName'] : null);
        $this->userEmail = (!empty($data['userEmail']) ? $data['userEmail'] : null);
        $this->userSelfDescription = (!empty($data['userSelfDescription']) ? $data['userSelfDescription'] : null);
        $this->userLogin = (!empty($data['userLogin']) ? $data['userLogin'] : null);
        $this->userLastName = (!empty($data['userLastName']) ? $data['userLastName'] : null);
        $this->userDocumentId = (!empty($data['userDocumentId']) ? $data['userDocumentId'] : null);
        $this->userGender = (!empty($data['userGender']) ? $data['userGender'] : null);
        $this->userBirthDate = (!empty($data['userBirthDate']) ? $data['userBirthDate'] : null);
        $this->userPhoto    =   (!empty($data['userPhoto']) ? $data['userPhoto'] : null);
        $this->userRegisteredDate = (!empty($data['userRegisteredDate']) ? $data['userRegisteredDate'] : null);
        $this->userRegisteredTime = (!empty($data['userRegisteredTime']) ? $data['userRegisteredTime'] : null);
        $this->userTotalScore = (!empty($data['userTotalScore']) ? $data['userTotalScore'] : null);
        $this->userContactPhone = (!empty($data['userContactPhone']) ? $data['userContactPhone'] : null);
    }

    public function getArrayCopy()
    {
        return [
            'userId' => $this->userId,
            'addressId' => $this->addressId,
            'userName' => $this->userName,
            'userEmail' => $this->userEmail,
            'userSelfDescription' => $this->userSelfDescription,
            'userLogin' =>  $this->userLogin,
            'userLastName' => $this->userLastName,
            'userDocumentId' => $this->userDocumentId,
            'userGender'    => $this->userGender,
            'userBirthDate' => $this->userBirthDate,
            'userPhoto'     => $this->userPhoto,
            'userRegisteredDate' => $this->userRegisteredDate,
            'userRegisteredTime' => $this->userRegisteredTime,
            'userTotalScore'     => $this->userTotalScore,
            'userContactPhone' => $this->userContactPhone
        ];
    }
}