<?php

namespace App\Controllers;

use App\Core\Controller;

class CreateArticleController extends Controller {
    public function index() {
        $this->view('create-article',[
            'title'=>'Create Article'
        ]);
    }
}