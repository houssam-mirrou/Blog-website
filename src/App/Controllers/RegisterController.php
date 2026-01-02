<?php

namespace App\Controllers;

use App\Core\Controller;

class RegisterController extends Controller {
    public function index() {
        $this->view('register', [
            'title'=> 'Sign up'
        ]);
    } 
    public function create_account() {
        
    }
}