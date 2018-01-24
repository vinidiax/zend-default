<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 24/01/2018
 * Time: 08:33
 */

namespace UserTest\Model;


use User\Model\User;
use User\Model\UserTable;
use Zend\Db\ResultSet\ResultSetInterface;
use Zend\Db\TableGateway\TableGatewayInterface;

class UserTableTest extends \PHPUnit\Framework\TestCase
{

    private $userTable;
    private $tableGateway;

    protected function setUp()
    {
        $this->tableGateway = $this->prophesize(TableGatewayInterface::class);
        $this->userTable = new UserTable($this->tableGateway->reveal());
    }

    public function testFetchAllUser()
    {
        $resultSet = $this->prophesize(ResultSetInterface::class)->reveal();
        $this->tableGateway->select()->willReturn($resultSet);
        $this->assertSame($resultSet, $this->userTable->fetchAll());
    }

    public function testSaveNewUser()
    {
        $userData = [
            'address_id' => 1,
            'user_name' => 'Vinicius',
            'user_email' => 'vinidiax@gmail.com',
            'user_self_description' => 'Teste de descrição',
            'user_login' =>  'vinidiax',
            'user_last_name' => 'Dias Fernandes',
            'user_document_id' => '059.578.569-75',
            'user_gender'    => 1,
            'user_birth_date' => '11/02/1986',
            'user_photo'     => 'http://linkparafoto.com',
            'user_registered_date' => date('Y-m-dd'),
            'user_registered_time' => time(),
            'user_total_score'     => 5,
            'user_contact_phone' => '48999236161'
        ];
        $user = new User();
        $user->exchangeArray($userData);
        $this->tableGateway->insert($userData)->shouldBeCalled();
        $this->userTable->insert($user);
    }

    public function testIfAnUserCanBeDeleted()
    {
        $this->tableGateway->delete(['user_id' => 123])->shouldBeCalled();
        $this->userTable->delete(123);
    }

}