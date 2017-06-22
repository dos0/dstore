<?php

return [

    'blog' => [
        'pattern' => '/blog',
        'method' => 'GET',
        'action' => 'App\Controller\BlogController@index',
    ],
    
    'backend' => [
        'pattern' => '/backend',
        'method' => 'GET',
        'action' => 'App\Controller\BackendController@index',
        'middleware' => ['log', 'roleAdmin']
    ],
    
    
    /*
    'root' => [
        'pattern' => '/',
        'method' => 'GET',
        'action' => 'App\Controller\IndexController@index',
    ],
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