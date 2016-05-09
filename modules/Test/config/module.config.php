<?php

namespace Test;

use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'controllers' => [
        'factories' => [
            Controller\TestController::class => InvokableFactory::class,
        ],
    ],
    'console' => [
        'router' => [
            'routes' => [
                'test' => [
                    'type'    => 'catchall',  // This is the default, and may be omitted; more on
                                                // types below
                        'options' => [
                            'route'    => 'test',
                            'defaults' => [
                                'controller' => Controller\TestController::class,
                                'action'     => 'index',
                            ],
                        ],
                ],
            ],
        ],
    ],
    'view_manager' => [
            'display_not_found_reason' => true,
            'display_exceptions'       => true,
            'doctype'                  => 'HTML5',
            'not_found_template'       => 'error/404',
            'exception_template'       => 'error/index',
            'template_map' => [
                'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
                'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
                'error/404'               => __DIR__ . '/../view/error/404.phtml',
                'error/index'             => __DIR__ . '/../view/error/index.phtml',
            ],
            'template_path_stack' => [
                __DIR__ . '/../view',
            ],
        ],
];