<?php

namespace App\Repositories;

use App\Core\Config;
use App\Core\DataBase;

class CommentsLikesRepository {
    private $data;
    public function __construct()
    {
        $this->data = DataBase::get_data_instance();
    }
    //user_id comment_id
    public function get_comment_likes($comment_id)
    {
        $query = 'SELECT count(*) as comment_likes from comment_likes where comment_id=:comment_id;';
        $params = [
            ':comment_id' => $comment_id
        ];
        $result = $this->data->query($query, $params);
        return $result[0]['comment_likes'];
    }

    public function if_user_like_comment($user_id,$comment_id)
    {
        $query = 'SELECT count(*) as user_like 
            from comment_likes where user_id=:user_id and comment_id=:comment_id';
        $params = [
            ':user_id' => $user_id,
            ':comment_id'=>$comment_id
        ];
        $result = $this->data->query($query, $params);
        return $result[0]['user_like'];
    }

    public function remove_user_like_comment($comment_id, $user_id)
    {
        $query = 'DELETE from comment_likes where comment_id=:comment_id and user_id=:user_id';
        $params = [
            ':comment_id' => $comment_id,
            ':user_id' => $user_id
        ];
        $result = $this->data->query($query, $params);
        return $result;
    }

    public function add_user_like_comment($comment_id, $user_id)
    {
        $query = 'INSERT into comment_likes (comment_id,user_id) 
                    values(:comment_id,:user_id)';
        $params = [
            ':comment_id' => $comment_id,
            ':user_id' => $user_id
        ];
        $result = $this->data->query($query,$params);
        return $result;
    }

    public function update_comment_likes($comment_id, $user_id)
    {
        $user_like = $this->if_user_like_comment($user_id,$comment_id);
        if ($user_like === 0) {
            return $this->add_user_like_comment($comment_id,$user_id);
        } else {
            return $this->remove_user_like_comment($comment_id, $user_id);
        }
    }

}