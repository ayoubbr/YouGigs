<?php

use App\Models\Crud;
use App\Models\User;

class Facture extends Crud{
    private int $id;
    private User $user;
    private int $duree;
    private string $date;
    private contrat $contrat;
}
