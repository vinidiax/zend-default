<?php

namespace Admin;


use Admin\Controller\LoginController;
use Admin\Model\Factory\UserTableGatewayFactory;
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
                Model\UserTableGateway::class => UserTableGatewayFactory::class
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