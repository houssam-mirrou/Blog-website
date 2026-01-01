<?php

namespace App\Controllers;

use App\Core\Controller;

class ExploreController extends Controller {
    public function index () {
        $this->view('explore', [
            'title' => 'Explore'
        ]);
    }
}