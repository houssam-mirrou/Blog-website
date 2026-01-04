<?php

namespace App\Models;

class Reader extends User {
    private $role;
    public function __construct($first_name, $last_name, $email, $phone_number,$created_date)
    {
        parent::__construct($first_name, $last_name, $email, $phone_number,$created_date);
        $this->role = 'reader';
    }
    public function get_role(){
        return $this->role;
    }
}