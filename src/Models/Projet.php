<?php
namespace App\Models;
use App\Models\Crud;


class Projet extends Crud{
    private string $name ;
    private string $discription;
    private categorie $categorie;
    private float $bidgee;
    private int $duree;
    private tag $tag;
    public function __construct(){}
    public function __call($name,$arguments){
        if($name = 'nameDiscriptionCategorieBidgee'){
            $this->name =$arguments[0];
            $this->discription=$arguments[1];
            $this->categorie=$arguments[2];
            $this->tag=$arguments[3];
            $this->duree=$arguments[4];
        }
    }

}