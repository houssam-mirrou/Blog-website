<?php

namespace App\Models;

class Report {
    private $reason;
    private $created_date;
    public function __construct($reason,$created_date)
    {
        $this->reason = $reason;
        $this->created_date = $created_date;
    }

    public function get_reason(){
        return $this->reason;
    }

    public function get_created_date(){
        return $this->created_date;
    }
}