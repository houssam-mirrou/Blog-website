<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Helpers;
use App\Core\Config;
use App\Core\DataBase;
use App\Core\Session;

class UpgradeRoleController extends Controller {
    public function index() {
        $this->view('upgrade-role' , [
            'title' , 'Upgrade Role'
        ]);
    }

    public function upgrade() {
        $email = $_SESSION['current_user']->get_email();
        $config = Config::get_config();
        $data = new DataBase($config['database']);
        if(Helpers::upgrade_reader_to_author($data,$email)){
            $current_user = AuthController::get_current_user($data,$email);
            Session::set_user($current_user);
            header('Location: /');
            exit();
        }
        else {
            echo 'error while updating the user';
        }
    }
}