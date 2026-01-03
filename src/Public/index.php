<?php

require_once __DIR__ . '/../Bootstrap/autoload.php';
$config = require __DIR__ . '/../App/Core/Config.php';

use App\Controllers\LogInController;
use App\Core\Functions;
use App\Core\Router;

$router = new Router();

//home
$router->get('/','HomeController@index');

//register
$router->get('/register','RegisterController@index');
$router->post('/register','RegisterController@create_account');

//login
$router->get('/login','LogInController@index');
$router->post('/login','LogInController@sign_in');

//explore
$router->get('/explore','ExploreController@index');

//community page
$router->get('/community','CommunityController@index');

//about page
$router->get('/about','AboutController@index');

//contact page
$router->get('/contact','ContactController@index');

//article
$router->get('/article','ArticleController@index');


$router->dispatch();
