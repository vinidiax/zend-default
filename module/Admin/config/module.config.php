<?php

namespace Admin;


use Zend\Router\Http\Segment;

return [
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
                    __DIR__."/../view"

            ]
    ]
];