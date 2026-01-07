<?php

namespace App\Repositories;

use App\Core\Config;
use App\Core\DataBase;

class ReportArticleRepository
{
    private $data;
    public function __construct()
    {
        $config = Config::get_config();
        $this->data = new DataBase($config['database']);
    }

    public function insert_article_report($user_id, $article_id,$reason,$body)
    {
        $query = 'INSERT into article_report (user_id,article_id,reason,body) 
                values (:user_id,:article_id,:reason,:body) ';
        $params = [
            ':user_id' => $user_id,
            ':article_id' => $article_id,
            ':body'=>$body,
            ':reason'=>$reason
        ];
        $result = $this->data->query($query, $params);
        return $result;
    }

    public function get_number_of_report_on_article($article_id){
        $query = 'SELECT count(*) as rep_num from article_report where article_id=:article_id';
        $params = [
            ':article_id'=>$article_id
        ];
        $result=$this->data->query($query,$params);
        return $result[0]['rep_num'];
    }

}
