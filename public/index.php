<?php

$loader = require '../vendor/autoload.php';
$loader->addPsr4("App\\", dirname(__FILE__) . '/../src/');

$config = require(__DIR__ . '/../config/main.php');

$app = new \Dos0\Framework\Application($config);

$app->run();


/*class foo
{
    public $id = 10;
    public $name = 'Product name';
    public $price = 100;
    public $email = 'do_s@ukr.net';
    public $code = 'XX-0011';
}

$rules = [
    ['id, name', 'required'],
    ['id, price', 'numerical'],
    ['price', ['numerical', 'min' => 10, 'max' => 10000]],
    ['email', 'email'],
    ['code', ['regexp', 'regexp'=>'/[a-zA-Z]{2}-\d{4}/i']],
];

$validator = new Validator(new foo(), $rules);
debug('validate result: ' . (int)$validator->validate());

debug($validator->getErrors());*/





function debug($param)
{
    echo "<pre>";
    print_r($param);
    echo "</pre>";
}