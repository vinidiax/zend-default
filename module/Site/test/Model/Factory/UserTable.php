<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 19/01/2018
 * Time: 10:41
 */

namespace Admin\Model;

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
}