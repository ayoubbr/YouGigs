<?php

use App\Models\Categorie;

class CategorieController{
    
    public function add(){
        $categorie = new Categorie('java','foiupeap');
        $categorie->createcategorie();
    }
}