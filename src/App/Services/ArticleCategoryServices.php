<?php

namespace App\Services;

use App\Repositories\ArticleCategoryRepository;

class ArticleCategoryServices {
    private $article_category_repository;
    public function __construct()
    {
        $this->article_category_repository = new ArticleCategoryRepository();
    }

    public function add_article_category($article_id, $cat_id){
        return $this->article_category_repository->add_cat_art($article_id, $cat_id);
    }
    public function get_article_categories($id){
        return $this->article_category_repository->get_article_categories($id);
    }
}