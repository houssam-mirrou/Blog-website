<?php

namespace App\Services;

use App\Core\Functions;
use App\Models\Category;
use App\Repositories\CategoryRepository;

class CategoryServices
{
    private $category_repositry;
    public function __construct()
    {
        $this->category_repositry = new CategoryRepository();
    }

    public function create_category($name, $admin_id)
    {
        $errors = [];
        if (empty($name)) {
            $errors['cat_exist'] = 'The category can\'t be empty.';
            return $errors;
        }
        if ($this->category_repositry->find_by_name($name)) {
            $errors['cat_exist'] = 'This Category has been already added';
            return $errors;
        }

        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));

        $category = new Category($name, $slug);

        return $this->category_repositry->add_category($category, $admin_id);
    }

    public function modify_category($id, $name)
    {
        $errors = [];
        if (empty($name)) {
            $errors['cat_exist'] = 'The category can\'t be empty.';
            return $errors;
        }
        if ($this->category_repositry->find_by_name($name)) {
            $errors['cat_exist'] = 'This Category has been already added';
            return $errors;
        }
        $slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '-', $name)));

        $category = new Category($name, $slug);

        return $this->category_repositry->modify_category($category, $id);
    }

    public function delete_category($id)
    {
        return $this->category_repositry->delete_category($id);
    }
    public function get_all_category()
    {
        return $this->category_repositry->get_all_categories();
    }
    public function get_article_category_name($id)
    {
        return $this->category_repositry->get_article_category_name($id);
    }
    public function get_artice_category_ids($article_id)
    {
        return $this->category_repositry->get_artice_category_ids($article_id);
    }
    public function get_article_category_name_explore($article_id)
    {
        $categories_ids = $this->get_artice_category_ids($article_id);
        $categories_names = [];
        
        foreach ($categories_ids as $cat_id) {
            $cat_name = $this->get_article_category_name($cat_id['category_id']);
            array_push($categories_names, $cat_name);
        }
        return $categories_names;
    }
}
