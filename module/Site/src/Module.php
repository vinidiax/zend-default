<?php

namespace Site;

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
            ]
        ];
    }

    public function getControllerConfig()
    {
        return[
            'factories' => [
                \Site\Controller\IndexController::class => function()
                {
                    return new \Site\Controller\IndexController();
                },
                \Site\Controller\RegisterController::class => function()
                {
                    return new \Site\Controller\RegisterController();
                }
            ]
        ];
    }


}