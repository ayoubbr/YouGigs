<?php

namespace App\Controllers;

use App\Controller;

class ProjectController extends Controller
{
    public function index()
    {
        $this->render('Shared/projects', []);
    }
}
