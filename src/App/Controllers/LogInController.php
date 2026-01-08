<?php

namespace App\Controllers;
use App\Core\Controller;
use App\Core\DataBase;
use App\Core\Config;
use App\Core\Session;
use App\Models\Admin;
use App\Models\Author;
use App\Models\Reader;


class LogInController extends Controller
{
    public function index()
    {
        $this->view('login', [
            'title' => 'Sign In'
        ]);
    }

    public function sign_in()
    {
        if(isset($_SESSION['current_user'])){
            header('Location: /');
        }
        $email = $_POST['email'];
        $password = $_POST['password'];
        $data = DataBase::get_data_instance();
        $temp_user['email'] = $email;
        $temp_user['password'] = $password;
        $errors = AuthController::sign_in($data, $email, $password);
        if ($errors === true) {
            $user = AuthController::get_current_user($data, $email);
            $role = AuthController::get_role($data, $email);
            if ($role == 'admin') {
                $session_user = new Admin($user['first_name'], $user['last_name'], $user['email'], $user['phone_number'],$user['created_date']);
            } else if ($role == 'reader') {
                $session_user = new Reader($user['first_name'], $user['last_name'], $user['email'], $user['phone_number'],$user['created_date']);
            } else {
                $session_user = new Author($user['first_name'], $user['last_name'], $user['email'], $user['phone_number'],$user['created_date']);
            }
            Session::set_user($session_user);
            header('Location: /');
            exit();
        } else {
            $this->view('login', [
                'title' => 'Sign In',
                'errors' => $errors,
                'temp_user' => $temp_user
            ]);
        }
    }
}
