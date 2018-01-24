<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 19/01/2018
 * Time: 10:41
 */

namespace User\Model;

use Zend\Db\Exception\RuntimeException;
use Zend\Db\TableGateway\TableGatewayInterface;

class UserTable
{
    private $tableGateway;

    public function __construct(TableGatewayInterface $tableGateway)
    {
        $this->tableGateway = $tableGateway;
    }

    public function fetchAll()
    {
        return $this->tableGateway->select();
    }


    public function delete($userId)
    {
        $this->tableGateway->delete(['user_id' => (int)$userId]);
    }

    public function insert(User $user)
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

        $userId = (int)$user->getUserId();

        if($userId === 0)
        {
            $this->tableGateway->insert($userData);
            return;
        }

        if(!$this->find($userId))
        {
            throw new RuntimeException(sprintf(
                    'Could not retrieve the row %d', $userId
            ));
        }

    }

    public function find($userId)
    {
        $userId = (int)$userId;
        $rowset = $this->tableGateway->select(['userId' => $userId]);
        $row = $rowset == null ? null : $rowset->current();
        if (!$row) {
            throw new RuntimeException(sprintf(
                    'Could not retrieve the row %d', $userId
            ));
        }
        return $row;
    }
}