<?php

namespace App;

class Controller
{

    protected function render($view, $data = [])
    {
        extract($data);
        // $layoutContent = $this->layoutContent();
        // $viewContent = $this->renderOnlyView($view);
        // return str_replace('{{content}}', $viewContent, $layoutContent);
        include "Views/$view.php";
    }

    protected function layoutContent()
    {
        ob_start();
        include_once __DIR__ . "/Views/Client/Layouts/main.php";
        return ob_get_clean();
    }

    protected function renderOnlyView($view)
    {
        ob_start();
        include_once __DIR__ . "/Views/Client/$view.php";
        return ob_get_clean();
    }
}
