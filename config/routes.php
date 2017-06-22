<?php

return [

    // Root
    'root' => [
        'pattern' => '/',
        'method' => 'GET',
        'action' => 'App\Controller\IndexController@index',
    ],

    // Blog
    'get_all_post' => [
        'pattern' => '/post',
        'method' => 'GET',
        'action' => 'App\Controller\PostController@index',
    ],

    'get_one_post' => [
        'pattern' => '/post/{id:\d+}',
        'method' => 'GET',
        'action' => 'App\Controller\PostController@getOnePost',
    ],

    // Backend
    'backend' => [
        'pattern' => '/backend',
        'method' => 'GET',
        'action' => 'App\Controller\BackendController@index',
        'middleware' => ['log', 'roleAdmin']
    ],

    // System
    'system_DI' => [
        'pattern' => '/system/di',
        'action' => 'App\Controller\SystemController@getServices',
    ],
    'system_Config' => [
        'pattern' => '/system/config',
        'action' => 'App\Controller\SystemController@getConfig',
    ],
    'system_Route' => [
        'pattern' => '/system/route',
        'action' => 'App\Controller\SystemController@getRoute',
    ],
    'system_Router' => [
        'pattern' => '/system/router',
        'action' => 'App\Controller\SystemController@getRouter',
    ],
    'system_Error' => [
        'pattern' => '/system/500',
        'action' => 'App\Controller\SystemController@getInvalidMethod',
    ],
    'system_valid' => [
        'pattern' => '/system/valid',
        'action' => 'App\Controller\SystemController@getValid',
    ],
    'system_invalid' => [
        'pattern' => '/system/invalid',
        'action' => 'App\Controller\SystemController@getInvalid',
    ],




/*
    'get_all_goods' =>
        [
            'pattern' => '/good',
            'method' => 'GET',
            'action' => 'App\Controller\GoodController@getAllGoods',
        ],
    'get_one_good' => [
        'pattern' => '/good/{id:\d+}/params/{params:\S+}',
        'method' => 'GET',
        'action' => 'App\Controller\GoodController@getOneGood',
    ]
*/
];