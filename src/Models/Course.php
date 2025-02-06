<?php

namespace App\Models;

class Course
{
    public $name;
    public $publishedYear;

    public function __construct($name, $publishedYear)
    {
        $this->name = $name;
        $this->publishedYear = $publishedYear;
    }
}
