<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 23/01/2018
 * Time: 19:11
 */

namespace UserTest\Model;

use \User\Model\User;

class UserTest extends \PHPUnit\Framework\TestCase
{
	private $user;
	
	public function setUp()
	{
		$this->user = new User();
	}

    /**
     * @dataProvider collectionData
     */
    public function testEncapsulate($property, $expected)
    {
        $result = $this->user;
        $this->assertInstanceOf(\User\Model\User::class, $result);
        $this->user->{'set' . ucfirst($property)}($expected);
        $actual = $this->user->{'get' . ucfirst($property)}();
        $this->assertEquals($expected, $actual);
    }

    /**
     * @dataProvider collectionData
     */
    public function testExchangeArray($property, $expected)
    {
        $userData = [
            'userId' => 1,
            'addressId' => 1,
            'userName' => 'Vinícius',
            'userEmail' => 'vinidiax@gmail.com',
            'userSelfDescription' => 'Descricao teste',
            'userLogin' =>  'vinidiax',
            'userLastName' => 'Dias Fernandes',
            'userDocumentId' => '059.578.569-75',
            'userGender'    => 1,
            'userBirthDate' => '11/02/1986',
            'userPhoto'     => 'http://linkprafoto.com',
            'userRegisteredDate' => '24/01/2018',
            'userRegisteredTime' => '09:00',
            'userTotalScore'     => 5,
            'userContactPhone' => '48999236161'
        ];

        $this->user->exchangeArray($userData);
        $actual = $this->user->{'get' . ucfirst($property)}();
        $this->assertEquals($actual, $expected);

        return $userData;
    }

    public function testGetArrayCopy()
    {
        $expected = [
                'userId' => 1,
                'addressId' => 1,
                'userName' => 'Vinícius',
                'userEmail' => 'vinidiax@gmail.com',
                'userSelfDescription' => 'Descricao teste',
                'userLogin' =>  'vinidiax',
                'userLastName' => 'Dias Fernandes',
                'userDocumentId' => '059.578.569-75',
                'userGender'    => 1,
                'userBirthDate' => '11/02/1986',
                'userPhoto'     => 'http://linkprafoto.com',
                'userRegisteredDate' => '24/01/2018',
                'userRegisteredTime' => '09:00',
                'userTotalScore'     => 5,
                'userContactPhone' => '48999236161'
        ];

        $this->user->exchangeArray($expected);

        $actual = $this->user->getArrayCopy();

        $this->assertEquals($expected,$actual);


    }

	public function collectionData()
	{
		return [
            ['userId', 1],
			['addressId', 1],
            ['userName', 'Vinícius'],
			['userEmail', 'vinidiax@gmail.com'],
            ['userSelfDescription','Descricao teste'],
            ['userLogin', 'vinidiax'],
            ['userLastName','Dias Fernandes'],
            ['userDocumentId', '059.578.569-75'],
            ['userGender', 1],
            ['userBirthDate', '11/02/1986'],
            ['userPhoto', 'http://linkprafoto.com'],
            ['userRegisteredDate', '24/01/2018'],
            ['userRegisteredTime', '09:00'],
            ['userTotalScore', 5],
            ['userContactPhone', '48999236161']
		];
	}

}