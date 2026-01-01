<?php

namespace App\Core;

use Exception;

class Controller {
    protected function view (string $view , array $data = []){

        extract($data);

        $view_file = __DIR__ . '/../Views/Pages/' . $view . '.php';
        $layout_file = __DIR__ . '/../Views/Layouts/main.php';

        if(!file_exists($view_file)){
            throw new Exception("View $view not found");
        }
        require $layout_file;
    }
}