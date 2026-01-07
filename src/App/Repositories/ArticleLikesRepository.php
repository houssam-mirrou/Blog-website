<?php

namespace App\Repositories;

use App\Core\Config;
use App\Core\DataBase;

class ArticleLikesRepository
{
    private $data;
    public function __construct()
    {
        $config = Config::get_config();
        $this->data = new DataBase($config['database']);
    }

    public function get_article_likes($article_id)
    {
        $query = 'SELECT count(*) as article_likes from article_likes where article_id=:article_id;';
        $params = [
            ':article_id' => $article_id
        ];
        $result = $this->data->query($query, $params);
        return $result[0]['article_likes'];
    }

    public function if_user_like_article($user_id,$article_id)
    {
        $query = 'SELECT count(*) as user_like from article_likes where user_id=:user_id and article_id=:article_id';
        $params = [
            ':user_id' => $user_id,
            ':article_id'=>$article_id
        ];
        $result = $this->data->query($query, $params);
        return $result[0]['user_like'];
    }



    public function remove_user_like_article($article_id, $user_id)
    {
        $query = 'DELETE from article_likes where article_id=:article_id and user_id=:user_id';
        $params = [
            ':article_id' => $article_id,
            ':user_id' => $user_id
        ];
        $result = $this->data->query($query, $params);
        return $result;
    }

    public function add_user_like_article($article_id, $user_id)
    {
        $query = 'INSERT into article_likes (article_id,user_id) 
                    values(:article_id,:user_id)';
        $params = [
            ':article_id' => $article_id,
            ':user_id' => $user_id
        ];
        $result = $this->data->query($query,$params);
        return $result;
    }

    public function update_article_likes($article_id, $user_id)
    {
        $user_like = $this->if_user_like_article($user_id,$article_id);
        if ($user_like === 0) {
            return $this->add_user_like_article($article_id,$user_id);
        } else {
            return $this->remove_user_like_article($article_id, $user_id);
        }
    }
}
