<?php
session_start();

use App\Controllers\AdminController;
use App\Controllers\AuthController;
use App\Controllers\HomeController;
use App\Controllers\ProjectController;
use App\Router;

$router = new Router;

$router->get('/', HomeController::class, 'index');
$router->get('/register', AuthController::class, 'showRegister');
$router->post('/auth/register', AuthController::class, 'register');
$router->get('/auth/logout', AuthController::class, 'logout');
$router->get('/login', AuthController::class, 'showLogin');
$router->post('/auth/login', AuthController::class, 'login');
$router->get('/profile', AuthController::class, 'profile');
$router->get('/projects', ProjectController::class, 'index');


// Dashboard routes
$router->get('/dashboard', AdminController::class, 'index');
$router->get('/projects', AdminController::class, 'index');
$router->get('/users', AdminController::class, 'index');
$router->get('/orders', AdminController::class, 'index');
$router->get('/categories', AdminController::class, 'index');
$router->get('/skills', AdminController::class, 'index');
$router->get('/settings', AdminController::class, 'index');


$router->dispatch();
