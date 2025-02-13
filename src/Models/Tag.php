<?php
namespace App\Models;

use RecursiveCallbackFilterIterator;

class Tag extends Crud{
    private string $name;
    private int $id;
    private string $description;

    public function __construct(){
      
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
 
    public function create($name,$description){
      $this->id= $this->insert('tags',['name'=>$this->name=$name,
       'description'=>$this->description = $description]);
    }
    public function deleteTag($id){
        $this->delete('tags','id',$this->id = $id);
    }
    public function updateTag($id,$name,$description){
        $this->update('tags','id',$id,[$this->name=$name,$this->description=$description]);
    }
    public function fetchAllTag(){return $this->selectAll('tags');}

    public function getTagNam(){return $this->name;}
    public function getidtag(){return $this->id;}
    public function getdescriptiontag(){return $this->description;}

    public function setTagNam($name){ $this->name=$name;}
    public function setidtag($id){ $this->id = $id;}
    public function setdescriptiontag($description){ $this->description = $description;}
    }

        
    
    

