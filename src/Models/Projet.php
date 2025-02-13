<?php
namespace App\Models;
use App\Models\Crud;


class Projet extends Crud{
    private int $id;
    private string $name ;
    private User $client;
    private string $description;
    private Categorie $Categorie;
    private float $bidgee;
    private int $duree;
    private Tag $Tag;
    public function __construct(){
        // $this->name;
        // $this->description;
        $this->Categorie=new Categorie;
        // $this->bidgee;
        // $this->duree;
        // $this->Tag = new Tag;
        $this->client= new User;

    }
    public function __call($name,$arguments){
        if($name = 'nameDiscriptionCategoriedgeeclientduree'){
        $this->name =$arguments[0];
        $this->description=$arguments[1];
        // $this->Categorie=$arguments[2];
        // $this->Tag=$arguments[3];
        $this->duree=$arguments[2];
        // $this->client=$arguments[3];
        $this->bidgee=$arguments[3];

        }
    }
    
    public function createprojet(string $name_categorie) {
        $this->Categorie->findbyname($name_categorie);
        
        $this->id = $this->insert('projets', [
            'name' => $this->name,
            'description' => $this->description,
            'client_id' => $_SESSION['user']->getId(),
            'budget' => $this->bidgee,
            'duration' => $this->duree,
            'category_id' => $this->Categorie->getidcategorie() 
        ]);
    }
    public function getAll(){return $this->selectAll('projets');}

}