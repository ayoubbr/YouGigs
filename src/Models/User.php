<?php

namespace App\Models;

use App\Core\Database;
use PDO;

#[\AllowDynamicProperties]
class User
{
    private int $id = 0;
    private string $firstname = "";
    private string $lastname = "";
    private string $password = "";
    private string $email = "";
    private string $phone = "";
    private string $photo = "";
    private string $status = "";
    private ?Role $role;

    public function __construct() {}

    public function __call($name, $arguments)
    {
        if ($name == 'instanceWithFirstnameAndLastname') {
            if (count($arguments) == 2) {
                $this->firstname = $arguments[0];
                $this->lastname = $arguments[1];
            }
        }

        if ($name == 'instanceWithEmailAndPassword') {
            if (count($arguments) == 2) {
                $this->email = $arguments[0];
                $this->password = $arguments[1];
            }
        }

        if ($name == 'instanceWithoutId') {
            if (count($arguments) == 8) {
                $this->firstname = $arguments[0];
                $this->lastname = $arguments[1];
                $this->password = $arguments[2];
                $this->email = $arguments[3];
                $this->phone = $arguments[4];
                $this->photo = $arguments[5];
                $this->status = $arguments[6];
                $this->role = $arguments[7];
            }
        }
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getFirstname(): string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): void
    {
        $this->firstname = $firstname;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function setLastname(string $lastname): void
    {
        $this->lastname = $lastname;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): void
    {
        $this->password = $password;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }

    public function getPhoto(): string
    {
        return $this->photo;
    }

    public function setPhoto(string $photo): void
    {
        $this->photo = $photo;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getRole(): Role
    {
        return $this->role;
    }

    public function setRole(Role $role): void
    {
        $this->role = $role;
    }

    public function toStringWithFirstnameAndLastname()
    {
        return "(User) => id : " . $this->id . " , firstname : " . $this->firstname . " , lastname : " . $this->lastname;
    }

    public function __toString()
    {
        return $this->toStringWithFirstnameAndLastname() .
            " , phone : " . $this->phone . " , email : " . $this->email  . " , password : " . $this->password . " photo : " . $this->photo . " , Role : " . $this->role;
    }

    public function create(User $user): User
    {

        $query = "INSERT INTO users (firstname, lastname, email, password, photo, phone, status, role_id ) 
        VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

        $stmt = Database::get()->connect()->prepare($query);
        $stmt->execute([
            $user->getFirstname(),
            $user->getLastname(),
            $user->getEmail(),
            $user->getPassword(),
            $user->getPhoto(),
            $user->getPhone(),
            $user->getStatus(),
            $user->getRole()->getId()
        ]);

        $user->setId(Database::get()->connect()->lastInsertId());
        return $user;
    }
    public function getAll()
    {
        $query = "SELECT id, firstname, lastname,
         password, email, phone, photo, status, role_id FROM users;";
        $stmt = Database::get()->connect()->prepare($query);
        $stmt->execute();
        $users = $stmt->fetchAll(PDO::FETCH_CLASS, 'App\Models\User');
        return $users;
    }
}
