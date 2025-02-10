<?php
namespace App\Models;

use RecursiveCallbackFilterIterator;

class Tag extends Crud{
    private string $name;
    private int $id;
    private string $description;

    public function __construct(int $id,string $name,string $description){
        $this->id = $id;
        $this->name = $name;
        $this->description = $description;
    }
    public function create(){
      $this->id= $this->insert('tags',['name'=>$this->name,
       'description'=>$this->description]);
    }
    public function deleteTag(){
        $this->delete('tags','id',$this->id);
    }
    public function updateTag(){
        $this->update('tags','id',$this->id,[$this->name,$this->description]);
    }
    public function fetchAllTag(){
        $this->selectAll('tags');}

    public function getTagNam(){return $this->name;}
    public function getidtag(){return $this->id;}
    public function getdescriptiontag(){return $this->description;}

    public function setTagNam($name){ $this->name=$name;}
    public function setidtag($id){ $this->id = $id;}
    public function setdescriptiontag($description){ $this->description = $description;}
    }

        
    
    

