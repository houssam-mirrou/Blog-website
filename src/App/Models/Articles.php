<?php

namespace App\Models;

class Articles {
    private $title;
    private $body;
    private $created_date;
    public function __construct($title,$body,$created_date)
    {   
        $this->title=$title;
        $this->body=$body;
        $this->created_date=$created_date;
    }
    public function get_title(){
        return $this->title;
    }
    public function get_body(){
        return $this->body;
    }
    public function get_created_date(){
        return $this->created_date;
    }
}