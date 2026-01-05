<?php

require_once __DIR__ . '/../Bootstrap/autoload.php';
$config = require __DIR__ . '/../App/Core/Config.php';

use App\Controllers\LogInController;
use App\Core\Functions;
use App\Core\Router;
use App\Core\Session;


Session::start_session();

$router = new Router();

//home
$router->get('/', 'HomeController@index');

//register
$router->get('/register', 'RegisterController@index');
$router->post('/register', 'RegisterController@create_account');

//login
$router->get('/login', 'LogInController@index');
$router->post('/login', 'LogInController@sign_in');

//logout
$router->get('/logout','LogOutController@log_out');

//explore
$router->get('/explore', 'ExploreController@index');

//community page
$router->get('/community', 'CommunityController@index');

//about page
$router->get('/about', 'AboutController@index');

//contact page
$router->get('/contact', 'ContactController@index');

//article
$router->get('/article', 'ArticleController@index');

//profile
$router->get('/profile','ProfileController@index');

//upgrade role
$router->get('/upgrade-role','UpgradeRoleController@index');
$router->post('/upgrade-role','UpgradeRoleController@upgrade');

//

//Author Dashboard
$router->get('/dashboard-author','DashboardAuthorController@index');
$router->post('/delete-article','DashboardAuthorController@delete_article');

//Author create article
$router->get('/create-article','CreateArticleController@index');
$router->post('/store-article','CreateArticleController@post_article');

//Author update article
$router->get('/edit-article','EditArticleController@index');
$router->post('/update-article','EditArticleController@update_article');

//Admin Dashboard
$router->get('/dashboard-admin','DashboardAdminController@index');
$router->post('/dashboard-admin','DashboardAdminController@add_category');
$router->post('/dashboard-admin/edit-category','DashboardAdminController@update_category');
$router->post('/delete-category','DashboardAdminController@delete_category');


$router->dispatch();
