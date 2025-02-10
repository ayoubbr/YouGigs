<?php

namespace App\Controllers\front;

use App\Models\User;

class UserController
{
    public function add(): void
    {
        $_POST["firstname"] = "elkr,";
        $_POST["lastname"] = "dodo";
        $_POST["email"] = "alrjiaehgoirj@example.com";
        $_POST["password"] = "aamirelamiri";
        $_post["phone"] = "0681554858";
        $_post["photo"] = "iluafoh iuaroj  uhihdmoij   ziu";


        $user = new User();
        $user->instanceWithoutId($_POST["firstname"], $_POST["lastname"], $_POST["email"], $_POST["password"], $_post["phone"], $_post["photo"]);
        $user->add();
    }
    public function fitchAllUsers(): array
    {
        $users = new User;
        $Users = $users->fitcheAllUsers();

        // var_dump($Users);     

        return $Users;
    }
}
// $user = new UserController();
// // $user->add();
// var_dump($user->add());
