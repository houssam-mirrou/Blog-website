<?php

namespace App\Services;

use App\Repositories\CommentsLikesRepository;

class CommentsLikeServices {
    private $comment_like_repository;
    public function __construct()
    {
        $this->comment_like_repository = new CommentsLikesRepository();
    }
    public function get_comment_likes($comment_id)
    {
        return $this->comment_like_repository->get_comment_likes($comment_id);
    }
    public function update_comment_likes($comment_id, $user_id)
    {
        return $this->comment_like_repository->update_comment_likes($comment_id, $user_id);
    }
    public function if_user_like_comment($user_id,$comment_id)
    {
        return $this->comment_like_repository->if_user_like_comment($user_id,$comment_id);
    }

}