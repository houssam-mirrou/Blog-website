<?php

namespace App\Models;

class Comments {
    private $body;
    private $created_date;
    public function __construct($body,$created_date='')
    {
        $this->body = $body;
        $this->created_date=$created_date;
    }
    public function get_comment_body(){
        return $this->body;
    }
    public function get_comment_created_date(){
        return $this->created_date;
    }
}