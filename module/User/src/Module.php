<?php

namespace User;


use User\Model\Factory\UserTableFactory;
use User\Model\Factory\UserTableGatewayFactory;
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
                Model\UserTable::class => UserTableFactory::class,
                Model\UserTableGateway::class => UserTableGatewayFactory::class
            ]
        ];
    }
/*
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
*/

}