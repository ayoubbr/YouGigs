<?php

namespace App\Controllers;

use App\Controller;

class AdminController extends Controller
{

    public function index()
    {
        $this->render('Admin/layout', []);
    }

    public function dashboard()
    {
        $this->render('Admin/layout', []);
    }

    public function projects()
    {
        $this->render('Admin/projects', []);
    }

    public function users()
    {
        $this->render('Admin/users', []);
    }

    public function orders()
    {
        $this->render('Admin/orders', []);
    }

    public function categories()
    {
        $this->render('Admin/categories', []);
    }

    public function skills()
    {
        $this->render('Admin/skills', []);
    }

    public function settings()
    {
        $this->render('Admin/settings', []);
    }
}
