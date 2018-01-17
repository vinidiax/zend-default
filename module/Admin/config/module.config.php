<?php

namespace Admin;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
	'controllers'   =>  [
		'factories' =>  [
			Controller\LoginController::class => InvokableFactory::class
		]
	],
	
	'router' => [
		'routes' => [
			'admin' => [
				'type' => 'literal',
				'options' => [
					'route' => '/admin',
					'defaults' => [
						'controller'    =>  Controller\LoginController::class,
						'action'        =>  'index'
					]
				]
			]
		]
	],
	
	'view_manager'  =>  [
		'template_path_stack'   =>  [
			'admin' =>  __DIR__."/../view"
		]
	]
];