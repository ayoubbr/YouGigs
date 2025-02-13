<?php

namespace App\Controllers\front;

use App\Controller;
use App\Models\Course;

class HomeController extends Controller
{

    public function index()
    {
        $this->render('test', []);
    }
}
