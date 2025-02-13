<?php

namespace App\Controllers;

use App\Controller;

class AdminController extends Controller
{

    private CategorieController $categoryController;

    public function __construct()
    {
        $this->categoryController = new CategorieController();
    }

    public function index()
    {
        $categories = $this->categoryController->index();
        $this->render('Admin/layout', ['categories' => $categories]);
    }
}
