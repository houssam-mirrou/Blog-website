<?php

namespace App\Models;

class Author extends User {
    private $role;
    public function __construct($first_name, $last_name, $email, $phone_number)
    {
        return parent::__construct($first_name, $last_name, $email, $phone_number);
        $this->role = 'author';
    }
    public function get_role(){
        return $this->role;
    }
}