<?php

namespace App\Controllers\front;

use App\Controller;
use App\Models\Course;

class HomeController extends Controller
{

    public function index()
    {
        $courses = [
            new Course('My Third Course Entry', '2023'),
            new Course('My Second Course Entry', '2022'),
            new Course('My First Course Entry', '2021')
        ];
        $this->render('index', ['courses' => $courses]);
    }
}
