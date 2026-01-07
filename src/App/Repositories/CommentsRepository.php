<?php

namespace App\Repositories;

use App\Core\Config;
use App\Core\DataBase;
use App\Models\Comments;

class CommentsRepository
{
    private $data;

    public function __construct()
    {
        $config = Config::get_config();
        $this->data = new DataBase($config['database']);
    }
    public function get_comments_on_article($article_id)
    {
        $query = 'SELECT * from comments where article_id=:article_id';
        $params = [
            'article_id' => $article_id
        ];
        $result = $this->data->query($query, $params);
        return $result;
    }

    public function insert_comment(Comments $comment, $user_id, $article_id)
    {
        $query = 'INSERT into comments (user_id,body,article_id)
                                values (:user_id,:body,:article_id)';
        $params = [
            ':user_id' => $user_id,
            ':body' => $comment->get_comment_body(),
            ':article_id' => $article_id
        ];
        $result = $this->data->query($query,$params);
        return $result;
    }

    public function get_comments_count_on_article($article_id)
    {
        $query = 'SELECT count(*) as comm_count from comments where article_id=:article_id';
        $params = [
            'article_id' => $article_id
        ];
        $result = $this->data->query($query, $params);
        return $result[0]['comm_count'];
    }
}
