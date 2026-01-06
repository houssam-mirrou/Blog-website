<?php

namespace App\Services;

use App\Core\Functions;
use App\Models\Articles;
use App\Repositories\ArticleRepository;
use App\Services\ArticleCategoryServices;

class ArticleServices
{
    private $article_repository;
    private $article_category_services;
    private $category_service;
    public function __construct()
    {
        $this->article_repository = new ArticleRepository();
        $this->article_category_services = new ArticleCategoryServices();
        $this->category_service = new CategoryServices();
    }
    public function add_article($title, $body, $author_id, $category_ids)
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

        foreach ($category_ids as $cat_id) {
            $this->article_category_services->add_article_category($article_id, $cat_id);
        }
        return true;
    }
    public function get_count_of_articles_by_author($author_id)
    {
        return $this->article_repository->get_count_of_articles_by_author($author_id);
    }

    public function get_all_articles()
    {
        return $this->article_repository->get_all_articles();
    }
    public function delete_article_by_id($id)
    {
        return $this->article_repository->delete_article_by_id($id);
    }
    public function get_article_by_id($id)
    {
        return $this->article_repository->get_article_by_id($id);
    }
    public function get_article_categories_id($id)
    {
        return $this->article_category_services->get_article_categories_id($id);
    }
    public function get_article_categories($id)
    {
        $category_ids = $this->article_category_services->get_article_categories_id($id);
        $categories = [];
        foreach ($category_ids as $cat_id) {
            $result = $this->category_service->get_article_category_name($cat_id['category_id']);
            array_push($categories, $result);
        }
        return $categories;
    }

    public function update_article($title, $body, $author_id, $category_ids, $old_art_id)
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
        $this->delete_article_by_id($old_art_id);

        $article = new Articles($title, $body);

        $article_id = $this->article_repository->add_article($article, $author_id);

        foreach ($category_ids as $cat_id) {
            $this->article_category_services->add_article_category($article_id, $cat_id);
        }
        return true;
    }

    public function get_user_by_id($id){
        return $this->article_repository->get_user_by_id($id);
    }
}
