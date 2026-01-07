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

    public function get_number_of_reports($comment_id){
        $query = 'SELECT count(*) as report_count from comment_report where comment_id=:comment_id';
        $params = [
            ':comment_id'=>$comment_id
        ];
        $result = $this->data->query($query,$params);
        return $result[0]['report_count'];
    }

    public function get_user_id_on_comment($comment_id){
        $query = 'SELECT user_id from comment_report where comment_id=:comment_id';
        $params = [
            ':comment_id'=>$comment_id
        ];
        $result = $this->data->query($query,$params);
        return $result[0]['user_id'];
    }

    public function get_comment_report_reason($comment_id){
        $query = 'SELECT reason from comment_report where comment_id=:comment_id';
        $params = [
            ':comment_id'=>$comment_id
        ];
        $result = $this->data->query($query,$params);
        return $result[0]['reason'];
    }

}