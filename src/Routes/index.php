<?php

use App\Controllers\front\HomeController;
use App\Controllers\front\UserController;
use App\Router;

$router = new Router;

$router->get('/', HomeController::class, 'index');
$router->get('/user/add', UserController::class, 'add');
$router->dispatch();
