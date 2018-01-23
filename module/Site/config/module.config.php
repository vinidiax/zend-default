<?php

namespace Site;

use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
	'controllers'   =>  [
		'factories' =>  [
			Controller\IndexController::class => InvokableFactory::class
		]
	],
	
	'router' => [
		'routes' => [
			'site' => [
				'type' => 'literal',
				'options' => [
					'route' => '/',
					'defaults' => [
						'controller'    =>  Controller\IndexController::class,
						'action'        =>  'index'
					]
				]
			],
            'site-contact' =>  [
                'type' =>  Segment::class,
                'options' => [
                        'route' => '/contact',
                        'defaults' => [
                                'controller' => Controller\IndexController::class,
                                'action'     => 'contact'
                        ]
                ]
            ],
			'register' => [
				'type' => Segment::class,
				'options' => [
					'route' => '/register[/:action[/:id]]',
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
			 __DIR__."/../view"
			
		]
	]
];