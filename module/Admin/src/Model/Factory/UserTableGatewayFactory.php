<?php
/**
 * Created by PhpStorm.
 * User: Vinicius
 * Date: 22/01/2018
 * Time: 18:45
 */

namespace Admin\Model\Factory;

use Admin\Model\User;
use Interop\Container\ContainerInterface;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;

class UserTableGatewayFactory
{
	public function __invoke(ContainerInterface $container)
	{
		$dbAdapter = $container->get(AdapterInterface::class);
		$resultSetPrototype =   new ResultSet();
		$resultSetPrototype->setArrayObjectPrototype(new User());
		
		return new TableGateway('user', $dbAdapter,null, $resultSetPrototype);
	}
	
}