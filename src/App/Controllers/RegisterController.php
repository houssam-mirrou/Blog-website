<?php

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Functions;
use App\Core\Config;
use App\Core\DataBase;
use App\Models\Reader;

class RegisterController extends Controller {
    public function index() {
        $this->view('register', [
            'title'=> 'Sign up'
        ]);
    } 
    public function create_account() {
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $email = $_POST['email'];
        $phone_number = $_POST['phone_number'];
        $password = $_POST['password'];
        $reconfirm_password = $_POST['reconfirm_password'];
        $config = Config::get_config();
        $data = new DataBase($config['database']);
        $reader = new Reader($first_name,$last_name,$email,$phone_number,'');
        $errors = AuthController::sign_up($data,$email,$password,$first_name,$last_name,$phone_number,$reconfirm_password);
        if($errors === true){
            header('Location: /login');
            exit();
        }
        else {
            $this->view('register',[
            'title'=> 'Sign up',
            'errors'=> $errors,
            'reader'=> $reader
        ]);
        }
    }
}