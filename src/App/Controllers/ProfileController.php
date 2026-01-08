<?php

namespace App\Controllers;

use App\Core\Controller;

class ProfileController extends Controller {
    public function index() {
        if(!isset($_SESSION['current_user'])){
            header('Location: /');
        }
        $this->view('profile',[
            'title'=>'Profile'
        ]);
    }
}