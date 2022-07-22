<?php


require_once '../src/Classes/Autoloader.php';

//use Classes\Autoloader;
//use Classes\Main;



use App\Classes\Autoloader;
use App\Classes\Core\Router;
//use App\Classes\User;

Autoloader::register();
$app = new Router();
$app->run();


