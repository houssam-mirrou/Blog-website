<?php

namespace App\Models;

class Category {
    private $name;
    public function __construct($name)
    {
        $this->name=$name;
    }
    public function get_category_name(){
        return $this->name;
    }
}