<?php
namespace App\Models;
use App\Models\Crud;


class Projet extends Crud{
    private string $name ;
    private string $description;
    private categorie $categorie;
    private float $bidgee;
    private int $duree;
    private tag $tag;
    public function __construct(){
        $this->name;
        $this->description;
        $this->categorie=new Categorie;
        $this->bidgee;
        $this->duree;
        $this->tag = new Tag;

    }
    public function __call($name,$arguments){
        if($name = 'nameDiscriptionCategorieBidgee'){
            $this->name =$arguments[0];
            $this->description=$arguments[1];
            $this->categorie=$arguments[2];
            $this->tag=$arguments[3];
            $this->duree=$arguments[4];
        }
    }
    
    public function createprojet(){$this->insert('projet',[$this->name,$this->description,$this->categorie,$this->]);}

}