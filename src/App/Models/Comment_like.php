<?php

namespace App\Models;

class Comment_like {
    private $created_date;
    private $like_id;
    public function __construct($created_date,$like_id)
    {
        $this->created_date=$created_date;
        $this->like_id=$like_id;
    }

    public function get_created_date(){
        return $this->created_date;
    }

    public function get_like_id(){
        return $this->like_id;
    }
}