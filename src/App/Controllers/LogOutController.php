<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Session;

class LogOutController extends Controller {
    public function log_out() {
        Session::destroy_session();
        header('Location: /');
        exit();
    }
}