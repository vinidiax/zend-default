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
			],
			'register' => [
				'type' => 'segment',
				'options' => [
					'route' => '/site/register[/:action]',
					'constraints' => [
						'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
						'id' => '[0-9]+'
					],
					'defaults' => [
						'controller'    =>  Controller\RegisterController::class,
						'action'        =>  'index'
					]
				]
			]
		]
	],
	
	'view_manager'  =>  [
		'template_path_stack'   =>  [
			'site' =>  __DIR__."/../view"
			
		]
	]
];