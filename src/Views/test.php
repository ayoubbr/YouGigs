<?php

use App\Models\Categorie;
use App\Models\Projet;
use App\Models\Tag;


// $tag = new Tag();
// $tag->create('kkk','ayoub');
// var_dump($tag->fetchAllTag());
// $categorie= new Categorie();
// $categorie->createcategorie('css1','lzkejf');
// $categorie->createcategorie('html5','base2');
// $categorie->updatecategorie(5,'go1','test9');
// $categorie->deletecategorie(8);
// var_dump($categorie->getAllcategorie());

$projet = new Projet();
// $projet->nameDiscriptionCategoriedgeeclientduree('projet5','qsfoij jekfhn',22,8);
// $projet->createprojet('css');
// var_dump($projet);
var_dump($projet->getAll());

// $categorie = new Categorie();
// $categorie->findbyname('css');
// var_dump($categorie->findbyname('go'));