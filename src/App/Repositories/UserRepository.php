<?php

namespace App\Repositories;

use App\Core\DataBase;
use App\Core\Config;

class UserRepository {
    private $data;
    public function __construct()
    {
        $config = Config::get_config();
        $this->data = new DataBase($config['database']);
    }

    public function get_user_id($email){
        $query = 'SELECT * from users where email=:email';
        $params = [
            ':email'=>$email
        ];
        $result = $this->data->query($query,$params);
        if($result == []){
            return false;
        }
        return $result[0]['id'];
    }

    public function get_count_of_users(){
        $query = 'SELECT count(*) as number_of_users from users;';
        $result = $this->data->query($query);
        return $result[0]['number_of_users'];
    }

    public function get_user_by_id($id){
        $query = 'SELECT * from users where id=:id';
        $params = [
            ':id'=>$id
        ];
        $result = $this->data->query($query,$params);
        return $result[0];
    }
}