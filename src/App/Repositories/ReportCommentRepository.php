<?php

namespace App\Repositories;

use App\Core\Config;
use App\Core\DataBase;

class ReportCommentRepository {
    private $data ;
    public function __construct()
    {
        $config = Config::get_config();
        $this->data = new DataBase($config['database']);
    }

    public function insert_comment_report($user_id,$comment_id,$reason,$body){
        $query = 'INSERT into comment_report (user_id,comment_id,reason,body) 
                values (:user_id,:comment_id,:reason,:body) ';
        $params = [
            ':user_id'=>$user_id,
            ':comment_id'=>$comment_id,
            ':reason'=>$reason,
            ':body'=>$body
        ];
        $result = $this->data->query($query,$params);
        return $result;
    }

}