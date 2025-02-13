<?php
session_start();

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Router;

$router = new Router;

$router->get('/', HomeController::class, 'index');
$router->get('/register', AuthController::class, 'showRegister');
$router->post('/auth/register', AuthController::class, 'register');
$router->get('/auth/logout', AuthController::class, 'logout');

$router->dispatch();
