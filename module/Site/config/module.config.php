<?php

namespace Site;

return [
	'controllers'   =>  [
		'factories' =>  [
			#Controller\LoginController::class => InvokableFactory::class
		]
	],
	
	'router' => [
		'routes' => [
			'site' => [
				'type' => 'literal',
				'options' => [
					'route' => '/site',
					'defaults' => [
						'controller'    =>  Controller\IndexController::class,
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