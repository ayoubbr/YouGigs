<?php

namespace App\Models;

use App\Core\Database;

class Role
{
    private int $id = 0;
    private string $name = "";
    private string $description = "";
    private string $badge = "";

    public function __construct() {}

    public function __call($name, $arguments)
    {
        if ($name == 'instanceWithName') {
            if (count($arguments) == 1) {
                $this->name = $arguments[0];
            }
        }

        if ($name == 'instanceWithAll') {
            if (count($arguments) == 3) {
                $this->name = $arguments[0];
                $this->description = $arguments[1];
                $this->badge = $arguments[2];
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

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getBadge(): string
    {
        return $this->badge;
    }

    public function setBadge(string $badge): void
    {
        $this->badge = $badge;
    }

    public function __toString()
    {
        $id = $this->id ?? 0;
        $name = $this->name ?? "";
        $description = $this->description ?? "";
        $badge = $this->badge ?? "";
        return "(Role) => id : " . $id . " , name : " . $name . " , description : " . $description . " , badge : " . $badge;
    }

    public function findByName(string $name)
    {
        $query = "SELECT id, name, description, badge FROM roles WHERE name = '" . $name . "';";
        $stmt = Database::get()->connect()->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchObject(Role::class);
        return $result;
    }

    public function findById(int $id): Role
    {
        $query = "SELECT id, name, description, badge FROM roles WHERE id = " . $id . ";";
        $stmt = Database::get()->connect()->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchObject(Role::class);
        return $result;
    }
}
