<?php

namespace Admin;


use Admin\Controller\LoginController;
use Zend\ModuleManager\Feature\ConfigProviderInterface;
use \User\Model\UserTable;

class Module implements ConfigProviderInterface
{
	
	public function getConfig()
	{
		return include __DIR__."/../config/module.config.php";
	}

    public function getControllerConfig()
    {
        return[
            'factories' => [
                LoginController::class => function($container)
                {
                    return new LoginController(
                        $container->get(UserTable::class)
                    );
                }
            ]
        ];
    }


}