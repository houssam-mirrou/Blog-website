<?php

namespace App\Services;

use App\Models\Articles;
use App\Repositories\ArticleRepository;
use App\Services\ArticleCategoryServices;

class ArticleServices
{
    private $article_repository;
    private $article_category_repository;
    public function __construct()
    {
        $this->article_repository = new ArticleRepository();
        $this->article_category_repository = new ArticleCategoryServices();
    }
    public function add_article($title, $body, $author_id,$category_ids)
    {
        $errors = [];
        if (empty($title)) {
            $errors['title'] = 'The article must have a title';
        }
        if (empty($body)) {
            $errors['title'] = 'The article must have a title';
        }
        if ($errors !== []) {
            return $errors;
        }

        $article = new Articles($title, $body);

        $article_id = $this->article_repository->add_article($article, $author_id);

        foreach($category_ids as $cat_id){
            $this->article_category_repository->add_article_category($article_id,$cat_id);
        }
        return true;
    }
    public function get_count_of_articles_by_author($author_id){
        return $this->article_repository->get_count_of_articles_by_author($author_id);
    }

    public function get_all_articles(){
        return $this->article_repository->get_all_articles();
    }
}
