<?php
session_start();

use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Router;

$router = new Router();

$router->get('/', HomeController::class, 'index');
$router->get('/register', AuthController::class, 'showRegister');
$router->post('/auth/register', AuthController::class, 'register');
$router->get('/login', AuthController::class, 'showLogin');
$router->post('/auth/login', AuthController::class, 'login');
$router->get('/profile', AuthController::class, 'profile');
$router->get('/auth/logout', AuthController::class, 'logout');

$router->dispatch();
