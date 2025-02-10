<?php

namespace App\Models;

class Categorie extends Crud{
    private int $id;
    private string $name;
    private string $description;

    public function __constract(int $id,string $name,string $description){
        $this->id=$id;
        $this->name=$name;
        $this->description=$description;
    }

    public function createcategorie(){
       $this->id= $this->insert('categories',['name'=>$this->name,'description'=>$this->description]);
    }
    public function updatecategorie(){
        $this->update('categories','id',$this->id,['name'=>$this->name,'description'=>$this->description]);
    }
    public function deletecategorie(){
        $this->delete('categories','id',$this->id);
    }
//   getters/setters
    public function getnamecategorie(){return $this->name;}
    public function getidcategorie(){return $this->id;}
    public function getdescriptioncategorie(){return $this->description;}

    public function setnamecategorie($name){return $this->name = $name;}
    public function setidcategorie($id){return $this->id = $id;}
    public function setdescriptioncategorie($description){ $this->description= $description;}

}