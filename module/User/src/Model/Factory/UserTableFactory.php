<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 22/01/2018
 * Time: 19:05
 */

namespace User\Model\Factory;

use Interop\Container\ContainerInterface;
use User\Model\UserTable;
use Zend\ServiceManager\Factory\FactoryInterface;
use User\Model;

class UserTableFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $tableGateway = $container->get(Model\UserTableGateway::class);
        return new UserTable($tableGateway);
    }

}