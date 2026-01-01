<?php

namespace App\Controllers;

use App\Core\Controller;

class ContactController extends Controller {
    public function index() {
        $this->view('contact',[
            'title'=>'Contact Us'
        ]);
    }
}