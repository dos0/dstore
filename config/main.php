<?php

return [
    'render' => [
        'userViewPath' => __DIR__ . '/../src/Views',
    ],
    'database' => [
        'driver' => 'pgsql',
        'host' => 'localhost',
        'port' => '5432',
        'name' => 'framework',
        'user' => 'do_s',
        'pass' => '',
    ],

    'routes' => require('routes.php'),
    'serviceMap' => require('services.php'),
    'middlewareMap' => require('middlewares.php'),
];
