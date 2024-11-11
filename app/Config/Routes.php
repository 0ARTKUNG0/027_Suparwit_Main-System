<?php

use CodeIgniter\Router\RouteCollection;

$routes->get('/', 'HomeController::index');
$routes->get('news', 'NewsController::index');
$routes->get('login', 'LoginController::index');
$routes->post('login/auth', 'LoginController::auth');
$routes->get('/register', 'RegisterController::index');
$routes->post('/register/registerUser', 'RegisterController::registerUser');
$routes->get('logout', 'LoginController::logout');