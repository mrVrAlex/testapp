<?php

return [
    'modules' => [
        'Zend\Filter',
        //'Zend\Mvc\Plugin\Prg',
        //'Zend\Session',
        'Zend\Router',
        'Zend\Mvc\Console',
        'Test',
    ],
    'module_listener_options' => [
        'module_paths' => [
            './modules',
            './vendor',
        ],
        'config_glob_paths' => [
             'config/autoload/{{,*.}global,{,*.}local}.php',
        ],
    ],
];