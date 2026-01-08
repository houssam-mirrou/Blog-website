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
    public function get_article_categories_id($id){
        return $this->article_category_repository->get_article_categories_id($id);
    }

    public function delete_category_article_by_article_id($article_id){
        return $this->article_category_repository->delete_category_article_by_article_id($article_id);
    }
}