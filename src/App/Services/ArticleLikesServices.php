<?php

namespace App\Services;

use App\Repositories\ArticleLikesRepository;

class ArticleLikesServices
{
    private $article_like_repository;
    public function __construct()
    {
        $this->article_like_repository = new ArticleLikesRepository();
    }
    public function get_article_likes($article_id)
    {
        return $this->article_like_repository->get_article_likes($article_id);
    }
    public function update_article_likes($article_id, $user_id)
    {
        return $this->article_like_repository->update_article_likes($article_id, $user_id);
    }
    public function if_user_like_article($user_id,$article_id)
    {
        return $this->article_like_repository->if_user_like_article($user_id,$article_id);
    }
}
