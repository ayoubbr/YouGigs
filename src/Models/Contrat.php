<?php

use App\Models\Crud;
use App\Models\User;

class Contrat extends Crud{
    private int $id;
    private string $contenu;
    private user $freelance;
    private user $client ;
    private string $date;

    public function __construct(int $id,string $contenu,User $freelance, User $client ,string $date) {
        $this->id = $id;
        $this->contenu = $contenu;
        $this->freelance = $freelance;
        $this->client = $client;
        $this->date = $date;
    }

public function create(){
    $this->id=$this->insert('contrats',[$this->contenu,$this->freelance,$this->client]);
}
public function uddateContrat(){
    $this->id =$this->update('contrats','id',$this->id,[$this->contenu,$this->freelance,$this->client]);
}

}