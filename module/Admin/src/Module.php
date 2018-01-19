<?php

namespace Admin;


use Admin\Controller\LoginController;
use Zend\Db\Adapter\AdapterInterface;
use Zend\Db\ResultSet\ResultSet;
use Zend\Db\TableGateway\TableGateway;
use Zend\ModuleManager\Feature\ConfigProviderInterface;

class Module implements ConfigProviderInterface
{
	
	public function getConfig()
	{
		return include __DIR__."/../config/module.config.php";
	}

	public function getServiceConfig()
    {
        return [
            'factories' => [
                Model\UserTable::class => function($container)
                {
                    $tableGateway = $container->get(Model\UserTableGateway::class);
                    return new Model\UserTable($tableGateway);
                },
                Model\UserTableGateway::class => function($container)
                {
                    $dbAdapter = $container->get(AdapterInterface::class);
                    $resultSetPrototype =   new ResultSet();
                    $resultSetPrototype->setArrayObjectPrototype(new Model\User());

                    return new TableGateway('user', $dbAdapter,null, $resultSetPrototype);
                }
            ]
        ];
    }

    public function getControllerConfig()
    {
        return[
            'factories' => [
                LoginController::class => function($container)
                {
                    return new LoginController(
                        $container->get(Model\UserTable::class)
                    );
                }
            ]
        ];
    }


}