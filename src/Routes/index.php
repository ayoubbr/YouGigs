<?php
session_start();

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Router;

$router = new Router;

$router->get('/', HomeController::class, action: 'index');
$router->get('/test', HomeController::class, action: 'test');
$router->get('/register', AuthController::class, 'showRegister');
$router->post('/auth/register', AuthController::class, 'register');
$router->get('/auth/logout', AuthController::class, 'logout');
$router->get('/login', AuthController::class, 'showLogin');
$router->post('/auth/login', AuthController::class, 'login');
$router->get('/profile', AuthController::class, 'profile');



$router->dispatch();
