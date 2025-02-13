<?php

namespace App\Models;

use App\Core\Database;
use PDO;

class Categorie extends Crud{
    private int $id;
    private string $name;
    private string $description;

    public function __constract(){
        
    }
    public function __call($name, $arguments)
    {
        if($name== "idnamedescription"){
            $this->id = $arguments[0] ;
            $this->name = $arguments[1];
            $this->description = $arguments[2] ;
        }
        if($name == "namedescription"){
            $this->name= $arguments[0];
            $this->description = $arguments[1];
        }
        if($name == "name"){
            $this->name= $arguments[0];
        }

    }

    public function createcategorie($name,$description){
       $this->id= $this->insert('categories',['name'=>$this->name=$name,'description'=>$this->description=$description]);
    }
    public function updatecategorie($id,$name,$description){
        $this->update('categories','id',$this->id = $id,['name'=>$this->name=$name,'description'=>$this->description = $description]);
    }
    public function deletecategorie($id){
        $this->delete('categories','id',$id);
    }

    public function findbyname($name) {
        $sql = "SELECT * FROM categories WHERE name = ?"; 
        $stmt = Database::get()->connect()->prepare($sql);
        $stmt->execute([$name]);
        
        $result = $stmt->fetch(PDO::FETCH_OBJ);
        
        if ($result) {
            $this->id = $result->id;
            $this->name = $result->name;
            $this->description = $result->description ?? null;
            return $this; 
        }
        
        return null; 
    }
    public function getAllcategorie(){return $this->selectAll('categories');}
//   getters/setters
    public function getnamecategorie(){return $this->name;}
    public function getidcategorie(){return $this->id;}
    public function getdescriptioncategorie(){return $this->description;}

    public function setnamecategorie($name){return $this->name = $name;}
    public function setidcategorie($id){return $this->id = $id;}
    public function setdescriptioncategorie($description){ $this->description= $description;}

}