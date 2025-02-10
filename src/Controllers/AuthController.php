<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Role;
use App\Models\User;
use Exception;


class AuthController extends Controller
{
    private Role $role;
    private User $user;
    private $twig;
    public function __construct()
    {
        $this->user = new User();
        $this->role = new Role();
    }

    public function showRegister()
    {
        $this->render('Client/register', []);
    }

    public function showLogin()
    {
        $this->render('Client/login', []);
    }

    public function register()
    {

        try {
            // $this->validation($registerForm);

            $role  = new Role();
            $role->instanceWithName($_POST['role_name']);
            $role = $role->findByName($role->getName());

            $user = new User();
            $user->instanceForRegister(
                $_POST['firstname'],
                $_POST['lastname'],
                $_POST['password'],
                $_POST['email'],
                $role
            );

            $user->create();

            if ($user) {
                $_SESSION['user'] = $user;
            }
        } catch (Exception $e) {
            $_SESSION['register_error'] =  $e->getMessage();
        }
    }
}
