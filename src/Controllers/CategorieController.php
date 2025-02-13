<?php

namespace App\Controllers;

use App\Controller;
use App\Models\Categorie;

class CategorieController extends Controller
{
    private $categoryModel;

    public function __construct()
    {
        $this->categoryModel = new Categorie();
    }

    public function index()
    {
        return $this->categoryModel->getAllcategorie();
    }

    public function create()
    {
        try {
            $data = $this->validateCategoryData($_POST);

            $categoryId = $this->categoryModel->create($data);
        } catch (\Exception $e) {
            echo $e->getMessage();
        }
    }

    private function validateCategoryData($data)
    {
        $errors = [];

        $name = trim($data['name'] ?? '');
        if (empty($name)) {
            $errors[] = 'Category name is required';
        }

        $icon = trim($data['icon'] ?? '');
        if (empty($icon)) {
            $errors[] = 'Category icon is required';
        }

        $description = trim($data['description'] ?? '');
        if (empty($description)) {
            $errors[] = 'Category description is required';
        }

        if (!empty($errors)) {
            throw new \Exception(implode(', ', $errors));
        }

        return [
            'name' => $name,
            'icon' => $icon,
            'description' => $description
        ];
    }
}
