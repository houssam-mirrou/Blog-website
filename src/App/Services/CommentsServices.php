<?php

namespace App\Services;

use App\Models\Comments;
use App\Repositories\CommentsRepository;

class CommentsServices {
    private $comments_repositry;
    public function __construct()
    {
        $this->comments_repositry =new CommentsRepository();
    }

    public function get_comments_on_article($article_id){
        return $this->comments_repositry->get_comments_on_article($article_id);
    }

    public function insert_comment($body, $user_id, $article_id){
        if(empty($body)){
            $errors['comment-body']='The body must have some characters';
            return $errors;
        }
        $comment = new Comments($body);
        $result = $this->comments_repositry->insert_comment($comment,$user_id,$article_id);
        return $result;
    }
}