<?php
namespace App\Models;

use App\Core\Database;
use PDO;

abstract class Crud
{
    public function __construct()
    {
    }

    public function insert(string $table,array $data):int
    {
        $columns = implode(', ', array_keys($data));
        $values = implode(', ', array_fill(0, count($data), '?'));

        $sql = "insert into $table($columns) values ($values) RETURNING id";
        $stmt = Database::get()->connect()->prepare($sql);
         $stmt->execute(array_values($data));
        $lastId =$stmt->fetchColumn();
        return $lastId;
    }
    public function select(string $table,string $id_name,int $id):object
    {
        
        $sql = "SELECT * FROM $table WHERE $id_name = ?";
        $stmt = Database::get()->connect()->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->fetch(PDO::FETCH_OBJ);
    }
    public function selectAll(string $table):array
    {
        $sql = "SELECT * FROM $table";
        $stmt = Database::get()->connect()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }

    public function update(string $table,string $id_name,int $id,array $data):int
    {
        $setClause = implode(' = ?, ', array_keys($data)) . ' = ?';
        $sql = "UPDATE $table SET $setClause WHERE $id_name = ?";
        $stmt = Database::get()->connect()->prepare($sql);
        $stmt->execute(array_merge(array_values($data), [$id]));

        return $stmt->rowCount();
    }

    public function delete(string $table,string $id_name,int $id):int
    {
        $sql = "DELETE FROM $table WHERE $id_name = ?";
        $stmt = Database::get()->connect()->prepare($sql);
        $stmt->execute([$id]);

        return $stmt->rowCount();
    }
}