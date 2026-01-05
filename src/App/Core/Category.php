<?php

namespace App\Core;

class Category {
    private $name;
    private $slug;
    private $id;

    public function __construct($name,$slug,$id = 0)
    {
        $this->name = $name;
        $this->slug = $slug;
        $this->id=$id;
    }

    public function get_name(){
        return $this->name;
    }

    public function get_slug(){
        return $this->slug;
    }

    public function get_id(){
        return $this->id;
    }
}