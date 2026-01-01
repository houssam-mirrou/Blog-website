<?php

require_once __DIR__ . '/../Bootstrap/autoload.php';

use App\Core\Functions;
use App\Core\Router;


$router = new Router();
$router->get('/','HomeController@index');
$router->get('/register','RegisterController@index');
$router->get('/login','LogInController@index');
$router->get('/explore','ExploreController@index');
$router->get('/community','CommunityController@index');
$router->get('/about','AboutController@index');
$router->get('/contact','ContactController@index');



$router->dispatch();
