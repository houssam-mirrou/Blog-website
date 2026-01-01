<?php

namespace App\Controllers;

use App\Core\Controller;

class LogInController extends Controller {
    public function index () {
        $this->view('login',[
            'title' => 'Sign In'
        ]);
    }
}