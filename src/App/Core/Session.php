<?php

namespace App\Core;

class Session
{
    public function __construct()
    {
        session_start();
    }

    public function destroy_session(){
        $_SESSION=[];
        unset($_SESSION);
        session_destroy();
    }

    public function set_user($user)
    {
        $_SESSION['current_user'] = $user;
    }
}
