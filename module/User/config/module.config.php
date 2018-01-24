<?php

namespace User;


return [
	'controllers'   =>  [
		'factories' =>  [
			#Controller\LoginController::class => InvokableFactory::class
		]
	],
	
	'router' => [
		'routes' => [
			'user' => [
				'type' => 'literal',
				'options' => [
					'route' => '/user',
					'defaults' => [
						'controller'    =>  Controller\UserController::class,
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