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
		$this->user->{'setUser' . ucfirst($property)}($expected);
		$actual = $this->user->{'getUser' . ucfirst($property)}();
		$this->assertEquals($expected, $actual);
	}
	public function collectionData()
	{
		return [
			['name', 'Vinícius Dias'],
			['email', 'vinidiax@gmail.com'],
			['id', 1]
		];
	}
	
}