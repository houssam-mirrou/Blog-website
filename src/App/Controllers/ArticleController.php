<?php

namespace App\Controllers;
use App\Core\Controller;

class ArticleController extends Controller {
    public function index() {
        $this->view('article',[
            'title'=> 'Article'
        ]);
    }
}