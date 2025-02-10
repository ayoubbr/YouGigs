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
        $this->render('Shared/register', []);
    }

    public function showLogin()
    {
        $this->render('Shared/login', []);
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

    public function login()
    {
        unset($_SESSION['user']);
        unset($_SESSION['login_error']);

        $user = new User();
        $user->instanceForLogin($_POST['email'], $_POST['password']);

        // $this->validation($loginForm);

        $user =  $user->findByEmailAndPassword();

        if ($user == false) {
            $_SESSION['login_error'] =  "Email ou le mot de passe incorrect";
            $this->render('/Shared/login');
        } else {
            $_SESSION['user'] = $user;
            $this->render('/Shared/profile');
        }
    }
}
