<?php

require_once __DIR__ . '/../Bootstrap/autoload.php';

use App\Core\Functions;
use App\Core\Router;


$router = new Router();
$router->get('/','HomeController@index');

$router->dispatch();
