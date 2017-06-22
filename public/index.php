<?php

$loader = require '../vendor/autoload.php';
$loader->addPsr4("App\\", dirname(__FILE__) . '/../src/');

$config = require(__DIR__ . '/../config/main.php');

$app = new \Dos0\Framework\Application($config);

$app->run();


function debug($param)
{
    echo "<pre>";
    print_r($param);
    echo "</pre>";
}