<?php

namespace App\Repositories;

use App\Models\Category;
use App\Core\DataBase;
use App\Core\Config;

class CategoryRepository
{
    private $data;
    public function __construct()
    {
        $this->data = DataBase::get_data_instance();
    }

    public function get_all_categories_for_admin($admin_id)
    {
        $query = 'SELECT * from category where admin_id = :admin_id';
        $params = [
            'admin_id' => $admin_id
        ];
        $result = $this->data->query($query, $params);
        return $result;
    }

    public function add_category(Category $category, int $admin_id)
    {
        $query = 'INSERT into category(name,slug,admin_id) 
                               values (:name,:slug,:admin_id)';
        $params = [
            ':name' => $category->get_name(),
            ':slug' => $category->get_slug(),
            ':admin_id' => $admin_id
        ];
        $result = $this->data->query($query, $params);
        return $result;
    }

    public function modify_category(Category $category, $id)
    {
        $query = 'UPDATE category set name=:name , slug=:slug 
                               where id=:id';
        $params = [
            ':name' => $category->get_name(),
            ':slug' => $category->get_slug(),
            ':id' => $id
        ];
        $result = $this->data->query($query, $params);
        return $result;
    }

    public function find_by_name(string $name)
    {
        $query = 'SELECT * from category where name = :name';
        $params = [
            ':name' => $name
        ];
        $result = $this->data->query($query, $params);
        if ($result == []) {
            return false;
        }
        return true;
    }

    public function get_number_of_categories_by_admin($admin_id)
    {
        $query = 'SELECT count(*) as number_of_categories from category where admin_id=:admin_id';
        $params = [
            ':admin_id' => $admin_id
        ];
        $result = $this->data->query($query, $params);
        return $result[0]['number_of_categories'];
    }

    public function delete_category($id)
    {
        $query = 'DELETE from category where id=:id';
        $params = [
            'id' => $id
        ];
        return $this->data->query($query, $params);
    }

    public function get_all_categories()
    {
        $query = 'SELECT * from category;';
        $result = $this->data->query($query);
        return $result;
    }
    public function get_article_category_name($id)
    {
        $query = 'SELECT name from category where id=:id';
        $params = [
            ':id' => $id
        ];
        $result = $this->data->query($query, $params);
        return $result[0];
    }

    public function get_artice_category_ids($article_id) {
        $query = 'SELECT category_id from articles_categories 
                where article_id=:article_id ';
        $params = [
            ':article_id'=>$article_id
        ];
        $result = $this->data->query($query,$params);
        return $result;
    }
}
