<?php

namespace App\Controllers;

use App\Core\Controller;

class CommunityController extends Controller {
    public function index() {
        $this->view('community' , [
            'title' => 'Community'
        ]);
    }
}