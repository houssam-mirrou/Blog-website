<?php

namespace App\Models;


abstract class User
{
    protected $first_name;
    protected $last_name;
    protected $email;
    protected $phone_number;
    protected $created_date;

    public function __construct($first_name,$last_name,$email,$phone_number,$created_date)
    {   
        $this->first_name=$first_name;
        $this->last_name=$last_name;
        $this->email=$email;
        $this->phone_number=$phone_number;
        $this->created_date=$created_date;
    }
    public function get_first_name() {
        return $this->first_name;
    }
    public function get_last_name() {
        return $this->last_name;
    }
    public function get_email() {
        return $this->email;
    }
    public function get_phone_number() {
        return $this->phone_number;
    }
    public function get_created_date() {
        return $this->created_date;
    }

}
