<?php

namespace App\Core\Auth;

use App\Core\Database;
use App\Models\Role;
use App\Models\User;
use Exception;

class AuthController
{
    private Role $role;
    private User $user;

    public function __construct()
    {
        $this->user = new User();
        $this->role = new Role();
    }

    public function register(RegisterForm $registerForm)
    {
        try {
            $this->validation($registerForm);

            $role  = new Role();
            $role->instanceWithName($registerForm->roleName);

            $user = new User();
            $user->instanceWithoutId(
                $registerForm->firstname,
                $registerForm->lastname,
                $registerForm->email,
                $registerForm->password,
                $registerForm->phone,
                $registerForm->photo,
                $registerForm->status,
                $role
            );

            $user = $this->create($user);

            if ($user) {
                $_SESSION['user'] = $user;
            }
        } catch (Exception $e) {
            $_SESSION['error_register'] =  $e->getMessage();
        }
    }

    public function login(LoginForm $loginForm)
    {
        try {
            $this->validation($loginForm);
            $user = new User();
            $user->instaceWithEmailAndPassword(
                $loginForm->email,
                $loginForm->password
            );

            $user =  $this->findByEmailAndPassword($user);

            if ($user->getId() == 0) {
                throw new Exception("Email ou le mot de passe incorrect");
            }
            if ($user) {
                $_SESSION['user'] = $user;
            }
        } catch (Exception $e) {
            $_SESSION['error'] =  $e->getMessage();
        }
    }

    public function logout(): void
    {
        unset($_SESSION['user']);
    }

    // New CODE FROM AUTH SERVICE

    private function validation($forms)
    {
        foreach ($forms as $key => $value) {
            if (!$this->validationString($value)) {
                throw new Exception($key . " is not valide ");
            }
        }

        if (isset($forms->password) && isset($forms->passwordConfirmation)) {
            $this->passwordValidation($forms->password, $forms->passwordConfirmation);
        }
    }

    private function validationString(string $string): bool
    {
        if (empty($string) || $string == null || is_null($string)) {
            return false;
        }

        return true;
    }

    public function passwordValidation(string $password, string $passwordConfirmation)
    {
        if ($password != $passwordConfirmation) {
            throw new Exception("les mots de passe sont pas les mêmes");
        }

        return true;
    }

    // code from user service
    public function create(User $user)
    {
        if ($user->getId() != 0) {
            throw new Exception("invalide value (id)");
        }

        if (empty($user->getFirstname())) {
            throw new Exception("Firstname is empty");
        }

        if (empty($user->getLastname())) {
            throw new Exception("lastname is empty");
        }

        if (empty($user->getEmail())) {
            throw new Exception("email is empty");
        }

        if (empty($user->getPhone())) {
            throw new Exception("phone is empty");
        }

        if (empty($user->getPhoto())) {
            throw new Exception("Photo is empty");
        }

        if (empty($user->getRole()->getName())) {
            throw new Exception("Role name is empty");
        }

        $roleName = $user->getRole()->getName();
        $user->setRole($this->getRoleByName($roleName));

        if ($this->checkEmailifExist($user->getEmail())) {
            throw new Exception("Email is already exist !");
        }

        return $this->user->create($user);
    }

    public function findByEmail(string $email): mixed
    {
        $query = "SELECT id, firstname, lastname, email, phone, photo, role_id, password FROM users WHERE email = '" . $email . "';";
        $stmt = Database::get()->connect()->prepare($query);
        $stmt->execute();

        return $stmt->fetchObject(User::class);
    }

    public function checkEmailifExist(string $email)
    {
        $user = $this->findByEmail($email);

        if ($user != null) {
            return true;
        }

        return false;
    }

    public function getAll()
    {
        return $this->user->getAll();
    }



    public function findByEmailAndPassword(User $user): User
    {
        $query = "SELECT id, firstname, lastname, email, phone, photo, status, role_id, password FROM users WHERE email = '" . $user->getEmail() . "' AND password = '" . $user->getPassword() . "';";
        $stmt = Database::get()->connect()->prepare($query);
        $stmt->execute();

        $user = $stmt->fetchObject(User::class);

        if (!$user) {
            return new User();
        }

        $user->setRole($this->role->findById($user->role_id));

        return $user;
    }

    // from role service 
    public function getRoleByName(string $name)
    {
        if (empty($name)) {
            return false;
        }

        $role = $this->role->findByName($name);

        return $role;
    }

    // public function findByName(string $name)
    // {
    //     $query = "SELECT id, name, description, badge FROM roles WHERE name = '" . $name . "';";
    //     $stmt = Database::get()->connect()->prepare($query);
    //     $stmt->execute();

    //     $result = $stmt->fetchObject(Role::class);
    //     return $result;
    // }
}
