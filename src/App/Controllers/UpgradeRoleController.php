<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Helpers;
use App\Core\Config;
use App\Core\DataBase;
use App\Core\Functions;
use App\Core\Session;
use App\Models\Author;

class UpgradeRoleController extends Controller {
    public function index() {
        if(!isset($_SESSION['current_user'])){
            header('Location: /');
        }
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
            $user = new Author($current_user['first_name'],$current_user['last_name'],$current_user['email'],$current_user['phone_number'],$current_user['created_date']);
            unset($_SESSION['current_user']);
            $_SESSION['current_user'] = $user;
            Session::set_user($user);
            header('Location: /');
            exit();
        }
        else {
            echo 'error while updating the user';
        }
    }
}